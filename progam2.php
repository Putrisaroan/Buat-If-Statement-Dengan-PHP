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
            <label for="InputGenapGanjil" class="label">Masukan Bilangan Genap atau Ganjil </label><br>
            <input type="number" id="InputGenapGanjil" name="InputGenapGanjil"  placeholder="Masukan Nilai" class="input">
            <br><br>
            <button type="submit" name="PeriksaBilanganGenapGanjil" class="Tombol">Periksa</button>
        </form>
    </ul>

    <ul>
        <div class="conten">
        <?php 
            if (isset($_GET["PeriksaBilanganGenapGanjil"])){
                $Angka = $_GET["InputGenapGanjil"];
                if ($Angka % 2 == 0){
                    echo "Bilangan $Angka adalah bilangan Genap";
                }else {
                    echo " bilangan $Angka adalah Ganjil";
                }
            }
            ?>
        </div>
    </ul>

  </body>

</html>