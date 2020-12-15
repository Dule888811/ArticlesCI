<!doctype html>
<html>
<head>
	<title>e Prodavnica</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetc/css/style.css" type="text/css">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<div class="headline">
	<h2>Dobrodosao <?php echo $this->session->userdata('first_name') . ' ' .  $this->session->userdata('last_name') ?></h2>
	<button onclick="window.location.href='<?php echo base_url() ?>index.php/Articles/create';">Continue</button>
</div>

<div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Users/logout';">Odjava</div>


