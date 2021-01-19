<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fa42a10b904de594d7107a6b10bb8851ef16b5a5b0254caa6938a633beee656b extends Twig_Template
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
        $__internal_0c8593acedd34a6ba30f172b92524324cd31efaf4bc34f8240b0ef3ab7767b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8593acedd34a6ba30f172b92524324cd31efaf4bc34f8240b0ef3ab7767b95->enter($__internal_0c8593acedd34a6ba30f172b92524324cd31efaf4bc34f8240b0ef3ab7767b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ea73578c0f3d4b82d482a37c862ec003e944c99a7b185b7333fd252fe62763a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73578c0f3d4b82d482a37c862ec003e944c99a7b185b7333fd252fe62763a5->enter($__internal_ea73578c0f3d4b82d482a37c862ec003e944c99a7b185b7333fd252fe62763a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0c8593acedd34a6ba30f172b92524324cd31efaf4bc34f8240b0ef3ab7767b95->leave($__internal_0c8593acedd34a6ba30f172b92524324cd31efaf4bc34f8240b0ef3ab7767b95_prof);

        
        $__internal_ea73578c0f3d4b82d482a37c862ec003e944c99a7b185b7333fd252fe62763a5->leave($__internal_ea73578c0f3d4b82d482a37c862ec003e944c99a7b185b7333fd252fe62763a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
