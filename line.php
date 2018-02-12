<?php
$access_token = 'UBiM3HYXHiyEgFEZqWwsTYy2eiU2pOGWpbVqdPtLR4B7o0Inm8OAKahx46Pu8yumqXPDYq3LOlaLfEJ8k5WAQMS8nX7oyH0ZGixTg6GWxo/LPbnJvcISI0dG/n5BjTm5DEVFg7mojbRrf9hw7QP2NgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
echo $events;
