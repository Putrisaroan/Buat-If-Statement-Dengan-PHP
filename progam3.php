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
            <label for="InputLulusAtauTidak" class="label">Mengecek Apakah Seorang Siswa Lulus  Atau Tidak </label><br>
            <input type="number" id="InputLulusAtauTidak" name="InputLulusAtauTidak"  placeholder="Masukan Nilai" class="input">
            <br><br>
            <button type="submit" name="PeriksaLulusAtauTidak" class="Tombol">Periksa</button>
        </form>
    </ul>

    <ul>
        <div class="conten">
        <?php 
            if (isset($_GET["PeriksaLulusAtauTidak"])){
                $Angka = $_GET["InputLulusAtauTidak"];
                if ($Angka >= 60){
                    echo "Selamat, Kamu Lulus";
                }else {
                    echo "Maaf, Kamu Tidak Lulus";
                }
            }
            ?>
        </div>
    </ul>

  </body>

</html>