<?php
	class Mail{
		public $from_email;
		function __construct(){
			$this->from_email = FROM_EMAIL;
		}

		public function sendRawMail($to, $subject, $message){
			$message = '<html><head><title>'.$subject.'</title></head><body>'.$message.'</body></html>';

			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';

			// Additional headers
			$headers[] = 'To: Subscription <'.$to.'>';
			$headers[] = 'From: Vanja <'.$this->from_email.'>';
		
			mail($to, $subject, $message, implode("\r\n", $headers));

			return true;
		}
	}
?>