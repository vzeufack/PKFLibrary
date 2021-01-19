<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_6b0027557acc1448d5df717d2f3bd4fa34797c1a6174363d704871b0b42200a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea74f3165cd3a5c7bf84e109aaaeb8d824f316e3573395d5107ba452c226b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea74f3165cd3a5c7bf84e109aaaeb8d824f316e3573395d5107ba452c226b59->enter($__internal_7ea74f3165cd3a5c7bf84e109aaaeb8d824f316e3573395d5107ba452c226b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        $__internal_73cf3ce1d521c0c437f190ee8326d697d2384a4b7157ad2d459ba6dbd043d9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cf3ce1d521c0c437f190ee8326d697d2384a4b7157ad2d459ba6dbd043d9c3->enter($__internal_73cf3ce1d521c0c437f190ee8326d697d2384a4b7157ad2d459ba6dbd043d9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7ea74f3165cd3a5c7bf84e109aaaeb8d824f316e3573395d5107ba452c226b59->leave($__internal_7ea74f3165cd3a5c7bf84e109aaaeb8d824f316e3573395d5107ba452c226b59_prof);

        
        $__internal_73cf3ce1d521c0c437f190ee8326d697d2384a4b7157ad2d459ba6dbd043d9c3->leave($__internal_73cf3ce1d521c0c437f190ee8326d697d2384a4b7157ad2d459ba6dbd043d9c3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3daf323982e4ef333156717581394903c34c739b6490800ad72fad93f7030e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3daf323982e4ef333156717581394903c34c739b6490800ad72fad93f7030e76->enter($__internal_3daf323982e4ef333156717581394903c34c739b6490800ad72fad93f7030e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_474a5fb3901b694bbe50e7e953c19aa85a142471c98f89dccdcbef4ec3aca5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474a5fb3901b694bbe50e7e953c19aa85a142471c98f89dccdcbef4ec3aca5fc->enter($__internal_474a5fb3901b694bbe50e7e953c19aa85a142471c98f89dccdcbef4ec3aca5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_474a5fb3901b694bbe50e7e953c19aa85a142471c98f89dccdcbef4ec3aca5fc->leave($__internal_474a5fb3901b694bbe50e7e953c19aa85a142471c98f89dccdcbef4ec3aca5fc_prof);

        
        $__internal_3daf323982e4ef333156717581394903c34c739b6490800ad72fad93f7030e76->leave($__internal_3daf323982e4ef333156717581394903c34c739b6490800ad72fad93f7030e76_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e630999b7641b4aac2026094e5e1fcffc7a213deb6c80ca4972b2d9df01c56ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e630999b7641b4aac2026094e5e1fcffc7a213deb6c80ca4972b2d9df01c56ac->enter($__internal_e630999b7641b4aac2026094e5e1fcffc7a213deb6c80ca4972b2d9df01c56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b2249258224c8caf947273481d8c96697e9a1fde819a91667138e77e797d7950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2249258224c8caf947273481d8c96697e9a1fde819a91667138e77e797d7950->enter($__internal_b2249258224c8caf947273481d8c96697e9a1fde819a91667138e77e797d7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b2249258224c8caf947273481d8c96697e9a1fde819a91667138e77e797d7950->leave($__internal_b2249258224c8caf947273481d8c96697e9a1fde819a91667138e77e797d7950_prof);

        
        $__internal_e630999b7641b4aac2026094e5e1fcffc7a213deb6c80ca4972b2d9df01c56ac->leave($__internal_e630999b7641b4aac2026094e5e1fcffc7a213deb6c80ca4972b2d9df01c56ac_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_62457fc5d9b05189371ba08da8e2ab09aa929c9592a5fa722fdef9eb1dcde472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62457fc5d9b05189371ba08da8e2ab09aa929c9592a5fa722fdef9eb1dcde472->enter($__internal_62457fc5d9b05189371ba08da8e2ab09aa929c9592a5fa722fdef9eb1dcde472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9d1af092dc580482139c220c89012f6d6967a63ee8f13bd17372d3683dff48bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1af092dc580482139c220c89012f6d6967a63ee8f13bd17372d3683dff48bb->enter($__internal_9d1af092dc580482139c220c89012f6d6967a63ee8f13bd17372d3683dff48bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9d1af092dc580482139c220c89012f6d6967a63ee8f13bd17372d3683dff48bb->leave($__internal_9d1af092dc580482139c220c89012f6d6967a63ee8f13bd17372d3683dff48bb_prof);

        
        $__internal_62457fc5d9b05189371ba08da8e2ab09aa929c9592a5fa722fdef9eb1dcde472->leave($__internal_62457fc5d9b05189371ba08da8e2ab09aa929c9592a5fa722fdef9eb1dcde472_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "UserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
