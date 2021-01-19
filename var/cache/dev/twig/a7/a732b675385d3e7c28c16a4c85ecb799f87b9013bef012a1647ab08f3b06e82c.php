<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_1adb2a0b5199246a9c42307fff3025289b4876ec84686d3d0da264b656d4dbb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_a659cc8e168e8ac743324226022ceb0a407345785eb206fd70b5c55a91ffdaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a659cc8e168e8ac743324226022ceb0a407345785eb206fd70b5c55a91ffdaed->enter($__internal_a659cc8e168e8ac743324226022ceb0a407345785eb206fd70b5c55a91ffdaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $__internal_d59de042a0867592326d71e81473ce997010c8a9c3a5cff0e709d1ba513c77a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59de042a0867592326d71e81473ce997010c8a9c3a5cff0e709d1ba513c77a5->enter($__internal_d59de042a0867592326d71e81473ce997010c8a9c3a5cff0e709d1ba513c77a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a659cc8e168e8ac743324226022ceb0a407345785eb206fd70b5c55a91ffdaed->leave($__internal_a659cc8e168e8ac743324226022ceb0a407345785eb206fd70b5c55a91ffdaed_prof);

        
        $__internal_d59de042a0867592326d71e81473ce997010c8a9c3a5cff0e709d1ba513c77a5->leave($__internal_d59de042a0867592326d71e81473ce997010c8a9c3a5cff0e709d1ba513c77a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebaf008dc39a359a4a6ca2d4e48e826e76dd05e014eaf9823477b4ed5083b1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebaf008dc39a359a4a6ca2d4e48e826e76dd05e014eaf9823477b4ed5083b1e0->enter($__internal_ebaf008dc39a359a4a6ca2d4e48e826e76dd05e014eaf9823477b4ed5083b1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99b3928fa14cccc692240801af4663d00b993490c1b800cb62058e613ddc7c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b3928fa14cccc692240801af4663d00b993490c1b800cb62058e613ddc7c48->enter($__internal_99b3928fa14cccc692240801af4663d00b993490c1b800cb62058e613ddc7c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_99b3928fa14cccc692240801af4663d00b993490c1b800cb62058e613ddc7c48->leave($__internal_99b3928fa14cccc692240801af4663d00b993490c1b800cb62058e613ddc7c48_prof);

        
        $__internal_ebaf008dc39a359a4a6ca2d4e48e826e76dd05e014eaf9823477b4ed5083b1e0->leave($__internal_ebaf008dc39a359a4a6ca2d4e48e826e76dd05e014eaf9823477b4ed5083b1e0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
