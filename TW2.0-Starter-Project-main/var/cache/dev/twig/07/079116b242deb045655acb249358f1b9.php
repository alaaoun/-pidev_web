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

/* export_trotinettes_excel.html.twig */
class __TwigTemplate_a8714346f5c8420567f751de061d78bd extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export_trotinettes_excel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export_trotinettes_excel.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des Trotinettes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Liste des Trotinettes</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Vitesse</th>
                <th>Charge</th>
                <th>Couleur</th>
                <th>Dispo</th>
                <th>ID de la Station</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trotinettes"]) || array_key_exists("trotinettes", $context) ? $context["trotinettes"] : (function () { throw new RuntimeError('Variable "trotinettes" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trotinette"]) {
            // line 37
            yield "                <tr>
                    <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getIdTrotinette", [], "method", false, false, false, 38), "html", null, true);
            yield "</td>
                    <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getVitesse", [], "method", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getCharge", [], "method", false, false, false, 40), "html", null, true);
            yield "</td>
                    <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getCouleur", [], "method", false, false, false, 41), "html", null, true);
            yield "</td>
                    <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getDispo", [], "method", false, false, false, 42), "html", null, true);
            yield "</td>
                    <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trotinette"], "getIdStation", [], "method", false, false, false, 43), "getIdStation", [], "method", false, false, false, 43), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trotinette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </tbody>
    </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "export_trotinettes_excel.html.twig";
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
        return array (  117 => 46,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  85 => 37,  81 => 36,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des Trotinettes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Liste des Trotinettes</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Vitesse</th>
                <th>Charge</th>
                <th>Couleur</th>
                <th>Dispo</th>
                <th>ID de la Station</th>
            </tr>
        </thead>
        <tbody>
            {% for trotinette in trotinettes %}
                <tr>
                    <td>{{ trotinette.getIdTrotinette() }}</td>
                    <td>{{ trotinette.getVitesse() }}</td>
                    <td>{{ trotinette.getCharge() }}</td>
                    <td>{{ trotinette.getCouleur() }}</td>
                    <td>{{ trotinette.getDispo() }}</td>
                    <td>{{ trotinette.getIdStation().getIdStation() }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
", "export_trotinettes_excel.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\export_trotinettes_excel.html.twig");
    }
}
