<footer class="text-white bg-dark">
  <div class="container py-4">
    <div class="py-5 row">
      <div class="mb-3 col-md-4 mb-md-0">
        <h6 class="mb-3 text-uppercase">Customer services</h6>
        <ul class="mb-0 list-unstyled">
          <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
          <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
          <li><a class="footer-link" href="#">Online Stores</a></li>
          <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
        </ul>
      </div>
      <div class="mb-3 col-md-4 mb-md-0">
        <h6 class="mb-3 text-uppercase">Company</h6>
        <ul class="mb-0 list-unstyled">
          <li><a class="footer-link" href="#">What We Do</a></li>
          <li><a class="footer-link" href="#">Available Services</a></li>
          <li><a class="footer-link" href="#">Latest Posts</a></li>
          <li><a class="footer-link" href="#">FAQs</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="mb-3 text-uppercase">Social media</h6>
        <ul class="mb-0 list-unstyled">
          <li><a class="footer-link" href="#">Twitter</a></li>
          <li><a class="footer-link" href="#">Instagram</a></li>
          <li><a class="footer-link" href="#">Tumblr</a></li>
          <li><a class="footer-link" href="#">Pinterest</a></li>
        </ul>
      </div>
    </div>
    <div class="pt-4 border-top" style="border-color: #1d1d1d !important">
      <div class="row">
        <div class="col-lg-6">
          <p class="mb-0 small text-muted">&copy; 2020 All rights reserved.</p>
        </div>
        <div class="col-lg-6 text-lg-right">
          <p class="mb-0 small text-muted">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- JavaScript files-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/lightbox2/js/lightbox.min.js"></script>
<script src="assets/vendor/nouislider/nouislider.min.js"></script>
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/owl.carousel2/owl.carousel.min.js"></script>
<script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/custom.js"></script>
<!-- Nouislider Config-->
<script>
  var range = document.getElementById('range');
  noUiSlider.create(range, {
    range: {
      'min': 0,
      'max': 2000
    },
    step: 5,
    start: [100, 1000],
    margin: 300,
    connect: true,
    direction: 'ltr',
    orientation: 'horizontal',
    behaviour: 'tap-drag',
    tooltips: true,
    format: {
      to: function(value) {
        return '$' + value;
      },
      from: function(value) {
        return value.replace('', '');
      }
    }
  });
</script>
<script>
  // ------------------------------------------------------- //
  //   Inject SVG Sprite - 
  //   see more here 
  //   https://css-tricks.com/ajaxing-svg-sprite/
  // ------------------------------------------------------ //
  function injectSvgSprite(path) {

    var ajax = new XMLHttpRequest();
    ajax.open("GET", path, true);
    ajax.send();
    ajax.onload = function(e) {
      var div = document.createElement("div");
      div.className = 'd-none';
      div.innerHTML = ajax.responseText;
      document.body.insertBefore(div, document.body.childNodes[0]);
    }
  }
  // this is set to BootstrapTemple website as you cannot 
  // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
  // while using file:// protocol
  // pls don't forget to change to your domain :)
  injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</div>
</body>

</html>