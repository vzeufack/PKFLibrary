<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_62499709469eca363657829c8aff8694e7e20c26d8a707c4493a62a5c81e1e1d extends Twig_Template
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
        $__internal_2ccdfa02532cf78c551846619b171c77abe57946ebc1359cef7687d645c5307d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccdfa02532cf78c551846619b171c77abe57946ebc1359cef7687d645c5307d->enter($__internal_2ccdfa02532cf78c551846619b171c77abe57946ebc1359cef7687d645c5307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_53a3a5dbe3d3ccfd654ff73f12486609e6ea86cf2cd60b8843b2b59dbc6c2a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a3a5dbe3d3ccfd654ff73f12486609e6ea86cf2cd60b8843b2b59dbc6c2a5b->enter($__internal_53a3a5dbe3d3ccfd654ff73f12486609e6ea86cf2cd60b8843b2b59dbc6c2a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2ccdfa02532cf78c551846619b171c77abe57946ebc1359cef7687d645c5307d->leave($__internal_2ccdfa02532cf78c551846619b171c77abe57946ebc1359cef7687d645c5307d_prof);

        
        $__internal_53a3a5dbe3d3ccfd654ff73f12486609e6ea86cf2cd60b8843b2b59dbc6c2a5b->leave($__internal_53a3a5dbe3d3ccfd654ff73f12486609e6ea86cf2cd60b8843b2b59dbc6c2a5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
