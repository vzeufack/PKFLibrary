<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_7c7175278a02ca0948a8647bbaaef16bae9060d2f7945f1429c2f7b9fb03fc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_2ffd5111cc98b211b9d89ee6f3148ed91767b5df220002f31fe201136f9e5315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffd5111cc98b211b9d89ee6f3148ed91767b5df220002f31fe201136f9e5315->enter($__internal_2ffd5111cc98b211b9d89ee6f3148ed91767b5df220002f31fe201136f9e5315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e05e3c72d8ae491c165e05d96ec3d792ca3aa2972c645b49c4efccb5a6aebbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05e3c72d8ae491c165e05d96ec3d792ca3aa2972c645b49c4efccb5a6aebbf4->enter($__internal_e05e3c72d8ae491c165e05d96ec3d792ca3aa2972c645b49c4efccb5a6aebbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffd5111cc98b211b9d89ee6f3148ed91767b5df220002f31fe201136f9e5315->leave($__internal_2ffd5111cc98b211b9d89ee6f3148ed91767b5df220002f31fe201136f9e5315_prof);

        
        $__internal_e05e3c72d8ae491c165e05d96ec3d792ca3aa2972c645b49c4efccb5a6aebbf4->leave($__internal_e05e3c72d8ae491c165e05d96ec3d792ca3aa2972c645b49c4efccb5a6aebbf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b208bdf02b7f3ad4ae666dbaccc352ffd59846a22efc4dd7a41b1814f3970007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b208bdf02b7f3ad4ae666dbaccc352ffd59846a22efc4dd7a41b1814f3970007->enter($__internal_b208bdf02b7f3ad4ae666dbaccc352ffd59846a22efc4dd7a41b1814f3970007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41291dde0b2438af9c3a3013bdc7756a2dba399992d2f8ffa3428f0601a89807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41291dde0b2438af9c3a3013bdc7756a2dba399992d2f8ffa3428f0601a89807->enter($__internal_41291dde0b2438af9c3a3013bdc7756a2dba399992d2f8ffa3428f0601a89807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_41291dde0b2438af9c3a3013bdc7756a2dba399992d2f8ffa3428f0601a89807->leave($__internal_41291dde0b2438af9c3a3013bdc7756a2dba399992d2f8ffa3428f0601a89807_prof);

        
        $__internal_b208bdf02b7f3ad4ae666dbaccc352ffd59846a22efc4dd7a41b1814f3970007->leave($__internal_b208bdf02b7f3ad4ae666dbaccc352ffd59846a22efc4dd7a41b1814f3970007_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df03a8205abc3d9b1a62a1905851275b0c1f05e85e75806d0c30174a08b579c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df03a8205abc3d9b1a62a1905851275b0c1f05e85e75806d0c30174a08b579c5->enter($__internal_df03a8205abc3d9b1a62a1905851275b0c1f05e85e75806d0c30174a08b579c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2a4d78003961c6d5c628fad2242b6ed33a545abefa203b966baedbda3910bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a4d78003961c6d5c628fad2242b6ed33a545abefa203b966baedbda3910bd2->enter($__internal_c2a4d78003961c6d5c628fad2242b6ed33a545abefa203b966baedbda3910bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2a4d78003961c6d5c628fad2242b6ed33a545abefa203b966baedbda3910bd2->leave($__internal_c2a4d78003961c6d5c628fad2242b6ed33a545abefa203b966baedbda3910bd2_prof);

        
        $__internal_df03a8205abc3d9b1a62a1905851275b0c1f05e85e75806d0c30174a08b579c5->leave($__internal_df03a8205abc3d9b1a62a1905851275b0c1f05e85e75806d0c30174a08b579c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
