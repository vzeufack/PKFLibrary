<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_249d6bcfc3502d2d7a953a1d356aad810f1379c22f900841ab317ffd637137bd extends Twig_Template
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
        $__internal_cc6c94f50038078a0c78a7ac192b31ed27bca4475f353b60e52fa8e9d7b16dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6c94f50038078a0c78a7ac192b31ed27bca4475f353b60e52fa8e9d7b16dc7->enter($__internal_cc6c94f50038078a0c78a7ac192b31ed27bca4475f353b60e52fa8e9d7b16dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_399824b7df6e4c6bd6ac1a3c1ef62932d76d7c4eeba5f6e4a893ddd52a3dbad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399824b7df6e4c6bd6ac1a3c1ef62932d76d7c4eeba5f6e4a893ddd52a3dbad4->enter($__internal_399824b7df6e4c6bd6ac1a3c1ef62932d76d7c4eeba5f6e4a893ddd52a3dbad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cc6c94f50038078a0c78a7ac192b31ed27bca4475f353b60e52fa8e9d7b16dc7->leave($__internal_cc6c94f50038078a0c78a7ac192b31ed27bca4475f353b60e52fa8e9d7b16dc7_prof);

        
        $__internal_399824b7df6e4c6bd6ac1a3c1ef62932d76d7c4eeba5f6e4a893ddd52a3dbad4->leave($__internal_399824b7df6e4c6bd6ac1a3c1ef62932d76d7c4eeba5f6e4a893ddd52a3dbad4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
