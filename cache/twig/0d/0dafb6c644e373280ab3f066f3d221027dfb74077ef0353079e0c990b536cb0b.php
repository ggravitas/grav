<?php

/* @Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog */
class __TwigTemplate_b5d2fb6015d407e612a8c8d56d7f7171817bbf43016ab478947c8ffa4fcbe3b5 extends Twig_Template
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
        echo "<h1>Out<strong>Rage</strong> Fatigue</h1>
<h3>Sick and Tired of Being Sick and Tired</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog";
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
        return new Twig_Source("<h1>Out<strong>Rage</strong> Fatigue</h1>
<h3>Sick and Tired of Being Sick and Tired</h3>", "@Page:/Users/jerrybrahm/repos/grav/user/pages/01.blog", "");
    }
}
