<?php
include_once('../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="./src/assets/logo.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="shortcut icon" href="assets/logo.png" />
    <title>Wassilli Co.</title>

</head>

<body>
    <div class="cont">
        <div class="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <i class=""> <img src="../assets/logo.png" alt="dashboard_icon" width="50px" /></i>
                    <h1>Wassilli Co.</h1>
                </div>
                <i class="fa fa-times" id="sidebarIcon"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class=""> <img src="../assets/home.png" alt="dashboard_icon" width="20px" /></i>
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="sidebar__link">
                    <i class="" aria-hidden="true"> <img src="../assets/clerk.png" alt="stock" width="20px" /></i>
                    <a href="employees.php">Employees</a>
                </div>
                <div class="sidebar__link">
                    <i class=""> <img src="../assets/money.png" alt="finan" width="20px" /></i>
                    <a href="customer.php">Customers</a>
                </div>
                <div class="sidebar__link">
                    <i class=""><img src="../assets/report.png" alt="reports" width="20px" /></i>
                    <a href="products.php">Products</a>
                </div>

                <div class="sidebar__link">
                    <i class=""><img src="../assets/package.png" alt="cashiers" width="20px" /></i>
                    <a href="orders.php">Orderes</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"></i>
                    <a href="offices.php">Offices</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-usd"></i>
                    <a href="payments.php">Payments</a>
                </div>
            
                <div class="sidebar__link">
                    <i class=""><img src="../assets/logout.png" alt="logout" width="20px" /></i>
                    <a href="../signout.php">Log out</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="Searchnav">
                <div class='input-group mb-3 pl-8  w-25 d-inline-flex  my-4 '>
                    <input type='text' id='searchCity' class='form-control border-right-0 border'
                        placeholder='Search By City'>
                    <span class='input-group-append'>
                        <button class='btn border-left-0 border' type='button' id='cityBtn'>
                            <i class='fa fa-search'></i>
                        </button>
                    </span>
                </div>
                <div class='input-group mb-3 pl-8  w-25 d-inline-flex  my-4 '>
                    <input type='text' id='searchCountry' class='form-control border-right-0 border'
                        placeholder='Search By Country'>
                    <span class='input-group-append'>
                        <button class='btn border-left-0 border' type='button' id='countryBtn'>
                            <i class='fa fa-search'></i>
                        </button>
                    </span>
                </div>
                <div class="result">

                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            var page = 1;
            var city = "";
            var country = "";
            load_data(page);

            function load_data(page, city, country) {
                $.ajax({
                    url: "./../controlers/load_filtered_products.php", cache: false, timeout: 2000,
                    method: "POST",
                    data: { page: page, city: city,country: country },
                    success: function (data) {
                        $(".result").html(data);
                    }
                })
            }
            $(document).on('click', '.page-link', function () {
                page = $(this).attr("id");
                page = parseInt(page);
                load_data(page);
            });
            $(document).on('click', '#cityBtn', function () {
                city = $('#searchCity').val();
                country = $('#searchCountry').val();
                if (city !='') {
                    load_data(page,city, country);
                }
                else {
                    load_data();
                }
            });
            $(document).on('click', '#countryBtn', function () {
                city = $('#searchCity').val();
                country = $('#searchCountry').val();
                if (country != '') {
                    load_data(page,city, country);
                }
                else {
                    load_data();
                }
            });
        });
    </script>
</body>

</html>