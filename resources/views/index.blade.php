<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
	<h3>Data Pegawai</h3>
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>
 
	<table id="pegawaiTable" border="1">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
					|
					<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		 $(document).ready(function() {
		    $('#pegawaiTable').DataTable();
		});
	</script>
</body>
</html>
