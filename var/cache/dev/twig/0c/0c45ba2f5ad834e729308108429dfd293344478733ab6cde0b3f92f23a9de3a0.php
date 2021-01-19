<?php

/* pkflibrary/book/borrowReport.html.twig */
class __TwigTemplate_7944472d29e1d8121bc8e9e5e0fcc5e04e26f4804f9cdfadeb531d9573e7c4e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", "pkflibrary/book/borrowReport.html.twig", 1);
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
        $__internal_d21e85ecadc1783e2813a5c7c0d14c0ee97e1090aa6692e7a493c541e43d88d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21e85ecadc1783e2813a5c7c0d14c0ee97e1090aa6692e7a493c541e43d88d1->enter($__internal_d21e85ecadc1783e2813a5c7c0d14c0ee97e1090aa6692e7a493c541e43d88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/borrowReport.html.twig"));

        $__internal_7e9b2b319ef5fba93882243c64535feb41e1b0e5349ed6c8b49c963fa009dc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9b2b319ef5fba93882243c64535feb41e1b0e5349ed6c8b49c963fa009dc18->enter($__internal_7e9b2b319ef5fba93882243c64535feb41e1b0e5349ed6c8b49c963fa009dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/borrowReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21e85ecadc1783e2813a5c7c0d14c0ee97e1090aa6692e7a493c541e43d88d1->leave($__internal_d21e85ecadc1783e2813a5c7c0d14c0ee97e1090aa6692e7a493c541e43d88d1_prof);

        
        $__internal_7e9b2b319ef5fba93882243c64535feb41e1b0e5349ed6c8b49c963fa009dc18->leave($__internal_7e9b2b319ef5fba93882243c64535feb41e1b0e5349ed6c8b49c963fa009dc18_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99d9cbcbc8956b2fd1b4e8ee8761b1d5541dc1d7405954de66fb5eb208a996bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d9cbcbc8956b2fd1b4e8ee8761b1d5541dc1d7405954de66fb5eb208a996bb->enter($__internal_99d9cbcbc8956b2fd1b4e8ee8761b1d5541dc1d7405954de66fb5eb208a996bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec9f78d419d095038a0da73fa937146e60d6242546aeeeea5805a16cf4a31742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9f78d419d095038a0da73fa937146e60d6242546aeeeea5805a16cf4a31742->enter($__internal_ec9f78d419d095038a0da73fa937146e60d6242546aeeeea5805a16cf4a31742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec9f78d419d095038a0da73fa937146e60d6242546aeeeea5805a16cf4a31742->leave($__internal_ec9f78d419d095038a0da73fa937146e60d6242546aeeeea5805a16cf4a31742_prof);

        
        $__internal_99d9cbcbc8956b2fd1b4e8ee8761b1d5541dc1d7405954de66fb5eb208a996bb->leave($__internal_99d9cbcbc8956b2fd1b4e8ee8761b1d5541dc1d7405954de66fb5eb208a996bb_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_73899c5674fe5f43d9cc0b48bb1ec1a34ea678c2e1d156d7d067da9311bd5210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73899c5674fe5f43d9cc0b48bb1ec1a34ea678c2e1d156d7d067da9311bd5210->enter($__internal_73899c5674fe5f43d9cc0b48bb1ec1a34ea678c2e1d156d7d067da9311bd5210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_13d8c24caa803a48d8d3cebbf4e682a78190c3c40fc6eebbe24ca0d48463d90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d8c24caa803a48d8d3cebbf4e682a78190c3c40fc6eebbe24ca0d48463d90b->enter($__internal_13d8c24caa803a48d8d3cebbf4e682a78190c3c40fc6eebbe24ca0d48463d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "\t<li style=\"\">My Account   /   Borrow Reports</li>
";
        
        $__internal_13d8c24caa803a48d8d3cebbf4e682a78190c3c40fc6eebbe24ca0d48463d90b->leave($__internal_13d8c24caa803a48d8d3cebbf4e682a78190c3c40fc6eebbe24ca0d48463d90b_prof);

        
        $__internal_73899c5674fe5f43d9cc0b48bb1ec1a34ea678c2e1d156d7d067da9311bd5210->leave($__internal_73899c5674fe5f43d9cc0b48bb1ec1a34ea678c2e1d156d7d067da9311bd5210_prof);

    }

    // line 57
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_dc34ea4c22f738f6efc050ef707215bb48a9171d351a9d78da6cc06acba03ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc34ea4c22f738f6efc050ef707215bb48a9171d351a9d78da6cc06acba03ef2->enter($__internal_dc34ea4c22f738f6efc050ef707215bb48a9171d351a9d78da6cc06acba03ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_4932bb67d092be14424bdef7bd496576a762a8931e7bc91fa590387dc3b1b7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4932bb67d092be14424bdef7bd496576a762a8931e7bc91fa590387dc3b1b7a1->enter($__internal_4932bb67d092be14424bdef7bd496576a762a8931e7bc91fa590387dc3b1b7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        
        $__internal_4932bb67d092be14424bdef7bd496576a762a8931e7bc91fa590387dc3b1b7a1->leave($__internal_4932bb67d092be14424bdef7bd496576a762a8931e7bc91fa590387dc3b1b7a1_prof);

        
        $__internal_dc34ea4c22f738f6efc050ef707215bb48a9171d351a9d78da6cc06acba03ef2->leave($__internal_dc34ea4c22f738f6efc050ef707215bb48a9171d351a9d78da6cc06acba03ef2_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_2420ec5f7765ad55028a7c9ebe89147e63502e450c9fb1a249d72d041a4ece40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2420ec5f7765ad55028a7c9ebe89147e63502e450c9fb1a249d72d041a4ece40->enter($__internal_2420ec5f7765ad55028a7c9ebe89147e63502e450c9fb1a249d72d041a4ece40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_de9d2798effc26af8e8a39d858f5467e1f24c36e284339c5c35115990072ecf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9d2798effc26af8e8a39d858f5467e1f24c36e284339c5c35115990072ecf4->enter($__internal_de9d2798effc26af8e8a39d858f5467e1f24c36e284339c5c35115990072ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_de9d2798effc26af8e8a39d858f5467e1f24c36e284339c5c35115990072ecf4->leave($__internal_de9d2798effc26af8e8a39d858f5467e1f24c36e284339c5c35115990072ecf4_prof);

        
        $__internal_2420ec5f7765ad55028a7c9ebe89147e63502e450c9fb1a249d72d041a4ece40->leave($__internal_2420ec5f7765ad55028a7c9ebe89147e63502e450c9fb1a249d72d041a4ece40_prof);

    }

    // line 112
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_def2326b725635617b22ebb2353042e69c0de674d51460d0e20af0896a580a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def2326b725635617b22ebb2353042e69c0de674d51460d0e20af0896a580a90->enter($__internal_def2326b725635617b22ebb2353042e69c0de674d51460d0e20af0896a580a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_8497834a45b8532c5e7c5a7cae9625f3bcd94ed42931825bf0f6214cd405a1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8497834a45b8532c5e7c5a7cae9625f3bcd94ed42931825bf0f6214cd405a1a9->enter($__internal_8497834a45b8532c5e7c5a7cae9625f3bcd94ed42931825bf0f6214cd405a1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_8497834a45b8532c5e7c5a7cae9625f3bcd94ed42931825bf0f6214cd405a1a9->leave($__internal_8497834a45b8532c5e7c5a7cae9625f3bcd94ed42931825bf0f6214cd405a1a9_prof);

        
        $__internal_def2326b725635617b22ebb2353042e69c0de674d51460d0e20af0896a580a90->leave($__internal_def2326b725635617b22ebb2353042e69c0de674d51460d0e20af0896a580a90_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/borrowReport.html.twig";
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
{% endblock %}", "pkflibrary/book/borrowReport.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\borrowReport.html.twig");
    }
}
