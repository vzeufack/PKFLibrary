<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_93a317259e0e7cb21326df5f9fd71816052d1c3e6db57c1769d05921c848dfe9 extends Twig_Template
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
        $__internal_e6bb21d597e9fafa20e9db66dae64307fc4fd2ecbfdb17a2310b9781975ff992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bb21d597e9fafa20e9db66dae64307fc4fd2ecbfdb17a2310b9781975ff992->enter($__internal_e6bb21d597e9fafa20e9db66dae64307fc4fd2ecbfdb17a2310b9781975ff992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0d99c14580263e199de68b325eef904b59864f57c43fc18e6448dfe28ef4284e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d99c14580263e199de68b325eef904b59864f57c43fc18e6448dfe28ef4284e->enter($__internal_0d99c14580263e199de68b325eef904b59864f57c43fc18e6448dfe28ef4284e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e6bb21d597e9fafa20e9db66dae64307fc4fd2ecbfdb17a2310b9781975ff992->leave($__internal_e6bb21d597e9fafa20e9db66dae64307fc4fd2ecbfdb17a2310b9781975ff992_prof);

        
        $__internal_0d99c14580263e199de68b325eef904b59864f57c43fc18e6448dfe28ef4284e->leave($__internal_0d99c14580263e199de68b325eef904b59864f57c43fc18e6448dfe28ef4284e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
