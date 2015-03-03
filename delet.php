




<?php

require_once('project.php');
$id = $_GET['id'];
delete($id);
redirect('index.php');