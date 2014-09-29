<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_2885fb6b082522332b1a2353b2ebca45ec8a9da22c937dbe98e0a2926707620f extends Twig_Template
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
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  <div class=\"messages messages--";
            echo twig_drupal_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 28
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 29
                echo "      <div role=\"alert\">
    ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 32
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 34
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 35
                echo "        <ul class=\"messages__list\">
          ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </ul>
      ";
            } else {
                // line 41
                echo "        ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0), "html", null, true);
                echo "
      ";
            }
            // line 43
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 44,  68 => 41,  30 => 28,  59 => 25,  52 => 23,  46 => 21,  38 => 19,  33 => 17,  45 => 34,  37 => 25,  31 => 22,  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 16,  27 => 21,  67 => 54,  55 => 37,  92 => 46,  86 => 45,  78 => 90,  74 => 43,  69 => 37,  62 => 83,  57 => 50,  54 => 80,  50 => 32,  36 => 31,  28 => 25,  48 => 35,  43 => 46,  25 => 41,  23 => 27,  21 => 13,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 46,  79 => 57,  76 => 89,  70 => 56,  64 => 39,  60 => 52,  51 => 36,  47 => 47,  42 => 74,  39 => 32,  35 => 72,  32 => 29,  26 => 42,  24 => 14,  19 => 26,);
    }
}
