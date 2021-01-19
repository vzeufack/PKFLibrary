<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_473d4114aaa0b4930c3fa842a17a244351430dff6c876e258d35b1f8527a383a extends Twig_Template
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
        $__internal_00c6b9e04ea520093d26ad831b8bf04e229707dbb40fbf6e71c4eefc2d497866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c6b9e04ea520093d26ad831b8bf04e229707dbb40fbf6e71c4eefc2d497866->enter($__internal_00c6b9e04ea520093d26ad831b8bf04e229707dbb40fbf6e71c4eefc2d497866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9f2da726e9b2e21e74663e90a3e74ac2073c26e18037de83a7d15ba1ec5f3dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2da726e9b2e21e74663e90a3e74ac2073c26e18037de83a7d15ba1ec5f3dff->enter($__internal_9f2da726e9b2e21e74663e90a3e74ac2073c26e18037de83a7d15ba1ec5f3dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_00c6b9e04ea520093d26ad831b8bf04e229707dbb40fbf6e71c4eefc2d497866->leave($__internal_00c6b9e04ea520093d26ad831b8bf04e229707dbb40fbf6e71c4eefc2d497866_prof);

        
        $__internal_9f2da726e9b2e21e74663e90a3e74ac2073c26e18037de83a7d15ba1ec5f3dff->leave($__internal_9f2da726e9b2e21e74663e90a3e74ac2073c26e18037de83a7d15ba1ec5f3dff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
