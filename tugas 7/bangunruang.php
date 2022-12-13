<html>
    <head>
        <title>Menghitung Luas, Keliling dan Volume Balok</title>
    </head>
    <body>
        <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        if(isset($_POST['submit'])){ 
            $panjang = $_POST['p']; 
            $lebar = $_POST['l']; 
            $tinggi = $_POST['t']; 
            $luas = 2*(($panjang*$lebar) + ($panjang*$tinggi) + ($lebar*$tinggi)); 
            $keliling = 4*($panjang + $lebar + $tinggi); 
            $volume = $panjang*$lebar*$tinggi;}?>

        <form action="" method="POST"><table border="0">
            <tr>
                <td>Panjang</td>
                <td><input type="text" name="p" value="<?php echo $panjang;?>"></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td><input type="text" name="l" value="<?php echo $lebar;?>"></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="text" name="t"  value="<?php echo $tinggi;?>"></td></tr>
                <tr><td>Luas</td><td><input type="text" name="luas"  value="<?php echo $luas;?>"> cm<sup>2</sup></td>
            </tr>
            <tr>
                <td>Keliling</td>
                <td><input type="text" name="keliling"  value="<?php echo $keliling;?>"> cm</td>
            </tr>
            <tr>
                <td>Volume</td>
                <td><input type="text" name="volume"  value="<?php echo $volume;?>"> cm<sup>3</sup></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </form>
</body>
</html>