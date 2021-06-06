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

/* C:\xampp\htdocs\proexp/themes/demo/partials/site/testi.htm */
class __TwigTemplate_56df71abc9802ddbce8f38b4c13e31475ef6ebcbc0b4b00d6c33b382a70fd121 extends \Twig\Template
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
        echo "<div class=\"wrap8\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"row clearfix\">
          <div class=\"col-md-3 col-sm-3\"></div>
          <div class=\"col-md-9 col-sm-9\">What Our Clients Say!</div>
        </div>
      </div>
      <div id=\"myCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">- Chris Taylor</div>
                  <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">I highly recommend Project Experts. I found them to be extremely professional at all times, After booking the turnaround time and job quality was outstanding. Overall is was a great experience, Thank you once again. THUMBS UP !!</div>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">- Bruce Smith</div>
                <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">Project Experts was professional, reliable, helpful, and friendly. They did such a great job of decking. We are more than happy with their service and will contact them in the future for our property maintenance needs. Definitely FIVE STAR service!
                </div>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">Pauline M.</div>
                <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">This is to let you know that your workmen did an excellent job and finished in a timely manner. They were friendly and pleasant and worked with little disruption or incovenience to us. I highly recommend him and his work.</div>
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
        return "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/testi.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap8\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"row clearfix\">
          <div class=\"col-md-3 col-sm-3\"></div>
          <div class=\"col-md-9 col-sm-9\">What Our Clients Say!</div>
        </div>
      </div>
      <div id=\"myCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">- Chris Taylor</div>
                  <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">I highly recommend Project Experts. I found them to be extremely professional at all times, After booking the turnaround time and job quality was outstanding. Overall is was a great experience, Thank you once again. THUMBS UP !!</div>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">- Bruce Smith</div>
                <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">Project Experts was professional, reliable, helpful, and friendly. They did such a great job of decking. We are more than happy with their service and will contact them in the future for our property maintenance needs. Definitely FIVE STAR service!
                </div>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"row clearfix\">
              <div class=\"col-md-3 col-sm-3 text-right\">
                <div class=\"txt001\">Pauline M.</div>
                <div class=\"txt2\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
              </div>
              <div class=\"col-md-9 col-sm-9\">
                <div class=\"txt3\">This is to let you know that your workmen did an excellent job and finished in a timely manner. They were friendly and pleasant and worked with little disruption or incovenience to us. I highly recommend him and his work.</div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\proexp/themes/demo/partials/site/testi.htm", "");
    }
}
