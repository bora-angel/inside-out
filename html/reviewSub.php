<?php
echo json_encode([
    'result' => true, 
    'rvName' => $_REQUEST['rvName'],
    'rvScope' => $_REQUEST['rvScope'],
    'rvContents' => $_REQUEST['rvContents']
]);


?>