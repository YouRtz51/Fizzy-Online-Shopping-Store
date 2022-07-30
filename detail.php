<?php include 'header.php'; ?>
<?php
if (isset($_GET["p_id"])) {
  $p_id = get_safe_value($conn, $_GET["p_id"]);
  $sql = "SELECT * FROM `products` WHERE p_id='$p_id'";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($res);
};
?>
<section class="py-5">
  <div class="container">
    <div class="mb-5 row">
      <div class="col-lg-6">
        <!-- PRODUCT SLIDER-->
        <div class="row m-sm-0">
          <div class="order-2 mt-2 col-sm-2 p-sm-0 order-sm-1 mt-sm-0">
            <div class="flex-row owl-thumbs d-flex flex-sm-column" data-slider-id="1">
              <div class="mb-2 mr-2 owl-thumb-item flex-fill mr-sm-0"><img class="w-100" src="admin/<?php echo $row['p_thumb']; ?>" alt="..."></div>
              <div class="mb-2 mr-2 owl-thumb-item flex-fill mr-sm-0"><img class="w-100" src="img/product-detail-2.jpg" alt="..."></div>
              <div class="mb-2 mr-2 owl-thumb-item flex-fill mr-sm-0"><img class="w-100" src="img/product-detail-3.jpg" alt="..."></div>
              <div class="mb-2 owl-thumb-item flex-fill"><img class="w-100" src="img/product-detail-4.jpg" alt="..."></div>
            </div>
          </div>
          <div class="order-1 col-sm-10 order-sm-2">
            <div class="owl-carousel product-slider" data-slider-id="1">
            <a class="d-block" href="admin/<?php echo $row['p_thumb']; ?>" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="admin/<?php echo $row['p_thumb']; ?>" alt="..."></a>
            <a class="d-block" href="img/product-detail-2.jpg" data-lightbox="product" title="Product item 2"><img class="img-fluid" src="img/product-detail-2.jpg" alt="..."></a>
            <a class="d-block" href="img/product-detail-3.jpg" data-lightbox="product" title="Product item 3"><img class="img-fluid" src="img/product-detail-3.jpg" alt="..."></a>
            <a class="d-block" href="img/product-detail-4.jpg" data-lightbox="product" title="Product item 4"><img class="img-fluid" src="img/product-detail-4.jpg" alt="..."></a></div>
          </div>
        </div>
      </div>
      <!-- PRODUCT DETAILS-->
      <div class="col-lg-6">
        <ul class="mb-2 list-inline">
          <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i></li>
          <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i></li>
          <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i></li>
          <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i></li>
          <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i></li>
        </ul>
        <h1><?php echo $row['p_name']; ?></h1>
        <p class="text-muted lead"><?php echo $row['p_msp']; ?></p>
        <p class="mb-4 text-small"><?php echo $row['p_desc']; ?></p>
        <div class="mb-4 row align-items-stretch">
          <div class="col-sm-5 pr-sm-0">
            <div class="px-3 py-1 bg-white border border-white d-flex align-items-center justify-content-between"><span class="mr-4 small text-uppercase text-gray no-select">Quantity</span>
              <div class="quantity">
                <button class="p-0 dec-btn"><i class="fas fa-caret-left"></i></button>
                <input class="p-0 border-0 form-control shadow-0" type="text" value="1">
                <button class="p-0 inc-btn"><i class="fas fa-caret-right"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-3 pl-sm-0"><a class="px-0 btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center" href="cart.php">Add to cart</a></div>
        </div><a class="p-0 mb-4 btn btn-link text-dark" href="#"><i class="mr-2 far fa-heart"></i>Add to wish list</a><br>
        <ul class="list-unstyled small d-inline-block">
          <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ml-2 text-muted">039</span></li>
          <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="ml-2 reset-anchor" href="#"><?php echo $row['p_cat']; ?></a></li>
          <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a class="ml-2 reset-anchor" href="#">Innovation</a></li>
        </ul>
      </div>
    </div>
    <!-- DETAILS TABS-->
    <ul class="border-0 nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
      <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
    </ul>
    <div class="mb-5 tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
        <div class="p-4 bg-white p-lg-5">
          <h6 class="text-uppercase">Product description </h6>
          <p class="mb-0 text-muted text-small"><?php echo $row['p_desc']; ?></p>
        </div>
      </div>
      <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
        <div class="p-4 bg-white p-lg-5">
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3 media"><img class="rounded-circle" src="img/customer-1.png" alt="" width="50">
                <div class="ml-3 media-body">
                  <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                  <p class="mb-0 small text-muted text-uppercase">20 May 2020</p>
                  <ul class="mb-1 text-xs list-inline">
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                  <p class="mb-0 text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              <div class="media"><img class="rounded-circle" src="img/customer-2.png" alt="" width="50">
                <div class="ml-3 media-body">
                  <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                  <p class="mb-0 small text-muted text-uppercase">20 May 2020</p>
                  <ul class="mb-1 text-xs list-inline">
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star text-warning"></i></li>
                    <li class="m-0 list-inline-item"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                  <p class="mb-0 text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- RELATED PRODUCTS-->
    <h2 class="mb-4 h5 text-uppercase">Related products</h2>
    <div class="row">
      <!-- PRODUCT-->
      <div class="col-lg-3 col-sm-6">
        <div class="text-center product skel-loader">
          <div class="mb-3 d-block position-relative"><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-1.jpg" alt="..."></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="detail.php">Kui Ye Chen’s AirPods</a></h6>
          <p class="small text-muted">$250</p>
        </div>
      </div>
      <!-- PRODUCT-->
      <div class="col-lg-3 col-sm-6">
        <div class="text-center product skel-loader">
          <div class="mb-3 d-block position-relative"><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="detail.php">Air Jordan 12 gym red</a></h6>
          <p class="small text-muted">$300</p>
        </div>
      </div>
      <!-- PRODUCT-->
      <div class="col-lg-3 col-sm-6">
        <div class="text-center product skel-loader">
          <div class="mb-3 d-block position-relative"><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-3.jpg" alt="..."></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="detail.php">Cyan cotton t-shirt</a></h6>
          <p class="small text-muted">$25</p>
        </div>
      </div>
      <!-- PRODUCT-->
      <div class="col-lg-3 col-sm-6">
        <div class="text-center product skel-loader">
          <div class="mb-3 d-block position-relative"><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-4.jpg" alt="..."></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="detail.php">Timex Unisex Originals</a></h6>
          <p class="small text-muted">$351</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>