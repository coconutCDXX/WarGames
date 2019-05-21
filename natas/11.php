
<?php
$cookie = "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw";

function xor_encrypt2($in, $in2) {
    // $key = echo $out;
	$key = "qw8j";
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}

function xor_encrypt($in) {
    $key = json_encode(array( "showpassword"=>"no", "bgcolor"=>"#ffffff"));
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}
$out = xor_encrypt(base64_decode($cookie));
	echo $out;
	echo "\r\n";
	echo "qw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jq";
	echo "\r\n";
	echo $in = base64_encode(xor_encrypt2(json_encode(array( "showpassword"=>"yes", "bgcolor"=>"#ffffff")), $out));
?>