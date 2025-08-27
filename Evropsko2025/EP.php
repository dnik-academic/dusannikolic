<?php
$ime=$_POST['ime'];
$LAT1=$_POST['LAT1'];
$TUR1=$_POST['TUR1'];

$SER1=$_POST['SER1'];
$EST1=$_POST['EST1'];

$CZR1=$_POST['CZR1'];
$POR1=$_POST['POR1'];


$GB1=$_POST['GB1'];
$LIT1=$_POST['LIT1'];

$MNE1=$_POST['MNE1'];
$GER1=$_POST['GER1'];

$SWE1=$_POST['SWE1'];
$FIN1=$_POST['FIN1'];



$GEO1=$_POST['GEO1'];
$ESP1=$_POST['ESP1'];

$BIH1=$_POST['BIH1'];
$CYP1=$_POST['CYP1'];

$GRE1=$_POST['GRE1'];
$ITA1=$_POST['ITA1'];




$ISR1=$_POST['ISR1'];
$ISL1=$_POST['ISL1'];

$BEL1=$_POST['BEL1'];
$FRA1=$_POST['FRA1'];

$SLO1=$_POST['SLO1'];
$POL1=$_POST['POL1'];



$TUR2=$_POST['TUR2'];
$CZR2=$_POST['CZR2'];

$EST2=$_POST['EST2'];
$LAT2=$_POST['LAT2'];

$POR2=$_POST['POR2'];
$SER2=$_POST['SER2'];



$GER2=$_POST['GER2'];
$SWE2=$_POST['SWE2'];

$LIT2=$_POST['LIT2'];
$MNE2=$_POST['MNE2'];

$FIN2=$_POST['FIN2'];
$GB2=$_POST['GB2'];




$ITA2=$_POST['ITA2'];
$GEO2=$_POST['GEO2'];

$CYP2=$_POST['CYP2'];
$GRE2=$_POST['GRE2'];

$ESP2=$_POST['ESP2'];
$BIH2=$_POST['BIH2'];




$ISL2=$_POST['ILS2'];
$BEL2=$_POST['BEL2'];

$FRA2=$_POST['FRA2'];
$SLO2=$_POST['SLO2'];

$POL2=$_POST['POL2'];
$ISR2=$_POST['ISR2'];





$CZR3=$_POST['CZR3'];
$EST3=$_POST['EST3'];

$LAT3=$_POST['LAT3'];
$SER3=$_POST['SER3'];

$TUR3=$_POST['TUR3'];
$POR3=$_POST['POR3'];




$LIT3=$_POST['LIT3'];
$GER3=$_POST['GER3'];

$GB3=$_POST['GB3'];
$SWE3=$_POST['SWE3'];

$MNE3=$_POST['MNE3'];
$FIN3=$_POST['FIN3'];



$GEO3=$_POST['GEO3'];
$GRE3=$_POST['GRE3'];

$ESP3=$_POST['ESP3'];
$CYP3=$_POST['CYP3'];

$BIH3=$_POST['BIH3'];
$ITA3=$_POST['ITA3'];




$SLO3=$_POST['SLO3'];
$BEL3=$_POST['BEL3'];

$ISR3=$_POST['ISR3'];
$FRA3=$_POST['FRA3'];

$POL3=$_POST['POL3'];
$ISL3=$_POST['ISL3'];


$date_pressed = date(DATE_RFC850);

$data=$ime.",".$LAT1.",".$TUR1.",".$SER1.",".$EST1.",".$CZR1.",".$POR1.",".$GB1.",".$LIT1.",".$MNE1.",".$GER1.",".$SWE1.",".$FIN1.",".$GEO1.",".$ESP1.",".$BIH1.",".$CYP1.",".$GRE1.",".$ITA1.",".$ISR1.",".$ISL1.",".$BEL1.",".$FRA1.",".$SLO1.",".$POL1.",".$TUR2.",".$CZR2.",".$EST2.",".$LAT2.",".$POR2.",".$SER2.",".$GER2.",".$SWE2.",".$LIT2.",".$MNE2.",".$FIN2.",".$GB2.",".$ITA2.",".$GEO2.",".$CYP2.",".$GRE2.",".$ESP2.",".$BIH2.",".$ISL2.",".$BEL2.",".$FRA2.",".$SLO2.",".$POL2.",".$ISR2.",".$CZR3.",".$EST3.",".$LAT3.",".$SER3.",".$TUR3.",".$POR3.",".$LIT3.",".$GER3.",".$GB3.",".$SWE3.",".$MNE3.",".$FIN3.",".$GEO3.",".$GRE3.",".$ESP3.",".$CYP3.",".$BIH3.",".$ITA3.",".$SLO3.",".$BEL3.",".$ISR3.",".$FRA3.",".$POL3.",".$ISL3.",".$date_pressed;

$file="EP.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

?>

<html>
    <head>
        <title>Hvala!</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="questionnairestyle.css">
        <style>
    body {
  
    background-color: rgba(255,255,255,0.9);
    background-blend-mode: lighten;
    font-size: 100%;
    font-weight: bold;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
         
    table, th, td {
        border:1px solid black;
        padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 20px;

    }
      </style> 
    Hvala! <br>
    <p> <a href="https://dusannikolic.com/OLY/poeni.html">Poeni</a> </p>
    <p> <a href="https://dusannikolic.com/OLY/kosarka.html">Po&ccaron;etna</a> </p>

</head>
<body>
</body>
</html>