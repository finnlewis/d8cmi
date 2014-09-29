<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_084014ff94adf7b8d42034f87c35732ef466ff4cdee5ae0479dd6ba842e6aa24 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_drupal_escape_filter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 32
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "head"), "html", null, true);
        echo "
    <title>";
        // line 33
        echo twig_drupal_escape_filter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true);
        echo "</title>
    ";
        // line 34
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "styles"), "html", null, true);
        echo "
    ";
        // line 35
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts"), "html", null, true);
        echo "
  </head>
  <body";
        // line 37
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_drupal_escape_filter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 42
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    ";
        // line 44
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 44,  58 => 42,  49 => 39,  44 => 37,  53 => 54,  41 => 48,  22 => 30,  20 => 38,  77 => 44,  68 => 41,  30 => 28,  59 => 51,  52 => 23,  46 => 21,  38 => 19,  33 => 46,  45 => 34,  37 => 25,  31 => 33,  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 16,  27 => 32,  67 => 54,  55 => 37,  92 => 46,  86 => 45,  78 => 90,  74 => 43,  69 => 37,  62 => 43,  57 => 50,  54 => 41,  50 => 32,  36 => 31,  28 => 25,  48 => 35,  43 => 46,  25 => 41,  23 => 27,  21 => 13,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 46,  79 => 57,  76 => 89,  70 => 56,  64 => 39,  60 => 52,  51 => 51,  47 => 50,  42 => 74,  39 => 35,  35 => 34,  32 => 29,  26 => 42,  24 => 14,  19 => 29,);
    }
}
