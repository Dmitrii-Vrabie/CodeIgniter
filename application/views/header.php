<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My laba</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <?= anchor("/", 'Lab №3/CodeIgniter', 'class="navbar-brand"') ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?= anchor("/region", 'Regions <span class="sr-only">(current)</span>', 'class="nav-link"') ?>
            </li>
            <li class="nav-item">
                <?= anchor("/region/create", 'Create region', 'class="nav-link"') ?>
            </li>
            <li class="nav-item active">
                <?= anchor("/clerk", 'Clerk', 'class="nav-link"') ?>
            </li>
            <li class="nav-item">
                <?= anchor("/clerk/create", 'Create clerks', 'class="nav-link"') ?>
            </li>
            <li class="nav-item active">
                <?= anchor("/budget", 'Budget', 'class="nav-link"') ?>
            </li>
            <li class="nav-item">
                <?= anchor("/budget/create", 'Create budget', 'class="nav-link"') ?>
            </li>
        </ul>
    </div>
</nav>
<br>
<br>
<br>