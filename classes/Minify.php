<?php
/**
 * Minify website output using ob_start();
 * @param string $str HTML sourcode
 */
function MinifyHTML($str) {
    $protected_parts  = array('<pre>,</pre>', '<textarea>,</textarea>', '<script>,</script>', '<,>');
    $extracted_values = array();
    $i                = 0;
    foreach ($protected_parts as $part) {
        $finished      = false;
        $search_offset = $first_offset = 0;
        $end_offset    = 1;
        $startend      = explode(',', $part);
        if (count($startend) === 1) {
            $startend[1] = $startend[0];
        }
        $len0 = strlen($startend[0]);
        $len1 = strlen($startend[1]);
        while ($finished === false) {
            $first_offset = strpos($str, $startend[0], $search_offset);
            if ($first_offset === false) {
                $finished = true;
            } else {
                $search_offset        = strpos($str, $startend[1], $first_offset + $len0);
                $extracted_values[$i] = substr($str, $first_offset + $len0, $search_offset - $first_offset - $len0);
                $str                  = substr($str, 0, $first_offset + $len0) . '$$#' . $i . '$$' . substr($str, $search_offset);
                $search_offset += $len1 + strlen((string) $i) + 5 - strlen($extracted_values[$i]);
                ++$i;
            }
        }
    }
    $str     = preg_replace("/\s/", " ", $str);
    $str     = preg_replace("/\s{2,}/", " ", $str);
    $replace = array('> <' => '><', ' >' => '>', '< ' => '<', '</ ' => '</');
    $str     = str_replace(array_keys($replace), array_values($replace), $str);
    for ($d = 0; $d < $i; ++$d) {
        $str = str_replace('$$#' . $d . '$$', $extracted_values[$d], $str);
    }
    return $str;
}