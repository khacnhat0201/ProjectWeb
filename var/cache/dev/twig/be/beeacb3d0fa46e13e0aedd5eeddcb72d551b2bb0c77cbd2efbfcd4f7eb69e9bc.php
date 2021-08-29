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

/* brand/detail.html.twig */
class __TwigTemplate_4e401a5978e23746d2165d9b6748671c3dc76a6ab6e376b2743d0eec1b8a125a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand/detail.html.twig", 1);
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

        echo " Brand Detail ";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_index");
        echo "\">Back to list</a>
    <br><br>
    <table class=\"table table-striped\" style=\"text-align:center\">
        <thead>
            <tr>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Description</th> 
                <th scope=\"col\">Mangas</th> 
                <th scope=\"col\">Actions</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope=\"row\"> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo " </td>
                <td scope=\"row\"> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo " </td>
                <td scope=\"row\">  
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 28, $this->source); })()), "phones", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 29
            echo "                           <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "Name", [], "any", false, false, false, 29), "html", null, true);
            echo " </a>
                            <br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Update</a>
                    <a class=\"btn btn-danger\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\"  
                                              onclick = \"return confirm ('Are you sure to delete ?')\" >      
                    Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "brand/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 35,  141 => 34,  137 => 32,  125 => 29,  121 => 28,  116 => 26,  112 => 25,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Brand Detail {% endblock %}

{% block body %}
<style>
    body {
        width: 80%;
        margin: 20px auto;
    }
</style>
    <a class=\"btn btn-outline-success\" href=\"{{ path ('brand_index')}}\">Back to list</a>
    <br><br>
    <table class=\"table table-striped\" style=\"text-align:center\">
        <thead>
            <tr>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Description</th> 
                <th scope=\"col\">Mangas</th> 
                <th scope=\"col\">Actions</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope=\"row\"> {{ brand.name }} </td>
                <td scope=\"row\"> {{ brand.description }} </td>
                <td scope=\"row\">  
                    {% for phone in brand.phones %}
                           <a href=\"{{ path('phone_detail', {'id' : phone.id }) }}\"> {{ phone.Name }} </a>
                            <br>
                    {% endfor %}
                </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"{{ path ('brand_update', {'id' : brand.id} )}}\">Update</a>
                    <a class=\"btn btn-danger\" href=\"{{ path ('brand_delete', {'id' : brand.id} )}}\"  
                                              onclick = \"return confirm ('Are you sure to delete ?')\" >      
                    Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{% endblock %}
", "brand/detail.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\brand\\detail.html.twig");
    }
}
