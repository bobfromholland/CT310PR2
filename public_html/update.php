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
            <br>
            
            
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">

               <form method="post">
                Select Ingredient to Update:<br><br>
                <input type="number" name="selID" value="0"><br>
                </form>
            <?php

                if (! isset ( $_POST ['selID'] )) {
                    $ID = - 1;
                } else if ($_POST ['selID'] < 0) { 
                    echo "ID not valid";
                } else {
                    $ID = intval ( $_POST ['selID'] );
                }
            ?>
               <br>
               <br>
               <br>
               <br>
               <br>
                    <form class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="ID">ID</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="id" id="id"
								value="<?php echo $ID ?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="NAME">Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="name" id="name"
								value="<?php echo getIngredient('NAME', $ID) ?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT1">Left side text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT1" id="TEXT1"
								value="<?php echo getIngredient('TEXT1', $ID) ?>" ></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT2">Middle text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT2" id="TEXT2"
								value="<?php echo getIngredient('TEXT2', $ID) ?>" ></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="TEXT3">Right side text</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" name="TEXT3" id="TEXT3"
								value="<?php echo getIngredient('TEXT3', $ID) ?>" ></textarea>
                        </div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="save" id="save" class="btn btn-default">Save</button>
						</div>
					</div>
				</form>
               <br>

                <?php

                if (isset ( $_POST ['save'] )) {
                    updateIngredient($_POST ['id'], 'NAME', $_POST ['name']);
                    updateIngredient($_POST ['id'], 'TEXT1', $_POST ['TEXT1']);
                    updateIngredient($_POST ['id'], 'TEXT2', $_POST ['TEXT2']);
                    updateIngredient($_POST ['id'], 'TEXT3', $_POST ['TEXT3']);
                }
            ?>

               
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
