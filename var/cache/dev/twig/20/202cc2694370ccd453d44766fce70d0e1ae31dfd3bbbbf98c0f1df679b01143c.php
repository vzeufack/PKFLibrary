<?php

/* pkflibrary/user/registration_success.html.twig */
class __TwigTemplate_ac7abfb1fe0a508e006914927ba194db4a3dbcaca57805e506bff17dfab326b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "pkflibrary/user/registration_success.html.twig", 1);
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
        $__internal_9608a33cf9e260cc3d27296033b587eb6e511015a08542355104c07353e8e85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9608a33cf9e260cc3d27296033b587eb6e511015a08542355104c07353e8e85f->enter($__internal_9608a33cf9e260cc3d27296033b587eb6e511015a08542355104c07353e8e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/registration_success.html.twig"));

        $__internal_c658a9165952034cfffdcf22d701dafc01a31128daa062794a5449b029ff620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c658a9165952034cfffdcf22d701dafc01a31128daa062794a5449b029ff620d->enter($__internal_c658a9165952034cfffdcf22d701dafc01a31128daa062794a5449b029ff620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9608a33cf9e260cc3d27296033b587eb6e511015a08542355104c07353e8e85f->leave($__internal_9608a33cf9e260cc3d27296033b587eb6e511015a08542355104c07353e8e85f_prof);

        
        $__internal_c658a9165952034cfffdcf22d701dafc01a31128daa062794a5449b029ff620d->leave($__internal_c658a9165952034cfffdcf22d701dafc01a31128daa062794a5449b029ff620d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d35f0ce85aca9226fc5f1ca1e40acf21f2705036e5754a236e3e9a76654f4b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35f0ce85aca9226fc5f1ca1e40acf21f2705036e5754a236e3e9a76654f4b5a->enter($__internal_d35f0ce85aca9226fc5f1ca1e40acf21f2705036e5754a236e3e9a76654f4b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b38a9622ae8ffe4bca5513c3cd99c74354667b75c888f7d77c82da77bc913074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38a9622ae8ffe4bca5513c3cd99c74354667b75c888f7d77c82da77bc913074->enter($__internal_b38a9622ae8ffe4bca5513c3cd99c74354667b75c888f7d77c82da77bc913074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b38a9622ae8ffe4bca5513c3cd99c74354667b75c888f7d77c82da77bc913074->leave($__internal_b38a9622ae8ffe4bca5513c3cd99c74354667b75c888f7d77c82da77bc913074_prof);

        
        $__internal_d35f0ce85aca9226fc5f1ca1e40acf21f2705036e5754a236e3e9a76654f4b5a->leave($__internal_d35f0ce85aca9226fc5f1ca1e40acf21f2705036e5754a236e3e9a76654f4b5a_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ff35ecb7827cde098772420c4609c92fb46f8f9d267b9eb83f04ffabdf0c6d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff35ecb7827cde098772420c4609c92fb46f8f9d267b9eb83f04ffabdf0c6d7f->enter($__internal_ff35ecb7827cde098772420c4609c92fb46f8f9d267b9eb83f04ffabdf0c6d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e82411246cb0ad73e46a1eef9d6c172a909b1c6d53f8969be00ee05ff13968b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82411246cb0ad73e46a1eef9d6c172a909b1c6d53f8969be00ee05ff13968b5->enter($__internal_e82411246cb0ad73e46a1eef9d6c172a909b1c6d53f8969be00ee05ff13968b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 30
        echo "                <div class=\"row\" style=\"margin-top:80%;position: fixed;botom: 0;width:100%\">
                   <!-- Footer -->
                     <center>
                        <p style=\"font-weight:bold;height:90px;color:white;background-color: black;margin-left: -100px; margin-bottom:0px; \">Copyright &copy; PKFokam Institute Of Excellence</p>
                    </center>
                   </div>
 ";
        
        $__internal_e82411246cb0ad73e46a1eef9d6c172a909b1c6d53f8969be00ee05ff13968b5->leave($__internal_e82411246cb0ad73e46a1eef9d6c172a909b1c6d53f8969be00ee05ff13968b5_prof);

        
        $__internal_ff35ecb7827cde098772420c4609c92fb46f8f9d267b9eb83f04ffabdf0c6d7f->leave($__internal_ff35ecb7827cde098772420c4609c92fb46f8f9d267b9eb83f04ffabdf0c6d7f_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/registration_success.html.twig";
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


", "pkflibrary/user/registration_success.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\registration_success.html.twig");
    }
}
