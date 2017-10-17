<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data Mata Kuliah</title>
</head>
<body>	<center>
			<H1>Form Input Data Mata Kuliah </H1>
			<h2>By. Nikky Rufiansya</h2>
			
			<form action="http://localhost/tugas4/index.php/form/insert" method="post">
				<div>
				<table border="1px">
					<tr>
						<td>Kode MK</td>  <td><input type="text" name="kodemk" placeholder="kode mk"></td>
					</tr>
					<tr>
						<td>Nama MK</td>  <td><input type="text" name="namamk" placeholder="nama mk"></td>
					</tr>
					<tr>
						<td>SKS</td>  <td><input type="text" name="sks" placeholder="sks"></td>
					</tr>
					<tr>
						<td>Nilai Tugas</td>  <td><input type="text" name="tugas" placeholder="tugas"></td>
					</tr>
					<tr>
						<td>Nilai UTS</td>  <td><input type="text" name="uts" placeholder="uts"></td>
					</tr>
					<tr>
						<td>Nilai UAS</td>  <td><input type="text" name="uas" placeholder="uas"></td>
					</tr>
					<tr>
						<td>Semester</td>  <td><input type="text" name="semester" placeholder="semester"></td>
					</tr>
					
				</table>
				<input type="submit" value="simpan">
				 </div> 
				</form> 

				<button>
					<a href="http://localhost/tugas4/index.php/form/printss">show data</a> 
				</button>


		</center>
		
</body>
</html>
