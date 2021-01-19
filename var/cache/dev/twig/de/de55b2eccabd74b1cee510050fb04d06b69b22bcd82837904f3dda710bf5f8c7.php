<?php

/* @User/Group/list_content.html.twig */
class __TwigTemplate_32eec678cdcaea3561397dca711c0cccb71ad7520baab59f6eafe356961341c2 extends Twig_Template
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
        $__internal_8bc05e0af83a9e936440343e07dd0364cb4f5f450fd6d37754ddaa2795b58292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc05e0af83a9e936440343e07dd0364cb4f5f450fd6d37754ddaa2795b58292->enter($__internal_8bc05e0af83a9e936440343e07dd0364cb4f5f450fd6d37754ddaa2795b58292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list_content.html.twig"));

        $__internal_a9cf5adee402bee32fe4e97395165d323fa1e6ab389582b7d63e231025a23a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cf5adee402bee32fe4e97395165d323fa1e6ab389582b7d63e231025a23a30->enter($__internal_a9cf5adee402bee32fe4e97395165d323fa1e6ab389582b7d63e231025a23a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_8bc05e0af83a9e936440343e07dd0364cb4f5f450fd6d37754ddaa2795b58292->leave($__internal_8bc05e0af83a9e936440343e07dd0364cb4f5f450fd6d37754ddaa2795b58292_prof);

        
        $__internal_a9cf5adee402bee32fe4e97395165d323fa1e6ab389582b7d63e231025a23a30->leave($__internal_a9cf5adee402bee32fe4e97395165d323fa1e6ab389582b7d63e231025a23a30_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@User/Group/list_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\list_content.html.twig");
    }
}
