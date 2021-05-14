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

/* concert/video.html.twig */
class __TwigTemplate_4a253734910aaed0cd9263460bea3fe0f6a7158b65320a316cebae78f93b872a extends Template
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
        return "film/new.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/video.html.twig"));

        $this->parent = $this->loadTemplate("film/new.html.twig", "concert/video.html.twig", 1);
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
<center>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert_index");
        echo "\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">

        <title>MediaCapture and Streams API</title>
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"stylesheet\" href=\"main.css\">
    </head>
    <body>
    <header>
        <h1>MediaCapture & MediaRecorder & Video Live Streaming</h1>
    </header>
    <main>

        <p><button id=\"btnStart\" class=\"btn btn-primary\">START RECORDING</button><br/>
            <button id=\"btnStop\" class=\"btn btn-primary\">STOP RECORDING</button></p>

        <video controls></video>

        <video id=\"vid2\" controls></video>

        <!-- could save to canvas and do image manipulation and saving too -->
    </main>
    <script>

        let constraintObj = {
            audio: false,
            video: {
                facingMode: \"user\",
                width: { min: 640, ideal: 1280, max: 1920 },
                height: { min: 480, ideal: 720, max: 1080 }
            }
        };
        // width: 1280, height: 720  -- preference only
        // facingMode: {exact: \"user\"}
        // facingMode: \"environment\"

        //handle older browsers that might implement getUserMedia in some way
        if (navigator.mediaDevices === undefined) {
            navigator.mediaDevices = {};
            navigator.mediaDevices.getUserMedia = function(constraintObj) {
                let getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
                if (!getUserMedia) {
                    return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
                }
                return new Promise(function(resolve, reject) {
                    getUserMedia.call(navigator, constraintObj, resolve, reject);
                });
            }
        }else{
            navigator.mediaDevices.enumerateDevices()
                .then(devices => {
                    devices.forEach(device=>{
                        console.log(device.kind.toUpperCase(), device.label);
                        //, device.deviceId
                    })
                })
                .catch(err=>{
                    console.log(err.name, err.message);
                })
        }

        navigator.mediaDevices.getUserMedia(constraintObj)
            .then(function(mediaStreamObj) {
                //connect the media stream to the first video element
                let video = document.querySelector('video');
                if (\"srcObject\" in video) {
                    video.srcObject = mediaStreamObj;
                } else {
                    //old version
                    video.src = window.URL.createObjectURL(mediaStreamObj);
                }

                video.onloadedmetadata = function(ev) {
                    //show in the video element what is being captured by the webcam
                    video.play();
                };

                //add listeners for saving video/audio
                let start = document.getElementById('btnStart');
                let stop = document.getElementById('btnStop');
                let vidSave = document.getElementById('vid2');
                let mediaRecorder = new MediaRecorder(mediaStreamObj);
                let chunks = [];

                start.addEventListener('click', (ev)=>{
                    mediaRecorder.start();
                    console.log(mediaRecorder.state);
                })
                stop.addEventListener('click', (ev)=>{
                    mediaRecorder.stop();
                    console.log(mediaRecorder.state);
                });
                mediaRecorder.ondataavailable = function(ev) {
                    chunks.push(ev.data);
                }
                mediaRecorder.onstop = (ev)=>{
                    let blob = new Blob(chunks, { 'type' : 'video/mp4;' });
                    chunks = [];
                    let videoURL = window.URL.createObjectURL(blob);
                    vidSave.src = videoURL;
                }
            })
            .catch(function(err) {
                console.log(err.name, err.message);
            });

        /*********************************
         getUserMedia returns a Promise
         resolve - returns a MediaStream Object
         reject returns one of the following errors
         AbortError - generic unknown cause
         NotAllowedError (SecurityError) - user rejected permissions
         NotFoundError - missing media track
         NotReadableError - user permissions given but hardware/OS error
         OverconstrainedError - constraint video settings preventing
         TypeError - audio: false, video: false
         *********************************/
    </script>
    </body>
    </html>
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film/new.html.twig' %}
{% block body %}

