<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a96b2482f69ee57eafaba3bbc361298222ba24f8d946d495e99c89ab41c1ab02 extends Twig_Template
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
        $__internal_393794909a76f752af1de537ec9be45bd8bcb801b15faf195854152dbb1a20bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393794909a76f752af1de537ec9be45bd8bcb801b15faf195854152dbb1a20bc->enter($__internal_393794909a76f752af1de537ec9be45bd8bcb801b15faf195854152dbb1a20bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_969db208c452b136828e066f776696715431f2671983bf58fc926f5264b50230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969db208c452b136828e066f776696715431f2671983bf58fc926f5264b50230->enter($__internal_969db208c452b136828e066f776696715431f2671983bf58fc926f5264b50230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_393794909a76f752af1de537ec9be45bd8bcb801b15faf195854152dbb1a20bc->leave($__internal_393794909a76f752af1de537ec9be45bd8bcb801b15faf195854152dbb1a20bc_prof);

        
        $__internal_969db208c452b136828e066f776696715431f2671983bf58fc926f5264b50230->leave($__internal_969db208c452b136828e066f776696715431f2671983bf58fc926f5264b50230_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b844bcc0974de0297fc99010b476059d677069d3bc416f0762706348e7f36bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b844bcc0974de0297fc99010b476059d677069d3bc416f0762706348e7f36bc7->enter($__internal_b844bcc0974de0297fc99010b476059d677069d3bc416f0762706348e7f36bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a4d8d62021f89f459c003dd295d54105ee115e1aa5e68d72725fc2597ce2eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4d8d62021f89f459c003dd295d54105ee115e1aa5e68d72725fc2597ce2eac->enter($__internal_4a4d8d62021f89f459c003dd295d54105ee115e1aa5e68d72725fc2597ce2eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a4d8d62021f89f459c003dd295d54105ee115e1aa5e68d72725fc2597ce2eac->leave($__internal_4a4d8d62021f89f459c003dd295d54105ee115e1aa5e68d72725fc2597ce2eac_prof);

        
        $__internal_b844bcc0974de0297fc99010b476059d677069d3bc416f0762706348e7f36bc7->leave($__internal_b844bcc0974de0297fc99010b476059d677069d3bc416f0762706348e7f36bc7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
