<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_0c656ebdbdb4403c47d5c7fc3f58d86d6e49f0e57c8e332577709926033e5b26 extends Twig_Template
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
        $__internal_942bbb9c84938c0a47d0d92b6cfed61320b9c08c6908bae502167a2f2cee4452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942bbb9c84938c0a47d0d92b6cfed61320b9c08c6908bae502167a2f2cee4452->enter($__internal_942bbb9c84938c0a47d0d92b6cfed61320b9c08c6908bae502167a2f2cee4452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        $__internal_b7491d84901d7a2cb8b54ed5f74871f89272daf0309b863360877f309a5fe0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7491d84901d7a2cb8b54ed5f74871f89272daf0309b863360877f309a5fe0f5->enter($__internal_b7491d84901d7a2cb8b54ed5f74871f89272daf0309b863360877f309a5fe0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_942bbb9c84938c0a47d0d92b6cfed61320b9c08c6908bae502167a2f2cee4452->leave($__internal_942bbb9c84938c0a47d0d92b6cfed61320b9c08c6908bae502167a2f2cee4452_prof);

        
        $__internal_b7491d84901d7a2cb8b54ed5f74871f89272daf0309b863360877f309a5fe0f5->leave($__internal_b7491d84901d7a2cb8b54ed5f74871f89272daf0309b863360877f309a5fe0f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cf37d1067ddac208ae153c44ae1df904329322532a9e2a86587470daa857fa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf37d1067ddac208ae153c44ae1df904329322532a9e2a86587470daa857fa71->enter($__internal_cf37d1067ddac208ae153c44ae1df904329322532a9e2a86587470daa857fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9f70bc0a4c6a5ed0622ac37ed58b869ca803c90c7fa841c80c2f75b6af4dab9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f70bc0a4c6a5ed0622ac37ed58b869ca803c90c7fa841c80c2f75b6af4dab9f->enter($__internal_9f70bc0a4c6a5ed0622ac37ed58b869ca803c90c7fa841c80c2f75b6af4dab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9f70bc0a4c6a5ed0622ac37ed58b869ca803c90c7fa841c80c2f75b6af4dab9f->leave($__internal_9f70bc0a4c6a5ed0622ac37ed58b869ca803c90c7fa841c80c2f75b6af4dab9f_prof);

        
        $__internal_cf37d1067ddac208ae153c44ae1df904329322532a9e2a86587470daa857fa71->leave($__internal_cf37d1067ddac208ae153c44ae1df904329322532a9e2a86587470daa857fa71_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0dba9d522896e529880fbb70c332873c822e8cbbd2315ea7e9909ef921057f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dba9d522896e529880fbb70c332873c822e8cbbd2315ea7e9909ef921057f71->enter($__internal_0dba9d522896e529880fbb70c332873c822e8cbbd2315ea7e9909ef921057f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d2ec44afbef46228b35d4441f812c1839f27a7b88e9f4af71d95c0e7a45dfd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ec44afbef46228b35d4441f812c1839f27a7b88e9f4af71d95c0e7a45dfd20->enter($__internal_d2ec44afbef46228b35d4441f812c1839f27a7b88e9f4af71d95c0e7a45dfd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d2ec44afbef46228b35d4441f812c1839f27a7b88e9f4af71d95c0e7a45dfd20->leave($__internal_d2ec44afbef46228b35d4441f812c1839f27a7b88e9f4af71d95c0e7a45dfd20_prof);

        
        $__internal_0dba9d522896e529880fbb70c332873c822e8cbbd2315ea7e9909ef921057f71->leave($__internal_0dba9d522896e529880fbb70c332873c822e8cbbd2315ea7e9909ef921057f71_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b46c27ab0129b5c441cc31e5607a4dfdc4ef822ad3cabc85be6277e1e773e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b46c27ab0129b5c441cc31e5607a4dfdc4ef822ad3cabc85be6277e1e773e87->enter($__internal_7b46c27ab0129b5c441cc31e5607a4dfdc4ef822ad3cabc85be6277e1e773e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_21f5912644a24516c7ce4165ee7429da98b98bd0adfbb7ed3fdd772a01de0740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f5912644a24516c7ce4165ee7429da98b98bd0adfbb7ed3fdd772a01de0740->enter($__internal_21f5912644a24516c7ce4165ee7429da98b98bd0adfbb7ed3fdd772a01de0740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_21f5912644a24516c7ce4165ee7429da98b98bd0adfbb7ed3fdd772a01de0740->leave($__internal_21f5912644a24516c7ce4165ee7429da98b98bd0adfbb7ed3fdd772a01de0740_prof);

        
        $__internal_7b46c27ab0129b5c441cc31e5607a4dfdc4ef822ad3cabc85be6277e1e773e87->leave($__internal_7b46c27ab0129b5c441cc31e5607a4dfdc4ef822ad3cabc85be6277e1e773e87_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
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
", "@User/Registration/email.txt.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Registration\\email.txt.twig");
    }
}
