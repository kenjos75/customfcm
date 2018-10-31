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
  private $server_key = "";


  /**  @var string $fcm_url  */
  private $url = "https://fcm.googleapis.com/fcm/send";


  /**
  * Send function 
  *
  * Send a message to the recepient device,
  *
  * @param string $to The receiver client app id
  * @param array $data The notification data
  * @return boolean
  */
  public function send($to='',$data=array()){

      $defaultData = array("title"=>"Default Title","body"=>"Default Data");
      $check_data = array("title","body");

      if($data!=array() && $to!='' && $this->server_key!=''){

        foreach ($check_data as $value) {
          if(isset($data[$value]))
            $defaultData[$value] = $data[$value];
        }

        $headers = array("Content-Type: application/json","Authorization: key=".$this->server_key);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("notification"=>$defaultData,"to"=>$to))); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        $result = curl_exec($ch);
        curl_close($curl);
        
      }
      else
        return false;

      return true;
  }

  /**
  * Constructor
  *
  * Instantiate the server key,
  *
  * @param string $to The receiver client app id
  * @param array $data The notification data
  * @return FormClass
  */
  public function __construct($server_key=''){
    if($server_key!='')
      $this->server_key = $server_key;
    
    return $this;

  }



}