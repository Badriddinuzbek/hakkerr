<?php
$token = "1217871123:AAF2RzLCbpNf7whHXy1KxxW3QqRqb1SLXlw";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".$token."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

// uzizni ID raqamingizni kiritasiz
$admin = "537924932";

// BOT iz username si
$bot_name = "Link_ochiradigan_bot";
// manba @tarixchilaar_1

$update = json_decode(file_get_contents('php://input'));  
$message = $update->message;
$edname = $editm ->from->first_name;
$from_user_first_name = $message->reply_to_message->from->first_name;
$iid = $message->reply_to_message->from->id;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
$text = $message->text;
$title = $message->chat->title;
$description = $message->chat->description;
$rasm = $message->chat->photo;
$ism = $message->chat->first_name;
$familiya = $message->chat->last_name;
$login0 = $message->chat->username;
$ismcha = $message->from->first_name;
$familiyacha = $message->from->last_name;
$login00 = $message->from->username;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$uid = $message->from->id;

$soat = date('H:i:s',strtotime('5 hour')); 
$sana = date('d-M Y',strtotime('5 hour'));
$sana2 = date('z',strtotime('5 hour'));
$gmt = date('O',strtotime('5 hour'));
$oynomi = date('F',strtotime('5 hour'));
$buoy = date('t',strtotime('5 hour'));

/// start 
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"*Salom siz botga ulandingiz👍
Bot guruhlarda moderatorlikni bajaradi!
Yordam uchun help deb yozing!*",
'parse_mode'=>"markdown", 
]);
}

if($text == "help"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"*Botni guruhga admin qilsangiz guruhga hech kim link (ssilka),
tashlay olmaydi😂👍
Shuningdek guruh nomi va izohini o‘zgartirish qobiliyati mavjud👍
Bu haqida batafsil deb yozing*",
'parse_mode'=>"markdown",
]);
}

if($text == "batafsil"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"_Guruhda quyidagi buyruqlar mavjud:
Title - Guruh nomini o‘zgartirish
Description - Guruh izohini o‘zgartirish
Photo - Guruh rasmini o‘zgartirish
infoChat - Chat ma‘lumotnomasi
infoUser - User ma‘lumotnomasi
InfoTime - Vaqt haqida
shuningdek bot asosiy vazifasini bajaradi (delete)
stat - Statistika_",
'parse_mode'=>"markdown",
]);
}

if($text == "InfoTime"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"*Bugun: $sana-yil
Soat: $soat
Oy nomi: $oynomi
Yilning: $sana2-kuni
Vaqt mintaqasi: $gmt
Bu oy $buoy kundan iborat*",
'parse_mode'=>"markdown",
]);
}

if($text == "Title"){
bot('setChatTitle',[
'chat_id'=>$message->chat->id,
'title'=>"$title",
]);
}

if($text == "Description"){
bot('setChatDescription',[
'chat_id'=>$message->chat->id,
'description'=>"$description",
]);
}

if($text == "Photo"){
bot('setChatPhoto',[
'chat_id'=>$message->chat->id,
'photo'=>"$rasm",
]);
}

if($text == "InfoChat"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"Guruh nomi: $ism
Guruh nomi 2: $familiya
Login: $login0",
]);
}

if($text == "InfoUser"){
bot('sendMessage',[
'chat_id'=>$message->chat->id,
'text'=>"Ismingiz: $ismcha
Familiyacha: $familiyacha
Login: $login00",
]);
}

if ($text == "stat") {
    $nat = "@gayratfayz_gr";
$mem = bot('getChatMembersCount',[
'chat_id'=>$nat,
]);
$son = $mem->result->count;
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Guruh a'zolari: $son ta"
]);
}

if($message->forward_from){
  bot('deleteMessage',[
              'chat_id'=>$chat_id,
           'message_id'=>$message->message_id,
]);
}

if(mb_stripos($tx,"https://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"http://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"www")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"@")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"#")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"t.me")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

if(mb_stripos($tx,"telegram.me")!==false){ bot('deleteMessage',[ 'chat_id'=>$message->chat->id, 'text'=>"Xabaringiz o‘chirildi😂👍",
]);
}

?>
