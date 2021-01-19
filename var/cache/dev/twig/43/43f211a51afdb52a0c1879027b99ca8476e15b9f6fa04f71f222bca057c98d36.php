<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0794f2241827fd048b1a6a20b1eae205b1bb3f45e33c3d95a8e9fe80b5268f23 extends Twig_Template
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
        $__internal_6e0d43dc016f69912216ba1f9645ff197809e256d79090d2e397382662a227f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d43dc016f69912216ba1f9645ff197809e256d79090d2e397382662a227f2->enter($__internal_6e0d43dc016f69912216ba1f9645ff197809e256d79090d2e397382662a227f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_faa8ac82196b07d734cc27f6fca208c718b4d62e23948e4ae555484b1c045ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa8ac82196b07d734cc27f6fca208c718b4d62e23948e4ae555484b1c045ee4->enter($__internal_faa8ac82196b07d734cc27f6fca208c718b4d62e23948e4ae555484b1c045ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6e0d43dc016f69912216ba1f9645ff197809e256d79090d2e397382662a227f2->leave($__internal_6e0d43dc016f69912216ba1f9645ff197809e256d79090d2e397382662a227f2_prof);

        
        $__internal_faa8ac82196b07d734cc27f6fca208c718b4d62e23948e4ae555484b1c045ee4->leave($__internal_faa8ac82196b07d734cc27f6fca208c718b4d62e23948e4ae555484b1c045ee4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
