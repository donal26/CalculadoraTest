<?php 
	
	class SuscriptorBussiness{

		public function register ($data){
			$suscription =  new Suscription();

			$flag_error = false;

			if($data == null){
				echo "Data no debe ser nulo.";
				$flag_error = true;
			}

			if(!$flag_error){
				$suscription->system = $data['system'];
				$suscription->initdate = $data['initdate'];
				$suscription->enddate = $data['enddate'];
				$suscription->user_id = $data['user_id'];

				$db = new Db("suscriptor.sqlite");
				$sql ="INSERT INTO suscriptions(system,initdate,enddate,user_id) values ('".$suscription->system."','".$suscription->initdate."','".$suscription->enddate."','".$suscription->user_id."')"

				$db->exec($sql);
			}
		} 

		public function list(){
			$db = new Db("suscriptor.sqlite");
			$sql = "SELECT * FROM suscriptions";
			$array = $db->execute_query($)

		}

	}


 ?>