<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_46a4192675cea7b5ffe245bec0ecf7c40267a587f293a27d1e9272b84ddc0966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07d69264f6185e68efa10f1a3a23c119fa6334a179117d1ade9efd49b168f444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d69264f6185e68efa10f1a3a23c119fa6334a179117d1ade9efd49b168f444->enter($__internal_07d69264f6185e68efa10f1a3a23c119fa6334a179117d1ade9efd49b168f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_1c1ecb1db0dd5f5a170e5f45243de6da3d71b0eb660ae5c7d1cf165667336137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1ecb1db0dd5f5a170e5f45243de6da3d71b0eb660ae5c7d1cf165667336137->enter($__internal_1c1ecb1db0dd5f5a170e5f45243de6da3d71b0eb660ae5c7d1cf165667336137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d69264f6185e68efa10f1a3a23c119fa6334a179117d1ade9efd49b168f444->leave($__internal_07d69264f6185e68efa10f1a3a23c119fa6334a179117d1ade9efd49b168f444_prof);

        
        $__internal_1c1ecb1db0dd5f5a170e5f45243de6da3d71b0eb660ae5c7d1cf165667336137->leave($__internal_1c1ecb1db0dd5f5a170e5f45243de6da3d71b0eb660ae5c7d1cf165667336137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c24e1435b8f8aac5103f5cb441ee534709b05bd25e9e9d2bcb0b013978ddeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c24e1435b8f8aac5103f5cb441ee534709b05bd25e9e9d2bcb0b013978ddeaf->enter($__internal_4c24e1435b8f8aac5103f5cb441ee534709b05bd25e9e9d2bcb0b013978ddeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de80876162dd17136fdb0ab1cb9b9e3486402851a3cb22bc3c55f52f81ee7022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de80876162dd17136fdb0ab1cb9b9e3486402851a3cb22bc3c55f52f81ee7022->enter($__internal_de80876162dd17136fdb0ab1cb9b9e3486402851a3cb22bc3c55f52f81ee7022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_de80876162dd17136fdb0ab1cb9b9e3486402851a3cb22bc3c55f52f81ee7022->leave($__internal_de80876162dd17136fdb0ab1cb9b9e3486402851a3cb22bc3c55f52f81ee7022_prof);

        
        $__internal_4c24e1435b8f8aac5103f5cb441ee534709b05bd25e9e9d2bcb0b013978ddeaf->leave($__internal_4c24e1435b8f8aac5103f5cb441ee534709b05bd25e9e9d2bcb0b013978ddeaf_prof);

    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
        $__internal_96030f35ac00febb92782d4d243a6cd005727f8eeb8a5f3afbc8b328a4cc1801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96030f35ac00febb92782d4d243a6cd005727f8eeb8a5f3afbc8b328a4cc1801->enter($__internal_96030f35ac00febb92782d4d243a6cd005727f8eeb8a5f3afbc8b328a4cc1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_359a73918844dc215bbedd7941211f2c58fde8531230f1fa66a7c36fcbd9b2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359a73918844dc215bbedd7941211f2c58fde8531230f1fa66a7c36fcbd9b2c9->enter($__internal_359a73918844dc215bbedd7941211f2c58fde8531230f1fa66a7c36fcbd9b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 7
        echo "    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
";
        
        $__internal_359a73918844dc215bbedd7941211f2c58fde8531230f1fa66a7c36fcbd9b2c9->leave($__internal_359a73918844dc215bbedd7941211f2c58fde8531230f1fa66a7c36fcbd9b2c9_prof);

        
        $__internal_96030f35ac00febb92782d4d243a6cd005727f8eeb8a5f3afbc8b328a4cc1801->leave($__internal_96030f35ac00febb92782d4d243a6cd005727f8eeb8a5f3afbc8b328a4cc1801_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
{% block footer %}
    <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
   <!-- Footer -->
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
   </div>
{% endblock %}
", "@User/Security/login.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Security\\login.html.twig");
    }
}
