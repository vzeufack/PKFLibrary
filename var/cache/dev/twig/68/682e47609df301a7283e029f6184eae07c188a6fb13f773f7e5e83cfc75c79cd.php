<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_42a1c159e9a83bd35d3dfca62699256ad0154cad8de4a1c89e2aab8e99127316 extends Twig_Template
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
        $__internal_637877c3b75b33d893b3c9fefc3c4131baa74cf0f3d9a5fad7b86198c59d9dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637877c3b75b33d893b3c9fefc3c4131baa74cf0f3d9a5fad7b86198c59d9dd1->enter($__internal_637877c3b75b33d893b3c9fefc3c4131baa74cf0f3d9a5fad7b86198c59d9dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_39811f5ce0ed70b2a048cd49a784d3e428c21ce23accbe7b534ed6b67df8da7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39811f5ce0ed70b2a048cd49a784d3e428c21ce23accbe7b534ed6b67df8da7d->enter($__internal_39811f5ce0ed70b2a048cd49a784d3e428c21ce23accbe7b534ed6b67df8da7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_637877c3b75b33d893b3c9fefc3c4131baa74cf0f3d9a5fad7b86198c59d9dd1->leave($__internal_637877c3b75b33d893b3c9fefc3c4131baa74cf0f3d9a5fad7b86198c59d9dd1_prof);

        
        $__internal_39811f5ce0ed70b2a048cd49a784d3e428c21ce23accbe7b534ed6b67df8da7d->leave($__internal_39811f5ce0ed70b2a048cd49a784d3e428c21ce23accbe7b534ed6b67df8da7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
