<?php

$f = fopen('cn500.txt', 'w');

function process($u)
{
	$options = array(
		'http'=>array(
			'header'=>"User-Agent: Mozilla/5.0\r\n"
		)
	);
	$context = stream_context_create($options);
	$a = file_get_contents($u, false, $context);
	preg_match_all('|in"><a href="http://www.alexa.cn/(.*?)"|', $a, $b);
	foreach($b[1] as $i)
	{
		$d = strstr($i, '.');
		fwrite($GLOBALS['f'], $i."\t".$d."\n");
	}
}

for($i = 1; $i < 26; ++$i)
{
	process('http://www.alexa.cn/siterank/'.$i);
}

fclose($f);
