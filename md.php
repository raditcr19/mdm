<?php
function asw() {
                $no = rand(0,10);
                $body = 'date=10-11-2018&username=Radit&type=SpinCredit&points='.$no.'&';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ibucks.avjtrickz.com/get/award.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-J320G Build/LMY47V)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	

}
echo "JUMLAH : ";
$jum = trim(fgets(STDIN));
echo "Delay : ";
$wait = trim(fgets(STDIN));
for($a=0;$a<$jum;$a++){
sleep($wait);
$oce = asw($a);
echo "".$oce."\n";
}
?>
