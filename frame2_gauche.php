
<body>

jul apache est configure

<?php
echo "julien";
require "client.php";

// appel classe client
$monClient=new client();
$monClient->definirCa(20);
echo "Le ca est de : " . $monClient->connaitreCa();
?>

</body>
	