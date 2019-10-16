<?php
session_start();

if(isset($_SESSION['results'])) {
    $correct = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;
} else {
    $showResults = false;
}