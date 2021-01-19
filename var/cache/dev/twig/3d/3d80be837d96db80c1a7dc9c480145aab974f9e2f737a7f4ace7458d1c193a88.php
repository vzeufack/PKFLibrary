<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ac79404155c9f9c8878e1a7872cea7e7166436b573f1541debae5e29c3b92eb4 extends Twig_Template
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
        $__internal_4dbdb94e29ebd2d259576902566a29346aa5a2667946be7dd6033ca989a40562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbdb94e29ebd2d259576902566a29346aa5a2667946be7dd6033ca989a40562->enter($__internal_4dbdb94e29ebd2d259576902566a29346aa5a2667946be7dd6033ca989a40562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_eb5fab2fea68e7b08eb476ea51a3157c80a7d17a2a12b443d4ff5d0942a7e1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5fab2fea68e7b08eb476ea51a3157c80a7d17a2a12b443d4ff5d0942a7e1c6->enter($__internal_eb5fab2fea68e7b08eb476ea51a3157c80a7d17a2a12b443d4ff5d0942a7e1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4dbdb94e29ebd2d259576902566a29346aa5a2667946be7dd6033ca989a40562->leave($__internal_4dbdb94e29ebd2d259576902566a29346aa5a2667946be7dd6033ca989a40562_prof);

        
        $__internal_eb5fab2fea68e7b08eb476ea51a3157c80a7d17a2a12b443d4ff5d0942a7e1c6->leave($__internal_eb5fab2fea68e7b08eb476ea51a3157c80a7d17a2a12b443d4ff5d0942a7e1c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
