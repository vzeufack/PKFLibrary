<?php

/* :pkflibrary/category:categoryList.html.twig */
class __TwigTemplate_8b71d3e8de142dce4da86bac9621243a91f2d71b854c3f9cb8956cc2957e3a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/category:categoryList.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'status' => array($this, 'block_status'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'searchAdd' => array($this, 'block_searchAdd'),
            'pagination' => array($this, 'block_pagination'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/book/book_list.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63dda2ac1bbe2bfb759c7fadee82b06d4d930fee91fc1e1e1732902f314da45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dda2ac1bbe2bfb759c7fadee82b06d4d930fee91fc1e1e1732902f314da45c->enter($__internal_63dda2ac1bbe2bfb759c7fadee82b06d4d930fee91fc1e1e1732902f314da45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/category:categoryList.html.twig"));

        $__internal_dc5fb6caa1153b0d4ccbffb1cacef1729249c046def6e1386be29df55a8e7c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5fb6caa1153b0d4ccbffb1cacef1729249c046def6e1386be29df55a8e7c74->enter($__internal_dc5fb6caa1153b0d4ccbffb1cacef1729249c046def6e1386be29df55a8e7c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/category:categoryList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63dda2ac1bbe2bfb759c7fadee82b06d4d930fee91fc1e1e1732902f314da45c->leave($__internal_63dda2ac1bbe2bfb759c7fadee82b06d4d930fee91fc1e1e1732902f314da45c_prof);

        
        $__internal_dc5fb6caa1153b0d4ccbffb1cacef1729249c046def6e1386be29df55a8e7c74->leave($__internal_dc5fb6caa1153b0d4ccbffb1cacef1729249c046def6e1386be29df55a8e7c74_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0fac4da5c5c6a16cc64508733b16eb781689d1d06c864b785337686e93c6758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fac4da5c5c6a16cc64508733b16eb781689d1d06c864b785337686e93c6758->enter($__internal_e0fac4da5c5c6a16cc64508733b16eb781689d1d06c864b785337686e93c6758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58f3c8a5922837ea274e482a8d208423c1cb90b62c45eea7ac7ab45cc02b9ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f3c8a5922837ea274e482a8d208423c1cb90b62c45eea7ac7ab45cc02b9ccc->enter($__internal_58f3c8a5922837ea274e482a8d208423c1cb90b62c45eea7ac7ab45cc02b9ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
    .error_right{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
        float:right;
     }

     .error_left{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
     }
  </style>
";
        
        $__internal_58f3c8a5922837ea274e482a8d208423c1cb90b62c45eea7ac7ab45cc02b9ccc->leave($__internal_58f3c8a5922837ea274e482a8d208423c1cb90b62c45eea7ac7ab45cc02b9ccc_prof);

        
        $__internal_e0fac4da5c5c6a16cc64508733b16eb781689d1d06c864b785337686e93c6758->leave($__internal_e0fac4da5c5c6a16cc64508733b16eb781689d1d06c864b785337686e93c6758_prof);

    }

    // line 23
    public function block_status($context, array $blocks = array())
    {
        $__internal_4577971ca8be10793c20b0782783328f12c5b8503ef7458dd5a1a7adb4019175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4577971ca8be10793c20b0782783328f12c5b8503ef7458dd5a1a7adb4019175->enter($__internal_4577971ca8be10793c20b0782783328f12c5b8503ef7458dd5a1a7adb4019175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_c37ab71736c9d2076037136ac65a93cf6ea5b39482211ba13c12232b8712dd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37ab71736c9d2076037136ac65a93cf6ea5b39482211ba13c12232b8712dd22->enter($__internal_c37ab71736c9d2076037136ac65a93cf6ea5b39482211ba13c12232b8712dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 24
        echo "  <li><a href=\"\" style=\"color:blue\">Management   /   Category Management</a></li>
";
        
        $__internal_c37ab71736c9d2076037136ac65a93cf6ea5b39482211ba13c12232b8712dd22->leave($__internal_c37ab71736c9d2076037136ac65a93cf6ea5b39482211ba13c12232b8712dd22_prof);

        
        $__internal_4577971ca8be10793c20b0782783328f12c5b8503ef7458dd5a1a7adb4019175->leave($__internal_4577971ca8be10793c20b0782783328f12c5b8503ef7458dd5a1a7adb4019175_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ed45dc66301e2dc8709cd8609f4c653a87c063ecd6ca92c8b485762612b6ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed45dc66301e2dc8709cd8609f4c653a87c063ecd6ca92c8b485762612b6ecc->enter($__internal_6ed45dc66301e2dc8709cd8609f4c653a87c063ecd6ca92c8b485762612b6ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04c2e66609752ddff89b03f3a8613e2a4fa2e5bf127c64cf67a9be05ff7048fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c2e66609752ddff89b03f3a8613e2a4fa2e5bf127c64cf67a9be05ff7048fe->enter($__internal_04c2e66609752ddff89b03f3a8613e2a4fa2e5bf127c64cf67a9be05ff7048fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
            <li>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
                        <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 51
        echo "        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => 1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">Help</a>
        </li>
        <li>
           <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_04c2e66609752ddff89b03f3a8613e2a4fa2e5bf127c64cf67a9be05ff7048fe->leave($__internal_04c2e66609752ddff89b03f3a8613e2a4fa2e5bf127c64cf67a9be05ff7048fe_prof);

        
        $__internal_6ed45dc66301e2dc8709cd8609f4c653a87c063ecd6ca92c8b485762612b6ecc->leave($__internal_6ed45dc66301e2dc8709cd8609f4c653a87c063ecd6ca92c8b485762612b6ecc_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85b5f2eb64f6017672e2e872c3f908d1268e8bc84f324194b0bda586b1d6661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85b5f2eb64f6017672e2e872c3f908d1268e8bc84f324194b0bda586b1d6661->enter($__internal_d85b5f2eb64f6017672e2e872c3f908d1268e8bc84f324194b0bda586b1d6661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83f0ea60e9ff28bad3447450cb2304d34617f7ffb4074cdd1a7a3ef39e3b78a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f0ea60e9ff28bad3447450cb2304d34617f7ffb4074cdd1a7a3ef39e3b78a7->enter($__internal_83f0ea60e9ff28bad3447450cb2304d34617f7ffb4074cdd1a7a3ef39e3b78a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "  ";
        $this->displayBlock('searchAdd', $context, $blocks);
        // line 83
        echo "  <!-- Advanced Tables -->
  <div class=\"panel panel-default\" style=\"margin-top:4%; font-family:calibri\">
    <div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
      Category Management
    </div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
          <thead>
            <tr>
              <th>Category Code</th>
              <th>Category Name</th>
              <th style=\"text-align:center\">Actions</th>
            </tr>
          </thead>
          <tbody>
          <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script> 
          <link href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 102
            echo "            <tr class=\"odd gradeX\">
              <td style=\"color:blue; font-size:18px\" id=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "</td>
              <td style=\"color:blue; font-size:18px\" id=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</td>
              <td class=\"center\" style=\"text-align:center\">
                <button class=\"btn btn-primary\" id=\"editCategory";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\"><i class=\"fa fa-refresh\"></i> Edit</button>
                <button class=\"btn btn-danger\" id=\"deleteCategory";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\">Delete</button>
              </td>
            </tr>
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 111
                echo "              <tr class=\"even gradeC\">
                 <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "</td>
                 <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryName", array()), "html", null, true);
                echo "</td>
                 <td class=\"center\" style=\"text-align:center\">
                <button class=\"btn btn-primary\" id=\"editSubCategory";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\"><i class=\"fa fa-refresh\"></i> Edit</button>
                <button class=\"btn btn-danger\" id=\"deleteSubCategory";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\">Delete</button>
                 </td>
                </tr>

                <script>
                   \$(function() {
                        \$(\"#dataTables-example\").on(\"click\", \"#editSubCategory";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\", function(){
                        //\$('#editSubCategory";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "').click(function() {
                        //\$('#myModalLabelAddSubCategory').val(\"Edit Subcategory\");
                        document.getElementById(\"myModalLabelAddSubCategory\").innerHTML = \"Edit Subcategory\";
                        \$('#appbundle_category_subCategoryCode').val(\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\");
                        document.getElementById('appbundle_category_subCategoryCode').readOnly = true;
                        \$('#appbundle_category_subCategoryName').val(\"";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryName", array()), "html", null, true);
                echo "\");
                        \$('#appbundle_category_category').val(\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "categoryCode", array()), "html", null, true);
                echo "\");
                        
                        \$('#myModalAddSubCategory').modal('show');
                      });
                        \$(\"#dataTables-example\").on(\"click\", \"#deleteSubCategory";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\", function(){
                        //\$('#deleteSubCategory";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "').click(function() {
                          \$('#form_subCategoryCode').val(\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryCode", array()), "html", null, true);
                echo "\");
                          \$('#form_subCategoryName').val(\"";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryName", array()), "html", null, true);
                echo "\");
                          document.getElementById('form_subCategoryCode').readOnly = true;
                          document.getElementById('form_subCategoryName').readOnly = true;
                          \$('#myModalDeleteSubCategory').modal('show');
                        });
                   });
                </script>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                        
            <script>
              \$(function() {
                \$(\"#dataTables-example\").on(\"click\", \"#editCategory";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\", function(){
                  document.getElementById(\"myModalLabelAddCategory\").innerHTML = \"Edit category\";
                //\$('#editCategory";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "').click(function() {
                  \$('#appbundle_category_categoryCode').val(\"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\");
                  \$('#appbundle_category_categoryName').val(\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "\");
                  document.getElementById('appbundle_category_categoryCode').readOnly = true;
                  \$('#myModalAddCategory').modal('show');
                              }); 
                 \$(\"#dataTables-example\").on(\"click\", \"#deleteCategory";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\", function(){
                 //\$('#deleteCategory";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "').click(function() {
                  \$('#form_categoryCode').val(\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\");
                  \$('#form_categoryName').val(\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "\");
                  document.getElementById('form_categoryCode').readOnly = true;
                  document.getElementById('form_categoryName').readOnly = true;
                  \$('#myModalDeleteCategory').modal('show');
                  });
              });
            </script>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!--End Advanced Tables -->

    <div class=\"modal fade\" id=\"myModalAddCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelAddCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelAddCategory\" style=\"text-align:center; color:blue\">Add Category</h4>
              </div>
              ";
        // line 182
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                  <tr> <th>";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryCode", array()), 'label');
        echo "</th> </tr>
                  <tr> <td>";
        // line 187
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryCode", array()), 'widget');
        echo "</td> </tr>
                  <tr class=\"error_left\"> <td>";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryCode", array()), 'errors');
        echo "</td> </tr>
                  <tr> <th> ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryName", array()), 'label');
        echo " </th> </tr>
                  <tr> <td>";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryName", array()), 'widget');
        echo "</td> </tr>
                  <tr class=\"error_left\"> <td>";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryName", array()), 'errors');
        echo "</td> </tr>
                  </table>                  
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "</td>
                    ";
        // line 200
        echo "                 </tr>
               </table>
              </div>
              ";
        // line 203
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDeleteCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelDeleteCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteCategory\" style=\"text-align:center; color:blue\">Delete Category</h4>
              </div>
              ";
        // line 215
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <tr><th>";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "categoryCode", array()), 'label');
        echo "</th></tr>
                    <tr><td>";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "categoryCode", array()), 'widget');
        echo "</td></tr>
                    <tr><th>";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "categoryName", array()), 'label');
        echo "</th></tr>
                    <tr><td>";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "categoryName", array()), 'widget');
        echo "</td></tr>
                  </table>             
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "submit", array()), 'widget');
        echo "</td>
                    ";
        // line 231
        echo "                 </tr>
               </table>
              </div>
              ";
        // line 234
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalAddSubCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelAddSubCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelAddSubCategory\" style=\"text-align:center; color:blue; font-weight:bold\">Add Subcategory</h4>
              </div>
              ";
        // line 246
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), 'form_start');
        echo "
              <div class=\"modal-body row\" style=\"text-align:left\">
                  <div class=\"\" style=\"font-family:'calibri'; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                      <tr><td>";
        // line 250
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryCode", array()), 'label');
        echo "</td></tr>
                      <tr><td>";
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryCode", array()), 'widget');
        echo "</td></tr>
                      <tr class=\"error_left\"><td>";
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryCode", array()), 'errors');
        echo "</td></tr>
                      <tr><td> ";
        // line 253
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryName", array()), 'label');
        echo " </td></tr>
                      <tr><td>";
        // line 254
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryName", array()), 'widget');
        echo "</td></tr>
                      <tr class=\"error_left\"><td>";
        // line 255
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "subCategoryName", array()), 'errors');
        echo "</td></tr>
                      <tr><td> ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "category", array()), 'label');
        echo " </td></tr>
                      <tr><td>";
        // line 257
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "category", array()), 'widget');
        echo "</td></tr>
                      <tr class=\"error_left\"><td>";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "category", array()), 'errors');
        echo "</td></tr>
                  </table>                  
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>";
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "submit", array()), 'widget');
        echo "</td>
                    ";
        // line 267
        echo "                 </tr>
               </table>
              </div>
              ";
        // line 270
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), 'form_end');
        echo "
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDeleteSubCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelDeleteSubCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteSubCategory\" style=\"text-align:center; color:blue\">Delete Subcategory</h4>
              </div>
              ";
        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), 'form_start');
        echo "
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                  <tr><th>";
        // line 286
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), "subCategoryCode", array()), 'label');
        echo "</th></tr>
                  <tr><td>";
        // line 287
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), "subCategoryCode", array()), 'widget');
        echo "</td></tr>
                  <tr><th>";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), "subCategoryName", array()), 'label');
        echo "</th></tr>
                  <tr><td>";
        // line 289
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), "subCategoryName", array()), 'widget');
        echo "</td></tr>
                  </table>             
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>";
        // line 296
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), "submit", array()), 'widget');
        echo "</td>
                    ";
        // line 298
        echo "                 </tr>
               </table>
              </div>
              ";
        // line 301
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form5"]) ? $context["form5"] : $this->getContext($context, "form5")), 'form_end');
        echo "
            </div>
          </div>
        </div>


