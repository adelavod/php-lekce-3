<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>


<div class="container">

    <?php

    $soucetznamek = 0;
    $pocetznamek = 0;

    $predmety = [
        'zeměpis' => 1,
        'dějepis' => 2,
        'fyzika' => 3,
        'přírodopis' => 1
    ];
    ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Předmět</th>
            <th>Známka</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
foreach ($predmety as $predmet => $znamka)
            {
            ?>
            <th><?php echo $predmet ?></th>
            <th><?php echo $znamka ?></th>
        </tr>
        <?php } ?>

        </tbody>
    </table>

    <?php

    $soucetznamek += $znamka;
    $pocetznamek ++ ?>

    Průměr: <?php $soucetznamek / $pocetznamek   ?>

</div>
</body>
</html>
