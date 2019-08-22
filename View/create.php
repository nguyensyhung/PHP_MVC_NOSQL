<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
			.errors{
				font-style: italic;
				color: #FF6666;
			}
    </style>
    
</head>
  <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h3>Page new customer!</h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <?php include('menu.php'); ?>
                <div class="col-9">
                <?php if (isset($errors)): ?>
							<div class="errors">
								<?php foreach ($errors as $error): ?>
									<?php echo $error; ?>
								<?php endforeach ?>
							</div>
						<?php endif;?>
                <form action="" method="post">
							<fieldset class="form-group">
								<label>ID Customer</label>
								<input type="text" class="form-control" name="customerID"  placeholder="Mời bạn nhập ID!">
							</fieldset>
							<fieldset class="form-group">
								<label>EmailAdress</label>
								<input type="text" class="form-control" name="emailAddress"  placeholder="Mời bạn nhập email!">
							</fieldset>
							<fieldset class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name"  placeholder="Mời bạn nhập Name!">
							</fieldset>
							<fieldset class="form-group">
								<label>Password</label>
								<input type="text" class="form-control"  name="pass" placeholder="Mời bạn nhập Password!">
							</fieldset>
							<fieldset class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control"  name="phone" placeholder="Mời bạn nhập Số điện thoại!">
							</fieldset>
							<input type="hidden" name="action" value="add_customer">
							<input style="margin-left: 350px" type="submit" value="Thêm mới" class="btn btn-primary">
						</form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>