<?php 
/**
 * SardorBek
 * 26.09.2019
 * Telegram: @SSardorbekS
 */
require 'app/controller.php';
require 'Db.php';
use app\TelegramBot;

date_default_timezone_set('Asia/Tashkent');

$bot = new TelegramBot;

//Bot ID raqami
$botid = '';


$data = $bot->getData("php://input");
$chat_id = isset($data['message']['chat']['id']);
$userid = isset($data['message']['from']['id']);
$username = isset($data['message']['from']['username']);
$ism = isset($data['message']['from']['first_name']).' '.isset($data['message']['from']['last_name']);
$ismi = isset($data['message']['from']['first_name']);
$familiya = isset($data['message']['from']['last_name']);
$text = isset($data['message']['text']);
$message_id = isset($data['message']['message_id']);
$number = isset($data['message']['contact']['phone_number']);
$messag = isset($data['message']);
$photo = isset($data['message']['photo']);

//INLIEN QUERY
$inlinequery = isset($data['inline_query']);
$inline_id = isset($inlinequery['id']);
$inline_query = isset($inlinequery['query']);


//CALLBACK
$callback = isset($data['callback_query']);
$callback_id = isset($callback['id']);
$call_data = isset($callback['data']);
$call_chat_id = isset($callback['message']['chat']['id']);
$call_message_id = isset($callback['message']['message_id']);


// AUDIO
// $audio = $data['message']['audio'];


$update = json_decode(file_get_contents('php://input'));
$message = isset($update->message);
$chat_id2 = isset($update->callback_query->message->chat->id);
    
    // $global_chatid_info = (isset($chat_id)) ? $chat_id : $chat_id2;

    $sql_d = "SELECT * FROM zilla_users";
    if($result_d = mysqli_query($link, $sql_d)){
        if(mysqli_num_rows($result_d) > 0){
            while($ro_d = mysqli_fetch_array($result_d)){
                if($chat_id == $ro_d['chatid'] || $chat_id2 == $ro_d['chatid']){
                    $godel = true;  
                    $global_id = $ro_d['id'];
                    $godrole = $ro_d['role'];
                    $global_phone = true;
                }else {
                    $global_phone = false;
                }
            }
        } else{
            $godel = false;
            $global_phone = false;
        }
    }


function user_info($data_chatid){
    $sql_d = "SELECT * FROM zilla_users WHERE chatid = ".$data_chatid;
    $result_d = mysqli_query($link, $sql_d);
    if(mysqli_num_rows($result_d) > 0){
            $ro_d = mysqli_fetch_array($result_d);
            $godel = true;  
            $global_id = $ro_d['id'];
            $godrole = $ro_d['role'];
            $global_phone = true;
    } else{
        $godel = false;
        $global_phone = false;
    }
}


function cart($id){
    global $link;
    $ql = "SELECT * FROM sharainfo_cart";
    if($esult = mysqli_query($link, $ql)){
            while($ow = mysqli_fetch_array($esult)){    
                if ($id == $ow['id'] && $ow['role'] == true) {
                 return $ow['name'];              
               }
            }
    }

}


