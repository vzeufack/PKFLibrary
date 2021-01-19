<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_77a893d4cf20061a9a241069e5ad9506777771e646b6f5db6409d89ea9767992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0fe96aa7f9ceddfa28096fb2ff0cf854572a99bdf87538eaf2dec711cedb79ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe96aa7f9ceddfa28096fb2ff0cf854572a99bdf87538eaf2dec711cedb79ef->enter($__internal_0fe96aa7f9ceddfa28096fb2ff0cf854572a99bdf87538eaf2dec711cedb79ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a46f3d51f34d81636bb86de48712f0fc2760b4e3d71b76d82350b1f5a58d420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46f3d51f34d81636bb86de48712f0fc2760b4e3d71b76d82350b1f5a58d420f->enter($__internal_a46f3d51f34d81636bb86de48712f0fc2760b4e3d71b76d82350b1f5a58d420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe96aa7f9ceddfa28096fb2ff0cf854572a99bdf87538eaf2dec711cedb79ef->leave($__internal_0fe96aa7f9ceddfa28096fb2ff0cf854572a99bdf87538eaf2dec711cedb79ef_prof);

        
        $__internal_a46f3d51f34d81636bb86de48712f0fc2760b4e3d71b76d82350b1f5a58d420f->leave($__internal_a46f3d51f34d81636bb86de48712f0fc2760b4e3d71b76d82350b1f5a58d420f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_060c881cd060546074e9ff9d8ab2bb255f43e3cab439fc6e973874c6ffce2353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060c881cd060546074e9ff9d8ab2bb255f43e3cab439fc6e973874c6ffce2353->enter($__internal_060c881cd060546074e9ff9d8ab2bb255f43e3cab439fc6e973874c6ffce2353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afdeb9552575aac060e1340e522348e8419e097304d035ebecc5eb8847c8f290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdeb9552575aac060e1340e522348e8419e097304d035ebecc5eb8847c8f290->enter($__internal_afdeb9552575aac060e1340e522348e8419e097304d035ebecc5eb8847c8f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_afdeb9552575aac060e1340e522348e8419e097304d035ebecc5eb8847c8f290->leave($__internal_afdeb9552575aac060e1340e522348e8419e097304d035ebecc5eb8847c8f290_prof);

        
        $__internal_060c881cd060546074e9ff9d8ab2bb255f43e3cab439fc6e973874c6ffce2353->leave($__internal_060c881cd060546074e9ff9d8ab2bb255f43e3cab439fc6e973874c6ffce2353_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2c09a2cc17494ce20faf929949acbbac83797477e16cca41e234d145978842e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c09a2cc17494ce20faf929949acbbac83797477e16cca41e234d145978842e->enter($__internal_e2c09a2cc17494ce20faf929949acbbac83797477e16cca41e234d145978842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ce1d7013368c220c22517bba6273cce6f8423e753f789970e2999f94a1e1a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce1d7013368c220c22517bba6273cce6f8423e753f789970e2999f94a1e1a66->enter($__internal_8ce1d7013368c220c22517bba6273cce6f8423e753f789970e2999f94a1e1a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ce1d7013368c220c22517bba6273cce6f8423e753f789970e2999f94a1e1a66->leave($__internal_8ce1d7013368c220c22517bba6273cce6f8423e753f789970e2999f94a1e1a66_prof);

        
        $__internal_e2c09a2cc17494ce20faf929949acbbac83797477e16cca41e234d145978842e->leave($__internal_e2c09a2cc17494ce20faf929949acbbac83797477e16cca41e234d145978842e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_083f02bfb8dd7a74ee9bd889918c4c8cb61f6a64d93efaf43322e1324176c0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083f02bfb8dd7a74ee9bd889918c4c8cb61f6a64d93efaf43322e1324176c0d5->enter($__internal_083f02bfb8dd7a74ee9bd889918c4c8cb61f6a64d93efaf43322e1324176c0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5488f02441b65815f025fab2f6e5d590dc274ac9674e702020c2093726a2ab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5488f02441b65815f025fab2f6e5d590dc274ac9674e702020c2093726a2ab7c->enter($__internal_5488f02441b65815f025fab2f6e5d590dc274ac9674e702020c2093726a2ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5488f02441b65815f025fab2f6e5d590dc274ac9674e702020c2093726a2ab7c->leave($__internal_5488f02441b65815f025fab2f6e5d590dc274ac9674e702020c2093726a2ab7c_prof);

        
        $__internal_083f02bfb8dd7a74ee9bd889918c4c8cb61f6a64d93efaf43322e1324176c0d5->leave($__internal_083f02bfb8dd7a74ee9bd889918c4c8cb61f6a64d93efaf43322e1324176c0d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
