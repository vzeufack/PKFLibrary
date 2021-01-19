<?php

/* UserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_57196f35ecba06047331f7e6cb7cf6d8df68f506ab88f65bf63b102619f94924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5ffb47decc8fd0cfe4235e9cdaf4ef86b891a70008f543bcdb1ca94fc09ce0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffb47decc8fd0cfe4235e9cdaf4ef86b891a70008f543bcdb1ca94fc09ce0e8->enter($__internal_5ffb47decc8fd0cfe4235e9cdaf4ef86b891a70008f543bcdb1ca94fc09ce0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:check_email.html.twig"));

        $__internal_52e60ec3c7e359a00b3a51ecfbc81c0d7f1179f8313d512566b280030e1fb7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e60ec3c7e359a00b3a51ecfbc81c0d7f1179f8313d512566b280030e1fb7a5->enter($__internal_52e60ec3c7e359a00b3a51ecfbc81c0d7f1179f8313d512566b280030e1fb7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ffb47decc8fd0cfe4235e9cdaf4ef86b891a70008f543bcdb1ca94fc09ce0e8->leave($__internal_5ffb47decc8fd0cfe4235e9cdaf4ef86b891a70008f543bcdb1ca94fc09ce0e8_prof);

        
        $__internal_52e60ec3c7e359a00b3a51ecfbc81c0d7f1179f8313d512566b280030e1fb7a5->leave($__internal_52e60ec3c7e359a00b3a51ecfbc81c0d7f1179f8313d512566b280030e1fb7a5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be5abe14ad05f887f347b041d2a7568a5829962f004ea65c28c1fd9c19846b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5abe14ad05f887f347b041d2a7568a5829962f004ea65c28c1fd9c19846b6c->enter($__internal_be5abe14ad05f887f347b041d2a7568a5829962f004ea65c28c1fd9c19846b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d2b843a64fa41467ef5b921d6e55836fe7571d9dba8009aa40a4fd2c8c1480f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b843a64fa41467ef5b921d6e55836fe7571d9dba8009aa40a4fd2c8c1480f0->enter($__internal_d2b843a64fa41467ef5b921d6e55836fe7571d9dba8009aa40a4fd2c8c1480f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d2b843a64fa41467ef5b921d6e55836fe7571d9dba8009aa40a4fd2c8c1480f0->leave($__internal_d2b843a64fa41467ef5b921d6e55836fe7571d9dba8009aa40a4fd2c8c1480f0_prof);

        
        $__internal_be5abe14ad05f887f347b041d2a7568a5829962f004ea65c28c1fd9c19846b6c->leave($__internal_be5abe14ad05f887f347b041d2a7568a5829962f004ea65c28c1fd9c19846b6c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:check_email.html.twig";
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
", "UserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
