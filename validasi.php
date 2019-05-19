<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    if(empty($nama)){
        $pesan = "Nama tidak Boleh kosong";
        echo "<script type='text/javascript'>alert('$pesan');</script>";
        echo "<script>ocation.href='input.php';</script>";
    }elseif (empty($nim)) {
        $pesan = "Nim tidak Boleh kosong";
        echo "<script type='text/javascript'>alert('$pesan');</script>";
        echo "<script>ocation.href='input.php';</script>";
    }elseif(strlen($nim) < 10){
        $pesan = "Nim minimal 10 karakter";
        echo "<script type='text/javascript'>alert('$pesan');</script>";
        echo "<script>ocation.href='input.php';</script>";
    }elseif(is_numeric($nim) == false){
        $pesan = "Nim harus angka";
        echo "<script type='text/javascript'>alert('$pesan');</script>";
        echo "<script>ocation.href='input.php';</script>";
    }else{
        echo $nama;
        echo $nim;
    }
?>