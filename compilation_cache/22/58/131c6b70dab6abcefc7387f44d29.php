<?php

/* style_body.html */
class __TwigTemplate_2258131c6b70dab6abcefc7387f44d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
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
        // line 5
        echo "    <meta http-equiv=\"Content-Type\" content=\"application/xhtml+xml; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


</head>
<body background=\"img/money.jpg\">
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "</div>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "style_body.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 6,  46 => 4,  40 => 12,  38 => 11,  30 => 6,  27 => 5,  25 => 4,  20 => 1,);
    }
}
