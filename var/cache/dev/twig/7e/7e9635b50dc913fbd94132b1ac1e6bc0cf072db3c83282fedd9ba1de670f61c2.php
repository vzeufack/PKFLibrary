<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2f087dd3ce2e8f272dc58fe616b1db2d2ec078b2bb655a542f38745f4bd801ee extends Twig_Template
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
        $__internal_1c2fab0cdee641f877acab888b4e66fdc79eda9aeebea994196063ee4ec9762d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2fab0cdee641f877acab888b4e66fdc79eda9aeebea994196063ee4ec9762d->enter($__internal_1c2fab0cdee641f877acab888b4e66fdc79eda9aeebea994196063ee4ec9762d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_df801f1a0213fda987d44c1026eac9b5a971639dbe975df66d320924c906f7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df801f1a0213fda987d44c1026eac9b5a971639dbe975df66d320924c906f7b4->enter($__internal_df801f1a0213fda987d44c1026eac9b5a971639dbe975df66d320924c906f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1c2fab0cdee641f877acab888b4e66fdc79eda9aeebea994196063ee4ec9762d->leave($__internal_1c2fab0cdee641f877acab888b4e66fdc79eda9aeebea994196063ee4ec9762d_prof);

        
        $__internal_df801f1a0213fda987d44c1026eac9b5a971639dbe975df66d320924c906f7b4->leave($__internal_df801f1a0213fda987d44c1026eac9b5a971639dbe975df66d320924c906f7b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
