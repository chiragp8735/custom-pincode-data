<?php
namespace Custom\Data\Cron;

	class ApiData{

		public function execute()
	{

		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
		$conn = $resource->getConnection();

		$api_url = 'https://api.data.gov.in/resource/04cbe4b1-2f2b-4c39-a1d5-1c2e28bc0e32?api-key=579b464db66ec23bdd0000016b47cf07c0934d97781b620cf479907d&format=json';
		$api_raw_data = file_get_contents($api_url);
		$json_data = json_decode($api_raw_data, true);
		$json_records_array = $json_data['records'];


		foreach ($json_records_array as $final_data) {
			
			$sql = "INSERT INTO pincode_data_tmp (state, pincode, districtname, divisionname)
			VALUES ('".$final_data["statename"]."', '".$final_data["pincode"]."','".$final_data["districtname"]."','".$final_data["divisionname"]."')";

			if ($conn->query($sql) === TRUE) {
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

	}
}