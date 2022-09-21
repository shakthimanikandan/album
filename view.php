<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="test";


$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
    echo "connection failed:".mysqli_connect_error();
    exit;
}

?>
<!doctype html>
<html>
<head>

</head>
<body>
<form method="post" enctype="multipart/form-data">
    <?php
         $ret_query= "SELECT * FROM `album` ";
         $query_run=mysqli_query($conn,$ret_query);
        
         while($row=mysqli_fetch_array($query_run)){
            ?>
           
                    <h1><?php echo $row['title'] ?></h1><br>
                    <i><?php echo $row['description'] ?></i><br>
                    <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" style="width:250px;height:250px">'; ?><br>
                    
             
              <?php
        }
        ?>
</form>
</body>
</html>