<?php
$conn = mysqli_connect('localhost', 'patryk', 'test1234', "pizza_order");

if (!$conn) {
    error_log('Connection error: ' . mysqli_connect_error());
}
