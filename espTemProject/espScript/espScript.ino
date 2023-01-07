#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

#define HOST "****"

const char* ssid = "****";
const char* password = "****";

int val;
int val2;
int val3;

String sendval, sendval2, sendval3, postData;


void setup() {
Serial.begin(115200);
Serial.println("Communication Started \n\n");
delay(500);
pinMode(LED_BUILTIN, OUTPUT);
WiFi.mode(WIFI_STA);
Serial.print("Connecting to ");
Serial.print(ssid);
WiFi.begin(ssid, password);
while (WiFi.status() != WL_CONNECTED){
  Serial.print(".");
  delay(500);}

Serial.println();
Serial.print("Connected to ");
Serial.println(ssid);
Serial.print("IP Address is : ");
Serial.println(WiFi.localIP());
}



void loop() {
val = 1;
val2 = 1;
val3 = 1;
HTTPClient http;
WiFiClient wclient;   

sendval = String(val);  
sendval2 = String(val2);
sendval3 = String(val3); 

 
postData = "sendval=" + sendval + "&sendval2=" + sendval2 + "&sendval3=" + sendval3;
  
http.begin(wclient, "****");
http.addHeader("Content-Type", "application/x-www-form-urlencoded");

int httpCode = http.POST(postData);
Serial.println("Values are, sendval = " + sendval + " and sendval2 = "+sendval2 );
val = val+1;
val2 = val2+1;

if (httpCode == 200) { Serial.println("Values uploaded successfully."); Serial.println(httpCode); 
String webpage = http.getString();
Serial.println(webpage + "\n"); 
}


else { 
  Serial.println(httpCode); 
  Serial.println("Failed to upload values. \n"); 
  http.end(); 
  return; }


delay(500); 
digitalWrite(LED_BUILTIN, LOW);
delay(500);
digitalWrite(LED_BUILTIN, HIGH);
}
