<?php

/* pkflibrary/about.html.twig */
class __TwigTemplate_8187156e7af13d2bf26eb23346ffab33de9a88db63e4f9bdfd584d7bc6f2cb22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/about.html.twig", 2);
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
        $__internal_2246bdfe599cbf73ea663bc45caeb7e5a9bf6363ce2f3642f55eb3522a692645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2246bdfe599cbf73ea663bc45caeb7e5a9bf6363ce2f3642f55eb3522a692645->enter($__internal_2246bdfe599cbf73ea663bc45caeb7e5a9bf6363ce2f3642f55eb3522a692645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/about.html.twig"));

        $__internal_255e7a6c76455a1f40e62d8ba98318c644114213f241b392316a9bc39682f3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255e7a6c76455a1f40e62d8ba98318c644114213f241b392316a9bc39682f3d7->enter($__internal_255e7a6c76455a1f40e62d8ba98318c644114213f241b392316a9bc39682f3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2246bdfe599cbf73ea663bc45caeb7e5a9bf6363ce2f3642f55eb3522a692645->leave($__internal_2246bdfe599cbf73ea663bc45caeb7e5a9bf6363ce2f3642f55eb3522a692645_prof);

        
        $__internal_255e7a6c76455a1f40e62d8ba98318c644114213f241b392316a9bc39682f3d7->leave($__internal_255e7a6c76455a1f40e62d8ba98318c644114213f241b392316a9bc39682f3d7_prof);

    }

    // line 4
    public function block_about($context, array $blocks = array())
    {
        $__internal_ed04cd27644df3b0f358dd8fd6ef9c7b21acb714a7832dd0d2344aec4cc43a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed04cd27644df3b0f358dd8fd6ef9c7b21acb714a7832dd0d2344aec4cc43a71->enter($__internal_ed04cd27644df3b0f358dd8fd6ef9c7b21acb714a7832dd0d2344aec4cc43a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        $__internal_5a86ccc2d0d8766f213c89e6ed722b98894bb748b43cc583d7301503ef607672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a86ccc2d0d8766f213c89e6ed722b98894bb748b43cc583d7301503ef607672->enter($__internal_5a86ccc2d0d8766f213c89e6ed722b98894bb748b43cc583d7301503ef607672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        // line 5
        echo "\t<li class=\"active\">                          
\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about")), "html", null, true);
        echo "\">About</a>                        
\t</li>
";
        
        $__internal_5a86ccc2d0d8766f213c89e6ed722b98894bb748b43cc583d7301503ef607672->leave($__internal_5a86ccc2d0d8766f213c89e6ed722b98894bb748b43cc583d7301503ef607672_prof);

        
        $__internal_ed04cd27644df3b0f358dd8fd6ef9c7b21acb714a7832dd0d2344aec4cc43a71->leave($__internal_ed04cd27644df3b0f358dd8fd6ef9c7b21acb714a7832dd0d2344aec4cc43a71_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b86c94341b6f1fa89d502b3a10d217225388919546cc2bc93b6ac356a9fc9537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86c94341b6f1fa89d502b3a10d217225388919546cc2bc93b6ac356a9fc9537->enter($__internal_b86c94341b6f1fa89d502b3a10d217225388919546cc2bc93b6ac356a9fc9537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66816f92637a7e473cb1130c8b37980960f90c806b1da6acc70dc64dfef77c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66816f92637a7e473cb1130c8b37980960f90c806b1da6acc70dc64dfef77c37->enter($__internal_66816f92637a7e473cb1130c8b37980960f90c806b1da6acc70dc64dfef77c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66816f92637a7e473cb1130c8b37980960f90c806b1da6acc70dc64dfef77c37->leave($__internal_66816f92637a7e473cb1130c8b37980960f90c806b1da6acc70dc64dfef77c37_prof);

        
        $__internal_b86c94341b6f1fa89d502b3a10d217225388919546cc2bc93b6ac356a9fc9537->leave($__internal_b86c94341b6f1fa89d502b3a10d217225388919546cc2bc93b6ac356a9fc9537_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a605f9df347a2904e250b5a50e8423673479e9948f626567e28b28175adc32cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a605f9df347a2904e250b5a50e8423673479e9948f626567e28b28175adc32cf->enter($__internal_a605f9df347a2904e250b5a50e8423673479e9948f626567e28b28175adc32cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7b765542723ffc6248b0d2ff7e3e5f6114f058a7ef77c300b2f01d7dcd21b873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b765542723ffc6248b0d2ff7e3e5f6114f058a7ef77c300b2f01d7dcd21b873->enter($__internal_7b765542723ffc6248b0d2ff7e3e5f6114f058a7ef77c300b2f01d7dcd21b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0;height:70px; padding-top: 25px; margin-right:-10%;;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_7b765542723ffc6248b0d2ff7e3e5f6114f058a7ef77c300b2f01d7dcd21b873->leave($__internal_7b765542723ffc6248b0d2ff7e3e5f6114f058a7ef77c300b2f01d7dcd21b873_prof);

        
        $__internal_a605f9df347a2904e250b5a50e8423673479e9948f626567e28b28175adc32cf->leave($__internal_a605f9df347a2904e250b5a50e8423673479e9948f626567e28b28175adc32cf_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/about.html.twig";
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
{% endblock %}", "pkflibrary/about.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\about.html.twig");
    }
}
