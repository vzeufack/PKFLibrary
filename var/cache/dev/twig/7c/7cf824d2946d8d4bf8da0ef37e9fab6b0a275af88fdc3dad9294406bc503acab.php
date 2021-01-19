<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0b56bfbe38bdcae6fa1891d5eec17ec043fac9e1a46223e25d57f69332a81f47 extends Twig_Template
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
        $__internal_dee21d8f07ea046105217a6ce52b16d0198c8a2c714cff72136f1ea53523bf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee21d8f07ea046105217a6ce52b16d0198c8a2c714cff72136f1ea53523bf5b->enter($__internal_dee21d8f07ea046105217a6ce52b16d0198c8a2c714cff72136f1ea53523bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f92ff31720c1368ed1f39a0ddfcb9e52590567fc81ca4ff91432bc51049e963a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92ff31720c1368ed1f39a0ddfcb9e52590567fc81ca4ff91432bc51049e963a->enter($__internal_f92ff31720c1368ed1f39a0ddfcb9e52590567fc81ca4ff91432bc51049e963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dee21d8f07ea046105217a6ce52b16d0198c8a2c714cff72136f1ea53523bf5b->leave($__internal_dee21d8f07ea046105217a6ce52b16d0198c8a2c714cff72136f1ea53523bf5b_prof);

        
        $__internal_f92ff31720c1368ed1f39a0ddfcb9e52590567fc81ca4ff91432bc51049e963a->leave($__internal_f92ff31720c1368ed1f39a0ddfcb9e52590567fc81ca4ff91432bc51049e963a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
