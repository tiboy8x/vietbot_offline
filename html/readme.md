# Giao diện của vietbot_offline

1. Cài đặt
1.1. Download thư mục html từ git về thư mục /home/pi bằng WinSCP

1.1. Xóa toàn bộ file cũ trong thư mục /var/www bằng lệnh

```sh
sudo rm -rf /var/www/html/*.*

```

1.2. Copy vào thư mục /var/www bằng lệnh

```sh
sudo cp /home/pi/html/*.* /var/www/html/

```
1.3. Set quyền cho toàn bộ thư mục html bằng lệnh:

```sh
sudo chmod 0777 /var/www/html

```
và

```sh
sudo chmod 0777 /var/www/html/*.*

```
1.4. Set quyền cho toàn bộ thư mục vietbot_offline/src bằng lệnh
```sh
sudo chmod 0777 /home/pi/vietbot_offline/src

```
và

```sh
sudo chmod 0777 /home/pi/vietbot_offline/src/*.*

```

2. Sử dụng

2.1. Truy cập trang Web

Truy cập vào trang Web với địa chỉ là IP của loa vietbot

2.2. Đến Tab 3, đăng nhập với 

```sh
user =pi
pass: vietbot

```
2.3. Có thể sử dụng giao diện Buil-in cho vietbot từ thời điểm này
