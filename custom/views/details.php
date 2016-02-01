<?php
include '../vendor/autoload.php';

use App\Phonebook;
use App\Requered;

$obj = new Phonebook();
$details = $obj->show($_REQUEST['id']);
//Requered::debug($details);
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Phone Book Application</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/css/countrySelect.min.css" />
        <link rel="stylesheet" href="../assets/style.css" />
    </head>
    <body>
        <header class="text-center">
            <div class="container"> 
                <a href="logout.php" class="btn pull-right"><i class="fa fa-power-off"></i></a>
                <a href="index.php" ><img src="images/phonebook.jpg" alt="phonebook"></a>
                <h1>PHONEBOOK</h1>
                <h3>Code Worior</h3>
            </div>
        </header>
        <section class="details ">
            <div class="container">
                <div class="jumbotron">
                    <div class="form-group"> 
                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->fname; ?> <?php echo $details->lname;?></h4>
                        </div>
                    </div>
<!--                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Nick Name: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->nname; ?></h4>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Gender: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->gender; ?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Image: </label>
                        <div class="col-sm-8">
                            <img src="images/<?php echo $details->image_name; ?>" alt="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Mobile number: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->mobile; ?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Home Phone:  </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->home_phone;?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Work Phone:  </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->work_phone;?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Address: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->address;?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">City: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->city; ?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Country: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->country; ?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">ZIP code: </label>
                        <div class="col-sm-8">
                            <h4><?php echo $details->zip_code;?></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <a href="index.php" class="btn btn-info list">List</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-center">
            <div class="container">
                <p>Copyright @ Developed by Code Worior</p>
            </div>
        </footer>
    </body>
</html>