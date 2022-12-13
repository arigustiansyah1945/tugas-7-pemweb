<?php
  extract($_POST);
  if(!isset($nama) && !isset($npm) && !isset($nilai))
    die();

  $abjad= "Tidak Mungkin";
  $predikat = "Tidak Mungkin";
  if($nilai<0);
  else if($nilai<41){
    $abjad="E";
    $predikat="Sangat Tidak Memuaskan";
  }
  else if($nilai<56){
    $abjad="D";
    $predikat="Tidak Memuaskan";
  }
  else if($nilai<61){
    $abjad="C";
    $predikat="Cukup";
  }
  else if($nilai<66){
    $abjad="BC";
    $predikat="Lebih Dari Cukup";
  }
  else if($nilai<71){
    $abjad="B";
    $predikat="Baik";
  }
  else if($nilai<81){
    $abjad="AB";
    $predikat="Sangat Baik";
  }
  else if($nilai<=100){
    $abjad="A";
    $predikat="Sempurna";
  }
?>

<html>
<head>
  <title>
    Hasil Konversi
  </title>
</head>
<body>
  <p>Nama : <?=$nama?></p>
  <p>Nilai Angka: <?=$nilai?></p>
  <p>Nilai Huruf : <?=$abjad?></p>
  <p>Predikat : <?=$predikat?></p>
  <button onclick="Back()">Kembali</button>
</body>
<script>
  function Back(){
    window.location="index.php";
  }
</script>
</html>