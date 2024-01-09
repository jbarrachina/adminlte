<?php 
/*******************************************************************************
 * Ejemplo de vista que utiliza la plantilla de adminlte
 * 
 ******************************************************************************/
?>

<?= $this->extend('plantillas/adminlte') ?>

<?= $this->section('page_title') ?>
    <?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Hello World!</h1>
<?= $this->endSection() ?>

