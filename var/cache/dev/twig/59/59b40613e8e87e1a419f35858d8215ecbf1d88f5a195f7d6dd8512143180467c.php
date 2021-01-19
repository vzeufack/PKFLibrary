<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_f62ed0b26cd69ebb849c3436da19abf98f7eda33d618a88dd329aadf4e1efea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_8a4f90111cdc26955b71a2822998d64e7d23f036d46e99434e2fbf17b4b0ebe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4f90111cdc26955b71a2822998d64e7d23f036d46e99434e2fbf17b4b0ebe3->enter($__internal_8a4f90111cdc26955b71a2822998d64e7d23f036d46e99434e2fbf17b4b0ebe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_05c0bd94c53c5b246399f4d28a50d2fa4bb466083d9d1255dc5f5efdbd94ae76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c0bd94c53c5b246399f4d28a50d2fa4bb466083d9d1255dc5f5efdbd94ae76->enter($__internal_05c0bd94c53c5b246399f4d28a50d2fa4bb466083d9d1255dc5f5efdbd94ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4f90111cdc26955b71a2822998d64e7d23f036d46e99434e2fbf17b4b0ebe3->leave($__internal_8a4f90111cdc26955b71a2822998d64e7d23f036d46e99434e2fbf17b4b0ebe3_prof);

        
        $__internal_05c0bd94c53c5b246399f4d28a50d2fa4bb466083d9d1255dc5f5efdbd94ae76->leave($__internal_05c0bd94c53c5b246399f4d28a50d2fa4bb466083d9d1255dc5f5efdbd94ae76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a147ab55051d870265ebcdc4a446ec69f0d4f7a17954ee7e279aacdfeabf956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a147ab55051d870265ebcdc4a446ec69f0d4f7a17954ee7e279aacdfeabf956->enter($__internal_9a147ab55051d870265ebcdc4a446ec69f0d4f7a17954ee7e279aacdfeabf956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ac8c402a7015c3aa7e25a631ed63550b8f83d147a118e7453c5e7798b5bea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac8c402a7015c3aa7e25a631ed63550b8f83d147a118e7453c5e7798b5bea0c->enter($__internal_0ac8c402a7015c3aa7e25a631ed63550b8f83d147a118e7453c5e7798b5bea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0ac8c402a7015c3aa7e25a631ed63550b8f83d147a118e7453c5e7798b5bea0c->leave($__internal_0ac8c402a7015c3aa7e25a631ed63550b8f83d147a118e7453c5e7798b5bea0c_prof);

        
        $__internal_9a147ab55051d870265ebcdc4a446ec69f0d4f7a17954ee7e279aacdfeabf956->leave($__internal_9a147ab55051d870265ebcdc4a446ec69f0d4f7a17954ee7e279aacdfeabf956_prof);

    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9f27c48f57de77cbf6a094ff6aee6f5ff846d2a1a4aa14c7216a2f2d4bea091e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f27c48f57de77cbf6a094ff6aee6f5ff846d2a1a4aa14c7216a2f2d4bea091e->enter($__internal_9f27c48f57de77cbf6a094ff6aee6f5ff846d2a1a4aa14c7216a2f2d4bea091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c8a7a530fbb5d3aa435c028d24690d6c72024c55f32199108589be827986a7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a7a530fbb5d3aa435c028d24690d6c72024c55f32199108589be827986a7aa->enter($__internal_c8a7a530fbb5d3aa435c028d24690d6c72024c55f32199108589be827986a7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 7
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_c8a7a530fbb5d3aa435c028d24690d6c72024c55f32199108589be827986a7aa->leave($__internal_c8a7a530fbb5d3aa435c028d24690d6c72024c55f32199108589be827986a7aa_prof);

        
        $__internal_9f27c48f57de77cbf6a094ff6aee6f5ff846d2a1a4aa14c7216a2f2d4bea091e->leave($__internal_9f27c48f57de77cbf6a094ff6aee6f5ff846d2a1a4aa14c7216a2f2d4bea091e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
{% block footer %}
    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
{% endblock %}
", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
