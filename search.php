
<?php include "header.php"; ?>
<?php include "db.php"; ?>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-11">
            <?php

          	if(isset($_POST["search_submit"])){
              $search = $_POST['search'];

             if($search==""){
               echo "NO SEARCH ELEMENT FOUND! ENTER VALID PRODUCT KEY";
             }else {

             $post_query_count = "SELECT * FROM products";
            $find_count = mysqli_query($con, $post_query_count);
            $count = mysqli_num_rows($find_count);
            $count = ceil($count / 5);

            $query = "SELECT * FROM products WHERE product_title LIKE '%$search%'  ORDER BY product_id DESC ";
            $search_query = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($search_query)){
              $pro_id    = $row['product_id'];
              $pro_cat   = $row['product_cat'];
              $pro_brand = $row['product_brand'];
              $pro_title = $row['product_title'];
              $pro_price = $row['product_price'];
              $pro_image = $row['product_image'];



            echo "


                              <div class='col-md-3 col-xs-6' >
                      <a href='product.php?p=$pro_id'><div class='product'>
                        <div class='product-img'>
                          <img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
                          <!--<div class='product-label'>
                            <span class='sale'>-30%</span>
                            <span class='new'>NEW</span>
                          </div>-->
                        </div></a>
                        <div class='product-body'>

                          <h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
                          <h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
                          <div class='product-rating'>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                          </div>
                          <div class='product-btns'>
                            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
                            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
                            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
                          </div>
                        </div>
                        <div class='add-to-cart'>
                          <button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
                        </div>
                      </div>
                    </div>

            ";
          }} }?>  </div></div>
                    <!-- Pager -->
                    <center>
                        <ul class="pagination pagination-lg">
                            <?php
                            $page=1;
                            $count=3;
                    for($i = 1; $i <= $count; $i++){
                        if($i == $page){
                            echo "<li class='active'><a href='search.php?page={$i}'>{$i}</a></li>";
                        } else {
                            echo "<li><a href='search.php?page={$i}'>{$i}</a></li>";
                        }
                    }
                    ?>
                        </ul>
                    </center>

        <!-- Blog Sidebar Widgets Column -->


    </div>
    <!-- /.row -->

    <!-- Including Footer PHP -->
    <?php include "footer.php"; ?>
