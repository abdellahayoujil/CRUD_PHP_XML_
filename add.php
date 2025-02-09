<?php
session_start();

if (isset($_POST['add'])) {
    // Open XML file
    $users = simplexml_load_file('files/members.xml');
    $newId = $_POST['id'];
    // Check if ID already exists
    foreach ($users->user as $user) {
        if ((string) $user->id === $newId) {
            $_SESSION['message'] = 'ID already exists. Please use a different ID.';
            header('location: index.php');
            exit();
        }
    }
    $user = $users->addChild('user');
    $user->addChild('id', $newId);
    $user->addChild('firstname', $_POST['firstname']);
    $user->addChild('lastname', $_POST['lastname']);
    $user->addChild('address', $_POST['address']);

    // Save the updated XML file
    $dom = new DomDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($users->asXML());
    $dom->save('files/members.xml');

    $_SESSION['message'] = 'Membre ajouté avec succès.';
    header('location: index.php');
} else {
    $_SESSION['message'] = 'Fill up add form first';
    header('location: index.php');
}
?>
