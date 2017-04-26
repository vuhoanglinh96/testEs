# App demo Elasticsearch
Yêu cầu: XAMPP, Elasticsearch
Elasticsearch: Khởi động Elasticsearch (chạy bin/elasticsearch, hoặc bin\elasticsearch.bat).
Xampp: khởi động localhost và mysql.
Tạo sẵn một cơ sở dữ liệu tên là shakespeare_test trên mysql

Hướng dẫn cài đặt

Download hoặc clone git.
App có thể yêu cầu cấp quyền write trong thư mục storage và bootstrap/cache. Nếu app được chạy bằng Homestead virtual machine thì quyền write này đã được tử động cấp.
Ngoài ra, để app chạy ổn đinh, ta cần phải config lại cache: php artisan config:cache


1. Demo app with sample data
  Import bảng shakespeare ( https://drive.google.com/open?id=0B-rJj0ngndSuVnZVVkd3UkNkX3c ) vào shakespeare_test database
  Đánh index cho bảng shakespeare:
  - Mở terminal (hoặc cmd cho Window), chạy lệnh php artisan tinker
  - Chạy tiếp lệnh App\Shakespeare::addAllToIndex();
  - Mở trình duyệt => localhost/testEs/public


2. Demo app with no sample data
  Mở terminal (hoặc cmd cho Window), chạy lệnh php artisan migrate
  Mở trình duyệt => localhost/testEs/public/ItemSearch

