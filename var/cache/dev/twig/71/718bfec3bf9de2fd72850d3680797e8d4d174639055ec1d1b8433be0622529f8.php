<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7209191c04ead5895e46f50c7fed595d103aab812701fe3f98456cef4cac558c extends Twig_Template
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
        $__internal_b497bca072e131ab9caa52512e90fa998407a8bcb00180874daf39aa222b33b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b497bca072e131ab9caa52512e90fa998407a8bcb00180874daf39aa222b33b7->enter($__internal_b497bca072e131ab9caa52512e90fa998407a8bcb00180874daf39aa222b33b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_9e812385a4cca191c3fa1b7a57d55f7e9a81974bd8964e5f4723799e3e24243a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e812385a4cca191c3fa1b7a57d55f7e9a81974bd8964e5f4723799e3e24243a->enter($__internal_9e812385a4cca191c3fa1b7a57d55f7e9a81974bd8964e5f4723799e3e24243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b497bca072e131ab9caa52512e90fa998407a8bcb00180874daf39aa222b33b7->leave($__internal_b497bca072e131ab9caa52512e90fa998407a8bcb00180874daf39aa222b33b7_prof);

        
        $__internal_9e812385a4cca191c3fa1b7a57d55f7e9a81974bd8964e5f4723799e3e24243a->leave($__internal_9e812385a4cca191c3fa1b7a57d55f7e9a81974bd8964e5f4723799e3e24243a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
