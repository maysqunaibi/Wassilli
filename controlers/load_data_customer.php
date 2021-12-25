<?php
    include("connection.php");
    $limit = 5;
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }else{
        $page = 1;
    }
    $start_from = ($page - 1) * $limit;
    $query = "SELECT * FROM customers ";
    if(isset($_POST["name"]) && $_POST["name"] !='')
    {
        $query .= "WHERE customerName LIKE '%".$_POST['name']."%'";
    }
    if(isset($_POST["country"]) && $_POST["country"] !='')
    {
        $query .= "WHERE country = '".$_POST["country"]."' ";
    }
    if(isset($_POST["city"])&& $_POST["city"] !='')
    {
        $query .= "WHERE city = '".$_POST["city"]."' ";
    }
    $query .= " LIMIT  $start_from, $limit";
   
    $res = mysqli_query($connection,$query) or die("Error in Selecting " . mysqli_error($connection));

    $query2 = "SELECT * FROM customers LIMIT  $start_from, $limit";
    $res2 = mysqli_query($connection,$query2) or die("Error in Selecting " . mysqli_error($connection));
    $rescity = mysqli_query($connection,$query2) or die("Error in Selecting " . mysqli_error($connection));

    $count = mysqli_query($connection, "SELECT count(*) AS total_data from customers");

    // $countryQuery = "SELECT * FROM category ORDER BY category_name ASC";
    // $countries = mysqli_query($connect, $query);
    echo "<div><div class='d-inline-flex'><a href='add_user.php'><button class='btn btn-success my-3'> Add New User </button></a></div>
    <div class='input-group mb-3 pl-8  w-25 d-inline-flex  my-4 '>
    <input type='text' id='searchName' class='form-control border-right-0 border' placeholder='Search By Name'>
    <span class='input-group-append'>
      <button class='btn border-left-0 border' type='button' id='searchBtn'>
        <i class='fa fa-search'></i>
      </button>
    </span>
  </div>
  </div>";
    $countryQuery = 
    $output = "<div class='table-responvive'>";
    $output .= "<table class='table table-bordered table-striped' id='product_data'>
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th><select name='city' id='city' class='form-control'>
        <option value=''>City Search</option>";
       
        while($row1 = mysqli_fetch_array($rescity))
        {
            $output .= '<option value="'.$row1["city"].'">'.$row1["city"].'</option>';
        }
        
        $output .= "</select></th>
        <th>
        <select name='country' id='country' class='form-control'>
        <option value=''>Country Search</option>";
       
        while($row1 = mysqli_fetch_array($res2))
        {
            $output .= '<option value="'.$row1["country"].'">'.$row1["country"].'</option>';
        }
        
        $output .= "
       </select></th>
        <th>Employee Sales Number</th>
        <th>Cridit Limit</th>
        <th>Action</th>
    </tr>";
  
    if(mysqli_num_rows($res) < 0 ){
        $output .= "
            <tr>
                <td colspan='6' align='center'>No Data </td>
            </tr>";
    }else{
        while($row = mysqli_fetch_array($res)){
        $output .="<tr>
        <td>".$row['customerNumber']."</td>
        <td>".$row['customerName']."</td>
        <td>".$row['city']."</td>
        <td>".$row['country']."</td>
        <td>".$row['salesRepEmployeeNumber']."</td>
        <td>".$row['creditLimit']."</td>
        <td> <div class='col-md-12'>
             <div class='row'> 
             <div class=''>
               <button id= '".$row['customerNumber']."' class='btn btn-success my-3'>Edit</button>
               <button id= '".$row['customerNumber']."' class='btn btn-danger my-3'>Delete</button>
            </div>
            </div> 
            </div>
        </td>
    </tr> ";
    }
    }
    $page_query = "SELECT * FROM customers";
    $page_result = mysqli_query($connection,$page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$limit);
    if($page >= $total_pages){
        $next = $total_pages;
    }else{
        $next = $page +1;
    }
    if($page <= 1){
        $previous = 1; 
    }else{
        $previous = $page - 1;
    }
    $output .="</table> </div>
            <ul class='pagination'>
                <li class='page-item'>
                    <a class='page-link' id='".$previous." aria-label='Previous' >
                        <span aria-hidden='true'>&laquo;</span>
                        <span class='sr-only'>Previous</span>
                     </a>
                </li>";
    for($i=1; $i <= 4; $i++){
        $output .="<li class='page-item '><a class='page-link' id='".$i." href='index.php?page=".$i."'>".$i."</a></li>";
    }
    $output .="<li class='page-item'>
                    <a class='page-link' id='".$next." aria-label='Next'>
                        <span aria-hidden='true'>&raquo;</span>
                        <span class='sr-only'>Next</span>
                    </a>
                </li>
            </ul>
            ";
    echo $output;
   
?>