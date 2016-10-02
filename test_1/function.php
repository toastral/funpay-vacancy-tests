<?php
function parseSms($content)
{
    $a_res = [];
    if(preg_match('/([\d]{14})/',		$content,	$patt))	$a_res['account']	= $patt[1];
    if(preg_match('/\s([\d]{4})(\s|$)/',$content,	$patt))	$a_res['code']		= $patt[1];
    if(preg_match('/(\d+,\d+)/',		$content,	$patt))	$a_res['amount']	= $patt[1];
    return $a_res;
}
?>