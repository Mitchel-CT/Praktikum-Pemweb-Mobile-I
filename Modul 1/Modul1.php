<?php
      $names= ["Kevin Rui", "Uzumaki Kejer", "Evan Yeager", "Abigael", "Pratama"];
        function Konsonan($kalimat) {
        $jumlah = strlen($kalimat)-substr_count($kalimat, ' ');
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);
  
        return $count;
          }

        function Vokal($kalimat) {
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);

        return $count;
          }

        function jumlahTanpaSpasi($kalimat){
        return strlen($kalimat) - substr_count($kalimat, ' ');
          }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemrograman Web dan Mobile I</title>
</head>
<body>
      <p> Pemrograman Web dan Mobille I </p>
      <p> Nama: Mitchel C.T Singaraca </p>
      <p> NIM: 193020503041 </p>
      <p> Modul I </p>
      <p>=========================================</p>
      <?php foreach ($names as $name) :  ?>
      <p>Nama: <?php echo $name."<br>"; ?></>
      <p>Jumlah Huruf: <?php echo jumlahTanpaSpasi($name)."<br>"; ?></p>
      <p>Jumlah kata: <?php echo str_word_count($name)."<br>"; ?></p>
      <p>Kebalikan Nama: <?php echo strrev($name)."<br>"; ?></p>
      <p>Vokal: <?= Vokal(  $name);  ?></p>
      <p>Konsonan: <?= Konsonan( $name);  ?></p>
      <p>=========================================</p>
      <?php endforeach; ?>
      
</body>
</html>