<?php
 $orig_cookie = base64_decode('ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw');


 function xor_encrypt2() {
	 $text = json_encode(array( "showpassword"=>"yes", "bgcolor"=>"#ffffff"));
	 $key = "qw8J";
	 $outText = '';
	 // Iterate through each character
	 for($i=0;$i<strlen($text);$i++) {
		 $outText .= $text[$i] ^ $key[$i % strlen($key)];
	 }
	 return $outText;
 }


 function xor_encrypt($in) {
   $text = $in;
   $key = json_encode(array( "showpassword"=>"no", "bgcolor"=>"#ffffff"));
   $outText = '';
   // Iterate through each character
   for($i=0;$i<strlen($text);$i++) {
   $outText .= $text[$i] ^ $key[$i % strlen($key)];
   }
   return $outText;
 }
 print xor_encrypt($orig_cookie);


echo "\r\n";
print base64_encode(xor_encrypt2());
?>

