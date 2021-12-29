<?php
    include_once('../session.php');
    include("../controlers/connection.php");
    //Get the foriegn key values from employee table;
    $customerNumbersQuery = "SELECT * FROM `customers`";
    $customerNumbers = mysqli_query($connection, $customerNumbersQuery);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Wassilli- add new customer</title>
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/logo.png" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <div class="cont">

    <div class="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                <i class=""> <img src="../assets/logo.png" alt="dashboard_icon" width="50px" /></i>
                    <h1>Wassilli Co.</h1>
                </div>
                <i
                    class="fa fa-times"
                    id="sidebarIcon"
                ></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class=""> <img src="../assets/home.png" alt="dashboard_icon" width="20px" /></i>
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="sidebar__link">
                    <i class="" aria-hidden="true" > <img src="../assets/clerk.png" alt="stock" width="20px" /></i>
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
                    <Link to='/'>Payments</Link>
                </div>
                <div class="sidebar__link">
                <i class=""><img src="../assets/package.png" alt="cashiers" width="20px" /></i>
                <a href="orderdetails.php">OrderDetails</a>
                </div>
                <div class="sidebar__link">
                <i class=""><img src="../assets/report.png" alt="reports" width="20px" /></i>
                <a href="productlines.php">ProductLines</a>
                </div>
                <div class="sidebar__link">
                    <i class=""><img src="../assets/logout.png" alt="logout" width="20px" /></i>
                    <a href="../signout.php">Log out</a>
                </div>
            </div>
        </div>
          <div class="col-sm-12">
          <div class="container">
     <div class="col-md-12">
       <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4 jumbotron my-5">
           <h4 class="text-center my-2">Add New Order</h4>
           <form method="POST" id="customerForm">
             
             <label>Order Date</label>
             <!-- <input type="text" name="orderDate" class="form-control" autocomplete="off" required> -->
             <input class="datepicker" data-date-format="mm/dd/yyyy">


             <label class="mt-2">customer Number</label>
             <!-- <input type="text" name="salesRepEmployeeNumber" class="form-control" autocomplete="off" required> -->
             <select name="customerNumber" id="customerNumber" class="form-control" default="choose employee">
                <?php 
                while($row = mysqli_fetch_array($customerNumbers))
                {
                  echo '<option value="'.$row["customerNumber"].'">'.$row["customerNumber"].'</option>';
                  
                }
                ?>
                </select>
             
             <input type="submit" id="create" name="add_user_order" class="btn btn-success my-2" value="Add Order" >

           </form>
         </div>
        <div class='sticky-top invisible' id="greenalert">
            <div class='col-md-8 position-fixed top-0 left-0 py-4'>
            <div class='alert alert-success alert-dismissible fade show w-50' role='alert'>
            <strong>You have successfully add new Customer. </strong>Check customers table.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            </div>
            </div>
        </div>
        <div class='sticky-top invisible' id="redalert">
            <div class='col-md-8 position-fixed top-0 left-0 py-4'>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Faild to add new Customer. </strong>Please Fill all the feilds.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
         
       </div>
       </div>
        </div>
     </div>

   </div>
          </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit','#customerForm',function(event){
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: "./../controlers/add_customer.php", cache: false, timeout: 2000,
                        data: $('form').serialize(),
                        success:function(){
                            $('#greenalert').removeClass('invisible');
                            $('#greenalert').addClass('visible');
                            $( '#customerForm' ).each(function(){
                                this.reset();
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            $('#rednalert').removeClass('invisible');
                            $('#rednalert').addClass('visible');
                        }
                    });
            })
            $('.datepicker').datepicker({
    startDate: '-3d'
});
        });
       
    </script>
  </body>
</html>