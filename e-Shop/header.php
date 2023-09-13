
<div class="row " height="200px" style="background-color:#38b6ff;">
                    <div class="col-sm-2" class="logo">
                    <img align="center" src="newlogo.jpg" alt="funny GIF" height="100px"style="margin-top:10px;margin-left:50px;margin-bottom:10px " >
                    </div>
                
		 <div class="col-sm-10"  style="height:100px">
        <form method="post" action="searchengine.php"class="form-horizontal" style="margin-top: 30px;padding-top:10px ">
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="search" name="txt_search" value="" placeholder="Search Products or Brands etc..." style="text-align:center" class="form-control"/>
                </div>
                <div class="col-sm-4">
                   <input type="submit" name="btnsearch" value="Search" class="btn btn-primary"/> 
                </div>   
            </div>
        </form>
                </div> 
       
    </div>
   
</div>
         		
            <div class="row " height="600"  style="box-shadow:5px 5px -205px 5px">
            
                <nav class="navbar navbar-inverse navbar-inverse" style="font-weight:bolder;background-color:#0e3a4d">
                <ul class="nav navbar-nav" >
                    <li style="margin-left:30px"><a href="./index.php" style="color:white">Home</a></li>
                    <li class="dropdown"><a href="" style="color:white" class="dropdown-toggle" class="element" data-toggle="dropdown">Electronics<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./mobile.php">Phone</a></li>
                   
                        </ul>
                    </li>
                    <li class="drop-down"><a href="" class="dropdown-toggle" style="color:white" data-toggle="dropdown">Appliances<span class="caret"></span></a>
					<ul class="dropdown-menu">
                        <li><a href="./tv.php">Television</a></li>
                    
                    </ul></li>
                    <li class="dropdown"><a href="" class="dropdown-toggle" style="color:white" data-toggle="dropdown">Beauty<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./beauty.php">Lipstick</a></li>
                   
                        </ul>
                    </li>
                  <li class="dropdown"><a href="" class="dropdown-toggle" style="color:white" data-toggle="dropdown">Fashion<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./fashion.php">Shirts</a></li>
                   
                        </ul>
                    </li>
                    <li><a href="./contact.php" style="color:white">Contact us</a></li>
                    <li><a href="./faq.php" style="color:white" >FAQ</a></li>
                </ul>
                   <ul class="nav navbar-nav navbar-right " style="margin-right:20px">
                       <?php 
                           if(isset($_SESSION['user_id']))
                   echo"<li align='right'><a href='./mycart.php'  style='color:white' >My cart</a></li>";
                       ?>
                  <li class="dropdown"><a href="" class="dropdown-toggle" style="color:white" data-toggle="dropdown">
                           <?php 
                           if(isset($_SESSION['user_id']))
                               echo"My Account";
                           else {
                           echo "Sign In";
                           }
                           ?>
                           <span class="caret"></span></a>
                      
                    <ul class="dropdown-menu">
                        <?php if(isset($_SESSION['user_id']))
                        {
                             echo"<li><a href='./profile.php'>Profile</a></li>";
                   echo" <li><a href='./change_password.php'>Change my password</a></li>";
                   echo" <li><a href='order.php'>My orders</a></li>";
                echo"<li><a href='./logout.php'>logout</a></li>";
                        }
                        else{
                            echo" <li><a href='./login_page.php'>login</a></li>";
                            echo" <li><a href='./signup_page.php'>Sign Up</a></li>";
                        }
                        ?>
                    
                       
                        </ul>
                    </li>
                    
                    </ul>  
                </nav>
           
                </nav>
            </div>
           
                   
                
