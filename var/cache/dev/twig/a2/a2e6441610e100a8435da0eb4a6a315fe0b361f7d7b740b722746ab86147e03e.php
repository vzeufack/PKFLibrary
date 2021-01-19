<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_5d8ac11198aa2cf65367adc75c637ae7d4398082de6442a7d479d38479715398 extends Twig_Template
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
        $__internal_0873a23a2677632bb52bb2407fe33943c0e511269b9a399ac56e5c29b0c73b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0873a23a2677632bb52bb2407fe33943c0e511269b9a399ac56e5c29b0c73b79->enter($__internal_0873a23a2677632bb52bb2407fe33943c0e511269b9a399ac56e5c29b0c73b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

        $__internal_7ee4cce3b4dedade56d9497a56d31bf59413d01a4f606b5e157ebea41bc3770d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee4cce3b4dedade56d9497a56d31bf59413d01a4f606b5e157ebea41bc3770d->enter($__internal_7ee4cce3b4dedade56d9497a56d31bf59413d01a4f606b5e157ebea41bc3770d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_0873a23a2677632bb52bb2407fe33943c0e511269b9a399ac56e5c29b0c73b79->leave($__internal_0873a23a2677632bb52bb2407fe33943c0e511269b9a399ac56e5c29b0c73b79_prof);

        
        $__internal_7ee4cce3b4dedade56d9497a56d31bf59413d01a4f606b5e157ebea41bc3770d->leave($__internal_7ee4cce3b4dedade56d9497a56d31bf59413d01a4f606b5e157ebea41bc3770d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
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
", "UserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
