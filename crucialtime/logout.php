<?php
$page_name='logout';

session_start();

unset($_SESSION['user']);

header('Location:index_.php');
