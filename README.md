Các bước sau khi lấy project laravel trên github về :

- chạy lệnh 
 + composer update
- tạo 1 file  .env
  => copy tất cả file .env.example sang file .env vừa mới tạo
 => đổi tên database

-chay tiếp 2 lênh này 
+php artisan key:generate
+php artisan migrate


 ====== sau khi chỉnh sửa project chạy các lệnh để project lên lại github

git add .
git status
git commit -m "b17-b19+b26 làm phan thuong hieu san pham "
git pull origin master
git push  origin master
