<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8762dffea5cd9ea1d1d8304b4779c7adef30eade89902b3378f8e59cf20e5da4 extends Twig_Template
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
        $__internal_abd4925fd080c3ca15ce7c8eb92744be027f3d557c40c9e19234ed9fbf5d7f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd4925fd080c3ca15ce7c8eb92744be027f3d557c40c9e19234ed9fbf5d7f60->enter($__internal_abd4925fd080c3ca15ce7c8eb92744be027f3d557c40c9e19234ed9fbf5d7f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_839bbf596a96997a69e80da8b57f6be4132eb9f5a520418020e7942dd9809d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839bbf596a96997a69e80da8b57f6be4132eb9f5a520418020e7942dd9809d73->enter($__internal_839bbf596a96997a69e80da8b57f6be4132eb9f5a520418020e7942dd9809d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_abd4925fd080c3ca15ce7c8eb92744be027f3d557c40c9e19234ed9fbf5d7f60->leave($__internal_abd4925fd080c3ca15ce7c8eb92744be027f3d557c40c9e19234ed9fbf5d7f60_prof);

        
        $__internal_839bbf596a96997a69e80da8b57f6be4132eb9f5a520418020e7942dd9809d73->leave($__internal_839bbf596a96997a69e80da8b57f6be4132eb9f5a520418020e7942dd9809d73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
