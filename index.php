<!-- <?php
include_once('./controlers/session.php');
?> -->
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="shortcut icon" href="assets/logo.png" />

</head>
  <body>
    <div class="cont">

    <div class="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                <i> <img src="./assets/logo.png" alt="dashboard_icon" width="50px" /></i>
                    <h1>Wassilli Co.</h1>
                </div>
                <i
                    class="fa fa-times"
                    id="sidebarIcon"
                ></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i > <img src="./assets/home.png" alt="dashboard_icon" width="20px" /></i>
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="sidebar__link">
                    <i> <img src="./assets/clerk.png" alt="stock" width="20px" /></i>
                    <a href="views/employees.php">Employees</a>
                </div>
                <div class="sidebar__link">
                    <i> <img src="./assets/money.png" alt="finan" width="20px" /></i>
                    <a href="views/customer.php">Customers</a>
                </div>
                <div class="sidebar__link">
                    <i><img src="./assets/report.png" alt="reports" width="20px" /></i>
                    <a href="views/products.php">Products</a>
                </div>

                <div class="sidebar__link">
                    <i><img src="./assets/package.png" alt="cashiers" width="20px" /></i>
                    <a href="views/orders.php">Orderes</a>
                </div>
                <div class="sidebar__link">
                <i class="fa fa-building-o"></i>
                    <Link to='/'>Offices</Link>
                </div>
                <div class="sidebar__link">
                <i class="fa fa-usd"></i>
                    <Link to='/'>Payments</Link>
                </div>
                <div class="sidebar__link">
                    <i><img src="./assets/logout.png" alt="logout" width="20px" /></i>
                    <a href="./views/login.php">Log out</a>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>