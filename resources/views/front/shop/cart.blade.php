<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website TiniStore</title>
    <link rel="stylesheet" type="text/css" href="../../front/CSS/Index.css" />
    <script tyle="text/javascript" src="../../front/JS/main.js"></script>
    <script tyle="text/javascript" src="../../front/JS/jquery-3.6.4.min.js"></script>
    <script>
        // Kích vào slide-show để đổi ảnh
        var index = 0;
        function changeImage() {
            var imgs = ["../../front/../../front/TGDD_Picture/1.jpg", "../../front/TGDD_Picture/2.jpg", "../../front/TGDD_Picture/3.jpg", "../../front/TGDD_Picture/4.jpg", "../../front/TGDD_Picture/5.jpg"];
            document.getElementById("img").src = imgs[index];
            index++;
            if (index == 5) {
                index = 0;
            }
        }
        //  Cứ 3s đổi ảnh slide-show 
        setInterval(changeImage, 3000);

        $(document).ready(function () {

            $(".btn-addToCart").click(function () {
                var cartAmount = Number(sessionStorage.getItem("cartAmount"));
                //alert(cartAmount);
                if (cartAmount != null)
                    cartAmount += 1;
                else
                    cartAmount = 1;
                $("#cart").text("Giỏ hàng (" + cartAmount + ")");
                sessionStorage.setItem("cartAmount", cartAmount);


                var pImg = $(this).parent().find(".item-photo").attr("src");
                var pName = $(this).parent().find(".product-name").text();
                var pPrice = $(this).parent().find(".new-price").text();
                var product = {
                    "img": pImg,
                    "name": pName,
                    "price": pPrice
                };

                //alert(pImg +" "+pName+" "+pPrice);
                var cart = sessionStorage.getItem("cart");
                var cartProducts = "";
                if (cart != null) {
                    cartProducts = cart + "," + JSON.stringify(product);
                } else
                    cartProducts = JSON.stringify(product);
                // JSON.stringify() sẽ chuyển đổi object bất kì thành chuỗi.
                sessionStorage.setItem("cart", cartProducts);
                //alert(cartProducts);					
            });

            var count = 0;
            $(".item input").click(function () {
                count += 1;
                $("#cartAmount").text("Giỏ hàng (" + count + ")");
            })

            $(".item input").hide(); // Ẩn thành phần
            $(".item").hover(function () {
                $(this).children().last().toggle(); // Ẩn hiện Button khi di chuột vào 
            });

            $(".cate").click(function () {
                $(this).next().slideToggle();
                // slideToggle(): Hiển thị và ẩn các thành phần phù hợp với hiệu ứng chuyển động trượt (slide)
            })
        });
    </script>
</head>


