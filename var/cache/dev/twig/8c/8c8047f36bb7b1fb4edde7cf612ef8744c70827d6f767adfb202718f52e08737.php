<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_60e9bb778323251732a960fdd6895aa838d8418959871d44b373c6293f13a714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e5e91bf39a760a294f25099e0417fc1fb28dc7203003a85165d15d22e7ccdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5e91bf39a760a294f25099e0417fc1fb28dc7203003a85165d15d22e7ccdbd->enter($__internal_9e5e91bf39a760a294f25099e0417fc1fb28dc7203003a85165d15d22e7ccdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0120e297e8522793db6bb3840f8ee5db6d6919dc64f5ada2af055856a17c4659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0120e297e8522793db6bb3840f8ee5db6d6919dc64f5ada2af055856a17c4659->enter($__internal_0120e297e8522793db6bb3840f8ee5db6d6919dc64f5ada2af055856a17c4659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5e91bf39a760a294f25099e0417fc1fb28dc7203003a85165d15d22e7ccdbd->leave($__internal_9e5e91bf39a760a294f25099e0417fc1fb28dc7203003a85165d15d22e7ccdbd_prof);

        
        $__internal_0120e297e8522793db6bb3840f8ee5db6d6919dc64f5ada2af055856a17c4659->leave($__internal_0120e297e8522793db6bb3840f8ee5db6d6919dc64f5ada2af055856a17c4659_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0559726ed1acd7af15da8efc47036c825fe25bbcdcb40abbb84e8da5a6ba4756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0559726ed1acd7af15da8efc47036c825fe25bbcdcb40abbb84e8da5a6ba4756->enter($__internal_0559726ed1acd7af15da8efc47036c825fe25bbcdcb40abbb84e8da5a6ba4756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_994d68e9006595e14a455d95a90153e1589ab97f1a470dab7bdcca27a46e25f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994d68e9006595e14a455d95a90153e1589ab97f1a470dab7bdcca27a46e25f1->enter($__internal_994d68e9006595e14a455d95a90153e1589ab97f1a470dab7bdcca27a46e25f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_994d68e9006595e14a455d95a90153e1589ab97f1a470dab7bdcca27a46e25f1->leave($__internal_994d68e9006595e14a455d95a90153e1589ab97f1a470dab7bdcca27a46e25f1_prof);

        
        $__internal_0559726ed1acd7af15da8efc47036c825fe25bbcdcb40abbb84e8da5a6ba4756->leave($__internal_0559726ed1acd7af15da8efc47036c825fe25bbcdcb40abbb84e8da5a6ba4756_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cb1d1c5a72696424e7dc9e1e4ea308e7bf642aa252db712ed9a0d81f4c3d44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb1d1c5a72696424e7dc9e1e4ea308e7bf642aa252db712ed9a0d81f4c3d44a->enter($__internal_0cb1d1c5a72696424e7dc9e1e4ea308e7bf642aa252db712ed9a0d81f4c3d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50ab4384c9055930d2077e7af283b94bb9f505056a0b0c95a5ff994fa0711e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ab4384c9055930d2077e7af283b94bb9f505056a0b0c95a5ff994fa0711e22->enter($__internal_50ab4384c9055930d2077e7af283b94bb9f505056a0b0c95a5ff994fa0711e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_50ab4384c9055930d2077e7af283b94bb9f505056a0b0c95a5ff994fa0711e22->leave($__internal_50ab4384c9055930d2077e7af283b94bb9f505056a0b0c95a5ff994fa0711e22_prof);

        
        $__internal_0cb1d1c5a72696424e7dc9e1e4ea308e7bf642aa252db712ed9a0d81f4c3d44a->leave($__internal_0cb1d1c5a72696424e7dc9e1e4ea308e7bf642aa252db712ed9a0d81f4c3d44a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
