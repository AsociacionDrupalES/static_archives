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

/* themes/custom/drupalcamp/templates/misc/status-messages.html.twig */
class __TwigTemplate_cae5b03efc35e7e91e5ed9edccfa3e6d extends \Twig\Template
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
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/alerts"), "html", null, true);
        echo "

<div data-drupal-messages>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            echo "  ";
            $context["classes"] = [0 => "alert", 1 => "alert-dismissible", 2 => "fade", 3 => "show", 4 => "col-12", 5 => "alert__content", 6 => "container", 7 => (((            // line 40
$context["type"] == "status")) ? ("alert-success") : ("")), 8 => (((            // line 41
$context["type"] == "warning")) ? ("alert-warning") : ("")), 9 => (((            // line 42
$context["type"] == "error")) ? ("alert-danger") : ("")), 10 => (((            // line 43
$context["type"] == "info")) ? ("alert-info") : (""))];
            // line 45
            echo "  ";
            $context["role"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
            // line 51
            echo "  <div aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 51, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 51, $this->source), "role", "aria-label"), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), "setAttribute", [0 => "role", 1 => (($__internal_compile_1 = ($context["role"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo ">
    <div>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      ";
            // line 54
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 55
                echo "        ";
                if (($context["is_message_with_title"] ?? null)) {
                    // line 56
                    echo "          <h4 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 56, $this->source), "html", null, true);
                    echo "\" class=\"alert-heading\">
            ";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 57, $this->source), "html", null, true);
                    echo "
          </h4>
        ";
                }
                // line 60
                echo "      ";
            }
            // line 61
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 62
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 62)) {
                    // line 63
                    echo "          <p>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 63, $this->source), "html", null, true);
                    echo "</p>
        ";
                } else {
                    // line 65
                    echo "          <p>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 65, $this->source), "html", null, true);
                    echo "</p>
          <hr>
        ";
                }
                // line 68
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/drupalcamp/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 71,  135 => 69,  121 => 68,  114 => 65,  108 => 63,  105 => 62,  87 => 61,  84 => 60,  78 => 57,  73 => 56,  70 => 55,  68 => 54,  59 => 51,  56 => 45,  54 => 43,  53 => 42,  52 => 41,  51 => 40,  49 => 32,  45 => 31,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/drupalcamp/templates/misc/status-messages.html.twig", "/var/www/2022.drupalcamp.es/releases/20230505092331Z/web/themes/custom/drupalcamp/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 31, "set" => 32, "if" => 54);
        static $filters = array("escape" => 28, "without" => 51);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without'],
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
