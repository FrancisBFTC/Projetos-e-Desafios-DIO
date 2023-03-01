// C++ code
//

// Sensors and Modules Definitions
#define RED_LED 	0x3
#define BUZZER  	0x4
#define TMP_SENSOR 	0x0
#define MOTOR 		0x5

int tmpValue = 0;

// Initializing and Configurations
void setup()
{
  pinMode(RED_LED, OUTPUT);
  pinMode(BUZZER, OUTPUT);
  pinMode(MOTOR, OUTPUT);
  
  Serial.begin(9600);
  
  digitalWrite(RED_LED, LOW);
  digitalWrite(BUZZER, LOW);
  digitalWrite(MOTOR, LOW);
}

void loop()
{
  tmpValue = analogRead(TMP_SENSOR);
  Serial.println(tmpValue);
  
  if(tmpValue >= 30){
  	// activating motor
    digitalWrite(MOTOR, HIGH);
    
    if(tmpValue > 50){
      // power on led and buzzer to warn danger
    	digitalWrite(RED_LED, HIGH);
      	digitalWrite(BUZZER, HIGH);
    }else{
      // power off led and buzzer
    	digitalWrite(RED_LED, LOW);
      	digitalWrite(BUZZER, LOW);
    }
  }else{
  	// activating motor
    digitalWrite(MOTOR, LOW);
  }
}