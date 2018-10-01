<!DOCTYPE html>
<html>
<head>
    <title> KOMENTAR </title>
</head>
<body>
    <pre>
        <form method="POST">
            Nama        : <input type="text" name="nama" ><br><br>
            Komentar    : <br>
            <textarea name="komentar" cols="30" rows="10" placeholder="Komentar Minimal 5 Kata"></textarea><br>
            <input type="submit" value="KIRIM">
        </form>
    </pre>
</body>
</html>

<?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        $isi_komentar = explode(" ", $komentar);
        $jumlah = count($isi_komentar);
        if ($jumlah < 5) {
            ?>
            <script>
                alert("ERROR!!! (KOMENTAR KURANG DARI 5 KATA)")
            </script>
            <?php
        } else {
            ?> 
            <pre>
                <?php
                    echo "Jumlah Kata Pada Komentar : ".$jumlah." Kata";
                ?>
            </pre>
            <?php
        }
    }
?>
