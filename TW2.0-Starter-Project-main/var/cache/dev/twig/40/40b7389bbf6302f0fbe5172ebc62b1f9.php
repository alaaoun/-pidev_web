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

/* booking.html.twig */
class __TwigTemplate_14104fabd0571974124e746f4d7a1449 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking.html.twig"));

        $this->parent = $this->loadTemplate("home/index.html.twig", "booking.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Scooter";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "     ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
     <link rel=\"stylesheet\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "
    <!-- Page Header Start -->
    <div class=\"container-fluid page-header\">
        <h1 class=\"display-3 text-uppercase text-white mb-3\">ELECTRIC scooters Booking</h1>
        <div class=\"d-inline-flex text-white\">
            <h6 class=\"text-uppercase m-0\"><a class=\"text-white\" href=\"\">Home</a></h6>
            <h6 class=\"text-body m-0 px-3\">/</h6>
            <h6 class=\"text-uppercase text-body m-0\">e.scooters Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Detail Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"container pt-5 pb-3\">
        <h1 class=\"display-4 text-uppercase mb-5\" id=\"scooterName\"></h1>
        <div class=\"row align-items-center pb-2\">
            <div class=\"col-lg-6 mb-4\">
                <img class=\"img-fluid\" id=\"scooterImage\" src=\"\" alt=\"Scooter Image\">
            </div>
            <div class=\"col-lg-6 mb-4\">
                <h4 class=\"mb-2\" id=\"scooterPrice\">USD/Day</h4> <!-- Prepared to dynamically update text content -->
            </div>
        </div>
    </div>
</div>

<!-- Detail End -->


<!-- Car Booking Start -->
<div class=\"container-fluid pb-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <h2 class=\"mb-4\">Booking Detail</h2>
                <div class=\"mb-5\">
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"date_pickup\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" class=\"form-control p-4\" id=\"quantity\" placeholder=\"Quantité\" min=\"1\" max=\"10\"/>
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"period_hour\">
                                <label for=\"period\">Period/Hour:</label>
                                <input type=\"number\" class=\"form-control p-4\" id=\"period\" placeholder=\"Period/Hour\" min=\"1\" max=\"10\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"pickup_date_picker\">
                                <label for=\"pickup_date\">Pickup Date:</label>
                                <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" id=\"pickup_date\" placeholder=\"Pickup Date\"
                                    data-target=\"#pickup_date_picker\" data-toggle=\"datetimepicker\" />
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"pickup_time_picker\">
                                <label for=\"pickup_time\">Pickup Time:</label>
                                <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" id=\"pickup_time\" placeholder=\"Pickup Time\"
                                    data-target=\"#pickup_time_picker\" data-toggle=\"datetimepicker\" />
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"tax_calc\">
                                <label for=\"tax\">Tax:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"tax\" placeholder=\"Tax\" disabled />
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"total_calc\">
                                <label for=\"total\">Total:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"total\" placeholder=\"Total\" disabled />
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 form-group\">
                            <div class=\"time\" id=\"total_amount_calc\">
                                <label for=\"total_amount\">Total amount:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"total_amount\" placeholder=\"Total amount\" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mx-auto\">
                <div class=\"bg-secondary p-5 mb-5\">
                    <h2 class=\"text-primary mb-4\">Payment</h2>
                    <button class=\"btn btn-block btn-primary py-3\">Reserve Now</button></br>
                    <button class=\"btn btn-block btn-primary py-3\">Received</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Booking End -->
  <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"owl-carousel vendor-carousel\">
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt2.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt10.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt12.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt9.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt8.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt7.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt11.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt13.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Retrieve the data from sessionStorage
    const name = sessionStorage.getItem('scooterName');
    const price = sessionStorage.getItem('scooterPrice');
    const image = sessionStorage.getItem('scooterImage');

    // Update the HTML elements with the retrieved data
    document.getElementById('scooterName').textContent = name ? name : 'Unknown Scooter';
    document.getElementById('scooterPrice').textContent = price ? `\${price} TD/Hour` : 'Pricing unavailable';
    const imgElement = document.getElementById('scooterImage');
    if (image) {
        imgElement.src = image;
        imgElement.alt = \"Image of \" + name;  // Provide a meaningful alt text
    } else {
        imgElement.alt = 'No image available';
    }
});
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 170
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 172
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>



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
        return "booking.html.twig";
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
        return array (  303 => 172,  298 => 171,  288 => 170,  120 => 11,  110 => 10,  97 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/index.html.twig' %}

{% block title %}Scooter{% endblock %}

{% block stylesheets %}
     {{ parent() }}
     <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}

    <!-- Page Header Start -->
    <div class=\"container-fluid page-header\">
        <h1 class=\"display-3 text-uppercase text-white mb-3\">ELECTRIC scooters Booking</h1>
        <div class=\"d-inline-flex text-white\">
            <h6 class=\"text-uppercase m-0\"><a class=\"text-white\" href=\"\">Home</a></h6>
            <h6 class=\"text-body m-0 px-3\">/</h6>
            <h6 class=\"text-uppercase text-body m-0\">e.scooters Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Detail Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"container pt-5 pb-3\">
        <h1 class=\"display-4 text-uppercase mb-5\" id=\"scooterName\"></h1>
        <div class=\"row align-items-center pb-2\">
            <div class=\"col-lg-6 mb-4\">
                <img class=\"img-fluid\" id=\"scooterImage\" src=\"\" alt=\"Scooter Image\">
            </div>
            <div class=\"col-lg-6 mb-4\">
                <h4 class=\"mb-2\" id=\"scooterPrice\">USD/Day</h4> <!-- Prepared to dynamically update text content -->
            </div>
        </div>
    </div>
