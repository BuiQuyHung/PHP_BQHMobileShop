<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website TiniStore</title>
    <link rel="stylesheet" type="text/css" href="../../front/CSS/Checkout.css" />
    <script src="../../front/myScript.js"></script>
    <script src="../../front/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            var cart = sessionStorage.getItem("cart"); //nhận value by Cart
            cartProducts = "[" + cart + "]";
            products = JSON.parse(cartProducts); //JSON.stringify(): chuyển object thành string
            //JSON.parse(): chuyển string thành object
            var amount = products.length;
            //alert(amount);
            // $("#cart-amount").text("Giỏ hàng ("+amount+")");

            var table = `
				<table cellpadding="0" cellspacing="0">
						<tr style=" color: rgb(10, 106, 185)">
							<th style="padding-left: 30px">STT</th>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>Xóa</th>
						</tr>
				`;
            // alert(table);
            let count = 1;
            for (var i = 0; i < amount; i++) {
                var row = `
                    <tr>
                        <td style="padding-left:40px">${i + 1}</td>
                        <td style="width: 150px;height:80px;"><img style="width: 80px;height:80px;margin-left:30px" src="${products[i].img}" ></td>
                        <td style="width:300px;text-align:center">${products[i].name}</td>
                        <td id="DonGia${count}" style="width: 100px;height:80px; padding-left:20px">${products[i].price}</td>
                        <td style="width: 200px;height:80px;padding-left:40px">
                            <input class="btn-minus${count}" type="button" value="-" onclick="sub('sl${count}','ThanhTien${count}','DonGia${count}')" style="width:40px; height:30px"/>
                            <input class="txt-amount${count}" id="sl${count}" type="text" value="1" style="width:40px; height:30px"/>
                            <input class="btn-plus${count}" type="button" value="+" onclick="plus('sl${count}','ThanhTien${count}','DonGia${count}')" style="width:40px; height:30px"/>
                        </td>
                        <td style="width: 150px;height:80px;padding-left:45px" id="ThanhTien${count}">${products[i].price}</td>
                        <td>
                            <img src="TGDD_Picture/Xoa.png" style="width:30px; height:30px;padding-left:5px">
                        </td>
                    </tr>
					`;

                table += row;
                count += 1;
                console.log(typeof count); // Xem giá trị của biến
            }

            table += `</table>`;
            // Xóa thành phần trong giỏ hàng
            $("#content").html(table);
            $(document).on("click", "img[src='../../front/TGDD_Picture/Xoa.png']", function () {
                $(this).parent().parent().remove();
            });
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
        <br />
        <div id="mains">
            <form id="main" action="" method="post" class="checkout-form">
            <div id="main-left">
                <div id="box_info_step1">
                    <div id="info_dia_chi_giao_hang">
                        <div id="tt_dia_chi">Địa chỉ giao hàng</div>
                        <div id="data_ct_address">
                            @csrf
                            <div class="row">
                                <div class="control_group">
                                    <label>Họ và tên</label><br />
                                    <input name="tenkhachhang" id="hovaten" type="text" placeholder="Họ và tên" />
                                </div>
                                <div class="control_group" style="margin-top: 20px;">
                                    <label>Email</label><br />
                                    <input name="email" id="email" type="text" placeholder="Email" />
                                </div>
                                <div class="control_group" style="margin-top: 20px;">
                                    <label>Điện thoại</label><br />
                                    <input name="sodienthoai" id="sodienthoai" type="text"
                                        placeholder="Số điện thoại của bạn" />
                                </div>
                                <div class="control_group" style="margin-top: 20px;">
                                    <label>Địa chỉ</label><br />
                                    <input name="diachi" id="diachi" type="text" placeholder="Địa chỉ của bạn" />
                                </div>
                            </div>

                        </div>
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
                                width: 140px;
                                height: 22px;
                                text-align: left;
                                float: left;
                                padding-top:10px">Sản phẩm</span>
                            <span style="
                                width: 80px;
                                height: 22px;
                                text-align: right;
                                float: right;
                                padding-top:10px" id="tongSP">{{ Cart::count() }}</span>
                        </div>
                        <div style="width: 250px; height: 22px">
                            <span style="
                                width: 150px;
                                height: 22px;
                                text-align: left;
                                float: left;
                                padding-top:20px">Phí vận chuyển</span>
                            <span style="
                                width: 80px;
                                height: 22px;
                                text-align: right;
                                float: right;
                                padding-top:20px">Miễn phí</span>
                        </div>
                        <div style="width: 250px; height: 22px">
                            <span style="
                                width: 80px;
                                height: 22px;
                                text-align: left;
                                float: left;
                                padding-top:30px;
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
                <input style="border: none" type="submit" id="bt_thanh_toan" type="button" value="Thanh toán" />
                <a id="bt_quay_lai" href="#" onclick="trove()">QUAY LẠI</a>
            </div>
        </form>
        </div>
   
        <div class="ad">
            <img src="../../front/TGDD_Picture/banner02.jpg" alt="Quảng cáo 1" />
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

</body>

</html>