<?php

/* pkflibrary/book/book_list.html.twig  */
class __TwigTemplate_9ac76c52d98f1e9c3c95958cad76ddf8f1e1b917f3ebc4e533ca1fd8c3d169ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/book/book_list.html.twig ", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'left_menu' => array($this, 'block_left_menu'),
            'searchAdd' => array($this, 'block_searchAdd'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e3dab13e09f33ad801c86ed041ec789c842af525c2929034da7ad7da4e7aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e3dab13e09f33ad801c86ed041ec789c842af525c2929034da7ad7da4e7aab->enter($__internal_53e3dab13e09f33ad801c86ed041ec789c842af525c2929034da7ad7da4e7aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/book_list.html.twig "));

        $__internal_d40369a7f441d6e27293170f0ba0f8493f4743bf441f2c0bc8b7417fdf06ef9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40369a7f441d6e27293170f0ba0f8493f4743bf441f2c0bc8b7417fdf06ef9a->enter($__internal_d40369a7f441d6e27293170f0ba0f8493f4743bf441f2c0bc8b7417fdf06ef9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/book_list.html.twig "));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e3dab13e09f33ad801c86ed041ec789c842af525c2929034da7ad7da4e7aab->leave($__internal_53e3dab13e09f33ad801c86ed041ec789c842af525c2929034da7ad7da4e7aab_prof);

        
        $__internal_d40369a7f441d6e27293170f0ba0f8493f4743bf441f2c0bc8b7417fdf06ef9a->leave($__internal_d40369a7f441d6e27293170f0ba0f8493f4743bf441f2c0bc8b7417fdf06ef9a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_430b8637e7b3afdfbe8bb3f05dc8781d368e95b0b234f66716607ac2f56ba97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430b8637e7b3afdfbe8bb3f05dc8781d368e95b0b234f66716607ac2f56ba97b->enter($__internal_430b8637e7b3afdfbe8bb3f05dc8781d368e95b0b234f66716607ac2f56ba97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4bd9d098a32330a0050bef2e5233278b92711d8ee59f8a01aed6505c559adf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9d098a32330a0050bef2e5233278b92711d8ee59f8a01aed6505c559adf0b->enter($__internal_4bd9d098a32330a0050bef2e5233278b92711d8ee59f8a01aed6505c559adf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/book_list.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_4bd9d098a32330a0050bef2e5233278b92711d8ee59f8a01aed6505c559adf0b->leave($__internal_4bd9d098a32330a0050bef2e5233278b92711d8ee59f8a01aed6505c559adf0b_prof);

        
        $__internal_430b8637e7b3afdfbe8bb3f05dc8781d368e95b0b234f66716607ac2f56ba97b->leave($__internal_430b8637e7b3afdfbe8bb3f05dc8781d368e95b0b234f66716607ac2f56ba97b_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed67961c1185d5994e1bb9177c97e09e3004cde1feee175621fb58fcbdb7f882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed67961c1185d5994e1bb9177c97e09e3004cde1feee175621fb58fcbdb7f882->enter($__internal_ed67961c1185d5994e1bb9177c97e09e3004cde1feee175621fb58fcbdb7f882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a50d9759410e2ff21cd2f63c604114ffab8030394b9316fc2d8f23ddb9959126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50d9759410e2ff21cd2f63c604114ffab8030394b9316fc2d8f23ddb9959126->enter($__internal_a50d9759410e2ff21cd2f63c604114ffab8030394b9316fc2d8f23ddb9959126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li class=\"active\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage")), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                         <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1))), "html", null, true);
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i> Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i> Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 32
        echo "        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1))), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Report </a>
                </li>
               <li>
                  <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => 1))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about")), "html", null, true);
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help")), "html", null, true);
        echo "\">Help</a>
        </li>
        <li>
           <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_a50d9759410e2ff21cd2f63c604114ffab8030394b9316fc2d8f23ddb9959126->leave($__internal_a50d9759410e2ff21cd2f63c604114ffab8030394b9316fc2d8f23ddb9959126_prof);

        
        $__internal_ed67961c1185d5994e1bb9177c97e09e3004cde1feee175621fb58fcbdb7f882->leave($__internal_ed67961c1185d5994e1bb9177c97e09e3004cde1feee175621fb58fcbdb7f882_prof);

    }

    // line 58
    public function block_status($context, array $blocks = array())
    {
        $__internal_cefa4a17a62084d5e3272c8db3bc2adc1e2b6736035a4f8eb19ccf73ddeebd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefa4a17a62084d5e3272c8db3bc2adc1e2b6736035a4f8eb19ccf73ddeebd2c->enter($__internal_cefa4a17a62084d5e3272c8db3bc2adc1e2b6736035a4f8eb19ccf73ddeebd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_fc730322e2d3fcad75843f7bf12486cd8f2049d4c04bbfd5d303d23a5040badd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc730322e2d3fcad75843f7bf12486cd8f2049d4c04bbfd5d303d23a5040badd->enter($__internal_fc730322e2d3fcad75843f7bf12486cd8f2049d4c04bbfd5d303d23a5040badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 59
        echo "    ";
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 60
            echo "       <li style=\"color:blue\">All Books</li>
    ";
        } else {
            // line 62
            echo "       <li style=\"color:blue\">Search results for \"";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
            echo "\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " books found</li>
    ";
        }
        
        $__internal_fc730322e2d3fcad75843f7bf12486cd8f2049d4c04bbfd5d303d23a5040badd->leave($__internal_fc730322e2d3fcad75843f7bf12486cd8f2049d4c04bbfd5d303d23a5040badd_prof);

        
        $__internal_cefa4a17a62084d5e3272c8db3bc2adc1e2b6736035a4f8eb19ccf73ddeebd2c->leave($__internal_cefa4a17a62084d5e3272c8db3bc2adc1e2b6736035a4f8eb19ccf73ddeebd2c_prof);

    }

    // line 66
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_01c3c86338f2a41e08d5712e08b0e74c7e43a86a1cc0794bed4deea04058d8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c3c86338f2a41e08d5712e08b0e74c7e43a86a1cc0794bed4deea04058d8d7->enter($__internal_01c3c86338f2a41e08d5712e08b0e74c7e43a86a1cc0794bed4deea04058d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_e3bd891e2fbb8e6d91bf69d1b7916f1a81eb4cf5e8c33564c6004fbf2592a38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bd891e2fbb8e6d91bf69d1b7916f1a81eb4cf5e8c33564c6004fbf2592a38d->enter($__internal_e3bd891e2fbb8e6d91bf69d1b7916f1a81eb4cf5e8c33564c6004fbf2592a38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 67
        echo "  <h4 style=\"text-align:center\">Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">
        <li style=\"text-align:left\"><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage")), "html", null, true);
        echo "\"><i class=\"fa fa-navicon\"></i><span style=\"margin-left:5%\">All Books</span> </a></li>
    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "                    
        <li><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCategoryBooks", array("code" => $this->getAttribute($context["category"], "categoryCode", array())))), "html", null, true);
            echo "\" class=\"\" style=\"width:90%\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</a><a class=\"toggle-custom\" id=\"btn-1\" data-toggle=\"collapse\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span></a>
          <ul class=\"nav collapse\" id=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryCode", array()), "html", null, true);
            echo "\" role=\"menu\" aria-labelledby=\"btn-1\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 75
                echo "            <li><a style=\"color:black\" href=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showSubCategoryBooks", array("code" => $this->getAttribute($context["subcategory"], "subCategoryCode", array())))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subCategoryName", array()), "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </ul>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "  </ul>
