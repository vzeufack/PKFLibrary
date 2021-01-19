<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_2e733356de1104ff2bc4107c60acc83bf395267126ffda644adf6d76f5e0e486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_6d79c5e052d0e8f30beaad9d69c8aa2a719c0497e18af6cd6800c443deb2f3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d79c5e052d0e8f30beaad9d69c8aa2a719c0497e18af6cd6800c443deb2f3de->enter($__internal_6d79c5e052d0e8f30beaad9d69c8aa2a719c0497e18af6cd6800c443deb2f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $__internal_ae5d478afaa22ac1b68e210f81a84fa984c3e06ae8496a565e3c6da14dcfb6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5d478afaa22ac1b68e210f81a84fa984c3e06ae8496a565e3c6da14dcfb6a9->enter($__internal_ae5d478afaa22ac1b68e210f81a84fa984c3e06ae8496a565e3c6da14dcfb6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d79c5e052d0e8f30beaad9d69c8aa2a719c0497e18af6cd6800c443deb2f3de->leave($__internal_6d79c5e052d0e8f30beaad9d69c8aa2a719c0497e18af6cd6800c443deb2f3de_prof);

        
        $__internal_ae5d478afaa22ac1b68e210f81a84fa984c3e06ae8496a565e3c6da14dcfb6a9->leave($__internal_ae5d478afaa22ac1b68e210f81a84fa984c3e06ae8496a565e3c6da14dcfb6a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6bba353ea4a6f326bcc7a465a826208ef0fb5b6e911da7487294593c26cc103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bba353ea4a6f326bcc7a465a826208ef0fb5b6e911da7487294593c26cc103->enter($__internal_b6bba353ea4a6f326bcc7a465a826208ef0fb5b6e911da7487294593c26cc103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ccc2c05df88226ad3d602d4bf551b0db4c5042c2ce7753c5aa30b6cc5c402723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc2c05df88226ad3d602d4bf551b0db4c5042c2ce7753c5aa30b6cc5c402723->enter($__internal_ccc2c05df88226ad3d602d4bf551b0db4c5042c2ce7753c5aa30b6cc5c402723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ccc2c05df88226ad3d602d4bf551b0db4c5042c2ce7753c5aa30b6cc5c402723->leave($__internal_ccc2c05df88226ad3d602d4bf551b0db4c5042c2ce7753c5aa30b6cc5c402723_prof);

        
        $__internal_b6bba353ea4a6f326bcc7a465a826208ef0fb5b6e911da7487294593c26cc103->leave($__internal_b6bba353ea4a6f326bcc7a465a826208ef0fb5b6e911da7487294593c26cc103_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Resetting/request.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\request.html.twig");
    }
}
