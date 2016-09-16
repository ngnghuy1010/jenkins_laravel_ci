<?php
namespace App\Service;

class MarkdownService
{

    function handle($input)
    {
        $title_character = explode(" ", $input);
        $text = $title_character[1];
        $markdownWithHtml = "";
        
        $list = explode("\n", $input);
        
        if ($title_character[0] === "#") {
            $markdownWithHtml = "<h2>$text</h2>";
        }
        if ($title_character[0] === "##") {
            $markdownWithHtml = "<h3>$text</h3>";
        }
        if (strpos($list[0], '-') !== false) {
            $st = '<ul>';
            print_r($list);
            foreach ($list as $l) {
                $li = explode("-", $l);
                $st .= "\n<li>$li</li>";
            }
            $st .= '\n<ul>';
            $markdownWithHtml = $st;
        }
        if (strpos($list[0], '1.') !== false) {
            $st = '<ol>';
            foreach ($list as $l) {
                $li = explode("1.", $l);
                $st .= "\n<li>$li</li>";
            }
            $st .= '\n<ol>';
            $markdownWithHtml = $st;
        }
        return $markdownWithHtml;
    }
}