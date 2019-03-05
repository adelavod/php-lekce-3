<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>

<br>

<div class="container col-md-4">

    <form action="login.php" method="POST">
        <div class="form-group">
            <label style="color: teal">Login:</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="login">

        </div>
        <div class="form-group">
            <label style="color: teal" for="exampleInputPassword1">Password</label>
            <input type="password" name="heslo"  class="form-control" id="exampleInputPassword1" placeholder="password">
        </div>
        <input type="submit" name="submit" value="login"
<br>
    </form>


    <?php
 //pokud se přihlásí admin se správným heslem, vypíše se SESSION a zobrazí se odkaz na admin.php
$spravnylogin = "admin";
$spravneheslo = "top-secret";

if (isset($_POST['login']) && (isset($_POST['heslo'])))
{
    if($_POST['login']==($spravnylogin) && ($_POST['heslo']==$spravneheslo))
{
    $_SESSION =
        ['jmeno'=>'admin',
            'heslo'=>'top-secret',
            'data'=>['Datum registrace:'=>'2.4.2018',
                'Souhlas s podmínkami' => 'ANO',
                'Počet objednávek' => '23']];

    echo "<a style='color: teal':  href='admin.php'><br>Pokračovat do administrace.</a>";}
    else {echo "<a><br>Chybné jméno nebo heslo.</a>";}
}

    ?>



</div>
</body>
</html>