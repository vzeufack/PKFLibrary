<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5a24d5d5f96e7242cead51604b14f86db7ac63a5b7f2c5d7258ccb3b7d16cb35 extends Twig_Template
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
        $__internal_653ad0b02ea657e243d6ed9576086a4d631300a56f237e4ec3070dfe8d6123e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653ad0b02ea657e243d6ed9576086a4d631300a56f237e4ec3070dfe8d6123e8->enter($__internal_653ad0b02ea657e243d6ed9576086a4d631300a56f237e4ec3070dfe8d6123e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c0f5dde8387860d128d55b370fb2e904ad5ccc10634323380a521ba3140914cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f5dde8387860d128d55b370fb2e904ad5ccc10634323380a521ba3140914cd->enter($__internal_c0f5dde8387860d128d55b370fb2e904ad5ccc10634323380a521ba3140914cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_653ad0b02ea657e243d6ed9576086a4d631300a56f237e4ec3070dfe8d6123e8->leave($__internal_653ad0b02ea657e243d6ed9576086a4d631300a56f237e4ec3070dfe8d6123e8_prof);

        
        $__internal_c0f5dde8387860d128d55b370fb2e904ad5ccc10634323380a521ba3140914cd->leave($__internal_c0f5dde8387860d128d55b370fb2e904ad5ccc10634323380a521ba3140914cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
