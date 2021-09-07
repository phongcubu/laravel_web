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

====== lệnh clone chay và cục xúc để đưa dự án về máy ===========
+ tạo 1 thư mục 
+ chạy lệnh git init
+ git remote add origin "link dự án "
+  git status : check xem mình đã ở nhánh master chưa . nếu chạy ra như vầy (On branch master
) là mình đang trong nhánh master
+git pull origin master : dự án sẽ đc lấy về máy rồi =))
 +Rồi mỗi lần trước khi bắt tay vào làm ae hãy chay : git pull origin master  (để xem ae khác có thêm gì về project không nhé rồi để mà clone nó về máy mình!)
 



