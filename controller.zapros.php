<?php
function zapr($twig)
{
    $id = $_GET['id'];
    $data=zapros($id);
    $da = 'edit';
    return $twig->render('form.html', array('bla' => $da, 'arraydata' => $data, 'id' =>$id));
}