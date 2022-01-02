<?php
    include("connection.php");
    $limit = 3;
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }else{
        $page = 1;
    }
    $start_from = ($page - 1) * $limit;
    if(isset($_POST['desc']) && $_POST['desc'] != null){
        $keywords = $_POST['desc'];
        $keywordslength = count($keywords);
        $query = "SELECT * FROM products WHERE productDescription ";
        for($x = 0; $x < $keywordslength; $x++){
            if($x == $keywordslength -1){
            $query .= " LIKE '%".$keywords[$x]."%'";
            }else{
                $query .= " LIKE '%".$keywords[$x]."%' OR productDescription ";
            }
        }
        
    }else{
        $query = "SELECT * FROM products LIMIT  $start_from, $limit";
    }
    $res = mysqli_query($connection,$query) or die("Error in Selecting " . mysqli_error($connection));

    $count = mysqli_query($connection, "SELECT count(*) AS total_data from products");
    
    $output = "";
    $output .= "<table class='table table-bordered table-striped'>
    <tr>
        <th>Code</th>
        <th>Product Name</th>
        <th>Product Line</th>
        <th>product Description</th>
        <th>Quantity In Stock</th>
        <th>Buy Price</th>
        <th>Action</th>
    </tr>";
  
    if(mysqli_num_rows($res) < 0 ){
        $output .= "
            <tr>
                <td colspan='8' align='center'>No Data </td>
            </tr>";
    }else{
        while($row = mysqli_fetch_array($res)){
        $output .="<tr>
        <td>".$row['productCode']."</td>
        <td>".$row['productName']."</td>
        <td>".$row['productLine']."</td>
        <td>".$row['productDescription']."</td>
        <td>".$row['quantityInStock']."</td>
        <td>".$row['buyPrice']."</td>
        <td><div class='col-md-12'>
             <div class='row'> 
             <div class=''>
               <button id= '".$row['productName']."' class='btn btn-success my-3'>Edit</button>
               <button id= '".$row['productName']."' class='btn btn-danger my-3'>Delete</button>
            </div>
            </div> 
            </div>
        </td>
    </tr> ";
    }
    }
    $query2 = "SELECT * FROM products";
    $page_result = mysqli_query($connection,$query2);
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
    $output .="</table><nav>
            <ul class='pagination'>
                <li class='page-item'>
                    <a class='page-link' id='".$previous." aria-label='Previous'>
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
        </nav>";
    
    echo $output;

    
?>