<?php 

/******************************************
PRAKTIKUM RPL
******************************************/
class Task extends DB{
	
	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke data_absen
		$query = "SELECT * FROM data_absen";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskid_siswa()
	{
		// Query mysql select data ke data_absen secara asc di tabel nip
		$query = "SELECT * FROM data_absen ORDER BY id_siswa ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknama_siswa()
	{
		// Query mysql select data ke data_absen secara asc di tabel nama_dosen
		$query = "SELECT * FROM data_absen ORDER BY nama_siswa ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskgender()
	{
		// Query mysql select data ke data_absen secara asc di tabel gender
		$query = "SELECT * FROM data_absen ORDER BY gender ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskkelas()
	{
		// Query mysql select data ke data_absen secara asc di tabel tanggal lahir
		$query = "SELECT * FROM data_absen ORDER BY kelas ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasktanggal()
	{
		// Query mysql select data ke data_absen secara acs di tabel matkul
		$query = "SELECT * FROM data_absen ORDER BY tanggal ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskstatus()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM data_absen ORDER BY status_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertTask($data) // fungsi untuk input data
	{
		$id_siswa = $data['id_siswa'];
		$nama_siswa = $data['nama_siswa'];
		$gender = $data['gender'];
		$kelas = $data['kelas'];
		$tanggal = $data['tanggal'];
		$status = $data['status'];
		
		$query = "INSERT INTO data_absen (id_siswa, nama_siswa, gender, kelas, tanggal, status_td) VALUES ('$id_siswa', '$nama_siswa', '$gender', '$kelas', '$tanggal', '$status')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function deleteTask($id_task) // fungsiuntuk delete data
	{
		$query = "DELETE FROM data_absen WHERE id=$id_task";

		return $this->execute($query);
	}

	function updateTask($id) // fungsi untuk status data
	{
		$query = "UPDATE data_absen SET status_td = 'Hadir' WHERE id = $id";

		return $this->execute($query);
	}
	
}

?>