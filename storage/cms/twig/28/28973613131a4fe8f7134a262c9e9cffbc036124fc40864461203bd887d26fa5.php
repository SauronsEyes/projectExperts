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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/services.htm */
class __TwigTemplate_882ace75cd2cafb5793032194bf5c872b02189a85e4b0b93d2927602eca10f52 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 28);
        $filters = array("page" => 19, "escape" => 31, "slice" => 33, "striptags" => 33);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['page', 'escape', 'slice', 'striptags'],
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
<section class=\"fullwidth-section-two\">
    <div class=\"outer-box clearfix\"> 
      
      <!--Right Column-->
      <div class=\"right-column\">
        <div class=\"inner clearfix\">
          <div class=\"content\">
            <h2 class=\"page-title02\">OUR SERVICES</h2>
            <div class=\"text\">Our goal is to create and maintain the highest level of customer service for all of our clients.  Project Experts is one of the leading property maintenance service provider. 
  Project Experts specializes in residential  and commercial properties.  Project Experts’ handymen & tradesmen are 
  conveniently available throughout Edmonton AB. You can refresh or refurbish your space, no matter the location of your place.  Call us today to book a free quote!</div>
            <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quote");
        echo "\" class=\"btn-style-three\">Get Started Now</a> </div>
        </div>
      </div>
      
      <!--Left Column-->
      <div class=\"left-column\">
        <div class=\"inner clearfix\">
          <div class=\"content\"> 
            <!--Services Block-->
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 29
            echo "            <div class=\"services-block\">
              <div class=\"inner-box\">
                <div class=\"icon-box\"> <a href=\"";
            // line 31
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("Services");
            echo "\\";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "servicon", [], "any", false, false, true, 31), "path", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\" alt=\"\" style=\"max-width:100px;max-height:200px;object-fit:cover;\"/></a></div>
                <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</h3>
                <div class=\"text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 33), 33, $this->source)), 0, 108), "html", null, true);
            echo "...<br>
                  <a href=\"";
            // line 34
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("Services");
            echo "\\";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">Read More...</a></div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            
          
          </div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  124 => 34,  120 => 33,  116 => 32,  108 => 31,  104 => 29,  100 => 28,  88 => 19,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<section class=\"fullwidth-section-two\">
    <div class=\"outer-box clearfix\"> 
      
      <!--Right Column-->
      <div class=\"right-column\">
        <div class=\"inner clearfix\">
          <div class=\"content\">
            <h2 class=\"page-title02\">OUR SERVICES</h2>
            <div class=\"text\">Our goal is to create and maintain the highest level of customer service for all of our clients.  Project Experts is one of the leading property maintenance service provider. 
  Project Experts specializes in residential  and commercial properties.  Project Experts’ handymen & tradesmen are 
  conveniently available throughout Edmonton AB. You can refresh or refurbish your space, no matter the location of your place.  Call us today to book a free quote!</div>
            <a href=\"{{ 'quote'|page }}\" class=\"btn-style-three\">Get Started Now</a> </div>
        </div>
      </div>
      
      <!--Left Column-->
      <div class=\"left-column\">
        <div class=\"inner clearfix\">
          <div class=\"content\"> 
            <!--Services Block-->
            {% for record in records %}
            <div class=\"services-block\">
              <div class=\"inner-box\">
                <div class=\"icon-box\"> <a href=\"{{ 'Services' | page }}\\{{record.id}}\"><img src=\"{{ record.servicon.path }}\" alt=\"\" style=\"max-width:100px;max-height:200px;object-fit:cover;\"/></a></div>
                <h3>{{ record.title }}</h3>
                <div class=\"text\">{{ record.description|striptags|slice(0,108) }}...<br>
                  <a href=\"{{ 'Services' | page }}\\{{record.id}}\">Read More...</a></div>
              </div>
            </div>
            {% endfor %}
            
          
          </div>
        </div>
      </div>
    </div>
  </section>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/services.htm", "");
    }
}
