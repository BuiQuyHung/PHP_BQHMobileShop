<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website TiniStore</title>
    <link rel="stylesheet" type="text/css" href="../../front/CSS/Product_details.css" />
    <script tyle="text/javascript" src="../../front/JS/Product_details.js"></script>
    <script tyle="text/javascript" src="../../front/JS/main.js"></script>
    <script tyle="text/javascript" src="../../front/JS/jquery-3.6.4.min.js"></script>
    <script>
        // Kích vào slide-show để đổi ảnh
        var index = 0;
        function changeImage() {
            var imgs = ["../../front/TGDD_Picture/1.jpg", "../../front/TGDD_Picture/2.jpg", "../../front/TGDD_Picture/3.jpg", "../../front/TGDD_Picture/4.jpg", "../../front/TGDD_Picture/5.jpg"];
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
                <a href="/"><img id="logo" src="front/TGDD_Picture/logo.jpg" /></a>
                <form id="timkiem" action="{{ url('shop/timkiemsanpham') }}" method="GET">
                    <div id="timkiem1">
                        <input name="search" type="text" placeholder="Tìm kiếm..." />
                        <button type="submit">Search</button>
                    </div>
                </form>
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
        <div id="main">
            <div id="ChiTiet">
                <div id="ChiTiet-Left">
                    <div id="CT-Top">
                        <h2 style="color: rgb(10, 106, 185)">THÔNG TIN SẢN PHẨM</h2>
                        <img id="slide" src="../../front/TGDD_Picture/1.webp" atl="AnhSanPham"
                            style="width: 300px; height: 260px; padding-left: 70px;" />
                    </div>
                    <div id="CT-Bottom">
                        <img src="../../front/TGDD_Picture/5.webp" width="150px" onclick="next(2)" />
                        <img src="../../front/TGDD_Picture/3.webp" width="150px" onclick="next(3)" />
                        <img src="../../front/TGDD_Picture/4.webp" width="150px" onclick="next(4)" />
                        <img src="../../front/TGDD_Picture/5.webp" width="150px" onclick="next(5)" />
                    </div>
                </div>
                <div id="ChiTiet-Right">
                    <h1 style="padding-top: 10px; color: #03a6f1"> {{$sanpham->TenSP}}</h1>
                    
                    <br>
                    <span
                        style="color: red; font-size: xx-large; font-weight: bold; float: left"> {{$sanpham->giatien}} VNĐ</span></span>
                    <img src="../../front/TGDD_Picture/left_bottom.webp"
                        style="width: 400px; height: 50px; float: left; margin-top: 50px" />
                    <div id="option" style="padding-top: 150px;">
                        <div id="cl-option">
                            <h2 style="color: rgb(10, 106, 185)">Số Lượng</h2>
                            <div id="num">
                                <input style="border-radius: 5px; border: 2px solid rgb(10, 106, 185)" type="button"
                                    value="-" onclick="sub('numtxt')">
                                <input id="numtxt"
                                    style="border-radius: 5px; text-align: center; border: 2px solid rgb(10, 106, 185)"
                                    type="text" value="1" style="text-align: center;">
                                <input style="border-radius: 5px; border: 2px solid rgb(10, 106, 185)" type="button"
                                    value="+" onclick="plus('numtxt')">
                                <button id="btnChon"><a href="{{ url('cart/add/' . $sanpham->MaSP) }}">Mua ngay</a></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="MoTa">
                    <h2 style="color: rgb(10, 106, 185); padding-left: 50px;">MÔ TẢ SẢN PHẨM</h2>
                    <br>
                    <div id="spanctsp" style="padding-left: 50px;">
                        <h3>
                            1. Giới thiệu sản phẩm:
                        </h3>
                        <span>Mua điện thoại iPhone 14 chính hãng VN/A giá rẻ tại Hoàng Hà Mobile</span>
                        <br />
                        <br />
                        <span>Mới đây, Apple đã tổ chức sự kiện Far Out ra mắt các sản phẩm mới của năm 2022. Công ty đã
                            giới thiệu dòng iPhone 14 Series được rất nhiều người dùng chờ đợi kể từ khi những tin đồn
                            đầu tiên xuất hiện vào hồi đầu năm. Sản phẩm năm nay không chỉ cải tiến về thiết kế mà còn
                            được cung cấp sức mạnh vượt trội từ con chip A15 Bionic. Hãy cùng Hoàng Hà Mobile khám phá
                            những ưu điểm của chiếc iPhone 14 chính hãng VN/A nhé.</span>
                        <br />
                        <br />
                        <span>Tất cả iPhone chính hãng VN/A được phân phối tại Hoàng Hà Mobile đều được nhập trực tiếp
                            từ Công ty TNHH Apple Việt Nam. BQH_MOBILESHOP là nhà bán lẻ ủy quyền chính thức của Apple
                            tại Việt Nam.</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="featured-brands">
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/iphone.jpg"></a>
            </div>
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/Samsung.jpg"></a>
            </div>
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/pixel.jpg"></a>
            </div>
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/realme.jpg"></a>
            </div>
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/oppo.jpg"></a>
            </div>
            <div class="brands">
                <a href="#"><img src="../../front/TGDD_Picture/vivo.jpg"></a>
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
</body>

</html>