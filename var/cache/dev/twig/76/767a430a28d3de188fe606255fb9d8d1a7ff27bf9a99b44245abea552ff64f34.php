<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_93821b63075b552d83b19965c87fe6a09976d51a91d21c820a25a91dd5d4a5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_d5b8274561610ecb8fde54cba6e520318bd9d533dd5dfcf2c73431341e19934f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b8274561610ecb8fde54cba6e520318bd9d533dd5dfcf2c73431341e19934f->enter($__internal_d5b8274561610ecb8fde54cba6e520318bd9d533dd5dfcf2c73431341e19934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $__internal_d5bb8857b5f3682d8857d0da5b2e733e10baef062fee30e8457d23226bbc5c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bb8857b5f3682d8857d0da5b2e733e10baef062fee30e8457d23226bbc5c3a->enter($__internal_d5bb8857b5f3682d8857d0da5b2e733e10baef062fee30e8457d23226bbc5c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b8274561610ecb8fde54cba6e520318bd9d533dd5dfcf2c73431341e19934f->leave($__internal_d5b8274561610ecb8fde54cba6e520318bd9d533dd5dfcf2c73431341e19934f_prof);

        
        $__internal_d5bb8857b5f3682d8857d0da5b2e733e10baef062fee30e8457d23226bbc5c3a->leave($__internal_d5bb8857b5f3682d8857d0da5b2e733e10baef062fee30e8457d23226bbc5c3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0154736648f4fae359b86a0d6b38ccaaebe72d4b5350431a1933200a03221632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0154736648f4fae359b86a0d6b38ccaaebe72d4b5350431a1933200a03221632->enter($__internal_0154736648f4fae359b86a0d6b38ccaaebe72d4b5350431a1933200a03221632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84cc577b72d4d548911f042d8bbc95be39f95a6185bb7faaa031954b2921d746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cc577b72d4d548911f042d8bbc95be39f95a6185bb7faaa031954b2921d746->enter($__internal_84cc577b72d4d548911f042d8bbc95be39f95a6185bb7faaa031954b2921d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_84cc577b72d4d548911f042d8bbc95be39f95a6185bb7faaa031954b2921d746->leave($__internal_84cc577b72d4d548911f042d8bbc95be39f95a6185bb7faaa031954b2921d746_prof);

        
        $__internal_0154736648f4fae359b86a0d6b38ccaaebe72d4b5350431a1933200a03221632->leave($__internal_0154736648f4fae359b86a0d6b38ccaaebe72d4b5350431a1933200a03221632_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
", "@User/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\reset.html.twig");
    }
}
