<?php

/* @User/Registration/confirmed.html.twig */
class __TwigTemplate_743565ad1602bce6eb7d676bee39f9342c031bce4000d9e58b4ce085c4b7ce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Registration/confirmed.html.twig", 1);
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
        $__internal_7f3a67ca6c39b84b40ce8064c7e7c79a4cdbb66e38dd75449de482214cbd7944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3a67ca6c39b84b40ce8064c7e7c79a4cdbb66e38dd75449de482214cbd7944->enter($__internal_7f3a67ca6c39b84b40ce8064c7e7c79a4cdbb66e38dd75449de482214cbd7944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        $__internal_8c8bd9dad56208540364860b80cb0c2437efb4facb4077e8ad298b620f4e00e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8bd9dad56208540364860b80cb0c2437efb4facb4077e8ad298b620f4e00e4->enter($__internal_8c8bd9dad56208540364860b80cb0c2437efb4facb4077e8ad298b620f4e00e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3a67ca6c39b84b40ce8064c7e7c79a4cdbb66e38dd75449de482214cbd7944->leave($__internal_7f3a67ca6c39b84b40ce8064c7e7c79a4cdbb66e38dd75449de482214cbd7944_prof);

        
        $__internal_8c8bd9dad56208540364860b80cb0c2437efb4facb4077e8ad298b620f4e00e4->leave($__internal_8c8bd9dad56208540364860b80cb0c2437efb4facb4077e8ad298b620f4e00e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c303ee457529145481eb4655c8c272374c35baf4cee112aa0b5597340e1ada21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c303ee457529145481eb4655c8c272374c35baf4cee112aa0b5597340e1ada21->enter($__internal_c303ee457529145481eb4655c8c272374c35baf4cee112aa0b5597340e1ada21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_927de129c2e30f472754bd5d5f98461862b76eb30d318c3523fcfda2fc26e4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927de129c2e30f472754bd5d5f98461862b76eb30d318c3523fcfda2fc26e4c4->enter($__internal_927de129c2e30f472754bd5d5f98461862b76eb30d318c3523fcfda2fc26e4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "   

";
        
        $__internal_927de129c2e30f472754bd5d5f98461862b76eb30d318c3523fcfda2fc26e4c4->leave($__internal_927de129c2e30f472754bd5d5f98461862b76eb30d318c3523fcfda2fc26e4c4_prof);

        
        $__internal_c303ee457529145481eb4655c8c272374c35baf4cee112aa0b5597340e1ada21->leave($__internal_c303ee457529145481eb4655c8c272374c35baf4cee112aa0b5597340e1ada21_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
   

{% endblock fos_user_content %}

", "@User/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Registration\\confirmed.html.twig");
    }
}
