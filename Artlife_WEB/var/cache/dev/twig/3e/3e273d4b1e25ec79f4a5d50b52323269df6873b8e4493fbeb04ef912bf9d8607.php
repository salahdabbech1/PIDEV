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

/* @FlasherSymfony/bootstrap.html.twig */
class __TwigTemplate_18a603a087c4c6592aa4213731deaef5d694e6d12bb626420eb25b7d07863aaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FlasherSymfony/bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FlasherSymfony/bootstrap.html.twig"));

        // line 1
        if ((0 === twig_compare("success", twig_get_attribute($this->env, $this->source, (isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 1, $this->source); })()), "type", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $context["title"] = "Success";
            // line 3
            echo "    ";
            $context["alert_class"] = "alert-success";
            // line 4
            echo "    ";
            $context["progress_bg_color"] = "#155724";
        } elseif ((0 === twig_compare("error", twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5)))) {
            // line 6
            echo "    ";
            $context["title"] = "Error";
            // line 7
            echo "    ";
            $context["alert_class"] = "alert-danger";
            // line 8
            echo "    ";
            $context["progress_bg_color"] = "#721c24";
        } elseif ((0 === twig_compare("warning", twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9)))) {
            // line 10
            echo "    ";
            $context["title"] = "Warning";
            // line 11
            echo "    ";
            $context["alert_class"] = "alert-warning";
            // line 12
            echo "    ";
            $context["progress_bg_color"] = "#856404";
        } else {
            // line 14
            echo "    ";
            $context["title"] = "Info";
            // line 15
            echo "    ";
            $context["alert_class"] = "alert-info";
            // line 16
            echo "    ";
            $context["progress_bg_color"] = "#0c5460";
        }
        // line 18
        echo "
<div style=\"margin-top: 0.5rem;cursor: pointer;\">
    <div class=\"alert ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["alert_class"]) || array_key_exists("alert_class", $context) ? $context["alert_class"] : (function () { throw new RuntimeError('Variable "alert_class" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " alert-dismissible fade in show\" role=\"alert\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;border: unset;border-left: 6px solid ";
        echo twig_escape_filter($this->env, (isset($context["progress_bg_color"]) || array_key_exists("progress_bg_color", $context) ? $context["progress_bg_color"] : (function () { throw new RuntimeError('Variable "progress_bg_color" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
";
        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), "html", null, true);
        echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" onclick=\"this.parentElement.remove()\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"d-flex\" style=\"height: .125rem;margin-top: -1rem;\">
        <span class=\"flasher-progress\" style=\"background-color: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["progress_bg_color"]) || array_key_exists("progress_bg_color", $context) ? $context["progress_bg_color"] : (function () { throw new RuntimeError('Variable "progress_bg_color" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"></span>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FlasherSymfony/bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  97 => 22,  91 => 20,  87 => 18,  83 => 16,  80 => 15,  77 => 14,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if 'success' == envelope.type %}
    {% set title = 'Success' %}
    {% set alert_class = 'alert-success' %}
    {% set progress_bg_color = '#155724' %}
{% elseif 'error' == envelope.type %}
    {% set title = 'Error' %}
    {% set alert_class = 'alert-danger' %}
    {% set progress_bg_color = '#721c24' %}
{% elseif 'warning' == envelope.type %}
    {% set title = 'Warning' %}
    {% set alert_class = 'alert-warning' %}
    {% set progress_bg_color = '#856404' %}
{% else %}
    {% set title = 'Info' %}
    {% set alert_class = 'alert-info' %}
    {% set progress_bg_color = '#0c5460' %}
{% endif %}

<div style=\"margin-top: 0.5rem;cursor: pointer;\">
    <div class=\"alert {{ alert_class }} alert-dismissible fade in show\" role=\"alert\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;border: unset;border-left: 6px solid {{ progress_bg_color }}\">
{#        <strong>{{ title | trans }} !</strong> #}
        {{ envelope.message }}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" onclick=\"this.parentElement.remove()\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"d-flex\" style=\"height: .125rem;margin-top: -1rem;\">
        <span class=\"flasher-progress\" style=\"background-color: {{ progress_bg_color }}\"></span>
    </div>
</div>
", "@FlasherSymfony/bootstrap.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\vendor\\php-flasher\\flasher-symfony\\Resources\\views\\bootstrap.html.twig");
    }
}
