<?php 
    $active='HOME';
   include("includes/header.php");
//    require_once "Fucntions.php";

?>

<div id="advantages"><!--advantages begin-->
     <div class="container"><!--container  begin -->
        <div class="same-height-row"><!--same-height-row  begin -->
           <div class="col-sm-4"><!--col-sm-4  begin --> 
               <div class="box same-height"><!--box same-height  begin -->
                  <div class="icon"><!--icon begin -->
                     <i class="fa fa-heart"></i>
                  </div><!--icon  Finish -->
                   <h3><a href="#">We Love Our Customers</a></h3>
                   <p>We pride ourselves on putting our customers first and providing personalized and attentive service to ensure their satisfaction. </p>
               </div><!--box same-height  Finish -->
           </div> <!--col-sm-4  Finish -->
           <div class="col-sm-4"><!--col-sm-4  begin --> 
               <div class="box same-height"><!--box same-height  begin -->
                  <div class="icon"><!--icon begin -->
                     <i class="fa fa-tag"></i>
                  </div><!--icon  Finish -->
                   <h3><a href="#">We Have The Best Prices</a></h3>
                   <p>Prices are typically provided through a customized quote based on your specific needs and preferences. </p>
               </div><!--box same-height  Finish -->
           </div> <!--col-sm-4  Finish -->
           <div class="col-sm-4"><!--col-sm-4  begin --> 
               <div class="box same-height"><!--box same-height  begin -->
                  <div class="icon"><!--icon begin -->
                     <i class="fa fa-thumbs-up"></i>
                  </div><!--icon  Finish -->
                   <h3><a href="#">100% Proffesional Services</a></h3>
                   <p>We provide delivery services  for smooth and stress-free order for individuals. </p>
               </div><!--box same-height  Finish -->
           </div> <!--col-sm-4  Finish -->
             
        </div><!--same-height-row  Finish -->
     </div><!--container  Finish -->
</div><!--advantages  Finish -->
 <div id="hot"><!--hot  begin -->

     <div class="box"><!--box begin -->
           
           <div class="container"><!--container begin -->

                <div class="col-md-12"><!--col-md-12  begin -->
                     <h2>
                         Our Latest Products
                     </h2>

                </div><!--col-md-12  Finish -->

           </div><!--container  Finish -->

     </div><!--box  Finish -->

 </div><!--hot  Finish -->

 <div id="content" class="container"><!--container begin -->

<div class="row"><!--row  begin -->

    <?php 
    
       getPro();
    
    ?>
   
</div><!--row  Finish -->

</div><!--row  container -->


    <?php
    
    include("includes/footer.php")
    
    ?>

    <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>
</html>