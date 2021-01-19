<?php

/* @User/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_6eea900a597ce6e624ee10aa77d7b3961fd84b3c36096d403dff3a4edb661d2c extends Twig_Template
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
        $__internal_26090ceedec9e35cc86eee24d98017719445f1f1854b515536d4cc9217fa952c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26090ceedec9e35cc86eee24d98017719445f1f1854b515536d4cc9217fa952c->enter($__internal_26090ceedec9e35cc86eee24d98017719445f1f1854b515536d4cc9217fa952c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/change_password_content.html.twig"));

        $__internal_ef88a10d0cb4d4d4cf0316d2cf0348eef3016b2825400738cec8c95a5878a3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88a10d0cb4d4d4cf0316d2cf0348eef3016b2825400738cec8c95a5878a3f1->enter($__internal_ef88a10d0cb4d4d4cf0316d2cf0348eef3016b2825400738cec8c95a5878a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_26090ceedec9e35cc86eee24d98017719445f1f1854b515536d4cc9217fa952c->leave($__internal_26090ceedec9e35cc86eee24d98017719445f1f1854b515536d4cc9217fa952c_prof);

        
        $__internal_ef88a10d0cb4d4d4cf0316d2cf0348eef3016b2825400738cec8c95a5878a3f1->leave($__internal_ef88a10d0cb4d4d4cf0316d2cf0348eef3016b2825400738cec8c95a5878a3f1_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@User/ChangePassword/change_password_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\ChangePassword\\change_password_content.html.twig");
    }
}
