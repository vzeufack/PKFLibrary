<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_47c3bba6b07e4503ea3ca2c24c27240e1e702458cc5c25c3a0a5629c2acfe98b extends Twig_Template
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
        $__internal_ab7992297be8a0d59064cdd9e961e19e881bdd070880e5e7b2862a7458ad7e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7992297be8a0d59064cdd9e961e19e881bdd070880e5e7b2862a7458ad7e94->enter($__internal_ab7992297be8a0d59064cdd9e961e19e881bdd070880e5e7b2862a7458ad7e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_04a57be8a967e064d7b00c84e32d51a0b6038912b7775cf1d19c005247c2896e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a57be8a967e064d7b00c84e32d51a0b6038912b7775cf1d19c005247c2896e->enter($__internal_04a57be8a967e064d7b00c84e32d51a0b6038912b7775cf1d19c005247c2896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ab7992297be8a0d59064cdd9e961e19e881bdd070880e5e7b2862a7458ad7e94->leave($__internal_ab7992297be8a0d59064cdd9e961e19e881bdd070880e5e7b2862a7458ad7e94_prof);

        
        $__internal_04a57be8a967e064d7b00c84e32d51a0b6038912b7775cf1d19c005247c2896e->leave($__internal_04a57be8a967e064d7b00c84e32d51a0b6038912b7775cf1d19c005247c2896e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
