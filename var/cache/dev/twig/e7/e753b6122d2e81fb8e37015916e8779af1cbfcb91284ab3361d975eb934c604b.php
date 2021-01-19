<?php

/* pkflibrary/book/booksByCategory.html.twig */
class __TwigTemplate_7dcd3e34f8e2da1c2c62f61de161bcaa469767ae6785596f45b6c90552a39db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", "pkflibrary/book/booksByCategory.html.twig", 1);
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
        $__internal_075476d0890544e0f0bb719b3b040c204a54a65c7cbe3b8b6c222a1809f9bf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075476d0890544e0f0bb719b3b040c204a54a65c7cbe3b8b6c222a1809f9bf25->enter($__internal_075476d0890544e0f0bb719b3b040c204a54a65c7cbe3b8b6c222a1809f9bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/booksByCategory.html.twig"));

        $__internal_5d487955060a19f26f938a1873ae7dca95752988acffe42fce0ec23efef41716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d487955060a19f26f938a1873ae7dca95752988acffe42fce0ec23efef41716->enter($__internal_5d487955060a19f26f938a1873ae7dca95752988acffe42fce0ec23efef41716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/booksByCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075476d0890544e0f0bb719b3b040c204a54a65c7cbe3b8b6c222a1809f9bf25->leave($__internal_075476d0890544e0f0bb719b3b040c204a54a65c7cbe3b8b6c222a1809f9bf25_prof);

        
        $__internal_5d487955060a19f26f938a1873ae7dca95752988acffe42fce0ec23efef41716->leave($__internal_5d487955060a19f26f938a1873ae7dca95752988acffe42fce0ec23efef41716_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_3e9f2462a9c8a69c2e88a5d69912a796f0330165da81ff1a8dd14e1b5dcad94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9f2462a9c8a69c2e88a5d69912a796f0330165da81ff1a8dd14e1b5dcad94a->enter($__internal_3e9f2462a9c8a69c2e88a5d69912a796f0330165da81ff1a8dd14e1b5dcad94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_a65b4d66190ed20338da701010adcea8e05e119fb4c60a3f7e58e07ece5a090d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65b4d66190ed20338da701010adcea8e05e119fb4c60a3f7e58e07ece5a090d->enter($__internal_a65b4d66190ed20338da701010adcea8e05e119fb4c60a3f7e58e07ece5a090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

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
        
        $__internal_a65b4d66190ed20338da701010adcea8e05e119fb4c60a3f7e58e07ece5a090d->leave($__internal_a65b4d66190ed20338da701010adcea8e05e119fb4c60a3f7e58e07ece5a090d_prof);

        
        $__internal_3e9f2462a9c8a69c2e88a5d69912a796f0330165da81ff1a8dd14e1b5dcad94a->leave($__internal_3e9f2462a9c8a69c2e88a5d69912a796f0330165da81ff1a8dd14e1b5dcad94a_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/booksByCategory.html.twig";
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

{% endblock %}", "pkflibrary/book/booksByCategory.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\booksByCategory.html.twig");
    }
}
