<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ef79bd33bc389dd11f6159b18c6393cb4320d372605c30a9205695002110fcfc extends Twig_Template
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
        $__internal_e6398aeffe6e98d742acec5f4e0cfd26b7aa04f50c9f285444dcc47603c0912e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6398aeffe6e98d742acec5f4e0cfd26b7aa04f50c9f285444dcc47603c0912e->enter($__internal_e6398aeffe6e98d742acec5f4e0cfd26b7aa04f50c9f285444dcc47603c0912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e9e348011a57a8e956acb79410fd6c0b83770864d54419e2be433a94e26f2b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e348011a57a8e956acb79410fd6c0b83770864d54419e2be433a94e26f2b06->enter($__internal_e9e348011a57a8e956acb79410fd6c0b83770864d54419e2be433a94e26f2b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e6398aeffe6e98d742acec5f4e0cfd26b7aa04f50c9f285444dcc47603c0912e->leave($__internal_e6398aeffe6e98d742acec5f4e0cfd26b7aa04f50c9f285444dcc47603c0912e_prof);

        
        $__internal_e9e348011a57a8e956acb79410fd6c0b83770864d54419e2be433a94e26f2b06->leave($__internal_e9e348011a57a8e956acb79410fd6c0b83770864d54419e2be433a94e26f2b06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
