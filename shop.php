<?php include 'header.php'; ?>
<?php

$sql = "SELECT * FROM `products`";
$res = mysqli_query($conn, $sql);
$total_products = mysqli_num_rows($res);
$perpage = 8;
$page_index = ceil($total_products / $perpage);

// code snippet for pagination
if (isset($_GET["p_key"])) {
  if ($_GET["p_key"] > 0) {
    $p_key = $_GET["p_key"];
  } else {
    $p_key = 1;
  };
  if ($p_key > $page_index) {
    $p_key = $page_index;
  };
} else {
  $p_key = 1;
};

//<div class="text-white badge badge-primary">New</div>
$products_limit = ($p_key - 1) * $perpage;
$sql = "SELECT * FROM `products` ORDER BY p_id ASC LIMIT {$products_limit},{$perpage}";
$res = mysqli_query($conn, $sql);
?>
<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="px-4 row px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="mb-0 h2 text-uppercase">Shop</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="px-0 mb-0 breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container p-0">
      <div class="row">
        <!-- SHOP SIDEBAR-->
        <div class="order-2 col-lg-3 order-lg-1">
          <h5 class="mb-4 text-uppercase">Categories</h5>
          <div class="px-4 py-2 mb-3 text-white bg-dark"><strong class="small text-uppercase font-weight-bold">Fashion
              &amp; Acc</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
            <li class="mb-2"><a class="reset-anchor" href="#">Women's T-Shirts</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Men's T-Shirts</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Dresses</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Novelty socks</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Women's sunglasses</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Men's sunglasses</a></li>
          </ul>
          <div class="px-4 py-2 mb-3 bg-light"><strong class="small text-uppercase font-weight-bold">Health &amp;
              Beauty</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
            <li class="mb-2"><a class="reset-anchor" href="#">Shavers</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">bags</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Cosmetic</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Nail Art</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Skin Masks &amp; Peels</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Korean cosmetics</a></li>
          </ul>
          <div class="px-4 py-2 mb-3 bg-light"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
          <ul class="mb-5 list-unstyled small text-muted pl-lg-4 font-weight-normal">
            <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">USB Flash drives</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Headphones</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Portable speakers</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Cell Phone bluetooth headsets</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Keyboards</a></li>
          </ul>
          <h6 class="mb-4 text-uppercase">Price range</h6>
          <div class="pt-4 mb-5 price-range">
            <div id="range"></div>
            <div class="pt-2 row">
              <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
              <div class="text-right col-6"><strong class="small font-weight-bold text-uppercase">To</strong></div>
            </div>
          </div>
          <h6 class="mb-3 text-uppercase">Show only</h6>
          <div class="mb-1 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck1" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
          </div>
          <div class="mb-1 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck2" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
          </div>
          <div class="mb-1 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck3" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
          </div>
          <div class="mb-1 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck4" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
          </div>
          <div class="mb-1 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck5" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
          </div>
          <div class="mb-4 custom-control custom-checkbox">
            <input class="custom-control-input" id="customCheck6" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
          </div>
          <h6 class="mb-3 text-uppercase">Buying format</h6>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio3">Auction</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
          </div>
        </div>
        <!-- SHOP LISTING-->
        <div class="order-1 mb-5 col-lg-9 order-lg-2 mb-lg-0">
          <div class="mb-3 row align-items-center">
            <div class="mb-2 col-lg-6 mb-lg-0">
              <p class="mb-0 text-small text-muted">Showing <?php echo $products_limit + 1 ?>–
                <?php $list_end = $p_key * $perpage;
                if ($list_end > $total_products) {
                  $list_end = $total_products;
                };
                echo $list_end ?>
                of <?php echo $total_products; ?> results
              </p>
            </div>
            <div class="col-lg-6">
              <ul class="mb-0 list-inline d-flex align-items-center justify-content-lg-end">
                <li class="mr-3 list-inline-item text-muted"><a class="p-0 reset-anchor" href="#"><i class="fas fa-th-large"></i></a></li>
                <li class="mr-3 list-inline-item text-muted"><a class="p-0 reset-anchor" href="#"><i class="fas fa-th"></i></a></li>
                <li class="list-inline-item">
                  <select class="ml-auto selectpicker" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                    <option value="default">Default sorting</option>
                    <option value="popularity">Popularity</option>
                    <option value="low-high">Price: Low to High</option>
                    <option value="high-low">Price: High to Low</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($res)) {
              echo '
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="text-center product">
                <div class="mb-3 position-relative">
                  <div class="text-white badge badge-"></div><a class="d-block" href="detail.php?p_id=' . $row["p_id"] . '"><img class="border border-faded " width="200px" height="225px" style="object-fit:contain;" src="admin/' . $row["p_thumb"] . '" alt="' . $row["p_name"] . '"></a>
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
          <!-- PAGINATION-->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center justify-content-lg-end">
              <?php
              echo '<li class="page-item"><a class="page-link" href="shop.php?p_key=' . $p_key - 1 . '" aria-label="Previous"><span aria-hidden="true">«</span></a></li>'; ?>
              <?php
              for ($i = 1; $i <= $page_index; $i++) {
                echo '<li class="page-item"><a class="page-link" id=p_' . $i . ' href="shop.php?p_key=' . $i . '">' . $i . '</a></li>';
                echo "
                <script>
                let el" . $i . "=document.getElementById('p_" . $i . "');
                if(" . $i . "==" . $p_key . "){
                  el" . $i . ".classList.add('bg-dark','text-light');
                };
                </script>
                ";
              };
              ?>
              <?php echo '<li class="page-item"><a class="page-link" href="shop.php?p_key=' . $p_key + 1 . '" aria-label="Next"><span aria-hidden="true">»</span></a></li>'; ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include 'footer.php'; ?>