<body>
    <div id="container" style="width: 100%; margin: 0px auto; font-family: Arial">
        <div id="header" style="width: 100%; height: 200px; background-color:#FFFFFF">
            <div id="top">
                <span><b>HotLine:</b></span><span> 0969769397 - Bui Quy Hung</span>
                <span id="address" style="padding-left: 100px; text-transform:uppercase"><b>Công ty cổ phần kinh doanh
                        bqh_mobileshop</b></span>
                <div id="sign-in" style="float: right">
                    <a href="LogIn.html">Đăng nhập</a>
                    <span> / </span>
                    <a href="Register.html">Đăng ký</a>
                </div>
            </div>

            <div id="banner">
                <a href="/"><img id="logo" src="../../front/TGDD_Picture/logo.jpg" /></a>
                <input type="text" placeholder="Tìm kiếm..." />
                <button type="submit">Search</button>
                <a id="cartAmount" href="/cart">Giỏ Hàng ({{ Cart::count() }})</a>
            </div>

            <div id="menu">
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a>
                        <ul class="sub-menu">
                            <li><a href="#">Hệ thống cửa hàng</a></li>
                            <li><a href="#">Mục tiêu công ty</a></li>
                            <li><a href="#">Chi nhánh khác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sản phẩm</a>
                        <ul class="sub-menu">

                            @foreach($menu as $theloaisanpham)
                            <li><a href="/shop/danhmucsanpham/{{$theloaisanpham->MaDanhMuc}}">{{$theloaisanpham->TenDanhMuc}}</a></li>
                          
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#">Tin tức</a>
                        <ul class="sub-menu">
                            <li><a href="#">Tin tức nổi bật</a></li>
                            <li><a href="#">Tin khuyến mại</a></li>
                            <li><a href="#">Tin tiêu điểm</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sự kiện</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sự kiện nổi bật</a></li>
                            <li><a href="#">Sự kiện tháng</a></li>
                            <li><a href="#">Sự kiện năm</a></li>
                            <li><a href="#">Sự kiện khác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Khuyến mãi</a>
                        <ul class="sub-menu">
                            <li><a href="#">Khuyến mãi hot</a></li>
                            <li><a href="#">Khuyến mãi tháng</a></li>
                            <li><a href="#">Khuyến mãi năm</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <br />
        <div id="mains">
            <div id="main-left">
                <div id="title_cart">
                    <span>GIỎ HÀNG</span>
                </div>
                <div id="row_fluid">
                    <div id="box_list_cart">
                        <table>
                            @foreach($carts as $cart)
                            <tr>
                                <th>STT</th>
                                <th style="width: 87.5px; text-align: center">Hình Ảnh</th>
                                <th style="width: 200px; text-align: center">Tên</th>
                                <th style="width: 87.5px; text-align: center">Đơn giá</th>
                                <th style="width: 70px; text-align: center">Số lượng</th>
                                <th style="width: 87.5px; text-align: center">Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                            <tbody>

                                <tr data-rowId="{{$cart->rowId}}">
                                    <td>1</td>
                                    <td style=" text-align: center">
                                        <img src="../../front/TGDD_Picture/product-1.webp" style="width: 80px; height: 80px"
                                            alt="Hình ảnh sách" />
                                    </td>
                                    <td style="text-align: center">
                                        {{$cart->name}}
                                    </td>
                                    <td style="text-align: center">{{$cart->price }}</td>
                                    <td style="width: 80px;display: flex;align-items: center; height:105px">
                                        <!-- Nút giảm số lượng -->
                                        <button class="quantity-btn decrease-btn" data-rowId="{{$cart->rowId}}"
                                            onclick="updateQuantity('{{$cart->rowId}}', -1)">-</button>
                                        <!-- Input số lượng -->
                                        <input class="quantity-input" value="{{$cart->qty}}" min="1"
                                            data-rowId="{{$cart->rowId}}" style="width: 30px; text-align: center" />

                                        <!-- Nút tăng số lượng -->
                                        <button class="quantity-btn increase-btn" data-rowId="{{$cart->rowId}}"
                                            onclick="updateQuantity('{{$cart->rowId}}', 1)">+</button>
                                    </td>

                                    <td style="text-align: center">{{$cart->price * $cart->qty}}</td>
                                    <td style="text-align: center">
                                        <img onclick="removeCart('{{$cart->rowId}}')" src="../../front/TGDD_Picture/xoa.png"
                                            style="width: 30px; height: 30px" />
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <a id="bt_xoa_toan_bo" href="#"
                            onclick="confirm('Bạn chắc chắn muốn xóa?') === true ? destroyCart() : ''">XÓA TOÀN BỘ</a>
                        <br />

                    </div>
                </div>
            </div>
            <div id="main-right">
                <div id="span4">
                    <div id="title_tom_tat">
                        <span>TÓM TẮT ĐƠN HÀNG</span>
                    </div>
                    <div id="list_tom_tat_thanh_toan">
                        <div style="width: 250px; height: 22px">
                            <span style="
                              width: 150px;
                              height: 22px;
                              text-align: left;
                              float: left;">Sản phẩm</span>
                            <span style="
                              width: 100px;
                              height: 22px;
                              text-align: right;
                              float: right;" id="tongSP">{{ Cart::count() }}</span>
                        </div>
                        <div style="width: 250px; height: 22px">
                            <span style="
                              width: 150px;
                              height: 22px;
                              text-align: left;
                              float: left;">Phí vận chuyển</span>
                            <span style="
                              width: 100px;
                              height: 22px;
                              text-align: right;
                              float: right;">Miễn phí</span>
                        </div>
                        <div style="width: 250px; height: 22px">
                            <span style="
                              width: 80px;
                              height: 22px;
                              text-align: left;
                              float: left;
                              font-weight: 700;">TẠM TÍNH</span>
                            <span class="total-price" id="TamTinh" style="
                              width: 170px;
                              height: 22px;
                              text-align: right;
                              float: right;
                              color: #117c47;
                            ">{{$subtotal}}</span>
                        </div>
                        <br />
                        <div id="box_tong_cong">
                            <div id="label_tong_cong">
                                <span>TỔNG CỘNG</span>
                            </div>
                            <div id="label_tong_cong">
                                <span class="total-price" id="TongCong">{{$total}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="box_bt_payment">
                <a id="bt_thanh_toan" href="/checkout">THANH TOÁN</a>
                <a id="bt_quay_lai" href="#" onclick="trove()">QUAY LẠI</a>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------- -->
    <div id="footer">
        <div id="home-policy">
            <div class="f-item">
                <div class="policy-item">
                    <img src="../../front/TGDD_Picture/icon_1.png" alt="Icon">
                    <span>THƯƠNG HIỆU QUỐC TẾ</span>
                </div>
            </div>
            <div class="f-item">
                <div class="policy-item">
                    <img src="../../front/TGDD_Picture/icon_2.png" alt="Icon">
                    <span>GIÁ CẢ CẠNH TRANH</span>
                </div>
            </div>
            <div class="f-item">
                <div class="policy-item">
                    <img src="../../front/TGDD_Picture/icon_3.png" alt="Icon">
                    <span>DỊCH VỤ CHU ĐÁO</span>
                </div>
            </div>
            <div class="f-item">
                <div class="policy-item">
                    <img src="../../front/TGDD_Picture/icon_4.png" alt="Icon">
                    <span>GIÁ CẢ HỢP LÝ</span>
                </div>
            </div>
        </div>
        <div id="nav-wrapper">
            <div id="grid-uniform">
                <div class="nav" style="width: 25%; height: 200px;">
                    <h4>Về BQH_SHOP</h4>
                    <li><a href="#" style="width: 150px; height: 24px;">Giới thiệu</a></li>
                    <li><a href="#" style="width: 150px; height: 24px;">Hệ thống</a></li>
                    <li><a href="#" style="width: 150px; height: 24px;">Tin tức</a></li>
                    <li><a href="#" style="width: 150px; height: 24px;">Chính sách bảo mật</a></li>
                    <li><a href="#" style="width: 150px; height: 24px;">Điều khoản sử dụng</a></li>
                </div>
                <div class="nav" style="width: 25%; height: 200px;">
                    <h4>CÁC DÒNG SẢN PHẨM</h4>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại Iphone</a></li>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại Samsung</a></li>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại OPPO</a></li>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại VIVO</a></li>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại Realme</a></li>
                    <li><a href="#" style="width: 140px; height: 24px;">Điện thoại Pixel</a></li>

                </div>
                <div class="nav" style="width: 25%; height: 200px;">
                    <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                    <li><a href="#" style="width: 150px; height: 24px;">Chính sách bảo mật</a></li>
                    <li><a href="#" style="width: 160px; height: 24px;">Hướng dẫn mua hàng</a></li>
                    <li><a href="#" style="width: 180px; height: 24px;">Phương thức thanh toán</a></li>
                    <li><a href="#" style="width: 180px; height: 24px;">Phương thức vận chuyển</a></li>
                    <li><a href="#" style="width: 180px; height: 24px;">Chính sách bảo hành</a></li>
                    <li><a href="#" style="width: 150px; height: 24px;">Chính sách đổi trả</a></li>

                </div>
                <div class="nav" style="width: 25%; height: 200px;">
                    <h4>CHĂM SÓC KHÁCH HÀNG</h4>
                    <li><a href="#" style="width: 120px; height: 24px;">Liên hệ hỗ trợ</a></li>
                    <li><a href="#" style="width: 130px; height: 24px;">Hệ thống cửa hàng</a></li>
                    <li><a href="#" style="width: 100px; height: 24px;">Tin tuyển dụng</a></li>
                </div>
            </div>
        </div>
        <div id="confirm-wrapper">
            <span>Công ty cổ phần kinh doanh BQH_MobileShop Số ĐKKD 123456 do Sở KHĐT Hải Dương cấp ngày
                10/03/2024</span>
            <img src="../../front/TGDD_Picture/bocongthuong.png">
        </div>
    </div>
    </div>
    <script>
        // Lấy tất cả các nút tăng và giảm số lượng
        function updateQuantity(rowId, change) {
          var quantityInput = $(".quantity-input[data-rowId='" + rowId + "']");
          if (quantityInput.length > 0) {
            var currentQty = parseInt(quantityInput.val());
            if (!isNaN(currentQty)) {
              var newQty = currentQty + change;
              if (newQty >= 0) {
                quantityInput.val(newQty);
                updateCart(rowId, newQty);
              }
            } else {
              console.error("Current quantity is not a number.");
            }
          } else {
            console.error("Quantity input element not found.");
          }
        }
      </script>
</body>

</html>