</nav> 
    
";
        
        $__internal_e3bd891e2fbb8e6d91bf69d1b7916f1a81eb4cf5e8c33564c6004fbf2592a38d->leave($__internal_e3bd891e2fbb8e6d91bf69d1b7916f1a81eb4cf5e8c33564c6004fbf2592a38d_prof);

        
        $__internal_01c3c86338f2a41e08d5712e08b0e74c7e43a86a1cc0794bed4deea04058d8d7->leave($__internal_01c3c86338f2a41e08d5712e08b0e74c7e43a86a1cc0794bed4deea04058d8d7_prof);

    }

    // line 86
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_36f44b21f306abe5debc2953038b044a0236a66532a0303b73d973252872ed5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f44b21f306abe5debc2953038b044a0236a66532a0303b73d973252872ed5c->enter($__internal_36f44b21f306abe5debc2953038b044a0236a66532a0303b73d973252872ed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_35f0d9dce57eebfe11595860777011b67ce231f661be29688a2d242b0343f3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f0d9dce57eebfe11595860777011b67ce231f661be29688a2d242b0343f3b1->enter($__internal_35f0d9dce57eebfe11595860777011b67ce231f661be29688a2d242b0343f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 87
        echo "   <div class=\"col-md-4\"> 
    ";
        // line 98
        echo "    <div>
      <table width=\"150%\" style=\"border-spacing:0px 0px; border-collapse:separate; margin-left:95%\"> 
        <tr>
          ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <td>";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword", array()), 'widget');
        echo "</td>
          <td>";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "</td>
          ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </tr>
      </table>
    </div>                  
  </div>
  ";
        // line 109
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 110
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBook", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"float:right; margin-right:0px; margin-bottom:10px; font-family:calibri; font-weight:bold; font-size:16px\"><i class=\"fa fa-plus\"></i> Add book </a>
  ";
        }
        
        $__internal_35f0d9dce57eebfe11595860777011b67ce231f661be29688a2d242b0343f3b1->leave($__internal_35f0d9dce57eebfe11595860777011b67ce231f661be29688a2d242b0343f3b1_prof);

        
        $__internal_36f44b21f306abe5debc2953038b044a0236a66532a0303b73d973252872ed5c->leave($__internal_36f44b21f306abe5debc2953038b044a0236a66532a0303b73d973252872ed5c_prof);

    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
        $__internal_003958963b8723c119eb6d64629312ab7963fdc2295246ab5314d700693e4962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003958963b8723c119eb6d64629312ab7963fdc2295246ab5314d700693e4962->enter($__internal_003958963b8723c119eb6d64629312ab7963fdc2295246ab5314d700693e4962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_58ad166e60dd9889bcd1f9f8c3de230385cbff26a49e931acaf54b1d4f9c04b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ad166e60dd9889bcd1f9f8c3de230385cbff26a49e931acaf54b1d4f9c04b1->enter($__internal_58ad166e60dd9889bcd1f9f8c3de230385cbff26a49e931acaf54b1d4f9c04b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 115
        echo "    ";
        if ((((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) != "") && ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) == 0))) {
            // line 116
            echo "       <center style=\"margin-top:10%; font-size:20px; font-weight:bold\"> No books found!</center>
    ";
        } else {
            // line 118
            echo "    <div class=\"row\">
        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 120
                echo "            <div class=\"col-md-2 img-portfolio\" >
                <a href=\" ";
                // line 121
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showBook", array("id" => $this->getAttribute($context["book"], "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))), "html", null, true);
                echo "\">                                  
                 ";
                // line 123
                echo "                     ";
                echo " 

                        <img class=\"img-responsive img-hover\"  width=\"200px\" height=\"100px\" src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute($context["book"], "coverPicture", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["book"], "coverPicture", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute($context["book"], "coverPicture", array()), "url", array()))), "html", null, true);
                echo "\" 
                             alt=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "coverPicture", array()), "alt", array()), "html", null, true);
                echo "\" style=\"margin-bottom:5px;\"
                         />
                      ";
                // line 129
                echo "                               
                 <p style=\"text-align:center; foreground-color:black; font-family:calibri; margin-bottom:0px\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
                echo "</p> 
                 <p style=\"text-align:center; color:black; font-family:calibri\">by ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
                echo "</p>        
             </a>
         </div>
         ";
                // line 134
                if ((($this->getAttribute($context["loop"], "index", array()) % 6) == 0)) {
                    // line 135
                    echo "         </div>
         <div class=\"row\">
         ";
                }
                // line 137
                echo " 
     ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo " 
 </div>
