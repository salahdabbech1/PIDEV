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

/* @FlasherSymfony/tailwindcss_bg.html.twig */
class __TwigTemplate_96ad362d85bc77f07697a2fa0b14217e2088b9fee1bc9564601de5ee8cf4b603 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FlasherSymfony/tailwindcss_bg.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FlasherSymfony/tailwindcss_bg.html.twig"));

        // line 1
        if ((0 === twig_compare("success", twig_get_attribute($this->env, $this->source, (isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 1, $this->source); })()), "type", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $context["title"] = "Success";
            // line 3
            echo "    ";
            $context["text_color"] = "text-green-700";
            // line 4
            echo "    ";
            $context["background_color"] = "bg-green-50";
            // line 5
            echo "    ";
            $context["progress_background_color"] = "bg-green-200";
            // line 6
            echo "    ";
            $context["border_color"] = "border-green-600";
            // line 7
            echo "    ";
            $context["icon"] = "<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"check w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/></svg>";
        } elseif ((0 === twig_compare("error", twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8)))) {
            // line 9
            echo "    ";
            $context["title"] = "Error";
            // line 10
            echo "    ";
            $context["text_color"] = "text-red-700";
            // line 11
            echo "    ";
            $context["background_color"] = "bg-red-50";
            // line 12
            echo "    ";
            $context["progress_background_color"] = "bg-red-200";
            // line 13
            echo "    ";
            $context["border_color"] = "border-red-600";
            // line 14
            echo "    ";
            $context["icon"] = "<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"x w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/></svg>";
        } elseif ((0 === twig_compare("warning", twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15)))) {
            // line 16
            echo "    ";
            $context["title"] = "Warning";
            // line 17
            echo "    ";
            $context["text_color"] = "text-yellow-700";
            // line 18
            echo "    ";
            $context["background_color"] = "bg-yellow-50";
            // line 19
            echo "    ";
            $context["progress_background_color"] = "bg-yellow-200";
            // line 20
            echo "    ";
            $context["border_color"] = "border-yellow-600";
            // line 21
            echo "    ";
            $context["icon"] = "<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"exclamation w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/></svg>";
        } else {
            // line 23
            echo "    ";
            $context["title"] = "Info";
            // line 24
            echo "    ";
            $context["text_color"] = "text-blue-700";
            // line 25
            echo "    ";
            $context["background_color"] = "bg-blue-50";
            // line 26
            echo "    ";
            $context["progress_background_color"] = "bg-blue-200";
            // line 27
            echo "    ";
            $context["border_color"] = "border-blue-600";
            // line 28
            echo "    ";
            $context["icon"] = "<svg class=\"w-8 h-8\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg>";
        }
        // line 30
        echo "
<div class=\"bg-white shadow-lg border-l-4 mt-2 cursor-pointer ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["background_color"]) || array_key_exists("background_color", $context) ? $context["background_color"] : (function () { throw new RuntimeError('Variable "background_color" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["border_color"]) || array_key_exists("border_color", $context) ? $context["border_color"] : (function () { throw new RuntimeError('Variable "border_color" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"flex items-center px-2 py-3 rounded-lg shadow-lg overflow-hidden\">
        <div class=\"inline-flex items-center p-2 text-white text-sm rounded-full ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["text_color"]) || array_key_exists("text_color", $context) ? $context["text_color"] : (function () { throw new RuntimeError('Variable "text_color" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " flex-shrink-0\">
            ";
        // line 34
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 34, $this->source); })());
        echo "
        </div>
        <div class=\"ml-4 w-0 flex-1\">
            <p class=\"text-base leading-5 font-medium capitalize ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["text_color"]) || array_key_exists("text_color", $context) ? $context["text_color"] : (function () { throw new RuntimeError('Variable "text_color" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "
            </p>
            <p class=\"mt-1 text-sm leading-5 text-gray-500\">
                ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envelope"]) || array_key_exists("envelope", $context) ? $context["envelope"] : (function () { throw new RuntimeError('Variable "envelope" does not exist.', 41, $this->source); })()), "message", [], "any", false, false, false, 41), "html", null, true);
        echo "
            </p>
        </div>
    </div>
    <div class=\"h-0.5 flex ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["background_color"]) || array_key_exists("background_color", $context) ? $context["background_color"] : (function () { throw new RuntimeError('Variable "background_color" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\">
        <span class=\"flasher-progress ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["progress_background_color"]) || array_key_exists("progress_background_color", $context) ? $context["progress_background_color"] : (function () { throw new RuntimeError('Variable "progress_background_color" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\"></span>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FlasherSymfony/tailwindcss_bg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  160 => 45,  153 => 41,  147 => 38,  143 => 37,  137 => 34,  133 => 33,  126 => 31,  123 => 30,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if 'success' == envelope.type %}
    {% set title = 'Success' %}
    {% set text_color = 'text-green-700' %}
    {% set background_color = 'bg-green-50' %}
    {% set progress_background_color = 'bg-green-200' %}
    {% set border_color = 'border-green-600' %}
    {% set icon = '<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"check w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/></svg>' %}
{% elseif 'error' == envelope.type %}
    {% set title = 'Error' %}
    {% set text_color = 'text-red-700' %}
    {% set background_color = 'bg-red-50' %}
    {% set progress_background_color = 'bg-red-200' %}
    {% set border_color = 'border-red-600' %}
    {% set icon = '<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"x w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/></svg>' %}
{% elseif 'warning' == envelope.type %}
    {% set title = 'Warning' %}
    {% set text_color = 'text-yellow-700' %}
    {% set background_color = 'bg-yellow-50' %}
    {% set progress_background_color = 'bg-yellow-200' %}
    {% set border_color = 'border-yellow-600' %}
    {% set icon = '<svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"exclamation w-8 h-8\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/></svg>' %}
{% else %}
    {% set title = 'Info' %}
    {% set text_color = 'text-blue-700' %}
    {% set background_color = 'bg-blue-50' %}
    {% set progress_background_color = 'bg-blue-200' %}
    {% set border_color = 'border-blue-600' %}
    {% set icon = '<svg class=\"w-8 h-8\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg>' %}
{% endif %}

<div class=\"bg-white shadow-lg border-l-4 mt-2 cursor-pointer {{ background_color }} {{ border_color }}\">
    <div class=\"flex items-center px-2 py-3 rounded-lg shadow-lg overflow-hidden\">
        <div class=\"inline-flex items-center p-2 text-white text-sm rounded-full {{ text_color }} flex-shrink-0\">
            {{ icon | raw }}
        </div>
        <div class=\"ml-4 w-0 flex-1\">
            <p class=\"text-base leading-5 font-medium capitalize {{ text_color }}\">
                {{ title | trans }}
            </p>
            <p class=\"mt-1 text-sm leading-5 text-gray-500\">
                {{ envelope.message }}
            </p>
        </div>
    </div>
    <div class=\"h-0.5 flex {{ background_color }}\">
        <span class=\"flasher-progress {{ progress_background_color }}\"></span>
    </div>
</div>
", "@FlasherSymfony/tailwindcss_bg.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\vendor\\php-flasher\\flasher-symfony\\Resources\\views\\tailwindcss_bg.html.twig");
    }
}