<?php
session_start();
echo 'Тавтай морил: ' . $_SESSION['username'] . ':' . $_SESSION['phone'] . ':' . $_SESSION['email'];