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

/* C:\xampp\htdocs\proexp/themes/demo/layouts/secondary.htm */
class __TwigTemplate_e7ec5c78f764860ca5310f0c63d62de82af5a1bff6db23c5328d3a3baf4327ac extends \Twig\Template
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
        $tags = array("styles" => 20, "partial" => 27, "page" => 36, "framework" => 109, "scripts" => 110);
        $filters = array("escape" => 5, "theme" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Project Experts - ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
       
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <!--<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/font-awesome/css/font-awesome.css");
        echo "\">
      
        <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/error.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">
       
        ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "    </head>
    <body>

        <!-- Header -->
        
        <header id=\"layout-header\">
            ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/topheader"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "             ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/innerinfo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "        </header>
         <!-- Banner-->
       
       

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 37
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <a id=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Back To Top\"></a>
        <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script> 
        <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/magnificpopup/jquery.magnific-popup.min.js");
        echo "\"></script>
        <link href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/magnificpopup/magnific-popup.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('[data-toggle=\"tooltip\"]').tooltip();
    });
</script>
<script type=\"text/javascript\">
\$(function(){
  \$('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    image: {
      cursor: null,
      titleSrc: 'title'
    },
\t
    gallery: {
      enabled: true,
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      navigateByImgClick: true
\t\t}
  });
  
});
  // Sets interval...what is transition slide speed?
    \$('#bannerCarousel').carousel({
    interval: 2000
});

</script>

 <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.validate.js");
        echo "\"></script>
<link href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/errors.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <script type=\"text/javascript\">
        \$().ready(function() {
        var btn = \$('#button');

        \$(window).scroll(function() {
            if (\$(window).scrollTop() > 300) {
            btn.addClass('show');
            } else {
            btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        \$('html, body').animate({scrollTop:0}, '300');
        });


                \$(\"#form\").validate();

            });
\t\t</script>

        ";
        // line 109
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 110
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 111
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proexp/themes/demo/layouts/secondary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 111,  258 => 110,  247 => 109,  219 => 84,  215 => 83,  181 => 52,  177 => 51,  173 => 50,  169 => 49,  164 => 47,  160 => 46,  156 => 45,  151 => 42,  147 => 41,  141 => 37,  139 => 36,  130 => 29,  125 => 28,  121 => 27,  113 => 21,  110 => 20,  105 => 18,  101 => 17,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Project Experts - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
       
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
        <!--<link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">-->
        <link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/font-awesome/css/font-awesome.css'|theme }}\">
      
        <link href=\"{{ 'assets/css/error.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">
       
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        
        <header id=\"layout-header\">
            {% partial 'site/topheader' %}
             {% partial 'site/innerinfo' %}
        </header>
         <!-- Banner-->
       
       

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        <a id=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Back To Top\"></a>
        <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script> 
        <script src=\"{{ 'assets/bootstrap/js/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/magnificpopup/jquery.magnific-popup.min.js'|theme }}\"></script>
        <link href=\"{{ 'assets/magnificpopup/magnific-popup.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\" />
        <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('[data-toggle=\"tooltip\"]').tooltip();
    });
</script>
<script type=\"text/javascript\">
\$(function(){
  \$('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    image: {
      cursor: null,
      titleSrc: 'title'
    },
\t
    gallery: {
      enabled: true,
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      navigateByImgClick: true
\t\t}
  });
  
});
  // Sets interval...what is transition slide speed?
    \$('#bannerCarousel').carousel({
    interval: 2000
});

</script>

 <script src=\"{{ 'assets/js/jquery.validate.js'|theme }}\"></script>
<link href=\"{{ 'assets/css/errors.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\" />

    <script type=\"text/javascript\">
        \$().ready(function() {
        var btn = \$('#button');

        \$(window).scroll(function() {
            if (\$(window).scrollTop() > 300) {
            btn.addClass('show');
            } else {
            btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        \$('html, body').animate({scrollTop:0}, '300');
        });


                \$(\"#form\").validate();

            });
\t\t</script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\proexp/themes/demo/layouts/secondary.htm", "");
    }
}
