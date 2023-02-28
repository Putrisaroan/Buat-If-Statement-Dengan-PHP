<!DOCTYPE html>
<html lang="en">

  <head>

    <title>TUGAS PEMOGRAMAN</title>
    
    <link rel="stylesheet" href="style.css">
  
  </head>

  <body>

    <ul>
	    <li><a href="progam1.php">Positif dan Negatif</a></li>
	    <li><a href="progam2.php">Genap dan Ganjil</a></li>
	    <li><a href="progam3.php">Lulus atau Tidak</a></li>
	    <li><a href="progam4.php">Kalimat Palindrom</a></li>
	    <li><a href="progam5.php">Tahun kabisat</a></li>
    </ul>

    <ul>
        <form class="conten">
            <label for="InputPalindrom" class="label">Mengecek Apakah Sebuah Kata Atau Kalimat Palindrom Atau Tidak </label><br>
            <input type="text" id="InputPalindrom" name="InputPalindrom"  placeholder="Masukan Palindrom" class="input">
            <br><br>
            <button type="submit" name="PeriksaPalindrom" class="Tombol">Periksa</button>
        </form>
    </ul>

    <ul>
        <div class="conten">
        <?php 
            if (isset($_GET["PeriksaPalindrom"])){
                $Kata = $_GET["InputPalindrom"];
                $Palindrom = strrev($Kata);
                if ($Kata == $Palindrom){
                    echo "$Kata Adalah Polindrom";
                }else {
                    echo "$Kata Bukan Polindrom";
                }
            }
            ?>
        </div>
    </ul>

  </body>

</html>