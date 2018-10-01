<!DOCTYPE html>
<html>
<head>
    <title> Registrasi </title>
</head>
<body>
    <pre>
        <h2> REGISTRASI </h2>
        <form method="POST">
            NIM     : <input type="text" name="nim" pattern="\d*" maxlength="10"> <br><br>
            Nama    : <input type="text" name="nama" maxlength="25"> <br><br>
            Email   : <input type="email" name="email"> <br><br>    
            <input type="submit" value="KIRIM">
        </form>
    </pre>
</body>
</html>

<?php
    if(isset($_POST['nim'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
    }
?> 
    <script>
        alert("Registrasi Berhasil")
    </script>
