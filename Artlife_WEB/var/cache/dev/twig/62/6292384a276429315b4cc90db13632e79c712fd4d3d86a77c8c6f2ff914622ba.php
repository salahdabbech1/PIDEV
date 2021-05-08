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
class __TwigTemplate_eb6e805c4d57aff4d3b2971807c1d45761e8fd97b83eb67743f199c1006b853f extends Template
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

                <div class=\"card-body\">
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musicians"]) || array_key_exists("musicians", $context) ? $context["musicians"] : (function () { throw new RuntimeError('Variable "musicians" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["musician"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["musician"], "born", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "born", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>
                    <img width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "image", [], "any", false, false, false, 47), "html", null, true);
            echo "\" style=\"max-height: 75px;\" width=\"30\">
                </td>

                <td class=\"text-center\">
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musician_show", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("musician_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteM", ["id" => twig_get_attribute($this->env, $this->source, $context["musician"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musician'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
        <a href =\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stati");
        echo "\" class=\"btn btn-primary\" >Statistics   <i class=\"fa fa-bar-chart\"></i></a>
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
        return array (  185 => 62,  182 => 61,  173 => 57,  164 => 53,  160 => 52,  156 => 51,  149 => 47,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  129 => 41,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

                <div class=\"card-body\">
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

        <a href =\"{{ path('stati') }}\" class=\"btn btn-primary\" >Statistics   <i class=\"fa fa-bar-chart\"></i></a>
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
