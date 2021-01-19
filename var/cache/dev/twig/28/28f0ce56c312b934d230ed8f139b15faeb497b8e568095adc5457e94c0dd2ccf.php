<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0a23f15c32ad6106b49558c2601284f4eed4b7ea3c8ac3c69f5980887a3808ba extends Twig_Template
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
        $__internal_822f6b364bcbc70eee9960e96ba2daf5ee2672b0b5c97daa2410fe416bfa33d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822f6b364bcbc70eee9960e96ba2daf5ee2672b0b5c97daa2410fe416bfa33d3->enter($__internal_822f6b364bcbc70eee9960e96ba2daf5ee2672b0b5c97daa2410fe416bfa33d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8094a7c0485a51a6b2916c7fc551565abea1c57d8b3ea63b9a6a7d45238eff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8094a7c0485a51a6b2916c7fc551565abea1c57d8b3ea63b9a6a7d45238eff26->enter($__internal_8094a7c0485a51a6b2916c7fc551565abea1c57d8b3ea63b9a6a7d45238eff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_822f6b364bcbc70eee9960e96ba2daf5ee2672b0b5c97daa2410fe416bfa33d3->leave($__internal_822f6b364bcbc70eee9960e96ba2daf5ee2672b0b5c97daa2410fe416bfa33d3_prof);

        
        $__internal_8094a7c0485a51a6b2916c7fc551565abea1c57d8b3ea63b9a6a7d45238eff26->leave($__internal_8094a7c0485a51a6b2916c7fc551565abea1c57d8b3ea63b9a6a7d45238eff26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
