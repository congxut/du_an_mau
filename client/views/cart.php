<link rel="stylesheet" href="./../assets/Css/Cart.css">
<div class="content padding-container text-center" style="padding-bottom: 40px">
  <h3 class="title-page-name commom-title text-center">Giỏ hàng </h3>
  <p class="text-center color-text"> Giỏ hàng của bạn , hãy chọn những thứ mình muốn </p>
  <div class="cart-box">
    <div class="">
      <table class="table">
        <thead>
          <th>STT</th>
          <th>Tên</th>
          <th>Số lượng</th>
          <th>Giá</th>
          <th>Tổng tiền</th>
          <th>Xoá</th>
        </thead>
        <tbody>
          <?php $index= 1;$total = 0; foreach($cart as $key => $value){
                        $total+=$value['price'] * $value['number'];  ?>
          <tr>
            <td><?=$index++?></td>
            <td class="cart_name-box">
              <img class="cart_img" src="./../upload/<?= $value["img"]?>" alt="">
              <div class="product_cart-info-rigth">
                <p class="product_name" style="font-weight: bold"><?= $value["name"]?></p>
                <span style="display: block; text-align: left;"><?= $value["size"]?></span>
              </div>
            </td>
            <td>
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"><i
                    class="fa-solid fa-minus"></i></button>
                <input class="quantity" min="0" name="quantity" value="<?=$value['number']?>" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"><i
                    class="fa-solid fa-plus"></i></button>
              </div>
            </td>
            <td> <?=number_format($value['price'],0,",",".")?>đ</td>
            <td> <?=number_format($value['price'] * $value['number'] ,0,",",".")?>đ</td>
            <td>
              <a href="index.php?url=xoa-gio-hang&id=<?=$value["id"]?>" class="btn-delete-cart"><i
                  class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <?php  } ?>
        </tbody>
      </table>
      <div class="btn-table-footer">
        <button class="btn-footer btn-continue-now"><a href="index.php?url=san-pham"><i
              class="fa-solid fa-arrow-left"></i> Tiếp tục
            mua hàng</a></button>
        <button class="btn-footer btn-update-cart "><a href="">Cập nhật giỏ hàng</a></button>
      </div>
    </div>
    <div class="total-money">
      <h3 class="plus-cart">Cộng giỏ hàng</h3>
      <div class="plus-cart-provisional">
        <h4>Tạm tính</h4>
        <h5><?=number_format($total,0,",",".")?>đ</h5>
      </div>
      <div class="plus-cart-provisional">
        <h3 class="total-name">Tổng tiền</h3>
        <h4 class="total-price"><?=number_format($total,0,",",".")?>đ</h4>
      </div>
      <button href="" class="btn-check-out"><a href="index.php?url=thanh-toan">Tiền hành thanh toán</a></button>
    </div>
  </div>
</div>