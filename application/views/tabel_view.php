
<?php

$ipk=0;
echo '<table border="3" >
	<tr>
		<td>Kode MK</td>
		<td>Nama MK</td>
		<td>SKS</td>
		<td>Nilai</td>
	</tr>';

echo '<form action="http://localhost/tugas4/index.php/form/hapusbanyak" method="post">';
echo '<tr><b>SEMESTER '.$sem.'<b></tr>';
for ($i=0; $i < $index; $i++) { 

	$ipk=(floatval($data[$i]['ip'])*floatval($data[$i]['sks']))+$ipk;
	echo '
		
		<tr>
			<td>'.$data[$i]['kodemk'].'</td>
			<td>'.$data[$i]['namamk'].'</td>
			<td>'.$data[$i]['sks'].'</td>
			<td>'.$data[$i]['nilai'].'</td>
			<td>
			<a href="http://localhost/tugas4/index.php/form/hapus/'.$data[$i]['kodemk'].'">del</a>
			</td>
			<td> <input type="checkbox" name="kode[]" value="'.$data[$i]['kodemk'].'"></td>
		</tr>
		
	';	
}

$jmlsks=0;
for ($i=0; $i < $index ; $i++) { 
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
echo '<td colspan=6 align="right"><input type="submit" value="delete"> </tr>
		</form></td></table>';

?>


<button>
	<a href="http://localhost/tugas4/index.php/form/forms">back</a><br/><br/>	
</button>



	