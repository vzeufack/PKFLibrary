<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_edaee8536216d50c8a790aa1444fd2eb208ec5fdca2ae44a03199e9baae480cb extends Twig_Template
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
        $__internal_119719e29ce27ee0c02b64c2b3707f72948c74c1b4dfa6888a1b53912a231190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119719e29ce27ee0c02b64c2b3707f72948c74c1b4dfa6888a1b53912a231190->enter($__internal_119719e29ce27ee0c02b64c2b3707f72948c74c1b4dfa6888a1b53912a231190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        $__internal_a6883b128974fa3b83b706ffd5b94ef50876d6d02dcc79dba3a455ac7acd7ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6883b128974fa3b83b706ffd5b94ef50876d6d02dcc79dba3a455ac7acd7ff4->enter($__internal_a6883b128974fa3b83b706ffd5b94ef50876d6d02dcc79dba3a455ac7acd7ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) ? $context["filterFieldName"] : $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) ? $context["selectedField"] : $this->getContext($context, "selectedField")) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) ? $context["selectedValue"] : $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) ? $context["filterValueName"] : $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_119719e29ce27ee0c02b64c2b3707f72948c74c1b4dfa6888a1b53912a231190->leave($__internal_119719e29ce27ee0c02b64c2b3707f72948c74c1b4dfa6888a1b53912a231190_prof);

        
        $__internal_a6883b128974fa3b83b706ffd5b94ef50876d6d02dcc79dba3a455ac7acd7ff4->leave($__internal_a6883b128974fa3b83b706ffd5b94ef50876d6d02dcc79dba3a455ac7acd7ff4_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  39 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"{{ filterFieldName }}\">
        {% for field, label in fields %}
            <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
        {% endfor %}
    </select>

    <input type=\"text\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" />

    <button>{{ options.button }}</button>

</form>
", "KnpPaginatorBundle:Pagination:filtration.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/filtration.html.twig");
    }
}
