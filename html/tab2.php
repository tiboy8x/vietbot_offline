<?php
function processInput($input) {
  // Execute the command and capture the output
  $output = shell_exec($input);
  // Return the output
  return $output;
  }
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input from the form
  if ($txt_input = $_POST['txt_input']){  
    // Process the input
    $output = processInput($txt_input);
  }else if ($btn1_input = $_POST['btn1_input']){  
    // Process the input
    $output = processInput('ps aux | grep -i start.py');
  }else if ($btn2_input = $_POST['btn2_input']){  
    // Process the input
    $output = processInput('systemctl --user stop vietbot.service');
  }else if ($btn3_input = $_POST['btn3_input']){  
    // Process the input
    $output = processInput('systemctl --user start vietbot.service');
  }else if ($btn4_input = $_POST['btn4_input']){  
    // Process the input
    $output = processInput('systemctl --user enable vietbot.service');
  }else if ($btn5_input = $_POST['btn5_input']){  
    // Process the input
    $output = processInput('systemctl --user disable vietbot.service');
  }else if ($btn6_input = $_POST['btn6_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_config.py');
  }else if ($btn7_input = $_POST['btn7_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_skill.py');
  }else if ($btn8_input = $_POST['btn8_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_object.py');
  }else if ($btn9_input = $_POST['btn9_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_action.py');
  }else if ($btn10_input = $_POST['btn10_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_adverb.py');
  }else if ($btn11_input = $_POST['btn11_input']){  
    // Process the input
    $output = processInput('ps aux | grep -i start.py');
  }else if ($btn12_input = $_POST['btn12_input']){  
    // Process the input
    $output = processInput('python3 /home/pi/vietbot_offline/src/create_object.py');
  }else if ($btn13_input = $_POST['btn13_input']){  
    // Process the input
    $output = processInput('pkill -f start.py');
  }else if ($btn14_input = $_POST['btn14_input']){  
    // Process the input
    $output = processInput('free -mh');
  }else if ($btn15_input = $_POST['btn15_input']){  
    // Process the input
    $output = processInput('df -hm');
  }else if ($btn16_input = $_POST['btn16_input']){  
    // Process the input
    $output = processInput('/sbin/reboot');
  }else if ($btn17_input = $_POST['btn17_input']){  
    // Process the input
    $output = processInput('/sbin/halt');
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="/assets/js/jquery-3.6.4.js"></script>
    <title>Process Input</title>
  </head>
  <body>
	<center>
    <label>Kết quả:</label>      
    <?php if (isset($output)): ?>
      <textarea id="output" name="output" cols="50" rows="20" wrap="hard" align="left"><?php echo $output; ?></textarea>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <label>Nhập lệnh:</label>
      <input type="text" name="txt_input">
      <input type="submit" value="Thi hành">
	<br>
	</br>
    <label>Gọi lệnh có sẵn:</label><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="submit" name="btn1_input" value="Kiểm tra Autorun">
      <input type="submit" name="btn2_input" value="Tạm dừng Autorun">
      <input type="submit" name="btn3_input" value="Chạy lại Autorun">
	  <br>
	  </br>
      <input type="submit" name="btn4_input" value="Kích hoạt Autorun">
      <input type="submit" name="btn5_input" value="Vô hiệu Autorun">
	  <br>
	  </br>
      <input type="submit" name="btn6_input" value="Tạo Config Json">
      <input type="submit" name="btn7_input" value="Tạo Skill Json">
      <input type="submit" name="btn8_input" value="Tạo Object Json">
	  <br>
	  </br>
      <input type="submit" name="btn9_input" value="Tạo Action Json">
      <input type="submit" name="btn10_input" value="Tạo Adverb Json">
	  <br>
	  </br>
      <input type="submit" name="btn11_input" value="Kiểm tra Manual run">
      <input type="submit" name="btn12_input" value="Chạy Manual run">
      <input type="submit" name="btn13_input" value="Dừng chạy Manual Run">
	  <br>
	  </br>
      <input type="submit" name="btn14_input" value="Kiểm tra dung lượng">
      <input type="submit" name="btn15_input" value="Kiểm tra bộ nhớ">
      <input type="submit" name="btn16_input" value="Khởi động OS">
      <input type="submit" name="btn17_input" value="Tắt mạch xử lý">	  
    </form>
	</center>
  </body>
</html>

