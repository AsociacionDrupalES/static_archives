<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/drupalcamp/templates/layout/page.html.twig */
class __TwigTemplate_09df2f1eaa3b5308a398d01b86df8c49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 102
        echo "    </header>
    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 103)) {
            // line 104
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 111
            echo "    ";
        }
        // line 112
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "    </div>
    <footer class=\"footer\">
      ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 128)) {
            // line 129
            echo "        <div class=\"footer__top\">
          <div class=\"";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 130, $this->source), "html", null, true);
            echo "\">
            ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 135
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 135)) {
            // line 136
            echo "        <div class=\"footer__bottom\">
          <div class=\"";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 137, $this->source), "html", null, true);
            echo "\">
            ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
            <div class=\"copyright\">
              <p>© 2022 <a href=\"https://asociaciondrupal.es/\"
                           target=\"_blank\">";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ASOCIACIÓN ESPAÑOLA DE DRUPAL"));
            echo "</a></p>
            </div>
          </div>
        </div>
      ";
        }
        // line 146
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        <div class=\"header__content\">
          ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 75)) {
            // line 76
            echo "            <div class=\"header__left\">
              ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 80
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 80)) {
            // line 81
            echo "            <div class=\"header__right\">
              ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
              <div class=\"hamburguer__container\">
                <div class=\"hamburguer\">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          ";
        }
        // line 93
        echo "        </div>
        ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 94)) {
            // line 95
            echo "          <div class=\"main_menu\">
            <div class=\"menu--container\">
              ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 101
        echo "      ";
    }

    // line 104
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 106, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "        <div id=\"main\">
          ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 117, $this->source), "html", null, true);
        echo ">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
              </section>
            </main>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/drupalcamp/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 120,  208 => 117,  203 => 115,  200 => 114,  196 => 113,  188 => 107,  184 => 106,  181 => 105,  177 => 104,  173 => 101,  166 => 97,  162 => 95,  160 => 94,  157 => 93,  143 => 82,  140 => 81,  137 => 80,  131 => 77,  128 => 76,  126 => 75,  123 => 74,  119 => 73,  112 => 146,  104 => 141,  98 => 138,  94 => 137,  91 => 136,  88 => 135,  81 => 131,  77 => 130,  74 => 129,  72 => 128,  68 => 126,  66 => 113,  63 => 112,  60 => 111,  57 => 104,  55 => 103,  52 => 102,  50 => 73,  46 => 72,  42 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/drupalcamp/templates/layout/page.html.twig", "/var/www/2022.drupalcamp.es/releases/20230505092331Z/web/themes/custom/drupalcamp/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 103);
        static $filters = array("t" => 72, "escape" => 130);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
