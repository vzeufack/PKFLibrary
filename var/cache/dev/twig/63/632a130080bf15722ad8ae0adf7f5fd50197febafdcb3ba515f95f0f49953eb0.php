<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_dc50e93c79aa8b9ef8844655b84bc84a6e71975a408a38a6631344056a0ea91e extends Twig_Template
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
        $__internal_926c948f2d235b892721e078516697a66b2361957bd5d56c37f71f9a30dab655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926c948f2d235b892721e078516697a66b2361957bd5d56c37f71f9a30dab655->enter($__internal_926c948f2d235b892721e078516697a66b2361957bd5d56c37f71f9a30dab655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_57225db9d0361acd94c40ebb304be7537643fa77d87be3296e854d4e91d46a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57225db9d0361acd94c40ebb304be7537643fa77d87be3296e854d4e91d46a00->enter($__internal_57225db9d0361acd94c40ebb304be7537643fa77d87be3296e854d4e91d46a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_926c948f2d235b892721e078516697a66b2361957bd5d56c37f71f9a30dab655->leave($__internal_926c948f2d235b892721e078516697a66b2361957bd5d56c37f71f9a30dab655_prof);

        
        $__internal_57225db9d0361acd94c40ebb304be7537643fa77d87be3296e854d4e91d46a00->leave($__internal_57225db9d0361acd94c40ebb304be7537643fa77d87be3296e854d4e91d46a00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
