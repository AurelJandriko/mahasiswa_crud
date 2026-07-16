<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 40px; }
        h2 { color: #1f4e79; text-align: center; }
        h3 { color : #FF0000; text-align: center; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 10px; }
        th { text-align: center; background: #1f4e79; color: #fff; }
        td { text-align: left; }
        a.btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; color: #fff; margin-right: 5px; }
        .btn-add { background: #28a745; }
        .btn-edit { background: #ffc107; color: #000; }
        .btn-delete { background: #dc3545; }
    </style>
</head>
<body>
    <h2>Dashboard Data Mahasiswa</h2>
    <p><a class="btn btn-add" href="create.php">+ Tambah Data</a></p>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id ASC");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td>
                <a class="btn btn-edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a class="btn btn-delete" href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Yakin hapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table> 
</body>

<footer>
    <h3> @2026 By Aurel Jandriko 241510042 </h3>
</footer>

</html>