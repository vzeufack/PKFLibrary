<?php

/* @User/Resetting/reset_content.html.twig */
class __TwigTemplate_4282cc60cd8fbabead604641bcb060d7a38904f065fb30708169f09c678e4871 extends Twig_Template
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
        $__internal_acf5de4eec97c13110f9a52e9e926c46e0ac60fc43559cccdaa193d97178e9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf5de4eec97c13110f9a52e9e926c46e0ac60fc43559cccdaa193d97178e9be->enter($__internal_acf5de4eec97c13110f9a52e9e926c46e0ac60fc43559cccdaa193d97178e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        $__internal_1b0cef6bc6b3189aa8692ff1b9c52f0bfb724cabc99c6ed628fc2eb2f438aa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0cef6bc6b3189aa8692ff1b9c52f0bfb724cabc99c6ed628fc2eb2f438aa94->enter($__internal_1b0cef6bc6b3189aa8692ff1b9c52f0bfb724cabc99c6ed628fc2eb2f438aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_acf5de4eec97c13110f9a52e9e926c46e0ac60fc43559cccdaa193d97178e9be->leave($__internal_acf5de4eec97c13110f9a52e9e926c46e0ac60fc43559cccdaa193d97178e9be_prof);

        
        $__internal_1b0cef6bc6b3189aa8692ff1b9c52f0bfb724cabc99c6ed628fc2eb2f438aa94->leave($__internal_1b0cef6bc6b3189aa8692ff1b9c52f0bfb724cabc99c6ed628fc2eb2f438aa94_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@User/Resetting/reset_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\reset_content.html.twig");
    }
}
