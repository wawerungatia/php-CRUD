<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <div class="save_div">
        <form action="saveUserProcess.php" method="get">
            <input type="text" placeholder="enter name" name="x" required class="inputs"><br>
            <input type="email" placeholder="enter email" name="y" required class="inputs"><br>
            <input type="password" placeholder="enter password" name="z" required class="inputs"><br>
            <input type="submit" value="save" name="btn_save" class="sbtn"><br>
            <a href="ViewUsers.php" class="vlink">view user </a><br>
        </div>
</form>
</body>
</html>
