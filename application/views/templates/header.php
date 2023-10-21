<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $title; ?>
  </title>
  <style>
    body::-webkit-scrollbar {
      display: none;
    }

    .direct-chat-contacts::-webkit-scrollbar {
      display: none;
    }

    .direct-chat-messages::-webkit-scrollbar {
      display: none;
    }

    @keyframes bounce {

      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      40% {
        transform: translateY(-10px);
      }

      60% {
        transform: translateY(-5px);
      }
    }

    #load {
      animation: spin 2s infinite linear;
    }

    @keyframes spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }


    #animasi {
      animation: bounce 2s ease infinite;
    }

    #hai {
      animation: hai 1s ease infinite;
    }

    @keyframes hai {
      30% {
        transform: scale(1.2);
      }

      40%,
      60% {
        transform: rotate(-20deg) scale(1.2);
      }

      50% {
        transform: rotate(20deg) scale(1.2);
      }

      70% {
        transform: rotate(0deg) scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>
  <link rel="shortcut icon" type="image/ico" href="<?= base_url('assets/') ?>img/1.png" />
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.light.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.pages.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.core.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.extra-components.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.plugins.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.css">

</head>


<body class="hold-transition sidebar-mini layout-navbar-fixed sidebar-collapse layout-footer-fixed layout-fixed">

  <!-- Site wrapper -->
  <div class="wrapper">