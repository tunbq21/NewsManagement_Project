<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        td {
          max-width: 100px; /* Đặt giới hạn độ rộng của ô */
          overflow: hidden; /* Ẩn phần nội dung vượt quá giới hạn */
          text-overflow: ellipsis; /* Hiển thị dấu ba chấm (...) nếu nội dung bị ẩn */
          white-space: nowrap; /* Ngăn chặn quấn dòng nếu nội dung quá dài */
        }
      </style>
</head>
<body>
    @yield('newsManagement')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>