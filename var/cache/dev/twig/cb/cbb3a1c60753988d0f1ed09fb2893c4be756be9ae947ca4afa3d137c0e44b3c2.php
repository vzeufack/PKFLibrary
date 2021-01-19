<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a4ba76fd00f375fbda13d136adf75a15b20cfea0077e4275d132cb7b0d25e521 extends Twig_Template
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
        $__internal_7a6e93533581fb4f5974aeacf11bd46f0ff4a348a210744a8eb6b444efef6425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6e93533581fb4f5974aeacf11bd46f0ff4a348a210744a8eb6b444efef6425->enter($__internal_7a6e93533581fb4f5974aeacf11bd46f0ff4a348a210744a8eb6b444efef6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_cc3146ec2e64c7729a1fa2470879d4d4692ba9e35dbb3a101fd0923a24a50804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3146ec2e64c7729a1fa2470879d4d4692ba9e35dbb3a101fd0923a24a50804->enter($__internal_cc3146ec2e64c7729a1fa2470879d4d4692ba9e35dbb3a101fd0923a24a50804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7a6e93533581fb4f5974aeacf11bd46f0ff4a348a210744a8eb6b444efef6425->leave($__internal_7a6e93533581fb4f5974aeacf11bd46f0ff4a348a210744a8eb6b444efef6425_prof);

        
        $__internal_cc3146ec2e64c7729a1fa2470879d4d4692ba9e35dbb3a101fd0923a24a50804->leave($__internal_cc3146ec2e64c7729a1fa2470879d4d4692ba9e35dbb3a101fd0923a24a50804_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
