<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_76a317b88739e36c68ebd3cda2a8484e59ca38fbac24bc379e2037760e910345 extends Twig_Template
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
        $__internal_d14851dc0334f7cc7eeea29706302397d34be7040477a46ed4dec73ad3969443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14851dc0334f7cc7eeea29706302397d34be7040477a46ed4dec73ad3969443->enter($__internal_d14851dc0334f7cc7eeea29706302397d34be7040477a46ed4dec73ad3969443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_18a701d4ece59441f358a959c4d4cf223629e0846f1e8ea36f9643bbf904459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a701d4ece59441f358a959c4d4cf223629e0846f1e8ea36f9643bbf904459a->enter($__internal_18a701d4ece59441f358a959c4d4cf223629e0846f1e8ea36f9643bbf904459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d14851dc0334f7cc7eeea29706302397d34be7040477a46ed4dec73ad3969443->leave($__internal_d14851dc0334f7cc7eeea29706302397d34be7040477a46ed4dec73ad3969443_prof);

        
        $__internal_18a701d4ece59441f358a959c4d4cf223629e0846f1e8ea36f9643bbf904459a->leave($__internal_18a701d4ece59441f358a959c4d4cf223629e0846f1e8ea36f9643bbf904459a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
