<?php
if (isset($_POST['update'])) {
    include_once "koneksi.php";
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE supplier SET nama='$nama',alamat='$alamat',kontak='$kontak' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    // var_dump($sql);
    if ($query) {
        header('location: index.php?m=supplier&s=tampil');
    } else {
        include 'index.php?m=supplier&s=tampil';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</>';
}