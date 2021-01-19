<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_bbcf41a0a695d9ce72247bdac1c4c6d7da589f2048bb9be0a4ae2282194421cd extends Twig_Template
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
        $__internal_0514b39e98e59574a507f97e4f5ba5cf5c0b286df8f11e031a6c19d8a27fa7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0514b39e98e59574a507f97e4f5ba5cf5c0b286df8f11e031a6c19d8a27fa7ae->enter($__internal_0514b39e98e59574a507f97e4f5ba5cf5c0b286df8f11e031a6c19d8a27fa7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5af5350ec7ce5be70d990c1e3470e5eec036317bcb90868d2bd4bf668e2be332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af5350ec7ce5be70d990c1e3470e5eec036317bcb90868d2bd4bf668e2be332->enter($__internal_5af5350ec7ce5be70d990c1e3470e5eec036317bcb90868d2bd4bf668e2be332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0514b39e98e59574a507f97e4f5ba5cf5c0b286df8f11e031a6c19d8a27fa7ae->leave($__internal_0514b39e98e59574a507f97e4f5ba5cf5c0b286df8f11e031a6c19d8a27fa7ae_prof);

        
        $__internal_5af5350ec7ce5be70d990c1e3470e5eec036317bcb90868d2bd4bf668e2be332->leave($__internal_5af5350ec7ce5be70d990c1e3470e5eec036317bcb90868d2bd4bf668e2be332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
