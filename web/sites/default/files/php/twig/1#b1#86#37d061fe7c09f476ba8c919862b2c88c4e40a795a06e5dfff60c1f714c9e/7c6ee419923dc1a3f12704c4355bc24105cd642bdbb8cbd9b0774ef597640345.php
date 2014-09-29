<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_b18637d061fe7c09f476ba8c919862b2c88c4e40a795a06e5dfff60c1f714c9e extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>
        ";
                // line 18
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")) {
                    // line 19
                    echo "          <a href=\"";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 21
                    echo "          ";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "
        ";
                }
                // line 23
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 25,  52 => 23,  46 => 21,  38 => 19,  33 => 17,  45 => 28,  37 => 25,  31 => 22,  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 16,  27 => 21,  67 => 54,  55 => 49,  92 => 46,  86 => 45,  78 => 90,  74 => 39,  69 => 37,  62 => 83,  57 => 50,  54 => 80,  50 => 32,  36 => 18,  28 => 25,  48 => 76,  43 => 46,  25 => 41,  23 => 68,  21 => 13,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 91,  79 => 57,  76 => 89,  70 => 56,  64 => 36,  60 => 52,  51 => 48,  47 => 47,  42 => 74,  39 => 26,  35 => 72,  32 => 28,  26 => 42,  24 => 14,  19 => 12,);
    }
}
