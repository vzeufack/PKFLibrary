<?php

/* @User/Group/show_content.html.twig */
class __TwigTemplate_35cceb600b088ec011f4af3fb2dbff21cb4647b548f6d3d4e78cdfd1ef8822c2 extends Twig_Template
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
        $__internal_e693d7ee7997b7237c089b3802c2a6b7d885372a548a6c96d101271034d9f1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e693d7ee7997b7237c089b3802c2a6b7d885372a548a6c96d101271034d9f1c6->enter($__internal_e693d7ee7997b7237c089b3802c2a6b7d885372a548a6c96d101271034d9f1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show_content.html.twig"));

        $__internal_8760f07d522f3af9686137250a3dde9ec3bf6d9c2990962dec9f6607dd43bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8760f07d522f3af9686137250a3dde9ec3bf6d9c2990962dec9f6607dd43bae2->enter($__internal_8760f07d522f3af9686137250a3dde9ec3bf6d9c2990962dec9f6607dd43bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e693d7ee7997b7237c089b3802c2a6b7d885372a548a6c96d101271034d9f1c6->leave($__internal_e693d7ee7997b7237c089b3802c2a6b7d885372a548a6c96d101271034d9f1c6_prof);

        
        $__internal_8760f07d522f3af9686137250a3dde9ec3bf6d9c2990962dec9f6607dd43bae2->leave($__internal_8760f07d522f3af9686137250a3dde9ec3bf6d9c2990962dec9f6607dd43bae2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@User/Group/show_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\show_content.html.twig");
    }
}
