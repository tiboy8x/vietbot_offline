from gpiozero import Button # Import Raspberry Pi GPIO library

btn_5=Button(5)
btn_6=Button(6)
# btn_7=Button(7)
# btn_8=Button(8)
# btn_9=Button(9)
# btn_10=Button(10)
btn_11=Button(11)
btn_12=Button(12)
btn_13=Button(13)
btn_14=Button(14)
btn_15=Button(15)
btn_16=Button(16)
btn_17=Button(17)
btn_18=Button(18)
btn_19=Button(19)
btn_20=Button(20)
btn_21=Button(21)
btn_22=Button(22)
btn_23=Button(23)
btn_24=Button(24)
btn_25=Button(25)
btn_26=Button(26)

while True: # Run forever
    if btn_5.is_pressed:
        print("Button 5 was pushed!")       
    if btn_6.is_pressed:
        print("Button 6 was pushed!")       
    # if btn_7.is_pressed:
        # print("Button 7 was pushed!")       
    # if btn_8.is_pressed:
        # print("Button 8 was pushed!")        
    # if btn_9.is_pressed:
        # print("Button 9 was pushed!")                
    # if GPIO.input(10) == False:
        # print("Button 10 was pushed!")                
    if btn_11.is_pressed:
        print("Button 11 was pushed!")           
    if btn_12.is_pressed:
        print("Button 12 was pushed!")        
    if btn_13.is_pressed:
        print("Button 13 was pushed!")        
    if btn_14.is_pressed:
        print("Button 14 was pushed!")        
    if btn_15.is_pressed:
        print("Button 15 was pushed!")        
    if btn_16.is_pressed:
        print("Button 16 was pushed!")        
    if btn_17.is_pressed:
        print("Button 17 was pushed!")        
    if btn_18.is_pressed:
        print("Button 18 was pushed!")        
    if btn_19.is_pressed:
        print("Button 19 was pushed!")        
    if btn_20.is_pressed:
        print("Button 20 was pushed!")        
    if btn_21.is_pressed:
        print("Button 21 was pushed!")        
    if btn_22.is_pressed:
        print("Button 22 was pushed!")        
    if btn_23.is_pressed:
        print("Button 23 was pushed!")        
    if btn_24.is_pressed:
        print("Button 24 was pushed!")        
    if btn_25.is_pressed:
        print("Button 25 was pushed!")        
    if btn_26.is_pressed:
        print("Button 26 was pushed!")        
    
