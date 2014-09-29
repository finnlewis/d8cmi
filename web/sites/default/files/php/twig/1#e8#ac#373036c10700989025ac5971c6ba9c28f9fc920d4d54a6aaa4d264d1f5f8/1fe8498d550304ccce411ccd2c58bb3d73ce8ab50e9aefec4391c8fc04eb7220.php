<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_e8ac373036c10700989025ac5971c6ba9c28f9fc920d4d54a6aaa4d264d1f5f8 extends Twig_Template
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
        // line 38
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 39
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 40
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 41
                    echo "<";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"), "html", null, true);
                    echo ">";
                } else {
                    // line 43
                    echo "<h2";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 46
            echo "<ul";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "<li";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "html", null, true);
                echo ">";
                // line 49
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                    // line 50
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
                } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes")) {
                    // line 52
                    echo "<span";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "</span>";
                } else {
                    // line 54
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                }
                // line 56
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 54,  55 => 49,  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  62 => 35,  57 => 50,  54 => 33,  50 => 32,  36 => 29,  28 => 27,  48 => 38,  43 => 46,  25 => 41,  23 => 40,  21 => 39,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 68,  105 => 65,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 58,  79 => 57,  76 => 58,  70 => 56,  64 => 36,  60 => 52,  51 => 48,  47 => 47,  42 => 47,  39 => 46,  35 => 43,  32 => 28,  26 => 42,  24 => 26,  19 => 38,);
    }
}
