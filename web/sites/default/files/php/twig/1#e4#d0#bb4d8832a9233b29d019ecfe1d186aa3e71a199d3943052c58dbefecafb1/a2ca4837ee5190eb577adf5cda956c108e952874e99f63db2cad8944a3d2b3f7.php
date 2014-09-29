<?php

/* core/modules/system/templates/container.html.twig */
class __TwigTemplate_e4d0bb4d8832a9233b29d019ecfe1d186aa3e71a199d3943052c58dbefecafb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  62 => 35,  57 => 34,  54 => 33,  50 => 32,  36 => 29,  28 => 27,  48 => 38,  43 => 37,  25 => 32,  23 => 31,  21 => 30,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 68,  105 => 65,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 58,  79 => 57,  76 => 56,  70 => 55,  64 => 36,  60 => 51,  51 => 49,  47 => 31,  42 => 47,  39 => 46,  35 => 34,  32 => 28,  26 => 42,  24 => 26,  19 => 18,);
    }
}
