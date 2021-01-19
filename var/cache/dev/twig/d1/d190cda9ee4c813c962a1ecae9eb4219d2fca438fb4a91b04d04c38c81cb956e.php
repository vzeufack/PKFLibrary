<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_81d3a3572c456b7a30bb4390f49bef6054bc183576d06b92952d6aa296ef14b1 extends Twig_Template
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
        $__internal_330aa9be928aac5b77b03c92da5af516a515c5890cbf842fa113fed42e576825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330aa9be928aac5b77b03c92da5af516a515c5890cbf842fa113fed42e576825->enter($__internal_330aa9be928aac5b77b03c92da5af516a515c5890cbf842fa113fed42e576825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_237379109eac8094e2b3e87c8bc5ff239bd45f9ab1d5c72d56882d85e8be9bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237379109eac8094e2b3e87c8bc5ff239bd45f9ab1d5c72d56882d85e8be9bf1->enter($__internal_237379109eac8094e2b3e87c8bc5ff239bd45f9ab1d5c72d56882d85e8be9bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_330aa9be928aac5b77b03c92da5af516a515c5890cbf842fa113fed42e576825->leave($__internal_330aa9be928aac5b77b03c92da5af516a515c5890cbf842fa113fed42e576825_prof);

        
        $__internal_237379109eac8094e2b3e87c8bc5ff239bd45f9ab1d5c72d56882d85e8be9bf1->leave($__internal_237379109eac8094e2b3e87c8bc5ff239bd45f9ab1d5c72d56882d85e8be9bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
