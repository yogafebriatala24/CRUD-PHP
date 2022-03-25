<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
</head>

<body>
    <header>
        <h1>Pendaftaran Mahasiswa Baru</h1>
        <h3>Universitas Pamulang</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        <ul>
            <li><a href="proses-pendaftaran.php">Daftar</a></li>
            <li><a href="list-siswa.php">List Pendaftar</a></li>
        </ul>
    </nav>
</body>

</html>