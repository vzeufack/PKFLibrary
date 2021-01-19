<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4db35a29ff8be14402019886f2765e07d5ef955a482efd39e8ea9169420e25f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":pkflibrary:layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_20f59b065482e1457061b4bf28ddc85eae5962d9aec6e73c696bcf5513c28b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f59b065482e1457061b4bf28ddc85eae5962d9aec6e73c696bcf5513c28b3e->enter($__internal_20f59b065482e1457061b4bf28ddc85eae5962d9aec6e73c696bcf5513c28b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_4f993a6a74218e0dfa519daaddb603e8de53acc4ee10d12ee7ca986a280c539d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f993a6a74218e0dfa519daaddb603e8de53acc4ee10d12ee7ca986a280c539d->enter($__internal_4f993a6a74218e0dfa519daaddb603e8de53acc4ee10d12ee7ca986a280c539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f59b065482e1457061b4bf28ddc85eae5962d9aec6e73c696bcf5513c28b3e->leave($__internal_20f59b065482e1457061b4bf28ddc85eae5962d9aec6e73c696bcf5513c28b3e_prof);

        
        $__internal_4f993a6a74218e0dfa519daaddb603e8de53acc4ee10d12ee7ca986a280c539d->leave($__internal_4f993a6a74218e0dfa519daaddb603e8de53acc4ee10d12ee7ca986a280c539d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_243c262851fb199193b8bbc1c2a597298bb36c6bbce64a8d0db8b6feb93db8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243c262851fb199193b8bbc1c2a597298bb36c6bbce64a8d0db8b6feb93db8d4->enter($__internal_243c262851fb199193b8bbc1c2a597298bb36c6bbce64a8d0db8b6feb93db8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46d11117028a359fff78ac77f029ff553334775d9f5c80b3355eb031484aa1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d11117028a359fff78ac77f029ff553334775d9f5c80b3355eb031484aa1a9->enter($__internal_46d11117028a359fff78ac77f029ff553334775d9f5c80b3355eb031484aa1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46d11117028a359fff78ac77f029ff553334775d9f5c80b3355eb031484aa1a9->leave($__internal_46d11117028a359fff78ac77f029ff553334775d9f5c80b3355eb031484aa1a9_prof);

        
        $__internal_243c262851fb199193b8bbc1c2a597298bb36c6bbce64a8d0db8b6feb93db8d4->leave($__internal_243c262851fb199193b8bbc1c2a597298bb36c6bbce64a8d0db8b6feb93db8d4_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6a4f5e0085ef04cb320f8a451d3ebe3a115f4bd1a2dc39c81c4bd3cef227c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a4f5e0085ef04cb320f8a451d3ebe3a115f4bd1a2dc39c81c4bd3cef227c7e->enter($__internal_e6a4f5e0085ef04cb320f8a451d3ebe3a115f4bd1a2dc39c81c4bd3cef227c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ec36b6298e74b6ac5fea24214f6635ae601e4ba05be32d243f480507b1c3a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec36b6298e74b6ac5fea24214f6635ae601e4ba05be32d243f480507b1c3a9d->enter($__internal_9ec36b6298e74b6ac5fea24214f6635ae601e4ba05be32d243f480507b1c3a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_9ec36b6298e74b6ac5fea24214f6635ae601e4ba05be32d243f480507b1c3a9d->leave($__internal_9ec36b6298e74b6ac5fea24214f6635ae601e4ba05be32d243f480507b1c3a9d_prof);

        
        $__internal_e6a4f5e0085ef04cb320f8a451d3ebe3a115f4bd1a2dc39c81c4bd3cef227c7e->leave($__internal_e6a4f5e0085ef04cb320f8a451d3ebe3a115f4bd1a2dc39c81c4bd3cef227c7e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\layout.html.twig");
    }
}
