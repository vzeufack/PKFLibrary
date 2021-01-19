<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ce0f6b7a71e7102bf4aea37ef0fbdf13395ca826f4b37d60c11f24270480ec0e extends Twig_Template
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
        $__internal_d0b5dc5c3e34ac43609d8ca132764b42e00215df29eb4e8f980690e1f5ca12a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b5dc5c3e34ac43609d8ca132764b42e00215df29eb4e8f980690e1f5ca12a9->enter($__internal_d0b5dc5c3e34ac43609d8ca132764b42e00215df29eb4e8f980690e1f5ca12a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_95e7a27e5c32e0dd0ecd73ba761d399a542aa00c7d22069837a657c3aabcbb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e7a27e5c32e0dd0ecd73ba761d399a542aa00c7d22069837a657c3aabcbb38->enter($__internal_95e7a27e5c32e0dd0ecd73ba761d399a542aa00c7d22069837a657c3aabcbb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d0b5dc5c3e34ac43609d8ca132764b42e00215df29eb4e8f980690e1f5ca12a9->leave($__internal_d0b5dc5c3e34ac43609d8ca132764b42e00215df29eb4e8f980690e1f5ca12a9_prof);

        
        $__internal_95e7a27e5c32e0dd0ecd73ba761d399a542aa00c7d22069837a657c3aabcbb38->leave($__internal_95e7a27e5c32e0dd0ecd73ba761d399a542aa00c7d22069837a657c3aabcbb38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
