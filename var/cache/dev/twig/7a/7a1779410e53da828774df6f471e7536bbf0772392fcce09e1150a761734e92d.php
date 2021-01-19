<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7c78db572dbb8382b51509cae460061638b003158a55703e2cff76fe160c1eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_706c3baf9fe85618319fcbe911e1c58ca8fb7c89788da560e65dbb376c8e1b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706c3baf9fe85618319fcbe911e1c58ca8fb7c89788da560e65dbb376c8e1b01->enter($__internal_706c3baf9fe85618319fcbe911e1c58ca8fb7c89788da560e65dbb376c8e1b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_da39effb138ff0d8155a097753c1996b0ea1d2afb3fee7a37c1f2c3e3f0fffdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da39effb138ff0d8155a097753c1996b0ea1d2afb3fee7a37c1f2c3e3f0fffdc->enter($__internal_da39effb138ff0d8155a097753c1996b0ea1d2afb3fee7a37c1f2c3e3f0fffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706c3baf9fe85618319fcbe911e1c58ca8fb7c89788da560e65dbb376c8e1b01->leave($__internal_706c3baf9fe85618319fcbe911e1c58ca8fb7c89788da560e65dbb376c8e1b01_prof);

        
        $__internal_da39effb138ff0d8155a097753c1996b0ea1d2afb3fee7a37c1f2c3e3f0fffdc->leave($__internal_da39effb138ff0d8155a097753c1996b0ea1d2afb3fee7a37c1f2c3e3f0fffdc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a8d382562beed3ddfa65c79b3648d2c58a32529825969d3e179734b557ae08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8d382562beed3ddfa65c79b3648d2c58a32529825969d3e179734b557ae08a->enter($__internal_1a8d382562beed3ddfa65c79b3648d2c58a32529825969d3e179734b557ae08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_686def2da0a985292f593f89cf5def2b78e10e7f527251ee6085ffb4d43e062a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686def2da0a985292f593f89cf5def2b78e10e7f527251ee6085ffb4d43e062a->enter($__internal_686def2da0a985292f593f89cf5def2b78e10e7f527251ee6085ffb4d43e062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_686def2da0a985292f593f89cf5def2b78e10e7f527251ee6085ffb4d43e062a->leave($__internal_686def2da0a985292f593f89cf5def2b78e10e7f527251ee6085ffb4d43e062a_prof);

        
        $__internal_1a8d382562beed3ddfa65c79b3648d2c58a32529825969d3e179734b557ae08a->leave($__internal_1a8d382562beed3ddfa65c79b3648d2c58a32529825969d3e179734b557ae08a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23d3b9417790010c5d8bc7197d05f252b3db5fc4a126f66b6445ce51b0c2e450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d3b9417790010c5d8bc7197d05f252b3db5fc4a126f66b6445ce51b0c2e450->enter($__internal_23d3b9417790010c5d8bc7197d05f252b3db5fc4a126f66b6445ce51b0c2e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d07e704d447572ad6594a85cb5ec657665aea8330c9c45a0cad5ad54803b5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07e704d447572ad6594a85cb5ec657665aea8330c9c45a0cad5ad54803b5c2->enter($__internal_0d07e704d447572ad6594a85cb5ec657665aea8330c9c45a0cad5ad54803b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d07e704d447572ad6594a85cb5ec657665aea8330c9c45a0cad5ad54803b5c2->leave($__internal_0d07e704d447572ad6594a85cb5ec657665aea8330c9c45a0cad5ad54803b5c2_prof);

        
        $__internal_23d3b9417790010c5d8bc7197d05f252b3db5fc4a126f66b6445ce51b0c2e450->leave($__internal_23d3b9417790010c5d8bc7197d05f252b3db5fc4a126f66b6445ce51b0c2e450_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a71ba4176bb9249a11aa953a678104e9c54a0ea6b199774a2a2cedfa17de4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a71ba4176bb9249a11aa953a678104e9c54a0ea6b199774a2a2cedfa17de4e7->enter($__internal_3a71ba4176bb9249a11aa953a678104e9c54a0ea6b199774a2a2cedfa17de4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6f6a7b40d85eb5ba7d2dc34ccd09f4f2ff47917ebdaf13c1a72979c758847c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f6a7b40d85eb5ba7d2dc34ccd09f4f2ff47917ebdaf13c1a72979c758847c2->enter($__internal_c6f6a7b40d85eb5ba7d2dc34ccd09f4f2ff47917ebdaf13c1a72979c758847c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6f6a7b40d85eb5ba7d2dc34ccd09f4f2ff47917ebdaf13c1a72979c758847c2->leave($__internal_c6f6a7b40d85eb5ba7d2dc34ccd09f4f2ff47917ebdaf13c1a72979c758847c2_prof);

        
        $__internal_3a71ba4176bb9249a11aa953a678104e9c54a0ea6b199774a2a2cedfa17de4e7->leave($__internal_3a71ba4176bb9249a11aa953a678104e9c54a0ea6b199774a2a2cedfa17de4e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
