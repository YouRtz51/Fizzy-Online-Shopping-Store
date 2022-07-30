<?php
include 'header.php';
include 'includes/_modal.php';
?>
<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="px-4 row px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="mb-0 h2 text-uppercase">Cart</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="px-0 mb-0 breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <h2 class="mb-4 h5 text-uppercase">Shopping cart</h2>
    <div class="row">
      <div class="mb-4 col-lg-8 mb-lg-0">
        <!-- CART TABLE-->
        <div class="mb-4 table-responsive">
          <table class="table">
            <thead class="bg-light">
              <tr>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                <th class="border-0" scope="col"> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="pl-0 border-0" scope="row">
                  <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.php"><img src="img/product-detail-3.jpg" alt="..." width="70" /></a>
                    <div class="ml-3 media-body"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.php">Red digital smartwatch</a></strong></div>
                  </div>
                </th>
                <td class="align-middle border-0">
                  <p class="mb-0 small">$250</p>
                </td>
                <td class="align-middle border-0">
                  <div class="px-3 border d-flex align-items-center justify-content-between"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                    <div class="quantity">
                      <button class="p-0 dec-btn"><i class="fas fa-caret-left"></i></button>
                      <input class="p-0 border-0 form-control form-control-sm shadow-0" type="text" value="1" />
                      <button class="p-0 inc-btn"><i class="fas fa-caret-right"></i></button>
                    </div>
                  </div>
                </td>
                <td class="align-middle border-0">
                  <p class="mb-0 small">$250</p>
                </td>
                <td class="align-middle border-0"><a class="reset-anchor" href="#"><i class="fas fa-trash-alt small text-muted"></i></a></td>
              </tr>
              <tr>
                <th class="pl-0 border-light" scope="row">
                  <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.php"><img src="img/product-detail-2.jpg" alt="..." width="70" /></a>
                    <div class="ml-3 media-body"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.php">Apple watch</a></strong></div>
                  </div>
                </th>
                <td class="align-middle border-light">
                  <p class="mb-0 small">$250</p>
                </td>
                <td class="align-middle border-light">
                  <div class="px-3 border d-flex align-items-center justify-content-between"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                    <div class="quantity">
                      <button class="p-0 dec-btn"><i class="fas fa-caret-left"></i></button>
                      <input class="p-0 border-0 form-control form-control-sm shadow-0" type="text" value="1" />
                      <button class="p-0 inc-btn"><i class="fas fa-caret-right"></i></button>
                    </div>
                  </div>
                </td>
                <td class="align-middle border-light">
                  <p class="mb-0 small">$250</p>
                </td>
                <td class="align-middle border-light"><a class="reset-anchor" href="#"><i class="fas fa-trash-alt small text-muted"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- CART NAV-->
        <div class="px-4 py-3 bg-light">
          <div class="text-center row align-items-center">
            <div class="mb-3 col-md-6 mb-md-0 text-md-left"><a class="p-0 btn btn-link text-dark btn-sm" href="shop.php"><i class="mr-2 fas fa-long-arrow-alt-left"> </i>Continue shopping</a></div>
            <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="checkout.php">Procceed to checkout<i class="ml-2 fas fa-long-arrow-alt-right"></i></a></div>
          </div>
        </div>
      </div>
      <!-- ORDER TOTAL-->
      <div class="col-lg-4">
        <div class="border-0 card rounded-0 p-lg-4 bg-light">
          <div class="card-body">
            <h5 class="mb-4 text-uppercase">Cart total</h5>
            <ul class="mb-0 list-unstyled">
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">$250</span></li>
              <li class="my-2 border-bottom"></li>
              <li class="mb-4 d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>$250</span></li>
              <li>
                <form action="#">
                  <div class="mb-0 form-group">
                    <input class="form-control" type="text" placeholder="Enter your coupon">
                    <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="mr-2 fas fa-gift"></i>Apply coupon</button>
                  </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include 'footer.php'; ?>