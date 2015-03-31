<?php

/* index.html */
class __TwigTemplate_fb5aa1cd1261d08d02db6f7dc314d9ab extends Twig_Template
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
        echo "<h1 align=\"center\">Звіт по витратах</h1>

<table align=\"center\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["payments"]) ? $context["payments"] : null), "list", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "data", array(), "array"), "html", null, true);
            echo "</td>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "summa", array(), "array"), "html", null, true);
            echo "</td>
        <td><button  onclick=\"window.location.href='index.php?id=";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array(), "array"), "html", null, true);
            echo "&go=delete'\"><img src=\"img/del.gif\" alt=\"Del\"style=\"vertical-align: middle\">  </button></td>
        <td><button  onclick=\"window.location.href='index.php?id=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array(), "array"), "html", null, true);
            echo "&go=zapr'\"><img src=\"img/edit.gif\" alt=\"Del\"style=\"vertical-align: middle\">  </button></td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    <tr><td>";
        echo twig_escape_filter($this->env, (isset($context["sum"]) ? $context["sum"] : null), "html", null, true);
        echo "</td></tr>
</table>
</br></br></br>
<table align=\"center\"><tr><td><button   onclick=\"window.location.href='index.php?go=form'\">
    <img src=\"img/add.png\" alt=\"Add\" style=\"vertical-align: middle\">Додати новий запис </button></td></tr></table>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 11,  47 => 10,  43 => 9,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
