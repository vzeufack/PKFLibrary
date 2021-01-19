<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8f0adacefff83e6315a6235626d14a7eef23b54f815de582a392d033385b3e20 extends Twig_Template
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
        $__internal_3fe9d43a62efe1684075e3621052af8a8e5fda91cf2792c2539cc2e0b6a167e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe9d43a62efe1684075e3621052af8a8e5fda91cf2792c2539cc2e0b6a167e7->enter($__internal_3fe9d43a62efe1684075e3621052af8a8e5fda91cf2792c2539cc2e0b6a167e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4699799f399ff8fac9ae88a3f0f94e97bb65898a6cf8c39be87c29fc2b63f236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699799f399ff8fac9ae88a3f0f94e97bb65898a6cf8c39be87c29fc2b63f236->enter($__internal_4699799f399ff8fac9ae88a3f0f94e97bb65898a6cf8c39be87c29fc2b63f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3fe9d43a62efe1684075e3621052af8a8e5fda91cf2792c2539cc2e0b6a167e7->leave($__internal_3fe9d43a62efe1684075e3621052af8a8e5fda91cf2792c2539cc2e0b6a167e7_prof);

        
        $__internal_4699799f399ff8fac9ae88a3f0f94e97bb65898a6cf8c39be87c29fc2b63f236->leave($__internal_4699799f399ff8fac9ae88a3f0f94e97bb65898a6cf8c39be87c29fc2b63f236_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
