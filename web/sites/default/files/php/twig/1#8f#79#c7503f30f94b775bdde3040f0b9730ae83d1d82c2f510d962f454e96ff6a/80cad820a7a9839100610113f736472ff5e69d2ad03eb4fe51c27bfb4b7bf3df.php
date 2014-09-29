<?php

/* core/modules/system/templates/menu-local-task.html.twig */
class __TwigTemplate_8f79c7503f30f94b775bdde3040f0b9730ae83d1d82c2f510d962f454e96ff6a extends Twig_Template
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
        echo "<li";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  37 => 25,  31 => 22,  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 70,  27 => 21,  67 => 54,  55 => 49,  92 => 46,  86 => 45,  78 => 90,  74 => 39,  69 => 37,  62 => 83,  57 => 50,  54 => 80,  50 => 32,  36 => 29,  28 => 25,  48 => 76,  43 => 46,  25 => 41,  23 => 68,  21 => 19,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 91,  79 => 57,  76 => 89,  70 => 56,  64 => 36,  60 => 52,  51 => 48,  47 => 47,  42 => 74,  39 => 26,  35 => 72,  32 => 28,  26 => 42,  24 => 26,  19 => 18,);
    }
}
