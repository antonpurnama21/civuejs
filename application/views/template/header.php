<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Civuejs</title>
<link rel="icon" href="<?php echo base_url()?>assets/img/civue.png">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bulma.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

<script src="<?php echo base_url()?>assets/js/vue.min.js"></script>
<script src="<?php echo base_url()?>assets/js/axios.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>


</head>
<body class="bg-light">
<!-- <ul class="nav justify-content-center bg-dark text-light">
  <li class="nav-item">
        <a class="nav-link text-white h4" href="<?php echo base_url();?>user">Users CivueJS<img src="<?php echo base_url();?>assets/img/civue.png" width="60" height="70"></a>
  </li>
</ul> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/civue.png" width="40"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?=site_url()?>">Home </a>
        <a class="nav-item nav-link" href="<?=site_url('user')?>">User </a>
      </div>
    </div>  
  </div>
</nav>