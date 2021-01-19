<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a9751e1b0e3bf234d18af7fb37089485472473bc4189193a3667296d67738900 extends Twig_Template
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
        $__internal_4d3146fb42af2c99c6b5af260a84e96c54d7e091537f81bcfa8ba28e9475079e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3146fb42af2c99c6b5af260a84e96c54d7e091537f81bcfa8ba28e9475079e->enter($__internal_4d3146fb42af2c99c6b5af260a84e96c54d7e091537f81bcfa8ba28e9475079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_225ab3612ad8bea5d3ec103be4df8e1a3a76e8e95653e6ebc341a8df8f199b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225ab3612ad8bea5d3ec103be4df8e1a3a76e8e95653e6ebc341a8df8f199b81->enter($__internal_225ab3612ad8bea5d3ec103be4df8e1a3a76e8e95653e6ebc341a8df8f199b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4d3146fb42af2c99c6b5af260a84e96c54d7e091537f81bcfa8ba28e9475079e->leave($__internal_4d3146fb42af2c99c6b5af260a84e96c54d7e091537f81bcfa8ba28e9475079e_prof);

        
        $__internal_225ab3612ad8bea5d3ec103be4df8e1a3a76e8e95653e6ebc341a8df8f199b81->leave($__internal_225ab3612ad8bea5d3ec103be4df8e1a3a76e8e95653e6ebc341a8df8f199b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
