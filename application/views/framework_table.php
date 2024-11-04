<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family:"Times New Roman", Times, serif;
  font-size: 8px;
  border-collapse: collapse;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p>Tabel Skala Pengukuran Tingkat Keparahan Dampak Risiko (Severity)</p>
<table>
  <tr>
    <th rowspan="2">Ranking</th>
	<th colspan="2" style="text-align:center">Proses</th>
	<th colspan="2" style="text-align:center">Produk</th>
  </tr>
  <tr>
	<th>Severity</th>
	<th>Deskripsi</th>
	<th>Severity</th>
	<th>Deskripsi</th>
  </tr>
  <tbody>
	<?php $iterasi = 1;?>
	<?php foreach($skala_dampak as $sp){?>
	<tr>
	<td><?php echo $sp->ranking;?></td>
	<td><?php echo $sp->judul_proses;?></td>
	<td><?php echo $sp->deskripsi_proses;?></td>
	<td><?php echo $sp->judul_produk;?></td>
	<td><?php echo $sp->deskripsi_produk;?></td>
	</tr>
	<?php } ?>
  </tbody>
</table>
</body>
</html>
