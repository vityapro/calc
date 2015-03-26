<?php

/* form.html */
class __TwigTemplate_7b087be0fb384791b4526496c92c6eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("style_body.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "style_body.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<form name=\"test\" method=\"post\" action=\"index.php\">

   <p align=\"center\"><b>Введіть дату в форматі гггг-мм-дд:</b></br>
       <input type=\"hidden\" name=\"go\" value=\"add\" >
       <input type=\"text\" size=\"40\" name=\"data\" align=\"center\" ></br>

       <b align=\"center\">Введіть витрачену сумму:</b></br>
       <input type=\"text\" size=\"40\" name=\"summa\" align=\"center\"></br>
       </p>

   <p align=\"center\"><input type=\"submit\" value=\"Додати запис\">
      <input type=\"reset\" value=\"Очистити\"></p>';
   </form>';
";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
