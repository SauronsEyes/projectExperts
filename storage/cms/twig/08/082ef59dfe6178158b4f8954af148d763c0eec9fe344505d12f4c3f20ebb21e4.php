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

/* C:\xampp\htdocs\proexp/themes/demo/pages/projects.htm */
class __TwigTemplate_4a48d42e5352b50c910f2eb53fe4bf53318a0308d51b5e51d3f1e6e138cace03 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 18);
        $filters = array("escape" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "




<div class=\"bodycontent\">
  <div class=\"container\">
    <h1 class=\"page-title04 text-center\">Our Projects</h1>
    <hr class=\"hr\"/>
    <div class=\"row clearfix\"  id=\"portfolio\">
\t\t
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 19
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "proimg", [], "any", false, false, true, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                // line 20
                echo "\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t
\t\t\t\t<div class=\"gallery-block\"><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["images"], "path", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["images"], "path", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\"></a></div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "   
\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t
\t\t\t
           
     

    
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/pages/projects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  111 => 25,  100 => 22,  96 => 20,  91 => 19,  87 => 18,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}





<div class=\"bodycontent\">
  <div class=\"container\">
    <h1 class=\"page-title04 text-center\">Our Projects</h1>
    <hr class=\"hr\"/>
    <div class=\"row clearfix\"  id=\"portfolio\">
\t\t
\t\t{% for record in records %}
\t\t\t{% for images in record.proimg %}
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t
\t\t\t\t<div class=\"gallery-block\"><a href=\"{{ images.path }}\"><img src=\"{{ images.path }}\"></a></div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
   
\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t
\t\t\t
           
     

    
  </div>
</div>", "C:\\xampp\\htdocs\\proexp/themes/demo/pages/projects.htm", "");
    }
}
