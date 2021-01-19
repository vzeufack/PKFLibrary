<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b134ca4a4dd0f50fc3f0139776eb99e70793951a5d1f005e3cd24299da263350 extends Twig_Template
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
        $__internal_352606353f2072253293ec62bcc60cdc3c556ad5b8ae2604f702409053fd6f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352606353f2072253293ec62bcc60cdc3c556ad5b8ae2604f702409053fd6f9f->enter($__internal_352606353f2072253293ec62bcc60cdc3c556ad5b8ae2604f702409053fd6f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f3ed17b6520167773da60b3678c6f5ebc6274f72caf9c946e332d5de345b6b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ed17b6520167773da60b3678c6f5ebc6274f72caf9c946e332d5de345b6b94->enter($__internal_f3ed17b6520167773da60b3678c6f5ebc6274f72caf9c946e332d5de345b6b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_352606353f2072253293ec62bcc60cdc3c556ad5b8ae2604f702409053fd6f9f->leave($__internal_352606353f2072253293ec62bcc60cdc3c556ad5b8ae2604f702409053fd6f9f_prof);

        
        $__internal_f3ed17b6520167773da60b3678c6f5ebc6274f72caf9c946e332d5de345b6b94->leave($__internal_f3ed17b6520167773da60b3678c6f5ebc6274f72caf9c946e332d5de345b6b94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
