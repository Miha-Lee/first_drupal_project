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

/* modules/custom/first_block/templates/contact-block.html.twig */
class __TwigTemplate_8af94aa86110974a918be0d71010e292 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"contact-section\" id=\"contact\">
    <div class=\"container\">
        <div class=\"contact-narrow\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 col-md-pull-3\">
                    <span class=\"title-heading\">Get in Touch</span>
                    <h2 class=\"contact-heading\">Contact</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <div class=\"contact-email\">
                        <div class=\"email-icon\">
                            <i class=\"icon-globe\"></i>
                        </div>
                        <div class=\"email-text\">
                            <p>
                                <a class=\"email-color\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 18, $this->source), "html", null, true);
        echo "</a>
                            </p>
                        </div>
                    </div>
                    <div class=\"contact-email\">
                        <div class=\"email-icon\">
                            <i class=\"map-globe\"></i>
                        </div>
                        <div class=\"email-text\">
                            <p class=\"address-color\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 27, $this->source), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"contact-email\">
                        <div class=\"email-icon\">
                            <i class=\"tel-globe\"></i>
                        </div>
                        <div class=\"email-text\">
                            <p>
                                <a class=\"email-color\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 36, $this->source), "html", null, true);
        echo "</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-7 col-md-push-1\">
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1 col-md-pull-1\">
                            <form>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\"/>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Subject\"/>
                                </div>
                                <div class=\"form-group\">
                                    <textarea cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Message\" style=\"height: 130px;\"></textarea>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"btn btn-primary \" value=\"Send Message\">
                                </div>
                            </form>
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
        return "modules/custom/first_block/templates/contact-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 36,  70 => 27,  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/first_block/templates/contact-block.html.twig", "C:\\xampp\\htdocs\\drupalproject\\modules\\custom\\first_block\\templates\\contact-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
}
