<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <title>Nhà sách trực tuyến Fahasa.com - FAHASA.COM</title>
  <link rel="icon" type="images/x-icon" href="../../front/HinhAnh/index/channels4_profile.jpg" />
  <link rel="stylesheet" type="text/css" href="../../front/CSS/DangKy.css" />
  <script type="text/javascript" src="../../front/JS/DangKy.js"></script>
  <script type="text/javascript" src="../../front/JS/jquery-3.6.4.min.js"></script>
</head>

<body>
<div class="header">
        <div class="header_top">
            <img src="../../front/HinhAnh/index/HSO_T1_T324_Banner_resize_Header_1263x60_1.jpg" alt="" />
        </div>
        <div class="header_bottom" style="margin-top: 7px">
            <div class="header1">
                <img src="../../front/HinhAnh/index/fahasa-logo.png" alt="" />
            </div>
            <div class="header2">
                <button class="dropbtn">
                    <img src="../../front/HinhAnh/index/pngtree-menu-vector-icon-png-image_3791388.jpg" alt="" />
                </button>
                <div class="dropdown-content">
                    <div class="left-div">
                        <span>Danh mục sản phẩm</span>
                        @foreach($menu as $theloaisach)
                        <a href="/shop/danhmucsach/{{$theloaisach->MaTheLoaiSach}}">{{$theloaisach->TheLoaiSach}}</a>
                        @endforeach

                    </div>
                    <div class="right-div">
                        <div id="content-option1" class="content-option">
                            <div class="div1">
                                <div class="div11">SÁCH TRONG NƯỚC</div>
                            </div>
                            <div class="div2" style="height: 30%">
                                <div class="div21" style="width: 25%">
                                    <a href="#">VĂN HỌC</a>
                                    <a href="#">Tiểu Thuyết</a>
                                    <a href="#">Truyện Ngắn - Tản Văn</a>
                                    <a href="#">Light Novel</a>
                                    <a href="#">Ngôn Tình</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 25%">
                                    <a href="#">KINH TẾ</a>
                                    <a href="#">Nhân Vật - Bài Học Kinh Doanh</a>
                                    <a href="#">Quản Trị - Lãnh Đạo</a>
                                    <a href="#">Marketing - Bán Hàng</a>
                                    <a href="#">Phân Tích Kinh Tế</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 25%">
                                    <a href="#">TÂM LÝ - KỸ NĂNG SỐNG</a>
                                    <a href="#">Kỹ Năng Sống</a>
                                    <a href="#">Rèn Luyện Nhân Cách</a>
                                    <a href="#">Tâm Lý</a>
                                    <a href="#">Sách Cho Tuổi Mới Lớn</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div24" style="width: 25%">
                                    <a href="#">NUÔI DẠY CON</a>
                                    <a href="#">Cẩm Nang Làm Cha Mẹ</a>
                                    <a href="#">Phương Pháp Giáo Dục Trẻ</a>
                                    <a href="#">Phát Triển Trí Tuệ Cho Trẻ</a>
                                    <a href="#">Phát Triển Kỹ Năng Cho Trẻ</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div3" style="height: 30%">
                                <div class="div31" style="width: 25%">
                                    <a href="#">SÁCH THIẾU NHI</a>
                                    <a href="#">Manga - Comic</a>
                                    <a href="#">Kiến Thức Bách Khoa</a>
                                    <a href="#">Sách Tranh Kỹ Năng Sống</a>
                                    <a href="#">Vừa Học - Vừa Học Vừa Chơi</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div32" style="width: 25%">
                                    <a href="#">TIỂU SỬ - HỒI KÝ</a>
                                    <a href="#">Câu Chuyện Cuộc Đời</a>
                                    <a href="#">Chính Trị</a>
                                    <a href="#">Kinh Tế</a>
                                    <a href="#">Nghệ Thuật - Giải Trí</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div33" style="width: 25%">
                                    <a href="#">GIÁO KHOA - THAM KHẢO</a>
                                    <a href="#">Sách Giáo Khoa</a>
                                    <a href="#">Sách Tham Khảo</a>
                                    <a href="#">Luyện Thi THPT Quốc Gia</a>
                                    <a href="#">Mẫu Giáo</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div34" style="width: 25%">
                                    <a href="#">SÁCH HỌC NGOẠI NGỮ</a>
                                    <a href="#">Tiếng Anh</a>
                                    <a href="#">Tiếng Nhật</a>
                                    <a href="#">Tiếng Hoa</a>
                                    <a href="#">Tiếng Hàn</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div4" style="height: 30%">
                                <div class="div41" style="width: 25%">
                                    <a href="#">SÁCH MỚI</a>
                                    <a href="#">MANGA MỚI</a>
                                    <a href="#">LIGHT NOVEL MỚI</a>
                                    <a href="#">ĐAM MỸ MỚI</a>
                                </div>
                                <div class="div42" style="width: 25%">
                                    <a href="#">SÁCH BÁN CHẠY</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option2" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">FOREIGN BOOKS</div>
                            </div>
                            <div class="div2" style="height: 30%">
                                <div class="div21" style="width: 25%">
                                    <a href="#">FICTION</a>
                                    <a href="#">Contempoary Fiction</a>
                                    <a href="#">Romance</a>
                                    <a href="#">Fantasy</a>
                                    <a href="#">Classics</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 25%">
                                    <a href="#">BUISNESS & MANAGEMENT</a>
                                    <a href="#">Buisness & Management</a>
                                    <a href="#">Economics</a>
                                    <a href="#">Finance & Accounting</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 25%">
                                    <a href="#">PERSONAL DEVELOPMENT</a>
                                    <a href="#">Popular Psychology</a>
                                    <a href="#">Advice On Careers & Achieviement</a>
                                    <a href="#">Personal Finance</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div24" style="width: 25%">
                                    <a href="#">CHILDREN'S BOOKS</a>
                                    <a href="#">Picture & Activity Books</a>
                                    <a href="#">Fiction (For Kid & Teen)</a>
                                    <a href="#">Education</a>
                                    <a href="#">Non-Fiction</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div3" style="height: 30%">
                                <div class="div31" style="width: 25%">
                                    <a href="#">DICTIONARIES & LANGUAGES</a>
                                    <a href="#">ELT: Learning Material & Course</a>
                                    <a href="#">ELT: English For Specific Purpose</a>
                                    <a href="#">Dictionaries</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div32" style="width: 25%">
                                    <a href="#">OTHER LANGUAGES</a>
                                    <a href="#">Japanese Books</a>
                                    <a href="#">German Books</a>
                                    <a href="#">French Books</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div33" style="width: 25%">
                                    <a href="#">OTHER CAGETORIES</a>
                                    <a href="#">Biography</a>
                                    <a href="#">Society & Social Sciences</a>
                                    <a href="#">Science & Geography</a>
                                    <a href="#">Food & Drink</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div4" style="height: 30%">
                                <div class="div41" style="width: 25%">NEW ARRIVALS</div>
                                <div class="div42" style="width: 25%">COMING SOON</div>
                                <div class="div43" style="width: 25%">BEST SELLERS</div>
                                <div class="div44" style="width: 25%">NYT BESTSELLERS</div>
                            </div>
                        </div>
                        <div id="content-option3" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">VPP - Dụng Cụ Học Sinh</div>
                            </div>
                            <div class="div2" style="height: 45%">
                                <div class="div21" style="width: 25%">
                                    <a href="#">BÚT - VIẾT</a>
                                    <a href="#">Bút Bi - Ruột Bút Bi</a>
                                    <a href="#">Bút Gel - Bút Nước</a>
                                    <a href="#">Bút Dạ Quang</a>
                                    <a href="#">Bút Chì - Ruột Bút Chì</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 25%">
                                    <a href="#">DỤNG CỤ HỌC SINH</a>
                                    <a href="#">Gôm - Tẩy</a>
                                    <a href="#">Gọt Bút Chì</a>
                                    <a href="#">Thước</a>
                                    <a href="#">Bóp Viết - Hộp Bút</a>
                                    <a href="#">Bộ Dụng Cụ Học Tập</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 25%">
                                    <a href="#">DỤNG CỤ VĂN PHÒNG</a>
                                    <a href="#">Bìa - Kẹp Hồ Sơ</a>
                                    <a href="#">Kẹp Giấy - Kẹp Bướm</a>
                                    <a href="#">Đồ Bấm Kim - Kim Bấm - Gỡ ...</a>
                                    <a href="#">Cắm Bút - Bảng Tên</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div24" style="width: 25%">
                                    <a href="#">DỤNG CỤ VẼ</a>
                                    <a href="#">Bút Vẽ</a>
                                    <a href="#">Màu Vẽ</a>
                                    <a href="#">Khay - Cọ Vẽ</a>
                                    <a href="#">Tập Vẽ - Giấy Vẽ</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div3" style="height: 45%">
                                <div class="div31" style="width: 25%">
                                    <a href="#">SẢN PHẨM VỀ GIẤY</a>
                                    <a href="#">Tập - Vở</a>
                                    <a href="#">Sổ Tay Các Loại</a>
                                    <a href="#">Giấy Photo</a>
                                    <a href="#">Giấy Note</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div32" style="width: 25%">
                                    <a href="#">SẢN PHẨM KHÁC</a>
                                    <a href="#">Dao Rọc Giấy - Lưỡi Dao Rọc</a>
                                    <a href="#">Băng Keo - Cắt Băng Keo</a>
                                    <a href="#">Bút Xóa Nước - Xóa Kéo</a>
                                    <a href="#">Hồ Dán</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div33" style="width: 25%">
                                    <a href="#">SẢN PHẨM ĐIỆN TỬ</a>
                                    <a href="#">Máy Tính Điện Tử</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div34" style="width: 25%">
                                    <a href="#">SẢN PHẨM MỚI</a>
                                    <a href="#">SẢN PHẨM BÁN CHẠY</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option4" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">Đồ Chơi</div>
                            </div>
                            <div class="div2" style="height: 45%">
                                <div class="div21" style="width: 33.3%">
                                    <a href="#">ĐỒ CHƠI NỔI BẬT</a>
                                    <a href="#">Xếp Hình - Lắp Ghép</a>
                                    <a href="#">Đồ Chơi Giáo Dục</a>
                                    <a href="#">Đồ Chơi Điều Khiển</a>
                                    <a href="#">Board Game</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 33.3%">
                                    <a href="#">PHƯƠNG TIỆN CÁC LOẠI</a>
                                    <a href="#">Ô Tô</a>
                                    <a href="#">Máy Bay</a>
                                    <a href="#">Tàu Hỏa</a>
                                    <a href="#">Tàu Thủy</a>
                                    <a href="#">Phương Tiện Khác</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 33.3%">
                                    <a href="#">MÔ HÌNH CÁC LOẠI</a>
                                    <a href="#">Mô Hình Giấy</a>
                                    <a href="#">Mô Hình Gỗ</a>
                                    <a href="#">Mô Hình Nhân Vật</a>
                                    <a href="#">Mô Hình Động Vật</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div3" style="height: 45%">
                                <div class="div31" style="width: 33.3%">
                                    <a href="#">ĐỒ CHƠI THEO PHIM</a>
                                    <a href="#">My Little Pony</a>
                                    <a href="#">Paw Patrol</a>
                                    <a href="#">Super Wings</a>
                                    <a href="#">Chiến Thần Vô Cực - NADO</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div32" style="width: 33.3%">
                                    <a href="#">ĐỒ CHƠI KHÁC</a>
                                    <a href="#">Bột Nặn - Cát Nặn</a>
                                    <a href="#">Búp Bê</a>
                                    <a href="#">Thú Bông</a>
                                    <a href="#">Hướng Nghiệp Nhập Vai</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div33" style="width: 33.3%">
                                    <a href="#">SẢN PHẨM MỚI</a>
                                    <a href="#">SẢN PHẨM BÁN CHẠY</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option5" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">Làm Đẹp - Sức Khỏe</div>
                            </div>
                            <div class="div2" style="height: 90%">
                                <div class="div21" style="width: 100%">
                                    <a href="#">Làm Đẹp - Sức Khỏe</a>
                                    <a href="#">Khẩu Trang Các Loại</a>
                                    <a href="#">Nước Rửa Tay - Xà Phòng</a>
                                    <a href="#">Băng Keo Cá Nhân</a>
                                    <a href="#">Khăn Giấy - Giấy Ướt</a>
                                    <a href="#">Chăm Sóc Cá Nhân Khác</a>
                                    <a href="#">Sản Phẩm Làm Đẹp</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option6" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">Hành Trang Đến Trường</div>
                            </div>
                            <div class="div2" style="height: 90%">
                                <div class="div21" style="width: 25%">
                                    <a href="#">SÁCH GIÁO KHOA</a>
                                    <a href="#">Lớp 1</a>
                                    <a href="#">Lớp 2</a>
                                    <a href="#">Lớp 3</a>
                                    <a href="#">Lớp 4</a>
                                    <a href="#">Lớp 5</a>
                                    <a href="#">Lớp 6</a>
                                    <a href="#">Lớp 7</a>
                                    <a href="#">Lớp 8</a>
                                    <a href="#">Lớp 9</a>
                                    <a href="#">Lớp 10</a>
                                    <a href="#">Lớp 11</a>
                                    <a href="#">Lớp 12</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 25%">
                                    <a href="#">SÁCH GIÁO KHOA</a>
                                    <a href="#">Mẫu Giáo</a>
                                    <a href="#">Lớp 1</a>
                                    <a href="#">Lớp 2</a>
                                    <a href="#">Lớp 3</a>
                                    <a href="#">Lớp 4</a>
                                    <a href="#">Lớp 5</a>
                                    <a href="#">Lớp 6</a>
                                    <a href="#">Lớp 7</a>
                                    <a href="#">Lớp 8</a>
                                    <a href="#">Lớp 9</a>
                                    <a href="#">Lớp 10</a>
                                    <a href="#">Lớp 11</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 25%">
                                    <a href="#">LUYỆN THI THPTQG - LỚP 12</a>
                                    <a href="#">Luyện Thi Môn Toán</a>
                                    <a href="#">Luyện Thi Môn Ngữ Văn</a>
                                    <a href="#">Luyện Thi Môn Tiếng Anh</a>
                                    <a href="#">Luyện Thi Môn Vật Lý</a>
                                    <a href="#">Luyện Thi Môn Hóa Học</a>
                                    <a href="#">Luyện Thi Môn Sinh Học</a>
                                    <a href="#">Luyện Thi Môn Địa Lý</a>
                                    <a href="#">Luyện Thi Môn Lịch Sử</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div24" style="width: 25%">
                                    <a href="#">ĐỒ NGHỀ ĐẾN TRƯỜNG</a>
                                    <a href="#">Cặp, Ba Lô</a>
                                    <a href="#">Máy Tính</a>
                                    <a href="#">Bút Các Loại</a>
                                    <a href="#">Bóp Viết - Hộp Bút</a>
                                    <a href="#">Tập Vở</a>
                                    <a href="#">Bao Tập - Bao Sách</a>
                                    <a href="#">Mực</a>
                                    <a href="#">Gôm - Tẩy</a>
                                    <a href="#">Gọt Bút Chì</a>
                                    <a href="#">Compa</a>
                                    <a href="#">Bảng Viết - Bông Lau Bảng</a>
                                    <a href="#">Phấn - Hộp Đựng Phấn</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option7" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">VPP - DCHS Theo Thương Hiệu</div>
                            </div>
                            <div class="div2" style="height: 90%">
                                <div class="div21" style="width: 100%">
                                    <a href="#">Thiên Long</a>
                                    <a href="#">Thương hiệu Hàn Quốc - Morning Glory</a>
                                    <a href="#">Thương hiệu Hàn Quốc - Kyobo</a>
                                    <a href="#">Thương hiệu Nhật - Kinokuniya</a>
                                    <a href="#">Thương hiệu Nhật - Artline</a>
                                    <a href="#">Thương hiệu Nhật - Marvy</a>
                                    <a href="#">Thương hiệu Tây Ban Nha - Milan</a>
                                    <a href="#">Thương hiệu Tây Ban Nha - Apli</a>
                                    <a href="#">Thương hiệu Anh Quốc - Helix</a>
                                    <a href="#">Thương hiệu Đức - Faber-Castell</a>
                                    <a href="#">Thương hiệu Đức - Stabilo</a>
                                    <a href="#">Thương hiệu Pháp - Maped</a>
                                    <a href="#">Thương hiệu Indonesia - Bantex</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option8" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">Đồ Chơi Theo Thương Hiệu</div>
                            </div>
                            <div class="div2" style="height: 90%">
                                <div class="div21" style="width: 100%">
                                    <a href="#">Lego</a>
                                    <a href="#">tiNiToy</a>
                                    <a href="#">Lắp Ráp DUKA</a>
                                    <a href="#">Lắp Ráp Sluban</a>
                                    <a href="#">Lắp Ráp LaQ</a>
                                    <a href="#">Mô Hình Gỗ DIY - Robotime</a>
                                    <a href="#">Đồ Chơi VBCare</a>
                                    <a href="#">Hot Wheels</a>
                                    <a href="#">Play-Doh</a>
                                    <a href="#">Barbie</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                        <div id="content-option9" class="content-option" style="display: none">
                            <div class="div1">
                                <div class="div11">Bách Hóa Online - Lưu Niệm</div>
                            </div>
                            <div class="div2" style="height: 45%">
                                <div class="div21" style="width: 33.3%">
                                    <a href="#">ĐỒ DÙNG CÁ NHÂN</a>
                                    <a href="#">Túi - Ví Thời Trang</a>
                                    <a href="#">Đồng Hồ</a>
                                    <a href="#">Phụ Kiện Du Lịch</a>
                                    <a href="#">Phụ Kiện Tóc</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div22" style="width: 33.3%">
                                    <a href="#">ĐỒ ĐIỆN GIA DỤNG</a>
                                    <a href="#">Đèn Bàn</a>
                                    <a href="#">Đèn Ngủ</a>
                                    <a href="#">Đèn Pin</a>
                                    <a href="#">Pin & Dụng Cụ Sạc Pin</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div23" style="width: 33.3%">
                                    <a href="#">NHÀ CỬA - ĐỜI SỐNG</a>
                                    <a href="#">Ly, Cốc, Bình Nước</a>
                                    <a href="#">Hộp Đựng Đồ Cá Nhân</a>
                                    <a href="#">Trang Trí Nhà Cửa</a>
                                    <a href="#">Sửa Chữa Nhà Cửa</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="div3" style="height: 45%">
                                <div class="div31" style="width: 33.3%">
                                    <a href="#">LƯU NIỆM</a>
                                    <a href="#">Gương - Lược</a>
                                    <a href="#">Khung Hình</a>
                                    <a href="#">Tượng</a>
                                    <a href="#">Quà Tặng Trang Trí Khác</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div32" style="width: 33.3%">
                                    <a href="#">SẢM PHẨM KHÁC</a>
                                    <a href="#">Thực Phẩm</a>
                                    <a href="#">Thiết Bị Số - Phụ Kiện Số</a>
                                    <a href="#">Quạt Các Loại</a>
                                    <a href="#" style="color: #0080ff">Xem tất cả</a>
                                </div>
                                <div class="div33" style="width: 33.3%">
                                    <a href="#">SẢN PHẨM MỚI</a>
                                    <a href="#">SẢN PHẨM BÁN CHẠY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header3">
                <form action="{{ url('shop/timkiemsach') }}" method="GET">
                    <div class="search-container">
                        <input name="search" type="text" placeholder="Tìm kiếm..." style="border: none" />
                        <button type="submit">
                            <img src="../../front/HinhAnh/index/search.png" alt="Tìm kiếm" />
                        </button>
                    </div>
                </form>
            </div>
            <div class="header4">
                <div class="container">
                    <div class="box1">
                        <img src="../../front/HinhAnh/index/icone-de-cloche-grise.png" alt="Icon 1" />
                        <p>Thông báo</p>
                        <div class="hover-content1">Thông báo</div>
                    </div>
                    <div class="box2">
                        <img src="../../front/HinhAnh/index/cart-73-xxl.png" alt="Icon 2" />
                        <p style="color:black; text-decoration:none"><a href="/cart" style="color:black; text-decoration:none">Giỏ Hàng ({{ Cart::count() }})</a></p>
                    </div>
                    <div class="box3">
                        <img src="../../front/HinhAnh/index/icons8-user-64.png" alt="Icon 3" />
                        <p>Tài Khoản</p>
                        <div class="hover-content3">
                            <button id="btn1"><a style="text-decoration: none; color:white" href="/account/login/">Đăng nhập</a></button>
                            <button id="btn2"><a style="text-decoration: none; color:#c92123" href="/account/register/">Đăng ký</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div id="DangNhap">
    <div id="body-content">
      <div id="login">
        <form action="" method="post">
          @csrf
          <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
          <input type="text" id="email" name="name" placeholder="Name" />
          <input type="text" id="email" name="email" placeholder="Email" />
          <input type="password" id="matkhau" name="password" placeholder="Mật khẩu" />
          <input type="password" id="xacnhanmatkhau" name="password_confirmation" placeholder="Xác nhận mật khẩu" />


          <input id="btnlogin" type="submit" value="Đăng ký" />
          <a href="./login">
            <p>Đã có tài khoản? Đăng Nhập Ngay</p>
          </a>

          <span style="float: left">Hoặc đăng nhập bằng:</span><br />
          <img src="../../front/HinhAnh/DangNhap/google_signin_dark.png" style="
              width: 138px;
              height: 30px;
              float: left;
              margin-top: 10px;
              margin-left: 20px;
            " />
          <img src="../../front/HinhAnh/DangNhap/facebook_signin_dark.png" style="width: 185px; height: 30px; margin-top: 10px" />
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="tygh_footer">
      <div id="news_letter">
        <label>ĐĂNG KÝ NHẬN EMAIL
          <span>Đăng ký nhận thông tin sách mới, sách bán</span></label>
        <div id="input_group">
          <input type="text" id="Email_Cua_Ban" name="Email_Cua_Ban" placeholder="Nhập email của bạn" />

          <input type="button" id="Dang_Ky_Ngay" name="fname" value="ĐĂNG KÝ NGAY" />
        </div>
      </div>
      <div id="row_foot">
        <div id="span5_footer">
          <div id="span4">
            <span>VỀ CÔNG TY</span><br />
            <a href="#">Giới thiệu công ty</a>
            <a href="#">Tuyển dụng</a>
            <a href="#">Góc báo chí</a>
            <a href="#">Chương trình đại lý</a>
            <a href="#">Chính sách bảo mật</a>
            <a href="#">Chính sách đổi trả</a>
          </div>
          <div id="span4">
            <span>TRỢ GIÚP</span><br />
            <a href="#">Quy định sử dụng</a>
            <a href="#">Hướng dẫn mua hàng</a>
            <a href="#">Phương thức thanh toán</a>
            <a href="#">Phương thức vận chuyển</a>
            <a href="#">Các câu hỏi thường gặp</a>
            <a href="#">Ứng dụng đọc ebook</a>
          </div>
          <div id="span4">
            <span style="width: 105px">TIN TỨC SÁCH</span><br />
            <a href="#">Tin tức</a>
            <a href="#">Chân dung</a>
            <a href="#">Điểm sách</a>
            <a href="#">Phê bình</a>
          </div>
          <div id="Tai_Ung_Dung">
            <span>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</span>
            <img src="../../front/HinhAnh/index1/icon-appstore.png" />
            <img src="../../front/HinhAnh/index1/icon-googleplay.png" style="margin-left: 10px" />
          </div>
        </div>
        <div id="span7_footer">
          <div class="span8">
            <span>CHẤP NHẬN THANH TOÁN</span>
            <img src="../../front/HinhAnh/index1/visa.jpg" />
            <img src="../../front/HinhAnh/index1/master_card.jpg" />
            <img src="../../front/HinhAnh/index1/jcb.jpg" />
            <img src="../../front/HinhAnh/index1/atm.jpg" />
            <img src="../../front/HinhAnh/index1/cod.jpg" />
            <img src="../../front/HinhAnh/index1/payoo.jpg" />
            <span style="margin-top: 10px">THANH TOÁN AN TOÀN</span>
            <img src="../../front/HinhAnh/index1/verify_visa.jpg" />
            <img src="../../front/HinhAnh/index1/mastercard_securecode.jpg" />
            <img src="../../front/HinhAnh/index1/onepay.jpg" />
          </div>
          <div class="span8">
            <span>ĐỐI TÁC VẬN CHUYỂN</span>
            <img src="../../front/HinhAnh/index/fahasa-logo.png" style="width: 184px; height: 44px" />
            <img src="../../front/HinhAnh/index1/vn-post.jpg" />
            <img src="../../front/HinhAnh/index1/dhl.jpg" style="width: 184px; height: 52px" />
          </div>
          <div class="span8">
            <span>ĐỐI TÁC BÁN HÀNG</span>
            <img src="../../front/HinhAnh/index1/lazada.jpg" />
            <img src="../../front/HinhAnh/index1/shopee.jpg" />
            <img src="../../front/HinhAnh/index1/amazon.jpg" />
          </div>
        </div>
      </div>

      <div id="copyright">
        <div id="row_fuild">
          <img src="../../front/HinhAnh/index1/logo_so_cong_thuong.png" style="float: left" />
          <div id="span13">
            <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM</p>
            <span>Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú,
              Hồ Chí Minh</span><br />
            <span>MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày
              10/03/2011</span><br />
            <span>Tel: 028.73008182 - Fax: 028.39733234 - Email:
              <a href="#">hotro@vinabook.com</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // JavaScript to change content when hovering over options
    document
      .querySelector(".left-div a:nth-child(2)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "block";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });

    document
      .querySelector(".left-div a:nth-child(3)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "block";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });

    document
      .querySelector(".left-div a:nth-child(4)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "block";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(5)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "block";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(6)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "block";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(7)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "block";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(8)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "block";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(9)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "block";
        document.getElementById("content-option9").style.display = "none";
      });
    document
      .querySelector(".left-div a:nth-child(10)")
      .addEventListener("mouseover", function() {
        document.getElementById("content-option1").style.display = "none";
        document.getElementById("content-option2").style.display = "none";
        document.getElementById("content-option3").style.display = "none";
        document.getElementById("content-option4").style.display = "none";
        document.getElementById("content-option5").style.display = "none";
        document.getElementById("content-option6").style.display = "none";
        document.getElementById("content-option7").style.display = "none";
        document.getElementById("content-option8").style.display = "none";
        document.getElementById("content-option9").style.display = "block";
      });
    // Lắng nghe sự kiện khi chuột rời khỏi hover-content
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const minusButton = document.querySelector(".minus");
      const plusButton = document.querySelector(".plus");
      const quantityDisplay = document.querySelector(".quantity");

      minusButton.addEventListener("click", function() {
        let currentQuantity = parseInt(quantityDisplay.textContent);
        if (currentQuantity > 1) {
          quantityDisplay.textContent = currentQuantity - 1;
        }
      });

      plusButton.addEventListener("click", function() {
        let currentQuantity = parseInt(quantityDisplay.textContent);
        quantityDisplay.textContent = currentQuantity + 1;
      });
    });
  </script>
</body>

</html>