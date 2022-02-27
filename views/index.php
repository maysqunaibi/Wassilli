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
                <div class='input-group mb-3 pl-8  w-25 d-inline-flex  my-4'>
                <input type='text' id='min' class='form-control border-right-0 border'
                        placeholder='Min credit limits '>
                </div>
                <div class='input-group mb-3 pl-8  w-25 d-inline-flex  my-4'>
                    <input type='text' id='max' class='form-control border-right-0 border'
                        placeholder='Max credit limits '>
                    <span class='input-group-append'>
                        <button class='btn border-left-0 border' type='button' id='countBtn'>
                            Count
                        </button>
                    </span>
                </div>
                <div class='input-group mb-3 float-right w-25 d-inline-flex my-4'>
                <span class='input-group-append pl-4' >
                       
                    </span>
                    <span class='input-group-append pl-4'>
                       
                    </span>
                    <span class='input-group-append pl-4' >
                       
                       </span>
                       <span class='input-group-append pl-4'>
                          
                       </span>
                       <span class='input-group-append pl-4' >
                       
                       </span>
                       <span class='input-group-append pl-4'>
                          
                       </span>
                       <span class='input-group-append pl-4'>
                          
                          </span>
                    <span class='input-group-append pl-4'>
                      
                            <a href="about.php" class='btn  btn-success'>Contact us</a>
                        
                    </span>
                </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Products By City or Country</h5>
                            <p class="card-text">Get products that had been ordered by customers from certain city or
                                certain country.</p>
                            <a href="filter_products.php" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Products By Price</h5>
                            <p class="card-text"> Get show products details that its price is more than particular
                                price.</p>
                            <a href="filter_by_price.php" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Products By Description</h5>
                            <p class="card-text">Get products that they have in the description one or more keywords</p>
                            <a href="filter_desc.php" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Products and Customers</h5>
                            <p class="card-text">Show customers names and products names they had ordered.</p>
                            <a href="filter_cust_prod.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Employee and Orders</h5>
                            <p class="card-text">Show employees names and the orders they facilitated</p>
                            <a href="filter_emp_ord.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Best Employees</h5>
                            <p class="card-text">Show employees names and total prices of products they sold.</p>
                            <a href="filter_emp_price.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter Best Offices</h5>
                            <p class="card-text">Show offices names and amount of money earned through their sales representatives.</p>
                            <a href="filter_offices.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lazy Employees</h5>
                            <p class="card-text">Show employees names who don’t have sell any product.</p>
                            <a href="filter_lazy_emp.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Good Employees</h5>
                            <p class="card-text">Show employees names who sold at least one product.</p>
                            <a href="filter_good_emp.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" tabindex="-1" id="toggleMyModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Customers Cridit Limit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="resNum"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
          var myModal = new bootstrap.Modal(document.getElementById('toggleMyModal'), {
            keyboard: false
          })
          $(document).on('click', '#countBtn', function () {
            var min = $('#min').val();
            var max = $('#max').val();
            load_data(min, max);
            console.log(min, max, "hiiiiiiii")
            function load_data(min, max) {
                $.ajax({
                    url: "./../controlers/count_cust.php", cache: false, timeout: 2000,
                    method: "POST",
                    data: {min: min, max:max},
                    success: function (data) {
                      console.log(data)
                        $(".resNum").html(data);
                    }
                })
            }
              var toggleMyModal = document.getElementById('toggleMyModal') // relatedTarget
              myModal.show(toggleMyModal)
            });

        });
    </script>
</body>

</html>