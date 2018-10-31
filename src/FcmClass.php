<?php namespace Kenetashi\CustomFcm;

/**
*  A Fcm Class
*
*  This class is use to send fcm message to end-user device
*
*  @author Kenneth John Rosales
*/
class FcmClass{

   /**  @var string $server_key  */
   private $server_key = 'AAAA4Br5JWo:APA91bFlRTFtEMzJxxLH4cteoz4zl4KW45PLU_G4mL21Z72woIyOzAp63AOSqOBcZb1gJxRbQFPEAFK0GTfaavQTIDpmKavVLKjBxE-qPItSlQYbCeMyraFURTAIqjWflGjEAuEsFNRY';
  
  /**
  * Send function 
  *
  * Send a message to the recepient device,
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
   public function send(){
			return "Hello World";
   }
}