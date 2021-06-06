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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/feat.htm */
class __TwigTemplate_ff8fe56cb9b60b4551842e771a7dd37a02ba02d63f46e27b6032f84f153e34b2 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"wrap4\">
    <div class=\"container\">
        <div style=\"margin: 0 0 15px;\"><span class=\"subtitle\">Why Us</span></div>
        <h2 class=\"page-title03\">We Offer Best Services</h2>
        <div class=\"row clearfix\">
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\"> 100% Free Estimate
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
  <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Insured & Bonded
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Expert Employee
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Quality Standards
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  15+ Years Experience
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Comfortable Price
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
        </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/feat.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap4\">
    <div class=\"container\">
        <div style=\"margin: 0 0 15px;\"><span class=\"subtitle\">Why Us</span></div>
        <h2 class=\"page-title03\">We Offer Best Services</h2>
        <div class=\"row clearfix\">
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\"> 100% Free Estimate
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
  <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Insured & Bonded
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Expert Employee
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Quality Standards
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  15+ Years Experience
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"elementor-widget\">  Comfortable Price
  
  <i class=\"fa fa-arrow-right\"></i></div>
  
          </div>
        </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/feat.htm", "");
    }
}
