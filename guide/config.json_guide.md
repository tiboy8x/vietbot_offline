Hướng dẫn cách Edit file Json

### STEP1. Chú ý

File config.json sử dụng format json, format này cần vị trí chuẩn của các ký tự ' " ' hay ' ,' hoặc '{' '}' và ' [' ' ]'

### STEP1. Mở File bằng WinSCP và Notepad ++

1.1. Mở WinSCP, tạo kết nối tới Loa Vietbot

1.2. Tại cửa sổ bên phải của WinSCP, vào đường dẫn /home/pi/vietbot_offline/src

1.3. Bấm chuột phải vào file config.json, chọn mở bằng Notepad ++

### STEP2. Edit File config.json bằng Notepad ++

2.1. Giá trị amixer_id
Đây là giá trị của Master Speaker khi dùng lệnh amixer, trong phần lớn các trường hợp thì nó là 0, với Mic2HAT nó là 2, cách xác định nó bằng lệnh

```sh
amixer
```
2.2. Giá trị LED

2.2.1. led_type, chọn 1 trong các giá trị sau:

None: Ko có mạch LED
'ReSpeaker 2-Mics Pi HAT': Nếu dùng Mic2HAT Respeaker hoặc Mic2HAT WM8960
'ReSpeaker 4-Mics Pi HAT': Nếu dùng Mic4HAT Respeaker
'APA102: Nếu dùng led APA102
'ReSpeaker Mic Array v2.0': Nếu dùng mạch Respeaker USB
'WS2812': Nếu dùng mạch LED WS2812
'Vietbot AIO Board V2.0': Nếu dùng mạch Vietbot AIO V2.0

2.2.2. hotword engine key
Nhập key đăng ký trên trang PicoVoice AI

### STEP3. Kiểm tra file Json

2.1. Truy cập trang Json Validator  https://jsonlint.com/

2.2. Tại Notepad ++, Bấm Ctrl + A, Ctrl + C để Copy toàn bộ nội dung đã soạn của file config.json

2.3. Paste vào cửa sổ của trang Web JsonLint ở trên

2.4. Ấn nút Validate 

2.5. Tiến hành sửa lỗi trực tiếp trên cửa sổ JsonLint, nếu có thông báo lỗi, cho đến khi hết lỗi và báo valid JSON

2.6. Tại cửa sổ JsonLink ++, Bấm Ctrl + A, Ctrl + C để Copy toàn bộ nội dung đã sửa lại (Nếu cần)

2.7. Tại Notepad ++, bấm Ctrl + A, Ctrl + V để paste lại toàn bộ nội dung đã sửa lại

2.8. Ấn nút Save để hoàn tất

