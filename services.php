<?php
class SensorReadingsService{
	private $host  = 'localhost';
  private $user  = 'benax_iot_root';
  private $password   = "Td(FAdeZ9xp3";
  private $database  = "benax_iot";      
  private $sensorTable = 'peter_sensor_readings';	
	private $dbConnect = false;

  public function __construct(){
      if(!$this->dbConnect){ 
          $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
          if($conn->connect_error){
              echo "Error failed to connect to MySQL: " . $conn->connect_error;
			return;
          }
          $this->dbConnect = $conn;
      }
  }

	public function getData() {
		$result = $this->dbConnect->query("SELECT * FROM peter_sensor_readings");
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return json_encode($data);
	}

	public function insertData($sensorReadings){ 		
		$sensorName=$sensorReadings["sensorName"];
		$temperature=$sensorReadings["temperature"];
		$status = 0;
		$sensorQuery="
			INSERT INTO ".$this->$sensorTable." 
			SET sensor_name='".$sensorName."', temperature='".$temperature."'";
		if( mysqli_query($this->dbConnect, $sensorQuery)) {
			$message = "sensor details saved Successfully.";
			$status = 1;			
		} else {
			$messgae = "sensor details failed to be saved!";
			$status = 0;			
		}
		$sensorResponse = array(
			'status' => $status,
			'status_message' => $message
		);
		header('Content-Type: application/json');

		return json_encode($sensorResponse);
	}
}

?>