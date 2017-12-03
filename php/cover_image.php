<?php 
$msg = "";

if (isset($_POST['upload'])) {
    $target = "img/covers/".basename($_FILES['image']['name']);
    
    $image = $_FILES['image']['name'];

    $sql_image = "INSERT INTO publications (image) VALUES ('$image')";
    
    $prepared = $conn->prepare($sql_image);
    $conn->prepare($sql_image)->execute();
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "image uploaded";
    }  else {
        $msg = "There was a problem uploading image";
    }
}
?>