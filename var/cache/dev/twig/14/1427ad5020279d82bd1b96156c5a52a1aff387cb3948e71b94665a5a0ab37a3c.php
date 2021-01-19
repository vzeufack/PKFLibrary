<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b6f6bbfed1b98232efb8207848c771003de9c499f1e096502c08b820ee0e3354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_240f75e55fd6d9a995280be94465ffb4f130ca97535bbabe0425ced2e5334e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240f75e55fd6d9a995280be94465ffb4f130ca97535bbabe0425ced2e5334e08->enter($__internal_240f75e55fd6d9a995280be94465ffb4f130ca97535bbabe0425ced2e5334e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $__internal_1cc888085a93ea6c3acf19416beb4556da7332e691847bb484f34bba2fe5d570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc888085a93ea6c3acf19416beb4556da7332e691847bb484f34bba2fe5d570->enter($__internal_1cc888085a93ea6c3acf19416beb4556da7332e691847bb484f34bba2fe5d570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240f75e55fd6d9a995280be94465ffb4f130ca97535bbabe0425ced2e5334e08->leave($__internal_240f75e55fd6d9a995280be94465ffb4f130ca97535bbabe0425ced2e5334e08_prof);

        
        $__internal_1cc888085a93ea6c3acf19416beb4556da7332e691847bb484f34bba2fe5d570->leave($__internal_1cc888085a93ea6c3acf19416beb4556da7332e691847bb484f34bba2fe5d570_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c38b5cf5df6ca6453ccf1f95f8310196b1a392e82ab1af5bcbde1e6468db6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c38b5cf5df6ca6453ccf1f95f8310196b1a392e82ab1af5bcbde1e6468db6ef->enter($__internal_7c38b5cf5df6ca6453ccf1f95f8310196b1a392e82ab1af5bcbde1e6468db6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e0695553585b2b882c4d8ade491eec34c42378c4cada88725f1ed2dcfac04d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0695553585b2b882c4d8ade491eec34c42378c4cada88725f1ed2dcfac04d16->enter($__internal_e0695553585b2b882c4d8ade491eec34c42378c4cada88725f1ed2dcfac04d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e0695553585b2b882c4d8ade491eec34c42378c4cada88725f1ed2dcfac04d16->leave($__internal_e0695553585b2b882c4d8ade491eec34c42378c4cada88725f1ed2dcfac04d16_prof);

        
        $__internal_7c38b5cf5df6ca6453ccf1f95f8310196b1a392e82ab1af5bcbde1e6468db6ef->leave($__internal_7c38b5cf5df6ca6453ccf1f95f8310196b1a392e82ab1af5bcbde1e6468db6ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
