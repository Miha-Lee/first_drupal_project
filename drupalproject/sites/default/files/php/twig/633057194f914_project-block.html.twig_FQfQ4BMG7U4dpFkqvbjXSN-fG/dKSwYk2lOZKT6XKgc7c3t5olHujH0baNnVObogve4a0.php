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

/* modules/custom/first_block/templates/project-block.html.twig */
class __TwigTemplate_52676727888657ffb94b12b3d60e5929 extends \Twig\Template
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
        echo "<div class=\"port-section\" id=\"port-folio\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"port-head text-center col-md-12\">
                <h2>
                    <strong>Portfolio</strong>
                </h2>
            </div>
        </div>
        <div>
            <div class=\"row\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projectItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project_item"]) {
            // line 13
            echo "                <div class=\"single-port col-sm-4\">
                    <div class=\"relative\">
                        <a data-toggle=\"modal\" data-target=";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = $context["project_item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), 15, $this->source), "html", null, true);
            echo ">
                            <div style=\"cursor: pointer;\">
                                <img src=";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["project_item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["project_image"] ?? null) : null), 17, $this->source), "html", null, true);
            echo " alt=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = $context["project_item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["alt"] ?? null) : null), 17, $this->source), "html", null, true);
            echo " class=\"image img-fluid\"/>
                            </div>
                        </a>
                    </div>
                    <div class=\"text-center p-title\">
                        <h4>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = $context["project_item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["project_title"] ?? null) : null), 22, $this->source), "html", null, true);
            echo "</h4>
                        <div class=\"p-inner-des\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = $context["project_item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["skill_stack"] ?? null) : null), 23, $this->source), "html", null, true);
            echo "</div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>
    </div>    
</div>

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modalItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["modalItem"]) {
            // line 33
            echo "<div class=\"modal fade\" id=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = $context["modalItem"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), 33, $this->source), "html", null, true);
            echo " tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body p-0\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                <div class=\"row\">
                    <div class=\"col-12 px-5 pt-5 text-center\">
                        <h5 class=\"font-weight-normal mb-3\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = $context["modalItem"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["header"] ?? null) : null), 40, $this->source), "html", null, true);
            echo "</h5>
                        <p class=\"text-muted\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = $context["modalItem"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["words"] ?? null) : null), 41, $this->source), "html", null, true);
            echo "</p>
                        <ul class=\"list-unstyled font-small mt-5\">
                            <li>
                                <p class=\"text-uppercase mb-2\"><strong>Skills</strong></p>
                                <p class=\"text-muted mb-4\">";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = $context["modalItem"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["skills"] ?? null) : null), 45, $this->source), "html", null, true);
            echo "</p>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <a  class=\"btn btn-success\">View Source Code</a>
                    <a  class=\"btn btn-info\">View Site</a>
                </div>
            </div>
        </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modalItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/first_block/templates/project-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  115 => 41,  111 => 40,  100 => 33,  96 => 32,  89 => 27,  79 => 23,  75 => 22,  65 => 17,  60 => 15,  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/first_block/templates/project-block.html.twig", "C:\\xampp\\htdocs\\drupalproject\\modules\\custom\\first_block\\templates\\project-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
