<link rel="stylesheet" href="./../assets/Css/Home.css">
<div class="banner">
  <img class="w-100" style="height: 500px;object-fit: cover"
    src="https://ordixi.com/wp-content/uploads/2019/04/giay-chay-bo-49b814ac.jpg" alt="">
  <div class="banner-sub_box   padding-container" style="z-index: 1">
    <div class="banner-sub_img-box">
      <img class="w-100 h-100 "
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE74axMiu3xXZorvQ_CPPf5G9p_ZjeIV21Ww&usqp=CAU"
        alt="">
    </div>
    <div class="banner-sub_img-box">
      <img class="w-100 h-100"
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnuLeiCl8lfKzNzUhGkMDDhrt_jiNZlmNDbA&usqp=CAU"
        alt="">
    </div>
    <div class="banner-sub_img-box">
      <img class="w-100 h-100 "
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr5nnkGFlmIUWyoNXMRc_BZo6J6X7_75fnxA&usqp=CAU"
        alt="">
    </div>
  </div>
</div>
<div class="content">
  <h3 class="header-footer-title commom-title text-center">
    Sản phẩm mới nhất
  </h3>
  <p class="text-center color-text">Cập nhật những sản phẩm mới nhật</p>
  <div class="product-list_box padding-container">
    <?php foreach ($products as $item) { ?>
    <div class="product-item">
      <div class="product-item_img-box">
        <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"> <img class="w-100"
            src="./../upload/<?=$item["sp_image"]?>" alt=""></a>
        <div class="product-item_percent">
          <?=ceil(($item["sp_price"] - $item["sp_sale"]) * 100/$item["sp_price"])?>%</div>
        <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>" class="product-item_icon">
          <i class="fa-solid fa-magnifying-glass-plus"></i>
        </a>
      </div>
      <a style="color: black" href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>">
        <p class="product-item_name"><?=$item["sp_name"]?></p>
      </a>
      <div class="product-item_price-wraper">
        <div class="product-price-main">
          <?=number_format($item['sp_price'],0,",",".")?>đ
        </div>
        <div class="product-price_sale">
          <?=number_format($item['sp_sale'],0,",",".")?>đ
        </div>
      </div>
    </div>
    <?php  } ?>
  </div>

  <div class="category_image-box padding-container">
    <div class="category_image-above-box ">
      <div class="category_image-above-left">
        <div class="category_image-item-box">
          <img src="https://th.bing.com/th/id/R.3d2367a4239a0b1a2c29bbd7eff72106?rik=gOp%2fidma3GSvyg&pid=ImgRaw&r=0"
            alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Sản phẩm mới nhất</div>
          </div>
        </div>
        <div class="category_image-item-box" style="margin-top: 25px">
          <img src="https://s3.eu-central-1.amazonaws.com/cdn.barcin.com/2016/11/nike-spor-ayakkabi-e1480037425861.jpg"
            alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Sản phẩm mới nhất</div>
          </div>
        </div>
      </div>
      <div class="category_image-above-right">
        <div class="category_image-item-box">
          <img
            src="https://nhiet.vn/wp-content/uploads/2018/06/Shop-gi%C3%A0y-th%E1%BB%83-thao-nam-gi%C3%A1-r%E1%BA%BB-H%C3%A0-N%E1%BB%99i-4.jpg"
            alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Hello World</div>
          </div>
        </div>
      </div>
    </div>
    <div class="category_image-down-box">
      <div class="category_image-item-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDNGjn4zWDYN48_WLmG69uxjzuU0VT02tMrQ&usqp=CAU"
          alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">Sản phẩm mới nhất</div>
        </div>
      </div>
      <div class="category_image-item-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXl1mXHAPXn3F0m8BMnIJaGA2lSygyM0e1GA&usqp=CAU"
          alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">Sản phẩm mới nhất</div>
        </div>
      </div>
      <div class="category_image-item-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRV1WyoTrZ9vB8aaAn_5IUn4H0heninl91iA&usqp=CAU"
          alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">Sản phẩm mới nhất</div>
        </div>
      </div>
      <div class="category_image-item-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAj5JSDrrg_E3DaGaJpAY-bc-s_I6MFNuCg&usqp=CAU"
          alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">Sản phẩm mới nhất</div>
        </div>
      </div>
    </div>
  </div>
</div>