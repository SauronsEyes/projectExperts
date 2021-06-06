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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/footerinfo.htm */
class __TwigTemplate_d916415c8f6bb7644d5d8ce4e053009d114764a95ef68173d6b1f6c20ca04144 extends \Twig\Template
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
        $filters = array("theme" => 20);
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
        echo "<div class=\"wrap7\">
    <div class=\"container\">
      <h1 class=\"title\">Ready to Bring Bigger, Better, Faster And Stronger Projects<br>
        Than Ever Before!!</h1>
      <div class=\"wrap7-box\">
        <div class=\"row clearfix\">
          <div class=\"col-md-4 col-sm-4 block\">
            <div class=\"contactbox\">
              <div style=\"margin:0 0 20px;\">    
                <h4 class=\"title2\"> Quick Contact:</h4>
                <p>Email: newstylepainting@hotmail.com<br>
Address: Edmonton AB T5H 1N2</p>
<p class=\"txt01\">We will get back to you within 24 hours or call us Mon-Saturday 8am to 6pm.</p>
              </div>
             <h3 class=\"title3\"><i class=\"fa fa-phone-square\"></i> 780 660 0900 </h3>
              
              <div>
                <h4 class=\"title2\">Follow Us On</h4>
                <div class=\"socials\"> 
               <a href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fb-icon.png");
        echo "\" alt=\"\"></a>
                <a href=\"https://www.instagram.com/\" target=\"_blank\"><img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/insta-icon.png");
        echo "\" alt=\"\"></a> 
                <a href=\"https://www.linkedin.com/\" target=\"_blank\"><img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-icon.png");
        echo "\" alt=\"\"></a> 
                 
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-8 col-sm-8\">
           <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4741.697692413557!2d-113.4687792726894!3d53.54261307008233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a022f5fa1b9e69%3A0x4334072d1def2454!2sEdmonton%2C%20AB%20T5H%201N2%2C%20Canada!5e0!3m2!1sen!2snp!4v1616478540530!5m2!1sen!2snp\" width=\"100%\" height=\"390\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/footerinfo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 21,  83 => 20,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap7\">
    <div class=\"container\">
      <h1 class=\"title\">Ready to Bring Bigger, Better, Faster And Stronger Projects<br>
        Than Ever Before!!</h1>
      <div class=\"wrap7-box\">
        <div class=\"row clearfix\">
          <div class=\"col-md-4 col-sm-4 block\">
            <div class=\"contactbox\">
              <div style=\"margin:0 0 20px;\">    
                <h4 class=\"title2\"> Quick Contact:</h4>
                <p>Email: newstylepainting@hotmail.com<br>
Address: Edmonton AB T5H 1N2</p>
<p class=\"txt01\">We will get back to you within 24 hours or call us Mon-Saturday 8am to 6pm.</p>
              </div>
             <h3 class=\"title3\"><i class=\"fa fa-phone-square\"></i> 780 660 0900 </h3>
              
              <div>
                <h4 class=\"title2\">Follow Us On</h4>
                <div class=\"socials\"> 
               <a href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"{{ 'assets/images/fb-icon.png'|theme }}\" alt=\"\"></a>
                <a href=\"https://www.instagram.com/\" target=\"_blank\"><img src=\"{{ 'assets/images/insta-icon.png'|theme }}\" alt=\"\"></a> 
                <a href=\"https://www.linkedin.com/\" target=\"_blank\"><img src=\"{{ 'assets/images/linkedin-icon.png'|theme }}\" alt=\"\"></a> 
                 
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-8 col-sm-8\">
           <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4741.697692413557!2d-113.4687792726894!3d53.54261307008233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a022f5fa1b9e69%3A0x4334072d1def2454!2sEdmonton%2C%20AB%20T5H%201N2%2C%20Canada!5e0!3m2!1sen!2snp!4v1616478540530!5m2!1sen!2snp\" width=\"100%\" height=\"390\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/footerinfo.htm", "");
    }
}
