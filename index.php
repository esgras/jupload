<?php

$uri = trim($_SERVER['REQUEST_URI'], '/');

if ($uri == 'upload') {
    var_dump($_FILES);
}