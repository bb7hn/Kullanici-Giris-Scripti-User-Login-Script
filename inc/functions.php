<?php
	function sifreleme1($input)
	{
		return md5($input);
	}
	function sifreleme2($input)
	{
		return sha1($input);
	}
	function temizle($data) 
	{
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace("%","",$data);
    $data = str_replace("'"," ",$data);
    $data = str_replace("chr(34)"," ",$data);
    $data = str_replace("chr(39)"," ",$data);
    $data =str_replace("="," ",$data);
    $data =str_replace("&"," ",$data);
    $data =str_replace("¿"," ",$data);
    return $data;
	}
    function sifreolustur()
    {
        $karakterler = "0123456789!@#$%^&*()_+".
            "abcdefghijklmnopqrstuvwxyz".
            "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $sfr = "";
        while(strlen($sfr) < 8)
        {
            $sfr .= substr($karakterler, (rand()% strlen($karakterler)), 1);
        }
        return($sfr);
    }

?>