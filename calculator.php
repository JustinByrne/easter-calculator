function gaussEaster($year) {
	$a = $year % 19;
	$b = $year % 4;
	$c = $year % 7;
	$p = floor($year / 100);
	
	$q = floor((13 + 8 + $p) / 25);
	$m = floor(15 - $q + $p - floor($p / 4)) % 30;
	$n = floor(4 + $p - floor($p / 4)) % 7;
	$d = floor(19 * $a + $m) % 30;
	$e = floor(2 * $b + 4 * $c + 6 * $d + $n) % 7;
	
	$days = floor(22 + $d + $e);
	
	if ($d == 29 && $e == 6) {
		return $year.'-04-19';
	}
	
	if ($d == 28 && $e == 6) {
		return $year.'-04-18';
	}
	
	if ($days > 31) {
		return $year.'-04-'.($days - 31);
	}
	
	return $year.'-03-'.$days;
}
