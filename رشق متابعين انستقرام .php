<?php


define('API_KEY','1789457585:AAHI6DvbXvmbTmyGjaS9OVQmG9SCCAL8IG8'); ////توکن البوت 
$ApiI="#api";  //////////api رشق حتی لو بدون api شغال 

date_default_timezone_set('Asia/Tehran'); 
$admin = "1090996841";   /////// ایدی الادمن
$channel="@xsbots";      /////معرف قناتک
$Robboot="FFF8bot";   ///////معرف البوت
//----######------
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
}//@f7ees
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 } 
//----######------sendPhoto
 function sendphoto($chat_id, $photo, $caption){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$last = $message->from->last_name;
$username = $message->from->username;
$from_id = $message->from->id;
$text = $message->text;
$chatid = $message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$msgid = $update->message->message_id;
$step = file_get_contents('admin.txt');

//----######------
if(strstr($text, "/start")){
 if (!file_exists("data/$from_id/test.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/inv.txt","1");
        file_put_contents("data/$from_id/test.txt","1");
              
        $myfile2 = fopen("users.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);

          
   	
}
}

if($text !=""){

 if (file_exists("data/$from_id/report.txt")) {
     bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"لقد تم حظرك من الروبوت.‌",
                                 'parse_mode'=>"HTML",
                              ]);
}else{

$je=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel&user_id=$from_id")); 



$kind=$je->result->status ;

if($kind == "member"){
    
    if(strpos($text,'/start') !== false) {
 $id = str_replace("/start ","",$text);
if($id == "/start"){
    
     bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"✳مرحبًا ، عزيزي المستخدم ، مرحبًا بك في Robot Fallogram

❓ مع هذا الروبوت ، يمكنك زيادة متابعین Instagram الخاصة بك بسرعة عالية ودون الحاجة إلى ارسال باسورد الخاص ب حسابک

سيحصل كل مستخدم على 50 نقطه مجانية لأول مرة عند دخوله للبوت
لكل مستخدم يدعو اعضا مع رابطه الخاص ، يتم منح 50 نقطه أخرى.",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین‌"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
                              

    
}else{
if($id=="$from_id"){
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"⛔□ عزيزي المشترک ، لا يمكنك دعوة نفسك للروبوت!",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
 }else{
//==========



if (file_exists("data/$from_id/whoinv.txt")) {
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"لقد قمت بالفعل بلدخول روبوت من رابط شخص آخر",
                                 'parse_mode'=>"HTML",
                              ]);
}else{
file_put_contents("data/$from_id/whoinv.txt","");

$bgbfd=file_get_contents("data/$id/inv.txt");
$endoods= $bgbfd+1;
file_put_contents("data/$id/inv.txt","$endoods");
 bot('sendMessage',[
                    'chat_id'=>$id,
                              'text' =>"♻لقد انضم شخصا ما من الرابط الخاص بک",
                                 'parse_mode'=>"HTML",
                              ]);
                              
                              bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"✳مرحبًا ، عزيزي المستخدم ، مرحبًا بك في Robot Fallogram

❓ مع هذا الروبوت ، يمكنك زيادة متابعین Instagram الخاصة بك بسرعة عالية ودون الحاجة إلى ارسال باسورد الخاص ب حسابک

سيحصل كل مستخدم على 50 نقطه مجانية لأول مرة عند دخوله للبوت
لكل مستخدم يدعو اعضا مع رابطه الخاص ، يتم منح 50 نقطه أخرى.",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}




}//=================   
}


}
//=========  
if($text == "♻جلب رابط الدعوه"){

  bot('sendphoto', [
                'chat_id' => $from_id,
                'photo' =>new CURLFILE('pic.png'),               //////////////// رابط صوره الدعوه
                'caption' => "✳زثاده متابعین انستا مجانا کامل مجانی بدون ای شراء!
مجانی〽️
اسرع و ادهل ورشق حسابک متابعین⚡️
❄️رابط دخول البوت:
http://t.me/$Robboot?start=$from_id",        ////// ایدی ربات 
            ]);
                              
 }
//===============
if($text == "🎭زیاده المتابعین"){
$bgbfdnn=file_get_contents("data/$from_id/inv.txt");
if($bgbfdnn > 0){


file_put_contents("data/$from_id/stat.txt","addfollower");
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"💠الرجأ ارسال یوزر انستا الخاص بک معه@ ک مثال @p_.ot",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙رجوع"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);

}else{
bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"
عذرا حدث خطا لقد انتهت فرصک اذهب و جمع نقاط😘
",


                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}

//========================

$pposs=file_get_contents("data/$from_id/stat.txt");

if($text !="" and $pposs== "addfollower" ){
if($text == "🔙رجوع" Or $text == "🎭زیاده المتابعین"){
}else{
if(strstr($text, "@")){
file_put_contents("data/$from_id/stat.txt","");
$bgbbbfd=file_get_contents("data/$from_id/inv.txt");

$eccnns=$bgbbbfd-1;
file_put_contents("data/$from_id/inv.txt","$eccnns");

 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"🔵جاري العملية...",
                                 'parse_mode'=>"HTML",
                              ]);


$badadsime=explode("@","$text");
  


file_get_contents("$ApiI"."$badadsime[1]");
$bgbbbfd7=file_get_contents("data/$from_id/inv.txt");
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"اكتمل الرشق الخاص بک
عدد الفرص الباقیه لک للرشق: $bgbbbfd7
",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);


}else{
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"🔴الرجأ ارسال یوزر انستا الخاص بک معه@ ک مثال @p_.ot",
                                 'parse_mode'=>"HTML",
                              ]);

}



}else{


}
//=======================
if($text !="" && $pposs== "addfollower" &&$text == "🔙رجوع"){
                    file_put_contents("data/$from_id/stat.txt","");
                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"القائمة الرئيسية",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);




