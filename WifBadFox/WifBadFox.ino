/*
Original code written by ESP8266 Community
Modified by BadFoxer
*/

#include <ESP8266WiFi.h>

const char* ssid = "BadFox";
const char* password = "Pusvaskis";

// Create an instance of the server
// specify the port to listen on as an argument

WiFiServer server(80);

void setup() {
  Serial.begin(115200);
  delay(10);

  // prepare GPIO2
  pinMode(2, OUTPUT);
  digitalWrite(2, 0);
  
  // Connect to WiFi network
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
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
  
  client.println("HTTP/1.1 200 OK");
  client.println("Content-Type: text/html");
  client.println(""); //  do not forget this one
  client.println("<!DOCTYPE HTML>");
  client.println("<html>");
  client.println("<center>");
  client.println("<body>");
  client.println("<style bgcolor =#223551>");
  client.println(".spalva {""background-color: #592d42;""border: none;""color: white;""padding: 7px 15px;""text-align: center;""cursor: pointer;""border-radius: 100px;""text-decoration: none""}");
    client.println("</style>");
  // Match the request
  if (req.indexOf("/LED=OFF") != -1){
  digitalWrite(2,HIGH);
   client.println("<p>Isjungta</p><br>");
}

  else if (req.indexOf("/LED=ON") != -1){
  digitalWrite(2, LOW);
  client.println("<p>Ijungta</p>");
  }
  
  else {
    Serial.println("invalid request");
    client.stop();
    return;
  }
  
  // Send the response to the client
  
  client.println("<a href=\"/LED=ON\"<button class = spalva>LED ON</button></a></button><br><br>");
  client.println("<a href=\"/LED=OFF\"<button class = spalva>LED OFF</button></a></button><br>");
  
  client.println("</center>");
  client.println("</body>");
  client.println("</html>");
  delay(1);
  Serial.println("Client disonnected");
  Serial.println("");

  // The client will actually be disconnected 
  // when the function returns and 'client' object is detroyed
}

