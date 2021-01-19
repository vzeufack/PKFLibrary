<?php

/* @User/ChangePassword/change_password.html.twig */
class __TwigTemplate_51e328bc8a3eb3b7b70584f49d6b3c6019fc28e54a734704757766f4f0b96f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc423dbfbd46a9c11e5224fbf316d8806c77b25ccc943b46c0804e8ed58493b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc423dbfbd46a9c11e5224fbf316d8806c77b25ccc943b46c0804e8ed58493b1->enter($__internal_fc423dbfbd46a9c11e5224fbf316d8806c77b25ccc943b46c0804e8ed58493b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/change_password.html.twig"));

        $__internal_245a72d489182444de629442fcf83051b65be4b5cd8ce5f475fb6a154929ed25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245a72d489182444de629442fcf83051b65be4b5cd8ce5f475fb6a154929ed25->enter($__internal_245a72d489182444de629442fcf83051b65be4b5cd8ce5f475fb6a154929ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc423dbfbd46a9c11e5224fbf316d8806c77b25ccc943b46c0804e8ed58493b1->leave($__internal_fc423dbfbd46a9c11e5224fbf316d8806c77b25ccc943b46c0804e8ed58493b1_prof);

        
        $__internal_245a72d489182444de629442fcf83051b65be4b5cd8ce5f475fb6a154929ed25->leave($__internal_245a72d489182444de629442fcf83051b65be4b5cd8ce5f475fb6a154929ed25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7eb3ea161d93ec1bdc19921b0dd0eb4549cb6aec79118bcb12247a376881cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eb3ea161d93ec1bdc19921b0dd0eb4549cb6aec79118bcb12247a376881cbe->enter($__internal_a7eb3ea161d93ec1bdc19921b0dd0eb4549cb6aec79118bcb12247a376881cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_611d6ebdbdcae0354b4a78b530ae3fc926a8f80460dffb0ddc393f8876e717d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611d6ebdbdcae0354b4a78b530ae3fc926a8f80460dffb0ddc393f8876e717d5->enter($__internal_611d6ebdbdcae0354b4a78b530ae3fc926a8f80460dffb0ddc393f8876e717d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@User/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_611d6ebdbdcae0354b4a78b530ae3fc926a8f80460dffb0ddc393f8876e717d5->leave($__internal_611d6ebdbdcae0354b4a78b530ae3fc926a8f80460dffb0ddc393f8876e717d5_prof);

        
        $__internal_a7eb3ea161d93ec1bdc19921b0dd0eb4549cb6aec79118bcb12247a376881cbe->leave($__internal_a7eb3ea161d93ec1bdc19921b0dd0eb4549cb6aec79118bcb12247a376881cbe_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\ChangePassword\\change_password.html.twig");
    }
}
