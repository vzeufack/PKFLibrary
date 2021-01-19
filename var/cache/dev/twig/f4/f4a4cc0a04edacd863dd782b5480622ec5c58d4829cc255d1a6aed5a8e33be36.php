<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_aa54e7f2375cc6ca52c1e5a200c4ceb53fa9c0d45254ee4ec109e102a6222ff1 extends Twig_Template
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
        $__internal_d9a9e2f240512f5cc4282ccaf802eca295ae37ad70ee821b79740397366055ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a9e2f240512f5cc4282ccaf802eca295ae37ad70ee821b79740397366055ba->enter($__internal_d9a9e2f240512f5cc4282ccaf802eca295ae37ad70ee821b79740397366055ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        $__internal_ea2e7a09eb23823d91b4235476a26c916d4afb1780a454040689d260ec03bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2e7a09eb23823d91b4235476a26c916d4afb1780a454040689d260ec03bbf8->enter($__internal_ea2e7a09eb23823d91b4235476a26c916d4afb1780a454040689d260ec03bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
<ul class=\"pagination\">
    ";
            // line 6
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 7
                echo "       <li> <span class=\"first\">
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span></li>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "       <li> <span class=\"previous\">
\t\t
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
\t\t</li>
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 22
                    echo "            <li><span class=\"page\">
\t\t\t
                <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </span>
\t\t\t</li>
        ";
                } else {
                    // line 28
                    echo "\t\t<li class =\"active\">
            <span class=\"current\">";
                    // line 29
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
\t\t\t</li>
        ";
                }
                // line 32
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    ";
            // line 35
            if (array_key_exists("next", $context)) {
                // line 36
                echo "       <li> <span class=\"next\">
\t\t
            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
\t\t\t</li>
        </span>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 44
                echo "        <li><span class=\"last\">
\t\t
            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
\t\t\t</li>
        </span>
    ";
            }
            // line 50
            echo "\t</ul>
</div>
";
        }
        
        $__internal_d9a9e2f240512f5cc4282ccaf802eca295ae37ad70ee821b79740397366055ba->leave($__internal_d9a9e2f240512f5cc4282ccaf802eca295ae37ad70ee821b79740397366055ba_prof);

        
        $__internal_ea2e7a09eb23823d91b4235476a26c916d4afb1780a454040689d260ec03bbf8->leave($__internal_ea2e7a09eb23823d91b4235476a26c916d4afb1780a454040689d260ec03bbf8_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  125 => 46,  121 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  93 => 32,  87 => 29,  84 => 28,  75 => 24,  71 => 22,  68 => 21,  64 => 20,  61 => 19,  54 => 15,  50 => 13,  48 => 12,  45 => 11,  39 => 8,  36 => 7,  34 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
<div class=\"pagination\">
<ul class=\"pagination\">
    {% if first is defined and current != first %}
       <li> <span class=\"first\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
        </span></li>
    {% endif %}

    {% if previous is defined %}
       <li> <span class=\"previous\">
\t\t
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        </span>
\t\t</li>
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <li><span class=\"page\">
\t\t\t
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </span>
\t\t\t</li>
        {% else %}
\t\t<li class =\"active\">
            <span class=\"current\">{{ page }}</span>
\t\t\t</li>
        {% endif %}

    {% endfor %}

    {% if next is defined %}
       <li> <span class=\"next\">
\t\t
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
\t\t\t</li>
        </span>
    {% endif %}

    {% if last is defined and current != last %}
        <li><span class=\"last\">
\t\t
            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
\t\t\t</li>
        </span>
    {% endif %}
\t</ul>
</div>
{% endif %}
", "KnpPaginatorBundle:Pagination:sliding.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
