<?php

/* partials/layout.html.twig */
class __TwigTemplate_df5b49f569fb935ea534688e97f8e09e11774aed619118174c518a9079393f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["item_col"] = (((isset($context["show_sidebar"]) ? $context["show_sidebar"] : null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = (((isset($context["show_sidebar"]) ? $context["show_sidebar"] : null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "param", array(0 => "chromeless"), "method") || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 6
            echo "  ";
            $context["item_col"] = "col-12";
            // line 7
            echo "  ";
            $context["sidebar_col"] = "col-12";
        }
        // line 9
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 11
        echo (isset($context["item_col"]) ? $context["item_col"] : null);
        echo " extra-spacing\">
        ";
        // line 12
        $this->displayBlock('item', $context, $blocks);
        // line 13
        echo "    </div>
    ";
        // line 15
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 16
            echo "      ";
            if ((isset($context["show_sidebar"]) ? $context["show_sidebar"] : null)) {
                // line 17
                echo "      <div id=\"sidebar\" class=\"column ";
                echo (isset($context["sidebar_col"]) ? $context["sidebar_col"] : null);
                echo "\">
          ";
                // line 18
                $this->displayBlock('sidebar', $context, $blocks);
                // line 19
                echo "      </div>
      ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "</div>
";
    }

    // line 12
    public function block_item($context, array $blocks = array())
    {
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 12,  70 => 22,  67 => 21,  63 => 19,  61 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 13,  45 => 12,  41 => 11,  37 => 9,  33 => 7,  30 => 6,  28 => 5,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

{# check content display flag - hibbittsdesign.org #}
{% if grav.uri.param('chromeless') or theme_var('chromeless.enabled') %}
  {% set item_col = 'col-12' %}
  {% set sidebar_col = 'col-12' %}
{% endif %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
      {% if show_sidebar %}
      <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
          {% block sidebar %}{% endblock %}
      </div>
      {% endif %}
    {% endif %}
</div>
", "partials/layout.html.twig", "/Users/jerrybrahm/repos/grav/user/themes/quark-open-publishing/templates/partials/layout.html.twig");
    }
}
