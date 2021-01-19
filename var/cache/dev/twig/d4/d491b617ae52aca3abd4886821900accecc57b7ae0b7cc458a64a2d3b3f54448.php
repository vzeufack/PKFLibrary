<?php

/* default/test.html.twig */
class __TwigTemplate_8252d5e3b5248c715d37b5726166151a840885d71fc1825f6653cdcdc74ecae0 extends Twig_Template
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
        $__internal_aff768fcd5c8daeb2126f4b54e1f92619aa1a4d4283bdbee619f3984b614ed8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff768fcd5c8daeb2126f4b54e1f92619aa1a4d4283bdbee619f3984b614ed8a->enter($__internal_aff768fcd5c8daeb2126f4b54e1f92619aa1a4d4283bdbee619f3984b614ed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        $__internal_258b40512b64708588da6c5936e82df37374dec381281960a5da02068e88c564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258b40512b64708588da6c5936e82df37374dec381281960a5da02068e88c564->enter($__internal_258b40512b64708588da6c5936e82df37374dec381281960a5da02068e88c564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

<head> <title> Test </title> </head>

<body>
\t<h1> Adding a new Product </h1>

\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 12
        echo "
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'row');
        echo "
\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</body>

</html>
";
        
        $__internal_aff768fcd5c8daeb2126f4b54e1f92619aa1a4d4283bdbee619f3984b614ed8a->leave($__internal_aff768fcd5c8daeb2126f4b54e1f92619aa1a4d4283bdbee619f3984b614ed8a_prof);

        
        $__internal_258b40512b64708588da6c5936e82df37374dec381281960a5da02068e88c564->leave($__internal_258b40512b64708588da6c5936e82df37374dec381281960a5da02068e88c564_prof);

    }

    public function getTemplateName()
    {
        return "default/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  43 => 13,  40 => 12,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

<head> <title> Test </title> </head>

<body>
\t<h1> Adding a new Product </h1>

\t{{ form_start(form)}}
\t{#....#}

\t{{ form_row(form.brochure)}}
\t{{form_end(form)}}
</body>

</html>
", "default/test.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\default\\test.html.twig");
    }
}
