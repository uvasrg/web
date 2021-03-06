<?php 
$site= htmlspecialchars($_REQUEST["site"]);
$output = "";
exec('openssl s_client -connect '. $site.':443 < /dev/null',$output);
echo "<br>";
$certChain = array();
echo '<script src="../js/certLookup.js"></script>';
$currentCert = "";
if(!$output){
	//try with www.
	exec('openssl s_client -connect www.'. $site.':443 < /dev/null',$output);
}
if($output){
	echo "<h2>Certificate Information for ". $site."</h2>";
	foreach($output as $line){
		if(strpos($line,'CN=') !== false){
			$cert = explode('CN=', $line);
			$cert = explode('/',$cert[1]);
			if($cert[0] != $currentCert){
				array_push($certChain, $cert[0]);
				$currentCert = $cert[0];
			}
		}
		if(strpos($line,'END CERTIFICATE') !== false){
			$certChain = array_reverse($certChain);
			$num = count($certChain);
			echo "<b>Certificate Hierarchy</b> Length of <span id='num'>" . $num . "</span><br>";
			$start = "-";
			foreach($certChain as $cert){
				echo $start .$cert . "<br>";
				$start = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $start;
			}
			echo "<br>";
		}
		if(strpos($line,'Cipher    :') !== false){
			$cipher = explode(":", $line);
			$cipher = str_replace("-",", ",$cipher[1]);
			echo "<b>Ciphers supported:</b> <span id='ciphers'>". $cipher . "</span><br>";
			echo "<br>";
		}
		if(strpos($line,'Protocol') !== false){
			$protocol = explode(":", $line);
			echo  "<b>Version of SSL/TLS:</b> <span id='version'>". $protocol[1] . "</span><br>";
			echo "<br>";
		}
	}
}
else{
	echo "<h3 style='text-align:center;'>Certificate Information for ". $site." not found</h3>";
}
?>