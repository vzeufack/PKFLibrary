<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b975e171fb11efbc60d6879724b3c20c9f7eb1766ba2657c081be56626a3955d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8afbf0def348144350061796652fa881f9624944f25b3aec91d0e16996c5e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8afbf0def348144350061796652fa881f9624944f25b3aec91d0e16996c5e71->enter($__internal_c8afbf0def348144350061796652fa881f9624944f25b3aec91d0e16996c5e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_317df5c1bad72ab33667f8844d891ffb0f96a9bce1788687a8d7b1bb26bc2e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317df5c1bad72ab33667f8844d891ffb0f96a9bce1788687a8d7b1bb26bc2e43->enter($__internal_317df5c1bad72ab33667f8844d891ffb0f96a9bce1788687a8d7b1bb26bc2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8afbf0def348144350061796652fa881f9624944f25b3aec91d0e16996c5e71->leave($__internal_c8afbf0def348144350061796652fa881f9624944f25b3aec91d0e16996c5e71_prof);

        
        $__internal_317df5c1bad72ab33667f8844d891ffb0f96a9bce1788687a8d7b1bb26bc2e43->leave($__internal_317df5c1bad72ab33667f8844d891ffb0f96a9bce1788687a8d7b1bb26bc2e43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4731f2054fc29652eace203d34def86bba85e3fabfe25d7944093eb8d80ce2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4731f2054fc29652eace203d34def86bba85e3fabfe25d7944093eb8d80ce2fb->enter($__internal_4731f2054fc29652eace203d34def86bba85e3fabfe25d7944093eb8d80ce2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92b813f37b0ce5973911d68c0c973cd31adf6a9cefb68fe5544b7b8f179492bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b813f37b0ce5973911d68c0c973cd31adf6a9cefb68fe5544b7b8f179492bf->enter($__internal_92b813f37b0ce5973911d68c0c973cd31adf6a9cefb68fe5544b7b8f179492bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_92b813f37b0ce5973911d68c0c973cd31adf6a9cefb68fe5544b7b8f179492bf->leave($__internal_92b813f37b0ce5973911d68c0c973cd31adf6a9cefb68fe5544b7b8f179492bf_prof);

        
        $__internal_4731f2054fc29652eace203d34def86bba85e3fabfe25d7944093eb8d80ce2fb->leave($__internal_4731f2054fc29652eace203d34def86bba85e3fabfe25d7944093eb8d80ce2fb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9457798602bced0869b403122e1de44d621ef38fb3c207e2934bfbdffdd9ac8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9457798602bced0869b403122e1de44d621ef38fb3c207e2934bfbdffdd9ac8b->enter($__internal_9457798602bced0869b403122e1de44d621ef38fb3c207e2934bfbdffdd9ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67e91d4088978c3a15c75c5061741a3a5e9c062428cbd4096c62e18b32e11dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e91d4088978c3a15c75c5061741a3a5e9c062428cbd4096c62e18b32e11dcc->enter($__internal_67e91d4088978c3a15c75c5061741a3a5e9c062428cbd4096c62e18b32e11dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67e91d4088978c3a15c75c5061741a3a5e9c062428cbd4096c62e18b32e11dcc->leave($__internal_67e91d4088978c3a15c75c5061741a3a5e9c062428cbd4096c62e18b32e11dcc_prof);

        
        $__internal_9457798602bced0869b403122e1de44d621ef38fb3c207e2934bfbdffdd9ac8b->leave($__internal_9457798602bced0869b403122e1de44d621ef38fb3c207e2934bfbdffdd9ac8b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a2e707283b36089350485416fed37690257099ab8ec7bb4b24b870ad15676a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a2e707283b36089350485416fed37690257099ab8ec7bb4b24b870ad15676a->enter($__internal_70a2e707283b36089350485416fed37690257099ab8ec7bb4b24b870ad15676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f719cabc3327f72e71a6a8d5ad9dc81c702dc7726ef6f3f81f08abb432493c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f719cabc3327f72e71a6a8d5ad9dc81c702dc7726ef6f3f81f08abb432493c3->enter($__internal_2f719cabc3327f72e71a6a8d5ad9dc81c702dc7726ef6f3f81f08abb432493c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2f719cabc3327f72e71a6a8d5ad9dc81c702dc7726ef6f3f81f08abb432493c3->leave($__internal_2f719cabc3327f72e71a6a8d5ad9dc81c702dc7726ef6f3f81f08abb432493c3_prof);

        
        $__internal_70a2e707283b36089350485416fed37690257099ab8ec7bb4b24b870ad15676a->leave($__internal_70a2e707283b36089350485416fed37690257099ab8ec7bb4b24b870ad15676a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
