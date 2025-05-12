<?php
include 'koneksi.php';

$query = $db->prepare("SELECT * FROM Pendaftaran");
$query->execute();
$data = $query->fetchAll();
?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Pekerjaan</th>
    </tr>
    <?php foreach ($data as $row): ?>
    <tr>
        <td><?= ($row['Nama']) ?></td>
        <td><?= ($row['Alamat']) ?></td>
        <td><?= ($row['Gender']) ?></td>
        <td><?= ($row['Pekerjaan']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<!--ini code Muhammad Averroes-->
<!--button untuk export ke PDF-->
<a href="export_pdf.php" class="btn btn-pdf">Export ke PDF</a>
<style>
.btn-pdf {
    display: inline-block;
    padding: 10px 18px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-pdf:hover {
    background-color: #45a049;
}

</style>