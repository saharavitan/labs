<?php
$function = $_REQUEST['function'];
$log = array();


switch ($function) {
    case('xss14'):
        $log['res'] = 'Your name is: ' . $_POST['name'] . " And Your Age is: " . htmlentities($_POST['age'], ENT_QUOTES, 'UTF-8');
        break;

}

echo json_encode($log);
?>