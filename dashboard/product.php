<?php require("../functions/functions.php"); 
      	if(isset($_SESSION['users']['id'])){
            if ($_SESSION['users']['role']==0){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <table>
        <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>price</th>
                <th>photo</th>
                <th></th>
                <th></th>
                <th ><a href="./index.php">Go Back</a></th>
                <th><a href="add-product.php">Add</a></th>
        </thead>
 
    </table>

</body>
</html>

<?php }} ?>
