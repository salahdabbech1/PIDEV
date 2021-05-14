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

/* concert/test.html.twig */
class __TwigTemplate_5ff7453a2b18b73ff9bb87a706a70fdb03c384e3ac969220498a447c6c18c59c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/test.html.twig"));

        $this->parent = $this->loadTemplate("concert/indexFront.html.twig", "concert/test.html.twig", 1);
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
        echo "<!doctype html>
<html>
<head>
    <title>Audio Recorder</title>
    <link rel=\"icon\" type=\"image/png\" href=\"https://stephino.github.io/dist/favicon.png\" />
    <style type=\"text/css\">

        body {
            position: absolute;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            width: 100%;
            margin: 0;
        }
        .holder {
            background-color: #4c474c;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#4c474c), to(#141414));
            background-image: -o-linear-gradient(bottom, #4c474c 0%, #141414 100%);
            background-image: linear-gradient(0deg, #4c474c 0%, #141414 100%);
            border-radius: 50px;
        }
        [data-role=\"controls\"] > button {
            margin: 50px auto;
            outline: none;
            display: block;
            border: none;
            background-color: #D9AFD9;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#D9AFD9), to(#97D9E1));
            background-image: -o-linear-gradient(bottom, #D9AFD9 0%, #97D9E1 100%);
            background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-indent: -1000em;
            cursor: pointer;
            -webkit-box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset,
            0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
            box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset,
            0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
        }
        [data-role=\"controls\"] > button:hover {
            background-color: #ee7bee;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#ee7bee), to(#6fe1f5));
            background-image: -o-linear-gradient(bottom, #ee7bee 0%, #6fe1f5 100%);
            background-image: linear-gradient(0deg, #ee7bee 0%, #6fe1f5 100%);
        }
        [data-role=\"controls\"] > button[data-recording=\"true\"] {
            background-color: #ff2038;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#ff2038), to(#b30003));
            background-image: -o-linear-gradient(bottom, #ff2038 0%, #b30003 100%);
            background-image: linear-gradient(0deg, #ff2038 0%, #b30003 100%);
        }
        [data-role=\"recordings\"] > .row {
            width: auto;
            height: auto;
            padding: 20px;
        }
        [data-role=\"recordings\"] > .row > audio {
            outline: none;
        }
        [data-role=\"recordings\"] > .row > a {
            display: inline-block;
            text-align: center;
            font-size: 20px;
            line-height: 50px;
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 20px;
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
            background-color: #0093E9;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#0093E9), to(#80D0C7));
            background-image: -o-linear-gradient(bottom, #0093E9 0%, #80D0C7 100%);
            background-image: linear-gradient(0deg, #0093E9 0%, #80D0C7 100%);
            float: right;
            margin-left: 20px;
            cursor: pointer;
        }
        [data-role=\"recordings\"] > .row > a:hover {
            text-decoration: none;
        }
        [data-role=\"recordings\"] > .row > a:active {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#0093E9), to(#80D0C7));
            background-image: -o-linear-gradient(top, #0093E9 0%, #80D0C7 100%);
            background-image: linear-gradient(180deg, #0093E9 0%, #80D0C7 100%);
        }
    </style>
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery.min.js\"></script>
    <script src=\"https://stephino.github.io/dist/recorder.js\"></script>
    <script>
        jQuery(document).ready(function () {
            var \$ = jQuery;
            var myRecorder = {
                objects: {
                    context: null,
                    stream: null,
                    recorder: null
                },
                init: function () {
                    if (null === myRecorder.objects.context) {
                        myRecorder.objects.context = new (
                            window.AudioContext || window.webkitAudioContext
                        );
                    }
                },
                start: function () {
                    var options = {audio: true, video: false};
                    navigator.mediaDevices.getUserMedia(options).then(function (stream) {
                        myRecorder.objects.stream = stream;
                        myRecorder.objects.recorder = new Recorder(
                            myRecorder.objects.context.createMediaStreamSource(stream),
                            {numChannels: 1}
                        );
                        myRecorder.objects.recorder.record();
                    }).catch(function (err) {});
                },
                stop: function (listObject) {
                    if (null !== myRecorder.objects.stream) {
                        myRecorder.objects.stream.getAudioTracks()[0].stop();
                    }
                    if (null !== myRecorder.objects.recorder) {
                        myRecorder.objects.recorder.stop();

                        // Validate object
                        if (null !== listObject
                            && 'object' === typeof listObject
                            && listObject.length > 0) {
                            // Export the WAV file
                            myRecorder.objects.recorder.exportWAV(function (blob) {
                                var url = (window.URL || window.webkitURL)
                                    .createObjectURL(blob);

                                // Prepare the playback
                                var audioObject = \$('<audio controls></audio>')
                                    .attr('src', url);

                                // Prepare the download link
                                var downloadObject = \$('<a>&#9660;</a>')
                                    .attr('href', url)
                                    .attr('download', new Date().toUTCString() + '.wav');

                                // Wrap everything in a row
                                var holderObject = \$('<div class=\"row\"></div>')
                                    .append(audioObject)
                                    .append(downloadObject);

                                // Append to the list
                                listObject.append(holderObject);
                            });
                        }
                    }
                }
            };

            // Prepare the recordings list
            var listObject = \$('[data-role=\"recordings\"]');

            // Prepare the record button
            \$('[data-role=\"controls\"] > button').click(function () {
                // Initialize the recorder
                myRecorder.init();

                // Get the button state
                var buttonState = !!\$(this).attr('data-recording');

                // Toggle
                if (!buttonState) {
                    \$(this).attr('data-recording', 'true');
                    myRecorder.start();
                } else {
                    \$(this).attr('data-recording', '');
                    myRecorder.stop(listObject);
                }
            });
        });
    </script>
    <a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_index2");
        echo "\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
</head>
<body>

<div class=\"holder\">
    <div data-role=\"controls\">
        <button>Record</button>
    </div>
    <div data-role=\"recordings\"></div>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 192,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'concert/indexFront.html.twig' %}
{% block body %}
<!doctype html>
<html>
<head>
    <title>Audio Recorder</title>
    <link rel=\"icon\" type=\"image/png\" href=\"https://stephino.github.io/dist/favicon.png\" />
    <style type=\"text/css\">

        body {
            position: absolute;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            width: 100%;
            margin: 0;
        }
        .holder {
            background-color: #4c474c;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#4c474c), to(#141414));
            background-image: -o-linear-gradient(bottom, #4c474c 0%, #141414 100%);
            background-image: linear-gradient(0deg, #4c474c 0%, #141414 100%);
            border-radius: 50px;
        }
        [data-role=\"controls\"] > button {
            margin: 50px auto;
            outline: none;
            display: block;
            border: none;
            background-color: #D9AFD9;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#D9AFD9), to(#97D9E1));
            background-image: -o-linear-gradient(bottom, #D9AFD9 0%, #97D9E1 100%);
            background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-indent: -1000em;
            cursor: pointer;
            -webkit-box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset,
            0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
            box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset,
            0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
        }
        [data-role=\"controls\"] > button:hover {
            background-color: #ee7bee;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#ee7bee), to(#6fe1f5));
            background-image: -o-linear-gradient(bottom, #ee7bee 0%, #6fe1f5 100%);
            background-image: linear-gradient(0deg, #ee7bee 0%, #6fe1f5 100%);
        }
        [data-role=\"controls\"] > button[data-recording=\"true\"] {
            background-color: #ff2038;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#ff2038), to(#b30003));
            background-image: -o-linear-gradient(bottom, #ff2038 0%, #b30003 100%);
            background-image: linear-gradient(0deg, #ff2038 0%, #b30003 100%);
        }
        [data-role=\"recordings\"] > .row {
            width: auto;
            height: auto;
            padding: 20px;
        }
        [data-role=\"recordings\"] > .row > audio {
            outline: none;
        }
        [data-role=\"recordings\"] > .row > a {
            display: inline-block;
            text-align: center;
            font-size: 20px;
            line-height: 50px;
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 20px;
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
            background-color: #0093E9;
            background-image: -webkit-gradient(linear, left bottom, left top, from(#0093E9), to(#80D0C7));
            background-image: -o-linear-gradient(bottom, #0093E9 0%, #80D0C7 100%);
            background-image: linear-gradient(0deg, #0093E9 0%, #80D0C7 100%);
            float: right;
            margin-left: 20px;
            cursor: pointer;
        }
        [data-role=\"recordings\"] > .row > a:hover {
            text-decoration: none;
        }
        [data-role=\"recordings\"] > .row > a:active {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#0093E9), to(#80D0C7));
            background-image: -o-linear-gradient(top, #0093E9 0%, #80D0C7 100%);
            background-image: linear-gradient(180deg, #0093E9 0%, #80D0C7 100%);
        }
    </style>
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery.min.js\"></script>
    <script src=\"https://stephino.github.io/dist/recorder.js\"></script>
    <script>
        jQuery(document).ready(function () {
            var \$ = jQuery;
            var myRecorder = {
                objects: {
                    context: null,
                    stream: null,
                    recorder: null
                },
                init: function () {
                    if (null === myRecorder.objects.context) {
                        myRecorder.objects.context = new (
                            window.AudioContext || window.webkitAudioContext
                        );
                    }
                },
                start: function () {
                    var options = {audio: true, video: false};
                    navigator.mediaDevices.getUserMedia(options).then(function (stream) {
                        myRecorder.objects.stream = stream;
                        myRecorder.objects.recorder = new Recorder(
                            myRecorder.objects.context.createMediaStreamSource(stream),
                            {numChannels: 1}
                        );
                        myRecorder.objects.recorder.record();
                    }).catch(function (err) {});
                },
                stop: function (listObject) {
                    if (null !== myRecorder.objects.stream) {
                        myRecorder.objects.stream.getAudioTracks()[0].stop();
                    }
                    if (null !== myRecorder.objects.recorder) {
                        myRecorder.objects.recorder.stop();

                        // Validate object
                        if (null !== listObject
                            && 'object' === typeof listObject
                            && listObject.length > 0) {
                            // Export the WAV file
                            myRecorder.objects.recorder.exportWAV(function (blob) {
                                var url = (window.URL || window.webkitURL)
                                    .createObjectURL(blob);

                                // Prepare the playback
                                var audioObject = \$('<audio controls></audio>')
                                    .attr('src', url);

                                // Prepare the download link
                                var downloadObject = \$('<a>&#9660;</a>')
                                    .attr('href', url)
                                    .attr('download', new Date().toUTCString() + '.wav');

                                // Wrap everything in a row
                                var holderObject = \$('<div class=\"row\"></div>')
                                    .append(audioObject)
                                    .append(downloadObject);

                                // Append to the list
                                listObject.append(holderObject);
                            });
                        }
                    }
                }
            };

            // Prepare the recordings list
            var listObject = \$('[data-role=\"recordings\"]');

            // Prepare the record button
            \$('[data-role=\"controls\"] > button').click(function () {
                // Initialize the recorder
                myRecorder.init();

                // Get the button state
                var buttonState = !!\$(this).attr('data-recording');

                // Toggle
                if (!buttonState) {
                    \$(this).attr('data-recording', 'true');
                    myRecorder.start();
                } else {
                    \$(this).attr('data-recording', '');
                    myRecorder.stop(listObject);
                }
            });
        });
    </script>
    <a href=\"{{ path('concert_index2') }}\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
</head>
<body>

<div class=\"holder\">
    <div data-role=\"controls\">
        <button>Record</button>
    </div>
    <div data-role=\"recordings\"></div>
</div>
</body>
</html>
{% endblock %}", "concert/test.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\concert\\test.html.twig");
    }
}
