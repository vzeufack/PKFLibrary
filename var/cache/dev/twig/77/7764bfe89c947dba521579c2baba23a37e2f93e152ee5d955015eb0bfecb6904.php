<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2162fddcd2c19ded30d90157e09437245e79629433350d0839feafcd8a9c2c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_c1404c421b21279d1e34fc48e634da552f64cc301686cac411cb446dc0ad75b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1404c421b21279d1e34fc48e634da552f64cc301686cac411cb446dc0ad75b2->enter($__internal_c1404c421b21279d1e34fc48e634da552f64cc301686cac411cb446dc0ad75b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fae0ec09bd59beb4cd23f8acf07dba446ca9c27459874e6a2127b3c82e4784e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae0ec09bd59beb4cd23f8acf07dba446ca9c27459874e6a2127b3c82e4784e5->enter($__internal_fae0ec09bd59beb4cd23f8acf07dba446ca9c27459874e6a2127b3c82e4784e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1404c421b21279d1e34fc48e634da552f64cc301686cac411cb446dc0ad75b2->leave($__internal_c1404c421b21279d1e34fc48e634da552f64cc301686cac411cb446dc0ad75b2_prof);

        
        $__internal_fae0ec09bd59beb4cd23f8acf07dba446ca9c27459874e6a2127b3c82e4784e5->leave($__internal_fae0ec09bd59beb4cd23f8acf07dba446ca9c27459874e6a2127b3c82e4784e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e15b520f28dcc55f37495b1606ff4a42e2899512989d277a6092570abc8f0ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15b520f28dcc55f37495b1606ff4a42e2899512989d277a6092570abc8f0ba2->enter($__internal_e15b520f28dcc55f37495b1606ff4a42e2899512989d277a6092570abc8f0ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78b57b5157b53dd2c4fbbbc05279a373b7a1dc48334d81528f635e4e8dd73bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b57b5157b53dd2c4fbbbc05279a373b7a1dc48334d81528f635e4e8dd73bc7->enter($__internal_78b57b5157b53dd2c4fbbbc05279a373b7a1dc48334d81528f635e4e8dd73bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_78b57b5157b53dd2c4fbbbc05279a373b7a1dc48334d81528f635e4e8dd73bc7->leave($__internal_78b57b5157b53dd2c4fbbbc05279a373b7a1dc48334d81528f635e4e8dd73bc7_prof);

        
        $__internal_e15b520f28dcc55f37495b1606ff4a42e2899512989d277a6092570abc8f0ba2->leave($__internal_e15b520f28dcc55f37495b1606ff4a42e2899512989d277a6092570abc8f0ba2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
