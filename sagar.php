<?php

$full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$website = isset($_POST['website']) ? $_POST['website'] : '';
$about_you = isset($_POST['about_you']) ? $_POST['about_you'] : '';
$mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';

print_r($full_name);
die;
