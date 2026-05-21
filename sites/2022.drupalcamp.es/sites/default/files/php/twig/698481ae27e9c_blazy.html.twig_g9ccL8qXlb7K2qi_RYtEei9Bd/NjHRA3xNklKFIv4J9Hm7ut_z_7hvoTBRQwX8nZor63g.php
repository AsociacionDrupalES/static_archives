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

/* modules/contrib/blazy/templates/blazy.html.twig */
class __TwigTemplate_f0e63e9ea41c5d34fe4eb3c8dcdb313d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'blazy_player' => [$this, 'block_blazy_player'],
            'blazy_media' => [$this, 'block_blazy_media'],
            'blazy_content' => [$this, 'block_blazy_content'],
            'blazy_caption' => [$this, 'block_blazy_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        $context["classes"] = [0 => ((        // line 54
($context["content"] ?? null)) ? ("media--rendered") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "bundle", [], "any", false, false, true, 55)) ? (("media--bundle--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "bundle", [], "any", false, false, true, 55), 55, $this->source)))) : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "namespace", [], "any", false, false, true, 56)) ? (("media--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "namespace", [], "any", false, false, true, 56), 56, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 57)) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 57), 57, $this->source)))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "player", [], "any", false, false, true, 58)) ? ("media--player") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "ratio", [], "any", false, false, true, 59)) ? (("media--ratio media--ratio--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ratio", [], "any", false, false, true, 59), 59, $this->source))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "type", [], "any", false, false, true, 60)) ? (("media--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "type", [], "any", false, false, true, 60), 60, $this->source))) : ("")), 7 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["blazies"] ?? null), "resimage", [], "any", false, false, true, 61), "id", [], "any", false, false, true, 61)) ? ("media--responsive") : ("")), 8 => (((twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "use_loading", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blazies"] ?? null), "use", [], "any", false, false, true, 62), "loader", [], "any", false, false, true, 62))) ? ("is-b-loading") : ("")), 9 => ((twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "classes", [], "any", false, false, true, 63)) ? (\Drupal\Component\Utility\Html::getClass(twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 63), 63, $this->source), " "))) : (""))];
        // line 66
        echo "
";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "player", [], "any", false, false, true, 67)) {
            // line 68
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "aria-live", 1 => "polite"], "method", false, false, true, 68);
            // line 69
            echo "
  ";
            // line 70
            $context["play_title"] = t("Load and play video.");
            // line 71
            echo "  ";
            $context["close_title"] = t("Stop and close video.");
            // line 72
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "accessible_title", [], "any", false, false, true, 72)) {
                // line 73
                echo "    ";
                $context["play_title"] = t("Load and play the video \"@label\".", ["@label" => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "accessible_title", [], "any", false, false, true, 73)]);
                // line 74
                echo "    ";
                $context["close_title"] = t("Stop and close the video \"@label\".", ["@label" => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "accessible_title", [], "any", false, false, true, 74)]);
                // line 75
                echo "  ";
            }
            // line 76
            echo "
  ";
            // line 77
            $context["play_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-label" =>             // line 78
($context["play_title"] ?? null), "class" => [0 => "media__icon", 1 => "media__icon--play"], "data-url" => twig_get_attribute($this->env, $this->source,             // line 80
($context["settings"] ?? null), "embed_url", [], "any", false, false, true, 80), "data-iframe-title" => twig_get_attribute($this->env, $this->source,             // line 81
($context["settings"] ?? null), "accessible_title", [], "any", false, false, true, 81), "title" =>             // line 82
($context["play_title"] ?? null), "type" => "button"]);
            // line 85
            echo "
  ";
            // line 86
            $context["close_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-label" =>             // line 87
($context["close_title"] ?? null), "class" => [0 => "media__icon", 1 => "media__icon--close"], "title" =>             // line 89
($context["close_title"] ?? null), "type" => "button"]);
        }
        // line 93
        echo "
";
        // line 94
        ob_start(function () { return ''; });
        // line 95
        echo "  ";
        $this->displayBlock('blazy_player', $context, $blocks);
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "
";
        // line 105
        ob_start(function () { return ''; });
        // line 106
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "
";
        // line 123
        ob_start(function () { return ''; });
        // line 124
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 141
        echo "
  ";
        // line 142
        if ((($context["captions"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "inline", [], "any", true, true, true, 142))) {
            // line 143
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 152
            echo "  ";
        }
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postscript"] ?? null), 154, $this->source), "html", null, true);
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "
";
        // line 158
        if (($context["wrapper_attributes"] ?? null)) {
            // line 159
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 159, $this->source), "html", null, true);
            echo ">";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null), 160, $this->source), "html", null, true);
            // line 161
            echo "</div>
