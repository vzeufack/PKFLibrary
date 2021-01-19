<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7d40c1e9b1183297e02e9e193c5b4fd0a34786301efe5eb3481301d37957690d extends Twig_Template
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
        $__internal_8e2e33e3e5f819cec8f38bb653da0b9d438f8e70112bf0ac40fafe1792b7b616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2e33e3e5f819cec8f38bb653da0b9d438f8e70112bf0ac40fafe1792b7b616->enter($__internal_8e2e33e3e5f819cec8f38bb653da0b9d438f8e70112bf0ac40fafe1792b7b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b754f245427daba2d44c05dae6ddf6dbe1e7a2d71f886c324c2878961428d063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b754f245427daba2d44c05dae6ddf6dbe1e7a2d71f886c324c2878961428d063->enter($__internal_b754f245427daba2d44c05dae6ddf6dbe1e7a2d71f886c324c2878961428d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8e2e33e3e5f819cec8f38bb653da0b9d438f8e70112bf0ac40fafe1792b7b616->leave($__internal_8e2e33e3e5f819cec8f38bb653da0b9d438f8e70112bf0ac40fafe1792b7b616_prof);

        
        $__internal_b754f245427daba2d44c05dae6ddf6dbe1e7a2d71f886c324c2878961428d063->leave($__internal_b754f245427daba2d44c05dae6ddf6dbe1e7a2d71f886c324c2878961428d063_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
