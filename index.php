<?php
include("koneksi.php");

$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <a href="tambah.php">Tambah Barang</a>
        <div class="main">
            <table border="1" cellpadding="8" cellspacing="0">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php if($result): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td>
                            <img src="gambar/<?php echo $row['gambar']; ?>" 
                                 alt="<?php echo $row['nama']; ?>" 
                                 width="80">
                        </td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td><?php echo $row['harga_beli']; ?></td>
                        <td><?php echo $row['harga_jual']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?php echo $row['id_barang']; ?>">Ubah</a>
                            <a href="hapus.php?id=<?php echo $row['id_barang']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>