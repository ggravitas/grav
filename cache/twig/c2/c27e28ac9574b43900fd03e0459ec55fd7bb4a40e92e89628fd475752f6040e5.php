<?php

/* partials/blog-list-item.html.twig */
class __TwigTemplate_c22a2936c692061d93ffcae08649fb3428924d5e5487db206f685bafd42aa5e4 extends Twig_Template
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
        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hide_from_post_list", array()) != true)) {
            // line 2
            echo "  <div class=\"card\">
      ";
            // line 3
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            // line 4
            echo "      ";
            if (((isset($context["image"]) ? $context["image"] : null) && ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "header_image", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())))) {
                // line 5
                echo "      <div class=\"card-image\">

        ";
                // line 8
                echo "          ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_credit", array())) {
                    // line 9
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_credit", array());
                    // line 10
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_creditlink", array());
                    // line 11
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_alt_text", array());
                    // line 12
                    echo "          ";
                } elseif ($this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "meta", array()), "header_image_credit", array())) {
                    // line 13
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "meta", array()), "header_image_credit", array());
                    // line 14
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "meta", array()), "header_image_creditlink", array());
                    // line 15
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "meta", array()), "header_image_alt_text", array());
                    // line 16
                    echo "          ";
                }
                // line 17
                echo "          ";
                if ((isset($context["image_credit"]) ? $context["image_credit"] : null)) {
                    // line 18
                    echo "            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              ";
                    // line 19
                    if ((isset($context["image_creditlink"]) ? $context["image_creditlink"] : null)) {
                        // line 20
                        echo "                Image: <a class=\"newwindow external-link\" href=\"";
                        echo (isset($context["image_creditlink"]) ? $context["image_creditlink"] : null);
                        echo "\">
                ";
                        // line 21
                        echo (isset($context["image_credit"]) ? $context["image_credit"] : null);
                        echo "</a></span>
                <a href=\"";
                        // line 22
                        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropZoom", array(0 => 1400, 1 => 400), "method"), "html", array());
                        echo "</a>
              ";
                    } else {
                        // line 24
                        echo "                Image: ";
                        echo (isset($context["image_credit"]) ? $context["image_credit"] : null);
                        echo "</span>
                <a href=\"";
                        // line 25
                        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropZoom", array(0 => 1400, 1 => 400), "method"), "html", array());
                        echo "</a>
              ";
                    }
                    // line 27
                    echo "            </div>
          ";
                } else {
                    // line 29
                    echo "            <a href=\"";
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropZoom", array(0 => 1400, 1 => 400), "method"), "html", array());
                    echo "</a>
          ";
                }
                // line 31
                echo "
      </div>
      ";
            }
            // line 34
            echo "      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              ";
            // line 36
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 36)->display($context);
            // line 37
            echo "      </div>
          <div class=\"card-title\">
          ";
            // line 39
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 39)->display(array_merge($context, array("title_level" => "h5")));
            // line 40
            echo "          </div>
      </div>
      <div class=\"card-body\">
          ";
            // line 43
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 44
                echo "              ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
                echo "
              <br>
              <a href=\"";
                // line 46
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
                echo "\" class=\"btn btn-primary\">Continue Reading</a>
          ";
            } else {
                // line 48
                echo "              ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
          ";
            }
            // line 50
            echo "      </div>
      <div class=\"card-footer\">
          ";
            // line 52
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 52)->display($context);
            // line 53
            echo "      </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  155 => 52,  151 => 50,  145 => 48,  138 => 46,  132 => 44,  130 => 43,  125 => 40,  123 => 39,  119 => 37,  117 => 36,  113 => 34,  108 => 31,  100 => 29,  96 => 27,  89 => 25,  84 => 24,  77 => 22,  73 => 21,  68 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.hide_from_post_list != true %}
  <div class=\"card\">
      {% set image = page.media.images|first %}
      {% if image and ((page.header.header_image is not defined) or (page.header.header_image))  %}
      <div class=\"card-image\">

        {# support image credit tag with optional image meta file - hibbittsdesign.org #}
          {% if page.header.header_image_credit %}
            {% set image_credit = page.header.header_image_credit %}
            {% set image_creditlink = page.header.header_image_creditlink %}
            {% set image_alt_text = page.header.header_image_alt_text %}
          {% elseif header_image_media.meta.header_image_credit  %}
            {% set image_credit = header_image_media.meta.header_image_credit %}
            {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
            {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
          {% endif %}
          {% if image_credit %}
            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              {% if image_creditlink %}
                Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
                {{ image_credit }}</a></span>
                <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html }}</a>
              {% else %}
                Image: {{ image_credit }}</span>
                <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html }}</a>
              {% endif %}
            </div>
          {% else %}
            <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html }}</a>
          {% endif %}

      </div>
      {% endif %}
      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              {% include 'partials/blog/date.html.twig' %}
      </div>
          <div class=\"card-title\">
          {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
          </div>
      </div>
      <div class=\"card-body\">
          {% if page.summary != page.content %}
              {{ page.summary }}
              <br>
              <a href=\"{{ page.url }}\" title=\"{{ page.title }}\" class=\"btn btn-primary\">Continue Reading</a>
          {% else %}
              {{ page.content }}
          {% endif %}
      </div>
      <div class=\"card-footer\">
          {% include 'partials/blog/taxonomy.html.twig' %}
      </div>
  </div>
{% endif %}
", "partials/blog-list-item.html.twig", "/Users/temp/repos/grav/user/themes/quark-open-publishing/templates/partials/blog-list-item.html.twig");
    }
}
