<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_39d5a8648d2410f402192b5c0422f167f165dc04a07fecead28fd79bb485af93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fd76dbd4096061407872d4ab04857f3d2e19b66ec2b52918acb868f8b937c79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd76dbd4096061407872d4ab04857f3d2e19b66ec2b52918acb868f8b937c79d->enter($__internal_fd76dbd4096061407872d4ab04857f3d2e19b66ec2b52918acb868f8b937c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $__internal_d7435557d7d97e0443773c215ee1ebff033a7e428a2fbaad215b45271520c715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7435557d7d97e0443773c215ee1ebff033a7e428a2fbaad215b45271520c715->enter($__internal_d7435557d7d97e0443773c215ee1ebff033a7e428a2fbaad215b45271520c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd76dbd4096061407872d4ab04857f3d2e19b66ec2b52918acb868f8b937c79d->leave($__internal_fd76dbd4096061407872d4ab04857f3d2e19b66ec2b52918acb868f8b937c79d_prof);

        
        $__internal_d7435557d7d97e0443773c215ee1ebff033a7e428a2fbaad215b45271520c715->leave($__internal_d7435557d7d97e0443773c215ee1ebff033a7e428a2fbaad215b45271520c715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b52d948e118a795009861364510eaed733c22e828bdbe6326b05ebc15c9be0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b52d948e118a795009861364510eaed733c22e828bdbe6326b05ebc15c9be0b->enter($__internal_8b52d948e118a795009861364510eaed733c22e828bdbe6326b05ebc15c9be0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44605c4ccfffe2ad4f5edd2819bfb98f344a379805e22a7acf54f14a3e95884a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44605c4ccfffe2ad4f5edd2819bfb98f344a379805e22a7acf54f14a3e95884a->enter($__internal_44605c4ccfffe2ad4f5edd2819bfb98f344a379805e22a7acf54f14a3e95884a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_44605c4ccfffe2ad4f5edd2819bfb98f344a379805e22a7acf54f14a3e95884a->leave($__internal_44605c4ccfffe2ad4f5edd2819bfb98f344a379805e22a7acf54f14a3e95884a_prof);

        
        $__internal_8b52d948e118a795009861364510eaed733c22e828bdbe6326b05ebc15c9be0b->leave($__internal_8b52d948e118a795009861364510eaed733c22e828bdbe6326b05ebc15c9be0b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
