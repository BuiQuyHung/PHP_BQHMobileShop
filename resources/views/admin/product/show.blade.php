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
                <div class="card-body display_data">

                    <div class="position-relative row form-group">
                        <label for="" class="col-md-3 text-md-right col-form-label">Images</label>
                        <div class="col-md-9 col-xl-8">
                            <ul class="text-nowrap overflow-auto" id="images">

                                <li class="d-inline-block mr-1" style="position: relative;">
                                    <img style="height: 150px;" src="../../front/TGDD_Picture/product-1.webp" alt="Image">

                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Product Images</label>
                        <div class="col-md-9 col-xl-8">
                            <p><a href="#">Manage images</a></p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Product Details</label>
                        <div class="col-md-9 col-xl-8">
                            <p><a href="#">Manage details</a></p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Nhà cung cấp</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$sanpham->NhaCungCap->TenNhaCungCap}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Tên sản phẩm</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$sanpham->TenSP}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="price" class="col-md-3 text-md-right col-form-label">Giá tiền</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$sanpham->giatien}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="qty" class="col-md-3 text-md-right col-form-label">Số lượng</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$sanpham->SoLuong}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Ghi chú</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$sanpham->GhiChu}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="featured" class="col-md-3 text-md-right col-form-label">Nổi bật</label>
                        <div class="col-md-9 col-xl-8">
                            <p>TOP</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Mô tả</label>
                        <div class="col-md-9 col-xl-8">
                            <p>Điện thoại di động thông minh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->

@endsection