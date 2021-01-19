<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_91d92441d05b595da39892cbe1ac1946816b03d01652e092629a202f990d1bee extends Twig_Template
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
        $__internal_038227d9e7194daa921de9977b36b98f5a47ddb179e5e97818264057c8d48513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038227d9e7194daa921de9977b36b98f5a47ddb179e5e97818264057c8d48513->enter($__internal_038227d9e7194daa921de9977b36b98f5a47ddb179e5e97818264057c8d48513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b0cdbba5e16ed956fd5fa0193db741babf58bdb87566b7aad8fb00a5d8956fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cdbba5e16ed956fd5fa0193db741babf58bdb87566b7aad8fb00a5d8956fc3->enter($__internal_b0cdbba5e16ed956fd5fa0193db741babf58bdb87566b7aad8fb00a5d8956fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_038227d9e7194daa921de9977b36b98f5a47ddb179e5e97818264057c8d48513->leave($__internal_038227d9e7194daa921de9977b36b98f5a47ddb179e5e97818264057c8d48513_prof);

        
        $__internal_b0cdbba5e16ed956fd5fa0193db741babf58bdb87566b7aad8fb00a5d8956fc3->leave($__internal_b0cdbba5e16ed956fd5fa0193db741babf58bdb87566b7aad8fb00a5d8956fc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
