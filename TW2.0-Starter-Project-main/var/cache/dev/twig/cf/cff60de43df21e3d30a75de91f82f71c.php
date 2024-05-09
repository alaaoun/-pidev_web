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

/* trotinette/index.html.twig */
class __TwigTemplate_da6aa7c3ea3e5f500d1a120c8ef66646 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trotinette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trotinette/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "trotinette/index.html.twig", 1);
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
        yield "
            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">


<div class=\"col-sm-12 col-xl-8\"
<div class=\"col-sm-12 col-xl-8\">
    <a class=\"btn btn-success\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trotinette_add");
        yield "\">
       <i class=\"fas fa-plus\"></i> ajouter trotinette


    </a>
    <a class=\"btn btn-success\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generate_excel");
        yield "\">
        <i class=\"fas fa-file-excel\"></i> Export Excel
    </a>
    <a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
        yield "\">
        <i class=\"fas fa-chart-bar\"></i> Statistiques
    </a>
</div>

</div>



                    <p>.</p>
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste Trotinette</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">Vitesse</th>
                                        <th scope=\"col\">Charge</th>
                                        <th scope=\"col\">Couleur</th>
                                        <th scope=\"col\">DisponibilitÃ©</th>
                                        <th scope=\"col\">Station</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 46
            yield "                                <tbody>
                                    <tr>
                                        <th scope=\"row\">";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "idTrotinette", [], "any", false, false, false, 48), "html", null, true);
            yield "</th>
                                        <td>";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "vitesse", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                        <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "charge", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td>";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "couleur", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "dispo", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                        <td>";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "idStation", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                        <td>
                                        <a class=\"btn btn-outline-success\" href=\"";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trotinette_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["element"], "idTrotinette", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" >Modifier</a>
                                        </td>
                                        <td>
                                        <a class=\"btn btn-outline-danger\" href=\"";
            // line 58
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteT", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["element"], "idTrotinette", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" >Supprimer</a>
                                        </td>

                                    </tr>
                                    </tr>
                                </tbody>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                            </table>
                        </div>
                    </div>




                </div>
            </div>
            <!-- Table End -->
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
        return "trotinette/index.html.twig";
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
        return array (  173 => 65,  160 => 58,  154 => 55,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  125 => 46,  121 => 45,  93 => 20,  87 => 17,  79 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}

            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">


<div class=\"col-sm-12 col-xl-8\"
<div class=\"col-sm-12 col-xl-8\">
    <a class=\"btn btn-success\" href=\"{{ path('trotinette_add')}}\">
       <i class=\"fas fa-plus\"></i> ajouter trotinette


    </a>
    <a class=\"btn btn-success\" href=\"{{ path('app_generate_excel')}}\">
        <i class=\"fas fa-file-excel\"></i> Export Excel
    </a>
    <a class=\"btn btn-success\" href=\"{{ path('statistiques')}}\">
        <i class=\"fas fa-chart-bar\"></i> Statistiques
    </a>
</div>

</div>



                    <p>.</p>
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste Trotinette</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">Vitesse</th>
                                        <th scope=\"col\">Charge</th>
                                        <th scope=\"col\">Couleur</th>
                                        <th scope=\"col\">DisponibilitÃ©</th>
                                        <th scope=\"col\">Station</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                {% for element in c %}
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">{{ element.idTrotinette}}</th>
                                        <td>{{ element.vitesse}}</td>
                                        <td>{{ element.charge}}</td>
                                        <td>{{ element.couleur}}</td>
                                        <td>{{ element.dispo}}</td>
                                        <td>{{ element.idStation.name}}</td>
                                        <td>
                                        <a class=\"btn btn-outline-success\" href=\"{{ path('trotinette_update' , {'id': element.idTrotinette})}}\" >Modifier</a>
                                        </td>
                                        <td>
                                        <a class=\"btn btn-outline-danger\" href=\"{{ path('deleteT' , {'id': element.idTrotinette})}}\" >Supprimer</a>
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
", "trotinette/index.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\trotinette\\index.html.twig");
    }
}