function encrypt_decrypt($action, $string)
{
  $output = false;
 
  $encrypt_method = "AES-256-CBC";
  $secret_key = 'This is my secret key';
  $secret_iv = 'This is my secret iv';
 
  // hash
  $key = hash('sha256', $secret_key);
 
  // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a
  // warning
  $iv = substr(hash('sha256', $secret_iv), 0, 16);
 
  if ($action == 'encrypt')
  {
    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
  }
  else
  {
    if ($action == 'decrypt')
    {
      $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
  }
 
  return $output;
}

//     $sdq = "SELECT * FROM sharainfo_history ORDER BY ca_date ASC";
//     if($dreult = mysqli_query($link, $sdq)){
//         if(mysqli_num_rows($dreult) > 0){
//             while($dr = mysqli_fetch_array($dreult)){
//                 $dfolder = $dr['folder'];
//                 if($dfolder == $idgg){
//                     $dusid = $dr['cart'];
//                     $dusercartid = paketid($dusid);
//                     $do[] = "<i>".$dr['name']."</i> | <code>".$dusercartid."</code> | <code>".$dr['text']."</code>";
//                 }
//             }
//             mysqli_free_result($result);
//         }
//     }

// var_dump($o);

// Products List
    function product_category($id) {
        global $link;
        $ql = "SELECT * FROM zilla_category WHERE id=".$id;
        if($esult = mysqli_query($link, $ql)){
            $ow = mysqli_fetch_array($esult);
            return $ow['name'];
        }
    }
    function list_products($id) {
        global $link;
        $sq = "SELECT * FROM zilla_products WHERE user_id=".$id;
        if($reult = mysqli_query($link, $sq)){
            if(mysqli_num_rows($reult) > 0){
                while($r = mysqli_fetch_array($reult)){
                    $usercartid = product_category($r['category']);
                    $encrypted_txt = encrypt_decrypt('encrypt', $r['id']);

                    // $o[] = "<i>{$r['name']}</i> | <code>{$usercartid}</code> | <code>{$r['money']}</code> | <a href=\"https://vendor.zilla.uz/product/{$encrypted_txt}\">✏️</a>";
                    $o[] = "<i>{$r['name']}</i> | <code>{$usercartid}</code> | <code>{$r['money']}</code> ";
                }
                mysqli_free_result($result);
            }else {
                $o = "No ....";
            }
        }else {
            $o = "No ....";
        }
        return $o;
    }

// Orders
    function orders() {
        global $link;
        $sq = "SELECT * FROM zilla_orders WHERE user_id=".$id;
        if($reult = mysqli_query($link, $sq)){
            if(mysqli_num_rows($reult) > 0){
                while($r = mysqli_fetch_array($reult)){
                    $o[] = "<i>{$r['name']}</i> | <code>{$r['money']}</code> | <code>{$r['order_date']}</code> ";
                }
                mysqli_free_result($result);
            }else {
                $o = "No ....";
            }
        }else {
            $o = "No ....";
        }
        return $o;
    }

// Products add
    function category_key() {
        global $link;
        $ql = "SELECT * FROM zilla_category";
        if($esult = mysqli_query($link, $ql)){
                while($ow = mysqli_fetch_array($esult)){    
                    $o[] = '[{"text":"❇️ '.$ow['name'].'","callback_data":"add_category'.$ow['id'].'"}]';
                }
        }
        
        return '{"inline_keyboard":['.implode(",", $o).',[{"text":"🔙 Назад","callback_data":"home"}]]}';
        
    }


    function add_pro_id($id, $data) {
        global $link;
        $ql = "SELECT * FROM zilla_products WHERE user_id=".$id;
        if($esult = mysqli_query($link, $ql)){
            while($ow = mysqli_fetch_array($esult)){    
                 if($ow['images'] == null){
                     $imagee = $ow['images'];
                     $ide = $ow['id'];
                     $hj = true;
                 }
                 if($ow['name'] == 'no' && isset($ow['images'])){
                     $imagee = $ow['images'];
                     $namee = $ow['name'];
                     $ide = $ow['id'];
                     $hj = true;
                 }else {
                         $namee = $ow['name'];
                         $imagee = $ow['images'];
                         $moneye = $ow['money'];
                         $ide = $ow['id'];
                         $hj = true;
                         $hsj = true;
                }
                     
            }
        }else {
            $ol = false;
        }
        
        if($data == "images" && $imagee == null && $hj == true){
            return true;
        }else if($data == "name" && $namee == 'no' && isset($imagee) && $hj == true){
            return true;
        }else if($data == "money" && $moneye == "no" && $hsj == true && isset($imagee) && $hj == true){
            return true;
        }
        
        if($data == "id") {
            return $ide;
        }
        
    }
   function start_add_pro($id, $data) {
        global $link;
        $ql = "SELECT * FROM zilla_products WHERE user_id=".$id;
        if($esult = mysqli_query($link, $ql)){
            while($ow = mysqli_fetch_array($esult)){    
                 if($ow['images'] == null){
                     $imagee = $ow['images'];
                     $ide = $ow['id'];
                     $hj = true;
                 }
                 if($ow['name'] == 'no' && isset($ow['images'])){
                     $imagee = $ow['images'];
                     $namee = $ow['name'];
                     $ide = $ow['id'];
                     $hj = true;
                 }else {
                         $namee = $ow['name'];
                         $imagee = $ow['images'];
                         $moneye = $ow['money'];
                         $ide = $ow['id'];
                         $hj = true;
                         $hsj = true;
                }
                     
            }
        }else {
            $ol = false;
        }
        
        if($data == "images" && $imagee == null && $hj == true){
            return true;
        }
        if($data == "name" && $namee == 'no' && isset($imagee) && $hj == true){
            return true;
        }
        if($data == "money" && $moneye == "no" && $hsj == true && isset($imagee) && $hj == true){
            return true;
        }
        
        if($data == "id") {
            return $ide;
        }
        
    }

$keyboard_phone = $bot->Keyboard([
	[ [ 
     'text'=>'📲 Telefon raqamimni yuborish', 
     'request_contact'=>true, 
    ]]
]);

$keyboard_buttom = $bot->InlineKeyboard([
	[['text' => 'Кейингиси', 'callback_data' => 'product_money']]
]);

$keyboard_exit = $bot->InlineKeyboard([
	[['text' => '🔙 Aсосий менюга қайтинг', 'callback_data' => 'home']]
]);


$keyboard_home = $bot->InlineKeyboard([
	[['text' => '➕ Маҳсулот қўшиш', 'callback_data' => 'add_product']],[['text' => '🗄 Маҳсулотлар рўйхати', 'callback_data' => 'products']],[['text' => '🗳 Буюртмалар', 'callback_data' => 'orders']],[['text' => 'ℹ️ Биз ҳақимизда', 'callback_data' => 'about']]
]);

$keyboard_home_admin = $bot->InlineKeyboard([
	[['text' => '➕ Маҳсулот қўшиш', 'callback_data' => 'add_product']],[['text' => '🗄 Бошқарув', 'callback_data' => 'menu_management']],[['text' => '🗳 Буюртмалар', 'callback_data' => 'orders']],[['text' => 'ℹ️ Биз ҳақимизда', 'callback_data' => 'about']]
]);


$pp_im = start_add_pro($global_id, "images");
$pp_na = start_add_pro($global_id, "name");
$pp_mo = start_add_pro($global_id, "money");

if($pp_na == true || $pp_na == true || $pp_mo == true){
    $ghghgh = true;
}

if($text == "/start" && isset($ghghgh) == true){
	$bot->sendMessage([
		'chat_id' => $chat_id, 
		'text' => "Махсулотни охиригача киритмадингиз", 
		'parse_mode' => 'HTML'
	]);
}


if ($text == "/start" && $godel == false && $ghghgh == false) {	
	$bot->sendMessage([
		'chat_id' => $chat_id, 
		'text' => "Aссалому алайкум ${ism}.\n\n Телеграм ёқилган телефон рақамингизни контакт кўринишида юборинг Бунинг учун <b>📲 Telefon raqamimni yuborish</b> тугмасини босинг", 
		'parse_mode' => 'HTML', 
		'reply_markup' => $keyboard_phone
	]);
}


if ($text == "/start" && $godel == true && isset($ghghgh) == false) {	
    // if($chat_id == "833941240"){
    // 	$bot->sendMessage([
    // 		'chat_id' => $chat_id, 
    // 		'text' => "Aссалому алайкум Nigina. \n <i>Doyim uzingiz baxtliman deb hisoblang, Ahir ZILLA sizni qadirlaydi.</i> \n Agar buni", 
    // 		'parse_mode' => 'HTML',
    // 		'reply_markup' => $key_home,
    // 	]);
    // }else {
    if($godrole == "0"){
    	$bot->sendMessage([
    		'chat_id' => $chat_id, 
    		'text' => "Aссалому алайкум ${ism}.", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_home_admin,
    	]);
    }else {
    	$bot->sendMessage([
    		'chat_id' => $chat_id, 
    		'text' => "Aссалому алайкум ${ism}.", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_home,
    	]);
    }
}

if($call_data == 'menu_management' && $godrole == "0"){

	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "Assalomu", 
		'parse_mode' => 'HTML',
		'reply_markup' => $keyboard_exit,
	]);
}

