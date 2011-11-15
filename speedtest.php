<html><body style="margin: 0pt; padding: 0pt;">
<?php
exec("/usr/bin/wget -O /dev/null http://cachefly.cachefly.net/1mb.test 2>&1",$output);
end($output);
$a=prev($output);
if ($start=strpos($a, '(')) 
if ($end=strpos(substr($a,$start+1), ')')) {
$b = substr($a, $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error running speedtest';
?>
</body></html>