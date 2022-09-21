


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3> Image store</h3>
        <form method="post" enctype="multipart/form-data" action="upload.php">
            
            Title:<input type="name" name="title"><br><br>
            Description:<input type="name" name="description"><br><br>
            
           
            <?php if (isset($_GET['error'])): ?>
		    <p><?php echo $_GET['error']; ?></p>
	        <?php endif ?>
            
           
           <input type="file" name="my_image">
           <input type="submit" name="submit" value="Upload">
     	
       
            <input type="submit" name="submit" value="save">
        </form>
        
        
    </body>
</html>