<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)){
        echo"<script>alert('Nama tidak boleh kosong');location.href='index.php';</script>";
    }  elseif(empty($username)){
        echo"<script>alert('Nama tidak boleh kosong');location.href='index.php';</script>";
    } elseif(empty($password)){
        echo"<script>alert('Nama tidak boleh kosong');location.href='index.php';</script>";
    }else{
        include'koneksi.php';
        $insert=mysqli_query($conn ,"insert into user (nama,username,password) value ('".$nama."','".$username."','".md5($password)."')") or die (mysqli_connect_error($conn));
        if($insert){
            echo"<script>alert('Berhasil');location.href='index.php';</script>";
        }else{
            echo"<script>alert('gagal');location.href='index.php';</script>";
        }
    }
}
?>