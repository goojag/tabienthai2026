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
            <h4>ให้คุณเป็นเจ้าของ<br />
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
        <img src="images/number-h.svg" alt="เบอร์โทรระดับพรีเมียม" width="416" />
        <h4>สนใจติดต่อ คุณแพท 098-555-5555 </h4>
        <ul class="number-list">
          <?php for($i = 0; $i < 14; $i++) { ?>

          <li>
            <a href="/">
              <div class="card-number">
                <div class="card-number-inner">
                  <h3 class="number">081-555-5555</h3>
                  <div class="bottom">
                    <span class="price-label">ราคา</span>
                    <span class="price">2,990,000</span>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <?php } ?>
        </ul>
      </div>
    </section>

    <section class="tabien-section box-font-kanit">
      <div class="container">
        <h3>ทะเบียนสวย ป้ายกราฟฟิคชมพู/ม่วง ถูกที่สุด</h3>
        <h4>
          ทะเบียนรถสวย เสริมดวง เสริมโชค เสริมความเป็นสิริมงคล
          ศูนย์รวมป้ายทะเบียนสวยที่จำหน่ายป้ายทะเบียนรถสวยในราคาพิเศษให้คุณได้จับจองเป็นเจ้าของ
          ไม่ว่าจะเป็นป้ายทะเบียนเสริมสิริมงคลในด้านต่าง ๆ เสริมดวงตามผลรวม หรือจะเป็นการเสริมดวงตามวันเกิด
          เราก็มีจำหน่ายครบ ให้ทุกท่านได้เลือกเป็นเจ้าของได้ง่าย เราพร้อมให้บริการอย่างครบวงจร
          ด้วยประสบการณ์ที่ยาวนานมากกว่า 20 ปีมั่นใจได้ในคุณภาพของทะเบียนรถสวยและป้ายประมูลที่มีให้เลือก
          ซื้อมากมายตามความต้องการ
        </h4>
        <nav>
          <a href="/">ทะเบียนรถสวย vip</a>
          <a href="/">เลขร้อย เลขพัน</a>
          <a href="/">เลขเรียง</a>
          <a href="/">เลขคู่</a>
          <a href="/">เลขสลับ</a>
          <a href="/">เลขหาบ</a>
          <a href="/">ทะเบียนสวยรถตู้ (ป้ายฟ้า)</a>
          <a href="/">ทะเบียน จ.ชลบุรี</a>
          <a href="/">ทะเบียน จ.เชียงใหม่</a>
        </nav>

        <div class="tabien-box show">
          <button class="btn-toggle">
            <span>ทะเบียนรถสวยมาใหม่ </span>
            <img src="images/icons/arr-down.svg" alt="" width="20">
          </button>
          <div class="tabien-list-box">
            <ul class="tabien-list">
              <?php for($i = 0; $i < 18; $i++) { ?>
              <li>
                <a href="/">
                  <div class="tabien-card">
                    <div class="tabien-thumb">
                      <img src="images/tabien-img.png" alt="">
                      <div class="tabien-text">
                        <div class="number">4ขญ 4</div>
                        <div class="province">กรุงเทพมหานคร</div>
                      </div>
                    </div>
                    <div class="bottom">
                      <div class="tabien-price">
                        <span>ราคา</span>
                        <strong>590,000 บาท</strong>
                      </div>
                      <div class="sum">
                        ผลรวม
                        <strong>22</strong>
                      </div>
                    </div>
                  </div>
                </a>
              </li>

              <?php } ?>
            </ul>
          </div>
        </div>


        <div class="tabien-box show">
          <button class="btn-toggle">
            <span>ทะเบียนรถสวย VIP</span>
            <img src="images/icons/arr-down.svg" alt="" width="20">
          </button>
          <div class="tabien-list-box">
            <ul class="tabien-list">
              <?php for($i = 0; $i < 18; $i++) { ?>
              <li>
                <a href="/">
                  <div class="tabien-card">
                    <div class="tabien-thumb">
                      <img src="images/tabien-img.png" alt="">
                      <div class="tabien-text">
                        <div class="number">4ขญ 4</div>
                        <div class="province">กรุงเทพมหานคร</div>
                      </div>
                    </div>
                    <div class="bottom">
                      <div class="tabien-price">
                        <span>ราคา</span>
                        <strong>590,000 บาท</strong>
                      </div>
                      <div class="sum">
                        ผลรวม
                        <strong>22</strong>
                      </div>
                    </div>
                  </div>
                </a>
              </li>

              <?php } ?>
            </ul>
          </div>
        </div>



        <div class="tabien-box">
          <button class="btn-toggle">
            <span>เลขร้อย เลขพัน</span>
            <img src="images/icons/arr-down.svg" alt="" width="20">
          </button>
          <div class="tabien-list-box">
            <ul class="tabien-list">
              <?php for($i = 0; $i < 18; $i++) { ?>
              <li>
                <a href="/">
                  <div class="tabien-card">
                    <div class="tabien-thumb">
                      <img src="images/tabien-img.png" alt="">
                      <div class="tabien-text">
                        <div class="number">4ขญ 4</div>
                        <div class="province">กรุงเทพมหานคร</div>
                      </div>
                    </div>
                    <div class="bottom">
                      <div class="tabien-price">
                        <span>ราคา</span>
                        <strong>590,000 บาท</strong>
                      </div>
                      <div class="sum">
                        ผลรวม
                        <strong>22</strong>
                      </div>
                    </div>
                  </div>
                </a>
              </li>

              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="tabien-box">
          <button class="btn-toggle">
            <span>เลขเรียง</span>
            <img src="images/icons/arr-down.svg" alt="" width="20">
          </button>
          <div class="tabien-list-box">
            <ul class="tabien-list">
              <?php for($i = 0; $i < 18; $i++) { ?>
              <li>
                <a href="/">
                  <div class="tabien-card">
                    <div class="tabien-thumb">
                      <img src="images/tabien-img.png" alt="">
                      <div class="tabien-text">
                        <div class="number">4ขญ 4</div>
                        <div class="province">กรุงเทพมหานคร</div>
                      </div>
                    </div>
                    <div class="bottom">
                      <div class="tabien-price">
                        <span>ราคา</span>
                        <strong>590,000 บาท</strong>
                      </div>
                      <div class="sum">
                        ผลรวม
                        <strong>22</strong>
                      </div>
                    </div>
                  </div>
                </a>
              </li>

              <?php } ?>
            </ul>
          </div>
        </div>


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
  })
  </script>

</body>

</html>