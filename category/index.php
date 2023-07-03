<?php
    require_once "pdo.php";
    $categories = getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div>
            <h3>List Categories</h3>
            <a href="add.php" class="btn btn-success" style="margin-right: 5px;">Create</a>
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 1;
                foreach($categories as $category) {
                    echo "<tr>";
                    echo "<td>" . $stt++ . "</td>";
                    echo "<td>" . $category['id'] . "</td>";
                    echo "<td>" . $category['name'] . "</td>";
                    echo "<td>";
                    echo "<form id='delete_" . $category['id'] . "' action='delete.php' method='POST' style='display:flex'>";
                    echo "<a href='./edit.php?id=" . $category['id'] . "' class='btn btn-dark' style='margin-right: 5px'>Edit</a>";
                    echo "<input type='hidden' value='" . $category['id'] . "' name='id'>";
                    echo "<a class='btn btn-dark' onclick='confirmDelete(" . $category['id'] . ")'>Delete</a>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>  
    </div>
    <script>
        function confirmDelete(id) {
            let result = confirm('Are you sure?');
            if (result === true) {
                document.getElementById(`delete_${id}`).submit();
            }
        }
    </script>
</body>
</html>
