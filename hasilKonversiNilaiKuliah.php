<html>
    <body>
        <form action="" method="post">
            <div>Nama Mahasiswa</div>
            <input type="text" name="nama" size="10">
            <div>Nilai Tugas</div>
            <input type="text" name="nilaitugas" size="10" placeholder="0-100"> 
            <div>Nilai UTS</div>
            <input type="text" name="nilaiuts" size="10" placeholder="0-100"> 
            <div>Nilai UAS</div>
            <input type="text" name="nilaiuas" size="10" placeholder="0-100"> 
            <br>
            <input type="submit" value="Simpan Data">
        </form>
        <hr>

        <?php
            $nama  = trim($_POST["nama"]);
            $tugas  = trim($_POST["nilaitugas"]);
            $uts  = trim($_POST["nilaiuts"]);
            $uas  = trim($_POST["nilaiuas"]);

            $nilai  = ($tugas*0.2)+ ($uts*0.3)+ ($uas*0.4);

            if ($nilai >= 80){
                $grade = "A";
            } elseif($nilai > 70 && $nilai <= 79){
                $grade = "B";
            } elseif($nilai > 60 && $nilai <= 69){
                $grade = "C";
            } elseif($nilai > 50 && $nilai <= 59){
                $grade = "D";
            } elseif($nilai < 50){
                $grade = "E";}
            
            echo "<br";
            echo "<br";
            echo "Nama anda: $nama<br>";
            echo "Nilai anda: $nilai<br>";
            echo "Grade: $grade";

        ?>

    </body>
</html>
