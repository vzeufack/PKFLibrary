<?php

/* :pkflibrary/book:borrowManagement.html.twig */
class __TwigTemplate_aa1636439624d5df2d9ba209950e3394f76f6a31653a2cf9843188bc284660c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/book:borrowManagement.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'body' => array($this, 'block_body'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/book/book_list.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b2928de680234b6fb4fffcfb048544b246ba2ad3e5fb6865f3ff4997782245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b2928de680234b6fb4fffcfb048544b246ba2ad3e5fb6865f3ff4997782245->enter($__internal_e4b2928de680234b6fb4fffcfb048544b246ba2ad3e5fb6865f3ff4997782245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:borrowManagement.html.twig"));

        $__internal_1842cffd574e0a6dfaed177a5445b5f7b5db58db71d2dfd4e95abc7f9f80b6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842cffd574e0a6dfaed177a5445b5f7b5db58db71d2dfd4e95abc7f9f80b6df->enter($__internal_1842cffd574e0a6dfaed177a5445b5f7b5db58db71d2dfd4e95abc7f9f80b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:borrowManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b2928de680234b6fb4fffcfb048544b246ba2ad3e5fb6865f3ff4997782245->leave($__internal_e4b2928de680234b6fb4fffcfb048544b246ba2ad3e5fb6865f3ff4997782245_prof);

        
        $__internal_1842cffd574e0a6dfaed177a5445b5f7b5db58db71d2dfd4e95abc7f9f80b6df->leave($__internal_1842cffd574e0a6dfaed177a5445b5f7b5db58db71d2dfd4e95abc7f9f80b6df_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_156ac65d26fd1d4ea27032fe2e65330ba7496feed62ae7b750ae545c58478867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156ac65d26fd1d4ea27032fe2e65330ba7496feed62ae7b750ae545c58478867->enter($__internal_156ac65d26fd1d4ea27032fe2e65330ba7496feed62ae7b750ae545c58478867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_300965cd5a5e816d8bf25734fa167a0a81fb37cedff2bd995a836d5b6027b8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300965cd5a5e816d8bf25734fa167a0a81fb37cedff2bd995a836d5b6027b8fd->enter($__internal_300965cd5a5e816d8bf25734fa167a0a81fb37cedff2bd995a836d5b6027b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage")), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1))), "html", null, true);
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li class=\"active\">
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 27
        echo "        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1))), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => 1))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about")), "html", null, true);
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help")), "html", null, true);
        echo "\">Help</a>
        </li>
        <li>
           <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_300965cd5a5e816d8bf25734fa167a0a81fb37cedff2bd995a836d5b6027b8fd->leave($__internal_300965cd5a5e816d8bf25734fa167a0a81fb37cedff2bd995a836d5b6027b8fd_prof);

        
        $__internal_156ac65d26fd1d4ea27032fe2e65330ba7496feed62ae7b750ae545c58478867->leave($__internal_156ac65d26fd1d4ea27032fe2e65330ba7496feed62ae7b750ae545c58478867_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_8e2f6f133e957cbc416356a8629b332672f8770049dc9ca8f8e7aee4cc697e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2f6f133e957cbc416356a8629b332672f8770049dc9ca8f8e7aee4cc697e32->enter($__internal_8e2f6f133e957cbc416356a8629b332672f8770049dc9ca8f8e7aee4cc697e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_921da28bde409e5f9244bccabb3539c3c51662fa914eb3346b47ea00cdc4532a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921da28bde409e5f9244bccabb3539c3c51662fa914eb3346b47ea00cdc4532a->enter($__internal_921da28bde409e5f9244bccabb3539c3c51662fa914eb3346b47ea00cdc4532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "  <li>Management</li>
  <li> Borrow Management</li>
";
        
        $__internal_921da28bde409e5f9244bccabb3539c3c51662fa914eb3346b47ea00cdc4532a->leave($__internal_921da28bde409e5f9244bccabb3539c3c51662fa914eb3346b47ea00cdc4532a_prof);

        
        $__internal_8e2f6f133e957cbc416356a8629b332672f8770049dc9ca8f8e7aee4cc697e32->leave($__internal_8e2f6f133e957cbc416356a8629b332672f8770049dc9ca8f8e7aee4cc697e32_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c35aa60e8a63acac39784a0ea4d7315ad0e99335a0ceccb7041a579c8653976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c35aa60e8a63acac39784a0ea4d7315ad0e99335a0ceccb7041a579c8653976->enter($__internal_2c35aa60e8a63acac39784a0ea4d7315ad0e99335a0ceccb7041a579c8653976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff1c1ab5a43cf390d2a43f9c61db4fbe3079855e8042ea34cc716ff869751909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1c1ab5a43cf390d2a43f9c61db4fbe3079855e8042ea34cc716ff869751909->enter($__internal_ff1c1ab5a43cf390d2a43f9c61db4fbe3079855e8042ea34cc716ff869751909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "  <a href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteRequested")), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"float:right; font-style:calibri; font-weight:bold\"><i class=\" fa fa-cross \"></i> Delete all requested </a>
\t<!-- Advanced Tables -->
\t<div class=\"panel panel-default\" style=\"margin-top:2%; font-family:calibri\">
\t\t<div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
\t\t\tBorrow Management
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date Requested</th>
\t\t\t\t\t\t\t<th>User Name</th>
\t\t\t\t\t\t\t<th>Full Name</th>
\t\t\t\t\t\t\t<th>Title and Author</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due date</th>
\t\t\t\t\t\t\t<th style=\"text-align:center; width:17%\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js")), "html", null, true);
        echo "\"></script> 
\t\t\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["booksBorrowed"]) ? $context["booksBorrowed"] : $this->getContext($context, "booksBorrowed")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            if ((($this->getAttribute($context["entry"], "status", array()) != "Returned") && ($this->getAttribute($context["entry"], "status", array()) != "Returned late"))) {
                // line 83
                echo "            ";
                if (($this->getAttribute($context["entry"], "status", array()) == "Late")) {
                    // line 84
                    echo "\t\t\t\t\t\t<tr class=\"odd gradeX\" style=\"color:red\">
            ";
                } else {
                    // line 86
                    echo "            <tr class=\"odd gradeX\">
            ";
                }
                // line 88
                echo "\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dateRequested", array()), "F j, Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td id=\"user_";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "familyName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "firstName", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "title", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "author", array()), "html", null, true);
                echo "</td>\t
              ";
                // line 92
                if (($this->getAttribute($context["entry"], "status", array()) != "Late")) {
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t  <td class=\"center\" id=\"status";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "status", array()), "html", null, true);
                    echo "</td>
              ";
                } else {
                    // line 95
                    echo "                <td class=\"center\" id=\"status";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "status", array()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "delay", array()), "html", null, true);
                    echo "</td>
              ";
                }
                // line 97
                echo "\t\t\t\t\t\t\t<td class=\"center\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dueDate", array()), "F j, Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" id=\"borrow";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-refresh\"></i> Update</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" id=\"details";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "\">Details</button><a href=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("topdf", array("data" => $this->getAttribute($context["entry"], "id", array())))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pdf.jpg")), "html", null, true);
                echo "\" alt=\"\" width=\"20px\" height=\"30px\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
                        
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\t\t\$('#borrow";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "').click(function() {
                  \$('#form_username').val(\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()), "html", null, true);
                echo "\");
                  \$('#form_bookId').val(\"";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "\");
                  document.getElementById('form_username').readOnly = true;
                  document.getElementById('form_bookId').readOnly = true;
                  ";
                // line 111
                if (($this->getAttribute($context["entry"], "status", array()) == "Late")) {
                    // line 112
                    echo "                    document.getElementById('form_borrow').disabled = true;
                    document.getElementById('form_borrow').style.background = \"grey\";
                  ";
                } else {
                    // line 115
                    echo "                    document.getElementById('form_borrow').disabled = false;
                    document.getElementById('form_borrow').style.background = \"blue\";
                  ";
                }
                // line 118
                echo "                  ";
                if (($this->getAttribute($context["entry"], "status", array()) == "Borrowed")) {
                    // line 119
                    echo "                     document.getElementById('form_borrow').innerHTML = 'Renew';
                  ";
                } else {
                    // line 121
                    echo "                     document.getElementById('form_borrow').innerHTML = 'Borrow';
                  ";
                }
                // line 123
                echo "                  \$('#myModalDueDate').modal('show');
                  \$( \"form\" ).submit(function( event ) {
                      \$( \"#form_borrow\" ).click(function() {
                      var year = document.getElementById('form_Due_date_year');
                      var yearVal = year.options[year.selectedIndex].value;
                      var month = document.getElementById('form_Due_date_month');
                      var monthVal = month.options[month.selectedIndex].value;
                      var day = document.getElementById('form_Due_date_day');
                      var dayVal = day.options[day.selectedIndex].value;
                      var date = new Date(yearVal, monthVal-1, dayVal);
                      if ( date <= Date.now() ){
                        alert(\"Due date must be greater than today!\");
                        event.preventDefault();
                      }
                    })
                  })
                              }); 
