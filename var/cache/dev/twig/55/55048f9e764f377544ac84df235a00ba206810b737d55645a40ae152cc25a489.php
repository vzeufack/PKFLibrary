<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f171bf6036e92f31ad9a9b0c217651d4fa284926b485a17dcd2d1a54953484ae extends Twig_Template
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
        $__internal_d5fe87a985e2075ffb750b7b5ff077d47ad395c96d46a304f4cd03f46cfb37c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fe87a985e2075ffb750b7b5ff077d47ad395c96d46a304f4cd03f46cfb37c3->enter($__internal_d5fe87a985e2075ffb750b7b5ff077d47ad395c96d46a304f4cd03f46cfb37c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_98cafc39c79f5fa7b7a0e8c8b10695819a64d5925761057ec540a1d63fe41b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cafc39c79f5fa7b7a0e8c8b10695819a64d5925761057ec540a1d63fe41b3e->enter($__internal_98cafc39c79f5fa7b7a0e8c8b10695819a64d5925761057ec540a1d63fe41b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d5fe87a985e2075ffb750b7b5ff077d47ad395c96d46a304f4cd03f46cfb37c3->leave($__internal_d5fe87a985e2075ffb750b7b5ff077d47ad395c96d46a304f4cd03f46cfb37c3_prof);

        
        $__internal_98cafc39c79f5fa7b7a0e8c8b10695819a64d5925761057ec540a1d63fe41b3e->leave($__internal_98cafc39c79f5fa7b7a0e8c8b10695819a64d5925761057ec540a1d63fe41b3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
