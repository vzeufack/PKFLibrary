<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3c646f1df8c89217b8f26262e47b6fdddb8d9695028a3660acd210c483d4f9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e87334aedb04c6c5d13af1a096b0cd2c13b5c946ff4582eaafcc16c5dca3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e87334aedb04c6c5d13af1a096b0cd2c13b5c946ff4582eaafcc16c5dca3d7->enter($__internal_71e87334aedb04c6c5d13af1a096b0cd2c13b5c946ff4582eaafcc16c5dca3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $__internal_8ca5ab9b1810e23d1515ddf99b04f3324478ba8a194836d233d042eea2bd6efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca5ab9b1810e23d1515ddf99b04f3324478ba8a194836d233d042eea2bd6efd->enter($__internal_8ca5ab9b1810e23d1515ddf99b04f3324478ba8a194836d233d042eea2bd6efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e87334aedb04c6c5d13af1a096b0cd2c13b5c946ff4582eaafcc16c5dca3d7->leave($__internal_71e87334aedb04c6c5d13af1a096b0cd2c13b5c946ff4582eaafcc16c5dca3d7_prof);

        
        $__internal_8ca5ab9b1810e23d1515ddf99b04f3324478ba8a194836d233d042eea2bd6efd->leave($__internal_8ca5ab9b1810e23d1515ddf99b04f3324478ba8a194836d233d042eea2bd6efd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39b3730cb9f7af94080e0f58f2d461a4c25549f6d2645d8ba896b44f693ef5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b3730cb9f7af94080e0f58f2d461a4c25549f6d2645d8ba896b44f693ef5e6->enter($__internal_39b3730cb9f7af94080e0f58f2d461a4c25549f6d2645d8ba896b44f693ef5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07392b82a1d1b57a0423a7ba62ceb81c27de05462f9176ebb879b78dfafe484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07392b82a1d1b57a0423a7ba62ceb81c27de05462f9176ebb879b78dfafe484c->enter($__internal_07392b82a1d1b57a0423a7ba62ceb81c27de05462f9176ebb879b78dfafe484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "   

";
        
        $__internal_07392b82a1d1b57a0423a7ba62ceb81c27de05462f9176ebb879b78dfafe484c->leave($__internal_07392b82a1d1b57a0423a7ba62ceb81c27de05462f9176ebb879b78dfafe484c_prof);

        
        $__internal_39b3730cb9f7af94080e0f58f2d461a4c25549f6d2645d8ba896b44f693ef5e6->leave($__internal_39b3730cb9f7af94080e0f58f2d461a4c25549f6d2645d8ba896b44f693ef5e6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
   

{% endblock fos_user_content %}

", "UserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