";
        } else {
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null), 163, $this->source), "html", null, true);
            echo "
";
        }
    }

    // line 95
    public function block_blazy_player($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "player", [], "any", false, false, true, 96)) {
            // line 97
            echo "      <button";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["close_button_attributes"] ?? null), 97, $this->source), "html", null, true);
            echo "></button>
      <button";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["play_button_attributes"] ?? null), 98, $this->source), "html", null, true);
            echo "></button>
    ";
        } else {
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iframe"] ?? null), 100, $this->source), "html", null, true);
        }
        // line 102
        echo "  ";
    }

    // line 106
    public function block_blazy_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        echo ">";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preface"] ?? null), 108, $this->source), "html", null, true);
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 109, $this->source), "html", null, true);
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 110, $this->source), "html", null, true);
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript"] ?? null), 112, $this->source), "html", null, true);
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay"] ?? null), 113, $this->source), "html", null, true);
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["player"] ?? null), 114, $this->source), "html", null, true);
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 118, $this->source), "html", null, true);
        // line 119
        echo "</div>
  ";
    }

    // line 124
    public function block_blazy_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_attributes"] ?? null), 125, $this->source), "html", null, true);
            echo ">";
        }
        // line 126
        echo "      ";
        if ((($context["url"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "player", [], "any", false, false, true, 126))) {
            // line 127
            echo "        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 127, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_attributes"] ?? null), 127, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null), 127, $this->source), "html", null, true);
            echo "</a>

        ";
            // line 130
            echo "        ";
            if ((($context["captions"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "lightbox", [], "any", false, false, true, 130)))) {
                // line 131
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "lightbox", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                // line 133
                echo "</div>
        ";
            }
            // line 135
            echo "
      ";
        } else {
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null), 137, $this->source), "html", null, true);
        }
        // line 139
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "</div>";
        }
        // line 140
        echo "  ";
    }

    // line 143
    public function block_blazy_caption($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_attributes"] ?? null), 144, $this->source), "html", null, true);
        echo ">
        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "inline", [], "any", false, false, true, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 146
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["caption"], "content", [], "any", false, false, true, 146)) {
                // line 147
                echo "            <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "tag", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "attributes", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "content", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "tag", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo ">
          ";
            }
            // line 149
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 150,  294 => 149,  282 => 147,  279 => 146,  275 => 145,  270 => 144,  266 => 143,  262 => 140,  257 => 139,  254 => 137,  250 => 135,  246 => 133,  244 => 132,  242 => 131,  239 => 130,  229 => 127,  226 => 126,  219 => 125,  215 => 124,  210 => 119,  208 => 118,  206 => 117,  204 => 114,  202 => 113,  200 => 112,  198 => 110,  196 => 109,  194 => 108,  190 => 107,  186 => 106,  182 => 102,  179 => 100,  174 => 98,  169 => 97,  166 => 96,  162 => 95,  155 => 163,  151 => 161,  149 => 160,  145 => 159,  143 => 158,  140 => 157,  137 => 154,  134 => 152,  131 => 143,  129 => 142,  126 => 141,  123 => 124,  121 => 123,  118 => 122,  114 => 106,  112 => 105,  109 => 104,  105 => 95,  103 => 94,  100 => 93,  97 => 89,  96 => 87,  95 => 86,  92 => 85,  90 => 82,  89 => 81,  88 => 80,  87 => 78,  86 => 77,  83 => 76,  80 => 75,  77 => 74,  74 => 73,  71 => 72,  68 => 71,  66 => 70,  63 => 69,  60 => 68,  58 => 67,  55 => 66,  53 => 63,  52 => 62,  51 => 61,  50 => 60,  49 => 59,  48 => 58,  47 => 57,  46 => 56,  45 => 55,  44 => 54,  43 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/blazy/templates/blazy.html.twig", "/var/www/2022.drupalcamp.es/releases/20230505092331Z/web/modules/contrib/blazy/templates/blazy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 53, "if" => 67, "block" => 95, "for" => 145);
        static $filters = array("clean_class" => 55, "join" => 63, "t" => 70, "escape" => 154);
        static $functions = array("create_attribute" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['clean_class', 'join', 't', 'escape'],
                ['create_attribute']
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
