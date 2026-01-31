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
            <div>ให้คุณเป็นเจ้าของ
              ในราคาสุดพิเศษ</div>
            <div>
              <a href="/">098-555-5555</a>
              <a href="/">@tabiendee</a>
            </div>
          </div>

          <div class="right">
            <div class="first">

            </div>
            <div class="second">

            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="wrapper">

      <div class="container">
        <div class="box-tabien">
          <div class="tabien-select">
            <div class="select-box">
              <select name="tabien-name" id="select-tabien">
                <option value="0">เลือกทะเบียน</option>
                <option value="1">ทะเบียนรถสวย มาใหม่</option>
                <option value="2">ทะเบียนรถสวย VIP</option>
                <option value="3">เลขร้อย เลขพัน</option>
                <option value="4">เลขเรียง</option>
              </select>
            </div>
          </div>
          <div class="tabien-list">
            <div class="tabien-section">
              <h2 class="section-h">ทะเบียนทั้งหมด</h2>
              <ul>
                <?php for($i=1; $i<31; $i++) { ?>
                <li>
                  <a href="">
                    <div class="tabien-img">
                      <img src="images/tabien-img.jpg" alt="">
                      <div class="tabien-number">กข 123</div>
                    </div>

                    <div class="tabien-bottom">
                      <span>250,000</span>
                      <span class="tabien-sum">ผลรวม 40</span>
                    </div>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </div><!-- end .tabien-section -->
          </div> <!-- end .tabien-list -->
        </div> <!-- end .box-tabien -->
      </div> <!-- end .container -->

      <section class="tabien-ig">
        <div class="container">
          <h2 class="section-h">Instagram</h2>
          <ul>
            <li><a href=""><img src="images/ig1.jpg" alt=""></a></li>
            <li><a href=""><img src="images/ig2.jpg" alt=""></a></li>
            <li><a href=""><img src="images/ig3.jpg" alt=""></a></li>
            <li><a href=""><img src="images/ig1.jpg" alt=""></a></li>
          </ul>
        </div>
      </section>

      <section class="why-9na">
        <img src="images/why-9na.png" alt="" class="why-img">

        <div class="why-box-text">
          <h3>ทำไมต้องก้าวหน้าทะเบียน</h3>
          <p>
            Download the app to manage your projects, keep track of your bookings and stay on track with the progress.
          </p>
        </div>
      </section>

    </div> <!-- end .wrapper -->

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