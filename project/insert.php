<?php
include 'db.php';
if(isset($_POST['upload'])){
    $TITLE = $_POST['title'];
    $PRICE = $_POST['price'];
    $Accessories = $_POST['accessories'];
    $PAccessories = $_POST['paccessories'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);
    mysqli_query($con,"INSERT INTO `table`( `Title`, `Price`, `Accessories`,'Price_of_Accessories',`Image`) VALUES ('$TITLE','$PRICE','$Accessories','$PAccessories','$img_des')");
    header("location:index.php");
};
?>