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

/* tablet1/index.html.twig */
class __TwigTemplate_29b8d014f2ee4b523b6868fb69af9056a7f05ca8f3d66c91aa4bf077dfbcd3fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tablet1/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tablet1/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tablet1/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Manga List ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    body {
        width: 80%;
        margin: 20px auto;
    }
</style>
             <a class=\"btn btn-outline-success\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tablet_create");
        echo "\">CREATE NEW Phone</a>
             <br></br>
        <table >
            <tr scope=\"col\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablets"]) || array_key_exists("tablets", $context) ? $context["tablets"] : (function () { throw new RuntimeError('Variable "tablets" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tablet"]) {
            echo " 
                ";
            // line 17
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tablet"], "image", [], "any", false, false, false, 17), null))) {
                // line 18
                echo "                   <td scope=\"row\" >  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tablet/tablet.jpg"), "html", null, true);
                echo "\" width=\"100px\" height=\"100px\"> </td>
                ";
            } else {
                // line 19
                echo "               
                    <td scope=\"row\" > <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/tablet/" . twig_get_attribute($this->env, $this->source, $context["tablet"], "image", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" width=\"200px\" height=\"310px\">.                   .</td>
                ";
            }
            // line 21
            echo "     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tablet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
            </tr>
            <tr >
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablets"]) || array_key_exists("tablets", $context) ? $context["tablets"] : (function () { throw new RuntimeError('Variable "tablets" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tablet"]) {
            // line 27
            echo "  
                        <td scope=\"row\" style=\"text-align: center;\"> <a class=\"btn btn-warning\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tablet_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["tablet"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tablet"], "Name", [], "any", false, false, false, 28), "html", null, true);
            echo "</a> </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tablet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tr>
        </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tablet1/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 30,  144 => 28,  141 => 27,  137 => 26,  132 => 23,  125 => 21,  120 => 20,  117 => 19,  111 => 18,  109 => 17,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Manga List {% endblock %}

{% block body %}
<style>
    body {
        width: 80%;
        margin: 20px auto;
    }
</style>
             <a class=\"btn btn-outline-success\" href=\"{{ path ('tablet_create') }}\">CREATE NEW Phone</a>
             <br></br>
        <table >
            <tr scope=\"col\">
                {% for tablet in tablets %} 
                {% if tablet.image == null %}
                   <td scope=\"row\" >  <img src=\"{{ asset ('images/tablet/tablet.jpg')}}\" width=\"100px\" height=\"100px\"> </td>
                {% else %}               
                    <td scope=\"row\" > <img src=\"{{ asset ('images/tablet/' ~ tablet.image)}}\" width=\"200px\" height=\"310px\">.                   .</td>
                {% endif %}     
                {% endfor %}

            </tr>
            <tr >
                {% for tablet in tablets %}
  
                        <td scope=\"row\" style=\"text-align: center;\"> <a class=\"btn btn-warning\" href=\"{{ path ('tablet_detail', {'id' : tablet.id} )}}\">{{ tablet.Name}}</a> </td>
                {% endfor %}
            </tr>
        </table>

{% endblock %}", "tablet1/index.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\tablet1\\index.html.twig");
    }
}
