<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1823e26591a6172fefa42a95440fe600e9c30e7ed849a9a42a4b688bc9c068f3 extends Twig_Template
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
        $__internal_9180baab63bc3a058aff40999bed5c89dd38417534943ecd1555cc249dea4fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9180baab63bc3a058aff40999bed5c89dd38417534943ecd1555cc249dea4fc9->enter($__internal_9180baab63bc3a058aff40999bed5c89dd38417534943ecd1555cc249dea4fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_11adf4c88edc9b01fc5ee9d068367f872d77a2386ad17ba23201fae6e6a913bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11adf4c88edc9b01fc5ee9d068367f872d77a2386ad17ba23201fae6e6a913bf->enter($__internal_11adf4c88edc9b01fc5ee9d068367f872d77a2386ad17ba23201fae6e6a913bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9180baab63bc3a058aff40999bed5c89dd38417534943ecd1555cc249dea4fc9->leave($__internal_9180baab63bc3a058aff40999bed5c89dd38417534943ecd1555cc249dea4fc9_prof);

        
        $__internal_11adf4c88edc9b01fc5ee9d068367f872d77a2386ad17ba23201fae6e6a913bf->leave($__internal_11adf4c88edc9b01fc5ee9d068367f872d77a2386ad17ba23201fae6e6a913bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
