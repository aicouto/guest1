<?php
$db=db();
$mensagens=$db->select('mensagens','*');
$data=[
    'title'=>"Guest",
    'user'=>isAuth(),
    'mensagens'=>$mensagens
];
view('home',$data);
?>
