<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4133abfc99c7f28dc8147a977ab460eb0457c6028e431467e32111249521b6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d648916cca0b879a2a1d86833e3557adb5782217625190146bed38aefdb07be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d648916cca0b879a2a1d86833e3557adb5782217625190146bed38aefdb07be7->enter($__internal_d648916cca0b879a2a1d86833e3557adb5782217625190146bed38aefdb07be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7281eb0bf2c8a366e70aa361252d567970f0cb2a0f90f6ef5eee03c89569d9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7281eb0bf2c8a366e70aa361252d567970f0cb2a0f90f6ef5eee03c89569d9a2->enter($__internal_7281eb0bf2c8a366e70aa361252d567970f0cb2a0f90f6ef5eee03c89569d9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d648916cca0b879a2a1d86833e3557adb5782217625190146bed38aefdb07be7->leave($__internal_d648916cca0b879a2a1d86833e3557adb5782217625190146bed38aefdb07be7_prof);

        
        $__internal_7281eb0bf2c8a366e70aa361252d567970f0cb2a0f90f6ef5eee03c89569d9a2->leave($__internal_7281eb0bf2c8a366e70aa361252d567970f0cb2a0f90f6ef5eee03c89569d9a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ab76e2f9e006bde39fede3781da5ec9e0dc239be37daaeac770fe7f9c8f7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ab76e2f9e006bde39fede3781da5ec9e0dc239be37daaeac770fe7f9c8f7e4->enter($__internal_39ab76e2f9e006bde39fede3781da5ec9e0dc239be37daaeac770fe7f9c8f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2016c71dc0df3f7ea6b371b9e1c41b4ee907214b4001fdd5042c10c34808acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2016c71dc0df3f7ea6b371b9e1c41b4ee907214b4001fdd5042c10c34808acc->enter($__internal_b2016c71dc0df3f7ea6b371b9e1c41b4ee907214b4001fdd5042c10c34808acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b2016c71dc0df3f7ea6b371b9e1c41b4ee907214b4001fdd5042c10c34808acc->leave($__internal_b2016c71dc0df3f7ea6b371b9e1c41b4ee907214b4001fdd5042c10c34808acc_prof);

        
        $__internal_39ab76e2f9e006bde39fede3781da5ec9e0dc239be37daaeac770fe7f9c8f7e4->leave($__internal_39ab76e2f9e006bde39fede3781da5ec9e0dc239be37daaeac770fe7f9c8f7e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85300c5a36bb876b4bdebb7eb0b76f5cd7b5efccf89e4004aa0d6d12b766fba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85300c5a36bb876b4bdebb7eb0b76f5cd7b5efccf89e4004aa0d6d12b766fba8->enter($__internal_85300c5a36bb876b4bdebb7eb0b76f5cd7b5efccf89e4004aa0d6d12b766fba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7e19dedeea247d77b76a2ef9649137a5f2872fcb2f86a5096be80f10e6596a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e19dedeea247d77b76a2ef9649137a5f2872fcb2f86a5096be80f10e6596a2->enter($__internal_a7e19dedeea247d77b76a2ef9649137a5f2872fcb2f86a5096be80f10e6596a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a7e19dedeea247d77b76a2ef9649137a5f2872fcb2f86a5096be80f10e6596a2->leave($__internal_a7e19dedeea247d77b76a2ef9649137a5f2872fcb2f86a5096be80f10e6596a2_prof);

        
        $__internal_85300c5a36bb876b4bdebb7eb0b76f5cd7b5efccf89e4004aa0d6d12b766fba8->leave($__internal_85300c5a36bb876b4bdebb7eb0b76f5cd7b5efccf89e4004aa0d6d12b766fba8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
