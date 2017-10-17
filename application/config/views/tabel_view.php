<h3>tabel</h3>
<table>
	<tr>
		<td>Kode MK</td>
		<td>Nama MK</td>
		<td>SKS</td>
		<td>Nilai</td>
	</tr>
<?php

$ipk=0;
for ($i=1; $i <= $index; $i++) { 

	$ipk=(floatval($data[$i]['ip'])*floatval($data[$i]['sks']))+$ipk;
	echo '
		<tr>
			<td>'.$data[$i]['kodemk'].'</td>
			<td>'.$data[$i]['namamk'].'</td>
			<td>'.$data[$i]['sks'].'</td>
			<td>'.$data[$i]['nilai'].'</td>
		</tr>
	';	
}
$jmlsks=0;
for ($i=1; $i <= $index ; $i++) { 
	$jmlsks=$jmlsks + intval($data[$i]['sks']);
}
if ($jmlsks>0) {
	echo '
		<tr>
			<td></td>
			<td></td>
			<td>IPK</td>
			<td>'.$ipk/$jmlsks.'</td>
		</tr>
	';
}
?>
</table>
<a href="http://localhost/pwl/pertemuan2/index.php/form/resets">reset data</a>
<a href="http://localhost/pwl/pertemuan2/index.php/form/forms">back</a>
	