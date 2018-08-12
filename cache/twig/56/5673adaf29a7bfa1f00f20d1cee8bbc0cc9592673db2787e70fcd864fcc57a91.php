<?php

/* @Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog/hero-classes */
class __TwigTemplate_2845c92f1e2818ff855cfc5934c4c3c4f6d26eae7507c9c28232540d33c4ee2d extends Twig_Template
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
        echo "<p>The <a href=\"https://getgrav.org/downloads/themes\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <code>body_classes</code> for any page.  The theme will merge the combination of the defaults with any <code>body_classes</code> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h2>Body Classes</h2>
<pre><code class=\"language-yaml\">body_classes: \"header-dark header-transparent\"</code></pre>
<p>On a particular page will ensure that page has those options enabled (assuming they are false by default).</p>
<h2>Hero Options</h2>
<p>The hero template allows some options to be set in the page frontmatter. This is used by the modular <code>hero</code> as well as the blog and item templates to provide a more dynamic header.</p>
<pre><code class=\"language-yaml\">hero_classes: text-light title-h1h2 parallax overlay-dark-gradient hero-large
hero_image: road.jpg
hero_align: center</code></pre>
<p>The <code>hero_classes</code> option allows a variety of hero classes to be set dynamically these include:</p>
<ul>
<li><code>text-light</code> | <code>text-dark</code> - Controls if the text should be light or dark depending on the content</li>
<li><code>title-h1h2</code> - Enforced a close matched h1/h2 title pairing</li>
<li><code>parallax</code> - Enables a CSS-powered parallax effect</li>
<li><code>overlay-dark-gradient</code> - Displays a transparent gradient which further darkens the underlying image</li>
<li><code>overlay-light-gradient</code> - Displays a transparent gradient which further lightens the underlying image</li>
<li><code>overlay-dark</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>overlay-light</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>hero-fullscreen</code> | <code>hero-large</code> | <code>hero-medium</code> | <code>hero-small</code> | <code>hero-tiny</code> - Size of the hero block</li>
</ul>
<p>The <code>hero_image</code> should point to an image file in the current page folder.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog/hero-classes";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>The <a href=\"https://getgrav.org/downloads/themes\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <code>body_classes</code> for any page.  The theme will merge the combination of the defaults with any <code>body_classes</code> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h2>Body Classes</h2>
<pre><code class=\"language-yaml\">body_classes: \"header-dark header-transparent\"</code></pre>
<p>On a particular page will ensure that page has those options enabled (assuming they are false by default).</p>
<h2>Hero Options</h2>
<p>The hero template allows some options to be set in the page frontmatter. This is used by the modular <code>hero</code> as well as the blog and item templates to provide a more dynamic header.</p>
<pre><code class=\"language-yaml\">hero_classes: text-light title-h1h2 parallax overlay-dark-gradient hero-large
hero_image: road.jpg
hero_align: center</code></pre>
<p>The <code>hero_classes</code> option allows a variety of hero classes to be set dynamically these include:</p>
<ul>
<li><code>text-light</code> | <code>text-dark</code> - Controls if the text should be light or dark depending on the content</li>
<li><code>title-h1h2</code> - Enforced a close matched h1/h2 title pairing</li>
<li><code>parallax</code> - Enables a CSS-powered parallax effect</li>
<li><code>overlay-dark-gradient</code> - Displays a transparent gradient which further darkens the underlying image</li>
<li><code>overlay-light-gradient</code> - Displays a transparent gradient which further lightens the underlying image</li>
<li><code>overlay-dark</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>overlay-light</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>hero-fullscreen</code> | <code>hero-large</code> | <code>hero-medium</code> | <code>hero-small</code> | <code>hero-tiny</code> - Size of the hero block</li>
</ul>
<p>The <code>hero_image</code> should point to an image file in the current page folder.</p>", "@Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog/hero-classes", "");
    }
}
