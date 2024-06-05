<?php

$db_name = 'mysql:host=localhost;dbname=u936666569_celous';
$user_name = 'u936666569_celous';
$user_password = 'Celouskitchen1';

$conn = new PDO($db_name, $user_name, $user_password);

function create_unique_id()
{
    $charecters =  '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWZ';
    $charecters_length = strlen($charecters);
    $random_string = '';
    for ($i = 0; $i < 20;   $i++) 
    {
        $random_string .= $charecters[mt_rand(0, $charecters_length - 1)];
    }
    return $random_string;
}
if (isset($_COOKIE['user_id']))
{
    $user_id = $_COOKIE['user_id'];
}
else
{
    $user_id = '';
}
?>