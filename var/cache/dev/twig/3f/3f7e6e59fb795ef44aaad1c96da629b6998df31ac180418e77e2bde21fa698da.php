<?php

/* @User/Group/list.html.twig */
class __TwigTemplate_77df556d6b38a10fc1ff0a3ec9c54a58bee6421d6a44c3f10531bd9e1088b2d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Group/list.html.twig", 1);
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
        $__internal_3fbd9a33d399f414545ac47c11ffdf885e42f1660e66a7c1c63abe309a08b779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbd9a33d399f414545ac47c11ffdf885e42f1660e66a7c1c63abe309a08b779->enter($__internal_3fbd9a33d399f414545ac47c11ffdf885e42f1660e66a7c1c63abe309a08b779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $__internal_7aeb2c1e35e21e319487f44439cefa09bc18e3fe089f29128c411a4c8ab074c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeb2c1e35e21e319487f44439cefa09bc18e3fe089f29128c411a4c8ab074c5->enter($__internal_7aeb2c1e35e21e319487f44439cefa09bc18e3fe089f29128c411a4c8ab074c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbd9a33d399f414545ac47c11ffdf885e42f1660e66a7c1c63abe309a08b779->leave($__internal_3fbd9a33d399f414545ac47c11ffdf885e42f1660e66a7c1c63abe309a08b779_prof);

        
        $__internal_7aeb2c1e35e21e319487f44439cefa09bc18e3fe089f29128c411a4c8ab074c5->leave($__internal_7aeb2c1e35e21e319487f44439cefa09bc18e3fe089f29128c411a4c8ab074c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61349bfc5d08855e7056c72e459e862539b707edb9dd930b8273fba18e860abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61349bfc5d08855e7056c72e459e862539b707edb9dd930b8273fba18e860abe->enter($__internal_61349bfc5d08855e7056c72e459e862539b707edb9dd930b8273fba18e860abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4e33a1d538d8128d4c831901f0a9a30221e08da150d1a99bf05c0ca5c9a2639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e33a1d538d8128d4c831901f0a9a30221e08da150d1a99bf05c0ca5c9a2639->enter($__internal_b4e33a1d538d8128d4c831901f0a9a30221e08da150d1a99bf05c0ca5c9a2639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@User/Group/list.html.twig", 4)->display($context);
        
        $__internal_b4e33a1d538d8128d4c831901f0a9a30221e08da150d1a99bf05c0ca5c9a2639->leave($__internal_b4e33a1d538d8128d4c831901f0a9a30221e08da150d1a99bf05c0ca5c9a2639_prof);

        
        $__internal_61349bfc5d08855e7056c72e459e862539b707edb9dd930b8273fba18e860abe->leave($__internal_61349bfc5d08855e7056c72e459e862539b707edb9dd930b8273fba18e860abe_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Group/list.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Group\\list.html.twig");
    }
}
