<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil metho pada di kelas Task
if(isset($_POST['id_siswa'])){
	$otask->getTaskid_siswa(); //get id siswa
}

elseif(isset($_POST['nama_siswa'])){
	$otask->getTasknama_siswa();
}

elseif(isset($_POST['gender'])){
	$otask->getTaskgender();
}

elseif(isset($_POST['kelas'])){
	$otask->getTaskkelas();
}

elseif(isset($_POST['tanggal'])){
	$otask->getTasktanggal();
}
elseif(isset($_POST['status'])){
	$otask->getTaskstatus();
}
else{
	$otask->getTask();
}

$data = null;
$no = 1;

if(isset($_POST['add']))// untuk nambahin data
{
	$otask->insertTask($_POST);// pangiil fungsi insertTask

	header("Location:index.php");
}

while (list($id, $id_siswa, $nama_siswa, $gender, $kelas, $tanggal, $status) = $otask->getResult()) {
	// Tampilan jika status data nya sudah diacc
	if($status == "Hadir")
	{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $id_siswa . "</td>
		<td>" . $nama_siswa . "</td>
		<td>" . $gender . "</td>
		<td>" . $kelas . "</td>
		<td>" . $tanggal . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-success btn-sm' ><a href='index.php?id_status=" . $id .  "' style='color: white; text-decoration: none;'>Done</a></button>
		</td>
		</tr>";
		$no++;
	}else if($status == "Tidak Hadir"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $id_siswa . "</td>
		<td>" . $nama_siswa . "</td>
		<td>" . $gender . "</td>
		<td>" . $kelas . "</td>
		<td>" . $tanggal . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger btn-sm'><a href='index.php?id_hapus=" . $id . "' style='color: white; text-decoration: none; '>Delete</a></button>
		<button class='btn btn-success btn-sm' ><a href='index.php?id_status=" . $id .  "' style='color: white; text-decoration: none;'>Done</a></button>
		</td>
		</tr>";
		$no++;
	}
}

if(isset($_GET['id_hapus']))// untuk hapus data
{
	$id_task = $_GET['id_hapus'];

	$otask->deleteTask($id_task);// panggil fungsi hapus

	unset($_GET['id_hapus']);

	header("Location: index.php");
}

if(isset($_GET['id_status']))// untuk update
{
	$id_status = $_GET['id_status'];

	$otask->updateTask($id_status);

	unset($_GET['id_status']);
	
	header("Location: index.php");
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();