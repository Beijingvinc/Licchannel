<?php
function bbcode_to_html($text) {
    $bbcode = [
        '/\[b\](.*?)\[\/b\]/is' => '<strong>$1</strong>',
        '/\[i\](.*?)\[\/i\]/is' => '<em>$1</em>',
        '/\[u\](.*?)\[\/u\]/is' => '<u>$1</u>',
        '/\[s\](.*?)\[\/s\]/is' => '<s>$1</s>',
        '/\[quote\](.*?)\[\/quote\]/is' => '<blockquote>$1</blockquote>',
        '/\[url=(.*?)\](.*?)\[\/url\]/is' => '<a href="$1" target="_blank" rel="noopener">$2</a>',
        '/\[url\](.*?)\[\/url\]/is' => '<a href="$1" target="_blank" rel="noopener">$1</a>',
        '/\[code\](.*?)\[\/code\]/is' => '<pre>$1</pre>',
    ];
    foreach ($bbcode as $pattern => $replace) {
        $text = preg_replace($pattern, $replace, $text);
    }
    // Convert line breaks to <br>
    $text = nl2br($text);
    return $text;
} 