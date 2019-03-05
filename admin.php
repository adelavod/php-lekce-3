<!DOCTYPE html>
<html lang="en">
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

    <?php
    session_start();

    if (isset($_SESSION['jmeno']))
    {
        if($_SESSION['jmeno']=="admin")

          {echo "Vítejte, "; echo($_SESSION['jmeno']); echo "e."; ?>
           <hr>

         <table class="table table-bordered table-sm table-info">
        <tbody>
        <?php
        foreach ($_SESSION['data']as $klic => $hodnota)
        {echo "<tr>
<td>$klic</td>
<td>$hodnota</td>
</tr>";}
        ?>
    </tbody>
    </table>
           <br>

         <a class="btn btn-outline-dark" href="logout.php" role="button">Odhlásit</a>
        <?php
           }

    else
    {echo"Uživatel nepřihlášen.";} }

    else {echo "Uživatel nepřihlášen.";}
    ?>





</div>
</body>
</html>



