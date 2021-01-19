<?php

/* @User/Profile/show_content.html.twig */
class __TwigTemplate_ed1e8fa747c145ec5dcd51b65440326b44d39f6d49ab32b134121cae91e098f7 extends Twig_Template
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
        $__internal_25f9a42085ad6bbc4572b07a89a7e125b33c5284aca065e79555016beb4bd510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f9a42085ad6bbc4572b07a89a7e125b33c5284aca065e79555016beb4bd510->enter($__internal_25f9a42085ad6bbc4572b07a89a7e125b33c5284aca065e79555016beb4bd510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        $__internal_70191b19d9f4d06996118da84907cb1f5c95593223a35d6aade77c610e42d057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70191b19d9f4d06996118da84907cb1f5c95593223a35d6aade77c610e42d057->enter($__internal_70191b19d9f4d06996118da84907cb1f5c95593223a35d6aade77c610e42d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

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
        
        $__internal_25f9a42085ad6bbc4572b07a89a7e125b33c5284aca065e79555016beb4bd510->leave($__internal_25f9a42085ad6bbc4572b07a89a7e125b33c5284aca065e79555016beb4bd510_prof);

        
        $__internal_70191b19d9f4d06996118da84907cb1f5c95593223a35d6aade77c610e42d057->leave($__internal_70191b19d9f4d06996118da84907cb1f5c95593223a35d6aade77c610e42d057_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show_content.html.twig";
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
", "@User/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Profile\\show_content.html.twig");
    }
}
