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

/* home/index.html.twig */
class __TwigTemplate_fbcf3be6ebbd526b2f96ef8ef3586616 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

 <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

        ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "
 </head>
<body>

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-lg-left mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body pr-3\" href=\"\"><i class=\"fa fa-phone-alt mr-2\"></i>+216 21 345 678</a>
                    <span class=\"text-body\">|</span>
                    <a class=\"text-body px-3\" href=\"\"><i class=\"fa fa-envelope mr-2\"></i>Esprisco@esprit.tn</a>
                </div>
            </div>
            <div class=\"col-md-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-body pl-3\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid position-relative nav-bar p-0\">
        <div class=\"position-relative px-lg-5\" style=\"z-index: 9;\">
            <nav class=\"navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5\">
                <a href=\"\" class=\"navbar-brand\">
                    <h1 class=\"text-uppercase text-primary mb-1\">ESPRISCO</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between px-3\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ml-auto py-0\">
                        <a  class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Scooter</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a   class=\"dropdown-item\">Scooter Listing</a>
                                <a   class=\"dropdown-item\">Scooter Booking</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"team.html\" class=\"dropdown-item\">The Team</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-white pt-3 px-lg-5\">
        <div class=\"row mx-n2\">
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Pickup Location</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Drop Location</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <div class=\"date mb-3\" id=\"date\" data-target-input=\"nearest\">
                    <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" placeholder=\"Pickup Date\"
                        data-target=\"#date\" data-toggle=\"datetimepicker\" />
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <div class=\"time mb-3\" id=\"time\" data-target-input=\"nearest\">
                    <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" placeholder=\"Pickup Time\"
                        data-target=\"#time\" data-toggle=\"datetimepicker\" />
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Select A E.Scooter</option>
                    <option value=\"1\">E.Scooter1</option>
                    <option value=\"2\">E.Scooter1</option>
                    <option value=\"3\">E.Scooter1</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <button class=\"btn btn-primary btn-block mb-3\" type=\"submit\" style=\"height: 50px;\">Search</button>
            </div>
        </div>
    </div>
    <!-- Search End -->

";
        // line 143
        $this->displayBlock('body', $context, $blocks);
        // line 465
        echo " 

    <!-- Footer Start -->
    <div class=\"container-fluid bg-secondary py-5 px-sm-3 px-md-5\" style=\"margin-top: 90px;\">
        <div class=\"row pt-5\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Get In Touch</h4>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-white mr-3\"></i>ARIANA SOGHRA, ARIANA, TUN</p>
                <p class=\"mb-2\"><i class=\"fa fa-phone-alt text-white mr-3\"></i>+216 21 345 678</p>
                <p><i class=\"fa fa-envelope text-white mr-3\"></i>Esprisco@esprit.tn</p>
                <h6 class=\"text-uppercase text-white py-2\">Follow Us</h6>
                <div class=\"d-flex justify-content-start\">
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Usefull Links</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Private Policy</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Term & Conditions</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>New Member Registration</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Affiliate Programme</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Return & Refund</a>
                    <a class=\"text-body\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Help & FQAs</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">electric scooters Gallery</h4>
                <div class=\"row mx-n1\">
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt3.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt10.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt2.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt10.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt12.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt8.png\" alt=\"\"></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Newsletter</h4>
           
                <div class=\"w-100 mb-3\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-dark border-dark\" style=\"padding: 25px;\" placeholder=\"Your Email\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary text-uppercase px-3\">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluid bg-dark py-4 px-sm-3 px-md-5\">
        <p class=\"mb-2 text-center text-body\">&copy; <a href=\"#\">Esprisco</a>. All Rights Reserved.</p>
\t\t
\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->\t\t\t\t\t
       
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>



