<?php

/* @User/Group/new.html.twig */
class __TwigTemplate_0dcb5560fc42d604167eb71eb7601a7c218eaef61847cf9d0aeb5416548dfc52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Group/new.html.twig", 1);
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
        $__internal_6189b0e87714dce32a919cdef1f920ac0003f18297177002390d0af07d626f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6189b0e87714dce32a919cdef1f920ac0003f18297177002390d0af07d626f5e->enter($__internal_6189b0e87714dce32a919cdef1f920ac0003f18297177002390d0af07d626f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $__internal_c4e4109e59b2d207dbaf3c7c5a1e962e763d814b1c75b1bdf48d756fb638aba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e4109e59b2d207dbaf3c7c5a1e962e763d814b1c75b1bdf48d756fb638aba3->enter($__internal_c4e4109e59b2d207dbaf3c7c5a1e962e763d814b1c75b1bdf48d756fb638aba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6189b0e87714dce32a919cdef1f920ac0003f18297177002390d0af07d626f5e->leave($__internal_6189b0e87714dce32a919cdef1f920ac0003f18297177002390d0af07d626f5e_prof);

        
        $__internal_c4e4109e59b2d207dbaf3c7c5a1e962e763d814b1c75b1bdf48d756fb638aba3->leave($__internal_c4e4109e59b2d207dbaf3c7c5a1e962e763d814b1c75b1bdf48d756fb638aba3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1edd2050d2fd2789ffb33fe0bdda2069c0f29e2825b32c43614eb32da198905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1edd2050d2fd2789ffb33fe0bdda2069c0f29e2825b32c43614eb32da198905->enter($__internal_b1edd2050d2fd2789ffb33fe0bdda2069c0f29e2825b32c43614eb32da198905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5f200041dce4076344e7f7645a00b5838dc103bce06aeddd674bbc4b3a804dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f200041dce4076344e7f7645a00b5838dc103bce06aeddd674bbc4b3a804dd->enter($__internal_f5f200041dce4076344e7f7645a00b5838dc103bce06aeddd674bbc4b3a804dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@User/Group/new.html.twig", 4)->display($context);
        
        $__internal_f5f200041dce4076344e7f7645a00b5838dc103bce06aeddd674bbc4b3a804dd->leave($__internal_f5f200041dce4076344e7f7645a00b5838dc103bce06aeddd674bbc4b3a804dd_prof);

        
        $__internal_b1edd2050d2fd2789ffb33fe0bdda2069c0f29e2825b32c43614eb32da198905->leave($__internal_b1edd2050d2fd2789ffb33fe0bdda2069c0f29e2825b32c43614eb32da198905_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Group/new.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\new.html.twig");
    }
}
