<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_fd8290d9c18e02374916ae76cab3b438b1b8c71b083a600fb55c3e1587f7fcfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_822b9d2b776dd81f9638dc991e34c70362dcd8ea31648af87d633b4f162fdaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822b9d2b776dd81f9638dc991e34c70362dcd8ea31648af87d633b4f162fdaec->enter($__internal_822b9d2b776dd81f9638dc991e34c70362dcd8ea31648af87d633b4f162fdaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $__internal_41e4fccf9c734ef765702bd1e8812b0d86df171ef669ee7c66523e182051e080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e4fccf9c734ef765702bd1e8812b0d86df171ef669ee7c66523e182051e080->enter($__internal_41e4fccf9c734ef765702bd1e8812b0d86df171ef669ee7c66523e182051e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822b9d2b776dd81f9638dc991e34c70362dcd8ea31648af87d633b4f162fdaec->leave($__internal_822b9d2b776dd81f9638dc991e34c70362dcd8ea31648af87d633b4f162fdaec_prof);

        
        $__internal_41e4fccf9c734ef765702bd1e8812b0d86df171ef669ee7c66523e182051e080->leave($__internal_41e4fccf9c734ef765702bd1e8812b0d86df171ef669ee7c66523e182051e080_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_254c01a3815cba62eac72a4dc6d1b2f4f3a40b0f5e346d53a554bf1325e20420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254c01a3815cba62eac72a4dc6d1b2f4f3a40b0f5e346d53a554bf1325e20420->enter($__internal_254c01a3815cba62eac72a4dc6d1b2f4f3a40b0f5e346d53a554bf1325e20420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ebb1dc6aa7cc46f8e814fd44335603db412ae7c9b4e467935d16d2277acb5271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb1dc6aa7cc46f8e814fd44335603db412ae7c9b4e467935d16d2277acb5271->enter($__internal_ebb1dc6aa7cc46f8e814fd44335603db412ae7c9b4e467935d16d2277acb5271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ebb1dc6aa7cc46f8e814fd44335603db412ae7c9b4e467935d16d2277acb5271->leave($__internal_ebb1dc6aa7cc46f8e814fd44335603db412ae7c9b4e467935d16d2277acb5271_prof);

        
        $__internal_254c01a3815cba62eac72a4dc6d1b2f4f3a40b0f5e346d53a554bf1325e20420->leave($__internal_254c01a3815cba62eac72a4dc6d1b2f4f3a40b0f5e346d53a554bf1325e20420_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
