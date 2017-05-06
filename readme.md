# App demo Elasticsearch

App demo sự kết nối của ứng dụng với 2 database là mysql và elasticsearch.

Mysql là database chính để lưu trữ, database elasticsearch được dùng để tìm kiếm dữ liệu.

Yêu cầu: XAMPP, Elasticsearch

Elasticsearch: Khởi động Elasticsearch (chạy bin/elasticsearch, hoặc bin\elasticsearch.bat).

Xampp: khởi động localhost và mysql.

Tạo sẵn một cơ sở dữ liệu tên là demo_es trên mysql

Hướng dẫn cài đặt

Download hoặc clone git.

App có thể yêu cầu cấp quyền write trong thư mục storage và bootstrap/cache. Nếu app được chạy bằng Homestead virtual machine thì quyền write này đã được tự động cấp.

Ngoài ra, để app chạy ổn định, ta cần phải config lại cache: php artisan config:cache

Mở terminal (hoặc cmd cho Window), chạy lệnh php artisan migrate

Mở trình duyệt => localhost/testEs/public

