<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_516741608d090d2ce3acffccd117af8a2699c13190140728851a494671dec979 extends Twig_Template
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
        $__internal_7db837c1db2e1856ae1920812b1cf930be00b16778574af06e00373f8a55be78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db837c1db2e1856ae1920812b1cf930be00b16778574af06e00373f8a55be78->enter($__internal_7db837c1db2e1856ae1920812b1cf930be00b16778574af06e00373f8a55be78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b38d775e09fea5c4120abf2010506b57f93897e435c3e54158b120e03c3ade35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38d775e09fea5c4120abf2010506b57f93897e435c3e54158b120e03c3ade35->enter($__internal_b38d775e09fea5c4120abf2010506b57f93897e435c3e54158b120e03c3ade35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7db837c1db2e1856ae1920812b1cf930be00b16778574af06e00373f8a55be78->leave($__internal_7db837c1db2e1856ae1920812b1cf930be00b16778574af06e00373f8a55be78_prof);

        
        $__internal_b38d775e09fea5c4120abf2010506b57f93897e435c3e54158b120e03c3ade35->leave($__internal_b38d775e09fea5c4120abf2010506b57f93897e435c3e54158b120e03c3ade35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
