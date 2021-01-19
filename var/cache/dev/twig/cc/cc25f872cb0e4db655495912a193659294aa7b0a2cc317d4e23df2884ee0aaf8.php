<?php

/* :pkflibrary/book:booksBySubCategory.html.twig */
class __TwigTemplate_0024c612522b18cfefca1921c41eaecc6b3a960368c4a788abeb535e5b85e9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/book:booksBySubCategory.html.twig", 1);
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
        $__internal_01948f715f5319112b15806384663bd465ffa5764c806f395dee0aa2a2a31a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01948f715f5319112b15806384663bd465ffa5764c806f395dee0aa2a2a31a61->enter($__internal_01948f715f5319112b15806384663bd465ffa5764c806f395dee0aa2a2a31a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:booksBySubCategory.html.twig"));

        $__internal_95639a9c2a06c368a428667d778d8d9afbc59ac367e8515487f43d5fa27b18ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95639a9c2a06c368a428667d778d8d9afbc59ac367e8515487f43d5fa27b18ff->enter($__internal_95639a9c2a06c368a428667d778d8d9afbc59ac367e8515487f43d5fa27b18ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:booksBySubCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01948f715f5319112b15806384663bd465ffa5764c806f395dee0aa2a2a31a61->leave($__internal_01948f715f5319112b15806384663bd465ffa5764c806f395dee0aa2a2a31a61_prof);

        
        $__internal_95639a9c2a06c368a428667d778d8d9afbc59ac367e8515487f43d5fa27b18ff->leave($__internal_95639a9c2a06c368a428667d778d8d9afbc59ac367e8515487f43d5fa27b18ff_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_07550102e1f6467cd59edcbd87b90fd46c1714e3c117247006bd7568168e27f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07550102e1f6467cd59edcbd87b90fd46c1714e3c117247006bd7568168e27f8->enter($__internal_07550102e1f6467cd59edcbd87b90fd46c1714e3c117247006bd7568168e27f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_fc4ee865e914e059d69c2dd93e31c5d35693e7d565cc642bf25d3f49ecfc983d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4ee865e914e059d69c2dd93e31c5d35693e7d565cc642bf25d3f49ecfc983d->enter($__internal_fc4ee865e914e059d69c2dd93e31c5d35693e7d565cc642bf25d3f49ecfc983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

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
        
        $__internal_fc4ee865e914e059d69c2dd93e31c5d35693e7d565cc642bf25d3f49ecfc983d->leave($__internal_fc4ee865e914e059d69c2dd93e31c5d35693e7d565cc642bf25d3f49ecfc983d_prof);

        
        $__internal_07550102e1f6467cd59edcbd87b90fd46c1714e3c117247006bd7568168e27f8->leave($__internal_07550102e1f6467cd59edcbd87b90fd46c1714e3c117247006bd7568168e27f8_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/book:booksBySubCategory.html.twig";
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
   
{% endblock %}", ":pkflibrary/book:booksBySubCategory.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/book/booksBySubCategory.html.twig");
    }
}
