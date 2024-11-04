<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family:"Times New Roman", Times, serif;
  font-size: 8px;
  border-collapse: collapse;
}

th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

td {
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

<table>
  <tr>
    <th colspan="13">Penilaian Awal</th>
    <th> </th>
	<th> </th>
	<th> </th>
	<th colspan="7">Evaluasi</th>
  </tr>
  <tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Risiko</th>
	<th>Dampak<br>Risiko</th>
	<th>Severity<br>(S)</th>
	<th>Penyebab<br>Risiko</th>
	<th>Occurence<br>(O)</th>
	<th>Metode<br>Deteksi</th>
	<th>Detection<br>(D)</th>
	<th>RPN</th>
	<th>FRPN</th>
	<th>Prioritas</th>
	<th>Keterangan</th>
	<th>Usulan Tindakan</th>
	<th>Penanggung Jawab</th>
	<th>Tanggal Target Penyelesaian</th>
	<th>Tindakan Perbaikan</th>
	<th>Severity<br>(S)</th>
	<th>Occurence<br>(O)</th>
	<th>Detection<br>(D)</th>
	<th>FRPN</th>
	<th>Prioritas</th>
	<th>Keterangan</th>
  </tr>
  <tbody>
	<?php foreach($produk as $p){?>
	<?php $iterasi = 1;?>
	<?php foreach($sod as $s){?>
	<?php foreach($risiko as $r){?>
	<?php if($p->id == $r->id_produk && $s->id_risiko_produk == $r->id){ ?>
	<tr>
	<td><?php echo $p->id;?></td>
	<td><?php echo $p->judul;?></td>
	<td><?php echo $r->risiko;?></td>
	<td><?php echo $s->dampak;?></td>
	<td><?php echo $s->ave_s;?></td>
	<td><?php echo $s->penyebab;?></td>
	<td><?php echo $s->ave_o;?></td>
	<td><?php echo $s->metode_deteksi;?></td>
	<td><?php echo $s->ave_d;?></td>
	<td><?php echo $s->rpn;?></td>
	<td><?php echo $s->frpn;?></td>
	<td><?php echo $iterasi;?></td>
	<td><?php echo $s->keterangan;?></td>
	<td><?php echo $s->usulan_tindakan;?></td>
	<td><?php echo $s->penanggung_jawab;?></td>
	<td><?php echo $s->tanggal_target;?></td>
	<td><?php echo $s->tindakan_perbaikan;?></td>
	<td><?php echo $s->ave_s_eval;?></td>
	<td><?php echo $s->ave_o_eval;?></td>
	<td><?php echo $s->ave_d_eval;?></td>
	<td><?php echo $s->frpn_eval;?></td>
	<td><?php echo $iterasi;?></td>
	<td><?php echo $s->keterangan_eval;?></td>
	
	</tr>
	<?php $iterasi++;} ?>
	<?php } ?>
	<?php } ?>
	<?php } ?>
  </tbody>
</table>

</body>
</html>
