<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cb82eb760abb9ffd9199adb8466a07fd55a2ab630535d139a9546fbaed9da4a2 extends Twig_Template
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
        $__internal_5bb01874f9363f23ac7eae87d3ca92715ee5a29d36e2cf983598f4dfa56b8433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb01874f9363f23ac7eae87d3ca92715ee5a29d36e2cf983598f4dfa56b8433->enter($__internal_5bb01874f9363f23ac7eae87d3ca92715ee5a29d36e2cf983598f4dfa56b8433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_54c05a1e787c44f77649c3f3f7f0ebe857915f98301e17b970345f092c07a480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c05a1e787c44f77649c3f3f7f0ebe857915f98301e17b970345f092c07a480->enter($__internal_54c05a1e787c44f77649c3f3f7f0ebe857915f98301e17b970345f092c07a480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5bb01874f9363f23ac7eae87d3ca92715ee5a29d36e2cf983598f4dfa56b8433->leave($__internal_5bb01874f9363f23ac7eae87d3ca92715ee5a29d36e2cf983598f4dfa56b8433_prof);

        
        $__internal_54c05a1e787c44f77649c3f3f7f0ebe857915f98301e17b970345f092c07a480->leave($__internal_54c05a1e787c44f77649c3f3f7f0ebe857915f98301e17b970345f092c07a480_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
