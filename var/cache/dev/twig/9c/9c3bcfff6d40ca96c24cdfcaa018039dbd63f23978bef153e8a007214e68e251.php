<?php

/* UserBundle:Group:edit_content.html.twig */
class __TwigTemplate_0ad65841dcd7a4752ee43f1dc66e4736b2c38e160f61bb46d6f1a7e5c8cfdbd0 extends Twig_Template
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
        $__internal_8bf05feb8b312f7cf9ca88ab836e5927e7fb231c24051d5823a6ba3ae5e3688c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf05feb8b312f7cf9ca88ab836e5927e7fb231c24051d5823a6ba3ae5e3688c->enter($__internal_8bf05feb8b312f7cf9ca88ab836e5927e7fb231c24051d5823a6ba3ae5e3688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit_content.html.twig"));

        $__internal_fe1d7a94fcf5d9c5af90988c09b62379a3522c7b19fb5f0569f6716fa8b161f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1d7a94fcf5d9c5af90988c09b62379a3522c7b19fb5f0569f6716fa8b161f2->enter($__internal_fe1d7a94fcf5d9c5af90988c09b62379a3522c7b19fb5f0569f6716fa8b161f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8bf05feb8b312f7cf9ca88ab836e5927e7fb231c24051d5823a6ba3ae5e3688c->leave($__internal_8bf05feb8b312f7cf9ca88ab836e5927e7fb231c24051d5823a6ba3ae5e3688c_prof);

        
        $__internal_fe1d7a94fcf5d9c5af90988c09b62379a3522c7b19fb5f0569f6716fa8b161f2->leave($__internal_fe1d7a94fcf5d9c5af90988c09b62379a3522c7b19fb5f0569f6716fa8b161f2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "UserBundle:Group:edit_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/edit_content.html.twig");
    }
}
