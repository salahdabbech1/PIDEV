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

/* concert/piano.html.twig */
class __TwigTemplate_388690f70b8cbea7c8623967dc3feaa2fb802ff82db77e64f86f34f75c63e8e7 extends Template
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
        return "concert/indexFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/piano.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/piano.html.twig"));

        $this->parent = $this->loadTemplate("concert/indexFront.html.twig", "concert/piano.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<!doctype html>
<html>
<head>
    <title>Piano</title>
    <link href=\"../../assets/lib/bootstrap/css/style1.css\" rel=\"stylesheet\">
</head>
<body>
<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_index2");
        echo "\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
<center>

<div class=\"piano\">

    <button class=\"white-key C4-key\"></button>
    <button class=\"black-key Db4-key\"></button>
    <button class=\"white-key D4-key\"></button>
    <button class=\"black-key Eb4-key\"></button>
    <button class=\"white-key E4-key\"></button>
    <button class=\"white-key F4-key\"></button>
    <button class=\"black-key Gb4-key\"></button>
    <button class=\"white-key G4-key\"></button>
    <button class=\"black-key Ab4-key\"></button>
    <button class=\"white-key A4-key\"></button>
    <button class=\"black-key Bb4-key\"></button>
    <button class=\"white-key B4-key\"></button>
    <button class=\"white-key C5-key\"></button>
    <button class=\"black-key Db5-key\"></button>
    <button class=\"white-key D5-key\"></button>
    <button class=\"black-key Eb5-key\"></button>
    <button class=\"white-key E5-key\"></button>
</div>
<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/js/script.js"), "html", null, true);
        echo "\"></script>
</center>
</body>
</html>
    <br>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert/piano.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'concert/indexFront.html.twig' %}
{% block body %}

<!doctype html>
<html>
<head>
    <title>Piano</title>
    <link href=\"../../assets/lib/bootstrap/css/style1.css\" rel=\"stylesheet\">
</head>
<body>
<a href=\"{{ path('concert_index2') }}\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
<center>

<div class=\"piano\">

    <button class=\"white-key C4-key\"></button>
    <button class=\"black-key Db4-key\"></button>
    <button class=\"white-key D4-key\"></button>
    <button class=\"black-key Eb4-key\"></button>
    <button class=\"white-key E4-key\"></button>
    <button class=\"white-key F4-key\"></button>
    <button class=\"black-key Gb4-key\"></button>
    <button class=\"white-key G4-key\"></button>
    <button class=\"black-key Ab4-key\"></button>
    <button class=\"white-key A4-key\"></button>
    <button class=\"black-key Bb4-key\"></button>
    <button class=\"white-key B4-key\"></button>
    <button class=\"white-key C5-key\"></button>
    <button class=\"black-key Db5-key\"></button>
    <button class=\"white-key D5-key\"></button>
    <button class=\"black-key Eb5-key\"></button>
    <button class=\"white-key E5-key\"></button>
</div>
<script type=\"text/javascript\" src=\"{{ asset('assets/lib/bootstrap/js/script.js') }}\"></script>
</center>
</body>
</html>
    <br>
    <br>
{% endblock %}", "concert/piano.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\concert\\piano.html.twig");
    }
}
