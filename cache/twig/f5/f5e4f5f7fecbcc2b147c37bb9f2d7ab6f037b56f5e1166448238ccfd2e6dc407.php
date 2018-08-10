<?php

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_f3fa9555056386e9e90fa9285075fcc6d238756917429f6ec558161c976657cb extends Twig_Template
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
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 3
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hide_git_sync_repo_link", array())) {
                // line 4
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 5
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 6
                    echo "      ";
                    if (twig_in_filter("github", (isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null))) {
                        // line 7
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 8
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", (isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null))) {
                        // line 9
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 10
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", (isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null))) {
                        // line 11
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 12
                        echo "      ";
                    } else {
                        // line 13
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 14
                        echo "      ";
                    }
                    // line 15
                    echo "    ";
                } else {
                    // line 16
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 17
                    echo "    ";
                }
                // line 18
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 19
                    echo "      ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 20
                        echo "        ";
                        $context["git_repo_link_text"] = "View Content Repository";
                        // line 21
                        echo "      ";
                    } else {
                        // line 22
                        echo "        ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 23
                        echo "      ";
                    }
                    // line 24
                    echo "      <a class=\"newwindow external-link\" href=\"";
                    echo (isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null);
                    echo "\" title=\"";
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 25
                    echo (isset($context["git_repo_link_icon"]) ? $context["git_repo_link_icon"] : null);
                    echo "\" aria-hidden=\"true\"></i>
      ";
                    // line 26
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "</a>
    ";
                } else {
                    // line 28
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "git_sync_repo_link", array())) {
                        // line 29
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "git_sync_repo_link", array());
                        // line 30
                        echo "      ";
                    } else {
                        // line 31
                        echo "        ";
                        $context["git_repo_link_url"] = ((isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null) . twig_replace_filter(("/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array())), array("/user/" => "/")));
                        // line 32
                        echo "      ";
                    }
                    // line 33
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "count", array())) {
                        // line 34
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter((isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null), array((("/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array())) . ".md") => "/"));
                        // line 35
                        echo "      ";
                    }
                    // line 36
                    echo "\t  ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 37
                        echo "        ";
                        $context["git_repo_link_text"] = "Edit this Page";
                        // line 38
                        echo "      ";
                    } else {
                        // line 39
                        echo "        ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 40
                        echo "      ";
                    }
                    // line 41
                    echo "      <a class=\"newwindow external-link\" href=\"";
                    echo (isset($context["git_repo_link_url"]) ? $context["git_repo_link_url"] : null);
                    echo "\" title=\"";
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 42
                    echo (isset($context["git_repo_link_icon"]) ? $context["git_repo_link_icon"] : null);
                    echo "\" aria-hidden=\"true\"></i>
      ";
                    // line 43
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "</a>
    ";
                }
                // line 45
                echo "  ";
            }
        } else {
            // line 47
            echo "  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "git-sync", array(), "array"), "enabled", array()) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "git-sync", array(), "array"), "repository", array())))) {
                // line 48
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "base_url", array()) . "/admin/plugins/git-sync");
                // line 49
                echo "    <a class=\"newwindow external-link\" href=\"";
                echo (isset($context["admin_panel_appearance_url"]) ? $context["admin_panel_appearance_url"] : null);
                echo "\" title=\"Setup Git Sync\">
    <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    Setup Git Sync</a>
  ";
            } else {
                // line 53
                echo "    ";
                $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "git-sync", array(), "array"), "repository", array());
                // line 54
                echo "    ";
                $context["git_sync_repo_link"] = twig_replace_filter((isset($context["git_sync_repo"]) ? $context["git_sync_repo"] : null), array(".git" => "/"));
                // line 55
                echo "    ";
                if (twig_in_filter("github", (isset($context["git_sync_repo_link"]) ? $context["git_sync_repo_link"] : null))) {
                    // line 56
                    echo "      ";
                    $context["git_repo_link_icon"] = "github";
                    // line 57
                    echo "      ";
                    $context["git_repo_edit_link_url"] = ((twig_replace_filter((isset($context["git_sync_repo"]) ? $context["git_sync_repo"] : null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array()), array("user/" => "/")));
                    // line 58
                    echo "    ";
                } elseif (twig_in_filter("gitlab", (isset($context["git_sync_repo_link"]) ? $context["git_sync_repo_link"] : null))) {
                    // line 59
                    echo "      ";
                    $context["git_repo_link_icon"] = "gitlab";
                    // line 60
                    echo "      ";
                    $context["git_repo_edit_link_url"] = ((twig_replace_filter((isset($context["git_sync_repo"]) ? $context["git_sync_repo"] : null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array()), array("user/" => "/")));
                    // line 61
                    echo "    ";
                } elseif (twig_in_filter("bitbucket", (isset($context["git_sync_repo_link"]) ? $context["git_sync_repo_link"] : null))) {
                    // line 62
                    echo "      ";
                    $context["git_repo_link_icon"] = "bitbucket";
                    // line 63
                    echo "      ";
                    $context["git_repo_edit_link_url"] = ((twig_replace_filter((isset($context["git_sync_repo"]) ? $context["git_sync_repo"] : null), array(".git" => "/")) . "src/master") . twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array()), array("user/" => "/")));
                    // line 64
                    echo "    ";
                } else {
                    // line 65
                    echo "\t    ";
                    $context["git_repo_link_icon"] = "git";
                    // line 66
                    echo "      ";
                    $context["git_repo_edit_link_url"] = ((twig_replace_filter((isset($context["git_sync_repo"]) ? $context["git_sync_repo"] : null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array()), array("user/" => "/")));
                    // line 67
                    echo "\t  ";
                }
                // line 68
                echo "    ";
                if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 69
                    echo "        ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 70
                    echo "    ";
                }
                // line 71
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 72
                    echo "      ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                        // line 73
                        echo "        ";
                        $context["git_repo_link_text"] = "View Content Repository";
                        // line 74
                        echo "      ";
                    } else {
                        // line 75
                        echo "        ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 76
                        echo "      ";
                    }
                    // line 77
                    echo "      <a class=\"newwindow external-link\" href=\"";
                    echo (isset($context["git_sync_repo_link"]) ? $context["git_sync_repo_link"] : null);
                    echo "\" title=\"";
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 78
                    echo (isset($context["git_repo_link_icon"]) ? $context["git_repo_link_icon"] : null);
                    echo "\" aria-hidden=\"true\"></i>
      ";
                    // line 79
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "</a>
    ";
                } else {
                    // line 81
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "count", array())) {
                        // line 82
                        echo "        ";
                        $context["git_repo_edit_link_url"] = twig_replace_filter((isset($context["git_repo_edit_link_url"]) ? $context["git_repo_edit_link_url"] : null), array((("/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array())) . ".md") => "/"));
                        // line 83
                        echo "      ";
                    }
                    // line 84
                    echo "      ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 85
                        echo "        ";
                        $context["git_repo_link_text"] = "Edit this Page";
                        // line 86
                        echo "      ";
                    } else {
                        // line 87
                        echo "        ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 88
                        echo "      ";
                    }
                    // line 89
                    echo "      <a class=\"newwindow external-link\" href=\"";
                    echo (isset($context["git_repo_edit_link_url"]) ? $context["git_repo_edit_link_url"] : null);
                    echo "\" title=\"";
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 90
                    echo (isset($context["git_repo_link_icon"]) ? $context["git_repo_link_icon"] : null);
                    echo "\" aria-hidden=\"true\"></i>
      ";
                    // line 91
                    echo (isset($context["git_repo_link_text"]) ? $context["git_repo_link_text"] : null);
                    echo "</a>
    ";
                }
                // line 93
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 93,  296 => 91,  292 => 90,  285 => 89,  282 => 88,  279 => 87,  276 => 86,  273 => 85,  270 => 84,  267 => 83,  264 => 82,  261 => 81,  256 => 79,  252 => 78,  245 => 77,  242 => 76,  239 => 75,  236 => 74,  233 => 73,  230 => 72,  227 => 71,  224 => 70,  221 => 69,  218 => 68,  215 => 67,  212 => 66,  209 => 65,  206 => 64,  203 => 63,  200 => 62,  197 => 61,  194 => 60,  191 => 59,  188 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  165 => 49,  162 => 48,  159 => 47,  155 => 45,  150 => 43,  146 => 42,  139 => 41,  136 => 40,  133 => 39,  130 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  100 => 28,  95 => 26,  91 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# new twig template file - hibbittsdesign.org #}
{% if theme_var('git_sync_repo_link') %}
  {% if not page.header.hide_git_sync_repo_link %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon') is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link') is empty  %}
      {% if theme_var('custom_git_sync_repo_link_text') is empty %}
        {% set git_repo_link_text = 'View Content Repository' %}
      {% else %}
        {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
      {% endif %}
      <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
      <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
      {{ git_repo_link_text }}</a>
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if page.children.count %}
        {% set git_repo_link_url = (git_repo_link_url|replace({('/'~page.template~'.md'):'/'})) %}
      {% endif %}
\t  {% if theme_var('custom_git_sync_repo_link_text') is empty %}
        {% set git_repo_link_text = 'Edit this Page' %}
      {% else %}
        {% set git_repo_link_text =  theme_var('custom_git_sync_repo_link_text') %}
      {% endif %}
      <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
      <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
      {{ git_repo_link_text }}</a>
    {% endif %}
  {% endif %}
{% else %}
  {% if config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    <a class=\"newwindow external-link\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
    <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    Setup Git Sync</a>
  {% else %}
    {% set git_sync_repo = config.plugins['git-sync'].repository %}
    {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
    {% if 'github' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"github\" %}
      {% set git_repo_edit_link_url = (git_sync_repo|replace({'.git':'/'})) ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% elseif 'gitlab' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"gitlab\" %}
      {% set git_repo_edit_link_url = (git_sync_repo|replace({'.git':'/'})) ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% elseif 'bitbucket' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"bitbucket\" %}
      {% set git_repo_edit_link_url = (git_sync_repo|replace({'.git':'/'})) ~ 'src/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% else %}
\t    {% set git_repo_link_icon = \"git\" %}
      {% set git_repo_edit_link_url = (git_sync_repo|replace({'.git':'/'})) ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
\t  {% endif %}
    {% if theme_var('custom_git_sync_repo_link_icon') is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view'  or theme_var('type_of_git_sync_repo_link') is empty %}
      {% if theme_var('git_sync_repo_link_text') is empty %}
        {% set git_repo_link_text = 'View Content Repository' %}
      {% else %}
        {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text')  %}
      {% endif %}
      <a class=\"newwindow external-link\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
      <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
      {{ git_repo_link_text }}</a>
    {% else %}
      {% if page.children.count %}
        {% set git_repo_edit_link_url = (git_repo_edit_link_url|replace({('/'~page.template~'.md'):'/'})) %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_text') is empty %}
        {% set git_repo_link_text = 'Edit this Page' %}
      {% else %}
        {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
      {% endif %}
      <a class=\"newwindow external-link\" href=\"{{ git_repo_edit_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
      <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
      {{ git_repo_link_text }}</a>
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "/Users/temp/repos/grav/user/themes/quark-open-publishing/templates/partials/git_sync_repo_link.html.twig");
    }
}
