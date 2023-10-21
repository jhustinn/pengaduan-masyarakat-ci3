<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $title; ?>
  </title>
  <link rel="shortcut icon" type="image/pico" href="<?= base_url('assets/') ?>img/1.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.light.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.pages.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.core.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.extra-components.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alt/adminlte.plugins.min.css">
</head>
<body class="hold-transition login-page">
  <style>
    /* body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
} */
svg {
  overflow: visible;
}
svg path#line {
  fill: none;
  stroke: #e00000;
  stroke-width: 2;
  stroke-linecap: butt;
  stroke-linejoin: round;
  stroke-miterlimit: 4;
  stroke-dasharray:none;
  stroke-opacity: 1;
  stroke-dasharray: 1;
  stroke-dashoffset: 1;
  animation: dash 4s linear infinite;
}
svg path#heart {
  transform-origin: 50% 50%;
  animation: blink 4s linear infinite;
}

@keyframes dash {
  0% {
    stroke-dashoffset: 1;
  }
  80% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 0;
  }
}


@keyframes blink {
  0% {
    opacity: 0;
    transform: scale(0);  
  }
  60% {
    opacity: 0;
    transform: scale(0);
  }
  70% {
    opacity: 1;
    transform: scale(1.2);
  }
  75% {
    opacity: 1;
    transform: scale(1.0);
  }
  80% {
    opacity: 1;
    transform: scale(1.2);
  }
  85% {
    opacity: 1;
    transform: scale(1.0);
  }
  100% {
    opacity: 0;
    transform: scale(1.0);
  }
}
  </style>