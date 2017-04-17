<!DOCTYPE html>
<html lang="en">
   <head>
<?php
    include './control.php'; 
    include './header.php';
?>
</head>
<body class="document">
    <!-- Use the jumbotron for creating the header for the webpage -->
    <?php
        include './jumbotron.php';
        include './navbar.php';
    ?>
      <!-- create three coulumn with lg and md size-->
      <div class="container-fluid">
         <div class="row visible-on">
            <div class="col-md-4"></div>
         </div>
         <div class="row">
            <div class="col-md-4">
                <h2>What we are all about:</h2>
                <ul>
                    <li>Ingredients</li>
                    <li>Health</li>
                    <li>Vitamins</li>
                    <li>Minerals</li>
                    <li>Foods</li>
                </ul>
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pulvinar orci quis nunc pretium, ut auctor odio ullamcorper. In in magna leo. Aliquam erat volutpat. In ac sapien fringilla, semper nibh at, suscipit turpis. Praesent commodo, metus faucibus suscipit faucibus, libero urna maximus urna, sed fringilla elit dolor sit amet nibh. Integer tempus, leo vitae feugiat tempor, mi sapien dapibus urna, nec condimentum mauris velit eu purus. Pellentesque hendrerit ex arcu, ac dignissim tellus vulputate in. Suspendisse quis ipsum elementum, porttitor ex in, malesuada felis. Maecenas porttitor laoreet metus non gravida. Nulla pellentes.
                     </p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs coffee">
                  <img src="<?php echo $dir?>/images/ingredients.jpeg" class="ingr" title="Ingredients" alt="Photo of Ingredients" />
                  <p>Image from Pexels.com</p>
               </div>
            </div>
         </div>
         <!-- Add Main Content here -->
         <!-- Add Image here -->				
      </div>
      </div>
   </body>
    <?php
       include 'footer.php';
    ?> 
</html>
