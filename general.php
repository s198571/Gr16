<?php
function protect_page(){
    if (logged_in() === FALSE){
        header('Location: protect.php');
        exit();
    }
}

function array_sanitize(&$item){
    $item = mysql_real_escape_string($item);
}

function sanitize($data){
    return mysql_real_escape_string($data);
}
function output_errors($errors){
    return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>
