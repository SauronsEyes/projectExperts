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

/* C:\xampp\htdocs\proexp/themes/demo/pages/Services.htm */
class __TwigTemplate_2859040ae6f774fa66b07445be3004a3c123da524ff28b899f46b1abb6c01158 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 16);
        $filters = array("escape" => 19, "raw" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw'],
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
    <h1 class=\"page-title04 text-center\">Services We Provide</h1>
    <hr class=\"hr\"/>
    <div class=\"row clearfix\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "      <div class=\"col-md-4 col-sm-4\">
        <div class=\"servbox\">
        <div class=\"img-holder\"><p><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "servimg", [], "any", false, false, true, 19), "path", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" alt=\"\" width=\"100%\"></p> </div>
        <div class=\"title\">";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</div>    
          
          <div class=\"contentbox\">
          <p>";
            // line 23
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 23), 23, $this->source);
            echo "</p>
        </div>
        <div class=\"morebtn\"><a href=\"services/";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">View More</a></div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "     

    </div>
  
   
   
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/pages/Services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  108 => 25,  103 => 23,  97 => 20,  93 => 19,  89 => 17,  85 => 16,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
    <h1 class=\"page-title04 text-center\">Services We Provide</h1>
    <hr class=\"hr\"/>
    <div class=\"row clearfix\">
    {% for record in records %}
      <div class=\"col-md-4 col-sm-4\">
        <div class=\"servbox\">
        <div class=\"img-holder\"><p><img src=\"{{ record.servimg.path }}\" alt=\"\" width=\"100%\"></p> </div>
        <div class=\"title\">{{ record.title }}</div>    
          
          <div class=\"contentbox\">
          <p>{{ record.description|raw }}</p>
        </div>
        <div class=\"morebtn\"><a href=\"services/{{ record.id }}\">View More</a></div>
        </div>
      </div>
      {% endfor %}
     

    </div>
  
   
   
  </div>
</div>", "C:\\xampp\\htdocs\\proexp/themes/demo/pages/Services.htm", "");
    }
}
