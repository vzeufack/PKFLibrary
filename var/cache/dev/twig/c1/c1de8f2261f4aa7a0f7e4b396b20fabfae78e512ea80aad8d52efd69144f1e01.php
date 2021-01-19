<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_dd0450b724bd8c88a0ee05100ae5f3addba45ae4ca7c7ba456024ad0ca67b710 extends Twig_Template
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
        $__internal_f0cca7d2080d63aed2e2ccf49981d7ecdd3f3332ef944d0a34c093ab6eb86804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cca7d2080d63aed2e2ccf49981d7ecdd3f3332ef944d0a34c093ab6eb86804->enter($__internal_f0cca7d2080d63aed2e2ccf49981d7ecdd3f3332ef944d0a34c093ab6eb86804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        $__internal_c341d936833761199740629c644b3da20fc6809a997f957133749171af2045c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c341d936833761199740629c644b3da20fc6809a997f957133749171af2045c5->enter($__internal_c341d936833761199740629c644b3da20fc6809a997f957133749171af2045c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f0cca7d2080d63aed2e2ccf49981d7ecdd3f3332ef944d0a34c093ab6eb86804->leave($__internal_f0cca7d2080d63aed2e2ccf49981d7ecdd3f3332ef944d0a34c093ab6eb86804_prof);

        
        $__internal_c341d936833761199740629c644b3da20fc6809a997f957133749171af2045c5->leave($__internal_c341d936833761199740629c644b3da20fc6809a997f957133749171af2045c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bc36ec363f6c0f4741c5728eab8aae432e145915dd7872331733ca357b6314fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc36ec363f6c0f4741c5728eab8aae432e145915dd7872331733ca357b6314fd->enter($__internal_bc36ec363f6c0f4741c5728eab8aae432e145915dd7872331733ca357b6314fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8a742aabd0c111ea9f5995e1bd2b17eb893aef9f0e49b3f6ac6453e079ebe4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a742aabd0c111ea9f5995e1bd2b17eb893aef9f0e49b3f6ac6453e079ebe4e3->enter($__internal_8a742aabd0c111ea9f5995e1bd2b17eb893aef9f0e49b3f6ac6453e079ebe4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8a742aabd0c111ea9f5995e1bd2b17eb893aef9f0e49b3f6ac6453e079ebe4e3->leave($__internal_8a742aabd0c111ea9f5995e1bd2b17eb893aef9f0e49b3f6ac6453e079ebe4e3_prof);

        
        $__internal_bc36ec363f6c0f4741c5728eab8aae432e145915dd7872331733ca357b6314fd->leave($__internal_bc36ec363f6c0f4741c5728eab8aae432e145915dd7872331733ca357b6314fd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_10accd047312ef8bb28478997c75ecd199f26500696401008091692765b80037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10accd047312ef8bb28478997c75ecd199f26500696401008091692765b80037->enter($__internal_10accd047312ef8bb28478997c75ecd199f26500696401008091692765b80037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bf1e49a37a4e9c7f1b7000161cea1f9d887178e6ce854ce9d739fb7fcf96bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1e49a37a4e9c7f1b7000161cea1f9d887178e6ce854ce9d739fb7fcf96bb32->enter($__internal_bf1e49a37a4e9c7f1b7000161cea1f9d887178e6ce854ce9d739fb7fcf96bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf1e49a37a4e9c7f1b7000161cea1f9d887178e6ce854ce9d739fb7fcf96bb32->leave($__internal_bf1e49a37a4e9c7f1b7000161cea1f9d887178e6ce854ce9d739fb7fcf96bb32_prof);

        
        $__internal_10accd047312ef8bb28478997c75ecd199f26500696401008091692765b80037->leave($__internal_10accd047312ef8bb28478997c75ecd199f26500696401008091692765b80037_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f7f78ad75b5842d2ec6df92ae8cae7ec938117769b6ea1945af349604a253145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f78ad75b5842d2ec6df92ae8cae7ec938117769b6ea1945af349604a253145->enter($__internal_f7f78ad75b5842d2ec6df92ae8cae7ec938117769b6ea1945af349604a253145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a57e7f798e85978d0d522e59c7ebc186709a4b21b028d9cb26c9cc83b3662dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57e7f798e85978d0d522e59c7ebc186709a4b21b028d9cb26c9cc83b3662dbc->enter($__internal_a57e7f798e85978d0d522e59c7ebc186709a4b21b028d9cb26c9cc83b3662dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a57e7f798e85978d0d522e59c7ebc186709a4b21b028d9cb26c9cc83b3662dbc->leave($__internal_a57e7f798e85978d0d522e59c7ebc186709a4b21b028d9cb26c9cc83b3662dbc_prof);

        
        $__internal_f7f78ad75b5842d2ec6df92ae8cae7ec938117769b6ea1945af349604a253145->leave($__internal_f7f78ad75b5842d2ec6df92ae8cae7ec938117769b6ea1945af349604a253145_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
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
", "UserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
