<?php

/* @User/Registration/check_email.html.twig */
class __TwigTemplate_38e658bbfb8eef4072b3f9baed02ac86e4e19aa86165ffcc1037061f3f6078c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Registration/check_email.html.twig", 1);
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
        $__internal_37a13bccc69bc725a57b884f6ec2ae78966c75ac69dd7274470d0539af818481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a13bccc69bc725a57b884f6ec2ae78966c75ac69dd7274470d0539af818481->enter($__internal_37a13bccc69bc725a57b884f6ec2ae78966c75ac69dd7274470d0539af818481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/check_email.html.twig"));

        $__internal_fd008f8edb422349e950ccf20aee26c02c1dedc6bb4d4bac49006802daa11a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd008f8edb422349e950ccf20aee26c02c1dedc6bb4d4bac49006802daa11a55->enter($__internal_fd008f8edb422349e950ccf20aee26c02c1dedc6bb4d4bac49006802daa11a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a13bccc69bc725a57b884f6ec2ae78966c75ac69dd7274470d0539af818481->leave($__internal_37a13bccc69bc725a57b884f6ec2ae78966c75ac69dd7274470d0539af818481_prof);

        
        $__internal_fd008f8edb422349e950ccf20aee26c02c1dedc6bb4d4bac49006802daa11a55->leave($__internal_fd008f8edb422349e950ccf20aee26c02c1dedc6bb4d4bac49006802daa11a55_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c250b66c8334422bfaa5ac9de8d3924f237fe63df9f9f2232e95c69a17805252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c250b66c8334422bfaa5ac9de8d3924f237fe63df9f9f2232e95c69a17805252->enter($__internal_c250b66c8334422bfaa5ac9de8d3924f237fe63df9f9f2232e95c69a17805252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae104a8dc6afb440f3097cf5c7a16a6fdf27be77e7725ccb743f2ae21b2afdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae104a8dc6afb440f3097cf5c7a16a6fdf27be77e7725ccb743f2ae21b2afdd3->enter($__internal_ae104a8dc6afb440f3097cf5c7a16a6fdf27be77e7725ccb743f2ae21b2afdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ae104a8dc6afb440f3097cf5c7a16a6fdf27be77e7725ccb743f2ae21b2afdd3->leave($__internal_ae104a8dc6afb440f3097cf5c7a16a6fdf27be77e7725ccb743f2ae21b2afdd3_prof);

        
        $__internal_c250b66c8334422bfaa5ac9de8d3924f237fe63df9f9f2232e95c69a17805252->leave($__internal_c250b66c8334422bfaa5ac9de8d3924f237fe63df9f9f2232e95c69a17805252_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/check_email.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@User/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Registration\\check_email.html.twig");
    }
}
