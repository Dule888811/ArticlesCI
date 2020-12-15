<!doctype html>
<html>
<head>
	<title>e Prodavnica</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetc/css/style.css" type="text/css">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<div class="loginDiv">
	<div class="widget">
		<h2>Logovanje</h2>
		<div class="inner">
			<?php if($this->session->flashdata('success')):?>
				<?php   echo $this->session->flashdata('success');?>
			<?php  endif; ?>
			<?php   if( $this->session->set_flashdata('false')): ?>
				<?php echo $this->session->set_flashdata('false'); ?>
			<?php endif; ?>
			<form method="post" action="<?php echo site_url('Users/login'); ?>">
			<ul id="login">
					<li>
						e-mail:<br/>
						<input type="text" name="email">
					</li>
					<li>
						Lozinka:<br/>
						<input type="password" name="password">
					</li>
					<li>
						<input class="btn" type="submit" value="Pristupi">
					</li><br/></br>

				</ul>
			</form>
		</div>
	</div>

</div>

