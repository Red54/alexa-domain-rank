<?php

$f = fopen('global.txt', 'w');

function process($u)
{
	$a = file_get_contents($u);
	preg_match_all('/n=(.*?)"/', $a, $b);
	foreach($b[1] as $i)
	{
		$d = strstr($i, '.');
		fwrite($GLOBALS['f'], $i."\t".$d."\n");
	}
}

process('http://alexa.chinaz.com/Global/');

for($i = 2; $i < 21; ++$i)
{
	process('http://alexa.chinaz.com/Global/index_'.$i.'.html');
}

fclose($f);
