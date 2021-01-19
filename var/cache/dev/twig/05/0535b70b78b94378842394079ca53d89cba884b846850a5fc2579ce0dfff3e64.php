<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4c8fc45476341f06069a716ae8025c57f2c6df8430a6956360684b822bb1ee21 extends Twig_Template
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
        $__internal_43e5c85f906efd4a4d71df04c03a9a6a7d59c274e4af39af9eb497722fd7031b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e5c85f906efd4a4d71df04c03a9a6a7d59c274e4af39af9eb497722fd7031b->enter($__internal_43e5c85f906efd4a4d71df04c03a9a6a7d59c274e4af39af9eb497722fd7031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f3614b88727d0da937d2c66efecbb0b5bbbc2d46b09b3a745ba21bd8848d2f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3614b88727d0da937d2c66efecbb0b5bbbc2d46b09b3a745ba21bd8848d2f6e->enter($__internal_f3614b88727d0da937d2c66efecbb0b5bbbc2d46b09b3a745ba21bd8848d2f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_43e5c85f906efd4a4d71df04c03a9a6a7d59c274e4af39af9eb497722fd7031b->leave($__internal_43e5c85f906efd4a4d71df04c03a9a6a7d59c274e4af39af9eb497722fd7031b_prof);

        
        $__internal_f3614b88727d0da937d2c66efecbb0b5bbbc2d46b09b3a745ba21bd8848d2f6e->leave($__internal_f3614b88727d0da937d2c66efecbb0b5bbbc2d46b09b3a745ba21bd8848d2f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
