<?php

/* UserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_b8573a2582677d2d4d831fdfe70a567fd9d84b02ae1e84e41e06fadbe26d189e extends Twig_Template
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
        $__internal_b5983807da093c9da711e3994faddbc68748fc8563a31efb1f4cb51eb98382a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5983807da093c9da711e3994faddbc68748fc8563a31efb1f4cb51eb98382a9->enter($__internal_b5983807da093c9da711e3994faddbc68748fc8563a31efb1f4cb51eb98382a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_563f6b7ebc965585fc51b1b25365e2cc99506d8b5bbbd8ea6b4bfa3a037d41f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563f6b7ebc965585fc51b1b25365e2cc99506d8b5bbbd8ea6b4bfa3a037d41f5->enter($__internal_563f6b7ebc965585fc51b1b25365e2cc99506d8b5bbbd8ea6b4bfa3a037d41f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password_content.html.twig"));

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
        
        $__internal_b5983807da093c9da711e3994faddbc68748fc8563a31efb1f4cb51eb98382a9->leave($__internal_b5983807da093c9da711e3994faddbc68748fc8563a31efb1f4cb51eb98382a9_prof);

        
        $__internal_563f6b7ebc965585fc51b1b25365e2cc99506d8b5bbbd8ea6b4bfa3a037d41f5->leave($__internal_563f6b7ebc965585fc51b1b25365e2cc99506d8b5bbbd8ea6b4bfa3a037d41f5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password_content.html.twig";
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
", "UserBundle:ChangePassword:change_password_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
