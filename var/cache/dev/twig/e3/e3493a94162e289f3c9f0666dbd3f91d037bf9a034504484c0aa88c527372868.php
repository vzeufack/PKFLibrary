<?php

/* @User/Group/show.html.twig */
class __TwigTemplate_da4acc9d76459a66fc054803870f56d6dd3d3193ed6b5cd8e46a0c9c7ea6df59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Group/show.html.twig", 1);
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
        $__internal_e244c2fc7c18265f354cc7e6170580b1b777071ddfbbd23aa1c91bd19bc86545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244c2fc7c18265f354cc7e6170580b1b777071ddfbbd23aa1c91bd19bc86545->enter($__internal_e244c2fc7c18265f354cc7e6170580b1b777071ddfbbd23aa1c91bd19bc86545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $__internal_6126688756fc12d7709fc504985e4527caa3c7171ad32e9a70e3eab63209d357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6126688756fc12d7709fc504985e4527caa3c7171ad32e9a70e3eab63209d357->enter($__internal_6126688756fc12d7709fc504985e4527caa3c7171ad32e9a70e3eab63209d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e244c2fc7c18265f354cc7e6170580b1b777071ddfbbd23aa1c91bd19bc86545->leave($__internal_e244c2fc7c18265f354cc7e6170580b1b777071ddfbbd23aa1c91bd19bc86545_prof);

        
        $__internal_6126688756fc12d7709fc504985e4527caa3c7171ad32e9a70e3eab63209d357->leave($__internal_6126688756fc12d7709fc504985e4527caa3c7171ad32e9a70e3eab63209d357_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_011050aacf0aa2bdf06c2d4e16d865f93b04636720e04ae967b76a3f3fda7907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011050aacf0aa2bdf06c2d4e16d865f93b04636720e04ae967b76a3f3fda7907->enter($__internal_011050aacf0aa2bdf06c2d4e16d865f93b04636720e04ae967b76a3f3fda7907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_495412c30398f8edc61fa042b827012c7cda22680061dd471ce12ea2e6a0e8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495412c30398f8edc61fa042b827012c7cda22680061dd471ce12ea2e6a0e8a7->enter($__internal_495412c30398f8edc61fa042b827012c7cda22680061dd471ce12ea2e6a0e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@User/Group/show.html.twig", 4)->display($context);
        
        $__internal_495412c30398f8edc61fa042b827012c7cda22680061dd471ce12ea2e6a0e8a7->leave($__internal_495412c30398f8edc61fa042b827012c7cda22680061dd471ce12ea2e6a0e8a7_prof);

        
        $__internal_011050aacf0aa2bdf06c2d4e16d865f93b04636720e04ae967b76a3f3fda7907->leave($__internal_011050aacf0aa2bdf06c2d4e16d865f93b04636720e04ae967b76a3f3fda7907_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Group/show.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\show.html.twig");
    }
}
