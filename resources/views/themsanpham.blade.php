@extends('layouts.admin')
@section('title', 'Thêm sản phẩm')
@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Trang Thêm Sản Phẩm</h1>
        <div class="row mt-4" style="margin-left: 15px;">
            <div class="col-md-3">
                <label for="maSanPham" class="form-label">Mã Sản Phẩm</label>
                <input type="text" class="form-control" id="maSanPham">
            </div>
            <div class="col-md-3">
                <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="tenSanPham">
            </div>
            <div class="col-md-3">
                <label for="giaSanPham" class="form-label">Giá Sản Phẩm</label>
                <input type="text" class="form-control" id="giaSanPham">
            </div>
            <div class="col-md-3">
                <label for="moTaSanPham" class="form-label">Mô Tả</label>
                <input type="text" class="form-control" id="moTaSanPham">
            </div>
        </div>
        <div class="row mt-4" style="margin-left: 15px;">
            <div class="col-md-3">
                <label for="hinhAnh" class="form-label">Ảnh Sản Phẩm</label>
                <input type="file" class="form-control" id="hinhAnh" name="hinhAnh" accept="image/*">
            </div>
            <div class="col-md-3">
                <label for="soLuongTon" class="form-label">Số Lượng Tồn Kho</label>
                <input type="number" class="form-control" id="soLuongTon">
            </div>
            <div class="col-md-3">
                <label for="trangThai" class="form-label">Trạng Thái Sản Phẩm</label>
                <select class="form-select" id="trangThai" name="trangThai">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                     <option value="out_of_stock">Out of Stock</option> <!-- 64, 128, 256, 512, 1tb, 2tb -->
                </select>
            </div>
            <div class="col-md-3">
                <label for="mauSanPham" class="form-label">Màu Sản Phẩm</label>
                <input type="text" class="form-control" id="mauSanPham">
            </div>
        </div>
        <div class="row mt-4" style="margin-left: 15px;">
            <div class="col-md-3">
                <label for="dungLuong" class="form-label">Dung Lượng</label>
                <select class="form-select" id="dungLuong" name="dungLuong">
                    <option value="64GB">64GB</option>
                    <option value="128GB">128GB</option>
                    <option value="256GB">256GB</option>
                    <option value="512GB">512GB</option>
                    <option value="1TB">1TB</option>
                    <option value="2TB">2TB</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="ram" class="form-label">Ram</label>
                <input type="text" class="form-control" id="ram">
            </div>
            <div class="col-md-3">
                <label for="chip" class="form-label">Chip</label>
                <input type="text" class="form-control" id="chip">
            </div>
            <div class="col-md-3">
                <label for="hz" class="form-label">Tần Số Hz</label>
                <input type="text" class="form-control" id="hz">
            </div>
        </div>
        <div class="row mt-4" style="margin-left: 15px;">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button style=" min-width: 490px; min-height: 30px;" type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
            </div>
        </div>
    </div>
@endsection