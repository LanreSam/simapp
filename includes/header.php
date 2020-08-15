<?php include('includes/arrays.php');?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogoTelecom</title>

    <link rel="stylesheet" href="custom-style.css">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid mt-3 mb-4">
        <header>
            <div>

                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow">
                    <div>
                        <img src="img/logoWhite.png" alt="LogoTelecom" width="150px" height="150px">
                    </div><!--container for LOGO-->

                    <h1 class="m-auto text-white" id="logo-text">LogoTelecom</h1><!--Header Text-->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button><!--Toggle button for mobile screen-->
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="ml-auto">
                            <?php include('includes/nav.php');?>
                        </div><!--m-auto div-->
                        
                    </div><!--collapse div-->  
                </nav><!--nav div-->
                
            </div><!--Doing  nothing-->
            
        </header><!--end of header-->