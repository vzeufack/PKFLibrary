<?php

/* :pkflibrary/user:registration_success.html.twig */
class __TwigTemplate_ecf292c935bfa9058ca4be810dd871ba809c8ad77e69d8f2d68b107c55ae7b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", ":pkflibrary/user:registration_success.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_042284c4c3554a52411846dff76133a444f6edeb6c13e97eb63d3aee47caedcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042284c4c3554a52411846dff76133a444f6edeb6c13e97eb63d3aee47caedcb->enter($__internal_042284c4c3554a52411846dff76133a444f6edeb6c13e97eb63d3aee47caedcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:registration_success.html.twig"));

        $__internal_5d968588d90e97120acef5a5814f9a69616ed82483d5853ffd2b6e3d5a715f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d968588d90e97120acef5a5814f9a69616ed82483d5853ffd2b6e3d5a715f81->enter($__internal_5d968588d90e97120acef5a5814f9a69616ed82483d5853ffd2b6e3d5a715f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042284c4c3554a52411846dff76133a444f6edeb6c13e97eb63d3aee47caedcb->leave($__internal_042284c4c3554a52411846dff76133a444f6edeb6c13e97eb63d3aee47caedcb_prof);

        
        $__internal_5d968588d90e97120acef5a5814f9a69616ed82483d5853ffd2b6e3d5a715f81->leave($__internal_5d968588d90e97120acef5a5814f9a69616ed82483d5853ffd2b6e3d5a715f81_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7d500ba3e373014ac7cb34e53238c4802ac6f52f27edbe4c09d32b87759cf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d500ba3e373014ac7cb34e53238c4802ac6f52f27edbe4c09d32b87759cf27->enter($__internal_d7d500ba3e373014ac7cb34e53238c4802ac6f52f27edbe4c09d32b87759cf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5275c87e98f469df9c9fa2d313a521b972024b471359c7b9ffb7a05c1a5d2c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5275c87e98f469df9c9fa2d313a521b972024b471359c7b9ffb7a05c1a5d2c10->enter($__internal_5275c87e98f469df9c9fa2d313a521b972024b471359c7b9ffb7a05c1a5d2c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "


     <div class=\"col-md-6 col-sm-offset-3 \">
        <div class=\"panel panel-default\" style=\"margin:auto; width:400px\">
            <div class=\"panel-heading\" style=\"color:green\">
                <h4 style=\"text-align:center\"><i class=\"fa fa-check\"></i>  Registration succeeded!</h4>
            </div>                       
            <div class=\"panel-body\" style=\"\"> 
                ";
        // line 15
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCategory", array()) == "Lecturer")) {
            // line 16
            echo "                    <h5 style=\"text-align:center; font-weight:bold\"> Your account is currently disabled. Your identity will be validated and your account enabled very soon. Thank You!  </h5>
                ";
        } else {
            // line 18
            echo "                    <h5 style=\"text-align:center; font-weight:bold\"> Your account is currently disabled. You must meet the librarian to validate your identity. Thank You!  </h5>
                ";
        }
        // line 20
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" style=\"float:right; font-family:calibri; font-weight:bold\" ><i class=\" fa fa-sign-in \"></i> Login </a>

            </div>                        
        </div>
    </div>


";
        
        $__internal_5275c87e98f469df9c9fa2d313a521b972024b471359c7b9ffb7a05c1a5d2c10->leave($__internal_5275c87e98f469df9c9fa2d313a521b972024b471359c7b9ffb7a05c1a5d2c10_prof);

        
        $__internal_d7d500ba3e373014ac7cb34e53238c4802ac6f52f27edbe4c09d32b87759cf27->leave($__internal_d7d500ba3e373014ac7cb34e53238c4802ac6f52f27edbe4c09d32b87759cf27_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_55d48e44d5c5ae6f61a4e65c367b241a6804d3332ba978ac944a31e08c31fbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d48e44d5c5ae6f61a4e65c367b241a6804d3332ba978ac944a31e08c31fbd6->enter($__internal_55d48e44d5c5ae6f61a4e65c367b241a6804d3332ba978ac944a31e08c31fbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a5c1c760283e19abafe67b4f9119d93bd801118d3349bef66b742a38759ba5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c1c760283e19abafe67b4f9119d93bd801118d3349bef66b742a38759ba5d7->enter($__internal_a5c1c760283e19abafe67b4f9119d93bd801118d3349bef66b742a38759ba5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 30
        echo "                <div class=\"row\" style=\"margin-top:80%;position: fixed;botom: 0;width:100%\">
                   <!-- Footer -->
                     <center>
                        <p style=\"font-weight:bold;height:90px;color:white;background-color: black;margin-left: -100px; margin-bottom:0px; \">Copyright &copy; PKFokam Institute Of Excellence</p>
                    </center>
                   </div>
 ";
        
        $__internal_a5c1c760283e19abafe67b4f9119d93bd801118d3349bef66b742a38759ba5d7->leave($__internal_a5c1c760283e19abafe67b4f9119d93bd801118d3349bef66b742a38759ba5d7_prof);

        
        $__internal_55d48e44d5c5ae6f61a4e65c367b241a6804d3332ba978ac944a31e08c31fbd6->leave($__internal_55d48e44d5c5ae6f61a4e65c367b241a6804d3332ba978ac944a31e08c31fbd6_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/user:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  90 => 29,  71 => 20,  67 => 18,  63 => 16,  61 => 15,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

    {% block fos_user_content %}



     <div class=\"col-md-6 col-sm-offset-3 \">
        <div class=\"panel panel-default\" style=\"margin:auto; width:400px\">
            <div class=\"panel-heading\" style=\"color:green\">
                <h4 style=\"text-align:center\"><i class=\"fa fa-check\"></i>  Registration succeeded!</h4>
            </div>                       
            <div class=\"panel-body\" style=\"\"> 
                {% if user.userCategory == 'Lecturer' %}
                    <h5 style=\"text-align:center; font-weight:bold\"> Your account is currently disabled. Your identity will be validated and your account enabled very soon. Thank You!  </h5>
                {% else %}
                    <h5 style=\"text-align:center; font-weight:bold\"> Your account is currently disabled. You must meet the librarian to validate your identity. Thank You!  </h5>
                {% endif %}
                <a href=\"{{ path('fos_user_security_login') }}\" style=\"float:right; font-family:calibri; font-weight:bold\" ><i class=\" fa fa-sign-in \"></i> Login </a>

            </div>                        
        </div>
    </div>


{% endblock fos_user_content %}

{% block footer %}
                <div class=\"row\" style=\"margin-top:80%;position: fixed;botom: 0;width:100%\">
                   <!-- Footer -->
                     <center>
                        <p style=\"font-weight:bold;height:90px;color:white;background-color: black;margin-left: -100px; margin-bottom:0px; \">Copyright &copy; PKFokam Institute Of Excellence</p>
                    </center>
                   </div>
 {% endblock %}


", ":pkflibrary/user:registration_success.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/user/registration_success.html.twig");
    }
}