";
        // line 547
        $this->displayBlock('js', $context, $blocks);
        // line 560
        echo " </body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "RESERVATION TROTINETTE";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
            <link rel=\"preconnect\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 144
        echo "    <!-- Carousel Start -->
    <div class=\"container-fluid p-0\" style=\"margin-bottom: 90px;\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"img/T10.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 700px;\">
                            <h4 class=\"text-white text-uppercase mb-md-3\">RENT AN ELECTRIC SCOOTER</h4>
                            <h1 class=\"display-1 text-white mb-md-4\">BEST E.SCOOTER FOR RENT IN YOUR LOCATION</h1>
                            <a   class=\"btn btn-primary py-md-3 px-md-5 mt-2\">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"img/t11.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h4 class=\"text-white text-uppercase mb-md-3\">Rent AN ELECTRIC SCOOTER</h4>
                            <h1 class=\"display-1 text-white mb-md-4\">HIGH QUALITY ELECTRIC SCOOTER</h1>
                            <a   class=\"btn btn-primary py-md-3 px-md-5 mt-2\">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#header-carousel\" data-slide=\"prev\">
                <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
                    <span class=\"carousel-control-prev-icon mb-n2\"></span>
                </div>
            </a>
            <a class=\"carousel-control-next\" href=\"#header-carousel\" data-slide=\"next\">
                <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
                    <span class=\"carousel-control-next-icon mb-n2\"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    
    

    


    


    <div class=\"container-fluid py-5\">
    <div class=\"container pt-5 pb-3\">
        <h1 class=\"display-1 text-primary text-center\">03</h1>
        <h1 class=\"display-4 text-uppercase text-center mb-5\">Find Your ELECTRIC SCOOTER</h1>
        <div class=\"row\">
            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trotinettes"]) || array_key_exists("trotinettes", $context) ? $context["trotinettes"] : (function () { throw new RuntimeError('Variable "trotinettes" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trotinette"]) {
            // line 199
            echo "                <div class=\"col-lg-4 col-md-6 mb-2\">
                    <div class=\"rent-item mb-4\">
                        <img class=\"img-fluid mb-4\" src=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tt7.png"), "html", null, true);
            echo "\" alt=\"\">
                        <h4 class=\"text-uppercase mb-4\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trotinette"], "idStation", [], "any", false, false, false, 202), "name", [], "any", false, false, false, 202), "html", null, true);
            echo "</h4>
                        <div class=\"d-flex justify-content-center mb-4\">
                            <div class=\"px-2\">
                                <i class=\"fas fa-circle text-primary mr-1\"></i>
                                <span>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trotinette"], "couleur", [], "any", false, false, false, 206), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"px-2 border-left border-right\">
                                <i class=\"fa fa-battery-full text-primary mr-1\"></i>
                                <span>";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trotinette"], "charge", [], "any", false, false, false, 210), "html", null, true);
            echo "</span>
                            </div>
                             <div class=\"px-2\">
                                <i class=\"fa fa-tachometer-alt text-primary mr-1\"></i>
                                <span>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trotinette"], "vitesse", [], "any", false, false, false, 214), "html", null, true);
            echo "</span>
                            </div>
                            
                        </div>
                        
                        <a class=\"btn btn-primary px-3\" href=\"#\">Rserver</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trotinette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "        </div>  
    </div>
