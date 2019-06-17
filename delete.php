<?php
        //connect to the db
        $conn=mysqli_connect("localhost","root","","may_sist");
        //check if the connection was succefull
if (!$conn){
    echo "connection failed";
}else{
   // proceed to dellting
    //start by checking if the delete has been click
    if (isset($_GET['id_yangu'])){
        $receive_id=$_GET['id_yangu'];
        //create the delete query
        $deleteQuery="DELETE  FROM majina WHERE id='$receive_id'";
        //complete by finally deleting
        $delete=mysqli_query($conn,$deleteQuery);
        //checking if delete was succeessfuly
        if(!$delete){
            echo "deliting failed";
        }else{
            echo "record deleted";
            header('location:ViewUsers.php');
        }
    }
}

?>
