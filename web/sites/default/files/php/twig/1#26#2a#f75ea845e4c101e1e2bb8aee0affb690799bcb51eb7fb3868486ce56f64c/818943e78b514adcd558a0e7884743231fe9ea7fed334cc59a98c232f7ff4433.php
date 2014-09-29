<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_262af75ea845e4c101e1e2bb8aee0affb690799bcb51eb7fb3868486ce56f64c extends Twig_Template
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . drupal_html_class((isset($context["region"]) ? $context["region"] : null))));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 25
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 54,  55 => 49,  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  62 => 35,  57 => 50,  54 => 33,  50 => 32,  36 => 29,  28 => 25,  48 => 38,  43 => 46,  25 => 41,  23 => 24,  21 => 23,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 68,  105 => 65,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 58,  79 => 57,  76 => 58,  70 => 56,  64 => 36,  60 => 52,  51 => 48,  47 => 47,  42 => 47,  39 => 46,  35 => 43,  32 => 28,  26 => 42,  24 => 26,  19 => 18,);
    }
}
