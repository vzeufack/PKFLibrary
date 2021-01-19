<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_dd33072169f2990ecacfb918294d06e3fe6668700a0fbdaa29e183db1daa1569 extends Twig_Template
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
        $__internal_9d5dc8c438abc44475ab8bf866af385a2a2e36ad36ab3f73df4fd113a095dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5dc8c438abc44475ab8bf866af385a2a2e36ad36ab3f73df4fd113a095dbe5->enter($__internal_9d5dc8c438abc44475ab8bf866af385a2a2e36ad36ab3f73df4fd113a095dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_8f6dc40cffe6703aec2e5b81336a02883863985e00a818773c4347dfaa250b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6dc40cffe6703aec2e5b81336a02883863985e00a818773c4347dfaa250b6c->enter($__internal_8f6dc40cffe6703aec2e5b81336a02883863985e00a818773c4347dfaa250b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_9d5dc8c438abc44475ab8bf866af385a2a2e36ad36ab3f73df4fd113a095dbe5->leave($__internal_9d5dc8c438abc44475ab8bf866af385a2a2e36ad36ab3f73df4fd113a095dbe5_prof);

        
        $__internal_8f6dc40cffe6703aec2e5b81336a02883863985e00a818773c4347dfaa250b6c->leave($__internal_8f6dc40cffe6703aec2e5b81336a02883863985e00a818773c4347dfaa250b6c_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
