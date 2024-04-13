<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="../../front/CSS/LogIn.css" />
</head>
<body>
  <div id="header" style="width: 100%; height: 200px; background-color:#FFFFFF">
    <div id="top">
        <span><b>HotLine:</b></span><span> 0969769397 - Bui Quy Hung</span>
        <span id="address" style="padding-left: 100px; text-transform:uppercase"><b>Công ty cổ phần kinh doanh
                bqh_mobileshop</b></span>
        <div id="sign-in" style="float: right">
            <a href="/account/login/">Đăng nhập</a>
            <span> / </span>
            <a href="/account/register/">Đăng ký</a>
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
                    <li><a href="shop/danhmucsanpham/{{$theloaisanpham->MaDanhMuc}}">{{$theloaisanpham->TenDanhMuc}}</a></li>
                  
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
        <div id="body-header">
            <a href="/">TRANG CHỦ</a>
            <span>/</span>
            <a href="#">TÀI KHOẢN</a>
        </div>
        <div id="body-content">
            <div id="login">
              <form action="/account/login" method="post">
                @csrf
                <h1>ĐĂNG NHẬP</h1>
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="password" id="pass" name="password" placeholder="Mật khẩu">
               <input id="btnlogin" type="submit" value="Login" >
                <a href="/"><h3>Trở về</h3></a>
                <a href="/account/register/"><h3>Đăng kí</h3></a>
                <a href="#"><h3>Quên mật khẩu?</h3></a>
              </form>
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
</body>
</html>