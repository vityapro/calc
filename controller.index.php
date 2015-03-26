<?php
function index($twig)
{
    $payments = getPayments();
    $sum = summ('summa', 'zvit');

   return ($twig->render('index.html', array('payments' => $payments, 'sum' => $sum)));
}