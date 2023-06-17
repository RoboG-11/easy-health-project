<?php
include_once './session.php';

$user = new Session();
$user->closeSession();

header("location: ../View/GUI_Principal.php");
