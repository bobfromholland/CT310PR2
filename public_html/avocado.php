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
             
             getIngredient('TEXT1', 1);
             
             ?>
            <br>
               
                <?php

                    if( $_SESSION['userName'] == 'Guest')
                    { echo "Comments are only available after login <br><br>";
                    } else {
                        if(!isset($_POST['submit'])) {
                ?>
            
                    <form action="#" method="post">
                    Name: <br><input type="text" name="username" ><br>
                    Comment: <br><textarea rows="4" cols="50" name="comment" ></textarea> <br>
                     <input type='submit' class='submit' value='Submit' name='submit' />
                     </form>
                 <?php
                 } else { 
                 echo "<br><b>".$_POST['username'].":</b><br/>".$_POST['comment']."<br/><br/>"; }
                    }
                    
                    
                    ?>
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">
                  
                  
                               <?php 
             
             getIngredient('TEXT2', 1);
             
             ?>
                  
                  
               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">

         
                      <?php 
             
             getIngredient('TEXT3', 1);
             
             ?>
         
         
         
        </div>
      </div>
       <footer>
           <center>
               <hr>
               <p>This site is part of a CSU <a href="www.cs.colostate.edu/~ct310">CT310</a> Course Project. &copy; Copyright 2017, Team18</p>
            <hr>
            </center>
      </footer>
   </body>
</html>

