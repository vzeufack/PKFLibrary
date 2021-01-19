<?php

/* pkflibrary/user/help.html.twig */
class __TwigTemplate_ff10fbdd59f9c02c2cd0dedd9d5c58c506f5a20535d4ce7951140d420fcf99e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/user/help.html.twig", 2);
        $this->blocks = array(
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
        $__internal_147c5beaf67d759fdf8e468774cac58c58b4fe7f03aa394468c5972c10ea5345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147c5beaf67d759fdf8e468774cac58c58b4fe7f03aa394468c5972c10ea5345->enter($__internal_147c5beaf67d759fdf8e468774cac58c58b4fe7f03aa394468c5972c10ea5345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/help.html.twig"));

        $__internal_8afae91001532cf1fb97304cddd29a56ff4d90b2505341e235287e4763a58611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afae91001532cf1fb97304cddd29a56ff4d90b2505341e235287e4763a58611->enter($__internal_8afae91001532cf1fb97304cddd29a56ff4d90b2505341e235287e4763a58611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/help.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147c5beaf67d759fdf8e468774cac58c58b4fe7f03aa394468c5972c10ea5345->leave($__internal_147c5beaf67d759fdf8e468774cac58c58b4fe7f03aa394468c5972c10ea5345_prof);

        
        $__internal_8afae91001532cf1fb97304cddd29a56ff4d90b2505341e235287e4763a58611->leave($__internal_8afae91001532cf1fb97304cddd29a56ff4d90b2505341e235287e4763a58611_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e664c2c8bc4a06f83a251a82704a6ba98b9abfe1fa69d23c5ecb5fc69448737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e664c2c8bc4a06f83a251a82704a6ba98b9abfe1fa69d23c5ecb5fc69448737->enter($__internal_9e664c2c8bc4a06f83a251a82704a6ba98b9abfe1fa69d23c5ecb5fc69448737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46607b7df822c4419c427467e98ae5d2ad17db5df0190d4a5bb767a7c7574fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46607b7df822c4419c427467e98ae5d2ad17db5df0190d4a5bb767a7c7574fa4->enter($__internal_46607b7df822c4419c427467e98ae5d2ad17db5df0190d4a5bb767a7c7574fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">
 
  <div class=\"row\" style=\"font-family: ambleregular;color:#00008B;\">
 \t <h2 style=\"margin-left:0px;\">PKFLibrary User Support</h2>
  </div>
   <!-- Content Row -->
   <div class=\"row\" style=\"font-family: ambleregular;color:green;\">
      ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "       \t<h4>General Users >> Help topics >></h4>
      ";
        }
        // line 15
        echo " 

       <hr style=\"border-width: 5px;border-color:#008B8B;\" />
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewAndBorrow")), "html", null, true);
        echo "\" ><img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/borrow.jpg")), "html", null, true);
        echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myAccount")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ManagePersoData.png")), "html", null, true);
        echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchBook")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/SearchAbook.png")), "html", null, true);
        echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
  
   </div>
";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "   <div class=\"row\" style=\"margin-top:20px;font-family: ambleregular;color:green;\">
       <h4>The Librarian >> Help topics >></h4><hr style=\"border-width: 5px;border-color:#008B8B;\" />
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userManagements")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/UserMgnt.jpg")), "html", null, true);
            echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bookManagements")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/BooksMgnt.jpg")), "html", null, true);
            echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black; background-color: #DCDCDC;\">
\t        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrowManagements")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/borrowManagement.jpg")), "html", null, true);
            echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a> 
\t    </div>
  
   </div>
";
        }
        // line 44
        echo "   <!-- /.row -->
   
</div>
";
        
        $__internal_46607b7df822c4419c427467e98ae5d2ad17db5df0190d4a5bb767a7c7574fa4->leave($__internal_46607b7df822c4419c427467e98ae5d2ad17db5df0190d4a5bb767a7c7574fa4_prof);

        
        $__internal_9e664c2c8bc4a06f83a251a82704a6ba98b9abfe1fa69d23c5ecb5fc69448737->leave($__internal_9e664c2c8bc4a06f83a251a82704a6ba98b9abfe1fa69d23c5ecb5fc69448737_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0552998a1411bc92beaaef61426a745e585571cbeb407f31d0a6045593ecbbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0552998a1411bc92beaaef61426a745e585571cbeb407f31d0a6045593ecbbfb->enter($__internal_0552998a1411bc92beaaef61426a745e585571cbeb407f31d0a6045593ecbbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0cb262fbecc9ea427d704744a12e04ed5984a278b8b94d14d4a928a53b1cfdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb262fbecc9ea427d704744a12e04ed5984a278b8b94d14d4a928a53b1cfdca->enter($__internal_0cb262fbecc9ea427d704744a12e04ed5984a278b8b94d14d4a928a53b1cfdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:50px; padding-top: 20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_0cb262fbecc9ea427d704744a12e04ed5984a278b8b94d14d4a928a53b1cfdca->leave($__internal_0cb262fbecc9ea427d704744a12e04ed5984a278b8b94d14d4a928a53b1cfdca_prof);

        
        $__internal_0552998a1411bc92beaaef61426a745e585571cbeb407f31d0a6045593ecbbfb->leave($__internal_0552998a1411bc92beaaef61426a745e585571cbeb407f31d0a6045593ecbbfb_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  143 => 49,  130 => 44,  120 => 39,  112 => 36,  104 => 33,  99 => 30,  97 => 29,  88 => 25,  80 => 22,  72 => 19,  66 => 15,  62 => 14,  60 => 13,  50 => 5,  41 => 4,  11 => 2,);
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

{% block body %}
 <!-- Page Content -->
 <div class=\"container\">
 
  <div class=\"row\" style=\"font-family: ambleregular;color:#00008B;\">
 \t <h2 style=\"margin-left:0px;\">PKFLibrary User Support</h2>
  </div>
   <!-- Content Row -->
   <div class=\"row\" style=\"font-family: ambleregular;color:green;\">
      {% if is_granted(\"ROLE_ADMIN\") %}
       \t<h4>General Users >> Help topics >></h4>
      {% endif %} 

       <hr style=\"border-width: 5px;border-color:#008B8B;\" />
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"{{app.request.schemeAndHttpHost ~ path('viewAndBorrow') }}\" ><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/borrow.jpg') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"{{app.request.schemeAndHttpHost ~ path('myAccount') }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/ManagePersoData.png') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"{{app.request.schemeAndHttpHost ~ path('searchBook') }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/SearchAbook.png') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
  
   </div>
{% if is_granted(\"ROLE_ADMIN\") %}
   <div class=\"row\" style=\"margin-top:20px;font-family: ambleregular;color:green;\">
       <h4>The Librarian >> Help topics >></h4><hr style=\"border-width: 5px;border-color:#008B8B;\" />
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"{{app.request.schemeAndHttpHost ~ path('userManagements') }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/UserMgnt.jpg') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black;background-color: #DCDCDC;\">
\t         <a href=\"{{app.request.schemeAndHttpHost ~ path('bookManagements') }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/BooksMgnt.jpg') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a>
\t    </div>
\t    <div class=\"col-md-4\" style=\"box-shadow: 6px 6px 3px black; background-color: #DCDCDC;\">
\t        <a href=\"{{app.request.schemeAndHttpHost ~ path('borrowManagements') }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/borrowManagement.jpg') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a> 
\t    </div>
  
   </div>
{% endif %}
   <!-- /.row -->
   
</div>
{% endblock %}

{% block footer %}
    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:50px; padding-top: 20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
{% endblock %}", "pkflibrary/user/help.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\help.html.twig");
    }
}
