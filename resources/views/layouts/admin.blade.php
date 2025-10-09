<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Admin Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Font Awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        a{
            text-decoration: none;
            color: grey;
        }
        .a-menu i:hover{
            color: #17a78b;
        }
        .a-seach i:hover{
            color: #17a78b;
        }
        .navbar {
            color: grey;
            border-top: 1px solid gainsboro; /* Viền trên */
            border-bottom: 1px solid gainsboro; /* Viền dưới */
            min-height: 35px; /* Chiều cao tối thiểu */
            display: flex; /* Sử dụng flexbox */
            align-items: center; /* Căn giữa nội dung theo chiều dọc */
        }
        .navbar .col-md-2 {
            font-size: 20px;
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            justify-content: center; /* Căn giữa theo chiều ngang */
            height: 100%; /* Chiếm toàn bộ chiều cao của navbar */
            border-right: 1px solid gainsboro; /* Viền bên phải */
        }
        .navbar .a-menu{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .navbar .a-seach{
            display: flex;
            align-items: center;
            justify-content: start;
            height: 100%;
        }
        .navbar .col-md-7{
            display: flex; /* Chuyển thành flex container */
            justify-content: flex-end; /* Đẩy các icon sang phải */
            align-items: center; /* Căn giữa theo chiều dọc */
            height: 100%; /* Chiếm toàn bộ chiều cao của navbar */
            gap: 10px; /* Khoảng cách giữa các icon */
        }
        .navbar a {
            color: grey;
            text-decoration: none;
        }
        a:hover{
            color: #17a78b;
        }
        
        .row {
            /*min-height: 100vh;  Đảm bảo row chiếm toàn bộ chiều cao màn hình */
            display: flex;
            flex-wrap: wrap;
        }
        .col-md-2.bg-body-tertiary {
            min-height: 100%; /* Giãn chiều cao theo container cha */
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Căn các liên kết từ trên xuống */
            padding: 10px 0; /* Thêm padding để tránh dính viền */
        }
        .col-md-2.bg-body-tertiary .d-flex {
            margin-top: 10px; /* Giữ nguyên margin-top của các liên kết */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="col-md-2 d-flex">
            <p style="font-size: 25px;">Adminator</p>
        </div>
        <div class="col-md-1 a-menu">
            <a style="color: grey;" href="#"><i class="fas fa-bars"></i></a> <!-- Icon menu -->
        </div>
        <div class="col-md-1 a-seach">
            <a style="color: grey;" href="#"><i class="fas fa-search"></i></a> <!-- Icon tìm kiếm -->
        </div>
        <div class="col-md-7 gap-4">
            <a href="#"><i class="fas fa-bell"></i></a> 
            <a href="#"><i class="fas fa-envelope"></i></a> 
            <a href="#"><i class="fas fa-user"></i></a> 
        </div>
    </nav>
    <div class="row">
        <div class="col-md-1 navbar navbar-expand-lg bg-body-tertiary" style="max-width: 60px;"></div>
        <div class="col-md-2 bg-body-tertiary" style="max-width: 208px; min-height:100vh;">
            <div class="d-flex mt-4">
                <a href="/adminhome"><i class="fas fa-home" style="margin-right: 14px; color: mediumturquoise"></i>Dashboard</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-envelope" style="margin-right: 14px; color:mediumpurple"></i>Email</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-edit" style="margin-right: 14px; color:mediumturquoise"></i>Compose</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-calendar" style="margin-right: 14px; color:cadetblue"></i>Calendar</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-comments" style="margin-right: 14px; color: grey"></i>Chat</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-chart-bar" style="margin-right: 14px; color:mediumpurple"></i>Charts</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-list" style="margin-right: 14px; color:mediumspringgreen"></i>Forms</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-layer-group" style="margin-right: 14px; color:mediumvioletred"></i>UI Elements</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-table" style="margin-right: 14px; color:gold"></i>Table</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-map" style="margin-right: 14px; color:mediumpurple"></i>Maps</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-copy" style="margin-right: 14px; color:yellowgreen"></i>Pages</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="#"><i class="fas fa-stream" style="margin-right: 14px; color:mediumpurple"></i>Mulitiple Levels</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="/blankpageadmin"><i class="fas fa-file" style="margin-right: 14px; color:grey;"></i>Blank Page</a> 
            </div>
            <div class="d-flex mt-3">
                <a href="/themsanpham"><i class="fas fa-list" style="margin-right: 14px; color:mediumpurple;"></i>Add Product</a> 
            </div>
        </div>
        <div class="col-md-9">@yield('content')</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>