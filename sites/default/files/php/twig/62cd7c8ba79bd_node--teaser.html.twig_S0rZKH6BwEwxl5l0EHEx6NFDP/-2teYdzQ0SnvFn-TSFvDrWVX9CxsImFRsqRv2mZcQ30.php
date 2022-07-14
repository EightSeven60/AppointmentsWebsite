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

/* themes/zinble/templates/nodes/node--teaser.html.twig */
class __TwigTemplate_16121d838bda53bb9b0cb2445016f2285d3322c6cd21fb542549d1dbf4c1a84b extends \Twig\Template
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
        // line 75
        echo "
";
        // line 77
        $context["teaser_classes"] = [0 => "zinble-teaser"];
        // line 81
        echo "
<article";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["teaser_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ">
   <div class=\"basic-content\">
     <h2 class=\"article-title\">
       <a href=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 85, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 85, $this->source), "html", null, true);
        echo "</a>
     </h2>
    ";
        // line 87
        if (($context["display_submitted"] ?? null)) {
            // line 88
            echo "      <div class=\"author\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 89, $this->source), "html", null, true);
            echo "
        <div";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 90, $this->source), "html", null, true);
            echo ">
          ";
            // line 91
            echo t("Published by  <i class=\"fa fa-user\" aria-hidden=\"true\"></i> @author_name on <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 92
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 92, $this->source), "html", null, true);
            echo "
        </div>
       </div>
    ";
        }
        // line 96
        echo "  </div>
  <div";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 97, $this->source), "html", null, true);
        echo ">
    ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 98, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/nodes/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 98,  86 => 97,  83 => 96,  75 => 92,  73 => 91,  69 => 90,  65 => 89,  62 => 88,  60 => 87,  53 => 85,  47 => 82,  44 => 81,  42 => 77,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/nodes/node--teaser.html.twig", "C:\\xampp\\htdocs\\AppointmentsWebsite\\themes\\zinble\\templates\\nodes\\node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 77, "if" => 87, "trans" => 91);
        static $filters = array("escape" => 82);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
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
