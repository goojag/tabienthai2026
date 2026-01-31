<!DOCTYPE html>
<html lang="en">

<head>

  <?php include_once('inc/meta.php'); ?>

  <title>.:: Tabienthai</title>

</head>

<body>
  <div class="main">

    <?php include_once('inc/header.php'); ?>

    <div class="banner-main">
      <div class="main-slide">
        <div class="li">
          <a href="">
            <img src="images/banner.jpg" alt="">
          </a>
        </div>
        <div class="li">
          <a href="">
            <img src="images/banner.jpg" alt="">
          </a>
        </div>
        <div class="li">
          <a href="">
            <img src="images/banner.jpg" alt="">
          </a>
        </div>
      </div>
    </div> <!-- end .banner-slide -->

    <div class="home-search">
      <div class="container">
        <div class="search-form frm">
          <h2>ค้นหาทะเบียน</h2>
          <form action="">
            <div class="form-grid">
              <div class="column">
                <input type="text" class="text">
              </div>

              <div class="column">
                <div class="select-box">
                  <select name="" id="">
                    <option value="">อักษร</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                  </select>
                </div>
              </div>
              <div>
                <div class="column">
                  <div class="select-box">
                    <select name="" id="">
                      <option value="">เลขทะเบียน</option>
                      <option value="">select</option>
                      <option value="">select</option>
                      <option value="">select</option>
                      <option value="">select</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="select-box">
                  <select name="" id="">
                    <option value="">ราคาทั้งหมด</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                  </select>
                </div>
              </div>

              <div class="column">
                <div class="select-box">
                  <select name="" id="">
                    <option value="">ผลรวม</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                    <option value="">select</option>
                  </select>
                </div>
              </div>

              <div class="column">
                <button class="btn-main" type="submit">
                  <span>ค้นหาเลย !!</span>
                </button>
              </div>
            </div>
          </form>
        </div> <!-- end .search-form -->
      </div>
    </div>

    <section class="special-tabien">
      <div class="container">
        <div class="special-tabien-content">
          <div class="left">
            <h2>ทะเบียนหมวดพิเศษ</h2>
            <h3>เลขสวยโดนใจ ความหมายดี</h3>
            <h4>ให้คุณเป็นเจ้าของ<br/>
              ในราคาสุดพิเศษ</h4>
            <div class="contact">
              <a href="/"><img src="images/icons/phone.svg" alt=""><span>098-555-5555</span></a>
              <a href="/"><img src="images/icons/line.svg" alt=""><span>@tabiendee</span></a>
            </div>
          </div>

          <div class="right">
            <div class="first">
              <?php for($i = 0; $i < 2; $i++): ?>
                <div class="card-tabein card-special big">
                  <div class="tabien-thumb">
                    <img src="images/tabien-mockup.png" alt="">
                      <div class="card-content">
                      <h3 class="card-title">สิริ 9</h3>
                      <p>กรุงเทพมหานคร</p>
                    </div>
                  </div>
                  
                  <div class="card-price bg-gradient">
                    2,990,000
                  </div>
                </div>
              <?php endfor; ?>
            </div>

            <div class="second">
              <?php for($i = 0; $i < 3; $i++): ?>
                <div class="card-tabein card-special">
                  <div class="tabien-thumb">
                    <img src="images/tabien-mockup.png" alt="">

                    <div class="card-content">
                      <h3 class="card-title">สิริ 9</h3>
                      <p>กรุงเทพมหานคร</p>
                    </div>
                  </div>
                  
                  <div class="card-price bg-gradient">
                    2,990,000
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="premium-number">
      <div class="container">
        <h3>เบอร์โทรระดับพรีเมียม</h3>
        <h4>สนใจติดต่อ คุณแพท 098-555-5555 </h4>
        <ul class="number-list">
          <?php for($i = 0; $i < 14; $i++) { ?>

          <li>
            <div class="card-number">
              <div class="card-number-inner">
                <h3 class="number">081-555-5555</h3>
              <div class="bottom">
                <span class="price-label">ราคา</span>
                <span class="price">2,990,000</span>
              </div>
              </div>
            </div>
          </li>

          <?php } ?>
        </ul>
      </div>
    </section>

    

    <?php include_once('inc/footer.php'); ?>

  </div> <!-- end .main -->

  <link href="plugin/slick/slick-theme.css" rel="stylesheet">
  <link href="plugin/slick/slick.css" rel="stylesheet">
  <script src="plugin/slick/slick.min.js"></script>

  <script>
  $(function() {
    $('.main-slide').slick({
      autoplay: true,
      infinite: true,
      fade: false,
      arrows: true
    });

    // Tabien ajax filter on change
    $("#select-tabien").on('change', function() {
      $.ajax({
        type: 'POST',
        url: "tabien-filter.php",
        data: "tabien-name= " + $(this).val(),
        success: function(result) {
          $(".tabien-section").html(result);
        }
      });
    });
  })
  </script>

</body>

</html>