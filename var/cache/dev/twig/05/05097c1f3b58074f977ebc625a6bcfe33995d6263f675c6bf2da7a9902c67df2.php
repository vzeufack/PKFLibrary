<?php

/* UserBundle:Group:list_content.html.twig */
class __TwigTemplate_35c0f1848157c10ee6fc8f85438fffe3a478e9adaf3aa2528b5f589bf96b2a4b extends Twig_Template
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
        $__internal_30ef18f844a3195b9209025a23b21749183a673cd5a21983814a950b0257f169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ef18f844a3195b9209025a23b21749183a673cd5a21983814a950b0257f169->enter($__internal_30ef18f844a3195b9209025a23b21749183a673cd5a21983814a950b0257f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list_content.html.twig"));

        $__internal_a3b6e95235fa727902d9b9243715dd13fbb87393ce1656d3dfa5cec5a7d2111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b6e95235fa727902d9b9243715dd13fbb87393ce1656d3dfa5cec5a7d2111d->enter($__internal_a3b6e95235fa727902d9b9243715dd13fbb87393ce1656d3dfa5cec5a7d2111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list_content.html.twig"));

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
        
        $__internal_30ef18f844a3195b9209025a23b21749183a673cd5a21983814a950b0257f169->leave($__internal_30ef18f844a3195b9209025a23b21749183a673cd5a21983814a950b0257f169_prof);

        
        $__internal_a3b6e95235fa727902d9b9243715dd13fbb87393ce1656d3dfa5cec5a7d2111d->leave($__internal_a3b6e95235fa727902d9b9243715dd13fbb87393ce1656d3dfa5cec5a7d2111d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list_content.html.twig";
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
", "UserBundle:Group:list_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/list_content.html.twig");
    }
}
