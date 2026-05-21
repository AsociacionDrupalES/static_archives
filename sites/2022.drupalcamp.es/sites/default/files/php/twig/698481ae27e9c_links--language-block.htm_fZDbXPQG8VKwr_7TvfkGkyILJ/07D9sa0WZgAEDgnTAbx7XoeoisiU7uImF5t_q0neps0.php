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

/* themes/custom/drupalcamp/templates/navigation/links--language-block.html.twig */
class __TwigTemplate_18f1f236fa5fe5f878f17cb937b8cb69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/links"), "html", null, true);
        echo "

";
        // line 39
        if (($context["links"] ?? null)) {
            // line 40
            echo "  <ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => "links"]], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 42
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 42, $this->source))], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                echo ">";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 43)) {
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 45
$context["item"], "text_attributes", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</li>";
                } else {
                    // line 48
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                }
                // line 50
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/drupalcamp/templates/navigation/links--language-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  74 => 50,  71 => 48,  64 => 46,  62 => 45,  60 => 44,  58 => 43,  54 => 42,  50 => 41,  46 => 40,  44 => 39,  39 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/drupalcamp/templates/navigation/links--language-block.html.twig", "/var/www/2022.drupalcamp.es/releases/20230505092331Z/web/themes/custom/drupalcamp/templates/navigation/links--language-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 39, "for" => 41);
        static $filters = array("escape" => 37, "clean_class" => 42);
        static $functions = array("attach_library" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'clean_class'],
                ['attach_library']
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
