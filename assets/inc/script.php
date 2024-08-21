<?php

// echo json_encode($_POST);
$success = 0;
$msg = 'Une erreur est survenue (script.php)';

$dataName = ['name' => ''];
$dataEmail = ['email' => ''];
$dataPhone = ['phone' => ''];
$datSubject = ['subject' => ''];
$dataMessage = ['message' => ''];

if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['subject']) AND !empty($_POST['message'])) {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = isset($_POST['phone']) ? htmlspecialchars(strip_tags($_POST['phone'])) : '';
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Ajout de l'utilisateur en base de donnée a cette endroit (exemple)
        $success = 1;
        $msg = "";
        $dataName['name'] = $name;
        $dataEmail['email'] = $email;
        $dataPhone['phone'] = $phone;
        $datSubject['subject'] = $subject;
        $dataMessage['message'] = $message;
    } else {
        $msg = 'Adresse email invalide';
    }
} else {
    $msg = 'Veuillez renseigner tout les champs.';
}

$result = [
    "success" => $success, 
    "msg" => $msg, 
    "dataName" => $dataName,
    "dataEmail" => $dataEmail,
    "dataPhone" => $dataPhone,
    "datSubject" => $datSubject,
    "dataMessage" => $dataMessage,
];
echo json_encode($result); 
?>