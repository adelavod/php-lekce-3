<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<?php
        $radek = 1;
        $pocetRadku = 5;
?>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Číslo řádku</th>
                <th>Počet řádků</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo "$radek" ?></td>
            <td><?php echo "$pocetRadku" ?></td>
        </tr>
        <?php

        while ($radek < $pocetRadku){
            $radek = $radek + 1;
            ?>
            <tr>
                <td><?php echo $radek; ?></td>
                <td><?php echo $pocetRadku; ?></td>
            </tr>
        <?php }; ?>

        <?php
        $dny =  ['pondělí', 'úterý', 'středa'];
        foreach ($dny as $den) {
        echo "$den, ";}
        ?>


        </tbody>
    </table>
</div>
</body>
</html>

