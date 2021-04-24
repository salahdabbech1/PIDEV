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

/* theatre/showAdmin.html.twig */
class __TwigTemplate_cd739b484e73f436e14ccc9b9bf946c1fe234edb1430756aca2248d35f294e9a extends Template
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
        return "theatre/indexAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/showAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/showAdmin.html.twig"));

        $this->parent = $this->loadTemplate("theatre/indexAdmin.html.twig", "theatre/showAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "theatres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Theatres
                </div>
                <div class=\"card-body\">
    <h1>Theatres</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
          
            <tr>
                <th>Poster</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 30, $this->source); })()), "poster", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trailer</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 38, $this->source); })()), "trailer", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theatre_index2");
        echo "\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>

    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theatre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\"class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theatre_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>

                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "theatre/showAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  148 => 45,  143 => 43,  135 => 38,  128 => 34,  121 => 30,  113 => 25,  106 => 21,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'theatre/indexAdmin.html.twig' %}
{% block title %}theatres{% endblock %}

{% block body %}
<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Theatres
                </div>
                <div class=\"card-body\">
    <h1>Theatres</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ theatre.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ theatre.name }}</td>
            </tr>
          
            <tr>
                <th>Poster</th>
                <td>{{ theatre.poster }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ theatre.image }}</td>
            </tr>
            <tr>
                <th>Trailer</th>
                <td>{{ theatre.trailer }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('theatre_index2') }}\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>

    <a href=\"{{ path('theatre_edit', {'id': theatre.id}) }}\"class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"{{ path('theatre_delete', {'id': theatre.id}) }}\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>

                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>
{% endblock %}
", "theatre/showAdmin.html.twig", "C:\\Users\\ahmed\\Downloads\\ArtLife\\templates\\theatre\\showAdmin.html.twig");
    }
}
