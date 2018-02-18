<?php

namespace App\Controller;


use App\Controller\AppController;

class WebsitesController extends AppController{
	public function message(){
		$this->viewBuilder()->layout('ajax');
		$message = $this->Websites->newEntity();
		 if ($this->request->is('post')) {
		 	
		 	$name = $this->request->data['name'];
		 	$email = $this->request->data['email'];
		 	$phone = $this->request->data['phone'];
		 	$msg = $this->request->data['message'];

		 	$headers = "From: ". EMAIL_REPLY_TO. "\r\n" .
			"CC:".EMAIL_CC;

		 	$to = EMAIL_TO;
		 	//$to = "bishnu99bca@gmail.com";
		 	$subject = $name." ".EMAIL_SUBJECT;
		 	$msg = "Hi Team, \r\n\r\n".ucwords($name)." says: \r\n\r\n".$msg."\r\n\r\nEmail: ".$email."\r\nPhone: ".$phone;


		 	if(mail($to, $subject, $msg, $headers)){echo "hi";}else{echo "not";}
        }
	}
}