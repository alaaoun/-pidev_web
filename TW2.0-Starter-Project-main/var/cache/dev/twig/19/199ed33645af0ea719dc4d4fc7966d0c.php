<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* trotinette/ajouter.html.twig */
class __TwigTemplate_b1f67e6181ae2ef27b9b08be86d43334 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trotinette/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trotinette/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "trotinette/ajouter.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-secondary rounded h-100 p-4\">
                    <h6 class=\"mb-4\">Ajouter Trottinette</h6>
                    <form method=\"post\">
                        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
                        
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
        yield " ";
        // line 13
        yield "                        
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vitesse", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Vitesse"]]);
        yield "
                        <span style=\"color: red;\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vitesse", [], "any", false, false, false, 15), 'errors');
        yield "</span>
                        
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "charge", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Charge"]]);
        yield "
                        <span style=\"color: red;\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "charge", [], "any", false, false, false, 18), 'errors');
        yield "</span>
                        
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "couleur", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Couleur"]]);
        yield "
                        <span style=\"color: red;\">";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "couleur", [], "any", false, false, false, 21), 'errors');
        yield "</span>

                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dispo", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "oui/non"]]);
        yield "
                        <span style=\"color: red;\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dispo", [], "any", false, false, false, 24), 'errors');
        yield "</span>
                        
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "idStation", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Transmission"]]);
        yield "
                        <span style=\"color: red;\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "idStation", [], "any", false, false, false, 27), 'errors');
        yield "</span>
                   
                        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        yield "
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "trotinette/ajouter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  133 => 29,  128 => 27,  124 => 26,  119 => 24,  115 => 23,  110 => 21,  106 => 20,  101 => 18,  97 => 17,  92 => 15,  88 => 14,  85 => 13,  82 => 12,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-secondary rounded h-100 p-4\">
                    <h6 class=\"mb-4\">Ajouter Trottinette</h6>
                    <form method=\"post\">
                        {{ form_start(form) }}
                        
                        {{ form_errors(form) }} {# Affiche les erreurs globales du formulaire #}
                        
                        {{ form_row(form.vitesse, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Vitesse'}}) }}
                        <span style=\"color: red;\">{{ form_errors(form.vitesse) }}</span>
                        
                        {{ form_row(form.charge, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Charge'}}) }}
                        <span style=\"color: red;\">{{ form_errors(form.charge) }}</span>
                        
                        {{ form_row(form.couleur, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Couleur'}}) }}
                        <span style=\"color: red;\">{{ form_errors(form.couleur) }}</span>

                        {{ form_row(form.dispo, {'attr': {'class': 'form-control mb-3', 'placeholder': 'oui/non'}}) }}
                        <span style=\"color: red;\">{{ form_errors(form.dispo) }}</span>
                        
                        {{ form_row(form.idStation, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Transmission'}}) }}
                        <span style=\"color: red;\">{{ form_errors(form.idStation) }}</span>
                   
                        {{ form_end(form) }}
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "trotinette/ajouter.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\trotinette\\ajouter.html.twig");
    }
}
