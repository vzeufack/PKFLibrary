<?php

/* :pkflibrary/book:borrowReport.html.twig */
class __TwigTemplate_95ba57646d9270465209f9c9c1efbe80288f14a514f1c7a19cbb49aae3056f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/book:borrowReport.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'searchAdd' => array($this, 'block_searchAdd'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/book/book_list.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddfcda68e55230edad8c644517f0a73c9be4a580a25a25789487e5b77f6b9a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfcda68e55230edad8c644517f0a73c9be4a580a25a25789487e5b77f6b9a1d->enter($__internal_ddfcda68e55230edad8c644517f0a73c9be4a580a25a25789487e5b77f6b9a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:borrowReport.html.twig"));

        $__internal_2cba1925ed20838a835a524f0e8f6c2202eec18d9011e7b470a5914351ee37cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cba1925ed20838a835a524f0e8f6c2202eec18d9011e7b470a5914351ee37cc->enter($__internal_2cba1925ed20838a835a524f0e8f6c2202eec18d9011e7b470a5914351ee37cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:borrowReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddfcda68e55230edad8c644517f0a73c9be4a580a25a25789487e5b77f6b9a1d->leave($__internal_ddfcda68e55230edad8c644517f0a73c9be4a580a25a25789487e5b77f6b9a1d_prof);

        
        $__internal_2cba1925ed20838a835a524f0e8f6c2202eec18d9011e7b470a5914351ee37cc->leave($__internal_2cba1925ed20838a835a524f0e8f6c2202eec18d9011e7b470a5914351ee37cc_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff940562e32d5ac7bc3e24a8b1fa331246b803adae09e1d40974f709b4bad5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff940562e32d5ac7bc3e24a8b1fa331246b803adae09e1d40974f709b4bad5f8->enter($__internal_ff940562e32d5ac7bc3e24a8b1fa331246b803adae09e1d40974f709b4bad5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8a3a9ab00195bddba4639e84620434d88f40484356ad3e1279a4d3692a3db4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a3a9ab00195bddba4639e84620434d88f40484356ad3e1279a4d3692a3db4a->enter($__internal_e8a3a9ab00195bddba4639e84620434d88f40484356ad3e1279a4d3692a3db4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 27
        echo "        <li class=\"dropdown active\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li class=\"active\">
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => 1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">Help</a>
        </li>
        <li>
           <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_e8a3a9ab00195bddba4639e84620434d88f40484356ad3e1279a4d3692a3db4a->leave($__internal_e8a3a9ab00195bddba4639e84620434d88f40484356ad3e1279a4d3692a3db4a_prof);

        
        $__internal_ff940562e32d5ac7bc3e24a8b1fa331246b803adae09e1d40974f709b4bad5f8->leave($__internal_ff940562e32d5ac7bc3e24a8b1fa331246b803adae09e1d40974f709b4bad5f8_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_2928a4e1b92fbfee434ebfd5581db521bc545ef7e6a669dbcc932a1eb4769664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2928a4e1b92fbfee434ebfd5581db521bc545ef7e6a669dbcc932a1eb4769664->enter($__internal_2928a4e1b92fbfee434ebfd5581db521bc545ef7e6a669dbcc932a1eb4769664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_2361c4871165f50bd1e77369e405a63a145a08a62848aabdb663f6ecf22039c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2361c4871165f50bd1e77369e405a63a145a08a62848aabdb663f6ecf22039c8->enter($__internal_2361c4871165f50bd1e77369e405a63a145a08a62848aabdb663f6ecf22039c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "\t<li style=\"\">My Account   /   Borrow Reports</li>
";
        
        $__internal_2361c4871165f50bd1e77369e405a63a145a08a62848aabdb663f6ecf22039c8->leave($__internal_2361c4871165f50bd1e77369e405a63a145a08a62848aabdb663f6ecf22039c8_prof);

        
        $__internal_2928a4e1b92fbfee434ebfd5581db521bc545ef7e6a669dbcc932a1eb4769664->leave($__internal_2928a4e1b92fbfee434ebfd5581db521bc545ef7e6a669dbcc932a1eb4769664_prof);

    }

    // line 57
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_60cb53936f3234c93f26cc143879466c71469cfd9ebfde03d3a86c2a40eb57f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60cb53936f3234c93f26cc143879466c71469cfd9ebfde03d3a86c2a40eb57f1->enter($__internal_60cb53936f3234c93f26cc143879466c71469cfd9ebfde03d3a86c2a40eb57f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_c3fc9a0808130c805a5ee7564d9b5bebfaed398f0ed519f1606a976f85cfc537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fc9a0808130c805a5ee7564d9b5bebfaed398f0ed519f1606a976f85cfc537->enter($__internal_c3fc9a0808130c805a5ee7564d9b5bebfaed398f0ed519f1606a976f85cfc537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        
        $__internal_c3fc9a0808130c805a5ee7564d9b5bebfaed398f0ed519f1606a976f85cfc537->leave($__internal_c3fc9a0808130c805a5ee7564d9b5bebfaed398f0ed519f1606a976f85cfc537_prof);

        
        $__internal_60cb53936f3234c93f26cc143879466c71469cfd9ebfde03d3a86c2a40eb57f1->leave($__internal_60cb53936f3234c93f26cc143879466c71469cfd9ebfde03d3a86c2a40eb57f1_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_9021c6853507c7277177440c82e6984fbce88fc084d41d73a64d16b87be3ccfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9021c6853507c7277177440c82e6984fbce88fc084d41d73a64d16b87be3ccfe->enter($__internal_9021c6853507c7277177440c82e6984fbce88fc084d41d73a64d16b87be3ccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0f1232c8d3e11fe84434973a600bcc8dd3a42d9155d520cad376dd2256c35b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f1232c8d3e11fe84434973a600bcc8dd3a42d9155d520cad376dd2256c35b0->enter($__internal_d0f1232c8d3e11fe84434973a600bcc8dd3a42d9155d520cad376dd2256c35b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "\t<!-- Advanced Tables -->
\t<div class=\"panel panel-default\" style=\"margin-top:2%\">
\t\t<div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
\t\t\tMy Borrows
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date Requested</th>
\t\t\t\t\t\t\t<th>Book Title</th>
\t\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due date</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["booksBorrowed"]) ? $context["booksBorrowed"] : $this->getContext($context, "booksBorrowed")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            if ((($this->getAttribute($context["entry"], "status", array()) != "Returned") && ($this->getAttribute($context["entry"], "status", array()) != "Returned late"))) {
                // line 80
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["entry"], "status", array()) == "Late")) {
                    // line 81
                    echo "\t\t\t\t\t\t    <tr class=\"odd gradeX\" style=\"color:red\">
\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t<tr class=\"odd gradeX\">
\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dateRequested", array()), "F j, Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "title", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "author", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t";
                // line 88
                if (($this->getAttribute($context["entry"], "status", array()) != "Late")) {
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"center\" id=\"status";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "status", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t";
                } else {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t<td class=\"center\" id=\"status";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "status", array()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "delay", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t<td class=\"center\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dueDate", array()), "F j, Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t";
        // line 103
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t<!--End Advanced Tables -->
";
        
        $__internal_d0f1232c8d3e11fe84434973a600bcc8dd3a42d9155d520cad376dd2256c35b0->leave($__internal_d0f1232c8d3e11fe84434973a600bcc8dd3a42d9155d520cad376dd2256c35b0_prof);

        
        $__internal_9021c6853507c7277177440c82e6984fbce88fc084d41d73a64d16b87be3ccfe->leave($__internal_9021c6853507c7277177440c82e6984fbce88fc084d41d73a64d16b87be3ccfe_prof);

    }

    // line 112
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_a5c2ba613bada15a66dd1d6b34e2bef9d95cb823fda99ce38bf4a9809b5da8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c2ba613bada15a66dd1d6b34e2bef9d95cb823fda99ce38bf4a9809b5da8ea->enter($__internal_a5c2ba613bada15a66dd1d6b34e2bef9d95cb823fda99ce38bf4a9809b5da8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_4ce1ae6fae320cda3a5895ab137d132725de295d11d77dc0a260ca13ecb5b085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce1ae6fae320cda3a5895ab137d132725de295d11d77dc0a260ca13ecb5b085->enter($__internal_4ce1ae6fae320cda3a5895ab137d132725de295d11d77dc0a260ca13ecb5b085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_4ce1ae6fae320cda3a5895ab137d132725de295d11d77dc0a260ca13ecb5b085->leave($__internal_4ce1ae6fae320cda3a5895ab137d132725de295d11d77dc0a260ca13ecb5b085_prof);

        
        $__internal_a5c2ba613bada15a66dd1d6b34e2bef9d95cb823fda99ce38bf4a9809b5da8ea->leave($__internal_a5c2ba613bada15a66dd1d6b34e2bef9d95cb823fda99ce38bf4a9809b5da8ea_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/book:borrowReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 112,  273 => 103,  271 => 96,  260 => 93,  249 => 91,  241 => 89,  237 => 88,  233 => 87,  229 => 86,  224 => 85,  220 => 83,  216 => 81,  213 => 80,  208 => 79,  188 => 61,  179 => 60,  162 => 57,  151 => 54,  142 => 53,  126 => 46,  120 => 43,  114 => 40,  105 => 34,  99 => 31,  93 => 27,  85 => 22,  79 => 19,  73 => 16,  67 => 12,  65 => 11,  60 => 9,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/book/book_list.html.twig '%}

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"{{ path('homepage') }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
                        <a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"{{ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        {% endif %}
        <li class=\"dropdown active\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li class=\"active\">
                    <a href=\"{{ path('borrow', {'userId': app.user.id, 'bookId':-1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': 1}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"{{ path('about') }}\">About</a>
        </li>
        <li>
            <a href=\"{{ path('help') }}\">Help</a>
        </li>
        <li>
           <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
{% endblock %}

{% block status %}
\t<li style=\"\">My Account   /   Borrow Reports</li>
{% endblock %}

{% block searchAdd %}
{% endblock %}

{% block content %}
\t<!-- Advanced Tables -->
\t<div class=\"panel panel-default\" style=\"margin-top:2%\">
\t\t<div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
\t\t\tMy Borrows
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date Requested</th>
\t\t\t\t\t\t\t<th>Book Title</th>
\t\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due date</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in booksBorrowed if (entry.status != 'Returned' and entry.status != 'Returned late')  %}
\t\t\t\t\t\t{% if entry.status == 'Late' %}
\t\t\t\t\t\t    <tr class=\"odd gradeX\" style=\"color:red\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr class=\"odd gradeX\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td>{{entry.dateRequested|date('F j, Y')}}</td>
\t\t\t\t\t\t\t<td>{{entry.book.title}}</td>
\t\t\t\t\t\t\t<td>{{entry.book.author}}</td>
\t\t\t\t\t\t\t{% if entry.status != 'Late' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"center\" id=\"status{{entry.user.id}}{{entry.book.id}}\">{{entry.status}}</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td class=\"center\" id=\"status{{entry.user.id}}{{entry.book.id}}\">{{entry.status}} of {{entry.delay}}</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td class=\"center\">{{entry.dueDate|date('F j, Y')}}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{#<tr class=\"even gradeC\">
\t\t\t\t\t\t\t<td>Trident</td>
\t\t\t\t\t\t\t<td>Internet Explorer 5.0</td>
\t\t\t\t\t\t\t<td>Win 95+</td>
\t\t\t\t\t\t\t<td class=\"center\">5</td>
\t\t\t\t\t\t\t<td class=\"center\">C</td>
\t\t\t\t\t\t</tr>#}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t<!--End Advanced Tables -->
{% endblock %}

{% block pagination %}
{% endblock %}", ":pkflibrary/book:borrowReport.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/book/borrowReport.html.twig");
    }
}
