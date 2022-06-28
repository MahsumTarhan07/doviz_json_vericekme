<?php


$jsonVeri = file_get_contents("https://finans.truncgil.com/today.json");
$veri = json_decode($jsonVeri, 1);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canlı Dövizim</title>
</head>
<body>
    <!--Normalede Döngü halinde yapbilridik ama kısa ve oz olsun diye yapmadık -->
    <div>Güncelmeme Vakti : <?php  $veri["Update_Date"] ?> </div>
    <table>
        <tr>
            <td>Doviz</td>
            <td>Alış</td>
            <td>Satış</td>
            <td>Değişim</td>
        </tr>
        <tr>
            <td> Dolar</td>
            <td> <?php echo $veri["USD"] ["Alış"]; ?> </td>
            <td> <?php echo $veri["USD"] ["Satış"]; ?> </td>
            <td> <?php echo $veri["USD"] ["Değişim"]; ?> </td>
            <td> <?php echo $veri["USD"] ["Tür"]; ?> </td>
        </tr>
        <tr>
            <td> EURO</td>
            <td> <?php echo $veri["EUR"] ["Alış"]; ?> </td>
            <td> <?php echo $veri["EUR"] ["Satış"]; ?> </td>
            <td> <?php echo $veri["EUR"] ["Değişim"]; ?> </td>
            <td> <?php echo $veri["EUR"] ["Tür"]; ?> </td>
        </tr <tr>
            <td> GBP</td>
            <td> <?php echo $veri["GBP"] ["Alış"]; ?> </td>
            <td> <?php echo $veri["GBP"] ["Satış"]; ?> </td>
            <td> <?php echo $veri["GBP"] ["Değişim"]; ?> </td>
            <td> <?php echo $veri["GBP"] ["Tür"]; ?> </td>
        </tr>

    </table>
    
</body>
</html>