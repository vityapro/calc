<?php

function delete ()
{
    $id = $_GET['id'];
    del ($id);
    redirect('index.php');
}