if($call_data == 'home'){
    $ism = $callback['from']['first_name'].' '.$data['from']['last_name'];

    if($godrole == "0"){
    	$bot->editMessageText([
    		'chat_id' => $call_chat_id,
    		'message_id' => $call_message_id,
    		'text' => "Aссалому алайкум ${ism}.", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_home_admin,
    	]);
    }else {
    	$bot->editMessageText([
    		'chat_id' => $call_chat_id,
    		'message_id' => $call_message_id,
    		'text' => "Aссалому алайкум ${ism}. 1", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_home,
    	]);
    }
}

if($call_data == 'add_product'){
    $key_catg = category_key();
	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "<b>Категорияни танланг</b>\n\n ",
		'parse_mode' => 'HTML',
		'reply_markup' => $key_catg
	]);
}
if($call_data == 'products') {
    // $product_list = "<i>Барча махсулотлар</i>\n\n <b>М.Н | Категория | Нархи | 🌐</b> \n ".implode( " \n ", list_products($global_id) );
	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "Ҳозир бу бўлим буйича ишлар олиб борилаябди",
		'parse_mode' => 'HTML',
		'reply_markup' => $keyboard_exit
	]);
}
if($call_data == 'orders') {
//     $orders_list = "<i>Барча буюртмалар</i>\n\n <b>М.Н | Нархи | Санаси | 🌐</b> \n ".implode( " \n ", orders($global_id) );
	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "Ҳозир бу бўлим буйича ишлар олиб борилаябди",
		'parse_mode' => 'HTML',
		'reply_markup' => $keyboard_exit
	]);
}
if($call_data == 'about') {
	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "<b>Мижозларни 24/7 қўллаб-қувватлаш</b> \n <code>(33) 970 07 55</code> \n\n <b>ZILLA TEAM</b>",
		'parse_mode' => 'HTML',
		'reply_markup' => $keyboard_exit
	]);
}

