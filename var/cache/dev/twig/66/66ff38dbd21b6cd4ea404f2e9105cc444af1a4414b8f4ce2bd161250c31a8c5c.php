<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_246a758b6e35c3fcf73f5e948aac138d78d964fdc29e70222c058e72ba4f7001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ef099c8928a178a12ac4a870007e2aa5cb013dcbf762c90525a99a33daab415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef099c8928a178a12ac4a870007e2aa5cb013dcbf762c90525a99a33daab415->enter($__internal_1ef099c8928a178a12ac4a870007e2aa5cb013dcbf762c90525a99a33daab415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b8de7a671a29b272b3b1b95d3718625a98142ac39a5e5ea8bee472677ad42b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8de7a671a29b272b3b1b95d3718625a98142ac39a5e5ea8bee472677ad42b7d->enter($__internal_b8de7a671a29b272b3b1b95d3718625a98142ac39a5e5ea8bee472677ad42b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef099c8928a178a12ac4a870007e2aa5cb013dcbf762c90525a99a33daab415->leave($__internal_1ef099c8928a178a12ac4a870007e2aa5cb013dcbf762c90525a99a33daab415_prof);

        
        $__internal_b8de7a671a29b272b3b1b95d3718625a98142ac39a5e5ea8bee472677ad42b7d->leave($__internal_b8de7a671a29b272b3b1b95d3718625a98142ac39a5e5ea8bee472677ad42b7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a869dae044eaa5aa97bde3d7cc00c01a59dfa1f1724758b0f7d69d898de9c519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a869dae044eaa5aa97bde3d7cc00c01a59dfa1f1724758b0f7d69d898de9c519->enter($__internal_a869dae044eaa5aa97bde3d7cc00c01a59dfa1f1724758b0f7d69d898de9c519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0744030888e8fcb6e8b9ee06fabb0de23ba048ea66cbd9a6155d4ad499f6bf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0744030888e8fcb6e8b9ee06fabb0de23ba048ea66cbd9a6155d4ad499f6bf10->enter($__internal_0744030888e8fcb6e8b9ee06fabb0de23ba048ea66cbd9a6155d4ad499f6bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0744030888e8fcb6e8b9ee06fabb0de23ba048ea66cbd9a6155d4ad499f6bf10->leave($__internal_0744030888e8fcb6e8b9ee06fabb0de23ba048ea66cbd9a6155d4ad499f6bf10_prof);

        
        $__internal_a869dae044eaa5aa97bde3d7cc00c01a59dfa1f1724758b0f7d69d898de9c519->leave($__internal_a869dae044eaa5aa97bde3d7cc00c01a59dfa1f1724758b0f7d69d898de9c519_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f61bf287903487f79eda435120cc26a2bf042026c72f119b0293e877e1faa0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61bf287903487f79eda435120cc26a2bf042026c72f119b0293e877e1faa0d0->enter($__internal_f61bf287903487f79eda435120cc26a2bf042026c72f119b0293e877e1faa0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8ee1e8728d3c41152c8f2e5b93642122c9563bef1cb79895e7f5b5dde10a83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ee1e8728d3c41152c8f2e5b93642122c9563bef1cb79895e7f5b5dde10a83b->enter($__internal_b8ee1e8728d3c41152c8f2e5b93642122c9563bef1cb79895e7f5b5dde10a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b8ee1e8728d3c41152c8f2e5b93642122c9563bef1cb79895e7f5b5dde10a83b->leave($__internal_b8ee1e8728d3c41152c8f2e5b93642122c9563bef1cb79895e7f5b5dde10a83b_prof);

        
        $__internal_f61bf287903487f79eda435120cc26a2bf042026c72f119b0293e877e1faa0d0->leave($__internal_f61bf287903487f79eda435120cc26a2bf042026c72f119b0293e877e1faa0d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
