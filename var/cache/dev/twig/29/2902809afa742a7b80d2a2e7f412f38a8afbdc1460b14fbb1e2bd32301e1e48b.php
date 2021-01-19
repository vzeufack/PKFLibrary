<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_d807850c44ab4d765082c50f9d8e4e5a387cc639077f880ebcb998feb2d14b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_6fb9fbec2d37378612c4fb712e0313f684ddcb0909288957df42f388ed526ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb9fbec2d37378612c4fb712e0313f684ddcb0909288957df42f388ed526ec9->enter($__internal_6fb9fbec2d37378612c4fb712e0313f684ddcb0909288957df42f388ed526ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $__internal_ddf63a141b7de95a4a68d9e7284cfb9f0afdf677416ef52a49777dddc8e129a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf63a141b7de95a4a68d9e7284cfb9f0afdf677416ef52a49777dddc8e129a9->enter($__internal_ddf63a141b7de95a4a68d9e7284cfb9f0afdf677416ef52a49777dddc8e129a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb9fbec2d37378612c4fb712e0313f684ddcb0909288957df42f388ed526ec9->leave($__internal_6fb9fbec2d37378612c4fb712e0313f684ddcb0909288957df42f388ed526ec9_prof);

        
        $__internal_ddf63a141b7de95a4a68d9e7284cfb9f0afdf677416ef52a49777dddc8e129a9->leave($__internal_ddf63a141b7de95a4a68d9e7284cfb9f0afdf677416ef52a49777dddc8e129a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dddc198bdaff3065293c0d3a41dfe24e14a0027dda84f207a9c1399f62fcc636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddc198bdaff3065293c0d3a41dfe24e14a0027dda84f207a9c1399f62fcc636->enter($__internal_dddc198bdaff3065293c0d3a41dfe24e14a0027dda84f207a9c1399f62fcc636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_28facff4103a9eacb2ac5a172eaf060b832f975741553210e9c0285392121a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28facff4103a9eacb2ac5a172eaf060b832f975741553210e9c0285392121a60->enter($__internal_28facff4103a9eacb2ac5a172eaf060b832f975741553210e9c0285392121a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_28facff4103a9eacb2ac5a172eaf060b832f975741553210e9c0285392121a60->leave($__internal_28facff4103a9eacb2ac5a172eaf060b832f975741553210e9c0285392121a60_prof);

        
        $__internal_dddc198bdaff3065293c0d3a41dfe24e14a0027dda84f207a9c1399f62fcc636->leave($__internal_dddc198bdaff3065293c0d3a41dfe24e14a0027dda84f207a9c1399f62fcc636_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Registration/register.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Registration\\register.html.twig");
    }
}
