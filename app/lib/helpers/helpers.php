<?php

function dnd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($value) {
    return htmlentities($value, ENT_QUOTES, 'UTF-8');
}