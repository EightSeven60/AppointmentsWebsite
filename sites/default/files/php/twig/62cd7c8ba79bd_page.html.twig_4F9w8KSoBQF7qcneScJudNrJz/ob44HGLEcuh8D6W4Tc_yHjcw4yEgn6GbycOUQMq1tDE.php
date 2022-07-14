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

/* themes/zinble/templates/layouts/page.html.twig */
class __TwigTemplate_6bcae55b237f5e9fd83e14c9162a4986239cb4fcd6f47243be77f1189cefad84 extends \Twig\Template
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
        // line 54
        echo "
<header id=\"navbar-head\" role=\"banner\" class=\"header_wrapper \">
  <div id=\"header_top\" class=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 56, $this->source), "html", null, true);
        echo "\">
    <ul class=\"contact_details\">
      ";
        // line 58
        if (($context["slogan"] ?? null)) {
            // line 59
            echo "        <li class=\"slogan\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["slogan"] ?? null), 59, $this->source)));
            echo "</li>
      ";
        }
        // line 61
        echo "      ";
        if (($context["phone_number"] ?? null)) {
            // line 62
            echo "        <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 62, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 62, $this->source), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 64
        echo "      ";
        if (($context["email"] ?? null)) {
            // line 65
            echo "        <li class=\"mail\"><i class=\"fa fa-envelope\"></i><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 65, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 65, $this->source), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 67
        echo "    </ul>

    <ul class=\"social\">
      ";
        // line 70
        if (($context["facebook"] ?? null)) {
            // line 71
            echo "        <li class=\"facebook\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 71, $this->source), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 73
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 74
            echo "        <li class=\"linkedin\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 74, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 76
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 77
            echo "        <li class=\"googleplus\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null), 77, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 79
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 80
            echo "        <li class=\"twitter\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 80, $this->source), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 82
        echo "    </ul>
  </div>

  <div id=\"header_bottom\" class=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 85, $this->source), "html", null, true);
        echo "\">
    <div class=\"logo\">
      ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 87)) {
            // line 88
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 90
        echo "    </div>
    <div class=\"menu_wrapper\">
      ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 95
        echo "    </div>
  </div>
</header>

<!--- Start banner -->
<section class=\"banner-wrapper\">
  <div class=\"banner-layer ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 101, $this->source), "html", null, true);
        echo "\">
    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 102)) {
            // line 103
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 105
        echo "  </div>
</section>
<!---End banner -->

<!--- Start content top -->
";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 110)) {
            // line 111
            echo "  <section class=\"content-top\">
    <div class=\"";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 112, $this->source), "html", null, true);
            echo "\">
      ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 117
        echo "<!---End content Top -->

