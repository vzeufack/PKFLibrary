<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3600d1bb13429946172f2d1294a8281b639ad9486d9fa02f04aa5ac0b73e8295 extends Twig_Template
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
        $__internal_e52e5a9f3f0ecaf9e0193b61664333d51a31e2174c239cdb689a7ae54729c6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52e5a9f3f0ecaf9e0193b61664333d51a31e2174c239cdb689a7ae54729c6c5->enter($__internal_e52e5a9f3f0ecaf9e0193b61664333d51a31e2174c239cdb689a7ae54729c6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_50b06d66998ecd6702e49a262d6786536b4195cd9ce927ab397531f6de67aafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b06d66998ecd6702e49a262d6786536b4195cd9ce927ab397531f6de67aafe->enter($__internal_50b06d66998ecd6702e49a262d6786536b4195cd9ce927ab397531f6de67aafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e52e5a9f3f0ecaf9e0193b61664333d51a31e2174c239cdb689a7ae54729c6c5->leave($__internal_e52e5a9f3f0ecaf9e0193b61664333d51a31e2174c239cdb689a7ae54729c6c5_prof);

        
        $__internal_50b06d66998ecd6702e49a262d6786536b4195cd9ce927ab397531f6de67aafe->leave($__internal_50b06d66998ecd6702e49a262d6786536b4195cd9ce927ab397531f6de67aafe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
