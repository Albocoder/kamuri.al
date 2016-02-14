<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<form action="securityGenerator.php" method="POST">
		<input type="text" name="password"/><br/>
		<input type="submit" value="Generate Hash"/>
	</form>
	<hr>
	<textarea rows="2" cols="105"><?php
		if(isset($_POST['password'])&& !empty($_POST['password'])){
			function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false)
			{
			    $algorithm = strtolower($algorithm);
			    if(!in_array($algorithm, hash_algos(), true))
			        trigger_error('PBKDF2 ERROR: Invalid hash algorithm.', E_USER_ERROR);
			    if($count <= 0 || $key_length <= 0)
			        trigger_error('PBKDF2 ERROR: Invalid parameters.', E_USER_ERROR);

			    if (function_exists("hash_pbkdf2")) {
			        // The output length is in NIBBLES (4-bits) if $raw_output is false!
			        if (!$raw_output) {
			            $key_length = $key_length * 2;
			        }
			        return hash_pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output);
			    }

			    $hash_length = strlen(hash($algorithm, "", true));
			    $block_count = ceil($key_length / $hash_length);

			    $output = "";
			    for($i = 1; $i <= $block_count; $i++) {
			        // $i encoded as 4 bytes, big endian.
			        $last = $salt . pack("N", $i);
			        // first iteration
			        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
			        // perform the other $count - 1 iterations
			        for ($j = 1; $j < $count; $j++) {
			            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
			        }
			        $output .= $xorsum;
			    }

			    if($raw_output)
			        return substr($output, 0, $key_length);
			    else
			        return bin2hex(substr($output, 0, $key_length));
			}
			

			echo $password = pbkdf2('sha512',$_POST['password'],'',1000,50);
		}
	?></textarea>
	
</html>
