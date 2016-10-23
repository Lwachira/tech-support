<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>SportsPro Technical Support</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"
          media="screen,projection">
    <!--   <link rel="stylesheet" type="text/css"
              href="main.css">-->

    <link rel="stylesheet" href="/style/style.css" type="text/css" media="screen,projection">
</head>

<!-- the body section -->
<body>

<nav>
    <div class="nav-wrapper teal">


        <ul id="slide-out" class="side-nav">



            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Home<i class="material-icons"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a  class="waves-effect waves-light btn" href="/">Home</a></li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="collapsible-header">Admin<i class="material-icons"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="waves-effect waves-light btn" href="/product_manager/index.php">Manage Products</a></li>
                                <li><a class="waves-effect waves-light btn" href="/technician_manager/index.php">Manage Technicians</a></li>
                                <li><a class="waves-effect waves-light btn" href="/under_construction.php">Manage Customers</a></li>
                                <li><a class="waves-effect waves-light btn" href="/incident_manager/index.php">Create Incident</a></li>
                                <li><a class="waves-effect waves-light btn" href="/under_construction.php"">Assign Incident</a></li>
                                <li><a class="waves-effect waves-light btn" href="~/under_construction.php">Display Incidents</a></li>
                            </ul>
                        </div>
                    </li>


                    <li>
                        <a class="collapsible-header">Technician<i class="material-icons"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="waves-effect waves-light btn" href="#!">Update Incidents</a></li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="collapsible-header">Customer<i class="material-icons"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a  class="waves-effect waves-light btn"  href="/register_product/index.php">Register Product</a></li>

                            </ul>
                        </div>
                    </li>


                </ul>
            </li>
        </ul>
        <ul class="left hide-on-med-and-down">


            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdownHome">
                    Home<i></i></a>
            </li>

            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdownAdmin">
                    Admin<i></i></a>
            </li>

            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdownTech">
                    Technician <i></i></a>
            </li>

            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdownCust">
                    Customer<i></i></a>
            </li>

            <ul id='dropdownHome' class='dropdown-content'>

                <li><a href="/">Home</a></li>

            </ul>

            <ul id='dropdownAdmin' class='dropdown-content'>
                <li><a href="/product_manager/index.php">Manage Products</a></li>
                <li><a href="/technician_manager/index.php">Manage Technicians</a></li>
                <li><a href="/customer_manager/index.php">Manage Customers</a></li>
                <li><a href="/incident_manager/index.php">Create Incident</a></li>
                <li><a href="under_construction.php"">Assign Incident</a></li>
                <li><a href="under_construction.php">Display Incidents</a></li>
            </ul>




            <ul id='dropdownTech' class='dropdown-content'>

                <li><a href="#!">Update Incidents</a></li>

            </ul>

            <ul id='dropdownCust' class='dropdown-content'>
                <li><a href="/register_product/index.php">Register Product</a></li>
            </ul>

        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">apps</i></a>
    </div>
</nav>