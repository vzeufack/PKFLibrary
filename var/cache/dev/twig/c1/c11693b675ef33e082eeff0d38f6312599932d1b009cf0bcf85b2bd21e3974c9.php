<?php

/* @User/Resetting/check_email.html.twig */
class __TwigTemplate_58df1a9ddd40ca2b51384161874ff6b2f32b7c36955fc6f489047ece5ebedee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Resetting/check_email.html.twig", 1);
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
        $__internal_ed620569510e523ca1ead80171a75da1ac15acd3a872d737016fc565e46d66b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed620569510e523ca1ead80171a75da1ac15acd3a872d737016fc565e46d66b0->enter($__internal_ed620569510e523ca1ead80171a75da1ac15acd3a872d737016fc565e46d66b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/check_email.html.twig"));

        $__internal_7f70cb145ec218795ef6a6fe7b8ad7463b9f2b3636d113b9699bdbcbf4b4d43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f70cb145ec218795ef6a6fe7b8ad7463b9f2b3636d113b9699bdbcbf4b4d43f->enter($__internal_7f70cb145ec218795ef6a6fe7b8ad7463b9f2b3636d113b9699bdbcbf4b4d43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed620569510e523ca1ead80171a75da1ac15acd3a872d737016fc565e46d66b0->leave($__internal_ed620569510e523ca1ead80171a75da1ac15acd3a872d737016fc565e46d66b0_prof);

        
        $__internal_7f70cb145ec218795ef6a6fe7b8ad7463b9f2b3636d113b9699bdbcbf4b4d43f->leave($__internal_7f70cb145ec218795ef6a6fe7b8ad7463b9f2b3636d113b9699bdbcbf4b4d43f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e53fbf921060d218dce8c9d8d96a6155460cca0a64aabd074fdbede2159f0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e53fbf921060d218dce8c9d8d96a6155460cca0a64aabd074fdbede2159f0a8->enter($__internal_3e53fbf921060d218dce8c9d8d96a6155460cca0a64aabd074fdbede2159f0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e7a06a9420e5625161c68e766c86e30c3e2d39755278643fb680b8a3cee0041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7a06a9420e5625161c68e766c86e30c3e2d39755278643fb680b8a3cee0041->enter($__internal_3e7a06a9420e5625161c68e766c86e30c3e2d39755278643fb680b8a3cee0041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3e7a06a9420e5625161c68e766c86e30c3e2d39755278643fb680b8a3cee0041->leave($__internal_3e7a06a9420e5625161c68e766c86e30c3e2d39755278643fb680b8a3cee0041_prof);

        
        $__internal_3e53fbf921060d218dce8c9d8d96a6155460cca0a64aabd074fdbede2159f0a8->leave($__internal_3e53fbf921060d218dce8c9d8d96a6155460cca0a64aabd074fdbede2159f0a8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@User/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\check_email.html.twig");
    }
}
