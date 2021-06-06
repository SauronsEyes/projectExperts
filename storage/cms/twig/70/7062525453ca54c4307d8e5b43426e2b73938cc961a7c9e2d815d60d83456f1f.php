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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/topheader.htm */
class __TwigTemplate_8a8e99fad2b95c4946dd213a69617f0466bad48ffc11654cd2a2224a21e218d6 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 46, "for" => 53);
        $filters = array("page" => 33, "theme" => 33, "escape" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['page', 'theme', 'escape'],
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

<div class=\"otherwrap\">
    <div class=\"wrap01\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12 pull-right\">
              <div class=\"top-info\">
                <div class=\"clearfix\">
                  <ul class=\"contact-info pull-left\">
                    <li><span><i class=\"fa fa-envelope\"></i> newstylepainting@hotmail.com</span></li>
                  </ul>
                  <ul class=\"social pull-right\">
                    <li class=\"toptel\"><span><i class=\"fa fa-phone\"></i> 780 660 0900 </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container --> 
      </div>
      <div data-spy=\"affix\" data-offset-top=\"197\">
        <div class=\"container\">
          <div class=\"row clearfix\">
            <div class=\"col-md-4 col-sm-12 col-xs-12 logo\"><a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"Project Experts\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"/></a></div>
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
              <div class=\"toptel01\"><a href=\"tel:7806600900 \"><i class=\"fa fa-phone\"></i> Tap To Call Us </a> </div>
              <div class=\"navwrap\">
                <div class=\"row clearfix\">
                  <nav role=\"navigation\" class=\"navbar navbar-default\"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                      <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                      <span class=\"menutxt\">Menu</span> </div>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
                      <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46) == "homepage")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\" >Home</a> </li>
                        <li><a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "id", [], "any", false, false, true, 47) == "about-us")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">About us</a> </li>
                        <li><a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("Services");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 48), "id", [], "any", false, false, true, 48) == "Services")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">Services</a> </li>
                        <li><a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quote");
        echo "\"  class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "id", [], "any", false, false, true, 49) == "quote")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">Get A Quote</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("projects");
        echo "\"  class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "id", [], "any", false, false, true, 50) == "projects")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">Our Projects</a></li>
                        <li><a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\"  class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 51), "id", [], "any", false, false, true, 51) == "reviews")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">Reviews</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52) == "contact")) {
            echo " active ";
        } else {
            echo " menulink";
        }
        echo "\">Contact</a></li>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 54
            echo "                           <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pages", ["id" => twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 54)]);
            echo "\" class=\"menulink\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/topheader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 56,  194 => 54,  190 => 53,  180 => 52,  170 => 51,  160 => 50,  150 => 49,  140 => 48,  130 => 47,  120 => 46,  102 => 33,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<div class=\"otherwrap\">
    <div class=\"wrap01\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12 pull-right\">
              <div class=\"top-info\">
                <div class=\"clearfix\">
                  <ul class=\"contact-info pull-left\">
                    <li><span><i class=\"fa fa-envelope\"></i> newstylepainting@hotmail.com</span></li>
                  </ul>
                  <ul class=\"social pull-right\">
                    <li class=\"toptel\"><span><i class=\"fa fa-phone\"></i> 780 660 0900 </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container --> 
      </div>
      <div data-spy=\"affix\" data-offset-top=\"197\">
        <div class=\"container\">
          <div class=\"row clearfix\">
            <div class=\"col-md-4 col-sm-12 col-xs-12 logo\"><a href=\"{{ 'home' | page }}\" title=\"Project Experts\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\"/></a></div>
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
              <div class=\"toptel01\"><a href=\"tel:7806600900 \"><i class=\"fa fa-phone\"></i> Tap To Call Us </a> </div>
              <div class=\"navwrap\">
                <div class=\"row clearfix\">
                  <nav role=\"navigation\" class=\"navbar navbar-default\"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                      <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                      <span class=\"menutxt\">Menu</span> </div>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
                      <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ 'home' | page }}\" class=\"{% if this.page.id =='homepage' %} active {% else %} menulink{% endif %}\" >Home</a> </li>
                        <li><a href=\"{{ 'about-us' | page }}\" class=\"{% if this.page.id =='about-us' %} active {% else %} menulink{% endif %}\">About us</a> </li>
                        <li><a href=\"{{ 'Services' | page }}\" class=\"{% if this.page.id =='Services' %} active {% else %} menulink{% endif %}\">Services</a> </li>
                        <li><a href=\"{{ 'quote' | page }}\"  class=\"{% if this.page.id =='quote' %} active {% else %} menulink{% endif %}\">Get A Quote</a></li>
                        <li><a href=\"{{ 'projects' | page }}\"  class=\"{% if this.page.id =='projects' %} active {% else %} menulink{% endif %}\">Our Projects</a></li>
                        <li><a href=\"{{ 'reviews' | page }}\"  class=\"{% if this.page.id =='reviews' %} active {% else %} menulink{% endif %}\">Reviews</a></li>
                        <li><a href=\"{{ 'contact' | page}}\" class=\"{% if this.page.id =='contact' %} active {% else %} menulink{% endif %}\">Contact</a></li>
                        {% for record in records %}
                           <li><a href=\"{{ 'pages' | page({ id: record.id })}}\" class=\"menulink\">{{ record.title }}</a></li>
                        {% endfor %}
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/topheader.htm", "");
    }
}
