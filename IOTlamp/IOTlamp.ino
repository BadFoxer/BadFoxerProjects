/*
 *  This sketch demonstrates how to set up a simple HTTP-like server.
 *  The server will set a GPIO pin depending on the request
 *    http://server_ip/gpio/0 will set the GPIO2 low,
 *    http://server_ip/gpio/1 will set the GPIO2 high
 *  server_ip is the IP address of the ESP8266 module, will be 
 *  printed to Serial when the module is connected.
 *  
 *  modified by badfoxer 
 */
 

#include <ESP8266WiFi.h>

const char* ssid = "......";
const char* password = ".......";

// Create an instance of the server
// specify the port to listen on as an argument
WiFiServer server(8081);

void setup() {
  Serial.begin(115200);
  delay(10);

  // prepare GPIO2
  pinMode(4, OUTPUT);
  digitalWrite(4, LOW );
  // Connect to WiFi network
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  // stattic ip set here
  
  WiFi.begin(ssid, password);
  IPAddress ip(192,168,0,101); // device ip address   
  IPAddress gateway(192,168,0,1); // router address  
  IPAddress subnet(255,255,255,0);  // subnet mask
  WiFi.config(ip, gateway, subnet); // config all
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  
  // Start the server
  server.begin();
  Serial.println("Server started");

  // Print the IP address
  Serial.println(WiFi.localIP());
}

void loop() {
  // Check if a client has connected
  WiFiClient client = server.available();
  if (!client) {
    return;
  }
  
  // Wait until the client sends some data
  Serial.println("new client");
  while(!client.available()){
    delay(1);
  }
  
  // Read the first line of the request
  String req = client.readStringUntil('\r');
  Serial.println(req);
  client.flush();
  
  String Led;
  // Match the request
  if (req.indexOf("/Led/On") != -1){
    digitalWrite(4,HIGH);
     Led = "Lamp is On";
    }
    else  if (req.indexOf("/Led/Off") != -1){ 
   digitalWrite(4,LOW);
    Led = "Lamp is Off";
    }

  else {
    Serial.println("invalid request");
    client.stop();
    return;
  }

  client.flush();

  // Prepare the response
  String s = "HTTP/1.1 200 OK\r\nContent-Type: text/html\r\n\r\n<!DOCTYPE HTML>\r\n<html>";
  s +=(Led);
  s += "</html>\n";

  // Send the response to the client
  client.print(s);
  delay(1);
  Serial.println("Client disonnected");

  // The client will actually be disconnected 
  // when the function returns and 'client' object is detroyed
}

