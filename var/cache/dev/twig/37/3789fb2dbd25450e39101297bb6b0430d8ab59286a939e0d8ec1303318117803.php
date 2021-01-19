<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c6d27ae78c29659e4b3a2a3d3fb78be4d7e419baf71ccf3ac3c03fb5241594a3 extends Twig_Template
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
        $__internal_9d1da2ef5dd0bdfdd59df945746a7d7da82b84eaecce855e67191420bd0b6f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1da2ef5dd0bdfdd59df945746a7d7da82b84eaecce855e67191420bd0b6f01->enter($__internal_9d1da2ef5dd0bdfdd59df945746a7d7da82b84eaecce855e67191420bd0b6f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_27e2fb3b39b219e810a26f3a5e9fa5f5b353dc0abf379cc2a7e59bb3b8f913a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e2fb3b39b219e810a26f3a5e9fa5f5b353dc0abf379cc2a7e59bb3b8f913a4->enter($__internal_27e2fb3b39b219e810a26f3a5e9fa5f5b353dc0abf379cc2a7e59bb3b8f913a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9d1da2ef5dd0bdfdd59df945746a7d7da82b84eaecce855e67191420bd0b6f01->leave($__internal_9d1da2ef5dd0bdfdd59df945746a7d7da82b84eaecce855e67191420bd0b6f01_prof);

        
        $__internal_27e2fb3b39b219e810a26f3a5e9fa5f5b353dc0abf379cc2a7e59bb3b8f913a4->leave($__internal_27e2fb3b39b219e810a26f3a5e9fa5f5b353dc0abf379cc2a7e59bb3b8f913a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
