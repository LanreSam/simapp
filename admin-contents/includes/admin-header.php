<?php include('includes/arrays.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--custom css-->
    <link rel="stylesheet" href="admin-contents/css/adminStyle.css">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
            background-color: #1B2842;
        }

        /* Top Navbar */
        .search-input{
            background: transparent;
            border: none;
            border-radius: 0;
            border-bottom: 1px solid #1B2842;
            transition: all .5s;
        }

        .search-input:focus{
            background: transparent;
            box-shadow: none;
            border-bottom: 1px solid red;
            color: grey;
        }

        .search-btn{
            border-radius: 50%;
            padding: 6px 6px;
            transition: all .6s;
        }


        .search-btn:hover{
            background-color: #73BF43;
            transform: translateY(-4px);
        }

        .top-navbar{
            background-color: #fff;
        }

        @media(max-width: 768px){
            .sidebar{
                position: static;
                height: auto;
            }
            .top-navbar{
                position: static;
            }
        }
        /* End of Top Navbar */
    </style>

    
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- TopNav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 pt-3 top-navbar">
                        <div class="row align-center">
                            <div class="col-md-4">
                                <h4 class="text-dark text-uppercase mb-0">Dashboard</h4>
                            </div>
                            <div class="col-md-5 ml-auto">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search database...">
                                        <button type="button" class="btn search-btn ml-3" title="Search"><img src="admin-contents/images/search.png" width="25"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end of TopNav -->

                    <!-- Sidebar -->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="index.php" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border" title="Homepage">LogoTelecom</a>
                        <div class="border-bottom pb-3">
                            <img src="admin-contents/images/lanre.jpg" alt="Admin" width="80" class="rounded d-block m-auto"><br>
                            <a href="https://lanresam.ml" class="text-white d-block m-auto text-center">Ezeche L. Samuel</a>
                        </div>
                        <?php include('admin-contents/includes/sidebar-nav.php');?>
                    </div>
                    <!-- end of Sidebar -->
                </div>
            </div>
        </div>
    </nav>