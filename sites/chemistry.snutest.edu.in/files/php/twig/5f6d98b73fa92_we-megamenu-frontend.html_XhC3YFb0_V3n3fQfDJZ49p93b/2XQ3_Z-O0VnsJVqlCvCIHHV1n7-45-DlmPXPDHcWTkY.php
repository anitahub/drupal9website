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

/* sites/chemistry.snutest.edu.in/modules/contrib/we_megamenu/templates/we-megamenu-frontend.html.twig */
class __TwigTemplate_e6dd4f6a513844097b0362d908a4d5f94e08f625fbb1316509594aa42d90d050 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"region-we-mega-menu\">
\t<a class=\"navbar-toggle collapsed\">
\t    <span class=\"icon-bar\"></span>
\t    <span class=\"icon-bar\"></span>
\t    <span class=\"icon-bar\"></span>
\t</a>
\t<nav ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 7, $this->source), "html", null, true);
        echo ">
\t  <div class=\"container-fluid\">
\t    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source), "html", null, true);
        echo "
\t  </div>
\t</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "sites/chemistry.snutest.edu.in/modules/contrib/we_megamenu/templates/we-megamenu-frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/chemistry.snutest.edu.in/modules/contrib/we_megamenu/templates/we-megamenu-frontend.html.twig", "C:\\wamp64\\www\\snu\\sites\\chemistry.snutest.edu.in\\modules\\contrib\\we_megamenu\\templates\\we-megamenu-frontend.html.twig");
    }
}
