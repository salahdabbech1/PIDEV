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

/* concert/show.html.twig */
class __TwigTemplate_b16cea743d773acd7e503997aa81c069473d8ece39ccbee49f6c44272f9d972a extends Template
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
        return "film/indexAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/show.html.twig"));

        $this->parent = $this->loadTemplate("film/indexAdmin.html.twig", "concert/show.html.twig", 1);
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

        echo "Concert";
        
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
                    Concerts
                </div>
                <div class=\"card-body\">
    <h1>Concert</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idmusician</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 29, $this->source); })()), "idmusician", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Musics</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 33, $this->source); })()), "musics", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trailer</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 41, $this->source); })()), "trailer", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_index");
        echo "\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>

    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteC", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
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
        return "concert/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  154 => 48,  149 => 46,  141 => 41,  134 => 37,  127 => 33,  120 => 29,  113 => 25,  106 => 21,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film/indexAdmin.html.twig' %}
{% block title %}Concert{% endblock %}

{% block body %}
<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Concerts
                </div>
                <div class=\"card-body\">
    <h1>Concert</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ concert.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ concert.name }}</td>
            </tr>
            <tr>
                <th>Idmusician</th>
                <td>{{ concert.idmusician }}</td>
            </tr>
            <tr>
                <th>Musics</th>
                <td>{{ concert.musics }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ concert.image }}</td>
            </tr>
            <tr>
                <th>Trailer</th>
                <td>{{ concert.trailer }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('concert_index') }}\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>

    <a href=\"{{ path('concert_edit', {'id': concert.id}) }}\"class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"{{ path('deleteC', {'id': concert.id}) }}\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>

                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>
{% endblock %}
", "concert/show.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\concert\\show.html.twig");
    }
}
