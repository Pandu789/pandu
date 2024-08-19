<html>
    <body>
        <?php
        $awal= $_POST['nomor'];
        $akhir= $_POST['nomer'];
        if(awal < akhir){
            for($i = $awal; $i <= $akhir; $i--)
            echo "<h2>Perulangan ke-$i</h2>";
        }else{
           
                for($i = $awal; $i <= $akhir; $i--)
                echo "<h2>Perulangan ke-$i</h2>";
        }
        ?>
    </body>
</html>