\t\t\t\t\t\t\t  \$('#details";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "id", array()), "html", null, true);
                echo "').click(function() {
\t\t\t\t\t\t\t\t\tvar dateRequested = \"";
                // line 141
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dateRequested", array()), "F j, Y"), "html", null, true);
                echo "\";
\t\t\t\t\t\t\t\t\tvar name = \"";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "familyName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "firstName", array()), "html", null, true);
                echo "\";
                  var userCategory = \"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "userCategory", array()), "html", null, true);
                echo "\";
                  var registrationNumber = \"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "studentID", array()), "html", null, true);
                echo "\";
                  var programLevel = \"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "specialty", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "batch", array()), "html", null, true);
                echo "\";
                  var phone = \"";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "phoneNumber", array()), "html", null, true);
                echo "\";
                  var email = \"";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "email", array()), "html", null, true);
                echo "\";
                  var title = \"";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "title", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "subTitle", array()), "html", null, true);
                echo ")\";
                  var author = \"";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "author", array()), "html", null, true);
                echo "\";
                  var editor = \"";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "editor", array()), "html", null, true);
                echo "\";
                  var edition = \"";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "edition", array()), "html", null, true);
                echo "\";
                  var isbn = \"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "book", array()), "isbn", array()), "html", null, true);
                echo "\";
                  var datesBorrowed = \"\";
