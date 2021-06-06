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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/banner.htm */
class __TwigTemplate_40eac852fd7b3a1fbd87ef365b55ae6dac98ca4d41df2794df0987a79dd5a305 extends \Twig\Template
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
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<div class=\"banwrap\">
  <div class=\"banstyle\"></div>
<div class=\"wrap3\">
  <div id=\"bannerCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" data-interval=\"3000\">

    </div>
    <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\"> <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/img1.jpg");
        echo "\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/img2.jpg");
        echo "\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/img3.jpg");
        echo "\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/img4.jpg");
        echo "\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/img5.jpg");
        echo "\" alt=\"\"> </div>
      
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banwrap\">
  <div class=\"banstyle\"></div>
<div class=\"wrap3\">
  <div id=\"bannerCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" data-interval=\"3000\">

    </div>
    <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\"> <img src=\"{{ 'assets/images/banner/img1.jpg'|theme }}\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"{{ 'assets/images/banner/img2.jpg'|theme }}\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"{{ 'assets/images/banner/img3.jpg'|theme }}\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"{{ 'assets/images/banner/img4.jpg'|theme }}\" alt=\"\"> </div>
      <div class=\"item\"> <img src=\"{{ 'assets/images/banner/img5.jpg'|theme }}\" alt=\"\"> </div>
      
    </div>
  </div>
</div>
</div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/banner.htm", "");
    }
}
