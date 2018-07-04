<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Login</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php echo form_open('login/cekLogin'); ?>
			<legend>Login</legend>
			<?php echo validation_errors();?>
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input Field">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Input Field">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Login</button>
				<?php echo "<a href ='".base_url('index.php/login/signUp')."' class='btn btn-warning'>Sign Up</a>";?>
			</div>

		</div>
    </div>
  </body>
</html>

