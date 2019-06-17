<?php
if (isset($_GET['btn_save'])){
    $inputedName=$_GET['x'];
    $inputedemail=$_GET['y'];
    $inputedpassword=$_GET['z'];
//    to save data connect to the db
    $conn=mysqli_connect("localhost","root","","may_sist");
//    check if the connection was successful
    if (!$conn){
        echo "connection failed";
    }else{
//        proceed to save data to the db
//        start by creating the insert query
        $insertQuery="INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputedName','$inputedemail','$inputedpassword')";
//        check if the insert query is correct
        if (!$insertQuery){
            echo "Error on the insert query";
        }else{
//            proceed to finally write the data to your db
            $ingiza=mysqli_query($conn,$insertQuery);
            //check if the data was saved suceessfully
            if (!$ingiza){
                echo "saving failed";
            }else{
                echo "saved successfully";
                header('location:saveUser.php');
            }
        }
    }
}
?>

































































