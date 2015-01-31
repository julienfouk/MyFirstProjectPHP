<body>



<?php

require "client.php";

// connexion IBM DB2
try
{
$bdd= new PDO('odbc:SAMPLE','db2admin','bidou210');
//$bdd= new PDO('mysql:host=sql.hebergeur.com;dbname=mabase','user','password',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  //pour activer les erreurs 
echo "Connexion Ok " ;

}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>

</body>