<center>
    <a href=\"{{ path('concert_index') }}\"class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i></a>
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">

        <title>MediaCapture and Streams API</title>
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"stylesheet\" href=\"main.css\">
    </head>
    <body>
    <header>
        <h1>MediaCapture & MediaRecorder & Video Live Streaming</h1>
    </header>
    <main>

        <p><button id=\"btnStart\" class=\"btn btn-primary\">START RECORDING</button><br/>
            <button id=\"btnStop\" class=\"btn btn-primary\">STOP RECORDING</button></p>

        <video controls></video>

        <video id=\"vid2\" controls></video>

        <!-- could save to canvas and do image manipulation and saving too -->
    </main>
    <script>

        let constraintObj = {
            audio: false,
            video: {
                facingMode: \"user\",
                width: { min: 640, ideal: 1280, max: 1920 },
                height: { min: 480, ideal: 720, max: 1080 }
            }
        };
        // width: 1280, height: 720  -- preference only
        // facingMode: {exact: \"user\"}
        // facingMode: \"environment\"

        //handle older browsers that might implement getUserMedia in some way
        if (navigator.mediaDevices === undefined) {
            navigator.mediaDevices = {};
            navigator.mediaDevices.getUserMedia = function(constraintObj) {
                let getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
                if (!getUserMedia) {
                    return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
                }
                return new Promise(function(resolve, reject) {
                    getUserMedia.call(navigator, constraintObj, resolve, reject);
                });
            }
        }else{
            navigator.mediaDevices.enumerateDevices()
                .then(devices => {
                    devices.forEach(device=>{
                        console.log(device.kind.toUpperCase(), device.label);
                        //, device.deviceId
                    })
                })
                .catch(err=>{
                    console.log(err.name, err.message);
                })
        }

        navigator.mediaDevices.getUserMedia(constraintObj)
            .then(function(mediaStreamObj) {
                //connect the media stream to the first video element
                let video = document.querySelector('video');
                if (\"srcObject\" in video) {
                    video.srcObject = mediaStreamObj;
                } else {
                    //old version
                    video.src = window.URL.createObjectURL(mediaStreamObj);
                }

                video.onloadedmetadata = function(ev) {
                    //show in the video element what is being captured by the webcam
                    video.play();
                };

                //add listeners for saving video/audio
                let start = document.getElementById('btnStart');
                let stop = document.getElementById('btnStop');
                let vidSave = document.getElementById('vid2');
                let mediaRecorder = new MediaRecorder(mediaStreamObj);
                let chunks = [];

                start.addEventListener('click', (ev)=>{
                    mediaRecorder.start();
                    console.log(mediaRecorder.state);
                })
                stop.addEventListener('click', (ev)=>{
                    mediaRecorder.stop();
                    console.log(mediaRecorder.state);
                });
                mediaRecorder.ondataavailable = function(ev) {
                    chunks.push(ev.data);
                }
                mediaRecorder.onstop = (ev)=>{
                    let blob = new Blob(chunks, { 'type' : 'video/mp4;' });
                    chunks = [];
                    let videoURL = window.URL.createObjectURL(blob);
                    vidSave.src = videoURL;
                }
            })
            .catch(function(err) {
                console.log(err.name, err.message);
            });

        /*********************************
         getUserMedia returns a Promise
         resolve - returns a MediaStream Object
         reject returns one of the following errors
         AbortError - generic unknown cause
         NotAllowedError (SecurityError) - user rejected permissions
         NotFoundError - missing media track
         NotReadableError - user permissions given but hardware/OS error
         OverconstrainedError - constraint video settings preventing
         TypeError - audio: false, video: false
         *********************************/
    </script>
    </body>
    </html>
</center>
{% endblock %}", "concert/video.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\concert\\video.html.twig");
    }
}
