<?php include 'header.php' ?>

<!-- HERO SECTION-->

<div style="width:100%; height:350px;" class="swiper-container">
  <div class="swiper-wrapper">
    <?php
    $sql = "SELECT * FROM `offers` ORDER BY o_id ASC";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
      <!-- Slides -->
      <div class="swiper-slide">
        <a href="<?php echo $row["o_link"]; ?>">
          <section class="pb-3 hero" style="background: url(admin/<?php echo $row["o_img"]; ?>) bottom no-repeat; background-size: cover;">
            <div class="py-5 container-fluid">
              <div class="px-4 row px-lg-5">
              </div>
            </div>
          </section>
        </a>
      </div>
    <?php }; ?>
  </div>
  <div class="swiper-pagination"></div>
</div>


<!-- CATEGORIES SECTION-->
<section class="pt-5">
  <header class="text-center">
    <p class="mb-1 small text-muted text-uppercase">Carefully created collections</p>
    <h2 class="mb-4 h5 text-uppercase">Browse our categories</h2>
  </header>
  <div class="row">
    <?php

    $sql = "SELECT * FROM `categories` WHERE cat_status='1' ORDER BY cat_id ASC LIMIT 4 ";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    while ($row = mysqli_fetch_assoc($res)) {
      echo '
                   <div class="mb-2 col-md-3 mb-md-1">
                    <a class="category-item"  href="shop.php">
                     <img class="img-fluid" src="admin/' . $row["cat_img"] . '" alt="' . $row["cat_name"] . '">
                     <strong class="category-item-title">' . $row["cat_name"] . '</strong>
                   </a>
                 </div>
          ';
    };
    ?>
  </div>
</section>
<!-- TRENDING PRODUCTS-->
<section class="py-5">
  <header>
    <p class="mb-1 small text-muted text-uppercase">Made the hard way</p>
    <h2 class="mb-4 h5 text-uppercase">Top trending products</h2>
  </header>
  <div class="row">
    <?php
    $sql = "SELECT * FROM `products` ORDER BY p_id ASC LIMIT 8";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    while ($row = mysqli_fetch_assoc($res)) {
      echo '
        <!-- PRODUCT-->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="text-center product">
            <div class="mb-3 position-relative">
              <div class="text-white badge badge-"></div>
              <a class="d-block" href="detail.php?p_id=' . $row["p_id"] . '">
              <img class="img-fluid w-100" src="admin/' . $row["p_thumb"] . '" alt="' . $row["p_name"] . '">
              </a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                  <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                  <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                </ul>
              </div>
            </div>
            <h6> <a class="reset-anchor" href="detail.php"></a>' . $row["p_name"] . '</h6>
            <p class="small text-muted">' . $row["p_msp"] . 'Rs</p>
          </div>
        </div>
        ';
    };
    ?>
  </div>
</section>
<!-- SERVICES-->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center row">
      <div class="mb-3 col-lg-4 mb-lg-0">
        <div class="d-inline-block">
          <div class="media align-items-end">
            <svg class="svg-icon svg-icon-big svg-icon-light">
              <use xlink:href="#delivery-time-1"> </use>
            </svg>
            <div class="ml-3 text-left media-body">
              <h6 class="mb-1 text-uppercase">Free shipping</h6>
              <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3 col-lg-4 mb-lg-0">
        <div class="d-inline-block">
          <div class="media align-items-end">
            <svg class="svg-icon svg-icon-big svg-icon-light">
              <use xlink:href="#helpline-24h-1"> </use>
            </svg>
            <div class="ml-3 text-left media-body">
              <h6 class="mb-1 text-uppercase">24 x 7 service</h6>
              <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="d-inline-block">
          <div class="media align-items-end">
            <svg class="svg-icon svg-icon-big svg-icon-light">
              <use xlink:href="#label-tag-1"> </use>
            </svg>
            <div class="ml-3 text-left media-body">
              <h6 class="mb-1 text-uppercase">Festival offer</h6>
              <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- NEWSLETTER-->
<section class="py-5">
  <div class="container p-0">
    <div class="row">
      <div class="mb-3 col-lg-6 mb-lg-0">
        <h5 class="text-uppercase">Let's be friends!</h5>
        <p class="mb-0 text-small text-muted">Nisi nisi tempor consequat laboris nisi.</p>
      </div>
      <div class="col-lg-6">
        <form action="#">
          <div class="mb-3 input-group flex-column flex-sm-row">
            <input class="py-3 form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 2500
    },

    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>
<?php include 'footer.php' ?>