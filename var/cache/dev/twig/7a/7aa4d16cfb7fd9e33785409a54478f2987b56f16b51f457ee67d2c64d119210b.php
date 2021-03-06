<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b730fa01aff37297208b4516b929c6f744ea72fdc5450b3c15037a57f77782c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f8da3571af417c61047af420c749f3dc80f053a1d2abdea46476db25cbe8aed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8da3571af417c61047af420c749f3dc80f053a1d2abdea46476db25cbe8aed0->enter($__internal_f8da3571af417c61047af420c749f3dc80f053a1d2abdea46476db25cbe8aed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_570d08eaa4e99eb73bb96b2c0d6aed20a427ce31d4eb27ecaaf969200eaf2639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570d08eaa4e99eb73bb96b2c0d6aed20a427ce31d4eb27ecaaf969200eaf2639->enter($__internal_570d08eaa4e99eb73bb96b2c0d6aed20a427ce31d4eb27ecaaf969200eaf2639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8da3571af417c61047af420c749f3dc80f053a1d2abdea46476db25cbe8aed0->leave($__internal_f8da3571af417c61047af420c749f3dc80f053a1d2abdea46476db25cbe8aed0_prof);

        
        $__internal_570d08eaa4e99eb73bb96b2c0d6aed20a427ce31d4eb27ecaaf969200eaf2639->leave($__internal_570d08eaa4e99eb73bb96b2c0d6aed20a427ce31d4eb27ecaaf969200eaf2639_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_415968ee791cb75157ebc6f502307adab86cd2d19393fc525a27f323e0967aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415968ee791cb75157ebc6f502307adab86cd2d19393fc525a27f323e0967aee->enter($__internal_415968ee791cb75157ebc6f502307adab86cd2d19393fc525a27f323e0967aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea612ab966557fbe36c086896269f2aad2f9cd288cb3754c2759680b03f983b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea612ab966557fbe36c086896269f2aad2f9cd288cb3754c2759680b03f983b3->enter($__internal_ea612ab966557fbe36c086896269f2aad2f9cd288cb3754c2759680b03f983b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea612ab966557fbe36c086896269f2aad2f9cd288cb3754c2759680b03f983b3->leave($__internal_ea612ab966557fbe36c086896269f2aad2f9cd288cb3754c2759680b03f983b3_prof);

        
        $__internal_415968ee791cb75157ebc6f502307adab86cd2d19393fc525a27f323e0967aee->leave($__internal_415968ee791cb75157ebc6f502307adab86cd2d19393fc525a27f323e0967aee_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_24f6e2c57b6adb1a3728078f7250a2880e511a795c3a03557c0eabe2f249b7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f6e2c57b6adb1a3728078f7250a2880e511a795c3a03557c0eabe2f249b7a8->enter($__internal_24f6e2c57b6adb1a3728078f7250a2880e511a795c3a03557c0eabe2f249b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82e7ca2a5d4698f28b7c719a0ed1ac18277b33bd129f579cc093de08ce08d393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e7ca2a5d4698f28b7c719a0ed1ac18277b33bd129f579cc093de08ce08d393->enter($__internal_82e7ca2a5d4698f28b7c719a0ed1ac18277b33bd129f579cc093de08ce08d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82e7ca2a5d4698f28b7c719a0ed1ac18277b33bd129f579cc093de08ce08d393->leave($__internal_82e7ca2a5d4698f28b7c719a0ed1ac18277b33bd129f579cc093de08ce08d393_prof);

        
        $__internal_24f6e2c57b6adb1a3728078f7250a2880e511a795c3a03557c0eabe2f249b7a8->leave($__internal_24f6e2c57b6adb1a3728078f7250a2880e511a795c3a03557c0eabe2f249b7a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_11b82fab99f05ab805fe8d45234947274580032097a1e59ca6893ea6395ffa8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b82fab99f05ab805fe8d45234947274580032097a1e59ca6893ea6395ffa8a->enter($__internal_11b82fab99f05ab805fe8d45234947274580032097a1e59ca6893ea6395ffa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1319e59b3382c89a289d79ce3fb94e6621035247e5d24a4759278000ebdbf970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1319e59b3382c89a289d79ce3fb94e6621035247e5d24a4759278000ebdbf970->enter($__internal_1319e59b3382c89a289d79ce3fb94e6621035247e5d24a4759278000ebdbf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1319e59b3382c89a289d79ce3fb94e6621035247e5d24a4759278000ebdbf970->leave($__internal_1319e59b3382c89a289d79ce3fb94e6621035247e5d24a4759278000ebdbf970_prof);

        
        $__internal_11b82fab99f05ab805fe8d45234947274580032097a1e59ca6893ea6395ffa8a->leave($__internal_11b82fab99f05ab805fe8d45234947274580032097a1e59ca6893ea6395ffa8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
