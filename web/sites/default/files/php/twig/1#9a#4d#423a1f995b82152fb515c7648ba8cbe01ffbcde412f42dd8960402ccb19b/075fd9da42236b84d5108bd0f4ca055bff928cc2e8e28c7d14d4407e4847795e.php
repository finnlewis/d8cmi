<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_9a4d423a1f995b82152fb515c7648ba8cbe01ffbcde412f42dd8960402ccb19b extends Twig_Template
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
        // line 66
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"layout-container\">
      ";
        // line 68
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 69
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 70
            echo "        <h1 class=\"page-title\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 72
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
      ";
        // line 73
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 74
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true);
            echo "
      ";
        }
        // line 76
        echo "    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 80
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 81
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true);
            echo "</div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 88
        echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "
      ";
        // line 89
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 90
            echo "        <div id=\"help\">
          ";
            // line 91
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 94
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 95
            echo "        <ul class=\"action-links\">
          ";
            // line 96
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 99
        echo "      ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    </main>
    ";
        // line 101
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 102
            echo "      <footer id=\"footer\" role=\"contentinfo\" class=\"layout-column\">
          ";
            // line 103
            echo twig_drupal_escape_filter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
      </footer>
    ";
        }
        // line 106
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 106,  107 => 102,  99 => 99,  93 => 96,  90 => 95,  87 => 94,  72 => 88,  65 => 84,  56 => 81,  40 => 73,  29 => 70,  27 => 69,  67 => 54,  55 => 49,  92 => 46,  86 => 45,  78 => 90,  74 => 39,  69 => 37,  62 => 83,  57 => 50,  54 => 80,  50 => 32,  36 => 29,  28 => 25,  48 => 76,  43 => 46,  25 => 41,  23 => 68,  21 => 23,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 103,  105 => 101,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 91,  79 => 57,  76 => 89,  70 => 56,  64 => 36,  60 => 52,  51 => 48,  47 => 47,  42 => 74,  39 => 46,  35 => 72,  32 => 28,  26 => 42,  24 => 26,  19 => 66,);
    }
}