<div class=\"content ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 119, $this->source), "html", null, true);
        echo "\">
  <div class=\"row layout\">
    <!--- Start Left Sidebar -->
    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122)) {
            // line 123
            echo "      <aside class = \"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 123, $this->source), "html", null, true);
            echo " sidebar-first\">
        ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 127
        echo "    <!---End Left Sidebar -->
    <!--- Start content -->
    ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 129)) {
            // line 130
            echo "    <main class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 130, $this->source), "html", null, true);
            echo " content-middle\">
      ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
    </main>
    ";
        }
        // line 134
        echo "    <!---End content -->
    <!--- Start Right Sidebar -->
    ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136)) {
            // line 137
            echo "      <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 137, $this->source), "html", null, true);
            echo " sidebar-second\">
        ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 141
        echo "    <!---End Right Sidebar -->
  </div>
</div>

<!--- Start content Bottom -->
";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 146)) {
            // line 147
            echo "<div class=\"content-bottom\">
  <div class=\"page-bottom ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 148, $this->source), "html", null, true);
            echo "\">
    ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 153
        echo "<!---End content Bottom -->
<footer class=\"footer_copy ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 154, $this->source), "html", null, true);
        echo "\">
  <div class=\"row footer-box\">
    <div class=\"footer1 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 157)) {
            // line 158
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 160
        echo "    </div>
    <div class=\"footer2 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 162)) {
            // line 163
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 165
        echo "    </div>
    <div class=\"footer3 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 167)) {
            // line 168
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 170
        echo "    </div>
    <div class=\"footer4 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"contact-us\">
        <h6 class=\"title\">Contact Info</h6>
        <div class=\"contact-info\">
          ";
        // line 175
        if (($context["address"] ?? null)) {
            // line 176
            echo "            <div class=\"contact-line\"><i class=\"fa fa-map-marker\"></i><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 176, $this->source), "html", null, true);
            echo "</span></div>
          ";
        }
        // line 178
        echo "          ";
        if (($context["phone_number"] ?? null)) {
            // line 179
            echo "            <div class=\"contact-line\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 179, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 179, $this->source), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 181
        echo "          ";
        if (($context["email"] ?? null)) {
            // line 182
            echo "            <div class=\"contact-line\"><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 182, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 182, $this->source), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 184
        echo "        </div>
        ";
        // line 185
        if (($context["google_position"] ?? null)) {
            // line 186
            echo "        <div class=\"map_view\">
          <iframe src=\"https://maps.google.com/maps?q=";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_position"] ?? null), 187, $this->source), "html", null, true);
            echo "&z=15&output=embed\" width=\"100%\" height=\"270\" frameborder=\"0\" style=\"border:0\"></iframe>
        </div>
        ";
        }
        // line 189
        echo "\t\t\t
      </div>
      ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 191)) {
            // line 192
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 194
        echo "    </div>
  </div>
  <div class=\"copy-right\">
    <div class=\"footer-bottom\">
      ";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 198)) {
            // line 199
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 201
        echo "    </div>
    <ul class=\"social\">
      ";
        // line 203
        if (($context["facebook"] ?? null)) {
            // line 204
            echo "      <li class=\"facebook\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 204, $this->source), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 206
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 207
            echo "      <li class=\"linkedin\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 207, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 209
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 210
            echo "      <li class=\"googleplus\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null), 210, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 212
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 213
            echo "      <li class=\"twitter\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 213, $this->source), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 215
        echo "    </ul>
  </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/layouts/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 215,  422 => 213,  419 => 212,  413 => 210,  410 => 209,  404 => 207,  401 => 206,  395 => 204,  393 => 203,  389 => 201,  383 => 199,  381 => 198,  375 => 194,  369 => 192,  367 => 191,  363 => 189,  357 => 187,  354 => 186,  352 => 185,  349 => 184,  341 => 182,  338 => 181,  330 => 179,  327 => 178,  321 => 176,  319 => 175,  312 => 170,  306 => 168,  304 => 167,  300 => 165,  294 => 163,  292 => 162,  288 => 160,  282 => 158,  280 => 157,  274 => 154,  271 => 153,  264 => 149,  260 => 148,  257 => 147,  255 => 146,  248 => 141,  242 => 138,  237 => 137,  235 => 136,  231 => 134,  225 => 131,  220 => 130,  218 => 129,  214 => 127,  208 => 124,  203 => 123,  201 => 122,  195 => 119,  191 => 117,  184 => 113,  180 => 112,  177 => 111,  175 => 110,  168 => 105,  162 => 103,  160 => 102,  156 => 101,  148 => 95,  142 => 93,  140 => 92,  136 => 90,  130 => 88,  128 => 87,  123 => 85,  118 => 82,  112 => 80,  109 => 79,  103 => 77,  100 => 76,  94 => 74,  91 => 73,  85 => 71,  83 => 70,  78 => 67,  70 => 65,  67 => 64,  59 => 62,  56 => 61,  50 => 59,  48 => 58,  43 => 56,  39 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/layouts/page.html.twig", "C:\\xampp\\htdocs\\AppointmentsWebsite\\themes\\zinble\\templates\\layouts\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58);
        static $filters = array("escape" => 56, "t" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
