<?php

/* style_body.html */
class __TwigTemplate_2258131c6b70dab6abcefc7387f44d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head >
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body background=\"img/money.jpg\">
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "</div>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "style_body.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  50 => 6,  44 => 4,  39 => 6,  33 => 11,  31 => 10,  27 => 8,  25 => 4,  20 => 1,  59 => 13,  51 => 11,  47 => 5,  43 => 9,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
