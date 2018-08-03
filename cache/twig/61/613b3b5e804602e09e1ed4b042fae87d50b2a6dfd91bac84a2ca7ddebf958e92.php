<?php

/* twitterfeed.html.twig */
class __TwigTemplate_1e559e45fab92273a08069d1ab9edfd7e56399c18b58fc417e54b203d6a5c865 extends Twig_Template
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
        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "published", array())) {
            // line 2
            echo " ";
            $this->displayBlock('content', $context, $blocks);
            // line 8
            echo " </div>
";
        }
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <div class=\"twitter-feed-wrapper\">
  ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
  <a class=\"twitter-timeline\" data-height=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "twitter_feed_height", array());
        echo "\" data-chrome=\"noscrollbar\" href=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "twitter_feed_url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "twitter_feed_text", array());
        echo "</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
 ";
    }

    public function getTemplateName()
    {
        return "twitterfeed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  37 => 4,  34 => 3,  31 => 2,  25 => 8,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.published %}
 {% block content %}
  <div class=\"twitter-feed-wrapper\">
  {{page.content}}
  <a class=\"twitter-timeline\" data-height=\"{{ page.header.twitter_feed_height }}\" data-chrome=\"noscrollbar\" href=\"{{ page.header.twitter_feed_url }}\">{{ page.header.twitter_feed_text }}</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
 {% endblock %}
 </div>
{% endif %}
", "twitterfeed.html.twig", "/Users/jerrybrahm/repos/grav-skeleton-open-blog-space/user/themes/quark-open-publishing/templates/twitterfeed.html.twig");
    }
}
