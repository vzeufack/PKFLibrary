<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_747381f98dad0738e636f15a4f1833f831e87b8de6c8c01d330a69d248d13e99 extends Twig_Template
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
        $__internal_91f6344d5b4d17cd56b66ef207cdd688e20e065648251e096567476f766c96af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f6344d5b4d17cd56b66ef207cdd688e20e065648251e096567476f766c96af->enter($__internal_91f6344d5b4d17cd56b66ef207cdd688e20e065648251e096567476f766c96af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2daad052d5b26f0739776a44ce706212f3e64e815d7bac390d8db9cf47692c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daad052d5b26f0739776a44ce706212f3e64e815d7bac390d8db9cf47692c0d->enter($__internal_2daad052d5b26f0739776a44ce706212f3e64e815d7bac390d8db9cf47692c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_91f6344d5b4d17cd56b66ef207cdd688e20e065648251e096567476f766c96af->leave($__internal_91f6344d5b4d17cd56b66ef207cdd688e20e065648251e096567476f766c96af_prof);

        
        $__internal_2daad052d5b26f0739776a44ce706212f3e64e815d7bac390d8db9cf47692c0d->leave($__internal_2daad052d5b26f0739776a44ce706212f3e64e815d7bac390d8db9cf47692c0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
