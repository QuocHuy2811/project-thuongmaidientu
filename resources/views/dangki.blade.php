@extends('layouts.app')

@section('title', 'Product Page - uStora Demo')
@section('navTitle','Đăng ký')
@section('content')
<style>
       .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
            background-color: #f5f5f5;
            padding: 20px 0;
        }
        .register-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        .register-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .register-form .form-group {
            margin-bottom: 15px;
        }
        .register-form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: normal;
        }
        .register-form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .register-form input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }
        .register-form .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
        .register-form .success1 {
            color: green;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .register-form button:hover {
            background-color: #0056b3;
        }
        .register-form .radio-group {
            display: flex;
            gap: 20px;
        }
        .register-form .radio-group label {
            display: inline-flex;
            align-items: center;
            margin-bottom: 0;
        }
        .register-form .radio-group input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }
    </style>
    <div class="register-container">
        <div class="register-form">
            <h2>Đăng Ký Khách Hàng</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Họ và Tên</label>
                    <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Nhập lại Mật khẩu</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <label for="dob">Ngày tháng năm sinh</label>
                    <input type="date" id="dob" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label>Giới Tính</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="Nam" required> Nam</label>
                        <label><input type="radio" name="gender" value="Nữ"> Nữ</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại</label>
                    <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Địa Chỉ</label>
                    <input type="text" id="address" name="address" value="<?php echo isset($address) ? $address : ''; ?>" required>
                </div>
                <button type="submit">Đăng Ký</button>
            </form>
        </div>
    </div>
@endsection