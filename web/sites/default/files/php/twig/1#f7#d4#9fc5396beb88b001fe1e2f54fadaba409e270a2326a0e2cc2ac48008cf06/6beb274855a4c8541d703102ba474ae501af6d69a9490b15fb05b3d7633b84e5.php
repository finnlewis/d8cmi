<?php

/* core/modules/system/templates/menu-tree.html.twig */
class __TwigTemplate_f7d49fc5396beb88b001fe1e2f54fadaba409e270a2326a0e2cc2ac48008cf06 extends Twig_Template
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
        if ((isset($context["tree"]) ? $context["tree"] : null)) {
            // line 30
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 31
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 32
                    echo "<";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo ">";
                } else {
                    // line 34
                    echo "<h2";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 37
            echo "<ul";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    ";
            // line 38
            echo twig_drupal_escape_filter($this->env, (isset($context["tree"]) ? $context["tree"] : null), "html", null, true);
            echo "
  </ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 38,  43 => 37,  25 => 32,  23 => 31,  21 => 30,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 68,  105 => 65,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 58,  79 => 57,  76 => 56,  70 => 55,  64 => 53,  60 => 51,  51 => 49,  47 => 48,  42 => 47,  39 => 46,  35 => 34,  32 => 44,  26 => 42,  24 => 16,  19 => 29,);
    }
}
