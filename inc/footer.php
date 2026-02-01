<footer>
  <div class="footer-top">
    <div class="container">
      <div class="content">
        <h3>เรามีทะเบียนสวยเลขศาสตร์ผลรวมดี<br/>
ในราคาพิเศษสุดที่นี่</h3>
        <a href="/">
          <div class="content-card">
            <img src="images/line-green.svg" alt="">
            <div class="content-right">
              <p>สอบถามข้อมูลเพิ่มเติม ได้ที่ช่องทางไลน์</p>
              <strong>@tabiendee</strong>
            </div>
          </div>
        </a>
        <a href="/">
          <div class="content-card">
            <img src="images/phone-brown.svg" alt="">
            <div class="content-right">
              <p>สอบถามข้อมูลเพิ่มเติมทางโทรศัพท์</p>
              <strong>098-555-5555</strong>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="flex">
      <div class="left">
        <a href="/" class="logo"><img src="images/logo.svg" alt=""></a>
        <h3>ทะเบียนสวยเลขศาสตร์ผลรวมดี</h3>
        <p>ทะเบียนรถทุกตัวสามารถใช้ได้ทั้งรถใหม่ (ป้ายแดง) หรือ รถเก่า (โดยการสลับป้าย) ทะเบียนรถทุกตัวเป็นทะเบียนใหม่
          และ เป็นทะเบียนกราฟฟิค ออกโดยกรมขนส่งฯ อย่างถูกต้อง
          ติดต่อนายทะเบียนที่เบอร์
          <a href="/">098-555-5555</a>
        </p>
      </div>
      <div class="center">
        <nav class="menu-footer">
          <a href="/">หน้าแรก</a>
          <a href="/">เอกสารที่ต้องใช้และวิธีการจดทะเบียนรถ</a>
          <a href="/">ดูดวงกับทะเบียนรถ</a>
          <a href="/">ติดต่อเรา</a>
          <a href="/">เลือกหมวด</a>
        </nav>
      </div>
      <div class="right">
        <a href="/" class="dbd">
          <img src="images/dbd-white.svg" alt="">
          <p>กรมพัฒนาธุรกิจการค้า Trustmarkthai</p>
        </a>
        <div class="social">
          <a href="/">
            <img src="images/icons/phone-white.svg" alt="">
          </a>
          <a href="/">
            <img src="images/icons/line-white.svg" alt="">
          </a>
          <a href="/">
            <img src="images/icons/fb-white.svg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <section class="copyright">
    © 2026 Tabienthai. All rights reserved.
  </section>
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