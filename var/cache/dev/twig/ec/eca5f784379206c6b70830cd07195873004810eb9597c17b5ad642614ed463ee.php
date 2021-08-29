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

/* tablet1/detail.html.twig */
class __TwigTemplate_fbf2805fd489f40c3b47f560d90d5263e70bf4bdb0e14df43e74d09bedba90e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tablet1/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tablet1/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tablet1/detail.html.twig", 1);
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

        echo " Manga Detail ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>
        .detail {
            width:40%;
            margin: 10px auto;
            background-color: rgb(235, 233, 231);
            display:flex;
        }

        .infor {
            width:492px;
        }

        .infor-title {
            font-weight:500;
            font-size: 30px;
            
            color:tomato;
        }

        .infor-item {
            margin-left: 98px;
            margin-top:20px;
        }

        .infor-item a {
            text-decoration:none;
        }

        .table {
            margin: 10px;
        }
    </style>
    <div class = \"detail\">
        <div><img src = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/tablet/" . twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40))), "html", null, true);
        echo "\" width = \"200px\"></div>
        <div class = \"infor\">
            <div class =\"infor-title\" style=\"text-align:center;\"> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        echo " </div>
            <table class = \"table\">
                <tr>
                    <th> Date </th>
                    <td scope=\"row\"> ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 46, $this->source); })()), "Date", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <th> Genre </th>
                    <td scope=\"row\">
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 51, $this->source); })()), "brand", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo " \"> 
                                           ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 52, $this->source); })()), "brand", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
        echo " 
                        </a>
                    </td>
                </tr>
            </table>
 
            <div class =\"infor-item\"> 
                <a class=\"btn btn-warning\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tablet_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">Update</a>
                <a class=\"btn btn-danger\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tablet_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tablet"]) || array_key_exists("tablet", $context) ? $context["tablet"] : (function () { throw new RuntimeError('Variable "tablet" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\"  
                        onclick = \"return confirm ('Are you sure to delete ?')\" >      
                Delete</a>
                <br></br>
            </div>



        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tablet1/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 60,  157 => 59,  147 => 52,  143 => 51,  135 => 46,  128 => 42,  123 => 40,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Manga Detail {% endblock %}


{% block body %}
    <style>
        .detail {
            width:40%;
            margin: 10px auto;
            background-color: rgb(235, 233, 231);
            display:flex;
        }

        .infor {
            width:492px;
        }

        .infor-title {
            font-weight:500;
            font-size: 30px;
            
            color:tomato;
        }

        .infor-item {
            margin-left: 98px;
            margin-top:20px;
        }

        .infor-item a {
            text-decoration:none;
        }

        .table {
            margin: 10px;
        }
    </style>
    <div class = \"detail\">
        <div><img src = \"{{asset('Images/tablet/' ~ tablet.image)}}\" width = \"200px\"></div>
        <div class = \"infor\">
            <div class =\"infor-title\" style=\"text-align:center;\"> {{ tablet.name }} </div>
            <table class = \"table\">
                <tr>
                    <th> Date </th>
                    <td scope=\"row\"> {{ tablet.Date | date(\"d/m/Y\") }} </td>
                </tr>
                <tr>
                    <th> Genre </th>
                    <td scope=\"row\">
                        <a href=\"{{ path ('brand_detail', {'id' : tablet.brand.id} ) }} \"> 
                                           {{ tablet.brand.name }} 
                        </a>
                    </td>
                </tr>
            </table>
 
            <div class =\"infor-item\"> 
                <a class=\"btn btn-warning\" href=\"{{ path ('tablet_update', {'id' : tablet.id} )}}\">Update</a>
                <a class=\"btn btn-danger\" href=\"{{ path ('tablet_delete', {'id' : tablet.id} )}}\"  
                        onclick = \"return confirm ('Are you sure to delete ?')\" >      
                Delete</a>
                <br></br>
            </div>



        </div>
    </div>
{% endblock %}", "tablet1/detail.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\tablet1\\detail.html.twig");
    }
}