";
        
        $__internal_83f0ea60e9ff28bad3447450cb2304d34617f7ffb4074cdd1a7a3ef39e3b78a7->leave($__internal_83f0ea60e9ff28bad3447450cb2304d34617f7ffb4074cdd1a7a3ef39e3b78a7_prof);

        
        $__internal_d85b5f2eb64f6017672e2e872c3f908d1268e8bc84f324194b0bda586b1d6661->leave($__internal_d85b5f2eb64f6017672e2e872c3f908d1268e8bc84f324194b0bda586b1d6661_prof);

    }

    // line 79
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_3c7971b6a64ea4ea88d77ea078735c684182d223200a587215694e11ec8611e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7971b6a64ea4ea88d77ea078735c684182d223200a587215694e11ec8611e4->enter($__internal_3c7971b6a64ea4ea88d77ea078735c684182d223200a587215694e11ec8611e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_976b685759fadd726d3ad8fefbf9f6ac9137e48c34cc6ae026869dca230061c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b685759fadd726d3ad8fefbf9f6ac9137e48c34cc6ae026869dca230061c2->enter($__internal_976b685759fadd726d3ad8fefbf9f6ac9137e48c34cc6ae026869dca230061c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 80
        echo "     <a id=\"addCategoryButton\" class=\"btn btn-default\" style=\"float:right; margin-right:0px; margin-bottom:30px; font-family:calibri\"><i class=\"fa fa-plus\"></i> Add Category</a>
     <a class=\"btn btn-default\" id=\"addSubCategoryButton\" style=\"float:left; margin-right:0px; margin-bottom:30px; font-family:calibri\"><i class=\"fa fa-plus\" ></i> Add Subcategory </a>
    ";
        
        $__internal_976b685759fadd726d3ad8fefbf9f6ac9137e48c34cc6ae026869dca230061c2->leave($__internal_976b685759fadd726d3ad8fefbf9f6ac9137e48c34cc6ae026869dca230061c2_prof);

        
        $__internal_3c7971b6a64ea4ea88d77ea078735c684182d223200a587215694e11ec8611e4->leave($__internal_3c7971b6a64ea4ea88d77ea078735c684182d223200a587215694e11ec8611e4_prof);

    }

    // line 309
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_60b40220b37cc005131f8f8dc0af0dd57ba53591ddcb06b7ebc407c1f9b48b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b40220b37cc005131f8f8dc0af0dd57ba53591ddcb06b7ebc407c1f9b48b2a->enter($__internal_60b40220b37cc005131f8f8dc0af0dd57ba53591ddcb06b7ebc407c1f9b48b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_860f9c75cf11a008dc50452fb90cbf5458e48326d90453cce33d6f616cf8224d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860f9c75cf11a008dc50452fb90cbf5458e48326d90453cce33d6f616cf8224d->enter($__internal_860f9c75cf11a008dc50452fb90cbf5458e48326d90453cce33d6f616cf8224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_860f9c75cf11a008dc50452fb90cbf5458e48326d90453cce33d6f616cf8224d->leave($__internal_860f9c75cf11a008dc50452fb90cbf5458e48326d90453cce33d6f616cf8224d_prof);

        
        $__internal_60b40220b37cc005131f8f8dc0af0dd57ba53591ddcb06b7ebc407c1f9b48b2a->leave($__internal_60b40220b37cc005131f8f8dc0af0dd57ba53591ddcb06b7ebc407c1f9b48b2a_prof);

    }

    // line 312
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3501cddbd5d406df1c0e3ca28768f6057e5bdbb4d1a5cb417b8c1830ff98bb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3501cddbd5d406df1c0e3ca28768f6057e5bdbb4d1a5cb417b8c1830ff98bb86->enter($__internal_3501cddbd5d406df1c0e3ca28768f6057e5bdbb4d1a5cb417b8c1830ff98bb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93c09f0adc619eed7ab11a123f92365dba4d1e047d4fb9e0baaf65c3ac2b513f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c09f0adc619eed7ab11a123f92365dba4d1e047d4fb9e0baaf65c3ac2b513f->enter($__internal_93c09f0adc619eed7ab11a123f92365dba4d1e047d4fb9e0baaf65c3ac2b513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 313
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
  \$('#dataTables-example').dataTable(
  {
     \"bSort\" : false
  });
  \$('#addSubCategoryButton').click(function() {
    document.getElementById(\"myModalLabelAddSubCategory\").innerHTML = \"Add Subcategory\";    
    \$('#myModalAddSubCategory').modal('show');    
  });
  \$('#addCategoryButton').click(function() {
    document.getElementById(\"myModalLabelAddCategory\").innerHTML = \"Add category\";    
    \$('#myModalAddCategory').modal('show');    
  });
  </script>
";
        
        $__internal_93c09f0adc619eed7ab11a123f92365dba4d1e047d4fb9e0baaf65c3ac2b513f->leave($__internal_93c09f0adc619eed7ab11a123f92365dba4d1e047d4fb9e0baaf65c3ac2b513f_prof);

        
        $__internal_3501cddbd5d406df1c0e3ca28768f6057e5bdbb4d1a5cb417b8c1830ff98bb86->leave($__internal_3501cddbd5d406df1c0e3ca28768f6057e5bdbb4d1a5cb417b8c1830ff98bb86_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/category:categoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 313,  700 => 312,  683 => 309,  671 => 80,  662 => 79,  645 => 301,  640 => 298,  636 => 296,  626 => 289,  622 => 288,  618 => 287,  614 => 286,  607 => 282,  592 => 270,  587 => 267,  583 => 265,  573 => 258,  569 => 257,  565 => 256,  561 => 255,  557 => 254,  553 => 253,  549 => 252,  545 => 251,  541 => 250,  534 => 246,  519 => 234,  514 => 231,  510 => 229,  500 => 222,  496 => 221,  492 => 220,  488 => 219,  481 => 215,  466 => 203,  461 => 200,  457 => 198,  447 => 191,  443 => 190,  439 => 189,  435 => 188,  431 => 187,  427 => 186,  420 => 182,  402 => 166,  388 => 158,  384 => 157,  380 => 156,  376 => 155,  369 => 151,  365 => 150,  361 => 149,  356 => 147,  351 => 144,  337 => 136,  333 => 135,  329 => 134,  325 => 133,  318 => 129,  314 => 128,  309 => 126,  303 => 123,  299 => 122,  290 => 116,  286 => 115,  281 => 113,  277 => 112,  274 => 111,  270 => 110,  264 => 107,  260 => 106,  253 => 104,  247 => 103,  244 => 102,  240 => 101,  236 => 100,  232 => 99,  214 => 83,  211 => 79,  202 => 78,  186 => 70,  180 => 67,  174 => 64,  165 => 58,  159 => 55,  153 => 51,  145 => 46,  139 => 43,  133 => 40,  127 => 36,  125 => 35,  120 => 33,  113 => 28,  104 => 27,  93 => 24,  84 => 23,  55 => 4,  46 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{parent()}}
    <style>
    .error_right{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
        float:right;
     }

     .error_left{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
     }
  </style>
{% endblock %}

{% block status %}
  <li><a href=\"\" style=\"color:blue\">Management   /   Category Management</a></li>
{% endblock %}

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
            <li>
                <a href=\"{{ path('homepage') }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
                        <a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"{{ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        {% endif %}
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
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


{% block body %}
  {% block searchAdd %}
     <a id=\"addCategoryButton\" class=\"btn btn-default\" style=\"float:right; margin-right:0px; margin-bottom:30px; font-family:calibri\"><i class=\"fa fa-plus\"></i> Add Category</a>
     <a class=\"btn btn-default\" id=\"addSubCategoryButton\" style=\"float:left; margin-right:0px; margin-bottom:30px; font-family:calibri\"><i class=\"fa fa-plus\" ></i> Add Subcategory </a>
    {% endblock %}
  <!-- Advanced Tables -->
  <div class=\"panel panel-default\" style=\"margin-top:4%; font-family:calibri\">
    <div class=\"panel-heading\" style=\"text-align:center; font-weight:bold\">
      Category Management
    </div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
          <thead>
            <tr>
              <th>Category Code</th>
              <th>Category Name</th>
              <th style=\"text-align:center\">Actions</th>
            </tr>
          </thead>
          <tbody>
          <script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script> 
          <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
          {% for category in categories %}
            <tr class=\"odd gradeX\">
              <td style=\"color:blue; font-size:18px\" id=\"{{category.categoryCode}}\">{{category.categoryCode}}</td>
              <td style=\"color:blue; font-size:18px\" id=\"{{category.categoryName}}\">{{category.categoryName}}</td>
              <td class=\"center\" style=\"text-align:center\">
                <button class=\"btn btn-primary\" id=\"editCategory{{category.categoryCode}}\"><i class=\"fa fa-refresh\"></i> Edit</button>
                <button class=\"btn btn-danger\" id=\"deleteCategory{{category.categoryCode}}\">Delete</button>
              </td>
            </tr>
            {% for subcategory in category.subcategories %}
              <tr class=\"even gradeC\">
                 <td>{{subcategory.subCategoryCode}}</td>
                 <td>{{subcategory.subCategoryName}}</td>
                 <td class=\"center\" style=\"text-align:center\">
                <button class=\"btn btn-primary\" id=\"editSubCategory{{subcategory.subCategoryCode}}\"><i class=\"fa fa-refresh\"></i> Edit</button>
                <button class=\"btn btn-danger\" id=\"deleteSubCategory{{subcategory.subCategoryCode}}\">Delete</button>
                 </td>
                </tr>

                <script>
                   \$(function() {
                        \$(\"#dataTables-example\").on(\"click\", \"#editSubCategory{{subcategory.subCategoryCode}}\", function(){
                        //\$('#editSubCategory{{subcategory.subCategoryCode}}').click(function() {
                        //\$('#myModalLabelAddSubCategory').val(\"Edit Subcategory\");
                        document.getElementById(\"myModalLabelAddSubCategory\").innerHTML = \"Edit Subcategory\";
                        \$('#appbundle_category_subCategoryCode').val(\"{{subcategory.subCategoryCode}}\");
                        document.getElementById('appbundle_category_subCategoryCode').readOnly = true;
                        \$('#appbundle_category_subCategoryName').val(\"{{subcategory.subCategoryName}}\");
                        \$('#appbundle_category_category').val(\"{{subcategory.category.categoryCode}}\");
                        
                        \$('#myModalAddSubCategory').modal('show');
                      });
                        \$(\"#dataTables-example\").on(\"click\", \"#deleteSubCategory{{subcategory.subCategoryCode}}\", function(){
                        //\$('#deleteSubCategory{{subcategory.subCategoryCode}}').click(function() {
                          \$('#form_subCategoryCode').val(\"{{subcategory.subCategoryCode}}\");
                          \$('#form_subCategoryName').val(\"{{subcategory.subCategoryName}}\");
                          document.getElementById('form_subCategoryCode').readOnly = true;
                          document.getElementById('form_subCategoryName').readOnly = true;
                          \$('#myModalDeleteSubCategory').modal('show');
                        });
                   });
                </script>
            {% endfor %}
                        
            <script>
              \$(function() {
                \$(\"#dataTables-example\").on(\"click\", \"#editCategory{{category.categoryCode}}\", function(){
                  document.getElementById(\"myModalLabelAddCategory\").innerHTML = \"Edit category\";
                //\$('#editCategory{{category.categoryCode}}').click(function() {
                  \$('#appbundle_category_categoryCode').val(\"{{category.categoryCode}}\");
                  \$('#appbundle_category_categoryName').val(\"{{category.categoryName}}\");
                  document.getElementById('appbundle_category_categoryCode').readOnly = true;
                  \$('#myModalAddCategory').modal('show');
                              }); 
                 \$(\"#dataTables-example\").on(\"click\", \"#deleteCategory{{category.categoryCode}}\", function(){
                 //\$('#deleteCategory{{category.categoryCode}}').click(function() {
                  \$('#form_categoryCode').val(\"{{category.categoryCode}}\");
                  \$('#form_categoryName').val(\"{{category.categoryName}}\");
                  document.getElementById('form_categoryCode').readOnly = true;
                  document.getElementById('form_categoryName').readOnly = true;
                  \$('#myModalDeleteCategory').modal('show');
                  });
              });
            </script>
          {% endfor %}
            
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!--End Advanced Tables -->

    <div class=\"modal fade\" id=\"myModalAddCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelAddCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelAddCategory\" style=\"text-align:center; color:blue\">Add Category</h4>
              </div>
              {{form_start(form)}}
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                  <tr> <th>{{ form_label(form.categoryCode) }}</th> </tr>
                  <tr> <td>{{ form_widget(form.categoryCode) }}</td> </tr>
                  <tr class=\"error_left\"> <td>{{ form_errors(form.categoryCode) }}</td> </tr>
                  <tr> <th> {{ form_label(form.categoryName) }} </th> </tr>
                  <tr> <td>{{form_widget(form.categoryName)}}</td> </tr>
                  <tr class=\"error_left\"> <td>{{ form_errors(form.categoryName) }}</td> </tr>
                  </table>                  
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>{#<input class=\"form-control\" id=\"submit\" style=\"font-weight:bold; color:white; background-color:#20B2AA; margin-bottom:0px\" type=\"submit\" value=\"{{ 'Borrow'|trans }}\" />#}{{form_widget(form.submit)}}</td>
                    {#<td><a class=\"btn btn-default \" data-dismiss=\"modal\" style=\" margin-bottom:0px \"> cancel </a></td>#}
                 </tr>
               </table>
              </div>
              {{form_end(form)}}
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDeleteCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelDeleteCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteCategory\" style=\"text-align:center; color:blue\">Delete Category</h4>
              </div>
              {{form_start(form3)}}
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <tr><th>{{ form_label(form3.categoryCode) }}</th></tr>
                    <tr><td>{{ form_widget(form3.categoryCode) }}</td></tr>
                    <tr><th>{{ form_label(form3.categoryName) }}</th></tr>
                    <tr><td>{{form_widget(form3.categoryName)}}</td></tr>
                  </table>             
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>{#<input class=\"form-control\" id=\"submit\" style=\"font-weight:bold; color:white; background-color:#20B2AA; margin-bottom:0px\" type=\"submit\" value=\"{{ 'Borrow'|trans }}\" />#}{{form_widget(form3.submit)}}</td>
                    {#<td><a class=\"btn btn-default \" data-dismiss=\"modal\" style=\" margin-bottom:0px \"> cancel </a></td>#}
                 </tr>
               </table>
              </div>
              {{form_end(form3)}}
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalAddSubCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelAddSubCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelAddSubCategory\" style=\"text-align:center; color:blue; font-weight:bold\">Add Subcategory</h4>
              </div>
              {{form_start(form4)}}
              <div class=\"modal-body row\" style=\"text-align:left\">
                  <div class=\"\" style=\"font-family:'calibri'; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                      <tr><td>{{ form_label(form4.subCategoryCode) }}</td></tr>
                      <tr><td>{{ form_widget(form4.subCategoryCode) }}</td></tr>
                      <tr class=\"error_left\"><td>{{ form_errors(form4.subCategoryCode) }}</td></tr>
                      <tr><td> {{ form_label(form4.subCategoryName) }} </td></tr>
                      <tr><td>{{form_widget(form4.subCategoryName)}}</td></tr>
                      <tr class=\"error_left\"><td>{{ form_errors(form4.subCategoryName) }}</td></tr>
                      <tr><td> {{ form_label(form4.category) }} </td></tr>
                      <tr><td>{{form_widget(form4.category)}}</td></tr>
                      <tr class=\"error_left\"><td>{{ form_errors(form4.category) }}</td></tr>
                  </table>                  
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>{#<input class=\"form-control\" id=\"submit\" style=\"font-weight:bold; color:white; background-color:#20B2AA; margin-bottom:0px\" type=\"submit\" value=\"{{ 'Borrow'|trans }}\" />#}{{form_widget(form4.submit)}}</td>
                    {#<td><a class=\"btn btn-default \" data-dismiss=\"modal\" style=\" margin-bottom:0px \"> cancel </a></td>#}
                 </tr>
               </table>
              </div>
              {{form_end(form4)}}
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalDeleteSubCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabelDeleteSubCategory\" aria-hidden=\"true\" style=\"margin-top:15%; font-family:calibri\">
          <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteSubCategory\" style=\"text-align:center; color:blue\">Delete Subcategory</h4>
              </div>
              {{form_start(form5)}}
              <div class=\"modal-body row\" style=\"text-align:center\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                  <tr><th>{{ form_label(form5.subCategoryCode) }}</th></tr>
                  <tr><td>{{ form_widget(form5.subCategoryCode) }}</td></tr>
                  <tr><th>{{ form_label(form5.subCategoryName) }}</th></tr>
                  <tr><td>{{form_widget(form5.subCategoryName)}}</td></tr>
                  </table>             
                </div> 
              </div>
              <div class=\"modal-footer\">
                <table width=\"20%\" style=\"border-spacing:5px 0px; border-collapse:separate; margin:auto\"> 
                  <tr>
                    <td>{#<input class=\"form-control\" id=\"submit\" style=\"font-weight:bold; color:white; background-color:#20B2AA; margin-bottom:0px\" type=\"submit\" value=\"{{ 'Borrow'|trans }}\" />#}{{form_widget(form5.submit)}}</td>
                    {#<td><a class=\"btn btn-default \" data-dismiss=\"modal\" style=\" margin-bottom:0px \"> cancel </a></td>#}
                 </tr>
               </table>
              </div>
              {{form_end(form5)}}
            </div>
          </div>
        </div>


{% endblock %}

{% block pagination %}
{% endblock %}

{% block javascripts %}
  {{parent()}}
  <script>
  \$('#dataTables-example').dataTable(
  {
     \"bSort\" : false
  });
  \$('#addSubCategoryButton').click(function() {
    document.getElementById(\"myModalLabelAddSubCategory\").innerHTML = \"Add Subcategory\";    
    \$('#myModalAddSubCategory').modal('show');    
  });
  \$('#addCategoryButton').click(function() {
    document.getElementById(\"myModalLabelAddCategory\").innerHTML = \"Add category\";    
    \$('#myModalAddCategory').modal('show');    
  });
  </script>
{% endblock %}", ":pkflibrary/category:categoryList.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/category/categoryList.html.twig");
    }
}
