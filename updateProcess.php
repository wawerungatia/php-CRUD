            <?php
            if(isset($_POST['btn_update'])){
                $received_id=$_POST['x'];
                $received_name=$_POST['y'];
                $received_email=$_POST['z'];
                $received_password=md5($_POST['pwd']);
                //connect to the db

        $conn=mysqli_connect("localhost","root","","may_sist");
        // check if the connedction is successfull
                if (!$conn){
                    echo "connection failed";
                }else{
                    //proceede to th]e db
                   // stsrt by crating the updaate query
                    $updateQuery="UPDATE majina SET jina='$received_name',arafa='$received_email',siri='$received_password' WHERE id=$received_id";
                    //check if the query is correct
                    if (!$updateQuery){
                        echo "error on the update qurey";
                    }else{
                        //proceeding to update
                        $update=mysqli_query($conn,$updateQuery);
                       // checking if update iko sawa
                        if (!$update){
                            echo "updating failed";
                        }else{
                            echo "update is done savely";
                            header('location:ViewUsers.php');
                        }
                    }
                }

            }
            ?>