<?php
session_start();

function conexao() {
    $host = "127.0.0.1:3307";
    $database = "database";
    $user = "root";
    $pass = "usbw";
    return new PDO("mysql:host={$host};dbname={$database}", $user, $pass);
}