</div>


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <h1 class=\"display-1 text-primary text-center\">04</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Meet Our Team</h1>
            <div class=\"owl-carousel team-carousel position-relative\" style=\"padding: 0 30px;\">
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/moi.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">CHIKH ZAOUALI MOHAMED</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/arbi.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">ARBI MOHAMED AZIZ</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/ala.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">AOUN ALA EDDINE</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/ben fraj.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">BEN FRAJ MOHAMED</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
                            <h3 class=\"text-uppercase text-light mb-3\">Looking for a E.scooter?</h3>
                            
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <h1 class=\"display-1 text-primary text-center\">05</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Our Client's Say</h1>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-1.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-2.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-3.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-4.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-1 text-primary text-center\">06</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Contact Us</h1>
            <div class=\"row\">
                <div class=\"col-lg-7 mb-2\">
                    <div class=\"contact-form bg-light mb-4\" style=\"padding: 30px;\">
                        <form>
                            <div class=\"row\">
                                <div class=\"col-6 form-group\">
                                    <input type=\"text\" class=\"form-control p-4\" placeholder=\"Your Name\" required=\"required\">
                                </div>
                                <div class=\"col-6 form-group\">
                                    <input type=\"email\" class=\"form-control p-4\" placeholder=\"Your Email\" required=\"required\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control p-4\" placeholder=\"Subject\" required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control py-3 px-4\" rows=\"5\" placeholder=\"Message\" required=\"required\"></textarea>
                            </div>
                            <div>
                                <button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 mb-2\">
                    <div class=\"bg-secondary d-flex flex-column justify-content-center px-5 mb-4\" style=\"height: 435px;\">
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Head Office</h5>
                                <p>Ariana Soghra, Ariana, TUNISIA</p>
                            </div>
                        </div>
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Branch Office</h5>
                                <p>Ariana Soghra, Ariana, TUNISIA</p>
                            </div>
                        </div>
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Customer Service</h5>
                                <p>Esprisco@esprit.tn</p>
                            </div>
                        </div>
                        <div class=\"d-flex\">
                            <i class=\"fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Return & Refund</h5>
                                <p class=\"m-0\">Esprisco@esprit.tn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 547
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 548
        echo "    <!-- JavaScript Libraries -->
    <script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Template Javascript -->
    <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  768 => 558,  763 => 556,  759 => 555,  755 => 554,  751 => 553,  747 => 552,  743 => 551,  739 => 550,  735 => 549,  732 => 548,  722 => 547,  470 => 223,  455 => 214,  448 => 210,  441 => 206,  434 => 202,  430 => 201,  426 => 199,  422 => 198,  366 => 144,  356 => 143,  344 => 19,  340 => 18,  336 => 17,  332 => 16,  328 => 15,  324 => 14,  320 => 13,  315 => 12,  305 => 11,  286 => 6,  276 => 560,  274 => 547,  190 => 465,  188 => 143,  64 => 21,  62 => 11,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

 <head>
    <meta charset=\"utf-8\">
    <title>{% block title %}RESERVATION TROTINETTE{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

        {% block css%}
            <link rel=\"icon\" href=\"{{ asset('img/favicon.ico') }}\">
            <link rel=\"preconnect\" href=\"{{ asset('https://fonts.gstatic.com') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}

 </head>
<body>

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-lg-left mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body pr-3\" href=\"\"><i class=\"fa fa-phone-alt mr-2\"></i>+216 21 345 678</a>
                    <span class=\"text-body\">|</span>
                    <a class=\"text-body px-3\" href=\"\"><i class=\"fa fa-envelope mr-2\"></i>Esprisco@esprit.tn</a>
                </div>
            </div>
            <div class=\"col-md-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-body px-3\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-body pl-3\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid position-relative nav-bar p-0\">
        <div class=\"position-relative px-lg-5\" style=\"z-index: 9;\">
            <nav class=\"navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5\">
                <a href=\"\" class=\"navbar-brand\">
                    <h1 class=\"text-uppercase text-primary mb-1\">ESPRISCO</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between px-3\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ml-auto py-0\">
                        <a  class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Scooter</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a   class=\"dropdown-item\">Scooter Listing</a>
                                <a   class=\"dropdown-item\">Scooter Booking</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"team.html\" class=\"dropdown-item\">The Team</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-white pt-3 px-lg-5\">
        <div class=\"row mx-n2\">
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Pickup Location</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Drop Location</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <div class=\"date mb-3\" id=\"date\" data-target-input=\"nearest\">
                    <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" placeholder=\"Pickup Date\"
                        data-target=\"#date\" data-toggle=\"datetimepicker\" />
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <div class=\"time mb-3\" id=\"time\" data-target-input=\"nearest\">
                    <input type=\"text\" class=\"form-control p-4 datetimepicker-input\" placeholder=\"Pickup Time\"
                        data-target=\"#time\" data-toggle=\"datetimepicker\" />
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <select class=\"custom-select px-4 mb-3\" style=\"height: 50px;\">
                    <option selected>Select A E.Scooter</option>
                    <option value=\"1\">E.Scooter1</option>
                    <option value=\"2\">E.Scooter1</option>
                    <option value=\"3\">E.Scooter1</option>
                </select>
            </div>
            <div class=\"col-xl-2 col-lg-4 col-md-6 px-2\">
                <button class=\"btn btn-primary btn-block mb-3\" type=\"submit\" style=\"height: 50px;\">Search</button>
            </div>
        </div>
    </div>
    <!-- Search End -->

{% block body %}
    <!-- Carousel Start -->
    <div class=\"container-fluid p-0\" style=\"margin-bottom: 90px;\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"img/T10.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 700px;\">
                            <h4 class=\"text-white text-uppercase mb-md-3\">RENT AN ELECTRIC SCOOTER</h4>
                            <h1 class=\"display-1 text-white mb-md-4\">BEST E.SCOOTER FOR RENT IN YOUR LOCATION</h1>
                            <a   class=\"btn btn-primary py-md-3 px-md-5 mt-2\">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"img/t11.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h4 class=\"text-white text-uppercase mb-md-3\">Rent AN ELECTRIC SCOOTER</h4>
                            <h1 class=\"display-1 text-white mb-md-4\">HIGH QUALITY ELECTRIC SCOOTER</h1>
                            <a   class=\"btn btn-primary py-md-3 px-md-5 mt-2\">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#header-carousel\" data-slide=\"prev\">
                <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
                    <span class=\"carousel-control-prev-icon mb-n2\"></span>
                </div>
            </a>
            <a class=\"carousel-control-next\" href=\"#header-carousel\" data-slide=\"next\">
                <div class=\"btn btn-dark\" style=\"width: 45px; height: 45px;\">
                    <span class=\"carousel-control-next-icon mb-n2\"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    
    

    


    


    <div class=\"container-fluid py-5\">
    <div class=\"container pt-5 pb-3\">
        <h1 class=\"display-1 text-primary text-center\">03</h1>
        <h1 class=\"display-4 text-uppercase text-center mb-5\">Find Your ELECTRIC SCOOTER</h1>
        <div class=\"row\">
            {% for trotinette in trotinettes %}
                <div class=\"col-lg-4 col-md-6 mb-2\">
                    <div class=\"rent-item mb-4\">
                        <img class=\"img-fluid mb-4\" src=\"{{ asset('img/tt7.png') }}\" alt=\"\">
                        <h4 class=\"text-uppercase mb-4\">{{ trotinette.idStation.name }}</h4>
                        <div class=\"d-flex justify-content-center mb-4\">
                            <div class=\"px-2\">
                                <i class=\"fas fa-circle text-primary mr-1\"></i>
                                <span>{{ trotinette.couleur }}</span>
                            </div>
                            <div class=\"px-2 border-left border-right\">
                                <i class=\"fa fa-battery-full text-primary mr-1\"></i>
                                <span>{{ trotinette.charge }}</span>
                            </div>
                             <div class=\"px-2\">
                                <i class=\"fa fa-tachometer-alt text-primary mr-1\"></i>
                                <span>{{ trotinette.vitesse }}</span>
                            </div>
                            
                        </div>
                        
                        <a class=\"btn btn-primary px-3\" href=\"#\">Rserver</a>
                    </div>
                </div>
            {% endfor %}
        </div>  
    </div>
</div>


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <h1 class=\"display-1 text-primary text-center\">04</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Meet Our Team</h1>
            <div class=\"owl-carousel team-carousel position-relative\" style=\"padding: 0 30px;\">
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/moi.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">CHIKH ZAOUALI MOHAMED</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/arbi.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">ARBI MOHAMED AZIZ</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/ala.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">AOUN ALA EDDINE</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <img class=\"img-fluid w-100\" src=\"img/ben fraj.jpg\" alt=\"\">
                    <div class=\"position-relative py-4\">
                        <h4 class=\"text-uppercase\">BEN FRAJ MOHAMED</h4>
                        <p class=\"m-0\">Designation</p>
                        <div class=\"team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center\">
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-lg btn-primary btn-lg-square mx-1\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
                            <h3 class=\"text-uppercase text-light mb-3\">Looking for a E.scooter?</h3>
                            
                            <a class=\"btn btn-primary py-2 px-4\" href=\"\">Start Now</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <h1 class=\"display-1 text-primary text-center\">05</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Our Client's Say</h1>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-1.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-2.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-3.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class=\"testimonial-item d-flex flex-column justify-content-center px-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <img class=\"img-fluid ml-n4\" src=\"img/testimonial-4.jpg\" alt=\"\">
                        <h1 class=\"display-2 text-white m-0 fa fa-quote-right\"></h1>
                    </div>
                    <h4 class=\"text-uppercase mb-2\">Client Name</h4>
                    <i class=\"mb-2\">Profession</i>
                    <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-1 text-primary text-center\">06</h1>
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Contact Us</h1>
            <div class=\"row\">
                <div class=\"col-lg-7 mb-2\">
                    <div class=\"contact-form bg-light mb-4\" style=\"padding: 30px;\">
                        <form>
                            <div class=\"row\">
                                <div class=\"col-6 form-group\">
                                    <input type=\"text\" class=\"form-control p-4\" placeholder=\"Your Name\" required=\"required\">
                                </div>
                                <div class=\"col-6 form-group\">
                                    <input type=\"email\" class=\"form-control p-4\" placeholder=\"Your Email\" required=\"required\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control p-4\" placeholder=\"Subject\" required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control py-3 px-4\" rows=\"5\" placeholder=\"Message\" required=\"required\"></textarea>
                            </div>
                            <div>
                                <button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 mb-2\">
                    <div class=\"bg-secondary d-flex flex-column justify-content-center px-5 mb-4\" style=\"height: 435px;\">
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Head Office</h5>
                                <p>Ariana Soghra, Ariana, TUNISIA</p>
                            </div>
                        </div>
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Branch Office</h5>
                                <p>Ariana Soghra, Ariana, TUNISIA</p>
                            </div>
                        </div>
                        <div class=\"d-flex mb-3\">
                            <i class=\"fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Customer Service</h5>
                                <p>Esprisco@esprit.tn</p>
                            </div>
                        </div>
                        <div class=\"d-flex\">
                            <i class=\"fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3\"></i>
                            <div class=\"mt-n1\">
                                <h5 class=\"text-light\">Return & Refund</h5>
                                <p class=\"m-0\">Esprisco@esprit.tn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
{% endblock %} 

    <!-- Footer Start -->
    <div class=\"container-fluid bg-secondary py-5 px-sm-3 px-md-5\" style=\"margin-top: 90px;\">
        <div class=\"row pt-5\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Get In Touch</h4>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-white mr-3\"></i>ARIANA SOGHRA, ARIANA, TUN</p>
                <p class=\"mb-2\"><i class=\"fa fa-phone-alt text-white mr-3\"></i>+216 21 345 678</p>
                <p><i class=\"fa fa-envelope text-white mr-3\"></i>Esprisco@esprit.tn</p>
                <h6 class=\"text-uppercase text-white py-2\">Follow Us</h6>
                <div class=\"d-flex justify-content-start\">
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-lg btn-dark btn-lg-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Usefull Links</h4>
                <div class=\"d-flex flex-column justify-content-start\">
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Private Policy</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Term & Conditions</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>New Member Registration</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Affiliate Programme</a>
                    <a class=\"text-body mb-2\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Return & Refund</a>
                    <a class=\"text-body\" href=\"#\"><i class=\"fa fa-angle-right text-white mr-2\"></i>Help & FQAs</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">electric scooters Gallery</h4>
                <div class=\"row mx-n1\">
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt3.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt10.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt2.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt10.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt12.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 px-1 mb-2\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/tt8.png\" alt=\"\"></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h4 class=\"text-uppercase text-light mb-4\">Newsletter</h4>
           
                <div class=\"w-100 mb-3\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-dark border-dark\" style=\"padding: 25px;\" placeholder=\"Your Email\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary text-uppercase px-3\">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluid bg-dark py-4 px-sm-3 px-md-5\">
        <p class=\"mb-2 text-center text-body\">&copy; <a href=\"#\">Esprisco</a>. All Rights Reserved.</p>
\t\t
\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->\t\t\t\t\t
       
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>



{% block js %}
    <!-- JavaScript Libraries -->
    <script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
 </body></html>", "home/index.html.twig", "C:\\Users\\21652\\Desktop\\TW2.0-Starter-Project-main\\templates\\home\\index.html.twig");
    }
}
