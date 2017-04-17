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
                    Ginger has both medicinal and culinary uses. It is valued for it unique flavor and its health benefits alike. These include:
                    <ul class="benefits">
                        <li> Nausea and gastrointestinal relief </li>
                        <li> Muscle soreness reduction </li>
                        <li> Anti-Inflammatory </li>
                        <li> Can help lower risk of infections </li>
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
                        Ginger (Zingiber officinale) is a flowering plant whose rhizome, ginger root or simply ginger, is widely used as a spice or a folk medicine.

                        It is a herbaceous perennial which grows annual stems about a meter tall bearing narrow green leaves and yellow flowers. Ginger is in the family Zingiberaceae, to which also belong turmeric (Curcuma longa), cardamom (Elettaria cardamomum), and galangal. 
                        </br>
                        Ginger originated in the tropical rainforest in Southern Asia. Although ginger no longer grows wild, it is thought to have originated on the Indian subcontinent because the ginger plants grown in India show the largest amount of genetic variation. Ginger was exported to Europe via India in the first century AD as a result of the lucrative spice trade and was used extensively by the Romans.
                        <br>
                        <br>
                        The flavor of ginger is very unique. It is a warm and sharp flavor with a pungent but pleasant aroma. Ginger has has a spicyness to it, though not in the same way as a pepper. The most common uses are in soups, stir fry, and baked goods.
                     </p>
                  </strong>
                     <br>
                     <p>
                        Description from Wikipedia.com
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs ingImg">
                  <img src="../images/ginger.jpg" class="ingImg" title="Mmmmm, Ginger" alt="Photo of Ginger Root" />
                  <p> Image from pixabay.com </p>
               </div>
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

