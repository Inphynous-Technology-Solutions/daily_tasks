<?php
include "connection.php";
session_start();
session_unset();
session_destroy();
header("location:http://localhost/4-chat-application/login.php");
