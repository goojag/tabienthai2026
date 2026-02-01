<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <a href="/" class="foot-logo">
          <img src="images/logo.svg" alt="">
        </a>
        <div class="copyright-foot">
          <p>
            Copyrights MiCasa Homes and Properties<br>All rights reserved.
          </p>
        </div>

        <div class="social-foot">
          <a href="" target="_blank"><img src="images/icons/ig.svg" alt=""></a>
          <a href="" target="_blank"><img src="images/icons/world.svg" alt=""></a>
          <a href="" target="_blank"><img src="images/icons/tw.svg" alt=""></a>
          <a href="" target="_blank"><img src="images/icons/yt.svg" alt=""></a>
        </div>
      </div>

      <div class="col-md-7">
        <nav class="menu-foot">
          <ul class="row">
            <li class="col-md-3 col-6">
              <h3>Company</h3>
              <p><a href="">About us</a></p>
              <p><a href="">Blog</a></p>
              <p><a href="">Contact us</a></p>
              <p><a href="">Pricing</a></p>
              <p><a href="">Testimonials</a></p>
            </li>
            <li class="col-md-3 col-6">
              <h3>Support</h3>
              <p><a href="">Help center</a></p>
              <p><a href="">Terms of service</a></p>
              <p><a href="">Legal</a></p>
              <p><a href="">Privacy policy</a></p>
              <p><a href="">Status</a></p>
            </li>
            <li class="col-md-6">
              <h3>Stay up to date</h3>
              <p><input type="email" name="" class="subscrib-btn" placeholder="Your email address"></p>
            </li>
          </ul>
        </nav>
      </div> <!-- end .col-md-7 -->


    </div>
  </div>
</footer>
<div class="shadow"></div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js?v=<?=time()?>"></script>

<script>
$(function() {
  $('.menu-hamberger').on('click', function() {
    $('.menu-top').toggleClass('show');
    $('.shadow').fadeIn(300);
  });

  $('.shadow').on('click', function() {
    $('.menu-top').toggleClass('show');
    $('.shadow').fadeOut(300);
  });
});
</script>