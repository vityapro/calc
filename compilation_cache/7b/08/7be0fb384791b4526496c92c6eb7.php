<?php

/* form.html */
class __TwigTemplate_7b087be0fb384791b4526496c92c6eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("style_body.html");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"tcal.css\" />
<script type=\"text/javascript\" src=\"tcal.js\"></script>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<form name=\"test\" method=\"post\" action=\"index.php\">
";
        // line 11
        if (((isset($context["bla"]) ? $context["bla"] : null) == "stopudovo")) {
            // line 12
            echo "<p align=\"center\">Ошибка ввода данных!</p>

            <p align=\"center\"><b>Введіть дату в форматі гггг-мм-дд:</b></br>

                 <input type=\"hidden\" name=\"go\" value=\"add\" >
                 <input type=\"text\" size=\"40\" name=\"data\" align=\"center\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
            echo "\"></br>
            <b align=\"center\">Введіть витрачену сумму:</b></br>
                <input type=\"text\" size=\"40\" name=\"summa\" align=\"center\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["summa"]) ? $context["summa"] : null), "html", null, true);
            echo "\"></br></p>
    <p align=\"center\"><input type=\"submit\" value=\"Додати запис\">
        <input type=\"reset\" value=\"Очистити\"></p>
";
        } elseif (((isset($context["bla"]) ? $context["bla"] : null) == "edit")) {
            // line 23
            echo "    <p align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["eror"]) ? $context["eror"] : null), "html", null, true);
            echo "</p>
    <p align=\"center\"><b>Введіть дату в форматі гггг-мм-дд:</b></br>
        <input type=\"hidden\" name=\"go\" value='edit' >
        <input type=\"hidden\" name=\"id\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >

";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["arraydata"]) ? $context["arraydata"] : null), "list", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "            <input type=\"text\" size=\"40\" name=\"data\" align=\"center\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "data", array(), "array"), "html", null, true);
                echo "\"></br>
    <b align=\"center\">Введіть витрачену сумму:</b></br>
        <input type=\"text\" size=\"40\" name=\"summa\" align=\"center\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "summa", array(), "array"), "html", null, true);
                echo "\"></br>
    <p align=\"center\"><input type=\"submit\" value=\"Редактировать запись\">
        <input type=\"reset\" value=\"Очистити\"></p>
    </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        <p align=\"center\"><b>Введіть дату в форматі гггг-мм-дд:</b></br>
            <input type=\"text\" name=\"date\" class=\"tcal\" value=\"\" />
                <input type=\"hidden\" name=\"go\" value=\"add\" >
            <!--<input type=\"text\" size=\"40\" name=\"data\" align=\"center\" value=\"\">--></br>
    <b align=\"center\">Введіть витрачену сумму:</b></br>
            <input type=\"text\" size=\"40\" name=\"summa\" align=\"center\" value=\"\"></br></p>

<p align=\"center\"><input type=\"submit\" value=\"Додати запис\">
    <input type=\"reset\" value=\"Очистити\"></p>
";
        }
        // line 47
        echo "
</form>
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
        return array (  111 => 47,  99 => 37,  96 => 36,  85 => 31,  79 => 29,  75 => 28,  70 => 26,  63 => 23,  56 => 19,  51 => 17,  44 => 12,  42 => 11,  39 => 10,  36 => 9,  30 => 4,  27 => 3,);
    }
}
