<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Wassilli Co.</title>
    <link rel="icon" href="./src/assets/logo.png"  type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="cont">

    <div class="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                <i class="fa fa-home"> <img src="./assets/logo.png" alt="dashboard_icon" width="50px" /></i>
                    <h1>Wassilli Co.</h1>
                </div>
                <i
                    class="fa fa-times"
                    id="sidebarIcon"
                ></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"> <img src="./assets/home.png" alt="dashboard_icon" width="20px" /></i>
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-user-secret" aria-hidden="true" > <img src="./assets/package.png" alt="stock" width="20px" /></i>
                    <Link to='/stock'>Employees</Link>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"> <img src="./assets/money.png" alt="finan" width="20px" /></i>
                    <a href="views/customer.php">Customers</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-wrench"><img src="./assets/report.png" alt="reports" width="20px" /></i>
                    <a href="#">Products</a>
                </div>

                <div class="sidebar__link">
                    <i class="fa fa-handshake-o"><img src="./assets/clerk.png" alt="cashiers" width="20px" /></i>
                    <Link to='/cashier'>Orderes</Link>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-question"><img src="./assets/logout.png" alt="logout" width="20px" /></i>
                    <Link to='/'>Offices</Link>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-question"><img src="./assets/logout.png" alt="logout" width="20px" /></i>
                    <Link to='/'>Payments</Link>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-question"><img src="./assets/logout.png" alt="logout" width="20px" /></i>
                    <Link to='/'>Log out</Link>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>