<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website TiniStore</title>
    <link rel="stylesheet" type="text/css" href="Index.css" />
    <script tyle="text/javascript" src="myScript.js"></script>
    <script tyle="text/javascript" src="jquery-3.6.4.min.js"></script>
    <script>
        // Kích vào slide-show để đổi ảnh
        var index = 0;
        function changeImage() {
            var imgs = ["TGDD_Picture/1.jpg", "TGDD_Picture/2.jpg", "TGDD_Picture/3.jpg", "TGDD_Picture/4.jpg", "TGDD_Picture/5.jpg"];
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
                <a href="Index.html"><img id="logo" src="TGDD_Picture/logo.jpg" /></a>
                <input type="text" placeholder="Tìm kiếm..." />
                <button type="submit">Search</button>
                <a id="cartAmount" href="Cart.html">Giỏ hàng (0)</a>
            </div>

            <div id="menu">
                <ul>
                    <li><a href="Index.html">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a>
                        <ul class="sub-menu">
                            <li><a href="#">Hệ thống cửa hàng</a></li>
                            <li><a href="#">Mục tiêu công ty</a></li>
                            <li><a href="#">Chi nhánh khác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="Product.html">Iphone</a></li>
                            <li><a href="Product.html">SamSung</a></li>
                            <li><a href="Product.html">Google</a></li>
                            <li><a href="Product.html">VIVO</a></li>
                            <li><a href="Product.html">OPPO</a></li>
                            <li><a href="Product.html">Realmi</a></li>
                            <li><a href="Product.html">Lenovo</a></li>
                            <li><a href="Product.html">Xiaomi</a></li>
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
        <div id="main">
            <div class="slide-show">
                <img id="img" onclick="changeImage()" src="TGDD_Picture/1.jpg" alt="Quảng cáo" />
            </div>
            <br />
            <div id="content">
                <div class="cate">
                    <h1>MUA THEO THƯƠNG HIỆU</h1>
                </div>
                <div id="featured-brands">
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/iphone.jpg"></a>
                    </div>
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/Samsung.jpg"></a>
                    </div>
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/pixel.jpg"></a>
                    </div>
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/realme.jpg"></a>
                    </div>
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/oppo.jpg"></a>
                    </div>
                    <div class="brands">
                        <a href="#"><img src="TGDD_Picture/vivo.jpg"></a>
                    </div>
                </div>
                <div class="cate">
                    <h1>ĐIỆN THOẠI NỔI BẬT</h1>
                </div>
                <div class="list-product">
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25990000(VNĐ)</span>
                        <span class="old-price">27900000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>

                </div>
                <div class="ad">
                    <img src="TGDD_Picture/banner02.jpg" alt="Quảng cáo 1" />
                </div>
                <!------------------------------------------------------------------->
                <div class="cate">
                    <h1>ĐIỆN THOẠI MỚI</h1>
                </div>
                <div class="list-product">
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>
                    <div class="item col-3 col-s-6">
                        <a href="product_details.html"><img class="item-photo" src="TGDD_Picture/product-1.webp"
                                alt="SP" /></a>
                        <a class=" product-name" href="product_details.html">Iphone 1</a>
                        <span class="new-price">25.990.000(VNĐ)</span>
                        <span class="old-price">27.900.000(VNĐ)</span>
                        <input class="btn-addToCart" type="button" value="Mua ngay" />
                    </div>

                </div>
                <div class="ad">
                    <img src="TGDD_Picture/banner01.jpg" alt="Quảng cáo 1" />
                </div>

                <div id="lienhe">
                    <a href="#" target="_self">
                        <img src="TGDD_Picture/lh1.png" style="width:70px; height:70px" />
                        <img src="TGDD_Picture/lh2.png" style="width:70px; height:70px" />
                        <img src="TGDD_Picture/lh3.png" style="width:70px; height:70px" />
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------------------- -->
        <div id="footer">
            <div id="home-policy">
                <div class="f-item">
                    <div class="policy-item">
                        <img src="TGDD_Picture/icon_1.png" alt="Icon">
                        <span>THƯƠNG HIỆU QUỐC TẾ</span>
                    </div>
                </div>
                <div class="f-item">
                    <div class="policy-item">
                        <img src="TGDD_Picture/icon_2.png" alt="Icon">
                        <span>GIÁ CẢ CẠNH TRANH</span>
                    </div>
                </div>
                <div class="f-item">
                    <div class="policy-item">
                        <img src="TGDD_Picture/icon_3.png" alt="Icon">
                        <span>DỊCH VỤ CHU ĐÁO</span>
                    </div>
                </div>
                <div class="f-item">
                    <div class="policy-item">
                        <img src="TGDD_Picture/icon_4.png" alt="Icon">
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
                <img src="TGDD_Picture/bocongthuong.png">
            </div>
        </div>
    </div>
</body>

</html>