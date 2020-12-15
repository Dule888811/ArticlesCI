<!doctype html>
<html>
<head>
	<title>e Prodavnica</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetc/css/style.css" type="text/css">
	<link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<div class="headline">
	<h2>Dobrodosao <?php echo $this->session->userdata('first_name') . ' ' .  $this->session->userdata('last_name') ?></h2>
	<button onclick="window.location.href='<?php echo base_url() ?>index.php/Articles/create';">Dodaj clanak</button>

</div>

<div class="articles">
	<?php
	foreach($articles as $article){
		echo "<div class='articleDiv'><h4>" . $article->headline . "</h4>"; ?>
	<div class="crudArticle">
		<form action="<?php echo base_url() ?>index.php/Articles/edit/' <?php echo $article->id;?>"  method="POST">
			<button class="btn" type="submit"><i class="fa fa-pencil"></i></button>
		</form>
		<form action="<?php echo base_url() ?>index.php/Articles/delete/<?php echo $article->id;?>"  method="POST">
			<button class="btn" type="submit"><i class="fa fa-trash"></i></button></div></div>
		</form>
		<?php
	}
	echo $this->pagination->create_links();
	?>
</div>


<div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Users/logout';">Odjava</div>


