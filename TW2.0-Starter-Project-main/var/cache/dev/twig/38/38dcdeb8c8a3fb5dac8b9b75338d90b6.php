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

/* station/indexs.html.twig */
class __TwigTemplate_31c62a2a4ab58d17c1950dc6de0457ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/indexs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/indexs.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "station/indexs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "
            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">


                    <div class=\"col-sm-12 col-xl-8\">
                    <a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("station_add");
        echo "\" >Ajouter station</a>
                    <p>.</p>
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste station</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">lieu</th>
                                        <th scope=\"col\">etat</th>
                                        <th scope=\"col\">name</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 27
            echo "                                <tbody>
                                    <tr>
                                        <th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "idStation", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "lieu", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "etat", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                        <td>
                                        <a class=\"btn btn-outline-success\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("station_update", ["id" => twig_get_attribute($this->env, $this->source, $context["element"], "idStation", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" >Modifier</a>
                                        </td>
                                        <td>
                                        <a class=\"btn btn-outline-danger\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteS", ["id" => twig_get_attribute($this->env, $this->source, $context["element"], "idStation", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" >Supprimer</a>
                                        </td>

                                    </tr>
                                    </tr>
                                </tbody>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </table>
                        </div>
                    </div>




                </div>
            </div>
            <!-- Table End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "station/indexs.html.twig";
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
        return array (  139 => 44,  126 => 37,  120 => 34,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 27,  95 => 26,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}

            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">


                    <div class=\"col-sm-12 col-xl-8\">
                    <a class=\"btn btn-success\" href=\"{{ path('station_add')}}\" >Ajouter station</a>
                    <p>.</p>
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste station</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">lieu</th>
                                        <th scope=\"col\">etat</th>
                                        <th scope=\"col\">name</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                {% for element in c %}
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">{{ element.idStation}}</th>
                                        <td>{{ element.lieu}}</td>
                                        <td>{{ element.etat}}</td>
                                        <td>{{ element.name}}</td>
                                        <td>
                                        <a class=\"btn btn-outline-success\" href=\"{{ path('station_update' , {'id': element.idStation})}}\" >Modifier</a>
                                        </td>
                                        <td>
                                        <a class=\"btn btn-outline-danger\" href=\"{{ path('deleteS' , {'id': element.idStation})}}\" >Supprimer</a>
                                        </td>

                                    </tr>
                                    </tr>
                                </tbody>
                                {% endfor %}
                            </table>
                        </div>
                    </div>




                </div>
            </div>
            <!-- Table End -->
{% endblock %}
", "station/indexs.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\station\\indexs.html.twig");
    }
}
