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

/* theatre/quiz.html.twig */
class __TwigTemplate_1484158afc4055c8854f7014181bd5e1e2a72f1712defe7b2e0fe9a7fb5be361 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/quiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/quiz.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Quiz App</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scss/quiz.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"home-box custom-box \">
<h3> Instructions:</h3>
<p> Total of questions :<span class=\"total-question\">5</span></p>
<button type =\"button\" class=\"btn\" onclick=\"startQuiz()\">Start </button>
</div>
<div class=\"quiz-box custom-box hide\">
<div class=\"question-text\"></div>
<div class=\"question-number\"></div>

<div class=\"option-container\">

</div>
<div class=\"question-container\"></div>
<div class=\"next-question-button\"></div>
<button type=\"button\" class=\"btn\" onclick=\"next()\"> Next</button>
<div class=\"answers-indicator\">


</div>
</div>

<div class=\"result-box custom-box hide \">
<table>
<tr>
<td>Total Question</td>
<td><span class=\"total-question\"></span></td>
</tr>
<tr>
<td>Attempt</td>
<td><span class=\"total-attempt\"></span></td>
</tr>
<tr>
<td>Correct</td>
<td><span class=\"total-correct\"></span></td>
</tr>
<tr>
<td>Wrong</td>
<td><span class=\"total-wrong\"></span></td>
</tr>
<tr>
<td>Percentage</td>
<td><span class=\"percentage\"></span></td>
</tr>
<tr>
<td>Your total score</td>
<td><span class=\"total-score\"></span></td>
</tr>
</table>
<button type=\"button\" class=\"btn\" onclick=\"tryAgainQuiz()\">Try again</button>

<button type=\"button\" class=\"btn\" ><a style=\"text-decoration:none\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" Class=\"link\">Gome Home</a></button>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/quiz.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "theatre/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  110 => 60,  106 => 59,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>Quiz App</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/scss/quiz.css') }}\">
</head>
<body>
<div class=\"home-box custom-box \">
<h3> Instructions:</h3>
<p> Total of questions :<span class=\"total-question\">5</span></p>
<button type =\"button\" class=\"btn\" onclick=\"startQuiz()\">Start </button>
</div>
<div class=\"quiz-box custom-box hide\">
<div class=\"question-text\"></div>
<div class=\"question-number\"></div>

<div class=\"option-container\">

</div>
<div class=\"question-container\"></div>
<div class=\"next-question-button\"></div>
<button type=\"button\" class=\"btn\" onclick=\"next()\"> Next</button>
<div class=\"answers-indicator\">


</div>
</div>

<div class=\"result-box custom-box hide \">
<table>
<tr>
<td>Total Question</td>
<td><span class=\"total-question\"></span></td>
</tr>
<tr>
<td>Attempt</td>
<td><span class=\"total-attempt\"></span></td>
</tr>
<tr>
<td>Correct</td>
<td><span class=\"total-correct\"></span></td>
</tr>
<tr>
<td>Wrong</td>
<td><span class=\"total-wrong\"></span></td>
</tr>
<tr>
<td>Percentage</td>
<td><span class=\"percentage\"></span></td>
</tr>
<tr>
<td>Your total score</td>
<td><span class=\"total-score\"></span></td>
</tr>
</table>
<button type=\"button\" class=\"btn\" onclick=\"tryAgainQuiz()\">Try again</button>

<button type=\"button\" class=\"btn\" ><a style=\"text-decoration:none\" href=\"{{ path('home') }}\" Class=\"link\">Gome Home</a></button>
<script src=\"{{ asset('assets/js/quiz.js') }}\"></script>
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
</body>
</html>


", "theatre/quiz.html.twig", "C:\\Users\\ahmed\\Downloads\\ArtLife\\templates\\theatre\\quiz.html.twig");
    }
}
