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

/* musician/index.html.twig */
class __TwigTemplate_f1a74e8b19828f09086767be7866213ba849d959fb07c6f81c555396f928bd47 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musician/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musician/index.html.twig"));

        $this->parent = $this->loadTemplate("film/indexAdmin.html.twig", "musician/index.html.twig", 1);
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

        echo "Musician index";
        
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
        echo "<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Musicians
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
                <th>Prenom</th>
                <th>Born</th>
                <th>Description</th>
                <th>Image</th>

                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musicians"]) || array_key_exists("musicians", $context) ? $context["musicians"] : (function () { throw new RuntimeError('Variable "musicians" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["musician"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "prenom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["musician"], "born", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "born", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <img width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "image", [], "any", false, false, false, 44), "html", null, true);
            echo "\" style=\"max-height: 75px;\" width=\"30\">
                </td>

                <td class=\"text-center\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musician_show", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musician_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteM", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musician'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
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
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "musician/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 58,  170 => 54,  161 => 50,  157 => 49,  153 => 48,  146 => 44,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film/indexAdmin.html.twig' %}

{% block title %}Musician index{% endblock %}

{% block body %}
<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Musicians
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
                <th>Prenom</th>
                <th>Born</th>
                <th>Description</th>
                <th>Image</th>

                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for musician in musicians %}
            <tr>
                <td>{{ musician.name }}</td>
                <td>{{ musician.prenom }}</td>
                <td>{{ musician.born ? musician.born|date('Y-m-d') : '' }}</td>
                <td>{{ musician.description }}</td>
                <td>
                    <img width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content/{{ musician.image }}\" style=\"max-height: 75px;\" width=\"30\">
                </td>

                <td class=\"text-center\">
                    <a href=\"{{ path('musician_show', {'id': musician.id}) }}\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"{{ path('musician_edit', {'id': musician.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"{{ path('deleteM', {'id': musician.id}) }}\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
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
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>

{% endblock %}
", "musician/index.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\musician\\index.html.twig");
    }
}
