<?php

/* pkflibrary/book/booksBySubCategory.html.twig */
class __TwigTemplate_15c047f6566c57cf7332b58862a74b9bb86bbf59175f9b407f70d1bc8dd6992b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", "pkflibrary/book/booksBySubCategory.html.twig", 1);
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
        $__internal_baa917021d448304d3364f634cafc77885b9bde46a13745997b70a32837b1e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa917021d448304d3364f634cafc77885b9bde46a13745997b70a32837b1e55->enter($__internal_baa917021d448304d3364f634cafc77885b9bde46a13745997b70a32837b1e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/booksBySubCategory.html.twig"));

        $__internal_bd824759e8372901c56a34a4c7731494d29b8c07a8bd789cefb9d6aa005e74db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd824759e8372901c56a34a4c7731494d29b8c07a8bd789cefb9d6aa005e74db->enter($__internal_bd824759e8372901c56a34a4c7731494d29b8c07a8bd789cefb9d6aa005e74db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/booksBySubCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa917021d448304d3364f634cafc77885b9bde46a13745997b70a32837b1e55->leave($__internal_baa917021d448304d3364f634cafc77885b9bde46a13745997b70a32837b1e55_prof);

        
        $__internal_bd824759e8372901c56a34a4c7731494d29b8c07a8bd789cefb9d6aa005e74db->leave($__internal_bd824759e8372901c56a34a4c7731494d29b8c07a8bd789cefb9d6aa005e74db_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_c92f7b973c500cc454323cab484c2fd7d4e7d61bae6379ce1106faa74f42f8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92f7b973c500cc454323cab484c2fd7d4e7d61bae6379ce1106faa74f42f8ca->enter($__internal_c92f7b973c500cc454323cab484c2fd7d4e7d61bae6379ce1106faa74f42f8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_accfe4befc66008aa6749eb053d222b5a4acb283b0ab392b626e7873ecc40375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accfe4befc66008aa6749eb053d222b5a4acb283b0ab392b626e7873ecc40375->enter($__internal_accfe4befc66008aa6749eb053d222b5a4acb283b0ab392b626e7873ecc40375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "\t";
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 5
            echo "       <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subCategory"]) ? $context["subCategory"] : $this->getContext($context, "subCategory")), "category", array()), "categoryName", array()), "html", null, true);
            echo "</li>
   <li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subCategory"]) ? $context["subCategory"] : $this->getContext($context, "subCategory")), "subCategoryName", array()), "html", null, true);
            echo "</li>
    ";
        } else {
            // line 8
            echo "       <li>Search results for \"";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
            echo "\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " books found</li>
    ";
        }
        // line 10
        echo "   
";
        
        $__internal_accfe4befc66008aa6749eb053d222b5a4acb283b0ab392b626e7873ecc40375->leave($__internal_accfe4befc66008aa6749eb053d222b5a4acb283b0ab392b626e7873ecc40375_prof);

        
        $__internal_c92f7b973c500cc454323cab484c2fd7d4e7d61bae6379ce1106faa74f42f8ca->leave($__internal_c92f7b973c500cc454323cab484c2fd7d4e7d61bae6379ce1106faa74f42f8ca_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/booksBySubCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  62 => 8,  57 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
       <li>{{subCategory.category.categoryName}}</li>
   <li>{{subCategory.subCategoryName}}</li>
    {% else %}
       <li>Search results for \"{{keyword}}\": {{ pagination.getTotalItemCount }} books found</li>
    {% endif %}
   
{% endblock %}", "pkflibrary/book/booksBySubCategory.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\booksBySubCategory.html.twig");
    }
}
