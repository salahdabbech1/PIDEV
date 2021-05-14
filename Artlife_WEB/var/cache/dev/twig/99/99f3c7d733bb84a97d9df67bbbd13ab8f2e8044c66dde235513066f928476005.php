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

/* concert/index.html.twig */
class __TwigTemplate_7ab360d7931e66513d78a9d727c04d38a1cb46ae698d18712d05068a80a566a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/index.html.twig"));

        $this->parent = $this->loadTemplate("film/indexAdmin.html.twig", "concert/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Concert index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Concert
                </div>
                <a href=\"new\" class=\"btn btn-primary btn-rounded box-shadow col-md-1\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\"><i class=\"fa fa-plus\"></i></a>
                <div class=\"card-body\">


                    <input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
                           placeholder=\"Search in table\">


    <table class=\"footable table table-hover\" data-page-size=\"5\" data-filter=#filter>
        <thead>
            <tr>
                <th>Name</th>
                <th>Idmusician</th>
                <th>Musics</th>
                <th>Image</th>
                <th>Trailer</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "idmusician", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "musics", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>
                    <img width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "image", [], "any", false, false, false, 45), "html", null, true);
            echo "\" style=\"max-height: 75px;\" width=\"30\">
                </td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "trailer", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteC", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_show", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <a href =\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export");
        echo "\" class=\"btn btn-primary\" >Export Table As Excel  <i class=\"fa fa-file\"></i></a>
        <a href =\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videochat");
        echo "\" class=\"btn btn-primary\" >Video Live Streaming  <i class=\"fa fa-file-video-o\"></i></a>
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"5\">
                <ul class=\"pagination float-right\"></ul>
            </td>
        </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2021 ArtLife</span>
    </footer>


</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 61,  181 => 60,  172 => 56,  163 => 52,  159 => 51,  155 => 50,  149 => 47,  144 => 45,  139 => 43,  135 => 42,  131 => 41,  128 => 40,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film/indexAdmin.html.twig' %}

{% block title %}Concert index{% endblock %}

{% block body %}

<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Concert
                </div>
                <a href=\"new\" class=\"btn btn-primary btn-rounded box-shadow col-md-1\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\"><i class=\"fa fa-plus\"></i></a>
                <div class=\"card-body\">


                    <input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
                           placeholder=\"Search in table\">


    <table class=\"footable table table-hover\" data-page-size=\"5\" data-filter=#filter>
        <thead>
            <tr>
                <th>Name</th>
                <th>Idmusician</th>
                <th>Musics</th>
                <th>Image</th>
                <th>Trailer</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for concert in concerts %}
            <tr>
                <td>{{ concert.name }}</td>
                <td>{{ concert.idmusician }}</td>
                <td>{{ concert.musics }}</td>
                <td>
                    <img width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content/{{ concert.image }}\" style=\"max-height: 75px;\" width=\"30\">
                </td>
                <td>{{ concert.trailer }}</td>
                <td>

                    <a href=\"{{ path('concert_edit', {'id': concert.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"{{ path('deleteC', {'id': concert.id}) }}\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    <a href=\"{{ path('concert_show', {'id': concert.id}) }}\"class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        <a href =\"{{ path('export') }}\" class=\"btn btn-primary\" >Export Table As Excel  <i class=\"fa fa-file\"></i></a>
        <a href =\"{{ path('videochat') }}\" class=\"btn btn-primary\" >Video Live Streaming  <i class=\"fa fa-file-video-o\"></i></a>
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"5\">
                <ul class=\"pagination float-right\"></ul>
            </td>
        </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2021 ArtLife</span>
    </footer>


</section>
{% endblock %}
", "concert/index.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\concert\\index.html.twig");
    }
}
