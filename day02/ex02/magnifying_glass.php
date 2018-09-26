#!/usr/bin/env php
<?php
    $file = fopen($argv[1], "r");
    $str = file_get_contents($argv[1]);
    $i = 0;
    $newpage = preg_replace_callback("/(<.*?title=\")(.*?)(\">)/si", function($matches)
    {
        $matches[2] = strtoupper($matches[2]);
        $newstr = $matches[1].$matches[2].$matches[3];
        return($newstr);
    }, $str);
    $newpage = preg_replace_callback("/(<a.*?>)(.*?)((<\/a>)|(<img.*?>))/si", function($matches)
    {
        $matches[2] = strtoupper($matches[2]);
        $newstr = $matches[1].$matches[2].$matches[3];
        return($newstr);
    }, $newpage);
    $newpage = preg_replace_callback("/(<span.*?>)(.*?)((<\/span)|(<div))/si", function($matches)
    {
        $matches[2] = strtoupper($matches[2]);
        $newstr = $matches[1].$matches[2].$matches[3];
        return($newstr);
    }, $newpage);
     $newpage = preg_replace_callback("/(<div.*?>)(.*?)(<\/div)/si", function($matches)
    {
        $matches[2] = strtoupper($matches[2]);
        $newstr = $matches[1].$matches[2].$matches[3];
        return($newstr);
    }, $newpage);
    echo "$newpage";
?>///need to add bad argument validation
	

