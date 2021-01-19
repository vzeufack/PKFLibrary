<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_59d538d726e70766cfb7b9bc3b191f670e8a256abfbc3656d9b60b1ab0386a80 extends Twig_Template
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
        $__internal_f54db119475503efdcfc6ebbb79da2adc37df0d0384f4cc221913f19799afa70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54db119475503efdcfc6ebbb79da2adc37df0d0384f4cc221913f19799afa70->enter($__internal_f54db119475503efdcfc6ebbb79da2adc37df0d0384f4cc221913f19799afa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4277dd6e3f60d6645b9e5f55a8bbdd67e172f65f8a1eb719e7aff9d7be1b8aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4277dd6e3f60d6645b9e5f55a8bbdd67e172f65f8a1eb719e7aff9d7be1b8aaf->enter($__internal_4277dd6e3f60d6645b9e5f55a8bbdd67e172f65f8a1eb719e7aff9d7be1b8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f54db119475503efdcfc6ebbb79da2adc37df0d0384f4cc221913f19799afa70->leave($__internal_f54db119475503efdcfc6ebbb79da2adc37df0d0384f4cc221913f19799afa70_prof);

        
        $__internal_4277dd6e3f60d6645b9e5f55a8bbdd67e172f65f8a1eb719e7aff9d7be1b8aaf->leave($__internal_4277dd6e3f60d6645b9e5f55a8bbdd67e172f65f8a1eb719e7aff9d7be1b8aaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
