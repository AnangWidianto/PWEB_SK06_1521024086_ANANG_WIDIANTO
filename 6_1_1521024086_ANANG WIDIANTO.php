<!DOCTYPE html>
<hmtl>
    <head>
        <title>LINGKARAN</title>
    </head>
    <body>
      <?php 
        @$jari_jari = $_GET['jari-jari'];
        @$diameter = 2 * $jari_jari; 
        @$luas = 22/7 * $jari_jari * $jari_jari;
        @$keliling = 2 * 22/7 * $jari_jari;
        @$volume = 4/3 * 22/7 * $jari_jari * $jari_jari * $jari_jari;
      ?>
        <form method="GET">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Diameter = ".$diameter." cm<br/>";
                echo "Luas Lingkaran = ".$luas." cm^2<br/>";
                echo "Keliling Lingkaran = ".$keliling." cm <br/>";
                echo "Volume Lingkaran = ".$volume." cm^3<br/>";
            ?>
        </form>
    </body>
</hmtl>