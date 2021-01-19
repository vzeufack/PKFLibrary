<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7399da10735227c7060425fa9680bd36afbf52e43321e6da2cfd5b990334f980 extends Twig_Template
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
        $__internal_664c9cc41038ea6b4390869505b60c943945c76986a53c2cf200ff24ecdf9387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664c9cc41038ea6b4390869505b60c943945c76986a53c2cf200ff24ecdf9387->enter($__internal_664c9cc41038ea6b4390869505b60c943945c76986a53c2cf200ff24ecdf9387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_22f34442ea40a36b795133a1729f4fa629799ed72fb98a6f2b15a6ed914c792a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f34442ea40a36b795133a1729f4fa629799ed72fb98a6f2b15a6ed914c792a->enter($__internal_22f34442ea40a36b795133a1729f4fa629799ed72fb98a6f2b15a6ed914c792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_664c9cc41038ea6b4390869505b60c943945c76986a53c2cf200ff24ecdf9387->leave($__internal_664c9cc41038ea6b4390869505b60c943945c76986a53c2cf200ff24ecdf9387_prof);

        
        $__internal_22f34442ea40a36b795133a1729f4fa629799ed72fb98a6f2b15a6ed914c792a->leave($__internal_22f34442ea40a36b795133a1729f4fa629799ed72fb98a6f2b15a6ed914c792a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
