<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Data Siswa

    <a href="tambah.php">Tambah</a>
    <table border="1" width="50%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>#</th>
        </tr>
        <?php 
            $koneksi = new PDO("mysql:host=localhost;dbname=11rpl", "root", "");
           
            $query = $koneksi->query("select * from siswa");
            $data = $query->fetchAll();
            $no = 1;
            foreach ($data as $data) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td> <img src="<?= $data['gambar'] ?>" width="100px"/> </td>
                <td><a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a></td>
            </tr>    
            <?php  endforeach ?>
    </table>
</body>
</html>