<h2 class="section-h">ทะเบียน <?=$_REQUEST['tabien-name']?></h2>
<ul>
  <?php for($i=1; $i<32; $i++) { ?>
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