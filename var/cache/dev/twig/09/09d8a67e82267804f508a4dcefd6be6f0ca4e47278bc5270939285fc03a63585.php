<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6e70c6848036ab969bf5b0889b6dea378f1717aa5a29a52c47f18255c05baedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b8046ed2c0ca217b12b0726d44ea38c4a603b2db113122088262f7e9f8d5e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8046ed2c0ca217b12b0726d44ea38c4a603b2db113122088262f7e9f8d5e44->enter($__internal_8b8046ed2c0ca217b12b0726d44ea38c4a603b2db113122088262f7e9f8d5e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b6b2950cc281b71ba3bc57602b4fe140ed0e73b7e7a312278b4ea87dfbe96d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b2950cc281b71ba3bc57602b4fe140ed0e73b7e7a312278b4ea87dfbe96d8c->enter($__internal_b6b2950cc281b71ba3bc57602b4fe140ed0e73b7e7a312278b4ea87dfbe96d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8046ed2c0ca217b12b0726d44ea38c4a603b2db113122088262f7e9f8d5e44->leave($__internal_8b8046ed2c0ca217b12b0726d44ea38c4a603b2db113122088262f7e9f8d5e44_prof);

        
        $__internal_b6b2950cc281b71ba3bc57602b4fe140ed0e73b7e7a312278b4ea87dfbe96d8c->leave($__internal_b6b2950cc281b71ba3bc57602b4fe140ed0e73b7e7a312278b4ea87dfbe96d8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ef638617ccfc400ad3ade07f3d2078916acde617d7072d305386635f9b62d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef638617ccfc400ad3ade07f3d2078916acde617d7072d305386635f9b62d4f->enter($__internal_4ef638617ccfc400ad3ade07f3d2078916acde617d7072d305386635f9b62d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_52cb3c5651d93b1be1ef984bb5fd21b4a92095eca7f5d177a86626d052e8e234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cb3c5651d93b1be1ef984bb5fd21b4a92095eca7f5d177a86626d052e8e234->enter($__internal_52cb3c5651d93b1be1ef984bb5fd21b4a92095eca7f5d177a86626d052e8e234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_52cb3c5651d93b1be1ef984bb5fd21b4a92095eca7f5d177a86626d052e8e234->leave($__internal_52cb3c5651d93b1be1ef984bb5fd21b4a92095eca7f5d177a86626d052e8e234_prof);

        
        $__internal_4ef638617ccfc400ad3ade07f3d2078916acde617d7072d305386635f9b62d4f->leave($__internal_4ef638617ccfc400ad3ade07f3d2078916acde617d7072d305386635f9b62d4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
