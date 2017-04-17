<!DOCTYPE html>
<?php 
include '../control.php';
include '../header.php';
include '../database.php';
?>
</head>
   <body class="document">
      <!-- Use the jumbotron for creating the header for the webpage -->
      <?php include '../jumbotron.php'; ?>
      <!-- Create the collapsing navigation bar -->
      <?php include '../navbar.php'; ?>
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
                  <strong>
                    <h2> Description </h2>
                     <p>
                        The avocado (Persea americana) is a tree that is native to South Central Mexico, classified as a member of the flowering plant family Lauraceae. Avocado (also alligator pear) also refers to the trees fruit, which is botanically a large berry containing a single seed.

                        Avocados are commercially valuable and are cultivated in tropical and Mediterranean climates throughout the world. They have a green-skinned, fleshy body that may be pear-shaped, egg-shaped, or spherical. Commercially, they ripen after harvesting. 
                        <br>
                        <br>
                        Avocados have a very subtle flavor that is green and fresh with a hint of sweetness. In general, avocados tend to complement and accent other flavors that are present in food. The soft, almost creamy, texture is pleasant on the tongue. Avocados can be served in a variety of ways. 
                        <ul class="waysToEat">
                            <li> Sliced </li>
                            <li> Mashed/Spread </li>
                            <li> Cubed </li>
                            <li> Guacamole </li>
                        </ul>
                     </p>
                     </strong>
                     <br>
                     <p>
                        Description from Wikipedia.com
                     </p>
                  </strong>
               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">
            <img src="../images/avocado.jpg" class="ingImg" title="Mmmmm, Avocado" alt="Photo of Avocado" />
            <p> Image from pixabay.com </p>
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