if(substr_count($call_data,"add_category")) {
    $categoryidll = substr($call_data,12);
    $sql_insert = "INSERT INTO zilla_products (name, images, description, money, category, user_id) VALUES ('no', '', '', '', '{$categoryidll}', '{$global_id}')";
    mysqli_query($link, $sql_insert);
    
	$bot->editMessageText([
		'chat_id' => $call_chat_id,
		'message_id' => $call_message_id,
		'text' => "Расм юборинг. \n <i>Изоҳ: Сиз 1 та фотосуратни юборишингиз мумкин.</i>",
		'parse_mode' => 'HTML'
	]);
}




if($photo && add_pro_id($global_id, 'images') == true) {
    $phon = json_encode($photo);
    $iddd = add_pro_id($global_id, 'id');
    // $sql_insert = "INSERT INTO zilla_products (name, images, description, money, category, user_id) VALUES ('', '{$phon}', '', '', '1', '{$global_id}')";
    $sql_insert = "UPDATE zilla_products SET images='{$phon}' WHERE id={$iddd}";
    mysqli_query($link, $sql_insert);

	$bot->sendMessage([
		'chat_id' => $chat_id, 
		'text' => "Маҳсулот номи: ", 
		'parse_mode' => 'HTML'
	]);
}

if($text && add_pro_id($global_id, 'name') == true) {
    if($text == "/start"){
        
        }else{
        $phon = json_encode($photo);
        $iddd = add_pro_id($global_id, 'id');
        $is = htmlspecialchars($text, ENT_QUOTES);
        // $sql_insert = "INSERT INTO zilla_products (name, images, description, money, category, user_id) VALUES ('', '{$phon}', '', '', '1', '{$global_id}')";
        $sql_insert = "UPDATE zilla_products SET name='{$is}' WHERE id={$iddd}";
        mysqli_query($link, $sql_insert);
    
    	$bot->sendMessage([
    		'chat_id' => $chat_id, 
    		'text' => "Расм: қабул қилинди. \n Маҳсулот номи: қабул қилинди.", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_buttom
    		
    	]);
    }
}

if($call_data == "product_money") {
    $iddd = add_pro_id($global_id, 'id');
    $sql_insert = "UPDATE zilla_products SET money='no' WHERE id={$iddd}";
    mysqli_query($link, $sql_insert);

	$bot->sendMessage([
		'chat_id' => $call_chat_id, 
		'text' => "Нархини киритинг:", 
		'parse_mode' => 'HTML'
		
	]);
}

