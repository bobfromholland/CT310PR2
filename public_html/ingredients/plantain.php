<!DOCTYPE html>
<html lang="en">
   <head>
<?php
    include '../control.php'; 
    include '../header.php';
?>
</head>
<body class="document">
    <!-- Use the jumbotron for creating the header for the webpage -->
    <?php
        include '../jumbotron.php';
        include '../navbar.php';
    ?>
      <!-- create three coulumn with lg and md size-->
      <div class="container-fluid">
         <div class="row visible-on">
            <div class="col-md-4"></div>
         </div>
         <div class="row">
            <div class="col-md-4">
                <strong>
                <h2>Benefits</h2>
                <p>
                    Plantains, a form of a banana, have many beneficial properties. These include:
                    <ul class="benefits">
                        <li> High in Vitamin-C </li>
                        <li> High in Vitamin-A </li>
                        <li> High in Vitamin-B6 which helps prevent coronary artery disease and stroke risk </li>
                        <li> Can help lower the risk of heart problems </li>
                    </ul>
                    </strong>
                    <br>
                    <br>
                    Benefits from authoritynutrition.com
                </p>
                              <br>
                <br>
                <br>
                 <strong>
                        <p>
                        Comments:
                        </p>
                                            </strong>
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
                     <p>
                        Plantains, also known as plátanos, are closely related cultivars of fruit or dessert banana. In general, they treated as vegetables in the kitchen much like fellow tropical produces such as potatoes, taro, breadfruit, yam, sweet potatoes, etc. Indeed, plátano are one of the staple sources of carbohydrates for larger populations in Asia, Oceania, Africa, and Central Americas for centuries served in main meals.
                        <br>
                        As in the bananas, plantain too belongs to the Musaceae family. In their natural habitat, plátano was thought to have developed by hybridization of two wild species of Musaceae, Musa acuminata Colla (AA) and M. balbisiana Colla (BB), and consist of chromosomal triploid AAB genome.
                     </p>
                  </strong>
                  <br>
                    <p>
                        http://www.nutrition-and-you.com/plantains.html
                    </p>
                    <br>
               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">
            <img src="../images/plantain.jpg" class="ingImg" title="Mmmmm, Plantains" alt="Photo of Plantain" />
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

