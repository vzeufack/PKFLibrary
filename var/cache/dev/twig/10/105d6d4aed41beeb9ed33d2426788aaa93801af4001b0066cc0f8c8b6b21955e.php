<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0b256e089cc34acf064a3fe39323ec73bfc6bf8bbd94d104dfdeb3a46f9938c3 extends Twig_Template
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
        $__internal_76c76268a739d48d92b690e4d5f686559eada22de511f362bb154e4922382d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c76268a739d48d92b690e4d5f686559eada22de511f362bb154e4922382d5c->enter($__internal_76c76268a739d48d92b690e4d5f686559eada22de511f362bb154e4922382d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c0b19e1208b5b37caa81b40f5bd3577ef829e441b5c80761519a4f4d5f7c60bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b19e1208b5b37caa81b40f5bd3577ef829e441b5c80761519a4f4d5f7c60bb->enter($__internal_c0b19e1208b5b37caa81b40f5bd3577ef829e441b5c80761519a4f4d5f7c60bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_76c76268a739d48d92b690e4d5f686559eada22de511f362bb154e4922382d5c->leave($__internal_76c76268a739d48d92b690e4d5f686559eada22de511f362bb154e4922382d5c_prof);

        
        $__internal_c0b19e1208b5b37caa81b40f5bd3577ef829e441b5c80761519a4f4d5f7c60bb->leave($__internal_c0b19e1208b5b37caa81b40f5bd3577ef829e441b5c80761519a4f4d5f7c60bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
