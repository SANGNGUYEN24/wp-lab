 <!--navigation-->

 <?php
 $home = $page == "home"? "active":"";
 $product = $page == "product"? "active":"";
 $login = $page == "login"? "active":"";
 $register = $page == "register"? "active":"";
 echo "
 
 <nav>
     <!--logo-->
     <label href=\"#\" class=\"logo\">Sang Nguyen</label>
     <ul>
     <li ><a class=\"$home\" href=\"./?page=home\">Home</a></li>
     <li class = \"dropdown\">
         <div ><a class=\"$product\" href=\"./?page=product\">Product</a></div>
         <div class=\"dropdown-content\">
         <a href=\"#\">Product 1</a>  
         <div class=\"divider\"></div>     
         <a href=\"#\">Product 2</a>  
                  <div class=\"divider\"></div>     
    
         <a href=\"#\">Product 3</a>     
                  <div class=\"divider\"></div>     
  
         <a href=\"#\">Product 4</a>       
         </div>
     </li>
         
         <li ><a class=\"$login\" href=\"./?page=login\">Login</a></li>
         <li ><a class=\"$register\"href=\"./?page=register\">Register</a></li>
     </ul>
 </nav>

 "
 ?>