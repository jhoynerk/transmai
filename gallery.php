<?php
  error_reporting(-1);
  ini_set('display_errors', 'On');
  ## Solo Incluir la libreria principal de wordpress para probar el template 
  ## sin ser incluido en wordpress
  #include_once('general-template.php');
?>

<?php #get_header(); ?>
<?php include_once('header.php'); ?>

<?php include_once('list.php') ?>

<?php include_once('footer.php'); ?>
