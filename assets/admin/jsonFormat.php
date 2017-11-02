<?php
class json_format
{
	function jsonpp($json, $istr='  ')
	{
		$result = '';
		for($p=$q=$i=0; isset($json[$p]); $p++)
		{
			$json[$p] == '"' && ($p<0?$json[$p-1]:'') != '\\' && $q=!$q;
			if(strchr('}]', $json[$p]) && !$q && $i--)
			{
				strchr('{[', $json[$p-1]) || $result .= "\n".str_repeat($istr, $i);
			}
			$result .= $json[$p];
			if(strchr(',{[', $json[$p]) && !$q)
			{
				$i += strchr('{[', $json[$p])===FALSE?0:1;
				strchr('}]', $json[$p+1]) || $result .= "\n".str_repeat($istr, $i);
			}
		}
		return $result;
	}
}	
$jobj=new json_format();
?>