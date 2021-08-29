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

/* phone/detail.html.twig */
class __TwigTemplate_991b005de2e7d8596cb183d15858a4eff2f6fe82f52e7e2693f102fe54891792 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "phone/detail.html.twig", 1);
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

        echo " Phone Detail ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/phone/" . twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40))), "html", null, true);
        echo "\" width = \"200px\"></div>
        <div class = \"infor\">
            <div class =\"infor-title\" style=\"text-align:center;\"> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        echo " </div>
            <table class = \"table\">
                <tr>
                    <th> description </th>
                    <td> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 46, $this->source); })()), "Description", [], "any", false, false, false, 46), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                <tr>
                    <th> Price </th>
                    <td> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 51, $this->source); })()), "Price", [], "any", false, false, false, 51), "html", null, true);
        echo "\$ </td>
                </tr>
                <tr>
                    <th> Date </th>
                    <td scope=\"row\"> ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 55, $this->source); })()), "Date", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <th> Brand </th>
                    <td scope=\"row\">
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 60, $this->source); })()), "brand", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo " \"> 
                                           ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 61, $this->source); })()), "brand", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
        echo " 
                        </a>
                    </td>
                </tr>
            </table>
 
            <div class =\"infor-item\"> 
                <a class=\"btn btn-warning\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">Update</a>
                <a class=\"btn btn-danger\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
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
        return "phone/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 69,  172 => 68,  162 => 61,  158 => 60,  150 => 55,  143 => 51,  135 => 46,  128 => 42,  123 => 40,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Phone Detail {% endblock %}


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
        <div><img src = \"{{asset('Images/phone/' ~ phone.image)}}\" width = \"200px\"></div>
        <div class = \"infor\">
            <div class =\"infor-title\" style=\"text-align:center;\"> {{ phone.name }} </div>
            <table class = \"table\">
                <tr>
                    <th> description </th>
                    <td> {{ phone.Description }} </td>
                </tr>
                <tr>
                <tr>
                    <th> Price </th>
                    <td> {{ phone.Price }}\$ </td>
                </tr>
                <tr>
                    <th> Date </th>
                    <td scope=\"row\"> {{ phone.Date | date(\"d/m/Y\") }} </td>
                </tr>
                <tr>
                    <th> Brand </th>
                    <td scope=\"row\">
                        <a href=\"{{ path ('brand_detail', {'id' : phone.brand.id} ) }} \"> 
                                           {{ phone.brand.name }} 
                        </a>
                    </td>
                </tr>
            </table>
 
            <div class =\"infor-item\"> 
                <a class=\"btn btn-warning\" href=\"{{ path ('phone_update', {'id' : phone.id} )}}\">Update</a>
                <a class=\"btn btn-danger\" href=\"{{ path ('phone_delete', {'id' : phone.id} )}}\"  
                        onclick = \"return confirm ('Are you sure to delete ?')\" >      
                Delete</a>
                <br></br>
            </div>



        </div>
    </div>
{% endblock %}", "phone/detail.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\phone\\detail.html.twig");
    }
}
