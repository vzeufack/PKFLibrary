<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e6a8e56e2ce2b615f9c5304f4d0a50db38b0c6c2871adec3782e1d9ac3e533fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_92eb389e36cd601a7ed2e07263d4ec56a75148e1751b7df53ec786308c61bcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92eb389e36cd601a7ed2e07263d4ec56a75148e1751b7df53ec786308c61bcfa->enter($__internal_92eb389e36cd601a7ed2e07263d4ec56a75148e1751b7df53ec786308c61bcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e754c27fb86b67da6a11af558bbdd1687d7c1924138ba6fc48229a617de22aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e754c27fb86b67da6a11af558bbdd1687d7c1924138ba6fc48229a617de22aff->enter($__internal_e754c27fb86b67da6a11af558bbdd1687d7c1924138ba6fc48229a617de22aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92eb389e36cd601a7ed2e07263d4ec56a75148e1751b7df53ec786308c61bcfa->leave($__internal_92eb389e36cd601a7ed2e07263d4ec56a75148e1751b7df53ec786308c61bcfa_prof);

        
        $__internal_e754c27fb86b67da6a11af558bbdd1687d7c1924138ba6fc48229a617de22aff->leave($__internal_e754c27fb86b67da6a11af558bbdd1687d7c1924138ba6fc48229a617de22aff_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_665481f6010b2750471f41a9dc10fd7457337a4e4f97aa8bb848ae7fb7e593c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665481f6010b2750471f41a9dc10fd7457337a4e4f97aa8bb848ae7fb7e593c4->enter($__internal_665481f6010b2750471f41a9dc10fd7457337a4e4f97aa8bb848ae7fb7e593c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fab62c050a0608e6ee2b424f7e5396b662ef0a55f10e0e0bbf73fbc33324f94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab62c050a0608e6ee2b424f7e5396b662ef0a55f10e0e0bbf73fbc33324f94c->enter($__internal_fab62c050a0608e6ee2b424f7e5396b662ef0a55f10e0e0bbf73fbc33324f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fab62c050a0608e6ee2b424f7e5396b662ef0a55f10e0e0bbf73fbc33324f94c->leave($__internal_fab62c050a0608e6ee2b424f7e5396b662ef0a55f10e0e0bbf73fbc33324f94c_prof);

        
        $__internal_665481f6010b2750471f41a9dc10fd7457337a4e4f97aa8bb848ae7fb7e593c4->leave($__internal_665481f6010b2750471f41a9dc10fd7457337a4e4f97aa8bb848ae7fb7e593c4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53b256736273a3b12c8410d6985f13905f16286711d3799d35bccc1fd48596b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b256736273a3b12c8410d6985f13905f16286711d3799d35bccc1fd48596b5->enter($__internal_53b256736273a3b12c8410d6985f13905f16286711d3799d35bccc1fd48596b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd25360d812e093c00805fe6907390a29f0baafdd2ba8e5281485613638c5d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd25360d812e093c00805fe6907390a29f0baafdd2ba8e5281485613638c5d15->enter($__internal_bd25360d812e093c00805fe6907390a29f0baafdd2ba8e5281485613638c5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bd25360d812e093c00805fe6907390a29f0baafdd2ba8e5281485613638c5d15->leave($__internal_bd25360d812e093c00805fe6907390a29f0baafdd2ba8e5281485613638c5d15_prof);

        
        $__internal_53b256736273a3b12c8410d6985f13905f16286711d3799d35bccc1fd48596b5->leave($__internal_53b256736273a3b12c8410d6985f13905f16286711d3799d35bccc1fd48596b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
