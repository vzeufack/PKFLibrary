<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4e1c7daa677b8db22ac53b6d3638fbb489d171800128fe166f0fa3cf05990006 extends Twig_Template
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
        $__internal_a7e95275bf5e0b525510f7d0fb45485e18b14228b7284852fb4cff80e14315a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e95275bf5e0b525510f7d0fb45485e18b14228b7284852fb4cff80e14315a3->enter($__internal_a7e95275bf5e0b525510f7d0fb45485e18b14228b7284852fb4cff80e14315a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bf49f482c6e2ac89a405e398ea387895791336793ae7fff3bfddb7525c5ba068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf49f482c6e2ac89a405e398ea387895791336793ae7fff3bfddb7525c5ba068->enter($__internal_bf49f482c6e2ac89a405e398ea387895791336793ae7fff3bfddb7525c5ba068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a7e95275bf5e0b525510f7d0fb45485e18b14228b7284852fb4cff80e14315a3->leave($__internal_a7e95275bf5e0b525510f7d0fb45485e18b14228b7284852fb4cff80e14315a3_prof);

        
        $__internal_bf49f482c6e2ac89a405e398ea387895791336793ae7fff3bfddb7525c5ba068->leave($__internal_bf49f482c6e2ac89a405e398ea387895791336793ae7fff3bfddb7525c5ba068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
