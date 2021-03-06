<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Orders Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dashboard</a>
                <a class="navbar-brand" href="index.html">Orders</a>
                <a class="navbar-brand" href="index.html">Products</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="contact.html">Log off</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4 text-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                </div>
            </div>
        </div>
        
        <br>
        <div class='row'>
            <div class='col-12'>
                <table class="table">
                  <thead class="thead-inverse">

                    <tr class='text-center'>
                      <th>Order ID</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Billing Address</th>
                      <th>Total</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                <?php 
                for ($x = 0; $x <= 3; $x++) { ?>


                    <tr>
                      <td>[ID]</td>
                      <td>[Name]</td>
                      <td>[00/00/0000]</td>
                      <td>[Billing Address]</td>
                      <td>[Total]</td>
                      <td>
                        <div class='col-sm-6'>
                            <select>
                                <option value=1>Order in process</option>
                                <option value=2>Shipped</option>
                                <option value=3>Cancelled</option>
                            </select
                        </div>
                        </td>

                    </tr>
                <?php 
                } 
                ?>
                  </tbody>
                </table>
    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

    