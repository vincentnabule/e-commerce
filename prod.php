<?php include_once 'inc/header.php'; ?>
    <div class="page-heading products-heading header-text d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>254 Shoes Garden products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
        .single-product .product-slider {
            padding: 20px;
            border: 1px solid #eee!important;
            border-radius: 5px;
        }
        .flexslider {
            border: none!important;
        }
        #carousel {
            margin-top: 20px;
        }
        #carousel .slides li {
            width: 150px!important;
        }
        .single-product .right-content h4 {
            font-size: 17px;
            font-weight: 700;
            margin-top: 0px;
        }
        .single-product .right-content h6 {
            color: #3a8bcd;
            font-size: 17px;
            font-weight: 700;
            margin-top: 10px;
        }
        .single-product .right-content p {
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .single-product .right-content span {
            font-size: 14px;
            color: #3a8bcd;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 15px;
        }
        .single-product .right-content label {
            font-size: 14px;
            color: #4a4a4a;
        }
        .single-product .right-content .quantity-text {
            margin-left: 10px;
            width: 44px;
            height: 44px;
            line-height: 42px;
            font-size: 14px;
            font-weight: 700;
            color: #4a4a4a;
            display: inline-block;
            text-align: center;
            outline: none;
            border: 1px solid #eee;
        }
        .single-product .right-content .button {
            margin-left: 15px;
            cursor: pointer;
            background-color: #3a8bcd;
            outline: none;
            border-radius: 5px;
            padding: 10px 15px;
            display: inline-block;
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 300;
            letter-spacing: 0.4px;
            text-decoration: none;
            transition: all 0.5s;
            box-shadow: none;
            border: none;
        }
        .single-product .right-content .down-content span {
            margin-bottom: 0px;
            display: inline-block;
            margin-left: 8px;
            color: #aaa;
        }
        .single-product .right-content .down-content span a {
            color: #aaa;
            font-weight: 400;
            margin-left: 4px;
            transition: all 0.5s;
        }
        .single-product .right-content .down-content span a:hover {
            color: #3a8bcd;
        }
        .single-product .right-content .down-content span a:hover i {
            background-color: #3a8bcd;
        }
        .single-product .right-content .down-content span a i {
            transition: all 0.5s;
            background-color: #aaa;
            width: 26px;
            height: 26px;
            display: inline-block;
            text-align: center;
            line-height: 26px;
            border-radius: 50%;
            color: #fff;
            font-size: 12px;
            margin-right: 5px;
        }
        .single-product .right-content .down-content .categories {
            border-top: 1px solid #eee;
            margin-top: 30px;
            padding: 10px 0px;
        }
        .single-product .right-content .down-content .share {
            border-top: 1px solid #eee;
            padding: 10px 0px;
        }
        .single-product .right-content .down-content h6 {
            font-size: 14px;
            color: #4a4a4a;
            font-weight: 400;
        }
    </style>

    <div class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Air Jordan</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-slider">
                    <div id="slider" class="flexslider">
                            <img src="assets/images/big-01.jpg" class="w-100" />
                    </div>
                    <div class="d-flex justify-content-around mt-2" style="overflow-x: scroll; ">
                        <img src="assets/images/thumb-01.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-02.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-04.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-03.jpg" width="100px" height="120px"  class="px-1"/>

                        <img src="assets/images/thumb-01.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-02.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-04.jpg" width="100px" height="120px" class="px-1"/>
                        <img src="assets/images/thumb-03.jpg" width="100px" height="120px"  class="px-1"/>
                    </div>
                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                    <h4>Single Product Name</h4>
                    <h6>$55.00</h6>
                    <p>Proin commodo, diam a ultricies sagittis, erat odio rhoncus metus, eu feugiat lorem lacus aliquet arcu. Curabitur in gravida nisi, non placerat nibh. Praesent sit amet diam ultrices, commodo turpis id, dignissim leo. Suspendisse mauris massa, porttitor non fermentum vel, ullamcorper scelerisque velit. </p>
                    <span>7 left on stock</span>
                    <form action="" method="get">
                        <label for="quantity">Quantity:</label>
                        <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                            onfocus="if(this.value == '1') { this.value = ''; }" 
                            onBlur="if(this.value == '') { this.value = '1';}"
                            value="1">
                        <input type="submit" class="button" value="Order Now!">
                    </form>
                    <div class="down-content">
                        <div class="categories">
                        <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a href="#">Lifestyle</a></span></h6>
                        </div>
                        <div class="share">
                        <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="products">
      <div class="container">
        <div class="h3 mb-2">You may also like</div>
        <div class="row">
          <div class="col-md-12">
                <div class="row grid">
                    <div class="col-lg-3 col-md-3 all des">
                      <div class="product-item">
                        <a href="prod.php">
                            <img src="assets/images/product_01.jpg" alt="itm1" height="250px">
                            <div class="down-content">
                                <h4>Tittle goes here</h4>
                                <h6>$18.25</h6>
                            </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$16.75</h6>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$24.60</h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$12.50</h6>
                        </div>
                      </div>
                    </div>
                </div>
          </div>  
        </div>
      </div>
    </div>

    
    <!-- <script src="assets/js/flex-slider.js"></script> -->
<?php include_once 'inc/footer.php';?>