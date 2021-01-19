<?php

/* @User/Profile/edit_content.html.twig */
class __TwigTemplate_b1b1ecc1c897df87161604840bf929cdac70868d03f5ac4dba81fd4647156fdc extends Twig_Template
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
        $__internal_33755743d6de9bf3f7c1ca8a8a36d33aec0ef39b194cea0a5610f717d400d693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33755743d6de9bf3f7c1ca8a8a36d33aec0ef39b194cea0a5610f717d400d693->enter($__internal_33755743d6de9bf3f7c1ca8a8a36d33aec0ef39b194cea0a5610f717d400d693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit_content.html.twig"));

        $__internal_8f6dec8680da1aafa17fe9ae35bdfe6e809cd2180de2339241998130a3f8b739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6dec8680da1aafa17fe9ae35bdfe6e809cd2180de2339241998130a3f8b739->enter($__internal_8f6dec8680da1aafa17fe9ae35bdfe6e809cd2180de2339241998130a3f8b739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_33755743d6de9bf3f7c1ca8a8a36d33aec0ef39b194cea0a5610f717d400d693->leave($__internal_33755743d6de9bf3f7c1ca8a8a36d33aec0ef39b194cea0a5610f717d400d693_prof);

        
        $__internal_8f6dec8680da1aafa17fe9ae35bdfe6e809cd2180de2339241998130a3f8b739->leave($__internal_8f6dec8680da1aafa17fe9ae35bdfe6e809cd2180de2339241998130a3f8b739_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@User/Profile/edit_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Profile\\edit_content.html.twig");
    }
}