\t\t\t\t\t\t\t\t\t\$('#dateRequested').val(dateRequested);
\t\t\t\t\t\t\t\t\t\$('#name').val(name);
                  \$('#userCategory').val(userCategory);
                  \$('#registrationNumber').val(registrationNumber);
                  \$('#programLevel').val(programLevel);
                  \$('#phone').val(phone);
                  \$('#email').val(email);
                  \$('#title').val(title);
                  \$('#author').val(author);
                  \$('#editor').val(editor);
                  \$('#edition').val(edition);
                  \$('#isbn').val(isbn);
                  \$('#code').val(\"";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
                echo "\");
                  ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "datesBorrowed", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["dates"]) {
                    // line 168
                    echo "                      datesBorrowed = datesBorrowed.concat(\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dates"], "dateBorrowed", array()), "F j, Y"), "html", null, true);
                    echo " | \"); 
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dates'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                  \$('#dateReturned').val(\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "dateReturned", array()), "F j, Y"), "html", null, true);
                echo "\");
                  \$('#datesBorrowed').val(datesBorrowed);
\t\t\t\t\t\t\t\t\t\$('#myModalDetails').modal('show');
                              });
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t<!--End Advanced Tables -->

\t<div class=\"modal fade\" id=\"myModalDueDate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDueDate\" style=\"text-align:center; color:blue\">Status Update</h4>
              </div>
              ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                \t<th>";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</th>
                \t<th> ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bookId", array()), 'label');
        echo " </th>
                \t<tr>
                \t\t<td>";
        // line 199
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
                \t\t<td>";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bookId", array()), 'widget');
        echo "</td>
                \t</tr>
                  </table>
                  ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Due_date", array()), 'widget');
        echo "
                  ";
        // line 204
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Due_date", array()), 'errors');
        echo "
                </div> 
              </div>
              <div class=\"modal-footer\">
              \t<table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "borrow", array()), 'widget');
        echo "</td>
                    <td>";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "return", array()), 'widget');
        echo "</td>
                    ";
        // line 213
        echo "                 </tr>
               </table>
              </div>
              ";
        // line 216
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDetails\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:1%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDetails\" style=\"text-align:center; color:blue\"><i class=\"fa fa-book\"></i> Borrow Details</h4>
              </div>
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Date Requested</th>
                \t<th> Names and Surname</th>
                \t<tr>
                \t\t<td><input id=\"dateRequested\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"name\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>User Category</th>
                \t<th>Registration Number</th>
                \t<tr>
                \t\t<td><input id=\"userCategory\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"registrationNumber\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Program and Level of Study</th>
                \t<th>Phone Number</th>
                \t<tr>
                \t\t<td><input id=\"programLevel\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"phone\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>  
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Email</th>
                \t<tr>
                \t\t<td><input id=\"email\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>  
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Document Title</th>
                \t<th>Author(s)</th>
                \t<tr>
                \t\t<td><input id=\"title\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"author\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Editor</th>
                \t<th>Edition</th>
                \t<th>ISBN</th>
                \t<tr>
                \t\t<td><input id=\"editor\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"edition\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"isbn\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>             
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Code of Reference</th>
                \t<th>Librarian ID</th>
                \t<tr>
                \t\t<td><input id=\"code\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"librarianId\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Dates Borrowed</th>
                \t<tr>
                \t\t";
        // line 290
        echo "                    <td><textarea id=\"datesBorrowed\" style=\"width:100%\"></textarea></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                  <th>Date Returned</th>
                  <tr>
                    <td><input id=\"dateReturned\" type=\"text\" class=\"form-control\"/></td>
                  </tr>
                  </table>
                </div> 
              </div>
              <div class=\"modal-footer\" style=\"margin:auto\">
                   <a class=\"btn btn-primary \" data-dismiss=\"modal\" style=\"width:20%\"> OK </a>
              </div>
            </div>
          </div>
        </div>

