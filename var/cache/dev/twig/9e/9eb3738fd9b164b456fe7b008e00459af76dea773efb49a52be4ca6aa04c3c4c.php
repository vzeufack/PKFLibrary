<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_12f64a9a378e18d3e46836bf67a5b220703327afe8e6c0dd3f4f792d1099ab47 extends Twig_Template
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
        $__internal_f0a0dfac4dede207312cc8597c38bda877f98adcd1f45c7ba31829d19bb27d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a0dfac4dede207312cc8597c38bda877f98adcd1f45c7ba31829d19bb27d43->enter($__internal_f0a0dfac4dede207312cc8597c38bda877f98adcd1f45c7ba31829d19bb27d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_790cc3bafc1d8213f18ad82f67b3bc09a92e51757e19f6e9b3f893068233806e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790cc3bafc1d8213f18ad82f67b3bc09a92e51757e19f6e9b3f893068233806e->enter($__internal_790cc3bafc1d8213f18ad82f67b3bc09a92e51757e19f6e9b3f893068233806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f0a0dfac4dede207312cc8597c38bda877f98adcd1f45c7ba31829d19bb27d43->leave($__internal_f0a0dfac4dede207312cc8597c38bda877f98adcd1f45c7ba31829d19bb27d43_prof);

        
        $__internal_790cc3bafc1d8213f18ad82f67b3bc09a92e51757e19f6e9b3f893068233806e->leave($__internal_790cc3bafc1d8213f18ad82f67b3bc09a92e51757e19f6e9b3f893068233806e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
