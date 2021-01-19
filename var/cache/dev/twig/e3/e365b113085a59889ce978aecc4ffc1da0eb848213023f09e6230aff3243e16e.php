<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_14892dc33061ef16a56a062e12828d361037618b91ae80ba97689fd1161acbaa extends Twig_Template
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
        $__internal_a912cfe43663c625f4001cfdf0b68817c2fb1aa70d60143c1f677ff589d65f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a912cfe43663c625f4001cfdf0b68817c2fb1aa70d60143c1f677ff589d65f9a->enter($__internal_a912cfe43663c625f4001cfdf0b68817c2fb1aa70d60143c1f677ff589d65f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7ad93b9bb3c4fcfab72a468647d759f01d5ace8050a93cad699890a2ccdb210f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad93b9bb3c4fcfab72a468647d759f01d5ace8050a93cad699890a2ccdb210f->enter($__internal_7ad93b9bb3c4fcfab72a468647d759f01d5ace8050a93cad699890a2ccdb210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a912cfe43663c625f4001cfdf0b68817c2fb1aa70d60143c1f677ff589d65f9a->leave($__internal_a912cfe43663c625f4001cfdf0b68817c2fb1aa70d60143c1f677ff589d65f9a_prof);

        
        $__internal_7ad93b9bb3c4fcfab72a468647d759f01d5ace8050a93cad699890a2ccdb210f->leave($__internal_7ad93b9bb3c4fcfab72a468647d759f01d5ace8050a93cad699890a2ccdb210f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
