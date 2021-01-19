<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_6dd63ff054d85ea27921f20798dbe9d4068621f2617107ecd864eadfd4e64647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522ce22168c77e178516e1c30e0a5d6d7ff547debf04884637a45bba84d080dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522ce22168c77e178516e1c30e0a5d6d7ff547debf04884637a45bba84d080dc->enter($__internal_522ce22168c77e178516e1c30e0a5d6d7ff547debf04884637a45bba84d080dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $__internal_9570b0ca1521923938321f558bf01051e7f1a57b9de8586be8c93c05667ddcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9570b0ca1521923938321f558bf01051e7f1a57b9de8586be8c93c05667ddcbe->enter($__internal_9570b0ca1521923938321f558bf01051e7f1a57b9de8586be8c93c05667ddcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522ce22168c77e178516e1c30e0a5d6d7ff547debf04884637a45bba84d080dc->leave($__internal_522ce22168c77e178516e1c30e0a5d6d7ff547debf04884637a45bba84d080dc_prof);

        
        $__internal_9570b0ca1521923938321f558bf01051e7f1a57b9de8586be8c93c05667ddcbe->leave($__internal_9570b0ca1521923938321f558bf01051e7f1a57b9de8586be8c93c05667ddcbe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_437142062f23600e4d53bd1036eea435c83df1e9100c73b80cd246734986ebcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437142062f23600e4d53bd1036eea435c83df1e9100c73b80cd246734986ebcf->enter($__internal_437142062f23600e4d53bd1036eea435c83df1e9100c73b80cd246734986ebcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71b6946ca9fb7126d02239b858b76c8aacddf62caa30dead228b377e8b8c9a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b6946ca9fb7126d02239b858b76c8aacddf62caa30dead228b377e8b8c9a68->enter($__internal_71b6946ca9fb7126d02239b858b76c8aacddf62caa30dead228b377e8b8c9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_71b6946ca9fb7126d02239b858b76c8aacddf62caa30dead228b377e8b8c9a68->leave($__internal_71b6946ca9fb7126d02239b858b76c8aacddf62caa30dead228b377e8b8c9a68_prof);

        
        $__internal_437142062f23600e4d53bd1036eea435c83df1e9100c73b80cd246734986ebcf->leave($__internal_437142062f23600e4d53bd1036eea435c83df1e9100c73b80cd246734986ebcf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
