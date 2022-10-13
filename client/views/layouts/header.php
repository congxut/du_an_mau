<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./../assets/Css/base.css">
  <link rel="stylesheet" href="./../assets/Css/cart-header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
    nonce="vWDw95v7"></script>
</head>

<body>
  <div id="fb-root"></div>
  <div class="container">
    <header class="header">
      <div class="header-top">
        <p>Chuyên quần áo nam chính hãng</p>
      </div>
      <div class="header-main padding-container">
        <div class="header-main_log">
          <span>AVA SPORT <i class="fa-solid fa-shoe-prints"></i></span>
        </div>
        <form action="?url=tim-kiem-san-pham" method="POST" class="header-search_form-box">
          <input class="header-search_form-input" name="key_word" type="text" placeholder="Tìm kiếm sản phẩm">
          <button class="header-search_btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="header-phone header-main_sub">
          <p><i class="fa-solid icon fa-square-phone"></i></p>
          <div class="">
            <span>Hotline:</span>
            <br>
            <p>1900.636.099
            </p>
          </div>
        </div>

        <?php if(isset($user)){ ?>
        <div class="header-login  header-main_sub">
          <p>
            <td><img width="30px" style="height:30px;border-radius:30px;margin-right:10px"
                src="../upload/<?=$user['kh_avatar']?>" alt=""></td>
          </p>
          <div class="">
            <p lass="name_user" style="font-weight: bold;cursor: pointer;"><?=$user['kh_name']?> </p>
            <a href="?logout">Đăng xuất</a>
          </div>
        </div>
        <?php }else{ ?>
        <div class="header-login  header-main_sub">
          <p><i class="fa-solid icon fa-user"></i></p>
          <div class="">
            <span> <a href="?dang-nhap">Đăng nhập</a>/ <a href="?dang-ky">Đăng ký</a> </span>

            <br>
            <p>Tài khoản của tôi <i class="fa-solid fa-caret-down"></i>
            </p>
          </div>
        </div>
        <?php } ?>
        <div class="header-cart header-main_sub" onclick="openCart()">
          <div class="header-icon-cart">
            <p><i class="fa-solid icon fa-cart-shopping"></i></p>
            <span><?= isset($_SESSION["cart"]) ?  count($_SESSION["cart"]) : 0;?></span>
          </div>
          <div class="">
            <p>Giỏ hàng
            </p>
          </div>
        </div>

      </div>
      <?php if(isset($_SESSION["cart"])){ ?>
      <div id="mySidenav" class="sidenav cart-list-info" style="z-index: 10">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="" style="padding: 0px 20px ;border-top:1px solid #ccc;">
          <h4 style="margin-top: 10px;">Tổng số : <?php echo count($_SESSION["cart"]) ?></h4>
          <?php if(isset($_SESSION["cart"])){ $count=0; ?>
          <?php  foreach ($_SESSION["cart"] as $key => $value) { 
                        $count+=$value['price'] * $value['number'] ?>
          <div class="cart-list-item">
            <img class="cart-list-item-img " src="./../upload/<?=$value["img"]?>" alt="">
            <div class="" style="margin-left: 10px">
              <p class="cart-list-item-name"><?=$value["name"]?></p>
              <p class="cart-list-item-price"> <?=number_format($value['price'],0,",",".")?>đ
                <span>(<?=$value["number"]?>)</span></p>
            </div>
            <a href="index.php?url=xoa-gio-hang&id=<?=$value['id']?>" class="btn-cart-delete"
              style="padding: 0px 10px"><i class="fa-solid fa-trash-can"></i></a>
          </div>
          <?php }?>

          <?php } ?>
          <h3 style="margin-top: 30px">Tổng tiền <span
              style="color: #8E0007"><?=number_format($count,0,",",".")?>đ</span></h3>
          <button class="cart-list-view"><a style="color: #000" href="index.php?url=gio-hang">Xem giỏ hàng</a> </button>
        </div>
      </div>
      <?php } ?>
      <div class="header-menu padding-container">
        <ul class="header-menu_list">
          <li class="header-menu-item"><a href="index.php" class="header-menu-item-link">Trang chủ </a></li>
          <li class="header-menu-item"><a href="index.php?url=" class="header-menu-item-link">Giới thiệu</a>
          </li>
          <li class="header-menu-item"><a href="index.php?url=san-pham" class="header-menu-item-link">Sản phẩm
              <i class="fa-solid fa-caret-down"></i></a></li>
          <li class="header-menu-item"><a href="index.php?url=lien-he" class="header-menu-item-link">Liên
              hệ</a></li>
        </ul>
      </div>
    </header>

    <script src="./../assets/js/list-cart.js"></script>