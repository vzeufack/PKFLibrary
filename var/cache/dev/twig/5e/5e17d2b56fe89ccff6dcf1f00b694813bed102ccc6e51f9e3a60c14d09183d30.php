<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_fad74d4a6f85ef45ce72048da87120998f698d0736ee7e01ad43621ac7ae0145 extends Twig_Template
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
        $__internal_dd087ff379edd66ac63da53e7e6fd7475619af0313ca239b50f1a4553e363df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd087ff379edd66ac63da53e7e6fd7475619af0313ca239b50f1a4553e363df1->enter($__internal_dd087ff379edd66ac63da53e7e6fd7475619af0313ca239b50f1a4553e363df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_62f99e894976776a2522cc469ec5a4c836ca57e4852b8b38a1cc52b795d9deb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f99e894976776a2522cc469ec5a4c836ca57e4852b8b38a1cc52b795d9deb4->enter($__internal_62f99e894976776a2522cc469ec5a4c836ca57e4852b8b38a1cc52b795d9deb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_dd087ff379edd66ac63da53e7e6fd7475619af0313ca239b50f1a4553e363df1->leave($__internal_dd087ff379edd66ac63da53e7e6fd7475619af0313ca239b50f1a4553e363df1_prof);

        
        $__internal_62f99e894976776a2522cc469ec5a4c836ca57e4852b8b38a1cc52b795d9deb4->leave($__internal_62f99e894976776a2522cc469ec5a4c836ca57e4852b8b38a1cc52b795d9deb4_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
