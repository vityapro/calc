<?php
function edit($twig){
    $data=$_POST['data'];
    $summa=$_POST['summa'];
    $id = $_POST['id'];
    editDate($data, $summa, $id);

    redirect('index.php');
 if ($summa>0 and validateDate($data))
    {
        editDate($data, $summa, $id);
        redirect('index.php');
    } else {
        $data=zapros($id);
        $da='edit';
        $eror='Ошибка ввода даных при редактировании!';
        return $twig->render('form.html',array('bla' => $da,'arraydata' => $data, 'eror'=>$eror, 'id' =>$id));
    }
}