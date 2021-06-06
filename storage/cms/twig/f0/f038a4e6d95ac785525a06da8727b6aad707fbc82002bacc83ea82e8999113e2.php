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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/header.htm */
class __TwigTemplate_6f685b544d1ed011d1ce9d06c55fe2f8373a7170a7a27001eb84a26615b3d887 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 41);
        $filters = array("theme" => 16, "page" => 27, "escape" => 42);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['theme', 'page', 'escape'],
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


<div class=\"wrap2\">
  <div class=\"container\">
    <div class=\"row clearfix\">
      <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <div class=\"nawrap\">
          <div class=\"navholder\">
            <div class=\"logo\"><a href=\"./\" title=\"Project Experts\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"></a> </div>
            <div class=\"toptel\"><i class=\"fa fa-phone-square\"></i> 780 660 0900 </div>
            <div class=\"toptel01\"><a href=\"tel:7806600900\"><i class=\"fa fa-phone-square\"></i> Tap To Call Us</a></div>
            <nav role=\"navigation\" class=\"navbar navbar-default\"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <span class=\"menutxt\">Menu</span> </div>
              <!-- Collection of nav links, forms, and other content for toggling -->
              <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                  <li><a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"active\">Home <br>
                    <span>back to the homepage</span></a> </li>
                  <li><a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\" class=\"menulink\">About Us<br>
                    <span>description about ourself</span></a> </li>
                  <li><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("Services");
        echo "\" class=\"menulink\">Services We Provide<br>
                    <span>what we’re proud of </span></a> </li>
                  <li><a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("projects");
        echo "\" class=\"menulink\">Our Projects<br>
                    <span>all work accessible in one place</span></a> </li>
                  <li><a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quote");
        echo "\" class=\"menulink\">Get A Free Quote<br>
                    <span>getting you a free quote</span></a> </li>
                  <li><a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\" class=\"menulink\">Reviews<br>
                    <span>what other say about us</span></a> </li>
                  <li><a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"menulink\">Contact Us<br>
                    <span>get in touch with us</span></a> </li>
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 42
            echo "                    <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pages", ["id" => twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 42)]);
            echo "\" class=\"menulink\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</a> </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </ul>
              </div>
            </nav>
          </div>
          <div class=\"navbottom-img\"><img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_back.png");
        echo "\" alt=\"\"> </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-8 col-xs-12\"></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  149 => 44,  138 => 42,  134 => 41,  129 => 39,  124 => 37,  119 => 35,  114 => 33,  109 => 31,  104 => 29,  99 => 27,  85 => 16,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}



<div class=\"wrap2\">
  <div class=\"container\">
    <div class=\"row clearfix\">
      <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <div class=\"nawrap\">
          <div class=\"navholder\">
            <div class=\"logo\"><a href=\"./\" title=\"Project Experts\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\"></a> </div>
            <div class=\"toptel\"><i class=\"fa fa-phone-square\"></i> 780 660 0900 </div>
            <div class=\"toptel01\"><a href=\"tel:7806600900\"><i class=\"fa fa-phone-square\"></i> Tap To Call Us</a></div>
            <nav role=\"navigation\" class=\"navbar navbar-default\"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <span class=\"menutxt\">Menu</span> </div>
              <!-- Collection of nav links, forms, and other content for toggling -->
              <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                  <li><a href=\"{{ 'home' | page }}\" class=\"active\">Home <br>
                    <span>back to the homepage</span></a> </li>
                  <li><a href=\"{{ 'about-us' | page }}\" class=\"menulink\">About Us<br>
                    <span>description about ourself</span></a> </li>
                  <li><a href=\"{{ 'Services' | page}}\" class=\"menulink\">Services We Provide<br>
                    <span>what we’re proud of </span></a> </li>
                  <li><a href=\"{{ 'projects' | page }}\" class=\"menulink\">Our Projects<br>
                    <span>all work accessible in one place</span></a> </li>
                  <li><a href=\"{{ 'quote' | page }}\" class=\"menulink\">Get A Free Quote<br>
                    <span>getting you a free quote</span></a> </li>
                  <li><a href=\"{{ 'reviews' | page }}\" class=\"menulink\">Reviews<br>
                    <span>what other say about us</span></a> </li>
                  <li><a href=\"{{ 'contact' | page }}\" class=\"menulink\">Contact Us<br>
                    <span>get in touch with us</span></a> </li>
                  {% for record in records %}
                    <li><a href=\"{{ 'pages' | page({ id: record.id })}}\" class=\"menulink\">{{ record.title }}</a> </li>
                  {% endfor %}
                </ul>
              </div>
            </nav>
          </div>
          <div class=\"navbottom-img\"><img src=\"{{ 'assets/images/menu_back.png'|theme }}\" alt=\"\"> </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-8 col-xs-12\"></div>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/header.htm", "");
    }
}
