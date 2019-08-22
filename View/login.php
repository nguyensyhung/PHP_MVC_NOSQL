<pre>
<?php
    $rb = $_SESSION['customerss']; 
print_r($rb);

?>
</pre>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
    foreach ($_SESSION['customerss'] as $customer) {
        echo $email = $customer->getemailAddress() . "<br/>";
        echo $pass = $customer->getpass() . "<br/>";
        echo "<hr/>";

    }

?>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</>
                    <input style="width: 374px;" type="email" class="form-control" name="email"   placeholder="Mời bạn nhập email đã đăng kí">
                    <label for="">Password</label>
                    <input style="width: 374px;" type="password" class="form-control" name="pass"   placeholder="Mời bạn nhập mật khẩu">
                    <br><?php   $email ; $pass; ?>
                    <input type="hidden" name="action" value="login_customer">
                    <input type="submit" name="login_customer" value="Đăng nhập"></td>
                </div>
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