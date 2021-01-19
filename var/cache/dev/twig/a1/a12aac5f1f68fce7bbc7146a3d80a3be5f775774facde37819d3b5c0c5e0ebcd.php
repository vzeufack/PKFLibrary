<?php

/* :pkflibrary:about.html.twig */
class __TwigTemplate_87201c963c116e8046efdd4ded74fd6c70b6936a73771c32438c8a19b53658ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary:about.html.twig", 2);
        $this->blocks = array(
            'about' => array($this, 'block_about'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/miscellanous.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b40acc95004e2b07c44d4a54f856f75d93005f174290e7a400d774ff722f160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b40acc95004e2b07c44d4a54f856f75d93005f174290e7a400d774ff722f160->enter($__internal_0b40acc95004e2b07c44d4a54f856f75d93005f174290e7a400d774ff722f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:about.html.twig"));

        $__internal_77ce86394f14cfdc59b87c117b3cc52da4d3fe6b20bfb7a45492251d00699de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ce86394f14cfdc59b87c117b3cc52da4d3fe6b20bfb7a45492251d00699de3->enter($__internal_77ce86394f14cfdc59b87c117b3cc52da4d3fe6b20bfb7a45492251d00699de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b40acc95004e2b07c44d4a54f856f75d93005f174290e7a400d774ff722f160->leave($__internal_0b40acc95004e2b07c44d4a54f856f75d93005f174290e7a400d774ff722f160_prof);

        
        $__internal_77ce86394f14cfdc59b87c117b3cc52da4d3fe6b20bfb7a45492251d00699de3->leave($__internal_77ce86394f14cfdc59b87c117b3cc52da4d3fe6b20bfb7a45492251d00699de3_prof);

    }

    // line 4
    public function block_about($context, array $blocks = array())
    {
        $__internal_349a3bda7c68db9adbd9478e7432affe567786e185f2eb2ffe02d83d8fe6e113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349a3bda7c68db9adbd9478e7432affe567786e185f2eb2ffe02d83d8fe6e113->enter($__internal_349a3bda7c68db9adbd9478e7432affe567786e185f2eb2ffe02d83d8fe6e113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        $__internal_219893d8e4d024886b342425b0eb36e0aba31b0dc5e7f0601dd950a95078aaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219893d8e4d024886b342425b0eb36e0aba31b0dc5e7f0601dd950a95078aaac->enter($__internal_219893d8e4d024886b342425b0eb36e0aba31b0dc5e7f0601dd950a95078aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        // line 5
        echo "\t<li class=\"active\">                          
\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about")), "html", null, true);
        echo "\">About</a>                        
\t</li>
";
        
        $__internal_219893d8e4d024886b342425b0eb36e0aba31b0dc5e7f0601dd950a95078aaac->leave($__internal_219893d8e4d024886b342425b0eb36e0aba31b0dc5e7f0601dd950a95078aaac_prof);

        
        $__internal_349a3bda7c68db9adbd9478e7432affe567786e185f2eb2ffe02d83d8fe6e113->leave($__internal_349a3bda7c68db9adbd9478e7432affe567786e185f2eb2ffe02d83d8fe6e113_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c153dd44af1f25ed5f803fd763b268be72653ac9667c4dbc2ae18c8d62c466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c153dd44af1f25ed5f803fd763b268be72653ac9667c4dbc2ae18c8d62c466->enter($__internal_d2c153dd44af1f25ed5f803fd763b268be72653ac9667c4dbc2ae18c8d62c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c72b3e4ebecb518a8c323e90e031656a1cf324aa760b555592849f1f7b35ec03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72b3e4ebecb518a8c323e90e031656a1cf324aa760b555592849f1f7b35ec03->enter($__internal_c72b3e4ebecb518a8c323e90e031656a1cf324aa760b555592849f1f7b35ec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t   <div class=\"row\" style=\"margin-top:5%;\">
\t        <div class=\"col-md-5\" style=\"margin-left:5%\">
\t            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t                <!-- Indicators -->
\t                <ol class=\"carousel-indicators\">
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
\t                </ol>
\t 
\t                <!-- Wrapper for slides -->
\t                <div class=\"carousel-inner\">
\t                    <div class=\"item active\">
\t                        <img class=\"img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_02.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_05.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_06.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_07.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_01.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t                    </div>
\t                </div>

\t                <!-- Controls -->
\t                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
\t                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
\t                </a>
\t                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
\t                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
\t                </a>
\t            </div>
\t        </div>

\t        <div class=\"col-md-5\" style=\"text-align: justify;\">
\t            <div class=\"panel panel-default\" style=\"margin:auto; width:100%; height:100%;\">
\t            \t<div class=\"panel-heading\">
                    \t<h2 style=\"text-align:center\">About the software</h2>
                \t</div>  
                \t<div class=\"panel-body\"> 
\t\t            \t<p><span class=\"appliDecoration\">Application name: </span>PKFLibray</p>
\t\t            \t<p><span class=\"appliDecoration\">Version: </span>1.1</p>
\t\t                <h4 id=\"details\">Application description</h4>
\t\t                <p>
\t\t\t                PKFLibrary is a a web based tool designed to provide students, as well as lecturers and other interested users with a tool allowing them to have a virtual access to the PKFokam Institute of Excellence Library. Through this tools, users will be able to:\t                
\t\t                </p>
\t\t                <ul>
\t\t                \t<li>See all the books currently available at the library;</li>
\t\t                \t<li>Find out whether or not a given book is in the library;</li>
\t\t                \t<li>Reserve a book (and collect it in 24hrs latest);</li>
\t\t                \t<li>In addition to the operations mentioned above, the librerian will be abble to carry out some administrative operations such as: managing books, users and borrows.</li>
\t\t\t            </ul>
\t\t\t            <p>For more information on how to perform those operations consult the <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help")), "html", null, true);
        echo "\"> help</a>.</p>
\t\t\t        </div>
\t   \t\t \t</div>
\t\t\t</div>
\t</div>
";
        
        $__internal_c72b3e4ebecb518a8c323e90e031656a1cf324aa760b555592849f1f7b35ec03->leave($__internal_c72b3e4ebecb518a8c323e90e031656a1cf324aa760b555592849f1f7b35ec03_prof);

        
        $__internal_d2c153dd44af1f25ed5f803fd763b268be72653ac9667c4dbc2ae18c8d62c466->leave($__internal_d2c153dd44af1f25ed5f803fd763b268be72653ac9667c4dbc2ae18c8d62c466_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94a1125dedfd87b05fc3db31341e7c4bf457a25511975dac07020b258781ed6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a1125dedfd87b05fc3db31341e7c4bf457a25511975dac07020b258781ed6a->enter($__internal_94a1125dedfd87b05fc3db31341e7c4bf457a25511975dac07020b258781ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dd03cf0a8b38ec83b762da656430e9f4add4f16d35c6c8061aa33acfb391f300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd03cf0a8b38ec83b762da656430e9f4add4f16d35c6c8061aa33acfb391f300->enter($__internal_dd03cf0a8b38ec83b762da656430e9f4add4f16d35c6c8061aa33acfb391f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0;height:70px; padding-top: 25px; margin-right:-10%;;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_dd03cf0a8b38ec83b762da656430e9f4add4f16d35c6c8061aa33acfb391f300->leave($__internal_dd03cf0a8b38ec83b762da656430e9f4add4f16d35c6c8061aa33acfb391f300_prof);

        
        $__internal_94a1125dedfd87b05fc3db31341e7c4bf457a25511975dac07020b258781ed6a->leave($__internal_94a1125dedfd87b05fc3db31341e7c4bf457a25511975dac07020b258781ed6a_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 78,  168 => 77,  152 => 69,  117 => 37,  111 => 34,  105 => 31,  99 => 28,  93 => 25,  76 => 10,  67 => 9,  54 => 6,  51 => 5,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'pkflibrary/miscellanous.html.twig '%}

{% block about %}
\t<li class=\"active\">                          
\t\t<a href=\"{{app.request.schemeAndHttpHost ~ path('about') }}\">About</a>                        
\t</li>
{% endblock %}
{% block body %}
\t   <div class=\"row\" style=\"margin-top:5%;\">
\t        <div class=\"col-md-5\" style=\"margin-left:5%\">
\t            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t                <!-- Indicators -->
\t                <ol class=\"carousel-indicators\">
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
\t                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
\t                </ol>
\t 
\t                <!-- Wrapper for slides -->
\t                <div class=\"carousel-inner\">
\t                    <div class=\"item active\">
\t                        <img class=\"img-responsive\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/egypt_02.jpg') }}\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/egypt_05.jpg') }}\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/egypt_06.jpg') }}\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/egypt_07.jpg') }}\" alt=\"\">
\t                    </div>
\t                    <div class=\"item\">
\t                        <img class=\"img-responsive\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/egypt_01.jpg') }}\" alt=\"\">
\t                    </div>
\t                </div>

\t                <!-- Controls -->
\t                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
\t                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
\t                </a>
\t                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
\t                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
\t                </a>
\t            </div>
\t        </div>

\t        <div class=\"col-md-5\" style=\"text-align: justify;\">
\t            <div class=\"panel panel-default\" style=\"margin:auto; width:100%; height:100%;\">
\t            \t<div class=\"panel-heading\">
                    \t<h2 style=\"text-align:center\">About the software</h2>
                \t</div>  
                \t<div class=\"panel-body\"> 
\t\t            \t<p><span class=\"appliDecoration\">Application name: </span>PKFLibray</p>
\t\t            \t<p><span class=\"appliDecoration\">Version: </span>1.1</p>
\t\t                <h4 id=\"details\">Application description</h4>
\t\t                <p>
\t\t\t                PKFLibrary is a a web based tool designed to provide students, as well as lecturers and other interested users with a tool allowing them to have a virtual access to the PKFokam Institute of Excellence Library. Through this tools, users will be able to:\t                
\t\t                </p>
\t\t                <ul>
\t\t                \t<li>See all the books currently available at the library;</li>
\t\t                \t<li>Find out whether or not a given book is in the library;</li>
\t\t                \t<li>Reserve a book (and collect it in 24hrs latest);</li>
\t\t                \t<li>In addition to the operations mentioned above, the librerian will be abble to carry out some administrative operations such as: managing books, users and borrows.</li>
\t\t\t            </ul>
\t\t\t            <p>For more information on how to perform those operations consult the <a href=\"{{app.request.schemeAndHttpHost ~ path('help') }}\"> help</a>.</p>
\t\t\t        </div>
\t   \t\t \t</div>
\t\t\t</div>
\t</div>
{% endblock %}


{% block footer %}
    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0;height:70px; padding-top: 25px; margin-right:-10%;;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
{% endblock %}", ":pkflibrary:about.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/about.html.twig");
    }
}
