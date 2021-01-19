<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_47d609600a85f92effa6d9ac52034ca243c37b78d6f39c09185bd6db07930d91 extends Twig_Template
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
        $__internal_8b8a171acd03fdc13a85836b0d5a1c0f1c1e9018c35bac2e5a5e5945d29b475e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8a171acd03fdc13a85836b0d5a1c0f1c1e9018c35bac2e5a5e5945d29b475e->enter($__internal_8b8a171acd03fdc13a85836b0d5a1c0f1c1e9018c35bac2e5a5e5945d29b475e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        $__internal_8e1a9b7529718aaa9ba235d51f12ec7e5d9ee641db1947143d3d3a7c9642b41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1a9b7529718aaa9ba235d51f12ec7e5d9ee641db1947143d3d3a7c9642b41d->enter($__internal_8e1a9b7529718aaa9ba235d51f12ec7e5d9ee641db1947143d3d3a7c9642b41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8b8a171acd03fdc13a85836b0d5a1c0f1c1e9018c35bac2e5a5e5945d29b475e->leave($__internal_8b8a171acd03fdc13a85836b0d5a1c0f1c1e9018c35bac2e5a5e5945d29b475e_prof);

        
        $__internal_8e1a9b7529718aaa9ba235d51f12ec7e5d9ee641db1947143d3d3a7c9642b41d->leave($__internal_8e1a9b7529718aaa9ba235d51f12ec7e5d9ee641db1947143d3d3a7c9642b41d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b9cd22c0802a4a6048fcc2f4c894fecd6c685ea182880cc845391be0a8960c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9cd22c0802a4a6048fcc2f4c894fecd6c685ea182880cc845391be0a8960c5->enter($__internal_9b9cd22c0802a4a6048fcc2f4c894fecd6c685ea182880cc845391be0a8960c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cfdc5ccad87b60037ae69e36601abf5fdcad51b9b17215ebc916a2619a6ef75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdc5ccad87b60037ae69e36601abf5fdcad51b9b17215ebc916a2619a6ef75b->enter($__internal_cfdc5ccad87b60037ae69e36601abf5fdcad51b9b17215ebc916a2619a6ef75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_cfdc5ccad87b60037ae69e36601abf5fdcad51b9b17215ebc916a2619a6ef75b->leave($__internal_cfdc5ccad87b60037ae69e36601abf5fdcad51b9b17215ebc916a2619a6ef75b_prof);

        
        $__internal_9b9cd22c0802a4a6048fcc2f4c894fecd6c685ea182880cc845391be0a8960c5->leave($__internal_9b9cd22c0802a4a6048fcc2f4c894fecd6c685ea182880cc845391be0a8960c5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e890e581bc238cafb50cb03072bc3b8999d1c3b8385c1a353902e66e89352ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e890e581bc238cafb50cb03072bc3b8999d1c3b8385c1a353902e66e89352ea9->enter($__internal_e890e581bc238cafb50cb03072bc3b8999d1c3b8385c1a353902e66e89352ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_448de789fef9467e99faf0c8d21c5bda23bf64c1a6b621a998b51280a968f1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448de789fef9467e99faf0c8d21c5bda23bf64c1a6b621a998b51280a968f1e9->enter($__internal_448de789fef9467e99faf0c8d21c5bda23bf64c1a6b621a998b51280a968f1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_448de789fef9467e99faf0c8d21c5bda23bf64c1a6b621a998b51280a968f1e9->leave($__internal_448de789fef9467e99faf0c8d21c5bda23bf64c1a6b621a998b51280a968f1e9_prof);

        
        $__internal_e890e581bc238cafb50cb03072bc3b8999d1c3b8385c1a353902e66e89352ea9->leave($__internal_e890e581bc238cafb50cb03072bc3b8999d1c3b8385c1a353902e66e89352ea9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7056f881e685736f11f5f93166ec1836eff62df3e67529fad1aafe8287d0967b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7056f881e685736f11f5f93166ec1836eff62df3e67529fad1aafe8287d0967b->enter($__internal_7056f881e685736f11f5f93166ec1836eff62df3e67529fad1aafe8287d0967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_181c70c7ad3c9eb9649a6ee6fea35f20e886afeb851e91058d666cc2118a5f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181c70c7ad3c9eb9649a6ee6fea35f20e886afeb851e91058d666cc2118a5f18->enter($__internal_181c70c7ad3c9eb9649a6ee6fea35f20e886afeb851e91058d666cc2118a5f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_181c70c7ad3c9eb9649a6ee6fea35f20e886afeb851e91058d666cc2118a5f18->leave($__internal_181c70c7ad3c9eb9649a6ee6fea35f20e886afeb851e91058d666cc2118a5f18_prof);

        
        $__internal_7056f881e685736f11f5f93166ec1836eff62df3e67529fad1aafe8287d0967b->leave($__internal_7056f881e685736f11f5f93166ec1836eff62df3e67529fad1aafe8287d0967b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@User/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\email.txt.twig");
    }
}
