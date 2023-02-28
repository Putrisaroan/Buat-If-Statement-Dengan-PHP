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
            <label for="InputPositifNegarif" class="label"><b>Masukan Bilangan Bulat Positif dan Negatif</b></label><br>
            <input type="number" id="InputPositifNegarif" name="InputPositifNegatif"  placeholder="Masukan Nilai" class="input">
            <br><br>
            <button type="submit" name="PeriksaBilanganPositifNegatif" class="Tombol">Periksa</button>
        </form>
    </ul>

    <ul>
        <div class="conten">
        <?php 
            if (isset($_GET["PeriksaBilanganPositifNegatif"])){
                $Angka = $_GET["InputPositifNegatif"];
                if ($Angka > 0){
                    echo "Bilangan $Angka adalah bilangan Positif";
                } else if ($Angka <0) {
                    echo "Bilangan $Angka adalah bilangan negatif";
                }else {
                    echo " bilangan $Angka adalah 0";
                }
            }
            ?>
        </div>
    </ul>

  </body>

</html>