";
        
        $__internal_ff1c1ab5a43cf390d2a43f9c61db4fbe3079855e8042ea34cc716ff869751909->leave($__internal_ff1c1ab5a43cf390d2a43f9c61db4fbe3079855e8042ea34cc716ff869751909_prof);

        
        $__internal_2c35aa60e8a63acac39784a0ea4d7315ad0e99335a0ceccb7041a579c8653976->leave($__internal_2c35aa60e8a63acac39784a0ea4d7315ad0e99335a0ceccb7041a579c8653976_prof);

    }

    // line 310
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_0a278379ab65aaa3b7bbbfc1f553ce5793762f37887332604c8d0d10d6b74d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a278379ab65aaa3b7bbbfc1f553ce5793762f37887332604c8d0d10d6b74d35->enter($__internal_0a278379ab65aaa3b7bbbfc1f553ce5793762f37887332604c8d0d10d6b74d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_00339383eae8468c1731d7cace777db24bc78a5d6dd58b143c6d33c234b2a24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00339383eae8468c1731d7cace777db24bc78a5d6dd58b143c6d33c234b2a24a->enter($__internal_00339383eae8468c1731d7cace777db24bc78a5d6dd58b143c6d33c234b2a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_00339383eae8468c1731d7cace777db24bc78a5d6dd58b143c6d33c234b2a24a->leave($__internal_00339383eae8468c1731d7cace777db24bc78a5d6dd58b143c6d33c234b2a24a_prof);

        
        $__internal_0a278379ab65aaa3b7bbbfc1f553ce5793762f37887332604c8d0d10d6b74d35->leave($__internal_0a278379ab65aaa3b7bbbfc1f553ce5793762f37887332604c8d0d10d6b74d35_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/book:borrowManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 310,  595 => 290,  519 => 216,  514 => 213,  510 => 211,  506 => 210,  497 => 204,  493 => 203,  487 => 200,  483 => 199,  478 => 197,  474 => 196,  467 => 192,  450 => 177,  435 => 170,  426 => 168,  422 => 167,  418 => 166,  401 => 152,  397 => 151,  393 => 150,  389 => 149,  383 => 148,  379 => 147,  375 => 146,  369 => 145,  365 => 144,  361 => 143,  355 => 142,  351 => 141,  346 => 140,  327 => 123,  323 => 121,  319 => 119,  316 => 118,  311 => 115,  306 => 112,  304 => 111,  298 => 108,  294 => 107,  289 => 106,  275 => 100,  270 => 99,  264 => 97,  253 => 95,  245 => 93,  241 => 92,  235 => 91,  229 => 90,  221 => 89,  216 => 88,  212 => 86,  208 => 84,  205 => 83,  200 => 82,  196 => 81,  171 => 60,  162 => 59,  150 => 54,  141 => 53,  125 => 46,  119 => 43,  113 => 40,  104 => 34,  98 => 31,  92 => 27,  84 => 22,  78 => 19,  72 => 16,  66 => 12,  64 => 11,  59 => 9,  52 => 4,  43 => 3,  11 => 1,);
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
                <a href=\"{{app.request.schemeAndHttpHost ~ path('homepage') }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"{{app.request.schemeAndHttpHost ~ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li class=\"active\">
                        <a href=\"{{app.request.schemeAndHttpHost ~ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"{{app.request.schemeAndHttpHost ~ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        {% endif %}
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"{{app.request.schemeAndHttpHost ~ path('borrow', {'userId': app.user.id, 'bookId':-1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"{{app.request.schemeAndHttpHost ~ path('UserDetail',{'id': app.user.Id ,'page': 1}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"{{app.request.schemeAndHttpHost ~ path('about') }}\">About</a>
        </li>
        <li>
            <a href=\"{{app.request.schemeAndHttpHost ~ path('help') }}\">Help</a>
        </li>
        <li>
           <a href=\"{{app.request.schemeAndHttpHost ~ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
{% endblock %}

{% block status %}
  <li>Management</li>
  <li> Borrow Management</li>
{% endblock %}


{% block body %}
  <a href=\"{{app.request.schemeAndHttpHost ~ path('deleteRequested')}}\" class=\"btn btn-primary\" style=\"float:right; font-style:calibri; font-weight:bold\"><i class=\" fa fa-cross \"></i> Delete all requested </a>
\t<!-- Advanced Tables -->
\t<div class=\"panel panel-default\" style=\"margin-top:2%; font-family:calibri\">
\t\t<div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
\t\t\tBorrow Management
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date Requested</th>
\t\t\t\t\t\t\t<th>User Name</th>
\t\t\t\t\t\t\t<th>Full Name</th>
\t\t\t\t\t\t\t<th>Title and Author</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due date</th>
\t\t\t\t\t\t\t<th style=\"text-align:center; width:17%\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t<script type=\"text/javascript\" src=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/jquery.js')}}\"></script> 
\t\t\t\t\t{% for entry in booksBorrowed if (entry.status != 'Returned' and entry.status != 'Returned late') %}
            {% if entry.status == 'Late' %}
\t\t\t\t\t\t<tr class=\"odd gradeX\" style=\"color:red\">
            {% else %}
            <tr class=\"odd gradeX\">
            {% endif %}
\t\t\t\t\t\t\t<td>{{entry.dateRequested|date('F j, Y')}}</td>
\t\t\t\t\t\t\t<td id=\"user_{{entry.user.id}}_{{entry.book.id}}\">{{entry.user.username}}</td>
\t\t\t\t\t\t\t<td>{{entry.user.familyName}} {{entry.user.firstName}}</td>
\t\t\t\t\t\t\t<td>{{entry.book.title}} by {{entry.book.author}}</td>\t
              {% if entry.status != 'Late' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t  <td class=\"center\" id=\"status{{entry.user.id}}{{entry.book.id}}\">{{entry.status}}</td>
              {% else %}
                <td class=\"center\" id=\"status{{entry.user.id}}{{entry.book.id}}\">{{entry.status}} of {{entry.delay}}</td>
              {% endif %}
\t\t\t\t\t\t\t<td class=\"center\">{{entry.dueDate|date('F j, Y')}}</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" id=\"borrow{{entry.user.id}}{{entry.book.id}}\"><i class=\"fa fa-refresh\"></i> Update</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" id=\"details{{entry.user.id}}{{entry.book.id}}\">Details</button><a href=\"{{app.request.schemeAndHttpHost ~ path('topdf',{'data': entry.id}) }}\"><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/pdf.jpg') }}\" alt=\"\" width=\"20px\" height=\"30px\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
                        
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\t\t\$('#borrow{{entry.user.id}}{{entry.book.id}}').click(function() {
                  \$('#form_username').val(\"{{entry.user.username}}\");
                  \$('#form_bookId').val(\"{{entry.book.id}}\");
                  document.getElementById('form_username').readOnly = true;
                  document.getElementById('form_bookId').readOnly = true;
                  {% if entry.status == 'Late'%}
                    document.getElementById('form_borrow').disabled = true;
                    document.getElementById('form_borrow').style.background = \"grey\";
                  {% else %}
                    document.getElementById('form_borrow').disabled = false;
                    document.getElementById('form_borrow').style.background = \"blue\";
                  {% endif %}
                  {% if entry.status == 'Borrowed'%}
                     document.getElementById('form_borrow').innerHTML = 'Renew';
                  {% else %}
                     document.getElementById('form_borrow').innerHTML = 'Borrow';
                  {% endif %}
                  \$('#myModalDueDate').modal('show');
                  \$( \"form\" ).submit(function( event ) {
                      \$( \"#form_borrow\" ).click(function() {
                      var year = document.getElementById('form_Due_date_year');
                      var yearVal = year.options[year.selectedIndex].value;
                      var month = document.getElementById('form_Due_date_month');
                      var monthVal = month.options[month.selectedIndex].value;
                      var day = document.getElementById('form_Due_date_day');
                      var dayVal = day.options[day.selectedIndex].value;
                      var date = new Date(yearVal, monthVal-1, dayVal);
                      if ( date <= Date.now() ){
                        alert(\"Due date must be greater than today!\");
                        event.preventDefault();
                      }
                    })
                  })
                              }); 
\t\t\t\t\t\t\t  \$('#details{{entry.user.id}}{{entry.book.id}}').click(function() {
\t\t\t\t\t\t\t\t\tvar dateRequested = \"{{entry.dateRequested|date('F j, Y')}}\";
\t\t\t\t\t\t\t\t\tvar name = \"{{entry.user.familyName}} {{entry.user.firstName}}\";
                  var userCategory = \"{{entry.user.userCategory}}\";
                  var registrationNumber = \"{{entry.user.studentID}}\";
                  var programLevel = \"{{entry.user.specialty}} {{entry.user.batch}}\";
                  var phone = \"{{entry.user.phoneNumber}}\";
                  var email = \"{{entry.user.email}}\";
                  var title = \"{{entry.book.title}} ({{entry.book.subTitle}})\";
                  var author = \"{{entry.book.author}}\";
                  var editor = \"{{entry.book.editor}}\";
                  var edition = \"{{entry.book.edition}}\";
                  var isbn = \"{{entry.book.isbn}}\";
                  var datesBorrowed = \"\";
\t\t\t\t\t\t\t\t\t\$('#dateRequested').val(dateRequested);
\t\t\t\t\t\t\t\t\t\$('#name').val(name);
                  \$('#userCategory').val(userCategory);
                  \$('#registrationNumber').val(registrationNumber);
                  \$('#programLevel').val(programLevel);
                  \$('#phone').val(phone);
                  \$('#email').val(email);
                  \$('#title').val(title);
                  \$('#author').val(author);
                  \$('#editor').val(editor);
                  \$('#edition').val(edition);
                  \$('#isbn').val(isbn);
                  \$('#code').val(\"{{entry.id}}\");
                  {% for dates in entry.datesBorrowed %}
                      datesBorrowed = datesBorrowed.concat(\"{{dates.dateBorrowed|date('F j, Y')}} | \"); 
                  {% endfor %}
                  \$('#dateReturned').val(\"{{entry.dateReturned|date('F j, Y')}}\");
                  \$('#datesBorrowed').val(datesBorrowed);
\t\t\t\t\t\t\t\t\t\$('#myModalDetails').modal('show');
                              });
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t<!--End Advanced Tables -->

\t<div class=\"modal fade\" id=\"myModalDueDate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDueDate\" style=\"text-align:center; color:blue\">Status Update</h4>
              </div>
              {{form_start(form)}}
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                \t<th>{{ form_label(form.username) }}</th>
                \t<th> {{ form_label(form.bookId) }} </th>
                \t<tr>
                \t\t<td>{{ form_widget(form.username) }}</td>
                \t\t<td>{{form_widget(form.bookId)}}</td>
                \t</tr>
                  </table>
                  {{form_widget(form.Due_date)}}
                  {{form_errors(form.Due_date)}}
                </div> 
              </div>
              <div class=\"modal-footer\">
              \t<table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>{#<input class=\"form-control\" id=\"submit\" style=\"font-weight:bold; color:white; background-color:#20B2AA; margin-bottom:0px\" type=\"submit\" value=\"{{ 'Borrow'|trans }}\" />#}{{form_widget(form.borrow)}}</td>
                    <td>{{form_widget(form.return)}}</td>
                    {#<td><a class=\"btn btn-default \" data-dismiss=\"modal\" style=\" margin-bottom:0px \"> cancel </a></td>#}
                 </tr>
               </table>
              </div>
              {{form_end(form)}}
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDetails\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:1%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDetails\" style=\"text-align:center; color:blue\"><i class=\"fa fa-book\"></i> Borrow Details</h4>
              </div>
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Date Requested</th>
                \t<th> Names and Surname</th>
                \t<tr>
                \t\t<td><input id=\"dateRequested\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"name\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>User Category</th>
                \t<th>Registration Number</th>
                \t<tr>
                \t\t<td><input id=\"userCategory\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"registrationNumber\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Program and Level of Study</th>
                \t<th>Phone Number</th>
                \t<tr>
                \t\t<td><input id=\"programLevel\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"phone\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>  
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Email</th>
                \t<tr>
                \t\t<td><input id=\"email\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>  
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Document Title</th>
                \t<th>Author(s)</th>
                \t<tr>
                \t\t<td><input id=\"title\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"author\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Editor</th>
                \t<th>Edition</th>
                \t<th>ISBN</th>
                \t<tr>
                \t\t<td><input id=\"editor\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"edition\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"isbn\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>             
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Code of Reference</th>
                \t<th>Librarian ID</th>
                \t<tr>
                \t\t<td><input id=\"code\" type=\"text\" class=\"form-control\"/></td>
                \t\t<td><input id=\"librarianId\" type=\"text\" class=\"form-control\"/></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                \t<th>Dates Borrowed</th>
                \t<tr>
                \t\t{#<td><input id=\"datesBorrowed\" type=\"text\" class=\"form-control\"/></td>#}
                    <td><textarea id=\"datesBorrowed\" style=\"width:100%\"></textarea></td>
                \t</tr>
                  </table>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                  <th>Date Returned</th>
                  <tr>
                    <td><input id=\"dateReturned\" type=\"text\" class=\"form-control\"/></td>
                  </tr>
                  </table>
                </div> 
              </div>
              <div class=\"modal-footer\" style=\"margin:auto\">
                   <a class=\"btn btn-primary \" data-dismiss=\"modal\" style=\"width:20%\"> OK </a>
              </div>
            </div>
          </div>
        </div>

{% endblock %}

{% block pagination %}
{% endblock %}
", ":pkflibrary/book:borrowManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/book/borrowManagement.html.twig");
    }
}
