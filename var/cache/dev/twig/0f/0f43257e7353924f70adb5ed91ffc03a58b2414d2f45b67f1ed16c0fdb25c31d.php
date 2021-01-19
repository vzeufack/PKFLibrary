<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_75ce3e43f511702c5b76b056f4ed9c6710ae2b20a7bf6d2d2b0d32431d5e5967 extends Twig_Template
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
        $__internal_e48e3edb959b1b12eb88952cc0992e0f154cfe1379497d1302f5bbf4db6b7ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48e3edb959b1b12eb88952cc0992e0f154cfe1379497d1302f5bbf4db6b7ad1->enter($__internal_e48e3edb959b1b12eb88952cc0992e0f154cfe1379497d1302f5bbf4db6b7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d23641cb19427458f38de434622a5c2e4b3ef8d887295b22cc0f0761693cc3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23641cb19427458f38de434622a5c2e4b3ef8d887295b22cc0f0761693cc3da->enter($__internal_d23641cb19427458f38de434622a5c2e4b3ef8d887295b22cc0f0761693cc3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e48e3edb959b1b12eb88952cc0992e0f154cfe1379497d1302f5bbf4db6b7ad1->leave($__internal_e48e3edb959b1b12eb88952cc0992e0f154cfe1379497d1302f5bbf4db6b7ad1_prof);

        
        $__internal_d23641cb19427458f38de434622a5c2e4b3ef8d887295b22cc0f0761693cc3da->leave($__internal_d23641cb19427458f38de434622a5c2e4b3ef8d887295b22cc0f0761693cc3da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