if($text == "🌀حول البوت"){

                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"👨🏻‍💻Coded By :@f7ees 
",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);


if($text == "🤹‍♂عدد اشخاص ضفتهم"){
$aaadads=file_get_contents("data/$from_id/inv.txt");
$pwpw=$aaadads *50;
                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"💎كم عدد المرات التي يمكنك استخدامها:
$aaadads
یعادل $pwpw متابعین
",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>"🎭زیاده المتابعین"]],
    [['text'=>"♻جلب رابط الدعوه"],['text'=>"🌀حول البوت"],['text'=>"🤹‍♂عدد اشخاص ضفتهم"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);

//===============
}else{
    
    if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $text))
{
 
$nhnr= str_replace(" ","=",$text);
$bfbfb= str_replace("/","",$nhnr);
bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"🔰بل اول اشترک ب قنات البوت بعدها ارسل استارت مره ثانیه 
 

",
                                        'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
	   [
	  ['text'=> "📍اشترك في القناة" ,'url'=>"https://t.me/$channel"]
	  ],

   ]


])


                              ]);

}else{

bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"🔰بل اول اشترک ب قنات البوت بعدها ارسل استارت مره ثانیه 
  

/start
ارسل

",
                                        'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
	   [
	  ['text'=> "📍اشترك في القناة" ,'url'=>"https://t.me/$channel"]
	  ],

   ]


])


                              ]);
}
    
    
}
//==========Elite_PRogrammers
}


}

if($text == "/froward" && $from_id == $admin){
bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"ارسل رسالتک",
                                 'parse_mode'=>"HTML",

                              ]);
file_put_contents("admin.txt","forward"); 

}

if(isset($update->message) && $from_id == $admin && $step== "forward"){
   $counttw= substr_count( file_get_contents("users.txt"), "\n" ) +1;

bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"یتم الارسال...",
                                 'parse_mode'=>"HTML",

                              ]);

     while($counttw >0){
         $tw=file("users.txt");
 
     bot('sendMessage', [
            'chat_id' => $tw[$counttw],
            'text' => "$text",
        ]);
      $counttw--;
     }  
}
