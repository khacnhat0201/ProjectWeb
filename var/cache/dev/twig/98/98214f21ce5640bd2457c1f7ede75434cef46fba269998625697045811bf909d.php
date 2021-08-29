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

/* phone/create.html.twig */
class __TwigTemplate_8b2b2935e019708bab3d67f49063ce7a2455482c5846125213a1a3e5c1d5c6c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "phone/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h2 class=\"mt-5 mb-5 text-center text-success\"> CREATE Phone </h2>
    <div class=\"col-md-6 offset-md-3\"></div>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            <h6 class=\"text-primary\"> Phone Name </h6>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "Name", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Description </h6>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Description", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Price </h6>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Image </h6>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Image", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
                <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone  Date </h6>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Date", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Type </h6>
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Brand", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group text-center mt-5\">
            <button class=\"btn btn-info mt-2\">CREATE</button>
        </div>
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "phone/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  116 => 32,  109 => 28,  102 => 24,  94 => 19,  87 => 15,  79 => 10,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container\">
    <h2 class=\"mt-5 mb-5 text-center text-success\"> CREATE Phone </h2>
    <div class=\"col-md-6 offset-md-3\"></div>
    {{ form_start (form) }}
        <div class=\"form-group\">
            <h6 class=\"text-primary\"> Phone Name </h6>
            {{ form_widget (form.Name, {'attr' : {'class' : 'form-control'}}) }}
        </div>

        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Description </h6>
            {{ form_widget (form.Description, {'attr' : {'class' : 'form-control'}}) }}
        </div>
        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Price </h6>
            {{ form_widget (form.price, {'attr' : {'class' : 'form-control'}}) }}
        </div>

        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Image </h6>
            {{ form_widget (form.Image, {'attr' : {'class' : 'form-control'}}) }}
        </div>
                <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone  Date </h6>
            {{ form_widget (form.Date, {'attr' : {'class' : 'form-control'}}) }}
        </div>
        <div class=\"form-group mt-2\">
            <h6 class=\"text-primary\"> Phone Type </h6>
            {{ form_widget (form.Brand, {'attr' : {'class' : 'form-control'}}) }}
        </div>
        <div class=\"form-group text-center mt-5\">
            <button class=\"btn btn-info mt-2\">CREATE</button>
        </div>
    {{ form_end (form) }}
</div>
{% endblock %}", "phone/create.html.twig", "C:\\MAMP\\htdocs\\shop\\templates\\phone\\create.html.twig");
    }
}
