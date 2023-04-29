
Vietbot hỗ trợ các hotword của Porcupine cho Raspberry

### STEP1. Download hotword file

1.1. Download Hotword Picovoice tiếng Anh

1.1.1. Truy cập trang Web https://github.com/Picovoice/porcupine/tree/master/resources/keyword_files/raspberry-pi 

1.1.2. Ấn vào link file bất kỳ: Ví dụ  alexa_raspberry-pi.ppn

1.1.3. Ấn vào mục Download ở bên phải, trình duyệt sẽ tự Download xuống

1.1.4. Truy nhập trang Web Picovoice https://console.picovoice.ai/

1.2. Download Hotword Picovoice tiếng Việt

1.2.1. Truy cập trang Web https://github.com/Picovoice/porcupine/tree/master/resources/keyword_files_vn/raspberry-pi

1.2.2. Ấn vào link file bất kỳ: Ví dụ  chao_chi_raspberry-pi.ppn

1.2.3. Ấn vào mục Download ở bên phải, trình duyệt sẽ tự Download xuống

### STEP2. Lấy Access Token

2.1. Truy nhập trang Web Picovoice https://console.picovoice.ai/

2.2. Đăng ký tài khoản

2.3. Lấy Access Token và lưu lại

### STEP3. Copy file

2.1. Copy hotword tiếng Anh
Copy các file .ppn tiếng Anh từ PC sang Pi bằng WinSCP vào đúng thư mục vietbot_offline/src/hotword/eng

2.2. Copy hotword tiếng Việt
Copy các file .ppn tiếng Anh từ PC sang Pi bằng WinSCP vào đúng thư mục vietbot_offline/src/hotword/vi


### STEP3. Khai báo cho hotword mới

3.1. Truy cập vào file config.json

```sh

cd /home/pi/vietbot_offline/src

```

3.2. Mở file create_config.py bằng WinSCP và Notepad ++

Khai báo giá trị cho file_name là tên file hotword đã lưu
Khai báo giá trị cho lang là tên thư mục con trong thư mục hotword đã lưu
Hotword nào muốn kích hoạt thì để giá trị của trường active là True
Chỉ được kích hoạt hotword có cùng 1 loại ngôn ngữ 

```sh

	"hotword": [{
		"type": "porcupine",
		"value": null,
		"file_name": "hey siri_raspberry-pi.ppn",
		"lang": "eng",
		"sensitive": 0.4,
		"active": false
	}, {
		"type": "porcupine",
		"value": null,
		"lang": "vi",
		"file_name": "chao_chi_raspberry-pi.ppn",
		"sensitive": 0.4,
		"active": true
	}, {
		"type": "custom",
		"value": "mai ca \u01a1i",
		"lang": "vi",
		"file_name": null,
		"sensitive": 0.4,
		"active": false
	}],

```
3.3. Save lại


### STEP4. Đổi thư viện

4.1 Download thư viện cho hotword tiếng Việt, theo link sau

https://github.com/Picovoice/porcupine/blob/master/lib/common/porcupine_params.pv

Lưu vào thư mục /home/pi

4.2. Download thư viện cho hotword tiếng Việt, theo link sau

https://github.com/Picovoice/porcupine/blob/master/lib/common/porcupine_params_vn.pv

4.3. Copy file vào thư viện mặc định

4.3.1. Nếu dùng tiếng Việt

Dùng lệnh sau:

```sh
cp /home/pi/porcupine_params_vn.pv /home/pi/.local/lib/python3.9/site-packages/pvporcupine/lib/common/porcupine_params.pv

```
4.3.2 Nếu dùng tiếng Anh

Dùng lệnh sau:

```sh
cp /home/pi/porcupine_params.pv /home/pi/.local/lib/python3.9/site-packages/pvporcupine/lib/common/porcupine_params.pv

```
