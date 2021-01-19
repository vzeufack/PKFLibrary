<?php

/* :pkflibrary/user:help.html.twig */
class __TwigTemplate_cc461c38674074490c13a74cc50eb79d7e6bc7187f2c290e16a49b22e5b6c65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/user:help.html.twig", 2);
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
        $__internal_0643617b34077cfdd4451597edf253963aa4cd49b1234a1e0a61425246f10c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0643617b34077cfdd4451597edf253963aa4cd49b1234a1e0a61425246f10c26->enter($__internal_0643617b34077cfdd4451597edf253963aa4cd49b1234a1e0a61425246f10c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:help.html.twig"));

        $__internal_ed6c96a3342f2c4f90601d6a7f21c991e70c3abf6661807d55e84d1cb59656e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6c96a3342f2c4f90601d6a7f21c991e70c3abf6661807d55e84d1cb59656e6->enter($__internal_ed6c96a3342f2c4f90601d6a7f21c991e70c3abf6661807d55e84d1cb59656e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:help.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0643617b34077cfdd4451597edf253963aa4cd49b1234a1e0a61425246f10c26->leave($__internal_0643617b34077cfdd4451597edf253963aa4cd49b1234a1e0a61425246f10c26_prof);

        
        $__internal_ed6c96a3342f2c4f90601d6a7f21c991e70c3abf6661807d55e84d1cb59656e6->leave($__internal_ed6c96a3342f2c4f90601d6a7f21c991e70c3abf6661807d55e84d1cb59656e6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e427e8274c6c33d21ee214df947d485d8902d45dbe2a770c64461a47b208383f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e427e8274c6c33d21ee214df947d485d8902d45dbe2a770c64461a47b208383f->enter($__internal_e427e8274c6c33d21ee214df947d485d8902d45dbe2a770c64461a47b208383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_855ca86940b82c7e452211d23e2d3f4c58b7ab1d40e1ad32d17dc1bf9c4eb7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855ca86940b82c7e452211d23e2d3f4c58b7ab1d40e1ad32d17dc1bf9c4eb7f3->enter($__internal_855ca86940b82c7e452211d23e2d3f4c58b7ab1d40e1ad32d17dc1bf9c4eb7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_855ca86940b82c7e452211d23e2d3f4c58b7ab1d40e1ad32d17dc1bf9c4eb7f3->leave($__internal_855ca86940b82c7e452211d23e2d3f4c58b7ab1d40e1ad32d17dc1bf9c4eb7f3_prof);

        
        $__internal_e427e8274c6c33d21ee214df947d485d8902d45dbe2a770c64461a47b208383f->leave($__internal_e427e8274c6c33d21ee214df947d485d8902d45dbe2a770c64461a47b208383f_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5e4ac35fca8a8cbb3d783d7f64ad0905f69f828bc37aed893da470913986c9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4ac35fca8a8cbb3d783d7f64ad0905f69f828bc37aed893da470913986c9dd->enter($__internal_5e4ac35fca8a8cbb3d783d7f64ad0905f69f828bc37aed893da470913986c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b0053f967513fd27a81226225fcec8bb627f68b2f0dc60a79b09d631e79c73f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0053f967513fd27a81226225fcec8bb627f68b2f0dc60a79b09d631e79c73f2->enter($__internal_b0053f967513fd27a81226225fcec8bb627f68b2f0dc60a79b09d631e79c73f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:50px; padding-top: 20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_b0053f967513fd27a81226225fcec8bb627f68b2f0dc60a79b09d631e79c73f2->leave($__internal_b0053f967513fd27a81226225fcec8bb627f68b2f0dc60a79b09d631e79c73f2_prof);

        
        $__internal_5e4ac35fca8a8cbb3d783d7f64ad0905f69f828bc37aed893da470913986c9dd->leave($__internal_5e4ac35fca8a8cbb3d783d7f64ad0905f69f828bc37aed893da470913986c9dd_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/user:help.html.twig";
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
{% endblock %}", ":pkflibrary/user:help.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/user/help.html.twig");
    }
}
