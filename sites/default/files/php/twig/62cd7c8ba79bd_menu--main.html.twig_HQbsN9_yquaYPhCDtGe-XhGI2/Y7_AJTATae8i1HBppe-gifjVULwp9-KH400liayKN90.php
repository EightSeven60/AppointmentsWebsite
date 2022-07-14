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

/* themes/zinble/templates/extras/menu--main.html.twig */
class __TwigTemplate_f672369fc6cb8de14034d0f8483510ba317d0a16f84defe418c643f69a416720 extends \Twig\Template
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
        // line 23
        echo "
<nav class=\"navbar navbar-expand-md  navbar-hover\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHover\" aria-controls=\"navbarDD\" aria-expanded=\"false\" aria-label=\"Navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarHover\">
 ";
        // line 29
        $context["level"] = 0;
        // line 30
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 31
        echo "
";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 36, $context, $this->getSourceContext()));
        echo "

";
        // line 80
        echo "    </div>
</nav>
";
    }

    // line 38
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 39
            echo "  ";
            $macros["menus"] = $this;
            // line 40
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 41
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 42
                    echo "      <ul  id=\"main-menu\" ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "navbar-nav"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 44
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo ">
      ";
                    // line 45
                    $context["level"] = (($context["level"] ?? null) + 1);
                    // line 46
                    echo "    ";
                }
                // line 47
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "    
      ";
                    // line 50
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "is_expanded", [], "any", false, false, true, 52)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "is_collapsed", [], "any", false, false, true, 53)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("active") : (""))];
                    // line 57
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 57))) {
                        // line 58
                        echo "    
        <li ";
                        // line 59
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo ">
          <a class=\"nav-link dropdown-toggle\" href=\"";
                        // line 60
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           ";
                        // line 61
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo "
          </a>
      ";
                    } elseif ((                    // line 63
($context["level"] ?? null) != 0)) {
                        // line 64
                        echo "        <li>
          ";
                        // line 65
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65), 65, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65), 65, $this->source), ["class" => [0 => "dropdown-item"]]), "html", null, true);
                        echo "  
      ";
                    } else {
                        // line 67
                        echo "         <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 67), "addClass", [0 => "nav-item"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo ">
        ";
                        // line 68
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 68), 68, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), 68, $this->source), ["class" => [0 => "nav-link"]]), "html", null, true);
                        echo "
      ";
                    }
                    // line 69
                    echo "  
        
        ";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71)) {
                        // line 72
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "navbar-nav"], "method", false, false, true, 72), (($context["menu_level"] ?? null) + 1)], 72, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 74
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    ";
                $context["level"] = (($context["level"] ?? null) - 1);
                // line 77
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/extras/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 77,  176 => 76,  169 => 74,  163 => 72,  161 => 71,  157 => 69,  152 => 68,  147 => 67,  142 => 65,  139 => 64,  137 => 63,  132 => 61,  128 => 60,  124 => 59,  121 => 58,  118 => 57,  116 => 54,  115 => 53,  114 => 52,  113 => 50,  110 => 48,  105 => 47,  102 => 46,  100 => 45,  95 => 44,  89 => 42,  86 => 41,  83 => 40,  80 => 39,  65 => 38,  59 => 80,  54 => 36,  51 => 31,  49 => 30,  47 => 29,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/extras/menu--main.html.twig", "C:\\xampp\\htdocs\\AppointmentsWebsite\\themes\\zinble\\templates\\extras\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "import" => 30, "macro" => 38, "if" => 40, "for" => 47);
        static $filters = array("escape" => 42);
        static $functions = array("link" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
