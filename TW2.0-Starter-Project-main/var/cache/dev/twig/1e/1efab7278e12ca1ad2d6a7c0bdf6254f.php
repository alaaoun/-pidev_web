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

/* index.html.twig */
class __TwigTemplate_8c195b69f7a2e021944f5f6cf121c5ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("home/index.html.twig", "index.html.twig", 1);
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

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "    <!-- Page Header Start -->
    <div class=\"container-fluid page-header\">
        <h1 class=\"display-3 text-uppercase text-white mb-3\">ELECTRIC Scooters Listing</h1>
        <div class=\"d-inline-flex text-white\">
            <h6 class=\"text-uppercase m-0\"><a class=\"text-white\" href=\"\">Home</a></h6>
            <h6 class=\"text-body m-0 px-3\">/</h6>
            <h6 class=\"text-uppercase text-body m-0\">E.scooters Listing</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Find Your ELECTRIC Scooter</h1>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-2\">
                        <div class=\"rent-item mb-4\">
    <img class=\"img-fluid mb-4\" src=\"img/T1.jpg\" alt=\"Scooter 1\" width=\"100%\">
    <h4 class=\"text-uppercase mb-4\">Scooter 1</h4>
    <div class=\"d-flex justify-content-center mb-4\">
        <span>10.00/Hour</span>
    </div>
    <!-- Ajout de l'attribut onclick qui appelle saveScooterData avec 'this' comme argument -->
    <a class=\"btn btn-primary px-3\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scooter_booking");
        yield "\"
       data-name=\"Scooter 1\" data-price=\"10.00\" data-image=\"img/T2.jpg\"
       onclick=\"saveScooterData(this); return false;\">
       Reserve Now
    </a>
</div>

              
            
               
                      
           
                            
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->


    <!-- Banner Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row mx-0\">
                <div class=\"col-lg-6 px-0\">
                    <div class=\"px-5 bg-secondary d-flex align-items-center justify-content-between\" style=\"height: 350px;\">
                        
                        <div class=\"text-right\">
                            <h3 class=\"text-uppercase text-light mb-3\">Want to be driver?</h3>
                           
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 px-0\">
                    <div class=\"px-5 bg-dark d-flex align-items-center justify-content-between\" style=\"height: 350px;\">
                        <div class=\"text-left\">
                            <h3 class=\"text-uppercase text-light mb-3\">Looking for a ELECTRIC scooter</h3>
                           
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


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
        // Select only the buttons that are expected to have the necessary data attributes
        const reserveButtons = document.querySelectorAll('a.btn-primary[data-name]');

        reserveButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();  // Prevent the default anchor click behavior

                // Retrieve data attributes from the button
                const scooterName = this.getAttribute('data-name') || 'Default Name';
                const scooterPrice = this.getAttribute('data-price') || '0.00';
                const scooterImage = this.getAttribute('data-image') || 'path/to/default/image.jpg';

                // Debugging log
                console.log('Reserving:', scooterName, scooterPrice, scooterImage);

                // Safely store the data in sessionStorage
                try {
                    sessionStorage.setItem('scooterName', scooterName);
                    sessionStorage.setItem('scooterPrice', scooterPrice);
                    sessionStorage.setItem('scooterImage', scooterImage);

                    // Redirect to the booking page
                    window.location.href = this.href;
                } catch (e) {
                    console.error('Error storing items in sessionStorage: ', e);
                }
            });
        });
    });
</script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 154
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 156
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
        return "index.html.twig";
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
        return array (  289 => 156,  284 => 155,  274 => 154,  147 => 37,  120 => 12,  110 => 11,  97 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
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
        <h1 class=\"display-3 text-uppercase text-white mb-3\">ELECTRIC Scooters Listing</h1>
        <div class=\"d-inline-flex text-white\">
            <h6 class=\"text-uppercase m-0\"><a class=\"text-white\" href=\"\">Home</a></h6>
            <h6 class=\"text-body m-0 px-3\">/</h6>
            <h6 class=\"text-uppercase text-body m-0\">E.scooters Listing</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Find Your ELECTRIC Scooter</h1>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-2\">
                        <div class=\"rent-item mb-4\">
    <img class=\"img-fluid mb-4\" src=\"img/T1.jpg\" alt=\"Scooter 1\" width=\"100%\">
    <h4 class=\"text-uppercase mb-4\">Scooter 1</h4>
    <div class=\"d-flex justify-content-center mb-4\">
        <span>10.00/Hour</span>
    </div>
    <!-- Ajout de l'attribut onclick qui appelle saveScooterData avec 'this' comme argument -->
    <a class=\"btn btn-primary px-3\" href=\"{{ path('app_scooter_booking') }}\"
       data-name=\"Scooter 1\" data-price=\"10.00\" data-image=\"img/T2.jpg\"
       onclick=\"saveScooterData(this); return false;\">
       Reserve Now
    </a>
</div>

              
            
               
                      
           
                            
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->


    <!-- Banner Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row mx-0\">
                <div class=\"col-lg-6 px-0\">
                    <div class=\"px-5 bg-secondary d-flex align-items-center justify-content-between\" style=\"height: 350px;\">
                        
                        <div class=\"text-right\">
                            <h3 class=\"text-uppercase text-light mb-3\">Want to be driver?</h3>
                           
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 px-0\">
                    <div class=\"px-5 bg-dark d-flex align-items-center justify-content-between\" style=\"height: 350px;\">
                        <div class=\"text-left\">
                            <h3 class=\"text-uppercase text-light mb-3\">Looking for a ELECTRIC scooter</h3>
                           
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


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
        // Select only the buttons that are expected to have the necessary data attributes
        const reserveButtons = document.querySelectorAll('a.btn-primary[data-name]');

        reserveButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();  // Prevent the default anchor click behavior

                // Retrieve data attributes from the button
                const scooterName = this.getAttribute('data-name') || 'Default Name';
                const scooterPrice = this.getAttribute('data-price') || '0.00';
                const scooterImage = this.getAttribute('data-image') || 'path/to/default/image.jpg';

                // Debugging log
                console.log('Reserving:', scooterName, scooterPrice, scooterImage);

                // Safely store the data in sessionStorage
                try {
                    sessionStorage.setItem('scooterName', scooterName);
                    sessionStorage.setItem('scooterPrice', scooterPrice);
                    sessionStorage.setItem('scooterImage', scooterImage);

                    // Redirect to the booking page
                    window.location.href = this.href;
                } catch (e) {
                    console.error('Error storing items in sessionStorage: ', e);
                }
            });
        });
    });
</script>
    {% endblock %}
    
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/main.js') }}\"></script>

{% endblock %}






", "index.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\index.html.twig");
    }
}
