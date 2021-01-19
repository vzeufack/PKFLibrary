<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_48e319b6071fd4d6659594acdf11aac7506d4f8d8bd60572aaa65f2511f844f1 extends Twig_Template
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
        $__internal_7befd8f9f647776a09615895e920131c2b4c98ca8364ff6f940577e796dfec6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7befd8f9f647776a09615895e920131c2b4c98ca8364ff6f940577e796dfec6f->enter($__internal_7befd8f9f647776a09615895e920131c2b4c98ca8364ff6f940577e796dfec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0d65bed6f9a4eb353e8ed9645d79e566e00ab5f13a34fd356171e21cc0ab09ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d65bed6f9a4eb353e8ed9645d79e566e00ab5f13a34fd356171e21cc0ab09ec->enter($__internal_0d65bed6f9a4eb353e8ed9645d79e566e00ab5f13a34fd356171e21cc0ab09ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7befd8f9f647776a09615895e920131c2b4c98ca8364ff6f940577e796dfec6f->leave($__internal_7befd8f9f647776a09615895e920131c2b4c98ca8364ff6f940577e796dfec6f_prof);

        
        $__internal_0d65bed6f9a4eb353e8ed9645d79e566e00ab5f13a34fd356171e21cc0ab09ec->leave($__internal_0d65bed6f9a4eb353e8ed9645d79e566e00ab5f13a34fd356171e21cc0ab09ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
