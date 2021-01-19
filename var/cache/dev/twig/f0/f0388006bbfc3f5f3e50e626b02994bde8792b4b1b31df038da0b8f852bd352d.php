<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_35b43f53ed5094209b26375e28f9533ca0ac6724b509510f25a9f4a38fe75725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d87b59e9fa97f0797e28acf08c145d8acdb8c37192ca9ffe8e7733d342b8367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d87b59e9fa97f0797e28acf08c145d8acdb8c37192ca9ffe8e7733d342b8367->enter($__internal_3d87b59e9fa97f0797e28acf08c145d8acdb8c37192ca9ffe8e7733d342b8367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f4e75f7f4d3dab8701cff78a360d1a9e2419bb1c6af698a1ed7883c98e271d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e75f7f4d3dab8701cff78a360d1a9e2419bb1c6af698a1ed7883c98e271d9d->enter($__internal_f4e75f7f4d3dab8701cff78a360d1a9e2419bb1c6af698a1ed7883c98e271d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3d87b59e9fa97f0797e28acf08c145d8acdb8c37192ca9ffe8e7733d342b8367->leave($__internal_3d87b59e9fa97f0797e28acf08c145d8acdb8c37192ca9ffe8e7733d342b8367_prof);

        
        $__internal_f4e75f7f4d3dab8701cff78a360d1a9e2419bb1c6af698a1ed7883c98e271d9d->leave($__internal_f4e75f7f4d3dab8701cff78a360d1a9e2419bb1c6af698a1ed7883c98e271d9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
