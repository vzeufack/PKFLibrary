<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_112f6c7650f0c5fd130427f6ab2d9932f18b3b687f399a5a136c0b13603b61b4 extends Twig_Template
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
        $__internal_68b2d578d89e0a57b73b10ff69eae700a01d55d7f7eb12084f7e6b6f6df61e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b2d578d89e0a57b73b10ff69eae700a01d55d7f7eb12084f7e6b6f6df61e9b->enter($__internal_68b2d578d89e0a57b73b10ff69eae700a01d55d7f7eb12084f7e6b6f6df61e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d5b7341cfadeec3333aad56670bc87e5c94fc5f8994b24667bad792003aaf29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b7341cfadeec3333aad56670bc87e5c94fc5f8994b24667bad792003aaf29c->enter($__internal_d5b7341cfadeec3333aad56670bc87e5c94fc5f8994b24667bad792003aaf29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_68b2d578d89e0a57b73b10ff69eae700a01d55d7f7eb12084f7e6b6f6df61e9b->leave($__internal_68b2d578d89e0a57b73b10ff69eae700a01d55d7f7eb12084f7e6b6f6df61e9b_prof);

        
        $__internal_d5b7341cfadeec3333aad56670bc87e5c94fc5f8994b24667bad792003aaf29c->leave($__internal_d5b7341cfadeec3333aad56670bc87e5c94fc5f8994b24667bad792003aaf29c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
