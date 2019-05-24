<html>
	
	<head>
		
		<meta charset='utf-8'>
		
		<title>
			Connexion MySQL
		</title>
		
	</head>
	
	<body>
	
		<?php

			define('NOM_SERVEUR',"");
			define('MOT_DE_PASSE',"");
			define('SERVEUR',"");
			define('NOM_BASE',"");
			
			$connexion = mysql_pconnect(SERVEUR,NOM_SERVEUR,MOT_DE_PASSE);

			if(!$connexion){
				echo "Impssible de se connecter au serveur MySQL";
				exit;
			}
			
			if(!mysql_select_db(NOM_BASE,$connexion)){
				echo "Impssible de se connecter à la BDD";
				exit;
			}
			
			echo "Connexion et acces BDD OK";

		?>
		
	</body>

</html>
