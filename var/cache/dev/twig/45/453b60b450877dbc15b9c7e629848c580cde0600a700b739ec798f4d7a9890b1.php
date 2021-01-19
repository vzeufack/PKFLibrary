<?php

/* @User/Group/edit.html.twig */
class __TwigTemplate_3e022dbf7706a82a25ffff1b807d0d76d0a7634f7c7e2938e0930a31c4c4c6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Group/edit.html.twig", 1);
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
        $__internal_cbb777c9e9cc7014a0e97309389571ba779b92015f390e30fbea82c425375412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb777c9e9cc7014a0e97309389571ba779b92015f390e30fbea82c425375412->enter($__internal_cbb777c9e9cc7014a0e97309389571ba779b92015f390e30fbea82c425375412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $__internal_ee00cf3c1751aced801d9df18019bcd7b46bea91b1f9b9b8f23fe3c19b1cd61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee00cf3c1751aced801d9df18019bcd7b46bea91b1f9b9b8f23fe3c19b1cd61c->enter($__internal_ee00cf3c1751aced801d9df18019bcd7b46bea91b1f9b9b8f23fe3c19b1cd61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb777c9e9cc7014a0e97309389571ba779b92015f390e30fbea82c425375412->leave($__internal_cbb777c9e9cc7014a0e97309389571ba779b92015f390e30fbea82c425375412_prof);

        
        $__internal_ee00cf3c1751aced801d9df18019bcd7b46bea91b1f9b9b8f23fe3c19b1cd61c->leave($__internal_ee00cf3c1751aced801d9df18019bcd7b46bea91b1f9b9b8f23fe3c19b1cd61c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90f6e2cf6456c059a08293aaaa28554f325726ae61ac2d5da6cb321840f1f86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f6e2cf6456c059a08293aaaa28554f325726ae61ac2d5da6cb321840f1f86e->enter($__internal_90f6e2cf6456c059a08293aaaa28554f325726ae61ac2d5da6cb321840f1f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f2df722822272034c0b7e8efc103fecacf6e142b13e2510a23bb50b792ac424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2df722822272034c0b7e8efc103fecacf6e142b13e2510a23bb50b792ac424->enter($__internal_7f2df722822272034c0b7e8efc103fecacf6e142b13e2510a23bb50b792ac424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@User/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7f2df722822272034c0b7e8efc103fecacf6e142b13e2510a23bb50b792ac424->leave($__internal_7f2df722822272034c0b7e8efc103fecacf6e142b13e2510a23bb50b792ac424_prof);

        
        $__internal_90f6e2cf6456c059a08293aaaa28554f325726ae61ac2d5da6cb321840f1f86e->leave($__internal_90f6e2cf6456c059a08293aaaa28554f325726ae61ac2d5da6cb321840f1f86e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Group/edit.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\edit.html.twig");
    }
}
