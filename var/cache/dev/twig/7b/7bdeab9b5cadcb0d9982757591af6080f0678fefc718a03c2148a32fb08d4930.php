<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_69133f1af314bac24fba37d4b93bf7097c4bc2545e48851cff89eeeaa4cd095f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fd9f4e17437ff74f475e5d989a76bce504e7e6b034fc4e40e41af54bdf5845bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9f4e17437ff74f475e5d989a76bce504e7e6b034fc4e40e41af54bdf5845bf->enter($__internal_fd9f4e17437ff74f475e5d989a76bce504e7e6b034fc4e40e41af54bdf5845bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_51c8bd7d6edabf94ffc4e27931137cdeedbc62796a1966d8ac2eb6e8355a17e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c8bd7d6edabf94ffc4e27931137cdeedbc62796a1966d8ac2eb6e8355a17e4->enter($__internal_51c8bd7d6edabf94ffc4e27931137cdeedbc62796a1966d8ac2eb6e8355a17e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9f4e17437ff74f475e5d989a76bce504e7e6b034fc4e40e41af54bdf5845bf->leave($__internal_fd9f4e17437ff74f475e5d989a76bce504e7e6b034fc4e40e41af54bdf5845bf_prof);

        
        $__internal_51c8bd7d6edabf94ffc4e27931137cdeedbc62796a1966d8ac2eb6e8355a17e4->leave($__internal_51c8bd7d6edabf94ffc4e27931137cdeedbc62796a1966d8ac2eb6e8355a17e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bddd0e221d2fa2a3117bc39f648b5f6af9f12c968a2e2d4e5f7cf00705e481d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddd0e221d2fa2a3117bc39f648b5f6af9f12c968a2e2d4e5f7cf00705e481d1->enter($__internal_bddd0e221d2fa2a3117bc39f648b5f6af9f12c968a2e2d4e5f7cf00705e481d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a9a5102de1b3b5dd44e8025c91b70452e20ac5d75a46a9a8f120e42a3182e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9a5102de1b3b5dd44e8025c91b70452e20ac5d75a46a9a8f120e42a3182e75->enter($__internal_2a9a5102de1b3b5dd44e8025c91b70452e20ac5d75a46a9a8f120e42a3182e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2a9a5102de1b3b5dd44e8025c91b70452e20ac5d75a46a9a8f120e42a3182e75->leave($__internal_2a9a5102de1b3b5dd44e8025c91b70452e20ac5d75a46a9a8f120e42a3182e75_prof);

        
        $__internal_bddd0e221d2fa2a3117bc39f648b5f6af9f12c968a2e2d4e5f7cf00705e481d1->leave($__internal_bddd0e221d2fa2a3117bc39f648b5f6af9f12c968a2e2d4e5f7cf00705e481d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c68ff1506d5bd7db6fcefa58692d884ccd3a2523b1d678701c97fed2e5552969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68ff1506d5bd7db6fcefa58692d884ccd3a2523b1d678701c97fed2e5552969->enter($__internal_c68ff1506d5bd7db6fcefa58692d884ccd3a2523b1d678701c97fed2e5552969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfa83e77d10058676551fb973225e19156c7ed957c29e84405750bfe96b19c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa83e77d10058676551fb973225e19156c7ed957c29e84405750bfe96b19c66->enter($__internal_dfa83e77d10058676551fb973225e19156c7ed957c29e84405750bfe96b19c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dfa83e77d10058676551fb973225e19156c7ed957c29e84405750bfe96b19c66->leave($__internal_dfa83e77d10058676551fb973225e19156c7ed957c29e84405750bfe96b19c66_prof);

        
        $__internal_c68ff1506d5bd7db6fcefa58692d884ccd3a2523b1d678701c97fed2e5552969->leave($__internal_c68ff1506d5bd7db6fcefa58692d884ccd3a2523b1d678701c97fed2e5552969_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
