<?php
function valid ()
{
    $go=$_REQUEST['go'];
    $chekGo=arrayGiven();

   if(in_array($go,$chekGo))
   {

   }else{
redirect('404.html');
   }
}
