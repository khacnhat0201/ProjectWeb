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

/* brand/index.html.twig */
class __TwigTemplate_bacf5a4360b79194c905e46d400756f08ada163b3d5e6b589ea4720c862a9f34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand/index.html.twig", 1);
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

        echo " Brand List ";
        
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
 
<div class=\"container-fluid\">
    <div class=\"container\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "Info"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 16
            echo "            <p class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "Error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 19
            echo "            <p class=\"alert alert-danger\"> ";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    <a class=\"btn btn-outline-success\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_create");
        echo "\">CREATE NEW GENRE</a>
    <br><br>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Actions</th> 
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 33
            echo "            <tr>
                <td scope=\"row\"> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Detail</a>   
                    <a class=\"btn btn-warning\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_update", ["id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Update</a>
                       <a class=\"btn btn-danger\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"  
                                              onclick = \"return confirm ('Are you sure to delete ?')\" >      
                    Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "brand/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 44,  162 => 38,  158 => 37,  154 => 36,  149 => 34,  146 => 33,  142 => 32,  129 => 22,  126 => 21,  117 => 19,  112 => 18,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Brand List {% endblock %}

{% block body %}
<style>
    body {
        width: 80%;
        margin: 20px auto;
    }
</style>
 
<div class=\"container-fluid\">
    <div class=\"container\">
        {% for flash in app.flashes(\"Info\") %}
            <p class=\"alert alert-success\"> {{ flash }}
        {% endfor %}
        {% for flash in app.flashes(\"Error\") %}
            <p class=\"alert alert-danger\"> {{ flash }}
        {% endfor %}
    </div>
    <a class=\"btn btn-outline-success\" href=\"{{ path ('brand_create') }}\">CREATE NEW GENRE</a>
    <br><br>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Actions</th> 
            </tr>
        </thead>
        <tbody>
        {% for brand in brands %}
            <tr>
                <td scope=\"row\"> {{ brand.name }} </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"{{ path ('brand_detail', {'id' : brand.id} )}}\">Detail</a>   
                    <a class=\"btn btn-warning\" href=\"{{ path ('brand_update', {'id' : brand.id} )}}\">Update</a>
                       <a class=\"btn btn-danger\" href=\"{{ path ('brand_delete', {'id' : brand.id} )}}\"  
                                              onclick = \"return confirm ('Are you sure to delete ?')\" >      
                    Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "brand/index.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\brand\\index.html.twig");
    }
}