if($text && add_pro_id($global_id, 'money') == true) {
    if($text == "/start"){
        
    }else {
        $iddd = add_pro_id($global_id, 'id');
        
        // $tkkt = $data['message']['text'];
        // $teg = $text*10/100+$tkkt;
        // $teg+$tkkt;
        $is = htmlspecialchars($text, ENT_QUOTES);
        
        
        // $sql_insert = "INSERT INTO zilla_products (name, images, description, money, category, user_id) VALUES ('', '{$phon}', '', '', '1', '{$global_id}')";
        $sql_insert = "UPDATE zilla_products SET money='{$is}' WHERE id={$iddd}";
        mysqli_query($link, $sql_insert);
    
    	$bot->sendMessage([
    		'chat_id' => $chat_id, 
    		'text' => "Маълумотлар сақланди.", 
    		'parse_mode' => 'HTML',
    		'reply_markup' => $keyboard_exit
    	]);
    }
}


// $botToken = "1683818851:AAFRWpsTlOIQP3AogVzxPOGVY2xeV4OAb_w";
// $botAPI = "https://api.telegram.org/bot" . $botToken;
                        
// $update = file_get_contents('php://input');
// $update = json_decode($update, TRUE);
                        
// if (!$update) {
//     exit;
// }
// $message = isset($update['message']) ? $update['message'] : "";

// $messageId = isset($message['message_id']) ? $message['message_id'] : "";

// $messageText = isset($message['text']) ? $message['text'] : "";
// $messageText = trim($messageText);
// $messageText = strtolower($messageText);
                        
// $date = isset($message['date']) ? $message['date'] : "";
                        
// $chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
// $username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
// $firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
// $lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";

// if (isset($message['text'])) {
//     $response = "Received a text message: " . $message['text'];
// } elseif (isset($message['audio'])) {
//     $response = "Received an audio message";
// } elseif (isset($message['document'])) {
//     $response = "Received a document message";
// // } elseif (isset($message['photo'])) {
//     // $response = "Received a photo message";
// } elseif (isset($message['sticker'])) {
//     $response = "Received a sticker message";
// } elseif (isset($message['video'])) {
//     $response = "Received a video message";
// } elseif (isset($message['voice'])) {
//     $response = "Received a voice message";
// } elseif (isset($message['contact'])) {
//     $response = "Received a contact message";
// } elseif (isset($message['location'])) {
//     $response = "Received a location message";
// } elseif (isset($message['venue'])) {
//     $response = "Received a venue message";
// } else {
//     $response = "I received a message?";
// }
                
                
// if (isset($message['photo'])) {
//     $fileAPI = "https://api.telegram.org/file/bot" . $botToken;
//     $url = $GLOBALS[botAPI] . '/getFile?file_id=' . $message['photo'][0]['file_id'];
//     $fileinfo = file_get_contents($url);
//     $fileinfo = json_decode($fileinfo, TRUE);                          
//     $filePath = $fileinfo['result']['file_path'];
//     $url = $GLOBALS[fileAPI] . '/' . $filePath;
                          
//     $imgData = "File size: " . $message['photo'][0]['file_size'] . "byte" . chr(10)
//         . "Width: " . $message['photo'][0]['width'] . "px" . chr(10)
//         . "Height: " . $message['photo'][0]['height'] . "px" . chr(10)
//         . "URL: " . $url;
// }

if($global_phone == false){
    if($number){
        global $link;
        $is = htmlspecialchars($ismi, ENT_QUOTES);
        $familia = htmlspecialchars($familiya, ENT_QUOTES);
        $sql_insert = "INSERT INTO zilla_users (chatid, name, surname, phone, username, role) VALUES ('{$chat_id}', '{$ismi}', '{$familia}', '{$number}','{$username}', '1')";
        mysqli_query($link, $sql_insert);
	$bot->sendMessage([
		'chat_id' => $chat_id,
		'text' => "Aссалому алайкум <b>${ism}</b>.",
		'parse_mode' => 'HTML',
		'reply_markup' => $keyboard_home,
	]);
        // $sql_up = "UPDATE sharainfo_dealer SET chatid='$chat_id' WHERE number=$number";
        // mysqli_query($link, $sql_up);
    }
}