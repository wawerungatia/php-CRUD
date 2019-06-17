<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<a href="saveUser.php" class="btn btn-primary adlink fixed-bottom">add users</a>
        <table class="table table-hover table-danger">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>Delete</th>
                <th>update</th>
            </tr>
            <?php
            //connect to the db
            $conn=mysqli_connect("localhost","root","","may_sist");
            // check if the connection is successful
            if (!$conn){
                echo "connection failed";
            }else{
                //proceede to fetch data from the database
                //start by creating the select querry
                $selectQuery="SELECT * FROM majina";
                //check if the select query is correct
                if(!$selectQuery){
                    echo "eerror on the select query";
                }else{
                   // echo "proceede to fetch data";
                    $fetch=mysqli_query($conn,$selectQuery);
                    while($row=mysqli_fetch_assoc($fetch)){
                        extract($row);
                        echo "<tr>
                                <td>$id</td>
                                <td>$jina</td>
                                <td>$arafa</td> 
                                <td>$siri</td>                           
                                <td>
                                
                                 <div class='container'>
  
  <!-- Button to Open the Modal -->
  <button type='button' class='btn btn-danger' data-toggle='modal' data-target=#myModal>
    Delete
  </button>

  <!-- The Modal -->
  <div class='modal fade' id='myModal'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title mdlttl'>deliting!!!</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body mdlttl'>
          Are you sure you want to delete????
        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-dismiss='modal'>No</button>
          <a href='delete.php?id_yangu=$id' class='btn btn-danger'>Yes</a>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

                                 </td>
                                
                                
                                <td><a href='update.php?id_mine=$id&jina_mine=$jina&arafa_mine=$arafa&siri_mine=$siri' class='btn btn-primary'>update</a> </td>

                                </tr>";
                    }
                }
            }

            ?>

        </table>

</body>
</html>



