</div>

<!-- Detail End -->


<!-- Car Booking Start -->
<div class=\"container-fluid pb-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <h2 class=\"mb-4\">Booking Detail</h2>
                <div class=\"mb-5\">
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"date_pickup\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" class=\"form-control p-4\" id=\"quantity\" placeholder=\"Quantité\" min=\"1\" max=\"10\"/>
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"period_hour\">
                                <label for=\"period\">Period/Hour:</label>
                                <input type=\"number\" class=\"form-control p-4\" id=\"period\" placeholder=\"Period/Hour\" min=\"1\" max=\"10\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"date\" id=\"pickup_date_picker\">
                                <label for=\"pickup_date\">Pickup Date:</label>
                                <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" id=\"pickup_date\" placeholder=\"Pickup Date\"
                                    data-target=\"#pickup_date_picker\" data-toggle=\"datetimepicker\" />
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"pickup_time_picker\">
                                <label for=\"pickup_time\">Pickup Time:</label>
                                <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" id=\"pickup_time\" placeholder=\"Pickup Time\"
                                    data-target=\"#pickup_time_picker\" data-toggle=\"datetimepicker\" />
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"tax_calc\">
                                <label for=\"tax\">Tax:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"tax\" placeholder=\"Tax\" disabled />
                            </div>
                        </div>
                        <div class=\"col-6 form-group\">
                            <div class=\"time\" id=\"total_calc\">
                                <label for=\"total\">Total:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"total\" placeholder=\"Total\" disabled />
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 form-group\">
                            <div class=\"time\" id=\"total_amount_calc\">
                                <label for=\"total_amount\">Total amount:</label>
                                <input type=\"text\" class=\"form-control p-4\" id=\"total_amount\" placeholder=\"Total amount\" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mx-auto\">
                <div class=\"bg-secondary p-5 mb-5\">
                    <h2 class=\"text-primary mb-4\">Payment</h2>
                    <button class=\"btn btn-block btn-primary py-3\">Reserve Now</button></br>
                    <button class=\"btn btn-block btn-primary py-3\">Received</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Booking End -->
  <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"owl-carousel vendor-carousel\">
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt2.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt10.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt12.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt9.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt8.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt7.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt11.png\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"img/tt13.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Retrieve the data from sessionStorage
    const name = sessionStorage.getItem('scooterName');
    const price = sessionStorage.getItem('scooterPrice');
    const image = sessionStorage.getItem('scooterImage');

    // Update the HTML elements with the retrieved data
    document.getElementById('scooterName').textContent = name ? name : 'Unknown Scooter';
    document.getElementById('scooterPrice').textContent = price ? `\${price} TD/Hour` : 'Pricing unavailable';
    const imgElement = document.getElementById('scooterImage');
    if (image) {
        imgElement.src = image;
        imgElement.alt = \"Image of \" + name;  // Provide a meaningful alt text
    } else {
        imgElement.alt = 'No image available';
    }
});
</script>


{% endblock %}
  
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/main.js') }}\"></script>



{% endblock %}






", "booking.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\booking.html.twig");
    }
}
