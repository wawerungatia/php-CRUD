<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>          <div class="save_div">
            <form action="updateProcess.php" method="post">
                <?php
                if (isset($_GET['jina_mine'])){
                    $id=$_GET['id_mine'];
                    $name=$_GET['jina_mine'];
                    $email=$_GET['arafa_mine'];
                    $password=$_GET['siri_mine'];
                }
                ?>
                <input type="text" name="x" value="<?php echo $id;?>" hidden class="inputs"><br>
                <input type="text" name="y" value="<?php echo $name;?>" class="inputs"><br>
                <input type="email" name="z" value="<?php echo $email;?>" class="inputs" ><br>
                <input type="text" name="pwd" value="<?php echo $password;?>" class="inputs"><br>
                <input type="submit" value="update" name="btn_update" class="sbtn"><br>
                <a href="saveUser.php" class="vlink">Back</a><br>



            </form>
                </div>
</body>
</html>
