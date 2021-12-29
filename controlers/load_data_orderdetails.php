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

    $query = "SELECT * FROM orderdetails LIMIT  $start_from, $limit";
    $res = mysqli_query($connection,$query) or die("Error in Selecting " . mysqli_error($connection));

    $count = mysqli_query($connection, "SELECT count(*) AS total_data from orderdetails");
    
    $output = "";
    $output .= "<table class='table table-bordered table-striped'>
    <tr>
        <th>OrderNumber</th>
        <th>ProductCode</th>
        <th>QuantityOrdered</th>
        <th>PriceEach</th>
        <th>OrderLineNumber</th>
        <th>Action</th>
    </tr>";
    echo "<a href='add_user.php'><button class='btn btn-success my-3'> Add New User </button></a>";
    if(mysqli_num_rows($res) < 0 ){
        $output .= "
            <tr>
                <td colspan='6' align='center'>No Data </td>
            </tr>";
    }else{
        while($row = mysqli_fetch_array($res)){
        $output .="<tr>
        <td>".$row['orderNumber']."</td>
        <td>".$row['productCode']."</td>
        <td>".$row['quantityOrdered']."</td>
        <td>".$row['priceEach']."</td>
        <td>".$row['orderLineNumber']."</td>
       
        <td> <div class='col-md-12'>
             <div class='row'> 
             <div class=''>
               <button id= '".$row['orderNumber']."' class='btn btn-success my-3'>Edit</button>
               <button id= '".$row['orderNumber']."' class='btn btn-danger my-3'>Delete</button>
            </div>
            </div> 
            </div>
        </td>
    </tr> ";
    }
    }
    $page_query = "SELECT * FROM orderdetails";
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
    $j = $total_pages>4? 4:$total_pages;
    $output .="</table><nav>
            <ul class='pagination'>
                <li class='page-item'>
                    <a class='page-link' id='".$previous." aria-label='Previous'>
                        <span aria-hidden='true'>&laquo;</span>
                        <span class='sr-only'>Previous</span>
                     </a>
                </li>";
    for($i=1; $i <= $j; $i++){
        $output .="<li class='page-item '><a class='page-link' id='".$i." href='index.php?page=".$i."'>".$i."</a></li>";
    }
    $output .="<li class='page-item'>
                    <a class='page-link' id='".$next." aria-label='Next'>
                        <span aria-hidden='true'>&raquo;</span>
                        <span class='sr-only'>Next</span>
                    </a>
                </li>
            </ul>
        </nav>";
    
    echo $output;

    
?>