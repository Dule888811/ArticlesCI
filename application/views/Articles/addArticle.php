<!doctype html>
<html>
<head>
	<title>e Prodavnica</title>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>assetc/js/main.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetc/css/style.css" type="text/css">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<div id="storeAricle">
	<form  method="post" action="<?php echo base_url() ?>index.php/Articles/addArticle" id="upload_form" enctype="multipart/form-data">

		<select name="user_id" id="<?php echo $this->session->userdata('first_name') ?>">
			<option value=<?php echo $this->session->userdata('id') ?> selected><?php echo $this->session->userdata('id')?></option>
		</select>


		<div class="form-input">
			<label for="title">Title</label>
			<input type="text" name="title" id="title">
		</div>

		<div class="form-input">
			<h2>Your blog</h2>
			<textarea name="blog" id="blog"  rows="4" cols="50"">Enter text here...</textarea>
		</div>



		<div class="wrapper" id="divImages">

			<div class="form-input items">
				<label for="item_image[]">item image</label>
				<input type="file"  name="item_image[]">
			</div>


		</div>
		<a href="" id="photos">
			<i class="fa fa-plus"></i>
		</a>

		<div class="form-input">
			<button type="submit" name="upload" id="upload" value="submit" >Submit</button>
		</div>
	</form>
	<a href ="#">Main page</a>
</div>
