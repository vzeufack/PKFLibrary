<?php

/* :pkflibrary/book:booksByCategory.html.twig */
class __TwigTemplate_1b2bd24a5718506d9b67a69d25e78b57d39029cf044cb736bb262156f3cc7231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/book:booksByCategory.html.twig", 1);
        $this->blocks = array(
            'status' => array($this, 'block_status'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/book/book_list.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ae157022bfdd8ff5834ba765d5bba54c2275d9bea7d1822fef1957993baa02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ae157022bfdd8ff5834ba765d5bba54c2275d9bea7d1822fef1957993baa02->enter($__internal_b1ae157022bfdd8ff5834ba765d5bba54c2275d9bea7d1822fef1957993baa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:booksByCategory.html.twig"));

        $__internal_07ab1de15d2d8ea9bcbb00582d5cd0561327aea7a0b57183baf8bd4da6a39e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ab1de15d2d8ea9bcbb00582d5cd0561327aea7a0b57183baf8bd4da6a39e72->enter($__internal_07ab1de15d2d8ea9bcbb00582d5cd0561327aea7a0b57183baf8bd4da6a39e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:booksByCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ae157022bfdd8ff5834ba765d5bba54c2275d9bea7d1822fef1957993baa02->leave($__internal_b1ae157022bfdd8ff5834ba765d5bba54c2275d9bea7d1822fef1957993baa02_prof);

        
        $__internal_07ab1de15d2d8ea9bcbb00582d5cd0561327aea7a0b57183baf8bd4da6a39e72->leave($__internal_07ab1de15d2d8ea9bcbb00582d5cd0561327aea7a0b57183baf8bd4da6a39e72_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_d23e6f32cdb24e1609ecf76b6417aa5f11b2a0db4af7111577c4984a3a122d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23e6f32cdb24e1609ecf76b6417aa5f11b2a0db4af7111577c4984a3a122d54->enter($__internal_d23e6f32cdb24e1609ecf76b6417aa5f11b2a0db4af7111577c4984a3a122d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_79d5247b07b9a171418d86fe369cf7ccf5e2fd6357a95fdcb1b9833e55ea9fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d5247b07b9a171418d86fe369cf7ccf5e2fd6357a95fdcb1b9833e55ea9fe2->enter($__internal_79d5247b07b9a171418d86fe369cf7ccf5e2fd6357a95fdcb1b9833e55ea9fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "\t";
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 5
            echo "       <li><a href=\"\" style=\"color:blue\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "categoryName", array()), "html", null, true);
            echo "</a></li>
    ";
        } else {
            // line 7
            echo "       <li>Search results for \"";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
            echo "\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " books found</li>
    ";
        }
        // line 9
        echo "
";
        
        $__internal_79d5247b07b9a171418d86fe369cf7ccf5e2fd6357a95fdcb1b9833e55ea9fe2->leave($__internal_79d5247b07b9a171418d86fe369cf7ccf5e2fd6357a95fdcb1b9833e55ea9fe2_prof);

        
        $__internal_d23e6f32cdb24e1609ecf76b6417aa5f11b2a0db4af7111577c4984a3a122d54->leave($__internal_d23e6f32cdb24e1609ecf76b6417aa5f11b2a0db4af7111577c4984a3a122d54_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/book:booksByCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/book/book_list.html.twig '%}

{% block status %}
\t{% if keyword == \"\" %}
       <li><a href=\"\" style=\"color:blue\">{{category.categoryName}}</a></li>
    {% else %}
       <li>Search results for \"{{keyword}}\": {{ pagination.getTotalItemCount }} books found</li>
    {% endif %}

{% endblock %}", ":pkflibrary/book:booksByCategory.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/book/booksByCategory.html.twig");
    }
}
