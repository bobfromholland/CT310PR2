<!DOCTYPE html>
<?php 
include 'control.php';
include 'header.php';
include 'database.php';
?>
</head>
   <body class="document">
      <!-- Use the jumbotron for creating the header for the webpage -->
      <?php include 'jumbotron.php'; ?>
      <!-- Create the collapsing navigation bar -->
      <?php include 'navbar.php'; ?>
            <div class="container-fluid">
         <div class="row visible-on">
            <div class="col-md-4"></div>
         </div>
         <div class="row">
            <div class="col-md-4">

            <br>
            <form method="post" action="create.php">
             <input type="submit" name="button1" value="Create">
             </form>
             <?php
             if(isset($_POST['button1'])) {
                       createIngredientTable();
                    } 
                    
                    echo "<br>Database is active!";
                    
                    ?>
            <br>
            
            
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">

               
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs coffee">

              
               </div>
            </div>
         </div>		
      </div>
      </div>

	  </body>
	  <?php
	  include 'footer.php';
	  ?>
</html>
