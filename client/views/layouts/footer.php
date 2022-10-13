<?php  if(isset($_SESSION['success'])){ ?>
<script>
alert('Thanh toán thành công !!!');
setTimeout(() => {
  <?php unset($_SESSION['success']); ?>
}, 2000);
</script>
<?php 

 } ?>
<style>
footer {
  border-top: 1px solid #ccc;
  padding-top: 20px
}
</style>
<footer class="footer">
  <div class="header-footer_main padding-container">
    <div class="header-footer_description">
      <h4 class="title-header color-primary">Giới thiệu</h4>
      <p class="color-text" style="text-align:justify ;">Trang mua sắm trực tuyến nội thất mang phong cách
        việt, giúp bạn cập nhập và nắm bắt xu hướng mới</p>
      <img src="https://theme.hstatic.net/1000409762/1000752712/14/logo_bct.png?v=10" alt="">
    </div>
    <div class="header-footer_contact">
      <h4 class="title-header color-primary">Liên kết</h4>
      <ul class="header-contact_list">
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tìm kiếm</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Giới thiệu</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Chính sách đổi trả</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Điều khoản dịch vụ</li>
      </ul>
    </div>
    <div class="header-description color-primary">
      <h4 class="title-header">Thông tin liên hệ</h4>
      <ul class="header-contact_list">
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tầng 4, tòa nhà Flemington, số
          182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> hi@haravan.com</li>
      </ul>
    </div>
    <div class="header-description color-primary">
      <h4 class="title-header">Fanpage</h4>
      <!-- <div class="fb-page"
                data-href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                data-tabs="timeline" data-width="250" data-height="150" data-small-header="false"
                data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                    class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/">Hoa
                        quả Tấn Tài</a></blockquote>
            </div> -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4719269598972!2d105.73894721538551!3d21.053805392297612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e12611f6dd%3A0x25c5aec065422fad!2zTeG7mSBD4buVIE5ndXnDqm4gWMOhLSBWxINuIFRyw6w!5e0!3m2!1svi!2s!4v1665333143296!5m2!1svi!2s"
        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="footer-end">
    <p class="color-text text-center">Copyright © 2022 Urban Home. Powered by Haravan</p>
  </div>
</footer>

<div class="list-contact-icon-box">
  <ul class="list-contact-icon">
    <li class="bg-phone"><i class="fa-solid fa-phone"></i></li>
    <li class="bg-facebook"><i class="fa-brands fa-facebook-f"></i></li>
    <li class="bg-youtobe"><i class="fa-brands fa-youtube"></i></li>
    <li class="bg-twiter"><i class="fa-brands fa-twitter"></i></li>
  </ul>
</div>
</div>
<div id="backTop">
  <i class="fa-solid fa-caret-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script src="./../assets/js/back-top.js"></script>
<script src="./../assets/js/list-cart.js"></script>
<script>
function openCart() {

  document.getElementById("mySidenav").style.width = "350px";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>

</html>