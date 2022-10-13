<link rel="stylesheet" href="./../assets/Css/Product.css">
<div class="banner">
  <img class="w-100" style="height: 300px;object-fit: cover"
    src="https://bizweb.dktcdn.net/100/180/515/themes/683553/assets/slider_5.png?1663218776960" alt="">
</div>
<style>
.product-list_box {
  display: grid;
  margin-top: 30px;
  grid-template-columns: repeat(5, 1fr);
  grid-gap: 10px;
}
</style>

<div class="content padding-container">
  <header class="header-content-box">
    <div class="icon-open-filer-all" onclick="openNav()">
      <i class="fa-solid fa-arrow-down-short-wide"></i>
      Filter
    </div>
    <div class="title-box text-center">
      <h3 class="commom-title">Tất cả sản phẩm</h3>
    </div>
    <div class="selected-box">
      <select class="select" name="" id="">
        <option value="">Mới nhất</option>
        <option value="">Gần đây</option>
        <option value="">Bán chạy nhất</option>
      </select>
    </div>
  </header>
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn " onclick="closeNavFilter()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <button class="accordion">LOẠI HÌNH SẢN PHẨM</button>
      <div class="panel">
        <ul>
          <li><a href="index.php?url=san-pham"><i class="fa-solid fa-caret-right"></i> Tất cả sản phẩm</a></li>
          <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm khuyến mãi</a></li>
          <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm nổi bật</a></li>
        </ul>
      </div>

      <button class="accordion">LOẠI SẢN PHẨM</button>
      <div class="panel">
        <ul>
          <?php 
                     foreach($cates as $key){ ?>
          <li><a href="index.php?url=san-pham&cate=<?= $key["dm_id"] ?>"><?=$key["dm_name"]?></a></li>
          <?php } ?>

        </ul>
      </div>

      <button class="accordion">SIZE SẢN PHẨM</button>
      <div class="panel">
        <ul>
          <?php  
                    foreach ($size as $key) {
                     ?>
          <li><a href="index.php?url=san-pham&size=<?= $key["kt_id"] ?>"><i
                class="fa-solid fa-dollar-sign"></i><?=$key["kt_name"] ?></a></li>
          <?php  } ?>
        </ul>
      </div>
      <button class="accordion">MÀU SẮC</button>
      <style>
      .color {
        width: 30px;
        height: 30px;
        border-radius: 50px;
      }
      </style>
      <div class="panel">
        <ul class="filter-list-color">
          <?php  
                    foreach ($color as $key) {
                     ?>
          <a class="color" href="index.php?url=san-pham&color=<?= $key["kt_id"] ?>"
            style="background-color: <?=$key["ma_color"]?>" href=""></a>
          <?php  } ?>
        </ul>
      </div>
    </div>
  </div>

  <?php  if(isset( $key_word)){ ?>
  <h3 style="margin-top: 20px">Kết quả tìm kiếm : <span style="font-weight: normal"><?=$key_word?></span></h3>
  <?php  } ?>

  <div class="product-list_box ">
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

</div>


<script src="./../assets/js/filter-product.js">
</script>
<script>
function closeNavFilter() {
  document.getElementById("myNav").style.width = "0%";
}
</script>