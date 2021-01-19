<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c40731f4e64d37442f102e0f5df8837592d384e15170e6bbedddf949e3a21e22 extends Twig_Template
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
        $__internal_7239e4b61e773a252bf9249a0f7551b27590c453015f210e52844212825aa2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7239e4b61e773a252bf9249a0f7551b27590c453015f210e52844212825aa2f2->enter($__internal_7239e4b61e773a252bf9249a0f7551b27590c453015f210e52844212825aa2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_494401d7ad662090d74eb8956b41a59d3fd237fb99384aac4599af88c278f95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494401d7ad662090d74eb8956b41a59d3fd237fb99384aac4599af88c278f95d->enter($__internal_494401d7ad662090d74eb8956b41a59d3fd237fb99384aac4599af88c278f95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7239e4b61e773a252bf9249a0f7551b27590c453015f210e52844212825aa2f2->leave($__internal_7239e4b61e773a252bf9249a0f7551b27590c453015f210e52844212825aa2f2_prof);

        
        $__internal_494401d7ad662090d74eb8956b41a59d3fd237fb99384aac4599af88c278f95d->leave($__internal_494401d7ad662090d74eb8956b41a59d3fd237fb99384aac4599af88c278f95d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
