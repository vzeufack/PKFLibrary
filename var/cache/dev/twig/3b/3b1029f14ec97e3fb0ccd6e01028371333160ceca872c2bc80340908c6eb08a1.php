<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_597427a51b7843d69500af76e263736320ad774667050302e0eb3ed1f668d3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_c808d3888313216fe1b2d37ba9da64d8e165c1941775d97bfdfaa10ed05345fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c808d3888313216fe1b2d37ba9da64d8e165c1941775d97bfdfaa10ed05345fd->enter($__internal_c808d3888313216fe1b2d37ba9da64d8e165c1941775d97bfdfaa10ed05345fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $__internal_9fa97c15a37998ed431ef89fd328481deeabef264c76599b2e08d12bfac4d44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa97c15a37998ed431ef89fd328481deeabef264c76599b2e08d12bfac4d44a->enter($__internal_9fa97c15a37998ed431ef89fd328481deeabef264c76599b2e08d12bfac4d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c808d3888313216fe1b2d37ba9da64d8e165c1941775d97bfdfaa10ed05345fd->leave($__internal_c808d3888313216fe1b2d37ba9da64d8e165c1941775d97bfdfaa10ed05345fd_prof);

        
        $__internal_9fa97c15a37998ed431ef89fd328481deeabef264c76599b2e08d12bfac4d44a->leave($__internal_9fa97c15a37998ed431ef89fd328481deeabef264c76599b2e08d12bfac4d44a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef05593e82e659f164d41b6ce6feb294ebe1dbab120a03e066da9964a2d4cd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef05593e82e659f164d41b6ce6feb294ebe1dbab120a03e066da9964a2d4cd30->enter($__internal_ef05593e82e659f164d41b6ce6feb294ebe1dbab120a03e066da9964a2d4cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1076cc61a8450bc1ef193e423937b1e501e8e73c43c20c7af8d8841239bec95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1076cc61a8450bc1ef193e423937b1e501e8e73c43c20c7af8d8841239bec95->enter($__internal_a1076cc61a8450bc1ef193e423937b1e501e8e73c43c20c7af8d8841239bec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a1076cc61a8450bc1ef193e423937b1e501e8e73c43c20c7af8d8841239bec95->leave($__internal_a1076cc61a8450bc1ef193e423937b1e501e8e73c43c20c7af8d8841239bec95_prof);

        
        $__internal_ef05593e82e659f164d41b6ce6feb294ebe1dbab120a03e066da9964a2d4cd30->leave($__internal_ef05593e82e659f164d41b6ce6feb294ebe1dbab120a03e066da9964a2d4cd30_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
