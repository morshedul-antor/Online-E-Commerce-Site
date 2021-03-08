<?php include "header.php" ?>



<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container customized">
    <!-- row -->
    <div class="row">
    <!-- MAIN -->
      <div id="main" class="col-md-12">
        <!-- store top filter -->
        <div class="store-filter clearfix">
          <div class="pull-left">
            <div class="row-filter">

              <a href="#" class="active"><i class="fa fa-bars"></i></a>
            </div>

          </div>
          <div class="pull-right">

            <ul class="store-pagination" id="pagenotop">
              <li><span class="text-uppercase">Page:</span></li>
            <!--  <li class="active">1</li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i></a></li>-->
            </ul>
          </div>
        </div>
        <!-- /store top filter -->

        <div id="aside" class="col-md-2"style="background-color:darkgray;">
          <!-- aside Widget -->
          <div id="get_category">
           </div>

        </div>
<!--from store.php -->
                <div id="get_product" >
              <!--Here we get product jquery Ajax Request-->
              </div>


              <!-- Product Single -->

              							<!-- /Product Single -->


        <!-- store bottom filter -->
        <div class="store-filter clearfix">
        <!--  <div class="pull-left">
            <div class="row-filter">
              <a href="#"><i class="fa fa-th-large"></i></a>
              <a href="#" class="active"><i class="fa fa-bars"></i></a>
            </div>
            <div class="sort-filter">
              <span class="text-uppercase">Sort By:</span>
              <select class="input">
                  <option value="0">Position</option>
                  <option value="0">Price</option>
                  <option value="0">Rating</option>
                </select>
              <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
            </div>
          </div>-->
          <div class="pull-right">

            <ul class="store-pagination" id="pageno">
              <li><span class="text-uppercase">Page:</span></li>
            <!--  <li class="active">1</li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i></a></li>-->
            </ul>
          </div>
        </div>
        <!-- /store bottom filter -->
      </div>
      <!-- /MAIN -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /section -->


















<?php include "footer.php" ?>
