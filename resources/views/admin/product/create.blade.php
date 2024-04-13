@extends('admin.layout.master')
@section('title','Product')
@section('body')

<!-- Main -->
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Product
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" action="admin/product" enctype="multipart/form-data">

                        @csrf
                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Tên sách</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="TenSach" id="name" placeholder="Tên sách" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Thể loại sách</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaTheLoaiSach" id="product_category_id" class="form-control">
                                    <option value="">Thể loại sách</option>
                                    @foreach ($theloaisach as $tls)
                                    <option value={{$tls->MaTheLoaiSach}}>
                                        {{$tls->TheLoaiSach}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Tác giả</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaTacGia" id="brand_id" class="form-control">
                                    <option value="">Tác giả</option>
                                    @foreach ($tacgia as $tg)
                                    <option value={{$tg->MaTacGia}}>
                                        {{$tg->TenTacGia}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà xuất bản</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaNhaXuatBan" id="brand_id" class="form-control">
                                    <option value="">Nhà xuất bản</option>
                                    @foreach ($nhaxuatban as $nxb)
                                    <option value={{$nxb->MaNhaXuatBan}}>
                                        {{$nxb->TenNhaXuatBan}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="SoLuong" id="qty" placeholder="Số lượng" type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Ghi chú</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea class="form-control" name="GhiChu" id="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="price" class="col-md-3 text-md-right col-form-label">Giá sách</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="GiaSach" id="price" placeholder="Price" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà cung cấp</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="MaNhaCungCap" id="brand_id" class="form-control">
                                    <option value="">Nhà cung cấp</option>
                                    @foreach ($nhacungcap as $ncc)
                                    <option value={{$ncc->MaNhaCungCap}}>
                                        {{$ncc->TenNhaCungCap}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="#" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>Cancel</span>
                                </a>

                                <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-download fa-w-20"></i>
                                    </span>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection