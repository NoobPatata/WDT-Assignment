<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <!-- datatable plugin -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/b-1.6.3/b-print-1.6.3/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>


        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="CSS/Header.css">
        <link rel="stylesheet" type="text/css" href="CSS/Custom.css">


        <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

        <!-- google material design icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <title>Care Clinic</title>
  </head>

    <nav class="mb-1 navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand">
            <img src="Graphic/logo.png" width="150" height="40" class="d-inline-block align-top" alt="Care Clinic" loading="lazy" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a  class="nav-link <?php if($page == 'home') {echo 'active';} ?>" href="DoctorPage(Doctor).php">Home</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link <?php if($page == 'patienthistory') {echo 'active';} ?>" href="PatientHistoryPage.php">Patient History</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto nav-flex-icons">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="material-icons d-inline-block align-top">account_circle</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="ProfilePage(Patient).php">My Profile</a>
                        <a class="dropdown-item" href="ChangePasswordPage.php">Change Password</a>
                        <form action="logout.php" method="POST"> <button class="dropdown-item" type="submit" name="logout">Logout</button></form>
                    </div>







                </li>
            </ul>
        </div>
    </nav>    
  
