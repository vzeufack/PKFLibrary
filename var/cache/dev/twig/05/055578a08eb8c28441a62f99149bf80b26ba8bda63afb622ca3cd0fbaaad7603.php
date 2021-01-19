<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_d46756eaa6f2caeaa727db6de51668a885a0b08459fcac40ffd4f1bf712fb7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_594956474ef46574bf33f3a65847610a76f2971cd45849a621c2340349a34843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594956474ef46574bf33f3a65847610a76f2971cd45849a621c2340349a34843->enter($__internal_594956474ef46574bf33f3a65847610a76f2971cd45849a621c2340349a34843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_91da99894fad7b4dcccd6655af59d79a357751795b13ace2b75072b76b91cc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91da99894fad7b4dcccd6655af59d79a357751795b13ace2b75072b76b91cc55->enter($__internal_91da99894fad7b4dcccd6655af59d79a357751795b13ace2b75072b76b91cc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594956474ef46574bf33f3a65847610a76f2971cd45849a621c2340349a34843->leave($__internal_594956474ef46574bf33f3a65847610a76f2971cd45849a621c2340349a34843_prof);

        
        $__internal_91da99894fad7b4dcccd6655af59d79a357751795b13ace2b75072b76b91cc55->leave($__internal_91da99894fad7b4dcccd6655af59d79a357751795b13ace2b75072b76b91cc55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dde552883812cc4933b36eaf1043d775415788a69b20c8273d3da7b62992bf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde552883812cc4933b36eaf1043d775415788a69b20c8273d3da7b62992bf6c->enter($__internal_dde552883812cc4933b36eaf1043d775415788a69b20c8273d3da7b62992bf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a6bf1abcd31f13034230c67985b180e216810507b56de331e7592b8af1af6b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bf1abcd31f13034230c67985b180e216810507b56de331e7592b8af1af6b10->enter($__internal_a6bf1abcd31f13034230c67985b180e216810507b56de331e7592b8af1af6b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a6bf1abcd31f13034230c67985b180e216810507b56de331e7592b8af1af6b10->leave($__internal_a6bf1abcd31f13034230c67985b180e216810507b56de331e7592b8af1af6b10_prof);

        
        $__internal_dde552883812cc4933b36eaf1043d775415788a69b20c8273d3da7b62992bf6c->leave($__internal_dde552883812cc4933b36eaf1043d775415788a69b20c8273d3da7b62992bf6c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
