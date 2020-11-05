<?php
include("csv.php") ;
$csv = new csv();

if(isset($_POST['submit'])){
    $emptyfile = $_FILES['file'];
    if(!empty($emptyfile)){
    $csv->import($_FILES['file']['tmp_name']); 
     }else{
        echo "No csv to import";
    }
  
}
if (isset($_POST['export'])){
    $csv->export();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>CSV</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button  type="submit" name="submit" >Import</button>
    </form>
<br>
    <form method="post" >
    <button type="submit" name="export">Export</button>
    </form> 
</body>
</html>