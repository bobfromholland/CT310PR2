<?php 
$dir="https://www.cs.colostate.edu/~velthuis/Project2";
?>
<nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>       
               <span class="icon-bar"></span>      
               <span class="icon-bar"></span>                      
               
			   </button>
               <a class="navbar-brand" href="https://www.cs.colostate.edu/~ct310/yr2017sp/">CT 310</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               
			   <ul class="nav navbar-nav">
                  <li><a href="<?php echo $dir?>/index.php">Home</a></li>
                  <li><a href="<?php echo $dir?>/about.php">About</a></li>
                  
				  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients 
                     <span class="caret"></span></a>
                     
					 <ul class="dropdown-menu">
                        <li><a href="<?php echo $dir?>/ginger.php">Ginger</a></li>
                        <li><a href="<?php echo $dir?>/avocado.php">Avocado</a></li>
                        <li><a href="<?php echo $dir?>/plantain.php">Plantain</a></li>
                     </ul>
					 
                  </li>
                  
                  <?php
                    if( $_SESSION ['userName'] == 'Guest')
                    { } else {
                ?>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Tools
                     <span class="caret"></span></a>
                     
					 <ul class="dropdown-menu">
                        <li><a href="<?php echo $dir?>/create.php">Create DB</a></li>
                        <li><a href="<?php echo $dir?>/add.php">Add Ingredient</a></li>
                        <li><a href="<?php echo $dir?>/update.php">Update</a></li>
                     </ul>
					 
                  </li>
                  
               </ul>
               
               <?php
                    }
                ?>
			   
               <ul class="nav navbar-nav navbar-right">
               <?php
                    if( $_SESSION ['userName'] == 'Guest')
                    {
                ?>
                  <li><a href="<?php echo $dir?>/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                 <?php
                    }
                    else
                    {
                ?>
                  <li><a href="<?php echo $dir?>/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
				  
				  <li><a href="<?php echo $dir?>/login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                 <?php
                    }
                    ?>
               </ul>
            </div>
         </div>
      </nav>
