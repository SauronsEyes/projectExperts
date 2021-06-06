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

/* C:\xampp\htdocs\proexp/themes/demo/pages/home.htm */
class __TwigTemplate_7043b366a0bcb7eae3eb3c51702fc0c5d490b74c2de0541e65c0d2217d484426 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 18, "partial" => 62);
        $filters = array("raw" => 19, "page" => 27);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['raw', 'page'],
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



<div class=\"bodycontent02\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-md-7 col-sm-7 block\">
\t\t\t\t\t<div class=\"txt1\"><span>&nbsp;</span> About Project Experts</div>
\t\t\t\t\t<h2 class=\"page-title\">Committed to top quality workmanship, professionalism, and customer satisfaction. </h2>
\t\t\t\t\t<p>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 19
            echo "              ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 19), 19, $this->source);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "          </p>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t<div class=\"rightcol-formbox\">
\t\t\t\t\t\t<h4 class=\"title\">Quick Enquiry</h4>
\t\t\t\t\t\t<form action=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("enqmail");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" name=\"form\" id=\"form\" novalidate=\"novalidate\">
            <div class=\"form-group\">
              <label>Your Name</label>
              <input name=\"name\" type=\"text\" class=\"form-control required\" placeholder=\"\" value=\"\" title=\"\" aria-required=\"true\">
            </div>
             <div class=\"form-group\">
            <label>Phone Number</label>
             <input name=\"phone\" type=\"text\" class=\"form-control required digits\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
             <div class=\"form-group\">
            <label>Email</label>
             <input name=\"email\" type=\"text\" class=\"form-control required email\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
           <div class=\"form-group\">
            <label>Address</label>
             <input name=\"address\" type=\"text\" class=\"form-control required\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
            <div class=\"form-group\">
               <label>Choose a Service</label>
\t\t\t\t<select class=\"form-control\" name=\"service\">
\t\t\t\t\t\t <option value=\"Property Maintenance\">Property Maintenance</option>
\t\t\t\t\t\t <option value=\"Roofing\">Roofing</option>
\t\t\t\t\t\t  <option value=\"James Hardie\">James Hardie</option>
\t\t\t\t\t\t   <option value=\"Installation of Windows & Doors\">Installation of Windows & Doors</option>
\t\t\t\t</select>
            </div>
            
           <div style=\"padding:15px 0 0;\"> <input type=\"submit\" value=\"Submit Now\" name=\"commit\" class=\"btn btn-color\"></div>
          </form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t</div>
\t</div>
";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "
";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/feat"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "<div class=\"wrap6\">
    ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footerinfo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "  
    </div>
     ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/testi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 69,  164 => 67,  160 => 66,  157 => 65,  153 => 64,  150 => 63,  146 => 62,  108 => 27,  100 => 21,  91 => 19,  87 => 18,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}




<div class=\"bodycontent02\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-md-7 col-sm-7 block\">
\t\t\t\t\t<div class=\"txt1\"><span>&nbsp;</span> About Project Experts</div>
\t\t\t\t\t<h2 class=\"page-title\">Committed to top quality workmanship, professionalism, and customer satisfaction. </h2>
\t\t\t\t\t<p>
            {% for record in records %}
              {{ record.description|raw }}
            {% endfor %}
          </p>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t<div class=\"rightcol-formbox\">
\t\t\t\t\t\t<h4 class=\"title\">Quick Enquiry</h4>
\t\t\t\t\t\t<form action=\"{{ 'enqmail' | page}}\" method=\"post\" enctype=\"multipart/form-data\" name=\"form\" id=\"form\" novalidate=\"novalidate\">
            <div class=\"form-group\">
              <label>Your Name</label>
              <input name=\"name\" type=\"text\" class=\"form-control required\" placeholder=\"\" value=\"\" title=\"\" aria-required=\"true\">
            </div>
             <div class=\"form-group\">
            <label>Phone Number</label>
             <input name=\"phone\" type=\"text\" class=\"form-control required digits\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
             <div class=\"form-group\">
            <label>Email</label>
             <input name=\"email\" type=\"text\" class=\"form-control required email\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
           <div class=\"form-group\">
            <label>Address</label>
             <input name=\"address\" type=\"text\" class=\"form-control required\" value=\"\" placeholder=\"\" aria-required=\"true\">
            </div>
            <div class=\"form-group\">
               <label>Choose a Service</label>
\t\t\t\t<select class=\"form-control\" name=\"service\">
\t\t\t\t\t\t <option value=\"Property Maintenance\">Property Maintenance</option>
\t\t\t\t\t\t <option value=\"Roofing\">Roofing</option>
\t\t\t\t\t\t  <option value=\"James Hardie\">James Hardie</option>
\t\t\t\t\t\t   <option value=\"Installation of Windows & Doors\">Installation of Windows & Doors</option>
\t\t\t\t</select>
            </div>
            
           <div style=\"padding:15px 0 0;\"> <input type=\"submit\" value=\"Submit Now\" name=\"commit\" class=\"btn btn-color\"></div>
          </form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t</div>
\t</div>
{% partial 'site/services' %}

{% partial 'site/feat'  %}
<div class=\"wrap6\">
    {% partial 'site/footerinfo'  %}
  
    </div>
     {% partial 'site/testi'  %}", "C:\\xampp\\htdocs\\proexp/themes/demo/pages/home.htm", "");
    }
}
