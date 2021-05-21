<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		function get_data() {
			$datae = array();
			$datae[] = array(
				'Name' => $_POST['name'],
				'Email' => $_POST['email'],
				'Telefon' => $_POST['telefon'],
                'Adresse' => $_POST['adresse'],
                'Type' => $_POST['type'],
                'Areal' => $_POST['areal'],
                'Rooms' => $_POST['rooms'],
                'Plan' => $_POST['plan'],
                'Alder' => $_POST['alder'],
                'Pris' => $_POST['pris'],
                'Besked' => $_POST['besked'],
			);
			return json_encode($datae);
		}
		
		$name = "formsave";
		$file_name = $name . '.json';
	
		if(file_put_contents(
			"$file_name", get_data())) {
                echo "<script>
                    alert('Dine oplysninger er gemt!');
                    window.location.href='dashboard.php';
                    </script>";
			}
		else {
			echo 'Der skete en fejl, prøv igen senere!';
		}
	}
?>
