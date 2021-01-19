<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7423ce5522840af54d00461d7e9f33b83a61497e2bb70ac6ee686016851d0863 extends Twig_Template
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
        $__internal_4aca713b640fe6516c4d7562ae29e8f128ec81648587294feaa818b74b572960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aca713b640fe6516c4d7562ae29e8f128ec81648587294feaa818b74b572960->enter($__internal_4aca713b640fe6516c4d7562ae29e8f128ec81648587294feaa818b74b572960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_16899a0f6e80ded72a5cea57c247e4d84bd983e45e50115fdc0b09f38825a781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16899a0f6e80ded72a5cea57c247e4d84bd983e45e50115fdc0b09f38825a781->enter($__internal_16899a0f6e80ded72a5cea57c247e4d84bd983e45e50115fdc0b09f38825a781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4aca713b640fe6516c4d7562ae29e8f128ec81648587294feaa818b74b572960->leave($__internal_4aca713b640fe6516c4d7562ae29e8f128ec81648587294feaa818b74b572960_prof);

        
        $__internal_16899a0f6e80ded72a5cea57c247e4d84bd983e45e50115fdc0b09f38825a781->leave($__internal_16899a0f6e80ded72a5cea57c247e4d84bd983e45e50115fdc0b09f38825a781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
