<?php

/* UserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_b620b253181d0000fbfcfb92cade1da258c08786aa50a03d740104703e7a36da extends Twig_Template
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
        $__internal_5c61a1175df82b225bf7f6550467cfd8cfde2fd1736cabe96d36079f830240ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c61a1175df82b225bf7f6550467cfd8cfde2fd1736cabe96d36079f830240ab->enter($__internal_5c61a1175df82b225bf7f6550467cfd8cfde2fd1736cabe96d36079f830240ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset_content.html.twig"));

        $__internal_7cf78563f18a08bc7f39da8815e2fb930b8d3e750911deb968f0018cffe4a312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf78563f18a08bc7f39da8815e2fb930b8d3e750911deb968f0018cffe4a312->enter($__internal_7cf78563f18a08bc7f39da8815e2fb930b8d3e750911deb968f0018cffe4a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_5c61a1175df82b225bf7f6550467cfd8cfde2fd1736cabe96d36079f830240ab->leave($__internal_5c61a1175df82b225bf7f6550467cfd8cfde2fd1736cabe96d36079f830240ab_prof);

        
        $__internal_7cf78563f18a08bc7f39da8815e2fb930b8d3e750911deb968f0018cffe4a312->leave($__internal_7cf78563f18a08bc7f39da8815e2fb930b8d3e750911deb968f0018cffe4a312_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset_content.html.twig";
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
", "UserBundle:Resetting:reset_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
