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
            <label for="InputTahunKabisat" class="label">Mengecek Apakah Sebuah Tahun Kabisat Atau Tidak </label><br>
            <input type="number" id="InputTahunKabisat" name="InputTahunKabisat"  placeholder="Masukan Tahun" class="input">
            <br><br>
            <button type="submit" name="PeriksaTahunKabisat" class="Tombol">Periksa</button>
        </form>
    </ul>

    <ul>
        <div class="conten">
        <?php 
            if (isset($_GET["PeriksaTahunKabisat"])){
                $Tahun = $_GET["InputTahunKabisat"];
                if (($Tahun % 4 == 0 && $Tahun != 0) || $Tahun % 400==0){
                    echo "$Tahun Adalah Tahun Kabisat";
                }else {
                    echo "$Tahun Bukan Tahun Kabisat";
                }
            }
            ?>
        </div>
    </ul>

  </body>

</html>