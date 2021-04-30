<?php
$i=0;
echo "Clientul a comandat: <br>";
while ($_POST['produs'.$i])
{		$produs[$i]= $_POST['produs'.$i];
		$culoare[$i]= $_POST['culoare'.$i];
	echo $i+1 .". ". $produs[$i]. " de culoare ". $culoare[$i]. "<br><br>";
	$i++;
}





// echo"
//Nume: $nume <Br>
//Telfon: $telefon <Br>
//Email: $email <Br>
//Mesaj: $mesaj


 /*

$to      = 'vlad.hilea@gmail.com';
$subject = 'Contact Web Design';
$message = "
$nume 
$telefon
$email
$mesaj
$culoare
$produs
";
$headers = 'From: contact@vlad-hilea.ro' . "\r\n" .
           'Reply-To: contact@vlad-hilea.ro' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);


header("location: index.php");
?>

*/