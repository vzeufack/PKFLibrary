<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5788839e97fa1230001f36a7fa42553d30ae9bf8d5f3c1075b71ae893eeb2efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4778bf46179c6554505adb38c7174f6fb4b63c45ab7be881363f6e5d95fb15db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4778bf46179c6554505adb38c7174f6fb4b63c45ab7be881363f6e5d95fb15db->enter($__internal_4778bf46179c6554505adb38c7174f6fb4b63c45ab7be881363f6e5d95fb15db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        $__internal_456adac2b8a473472277288bb1aeb1227332f95c9f70343889c2e41121941fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456adac2b8a473472277288bb1aeb1227332f95c9f70343889c2e41121941fa6->enter($__internal_456adac2b8a473472277288bb1aeb1227332f95c9f70343889c2e41121941fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4778bf46179c6554505adb38c7174f6fb4b63c45ab7be881363f6e5d95fb15db->leave($__internal_4778bf46179c6554505adb38c7174f6fb4b63c45ab7be881363f6e5d95fb15db_prof);

        
        $__internal_456adac2b8a473472277288bb1aeb1227332f95c9f70343889c2e41121941fa6->leave($__internal_456adac2b8a473472277288bb1aeb1227332f95c9f70343889c2e41121941fa6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "UserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
