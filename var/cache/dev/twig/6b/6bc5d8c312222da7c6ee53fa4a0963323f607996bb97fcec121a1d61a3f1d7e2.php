<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e9221e5d98257a4d80054053c5b964273f88782fdea527bd1413250e5f1626fa extends Twig_Template
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
        $__internal_136006f9e76475b6e2cc310d2593e66ecf2d9558761bb9dbb5d1237d17578f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136006f9e76475b6e2cc310d2593e66ecf2d9558761bb9dbb5d1237d17578f1b->enter($__internal_136006f9e76475b6e2cc310d2593e66ecf2d9558761bb9dbb5d1237d17578f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_efc34f1b777ef1680dbaa369fca4435bc2f2b1b934429689173b741a2977779b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc34f1b777ef1680dbaa369fca4435bc2f2b1b934429689173b741a2977779b->enter($__internal_efc34f1b777ef1680dbaa369fca4435bc2f2b1b934429689173b741a2977779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_136006f9e76475b6e2cc310d2593e66ecf2d9558761bb9dbb5d1237d17578f1b->leave($__internal_136006f9e76475b6e2cc310d2593e66ecf2d9558761bb9dbb5d1237d17578f1b_prof);

        
        $__internal_efc34f1b777ef1680dbaa369fca4435bc2f2b1b934429689173b741a2977779b->leave($__internal_efc34f1b777ef1680dbaa369fca4435bc2f2b1b934429689173b741a2977779b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