";
        }
        
        $__internal_58ad166e60dd9889bcd1f9f8c3de230385cbff26a49e931acaf54b1d4f9c04b1->leave($__internal_58ad166e60dd9889bcd1f9f8c3de230385cbff26a49e931acaf54b1d4f9c04b1_prof);

        
        $__internal_003958963b8723c119eb6d64629312ab7963fdc2295246ab5314d700693e4962->leave($__internal_003958963b8723c119eb6d64629312ab7963fdc2295246ab5314d700693e4962_prof);

    }

    // line 143
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_050106cb8f33090bacab2a4d52265d07ad721bed1935991f89a1793cbba15afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050106cb8f33090bacab2a4d52265d07ad721bed1935991f89a1793cbba15afd->enter($__internal_050106cb8f33090bacab2a4d52265d07ad721bed1935991f89a1793cbba15afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_d101e0be43220671e0943381ae2c1fba8e134fa63feb202f3849590a2f0df1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d101e0be43220671e0943381ae2c1fba8e134fa63feb202f3849590a2f0df1c5->enter($__internal_d101e0be43220671e0943381ae2c1fba8e134fa63feb202f3849590a2f0df1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 144
        echo "
 <div class=\"row text-center\">
     <div class=\"col-lg-12\">
      ";
        // line 147
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
   </div>
</div>
<!-- /.row -->
";
        
        $__internal_d101e0be43220671e0943381ae2c1fba8e134fa63feb202f3849590a2f0df1c5->leave($__internal_d101e0be43220671e0943381ae2c1fba8e134fa63feb202f3849590a2f0df1c5_prof);

        
        $__internal_050106cb8f33090bacab2a4d52265d07ad721bed1935991f89a1793cbba15afd->leave($__internal_050106cb8f33090bacab2a4d52265d07ad721bed1935991f89a1793cbba15afd_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/book_list.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 147,  442 => 144,  433 => 143,  420 => 138,  405 => 137,  400 => 135,  398 => 134,  392 => 131,  388 => 130,  385 => 129,  380 => 126,  376 => 125,  371 => 123,  367 => 121,  364 => 120,  347 => 119,  344 => 118,  340 => 116,  337 => 115,  328 => 114,  314 => 110,  312 => 109,  304 => 104,  300 => 103,  296 => 102,  292 => 101,  287 => 98,  284 => 87,  275 => 86,  262 => 81,  254 => 78,  242 => 75,  238 => 74,  234 => 73,  226 => 72,  220 => 71,  216 => 70,  211 => 67,  202 => 66,  186 => 62,  182 => 60,  179 => 59,  170 => 58,  154 => 51,  148 => 48,  142 => 45,  133 => 39,  127 => 36,  121 => 32,  113 => 27,  107 => 24,  101 => 21,  95 => 17,  93 => 16,  88 => 14,  81 => 9,  72 => 8,  60 => 5,  55 => 4,  46 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/base.html.twig '%}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/book_list.css')}}\" rel=\"stylesheet\"/>
{% endblock %}

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li class=\"active\">
                <a href=\"{{app.request.schemeAndHttpHost ~ path('homepage') }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                         <a href=\"{{app.request.schemeAndHttpHost ~ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                     </li>
                     <li>
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
    {% if keyword == \"\" %}
       <li style=\"color:blue\">All Books</li>
    {% else %}
       <li style=\"color:blue\">Search results for \"{{keyword}}\": {{ pagination.getTotalItemCount }} books found</li>
    {% endif %}
{% endblock %}

{% block left_menu %}
  <h4 style=\"text-align:center\">Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">
        <li style=\"text-align:left\"><a href=\"{{app.request.schemeAndHttpHost ~ path('homepage' )}}\"><i class=\"fa fa-navicon\"></i><span style=\"margin-left:5%\">All Books</span> </a></li>
    {% for category in categories %}                    
        <li><a href=\"{{app.request.schemeAndHttpHost ~ path('showCategoryBooks',{'code': category.categoryCode}) }}\" class=\"\" style=\"width:90%\">{{category.categoryName}}</a><a class=\"toggle-custom\" id=\"btn-1\" data-toggle=\"collapse\" data-target=\"#{{category.categoryCode}}\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span></a>
          <ul class=\"nav collapse\" id=\"{{category.categoryCode}}\" role=\"menu\" aria-labelledby=\"btn-1\">
            {% for subcategory in category.subcategories %}
            <li><a style=\"color:black\" href=\"{{app.request.schemeAndHttpHost ~ path('showSubCategoryBooks',{'code': subcategory.subCategoryCode}) }}\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> {{subcategory.subCategoryName}}</a>
            </li>
            {% endfor %}
        </ul>
        </li>
    {% endfor %}
  </ul>
</nav> 
    
{% endblock %}

{% block searchAdd %}
   <div class=\"col-md-4\"> 
    {#<div class=\"input-group\" style=\"margin-left:250px; margin-bottom:15px\">
        <input type=\"text\" class=\"form-control\" style=\"width:300px\">#
        {{form_start(form)}}
        {{form_widget(form.keyword)}}
        <span class=\"input-group-btn\">
            <button class=\"btn btn-default\" type=\"button\" ><i class=\"fa fa-search\"></i>{{form_widget(form.submit)}}</button>
        </span>
        <!-- /.input-group -->
        {{form_end(form)}}
    </div>  #}
    <div>
      <table width=\"150%\" style=\"border-spacing:0px 0px; border-collapse:separate; margin-left:95%\"> 
        <tr>
          {{form_start(form)}}
          <td>{{ form_widget(form.keyword) }}</td>
          <td>{{ form_widget(form.submit) }}</td>
          {{form_end(form)}}
        </tr>
      </table>
    </div>                  
  </div>
  {% if is_granted(\"ROLE_ADMIN\") %}
     <a href=\"{{app.request.schemeAndHttpHost ~ path('addBook', {'userId': app.user.id})}}\" class=\"btn btn-primary\" style=\"float:right; margin-right:0px; margin-bottom:10px; font-family:calibri; font-weight:bold; font-size:16px\"><i class=\"fa fa-plus\"></i> Add book </a>
  {% endif %}
{% endblock %}

{% block content %}
    {% if keyword != \"\" and pagination.getTotalItemCount == 0 %}
       <center style=\"margin-top:10%; font-size:20px; font-weight:bold\"> No books found!</center>
    {% else %}
    <div class=\"row\">
        {% for book in pagination %}
            <div class=\"col-md-2 img-portfolio\" >
                <a href=\" {{app.request.schemeAndHttpHost ~ path('showBook',{'id': book.id,'userId': app.user.id}) }}\">                                  
                 {#<img class=\"img-responsive img-hover\" src=\"{{ asset('uploads/' ~ book.coverPicture) }}\" alt=\"\" caption=\"{{book.coverPicture}}\" style=\"margin-bottom:5px;\">#}
                     {#  {% if book.coverPicture != null%} #} 

                        <img class=\"img-responsive img-hover\"  width=\"200px\" height=\"100px\" src=\"{{ asset(book.coverPicture.uploadDir ~ '/' ~ book.coverPicture.id ~ '.' ~ book.coverPicture.url) }}\" 
                             alt=\"{{ book.coverPicture.alt }}\" style=\"margin-bottom:5px;\"
                         />
                      {# {% endif %} #}
                               
                 <p style=\"text-align:center; foreground-color:black; font-family:calibri; margin-bottom:0px\">{{book.title}}</p> 
                 <p style=\"text-align:center; color:black; font-family:calibri\">by {{book.author}}</p>        
             </a>
         </div>
         {% if loop.index % 6 == 0 %}
         </div>
         <div class=\"row\">
         {% endif %} 
     {% endfor %} 
 </div>
{% endif %}
{% endblock %}

{% block pagination %}

 <div class=\"row text-center\">
     <div class=\"col-lg-12\">
      {{ knp_pagination_render(pagination) }}
   </div>
</div>
<!-- /.row -->
{% endblock %}


", "pkflibrary/book/book_list.html.twig ", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\book_list.html.twig");
    }
}
