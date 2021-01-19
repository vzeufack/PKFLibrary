<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af22b3bb5fbd8c16791abafa2b9e8ce4fd47f4051bb96ed5e6134b4ad1c5baed extends Twig_Template
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
        $__internal_5e9e15ecac74295455884c25137aca820cf6bb0a69c6188d6f7c81740b224c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9e15ecac74295455884c25137aca820cf6bb0a69c6188d6f7c81740b224c28->enter($__internal_5e9e15ecac74295455884c25137aca820cf6bb0a69c6188d6f7c81740b224c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e5dc1223227dcff09a393e743163d68580ed627d86ed46f690686e8e9b4de6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dc1223227dcff09a393e743163d68580ed627d86ed46f690686e8e9b4de6d3->enter($__internal_e5dc1223227dcff09a393e743163d68580ed627d86ed46f690686e8e9b4de6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5e9e15ecac74295455884c25137aca820cf6bb0a69c6188d6f7c81740b224c28->leave($__internal_5e9e15ecac74295455884c25137aca820cf6bb0a69c6188d6f7c81740b224c28_prof);

        
        $__internal_e5dc1223227dcff09a393e743163d68580ed627d86ed46f690686e8e9b4de6d3->leave($__internal_e5dc1223227dcff09a393e743163d68580ed627d86ed46f690686e8e9b4de6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
