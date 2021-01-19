<?php

/* :default:test.html.twig */
class __TwigTemplate_bc6235f1e794ffc5fc66a38165463a86c64aedb08db928e3f7d161ddb4f72955 extends Twig_Template
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
        $__internal_a522b8c6c8baecf8317ed81c9ad6add637bbad78b0e2adec7275ba805bf5cf0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a522b8c6c8baecf8317ed81c9ad6add637bbad78b0e2adec7275ba805bf5cf0e->enter($__internal_a522b8c6c8baecf8317ed81c9ad6add637bbad78b0e2adec7275ba805bf5cf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $__internal_890646cba056673fafbc4ed236bb5886d27d682c2423ab13e6143c9a9c37f7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890646cba056673fafbc4ed236bb5886d27d682c2423ab13e6143c9a9c37f7fe->enter($__internal_890646cba056673fafbc4ed236bb5886d27d682c2423ab13e6143c9a9c37f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

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
        
        $__internal_a522b8c6c8baecf8317ed81c9ad6add637bbad78b0e2adec7275ba805bf5cf0e->leave($__internal_a522b8c6c8baecf8317ed81c9ad6add637bbad78b0e2adec7275ba805bf5cf0e_prof);

        
        $__internal_890646cba056673fafbc4ed236bb5886d27d682c2423ab13e6143c9a9c37f7fe->leave($__internal_890646cba056673fafbc4ed236bb5886d27d682c2423ab13e6143c9a9c37f7fe_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
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
", ":default:test.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/default/test.html.twig");
    }
}
