@extends('layouts.app')

@section('title', 'Liên hệ')
@section('navTitle', 'Liên hệ')
@section('content')
<style>
    .contact-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
        background-color: #f5f5f5;
        padding: 20px 0;
    }
    .contact-form {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 450px;
    }
    .contact-form h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    .contact-form .form-group {
        margin-bottom: 15px;
    }
    .contact-form label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: normal;
    }
    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .contact-form .error {
        color: red;
        font-size: 14px;
        margin-top: 10px;
    }
    .contact-form .success {
        color: green;
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
    }
    .contact-form button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .contact-form button:hover {
        background-color: #0056b3;
    }
</style>
<div class="contact-container">
    <div class="contact-form">
        <h2>Liên Hệ Với Chúng Tôi</h2>
        <form method="POST" action="/contact">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" id="exampleInputEmail1" name="exampleInputEmail1" value="<?php echo isset($email) ? $email : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputSDT">Số Điện Thoại</label>
                <input type="text" id="exampleInputSDT" name="exampleInputSDT" value="<?php echo isset($sdt) ? $sdt : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputTieuDe">Tiêu đề</label>
                <input type="text" id="exampleInputTieuDe" name="exampleInputTieuDe" value="<?php echo isset($tieuDe) ? $tieuDe : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputNoidung">Nội dung</label>
                <textarea id="exampleInputNoidung" name="exampleInputNoidung"><?php echo isset($noidung) ? $noidung : ''; ?></textarea>
            </div>
            <button type="submit">Gửi Liên Hệ</button>
        </form>
    </div>
</div>
@endsection