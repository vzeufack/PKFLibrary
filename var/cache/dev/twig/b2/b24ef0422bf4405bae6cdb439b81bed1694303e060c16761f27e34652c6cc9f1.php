<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_04fb8277da67721a3b97df0f7d62995209f49eb9caa34333bf8e2c7e2384a98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fbc5ef949056bae0e869bd9bfd8ad3209c05ce93ef2dfac40c1eccb99b63a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbc5ef949056bae0e869bd9bfd8ad3209c05ce93ef2dfac40c1eccb99b63a84->enter($__internal_8fbc5ef949056bae0e869bd9bfd8ad3209c05ce93ef2dfac40c1eccb99b63a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_867c8c86d731baba9e2c2dd64a1a020ee66cc68cc5c844a824888b133e9282f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867c8c86d731baba9e2c2dd64a1a020ee66cc68cc5c844a824888b133e9282f2->enter($__internal_867c8c86d731baba9e2c2dd64a1a020ee66cc68cc5c844a824888b133e9282f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8fbc5ef949056bae0e869bd9bfd8ad3209c05ce93ef2dfac40c1eccb99b63a84->leave($__internal_8fbc5ef949056bae0e869bd9bfd8ad3209c05ce93ef2dfac40c1eccb99b63a84_prof);

        
        $__internal_867c8c86d731baba9e2c2dd64a1a020ee66cc68cc5c844a824888b133e9282f2->leave($__internal_867c8c86d731baba9e2c2dd64a1a020ee66cc68cc5c844a824888b133e9282f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d77029b3b9d5359b5d59cbdcf0b6668d66c54bdf8be1012ec7e626f9c21c2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d77029b3b9d5359b5d59cbdcf0b6668d66c54bdf8be1012ec7e626f9c21c2ae->enter($__internal_1d77029b3b9d5359b5d59cbdcf0b6668d66c54bdf8be1012ec7e626f9c21c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e9a4fb39a244cbc0868c8581a441e9f3d30ee3ef6f35c3773bb7b9e73daf878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9a4fb39a244cbc0868c8581a441e9f3d30ee3ef6f35c3773bb7b9e73daf878->enter($__internal_1e9a4fb39a244cbc0868c8581a441e9f3d30ee3ef6f35c3773bb7b9e73daf878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e9a4fb39a244cbc0868c8581a441e9f3d30ee3ef6f35c3773bb7b9e73daf878->leave($__internal_1e9a4fb39a244cbc0868c8581a441e9f3d30ee3ef6f35c3773bb7b9e73daf878_prof);

        
        $__internal_1d77029b3b9d5359b5d59cbdcf0b6668d66c54bdf8be1012ec7e626f9c21c2ae->leave($__internal_1d77029b3b9d5359b5d59cbdcf0b6668d66c54bdf8be1012ec7e626f9c21c2ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
