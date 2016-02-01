<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/countrySelect.min.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <header class="text-center">
            <div class="container"> 
                <!--<a href="logout.php" class="btn pull-right"><i class="fa fa-power-off"></i></a>-->
                <a href="index.php" ><img src="images/phonebook.jpg" alt="phonebook"></a>
                <h1>Registration</h1>
                <h3>Codeworior</h3>
            </div>
        </header>
        <section class="content container">
            <?php
//            ini_set('display_errors', 'Off');
//            error_reporting(E_ALL & ~E_DEPRECATED);
            include 'vendor/autoload.php';

use App\Phonebook;
use App\Requered;

$obj = new Phonebook();
//            if (strtoupper($_SERVER['REQUEST_METHOD']) == "POST") {
////            
//                $info = $obj->index($_POST);
////           
//            } else if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
//                $info = $obj->index(null, $_GET);
//            } else {
                $info = $obj->index();
//            }
            $num = $obj->pagination();
//            $search = $obj->search();
            $success = Requered::success_message();
            $unsuccess = Requered::unsuccess_message();
            if (isset($success)) {
                ?>
                <div class = "alert alert-success">
                    <button type = "button" class = "close" data-dismiss = "alert">
                        <i class = " fa fa-times"></i>
                    </button>
                    <p>
                        <strong>
                            <i class = "ace-icon fa fa-check"></i>
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
                        <i class = " fa fa-times"></i>
                    </button>
                    <p>
                        <strong>
                            <i class = "ace-icon fa fa-check"></i>
                            Sorry!
                        </strong>
                        <?php echo $unsuccess; ?>
                    </p>
                </div>
                <?php
            }
            ?>
            <a href="create.php" type="button" class="btn btn-primary pull-right button"  ><strong><i class="fa fa-plus"></i> New Registration</strong> </a>
            <a href="downloadpdf.php?action=getpdf"><button type="button" class="btn btn-danger pull-right button" style="margin-right: 10px;"><strong><i class="fa fa-file-pdf-o"></i> Download as PDF </strong> </button></a>
            <a href="01simple-download-xlsx.php"><button type="button" class="btn btn-success pull-right button" style="margin-right: 10px;"><strong><i class="fa fa-file-excel-o"></i> Download XLS</strong> </button></a>

            <form action="index.php" method="post">

<!--                <div class="search">
                    <input type="text" id="search"  name="search" placeholder="Search.." class="">
                    <button type="submit" ><i class="fa fa-search"></i></button>
                </div>-->
            </form>
            <table  id="table" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Sl <i class="fa fa-arrow-down"></i></th>
                        <th>Full Name</th>
                        <!-- <th>Nick Name</th> -->
                        <th>Mobile Number</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sl = 1;
//                     Requered::debug($info);
                    foreach ($info as $value) {
                        ?>
                        <tr>
                            <td><?php echo $sl; ?></td>
                            <td class="name"><a href="details.php?id=<?php echo $value->info_id; ?>" ><?php echo $value->fname; ?> <?php echo $value->lname; ?></a></td>
                            <!-- <td><?php echo $value->nname; ?></td> -->
                            <td><?php echo $value->mobile; ?></td>
                            <td><?php echo $value->gender; ?></td>
                            <td><?php echo $value->address; ?></td>
                            <td><img style="width: 100px; height: 100px;" src="images/<?php echo $value->image_name; ?>" alt="<?php echo $value->image_name; ?>"/></td>
                            <td><?php echo $value->city; ?></td>
                            
                            <td>

                                <a href="edit.php?id=<?php echo $value->info_id; ?>" class="btn btn-primary " ><strong><i class="fa fa-edit"></i></strong> </a>
                                <a href="delete.php?id=<?php echo $value->info_id; ?>" class="btn btn-danger delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        $sl++;
                    }
                    ?>

                </tbody>
            </table>
        </section>
        <footer class="text-center">
            <div class="container">
                <p>Copyright @ Developed by Codeworior</p>
            </div>
        </footer>   



        <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/countrySelect.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
            $("#country").countrySelect();
            $("#country1").countrySelect();
            $(".delete").click(function () {
                var chk = confirm("Are you sure to Delete?");
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            });
            $(document).ready(function () {
                $("#search").click(function () {
                    $("input").animate({
                        width: '300px',
                    }, 2000);
                });
                $("#table").DataTable({
                    "pagingType": "simple"
                });
            });
        </script>
    </body>
</html>