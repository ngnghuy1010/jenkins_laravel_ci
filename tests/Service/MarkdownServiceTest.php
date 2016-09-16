<?php
use App\Service\MarkdownService;

class MarkdownServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testOneH2()
    {
        $text = new MarkdownService();
        var_dump($text->handle("# title"));
        $this->assertEquals('<h2>title</h2>', $text->handle("# title"));
    }

    public function testOneH3()
    {
        $text = new MarkdownService();
        $this->assertEquals('<h3>title</h3>', $text->handle("## title"));
    }

    public function testListUl()
    {
        $text = new MarkdownService();
        echo strpos('- list1', '-');
        $this->assertEquals('<ul>\n<li>list1</li>\n<li>list2</li>\n</ul>', $text->handle("- list1 \n - list2"));
    }

    public function testListOl()
    {
        $text = new MarkdownService();
        $this->assertEquals('<ol>\n<li>list1</li>\n<li>list2</li>\n</ol>', $text->handle("1. list1 \n 1. list2"));
    }

    public function testNestedLists()
    {
        $text = new MarkdownService();
        $this->assertEquals('<h2>Text</h2>', $text->handle("- list1 \n -list2 \n\t - nested list1\n\t - nested list2"));
    }
}