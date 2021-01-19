<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_63d103e5c41d8e0070a15f634605647d2a31425be858f92e528f49609f29fe14 extends Twig_Template
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
        $__internal_75fb1edd358e9d9fc711262a1a89b545d30c58c04bea5577a0e693c9ca810e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fb1edd358e9d9fc711262a1a89b545d30c58c04bea5577a0e693c9ca810e04->enter($__internal_75fb1edd358e9d9fc711262a1a89b545d30c58c04bea5577a0e693c9ca810e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7184f2cb1af9ea13173b6d1bc62d57842d13130c896365a75ba7b8f83dfa824f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7184f2cb1af9ea13173b6d1bc62d57842d13130c896365a75ba7b8f83dfa824f->enter($__internal_7184f2cb1af9ea13173b6d1bc62d57842d13130c896365a75ba7b8f83dfa824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_75fb1edd358e9d9fc711262a1a89b545d30c58c04bea5577a0e693c9ca810e04->leave($__internal_75fb1edd358e9d9fc711262a1a89b545d30c58c04bea5577a0e693c9ca810e04_prof);

        
        $__internal_7184f2cb1af9ea13173b6d1bc62d57842d13130c896365a75ba7b8f83dfa824f->leave($__internal_7184f2cb1af9ea13173b6d1bc62d57842d13130c896365a75ba7b8f83dfa824f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
