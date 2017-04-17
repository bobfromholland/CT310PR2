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
             <?php 
             
             getAll(); 
             
             ?>
            <br>
            
            
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">

               <br>
               <br>                
                                    <form class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="addID">ID</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="addID" id="addID"
								value="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="NAME">Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="NAME" id="NAME" value="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT1">Left side text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT1" id="TEXT1"
								value="" ></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT2">Middle text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT2" id="TEXT2"
								value="" ></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT3">Right side text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT3" id="TEXT3"
								value="" ></textarea>
                        </div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="create" class="btn btn-default">Create</button>
						</div>
					</div>
				</form>
                
                
               <?php
               echo getRows();
               
                if(isset($_POST['create'])) {
                        insertIngredient($_POST['addID'], $_POST['NAME'], $_POST['TEXT1'], $_POST['TEXT2'], $_POST['TEXT3']);
                        }
               ?>
               
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs coffee">

                <br>
               <br>
               <form method="post" action="add.php">
                Delete Ingredient:<br><br>
                Ingredient ID<br>
                <input type="number" name="deleteID" value=""><br><br>
                <input type="submit" name="delete" value="Delete">
                </form> 
                
               <?php
                if(isset($_POST['delete'])) {
                        deleteIngredient($_POST['deleteID']);
                        }
               ?>

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
