<?php

/* UserBundle:Registration:check_email.html.twig */
class __TwigTemplate_523292003792f86010dd1651607c2e53e08e040a9dbe24d9c55ec0e843ce2c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_386ba967a2609ad5f457b490e5fb071938344717ae3baa99bf2959209da1c64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386ba967a2609ad5f457b490e5fb071938344717ae3baa99bf2959209da1c64a->enter($__internal_386ba967a2609ad5f457b490e5fb071938344717ae3baa99bf2959209da1c64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $__internal_2eb36ab7c7f40943461e2a8c5831d88c1f34c1f339ae304b45ba39cdf8175829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb36ab7c7f40943461e2a8c5831d88c1f34c1f339ae304b45ba39cdf8175829->enter($__internal_2eb36ab7c7f40943461e2a8c5831d88c1f34c1f339ae304b45ba39cdf8175829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386ba967a2609ad5f457b490e5fb071938344717ae3baa99bf2959209da1c64a->leave($__internal_386ba967a2609ad5f457b490e5fb071938344717ae3baa99bf2959209da1c64a_prof);

        
        $__internal_2eb36ab7c7f40943461e2a8c5831d88c1f34c1f339ae304b45ba39cdf8175829->leave($__internal_2eb36ab7c7f40943461e2a8c5831d88c1f34c1f339ae304b45ba39cdf8175829_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2ade8dd355b0785a3bc164ee073f00af436584a463e28004a94f472120a191f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ade8dd355b0785a3bc164ee073f00af436584a463e28004a94f472120a191f->enter($__internal_e2ade8dd355b0785a3bc164ee073f00af436584a463e28004a94f472120a191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c306178c9007001beb94ba921a6ac24af3a27ac7a00be07c89a9dd40a0db427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c306178c9007001beb94ba921a6ac24af3a27ac7a00be07c89a9dd40a0db427b->enter($__internal_c306178c9007001beb94ba921a6ac24af3a27ac7a00be07c89a9dd40a0db427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c306178c9007001beb94ba921a6ac24af3a27ac7a00be07c89a9dd40a0db427b->leave($__internal_c306178c9007001beb94ba921a6ac24af3a27ac7a00be07c89a9dd40a0db427b_prof);

        
        $__internal_e2ade8dd355b0785a3bc164ee073f00af436584a463e28004a94f472120a191f->leave($__internal_e2ade8dd355b0785a3bc164ee073f00af436584a463e28004a94f472120a191f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:check_email.html.twig";
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
", "UserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
