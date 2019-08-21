<pre>
<?php print_r($_SESSION['customerss']); ?>
</pre>
<!doctype html>
<html lang="en">
    <head>
        <title>List Customer</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <style>
            .row.cha.justify-content-center {
                    position: relative;
                    top: -48px;
                }
                i.fa.fa-search.con2 {
                position: absolute;
                top: 10px;
                right: -1px;
                font-size: 21px;
            }
            input.form-control.con1 {
                position: absolute;
            }
            i.fa.fa-search.con2:hover {
                color:orange;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="row cha justify-content-center">
            <div class="col-6">
            <input class='form-control con1' type="text">
            <i class="fa fa-search con2"></i>
            </div>
        </div>
            <div class="row text-center">
                <div class="col-12"> <h1>All List Customer's</h1> </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <a href="?action=list_customer"><li class="list-group-item">Tất cả người dùng</li></a>
                        <a href=""><li class="list-group-item">New Customer</li></a>
                    </ul>
                </div>
                <div class="col-9">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Email Address</th>
                                <th>Name</th>
                                <th>Pass</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($_SESSION['customerss'] as $customer): ?>
                            <tr>
                                <td><?= $customer->getcustomerId(); ?></td>
                                <td><?= $customer->getemailAddress(); ?></td>
                                <td><?= $customer->getName(); ?></td>
                                <td><?= $customer->getPass(); ?></td>
                                <td><?= $customer->getPhone(); ?></td>
                                <td><a  class="btn btn-outline-danger btn-sm" href="#">Delete</a></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
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