<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_8bd7cb47723235717578e2959bffe06135604f46f43be5a79fc50e09a706d4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":pkflibrary:layout.html.twig", "UserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":pkflibrary:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eb93142c5db642202ffa25528002b9d1e9e35214060c50feee34dbfc71be7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb93142c5db642202ffa25528002b9d1e9e35214060c50feee34dbfc71be7e6->enter($__internal_8eb93142c5db642202ffa25528002b9d1e9e35214060c50feee34dbfc71be7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_7d6095a476532d4cdba261ab1cf0f2c71543bea4b1cc785a6d03db6809839352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6095a476532d4cdba261ab1cf0f2c71543bea4b1cc785a6d03db6809839352->enter($__internal_7d6095a476532d4cdba261ab1cf0f2c71543bea4b1cc785a6d03db6809839352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb93142c5db642202ffa25528002b9d1e9e35214060c50feee34dbfc71be7e6->leave($__internal_8eb93142c5db642202ffa25528002b9d1e9e35214060c50feee34dbfc71be7e6_prof);

        
        $__internal_7d6095a476532d4cdba261ab1cf0f2c71543bea4b1cc785a6d03db6809839352->leave($__internal_7d6095a476532d4cdba261ab1cf0f2c71543bea4b1cc785a6d03db6809839352_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73defa60ad1f99f15c7dd246c78b1a972ebc13250fda2082523e470fdbdd2764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73defa60ad1f99f15c7dd246c78b1a972ebc13250fda2082523e470fdbdd2764->enter($__internal_73defa60ad1f99f15c7dd246c78b1a972ebc13250fda2082523e470fdbdd2764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e5c4fe62db7afea11cccad0e53639dd14f357aba7020540a728bb58ecf5bdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c4fe62db7afea11cccad0e53639dd14f357aba7020540a728bb58ecf5bdbe->enter($__internal_8e5c4fe62db7afea11cccad0e53639dd14f357aba7020540a728bb58ecf5bdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!--<div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "    -->
    <div>
        ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_8e5c4fe62db7afea11cccad0e53639dd14f357aba7020540a728bb58ecf5bdbe->leave($__internal_8e5c4fe62db7afea11cccad0e53639dd14f357aba7020540a728bb58ecf5bdbe_prof);

        
        $__internal_73defa60ad1f99f15c7dd246c78b1a972ebc13250fda2082523e470fdbdd2764->leave($__internal_73defa60ad1f99f15c7dd246c78b1a972ebc13250fda2082523e470fdbdd2764_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72fa397f33b2d27f94663219112361873760c2a58d2ca35a9097e169e6e9b298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fa397f33b2d27f94663219112361873760c2a58d2ca35a9097e169e6e9b298->enter($__internal_72fa397f33b2d27f94663219112361873760c2a58d2ca35a9097e169e6e9b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9812caad4c2a78cd6be837e0b13357601ef607c5c9a378dbfb9e3e1c4f10e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9812caad4c2a78cd6be837e0b13357601ef607c5c9a378dbfb9e3e1c4f10e1c->enter($__internal_d9812caad4c2a78cd6be837e0b13357601ef607c5c9a378dbfb9e3e1c4f10e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_d9812caad4c2a78cd6be837e0b13357601ef607c5c9a378dbfb9e3e1c4f10e1c->leave($__internal_d9812caad4c2a78cd6be837e0b13357601ef607c5c9a378dbfb9e3e1c4f10e1c_prof);

        
        $__internal_72fa397f33b2d27f94663219112361873760c2a58d2ca35a9097e169e6e9b298->leave($__internal_72fa397f33b2d27f94663219112361873760c2a58d2ca35a9097e169e6e9b298_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":pkflibrary:layout.html.twig\" %}

{% block body %}
    <!--<div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}
    -->
    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}
", "UserBundle::layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/layout.html.twig");
    }
}
