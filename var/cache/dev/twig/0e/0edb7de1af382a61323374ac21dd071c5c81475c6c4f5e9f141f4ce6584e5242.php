<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e7f3636e555c6e166cbe4b28364ab473b8c30d3c6af8aee20d40d51bd081f42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93c27b4a1f338f8cba1b73ecb3cc5f85de0a0716599d2d9474b6a9b3bdb3a331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c27b4a1f338f8cba1b73ecb3cc5f85de0a0716599d2d9474b6a9b3bdb3a331->enter($__internal_93c27b4a1f338f8cba1b73ecb3cc5f85de0a0716599d2d9474b6a9b3bdb3a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a38ee07065e88fdc62f7f730ec825c018e059ba87eef8e595db1b49620b46872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38ee07065e88fdc62f7f730ec825c018e059ba87eef8e595db1b49620b46872->enter($__internal_a38ee07065e88fdc62f7f730ec825c018e059ba87eef8e595db1b49620b46872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c27b4a1f338f8cba1b73ecb3cc5f85de0a0716599d2d9474b6a9b3bdb3a331->leave($__internal_93c27b4a1f338f8cba1b73ecb3cc5f85de0a0716599d2d9474b6a9b3bdb3a331_prof);

        
        $__internal_a38ee07065e88fdc62f7f730ec825c018e059ba87eef8e595db1b49620b46872->leave($__internal_a38ee07065e88fdc62f7f730ec825c018e059ba87eef8e595db1b49620b46872_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4f61edec2ec1b8581fbe886674442701c9cc0df01c9992041154bb422249f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f61edec2ec1b8581fbe886674442701c9cc0df01c9992041154bb422249f77->enter($__internal_c4f61edec2ec1b8581fbe886674442701c9cc0df01c9992041154bb422249f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e9562b66e5e61bd695354050bf7185a4a2807b14e9de97ea80587d79937c0750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9562b66e5e61bd695354050bf7185a4a2807b14e9de97ea80587d79937c0750->enter($__internal_e9562b66e5e61bd695354050bf7185a4a2807b14e9de97ea80587d79937c0750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e9562b66e5e61bd695354050bf7185a4a2807b14e9de97ea80587d79937c0750->leave($__internal_e9562b66e5e61bd695354050bf7185a4a2807b14e9de97ea80587d79937c0750_prof);

        
        $__internal_c4f61edec2ec1b8581fbe886674442701c9cc0df01c9992041154bb422249f77->leave($__internal_c4f61edec2ec1b8581fbe886674442701c9cc0df01c9992041154bb422249f77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42e4930c4b79a933add586ffe8da6e5c31608e04436e40ee932de03de86ffb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e4930c4b79a933add586ffe8da6e5c31608e04436e40ee932de03de86ffb7d->enter($__internal_42e4930c4b79a933add586ffe8da6e5c31608e04436e40ee932de03de86ffb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0af71c591f1393681c760d41352e7f4fefecfb13a51d2bbda5d5bc5d6d33922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af71c591f1393681c760d41352e7f4fefecfb13a51d2bbda5d5bc5d6d33922->enter($__internal_e0af71c591f1393681c760d41352e7f4fefecfb13a51d2bbda5d5bc5d6d33922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0af71c591f1393681c760d41352e7f4fefecfb13a51d2bbda5d5bc5d6d33922->leave($__internal_e0af71c591f1393681c760d41352e7f4fefecfb13a51d2bbda5d5bc5d6d33922_prof);

        
        $__internal_42e4930c4b79a933add586ffe8da6e5c31608e04436e40ee932de03de86ffb7d->leave($__internal_42e4930c4b79a933add586ffe8da6e5c31608e04436e40ee932de03de86ffb7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68656caa607303bac17f1aaf04cc757098e37ca8c39a1f0d32e894f2672345b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68656caa607303bac17f1aaf04cc757098e37ca8c39a1f0d32e894f2672345b8->enter($__internal_68656caa607303bac17f1aaf04cc757098e37ca8c39a1f0d32e894f2672345b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51de8489bab9415d56539867912faab33e3d280540c784f3a95f01cea74a3a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51de8489bab9415d56539867912faab33e3d280540c784f3a95f01cea74a3a23->enter($__internal_51de8489bab9415d56539867912faab33e3d280540c784f3a95f01cea74a3a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51de8489bab9415d56539867912faab33e3d280540c784f3a95f01cea74a3a23->leave($__internal_51de8489bab9415d56539867912faab33e3d280540c784f3a95f01cea74a3a23_prof);

        
        $__internal_68656caa607303bac17f1aaf04cc757098e37ca8c39a1f0d32e894f2672345b8->leave($__internal_68656caa607303bac17f1aaf04cc757098e37ca8c39a1f0d32e894f2672345b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
