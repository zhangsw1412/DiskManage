<?php

//用来输出变量调试的函数
function p($array)
{
	dump($array,true,'<pre>',0);
}

function sendMail($to,$name,$subject='',$body='',$attachment=null)
{
	$config=C('EMAIL');
	vendor('PHPMailer.class#phpmailer');
	vendor('PHPMailer.class#smtp');
	$mail=new PHPMailer();
	$mail->CharSet='UTF-8';
	$mail->IsSMTP();
	$mail->SMTPDebug=0;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host=$config['SMTP_HOST'];
	$mail->Port=$config['SMTP_PORT'];
	$mail->Username=$config['SMTP_USER'];
	$mail->Password=$config['SMTP_PASS'];
	$mail->From=$config['FROM_EMAIL'];
	$mail->FromName=empty($name)?$config['FROM_NAME']:$name;
	$replyEmail=$config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];
	$replyName=$config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];
	$mail->AddReplyTo($replyEmail,$replyName);
	$mail->Subject=$subject;
	$mail->AltBody="为了查看该邮件，请切换到支持HTML的邮件客户端";
	$mail->MsgHTML($body);
	$mail->AddAddress($to);
	if(is_array($attachment))
	{
		foreach($attachment as $file)
		{
			is_file($file)&&$mail->AddAttachment($file);
		}
	}

	return $mail->Send()?true:$mail->ErrorInfo;
}
