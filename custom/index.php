<?php
ini_set('display_errors', 'Off');
error_reporting(E_ALL & ~E_DEPRECATED);
include 'vendor/autoload.php';

use App\Login;
use App\Requered;

$obj = new Login();
$obj->checklog();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>PhoneBook Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <!-- <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
            </head> -->
    <body class="bg-login">
        <h1>PHONEBOOK</h1>
        <h3>Codeworior</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 login text-center">
                    <h2>Login</h2>
                    <hr />
                    <?php
                    $success = Requered::success_message();
                    $unsuccess = Requered::unsuccess_message();
                    if (isset($success)) {
                        ?>
                        <div class = "alert alert-danger">
                            <button type = "button" class = "close" data-dismiss = "alert">
                                <i class = "fa fa-times"></i>
                            </button>
                            <p>
                                <strong>
                                    <i class = "ace-icon fa fa-times"></i>
                                    <!--                        Well done!-->
                                </strong>
                                <?php echo $success; ?>
                            </p>
                        </div>
                        <?php
                    }if (isset($unsuccess)) {
                        ?>
                        <div class = "alert alert-danger">
                            <button type = "button" class = "close" data-dismiss = "alert">
                                <i class = "fa fa-times"></i>
                            </button>
                            <p>
                                <strong>
                                    <i class = "ace-icon fa fa-times"></i>
                                    <!--                        Well done!-->
                                </strong>
                                <?php echo $unsuccess; ?>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="check.php" method="post" class="form-horizontal">
                        <div class="form-group" id="important">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email_address" id="inputEmail3" placeholder="Please Writte Your Email">
                            </div>
                        </div>
                        <div class="form-group" id="important">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Press Your Password">
                            </div>
                        </div>
                        <div class="form-group" id="important">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-md-offset-2 log">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>