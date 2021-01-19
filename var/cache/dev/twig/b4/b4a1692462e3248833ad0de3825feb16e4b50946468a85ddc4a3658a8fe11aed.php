<?php

/* UserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_360afffbd15bf1816d42e3059aea944eb15c464a15b20ccec1701258fd0b4405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c7275b66e645be924827f34aa26dbd51ef7fd3b7534460a2b714450899890141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7275b66e645be924827f34aa26dbd51ef7fd3b7534460a2b714450899890141->enter($__internal_c7275b66e645be924827f34aa26dbd51ef7fd3b7534460a2b714450899890141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        $__internal_847e41f6778ca05a7aa5b076b66a9a6b1790c30a36df0043cd8d6ac0ca4e5e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847e41f6778ca05a7aa5b076b66a9a6b1790c30a36df0043cd8d6ac0ca4e5e31->enter($__internal_847e41f6778ca05a7aa5b076b66a9a6b1790c30a36df0043cd8d6ac0ca4e5e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7275b66e645be924827f34aa26dbd51ef7fd3b7534460a2b714450899890141->leave($__internal_c7275b66e645be924827f34aa26dbd51ef7fd3b7534460a2b714450899890141_prof);

        
        $__internal_847e41f6778ca05a7aa5b076b66a9a6b1790c30a36df0043cd8d6ac0ca4e5e31->leave($__internal_847e41f6778ca05a7aa5b076b66a9a6b1790c30a36df0043cd8d6ac0ca4e5e31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19a325a55267599b66ad88a409ee37d031e4cf151e52d12e37d6200baaea535b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a325a55267599b66ad88a409ee37d031e4cf151e52d12e37d6200baaea535b->enter($__internal_19a325a55267599b66ad88a409ee37d031e4cf151e52d12e37d6200baaea535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64c471c2115f6127a178392db8aaaf5c07ff530cf9918abe3e65acea7a7714df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c471c2115f6127a178392db8aaaf5c07ff530cf9918abe3e65acea7a7714df->enter($__internal_64c471c2115f6127a178392db8aaaf5c07ff530cf9918abe3e65acea7a7714df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_64c471c2115f6127a178392db8aaaf5c07ff530cf9918abe3e65acea7a7714df->leave($__internal_64c471c2115f6127a178392db8aaaf5c07ff530cf9918abe3e65acea7a7714df_prof);

        
        $__internal_19a325a55267599b66ad88a409ee37d031e4cf151e52d12e37d6200baaea535b->leave($__internal_19a325a55267599b66ad88a409ee37d031e4cf151e52d12e37d6200baaea535b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password.html.twig";
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
", "UserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
