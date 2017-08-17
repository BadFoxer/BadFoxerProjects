// created by badfoxer //
//Simple code :D //
// here goes all variables whitch are used in the code//

#define pushButton 2     
#define led 13     
int buttonState =  0; 
int buttonMode = 0;     
int btnPushCounter = 0;
String condition = " PushButtonTimes ";

void setup() {
  // The setup() function is called when a sketch starts. Use it to initialize variables, pin modes, start using libraries, etc.//
  pinMode(led, OUTPUT);
  pinMode(pushButton, INPUT);
  Serial.begin(9600);

 
}
//Main code //
void loop() {
  // Read button states with modes//
if(digitalRead(pushButton) == HIGH && buttonMode == 0){
buttonMode = 1;
btnPushCounter++;
Serial.println(condition + btnPushCounter);
}
if(digitalRead(pushButton) == LOW && buttonMode == 1){
buttonMode = 0;
Serial.println(" button released ");
}
// turn led on and off and reset counter//
switch(btnPushCounter){
case 1:
 digitalWrite(led,1);
  // Serial.println("led  on");
 break;
 case 2:
 digitalWrite(led,0);
 // Serial.println("led  off");
 break;
  case 3:
  btnPushCounter = 0;
   Serial.println(" Reset Counter ");
 break;
  
}
}



