<?php include "db.php";
      include "function.php";
?>
<?php 
if(isset($_POST['submit'])) {
    deleteData();
    }
?>

<?php include "includes/header.php";?>

<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">  
        <?php 
            if(isset($result)) {
                echo "<h3 class=\"form-signin-heading\">Update data Berhasil</h3>";
            } 
            ?>     
		    <h3 class="form-signin-heading">Welcome Back! Please Delete</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="username" placeholder="Username" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password"/>     		
			  
			 <div class="form-group">
			     <select name="id" id="">
                 <?php 
                    showAllData();
                ?>
			     </select>
			 </div> 
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="Submit">Delete</button>  			
		</form>			
	</div>
</div>


<?php include "includes/footer.php";?>