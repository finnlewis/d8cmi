<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_388132f12c49001178778c845cd64368117bb156352bc97d297feda8418407fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 38
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 43
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 44
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 45
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 46
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 48
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  <div";
        // line 50
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
        echo ">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "  </div>
</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 54,  41 => 48,  22 => 43,  20 => 38,  77 => 44,  68 => 41,  30 => 28,  59 => 51,  52 => 23,  46 => 21,  38 => 19,  33 => 46,  45 => 34,  37 => 25,  31 => 45,  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 16,  27 => 44,  67 => 54,  55 => 37,  92 => 46,  86 => 45,  78 => 90,  74 => 43,  69 => 37,  62 => 52,  57 => 50,  54 => 80,  50 => 32,  36 => 31,  28 => 25,  48 => 35,  43 => 46,  25 => 41,  23 => 27,  21 => 13,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 46,  79 => 57,  76 => 89,  70 => 56,  64 => 39,  60 => 52,  51 => 51,  47 => 50,  42 => 74,  39 => 32,  35 => 72,  32 => 29,  26 => 42,  24 => 14,  19 => 26,);
    }
}
