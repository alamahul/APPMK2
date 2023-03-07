<?php
//var_dump($_SESSION['level']);die;

if(!isset($_SESSION['nik']) && !isset($_SESSION['level'])) {
  // var_dump($_SESSION['level']);die;
    Flasher::setFlash('Belum', 'Login', 'danger', 'Anda');
    header('Location:'. BASEURL .'/Login');   
}elseif(isset($_SESSION['level']) && $_SESSION['level'] == 'admin' && $_SESSION['status'] == '0'){
  Flasher::setFlash('Belum', 'di Verifikasi', 'danger', 'Akun Anda');
  unset($_SESSION['level']);
  header('Location:'. BASEURL .'/PetugasLogin');  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPMK | <?= $data['judul'] ?></title>
  
  <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="<?= BASEURL ?>/img/logoGarut.png" type="image/x-icon">
  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <style>
     trix-toolbar [data-trix-button-group="file-tools"] {
              display: none;
     }
    .trix-button--icon-increase-nesting-level,
    .trix-button--icon-decrease-nesting-level{ display:none;}
  </style>
</head>

<body class="page-top">