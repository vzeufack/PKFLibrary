<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c59069c2add3a27ac69295adab435585371d0dac53e85faa3d6707caf6ddc9c7 extends Twig_Template
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
        $__internal_1e4015d9cef61802f8db792976643a53a1aee18a7dc9a782ee070087af0038b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4015d9cef61802f8db792976643a53a1aee18a7dc9a782ee070087af0038b7->enter($__internal_1e4015d9cef61802f8db792976643a53a1aee18a7dc9a782ee070087af0038b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_36cd16a6403a5cae284bbc9dbc51dcfdda04c4a153d5c92f916e8c45eeaccb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cd16a6403a5cae284bbc9dbc51dcfdda04c4a153d5c92f916e8c45eeaccb7a->enter($__internal_36cd16a6403a5cae284bbc9dbc51dcfdda04c4a153d5c92f916e8c45eeaccb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1e4015d9cef61802f8db792976643a53a1aee18a7dc9a782ee070087af0038b7->leave($__internal_1e4015d9cef61802f8db792976643a53a1aee18a7dc9a782ee070087af0038b7_prof);

        
        $__internal_36cd16a6403a5cae284bbc9dbc51dcfdda04c4a153d5c92f916e8c45eeaccb7a->leave($__internal_36cd16a6403a5cae284bbc9dbc51dcfdda04c4a153d5c92f916e8c45eeaccb7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
