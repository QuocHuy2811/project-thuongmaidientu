<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('dangnhap'); 
    }

    public function login(Request $request)
    {
        try {
            // Xác thực dữ liệu form
            $request->validate([
                'exampleInputEmail1' => 'required|email',
                'exampleInputPassword' => 'required|min:8',
            ], [
                'exampleInputEmail1.required' => 'Vui lòng nhập email.',
                'exampleInputEmail1.email' => 'Email không hợp lệ.',
                'exampleInputPassword.required' => 'Vui lòng nhập mật khẩu.',
                'exampleInputPassword.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            ]);

            // Thông tin đăng nhập cứng
            $validEmail = 'admin@gmail.com';
            $validPassword = '12345678';

            // Kiểm tra thông tin đăng nhập
            if ($request->exampleInputEmail1 === $validEmail && $request->exampleInputPassword === $validPassword) {
                // Lưu thông tin người dùng vào session
                Session::put('user', ['email' => $validEmail]);
                return response()->json(['success' => true], 200);
            }

            // Ném lỗi nếu thông tin đăng nhập sai
            return response()->json([
                'message' => 'Email hoặc mật khẩu không đúng.',
            ], 422);
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),],422);
            }catch (\Exception $e) {
            return response()->json([
                'message' => 'Đã có lỗi xảy ra: ' . $e->getMessage(),
            ], 500);
        }
    }
}