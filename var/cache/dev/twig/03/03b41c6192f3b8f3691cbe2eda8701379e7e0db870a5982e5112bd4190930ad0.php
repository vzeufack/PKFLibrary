<?php

/* :pkflibrary/book:book_details.html.twig */
class __TwigTemplate_9a7be4872f6da71bc10347e94929fa7ae34e2abfaf8ab6f34beb865049c82d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", ":pkflibrary/book:book_details.html.twig", 1);
        $this->blocks = array(
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
        $__internal_40b4c78cc5c48fef44f5f11991159b35f2d27a9d5598292cf1e430a77108f33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b4c78cc5c48fef44f5f11991159b35f2d27a9d5598292cf1e430a77108f33c->enter($__internal_40b4c78cc5c48fef44f5f11991159b35f2d27a9d5598292cf1e430a77108f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:book_details.html.twig"));

        $__internal_17e3411a11122ddeb86d1c1898f7e5be68f317306c2e8de0db0300a778a15a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e3411a11122ddeb86d1c1898f7e5be68f317306c2e8de0db0300a778a15a6d->enter($__internal_17e3411a11122ddeb86d1c1898f7e5be68f317306c2e8de0db0300a778a15a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/book:book_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b4c78cc5c48fef44f5f11991159b35f2d27a9d5598292cf1e430a77108f33c->leave($__internal_40b4c78cc5c48fef44f5f11991159b35f2d27a9d5598292cf1e430a77108f33c_prof);

        
        $__internal_17e3411a11122ddeb86d1c1898f7e5be68f317306c2e8de0db0300a778a15a6d->leave($__internal_17e3411a11122ddeb86d1c1898f7e5be68f317306c2e8de0db0300a778a15a6d_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_290051c8e006f39fbdf57f691bb0da2f78df86d096ecc3c80c7fd5c94c449911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290051c8e006f39fbdf57f691bb0da2f78df86d096ecc3c80c7fd5c94c449911->enter($__internal_290051c8e006f39fbdf57f691bb0da2f78df86d096ecc3c80c7fd5c94c449911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_8c43ea016504161da4f14e1cd7e4cd1d597acc7eed45933149720351d0b336f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c43ea016504161da4f14e1cd7e4cd1d597acc7eed45933149720351d0b336f1->enter($__internal_8c43ea016504161da4f14e1cd7e4cd1d597acc7eed45933149720351d0b336f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_8c43ea016504161da4f14e1cd7e4cd1d597acc7eed45933149720351d0b336f1->leave($__internal_8c43ea016504161da4f14e1cd7e4cd1d597acc7eed45933149720351d0b336f1_prof);

        
        $__internal_290051c8e006f39fbdf57f691bb0da2f78df86d096ecc3c80c7fd5c94c449911->leave($__internal_290051c8e006f39fbdf57f691bb0da2f78df86d096ecc3c80c7fd5c94c449911_prof);

    }

    // line 7
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_d33208f39f2dbc28782debb9b0249757cb029ed7b7e22c21aae3bd4780b59e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33208f39f2dbc28782debb9b0249757cb029ed7b7e22c21aae3bd4780b59e2c->enter($__internal_d33208f39f2dbc28782debb9b0249757cb029ed7b7e22c21aae3bd4780b59e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_e7ef566ec1e8a2fd3f6e5cd62538e12f3058c2c00ff1dcab8b96be22d49c4461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ef566ec1e8a2fd3f6e5cd62538e12f3058c2c00ff1dcab8b96be22d49c4461->enter($__internal_e7ef566ec1e8a2fd3f6e5cd62538e12f3058c2c00ff1dcab8b96be22d49c4461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 8
        echo "  <div class=\"col-md-4\">
  <div>
      <table width=\"150%\" style=\"border-spacing:0px 0px; border-collapse:separate; margin-left:95%\"> 
        <tr>
          ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <td>";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword", array()), 'widget');
        echo "</td>
          <td>";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "</td>
          ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </tr>
      </table>
    </div>                  
  </div>
  ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBook", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"float:right; margin-right:0px; margin-bottom:10px; font-family:calibri; font-weight:bold; font-size:16px\"><i class=\"fa fa-plus\"></i> Add book </a>
  ";
        }
        
        $__internal_e7ef566ec1e8a2fd3f6e5cd62538e12f3058c2c00ff1dcab8b96be22d49c4461->leave($__internal_e7ef566ec1e8a2fd3f6e5cd62538e12f3058c2c00ff1dcab8b96be22d49c4461_prof);

        
        $__internal_d33208f39f2dbc28782debb9b0249757cb029ed7b7e22c21aae3bd4780b59e2c->leave($__internal_d33208f39f2dbc28782debb9b0249757cb029ed7b7e22c21aae3bd4780b59e2c_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_c80b7866b3af1347317f222e022664853d623c7556ad2c16e02efde7b77d3ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80b7866b3af1347317f222e022664853d623c7556ad2c16e02efde7b77d3ee1->enter($__internal_c80b7866b3af1347317f222e022664853d623c7556ad2c16e02efde7b77d3ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1bf921308eec39289db055a03201e042a19a9ad4ff113dc8b0729e593df58f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf921308eec39289db055a03201e042a19a9ad4ff113dc8b0729e593df58f1b->enter($__internal_1bf921308eec39289db055a03201e042a19a9ad4ff113dc8b0729e593df58f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
<!-- Projects Row -->
        <div class=\"row\" style=\"margin-top:5%; font-family:calibri; font-size:17px\">
            
            
            <div class=\"col-md-7 img-portfolio\" style=\"text-align:center\" >
                <a href=\" ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showBook", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                            
                         ";
        // line 34
        echo " 
                          <img class=\"img-responsive img-hover\" width=\"200px\" height=\"\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "url", array()))), "html", null, true);
        echo "\" 
                             alt=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "alt", array()), "html", null, true);
        echo "\" style=\"margin-bottom:5px; margin-left:40%\"
                         />   
          
                </a>
                ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "                  <a style=\"margin-left:20%\"href=\"#\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\" >Details</a>
                  <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editBook", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-edit \"></i> Edit</a>
                  <a href=\"#\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDelete\"><i class=\"fa fa-pencil\"></i> Delete</a>
                ";
        }
        // line 45
        echo "            </div>
            <div class=\"col-md-5\" style\"\">
                <h3 style=\"font-weight:bold\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</h3>
                <h4 style=\"font-weight:bold\">By ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</h4>
                <p>                
                  Subtilte: <label style=\"font-style:italic\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "subtitle", array()), "html", null, true);
        echo "</label><br/>  
                  Isbn: <label style=\"font-style:italic\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "isbn", array()), "html", null, true);
        echo "</label><br/>
                  Quantity: <label style=\"font-style:italic\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "quantity", array()), "html", null, true);
        echo "</label><br/>
                  Available: <label style=\"font-style:italic\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "booksAvailable", array()), "html", null, true);
        echo "</label><br/>
                  Pkflib code: <label style=\"font-style:italic\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "pklibCode", array()), "html", null, true);
        echo "</label><br/>          
                  Number of pages: <label style=\"font-style:italic\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "numberOfPages", array()), "html", null, true);
        echo "</label><br/>
                  Subcategories: ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "subCategories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sb"]) {
            echo "<label style=\"font-style:italic\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sb"], "subCategoryName", array()), "html", null, true);
            echo "</label> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br/>
                  ";
        // line 60
        echo "                </p>
                <a class=\"btn btn-default\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "summary", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "summary", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "summary", array()), "url", array()))), "html", null, true);
        echo "\">Summary</i></a>
                ";
        // line 62
        if (((isset($context["canBorrow"]) ? $context["canBorrow"] : $this->getContext($context, "canBorrow")) == false)) {
            // line 63
            echo "                   <a class=\"btn btn-default\" href=\"#\" style=\"background-color:grey; color:white\">Borrowed</a>
                ";
        } elseif (($this->getAttribute(        // line 64
(isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "booksAvailable", array()) == 0)) {
            echo " 
                  <a class=\"btn btn-default\" href=\"#\" style=\"background-color:grey; color:white\">Not Available</a>
                ";
        } else {
            // line 67
            echo "                   <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModalBorrow\">Borrow</a>
                ";
        }
        // line 69
        echo "
            </div>
            ";
        // line 73
        echo "        </div>
        <!-- /.row -->  

        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align:center\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"modal-body row\" style=\"\"> 
              <div class=\"col-md-6\">               
                 <img class=\"img-responsive img-hover \" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "url", array()))), "html", null, true);
        echo "\" 
                 alt=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "coverPicture", array()), "alt", array()), "html", null, true);
        echo "\" style=\"margin-bottom:5px; margin-top:0; margin-feft:5%; width:200px\"
                 />  
               </div>
                 <div class=\"col-md-6\" style=\"font-family:calibri; margin-top:0\">  
                  Subtilte: <label style=\"font-style:italic\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "subtitle", array()), "html", null, true);
        echo "</label><br/>               
                  Isbn: <label style=\"font-style:italic\">";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "isbn", array()), "html", null, true);
        echo "</label><br/>
                  Editor: <label style=\"font-style:italic\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "editor", array()), "html", null, true);
        echo "</label><br/>
                  Edition: <label style=\"font-style:italic\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "edition", array()), "html", null, true);
        echo "</label><br/>
                  Volume: <label style=\"font-style:italic\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "volume", array()), "html", null, true);
        echo "</label><br/>
                  Year published: <label style=\"font-style:italic\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "yearPublished", array()), "html", null, true);
        echo "</label><br/>
                  Date Acquired: <label style=\"font-style:italic\">";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "dateAcquired", array()), "F j, Y"), "html", null, true);
        echo "</label><br/>
                  Quantity: <label style=\"font-style:italic\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "quantity", array()), "html", null, true);
        echo "</label><br/>
                  Pkflib code: <label style=\"font-style:italic\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "pklibCode", array()), "html", null, true);
        echo "</label><br/> 
                  Ean: <label style=\"font-style:italic\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "ean", array()), "html", null, true);
        echo "</label><br/>         
                  Number of pages: <label style=\"font-style:italic\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "numberOfPages", array()), "html", null, true);
        echo "</label><br/>
                  Format: <label style=\"font-style:italic\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "format", array()), "html", null, true);
        echo "</label><br/>
                  Color: <label style=\"font-style:italic\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "color", array()), "html", null, true);
        echo "</label><br/>
                  Number of Cd: <label style=\"font-style:italic\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "cdNumber", array()), "html", null, true);
        echo "</label><br/>
                  Acquisition: <label style=\"font-style:italic\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "acquisition", array()), "html", null, true);
        echo "</label><br/>
                  Language: <label style=\"font-style:italic\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "language", array()), "html", null, true);
        echo "</label><br/>
                  Location: <label style=\"font-style:italic\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "location", array()), "html", null, true);
        echo "</label><br/>
                  State: <label style=\"font-style:italic\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "state", array()), "html", null, true);
        echo "</label><br/>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" style=\"float:right\">Close</button>
              </div>
            </div>
          </div>
        </div>  

        <div class=\"modal fade\" id=\"myModalDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDelete\" style=\"text-align:center; color:blue\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"modal-body row\" style=\"\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\">  
                  <p style=\"text-align:center; font-size:20px\">Are you sure to detele?</p>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteBook", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\" style=\"float:right\">Delete</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalBorrow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelBorrow\" style=\"text-align:center; color:blue\">";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"modal-body row\" style=\"\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\">  
                  <p style=\"text-align:center; font-size:20px\">You have 24 hours from now to pick the book at the library. Past this delay, the book will be released. Thanks and have a nice day!</p>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("bookId" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" style=\"float:right; width:12%\">OK</a>
              </div>
            </div>
          </div>
        </div>
    
";
        
        $__internal_1bf921308eec39289db055a03201e042a19a9ad4ff113dc8b0729e593df58f1b->leave($__internal_1bf921308eec39289db055a03201e042a19a9ad4ff113dc8b0729e593df58f1b_prof);

        
        $__internal_c80b7866b3af1347317f222e022664853d623c7556ad2c16e02efde7b77d3ee1->leave($__internal_c80b7866b3af1347317f222e022664853d623c7556ad2c16e02efde7b77d3ee1_prof);

    }

    // line 159
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_6dd289f4d63e1a62b835cd46223b31c94e883a08dde861c8a2ab28f5e2c588af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd289f4d63e1a62b835cd46223b31c94e883a08dde861c8a2ab28f5e2c588af->enter($__internal_6dd289f4d63e1a62b835cd46223b31c94e883a08dde861c8a2ab28f5e2c588af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_bc5a94b6d548bf75d9b85d3ec86d3fd1432203855f299e0036fd44a2c8ac2d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5a94b6d548bf75d9b85d3ec86d3fd1432203855f299e0036fd44a2c8ac2d35->enter($__internal_bc5a94b6d548bf75d9b85d3ec86d3fd1432203855f299e0036fd44a2c8ac2d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_bc5a94b6d548bf75d9b85d3ec86d3fd1432203855f299e0036fd44a2c8ac2d35->leave($__internal_bc5a94b6d548bf75d9b85d3ec86d3fd1432203855f299e0036fd44a2c8ac2d35_prof);

        
        $__internal_6dd289f4d63e1a62b835cd46223b31c94e883a08dde861c8a2ab28f5e2c588af->leave($__internal_6dd289f4d63e1a62b835cd46223b31c94e883a08dde861c8a2ab28f5e2c588af_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/book:book_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 159,  399 => 151,  385 => 142,  371 => 131,  357 => 122,  339 => 107,  335 => 106,  331 => 105,  327 => 104,  323 => 103,  319 => 102,  315 => 101,  311 => 100,  307 => 99,  303 => 98,  299 => 97,  295 => 96,  291 => 95,  287 => 94,  283 => 93,  279 => 92,  275 => 91,  271 => 90,  264 => 86,  260 => 85,  251 => 81,  241 => 73,  237 => 69,  233 => 67,  227 => 64,  224 => 63,  222 => 62,  218 => 61,  215 => 60,  202 => 56,  198 => 55,  194 => 54,  190 => 53,  186 => 52,  182 => 51,  178 => 50,  173 => 48,  169 => 47,  165 => 45,  159 => 42,  156 => 41,  154 => 40,  147 => 36,  143 => 35,  140 => 34,  135 => 32,  127 => 26,  118 => 25,  104 => 21,  102 => 20,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  76 => 8,  67 => 7,  52 => 4,  43 => 3,  11 => 1,);
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

{% block status %}
    <li>{{book.title}} by {{book.author}}</li>
{% endblock %}

{% block searchAdd %}
  <div class=\"col-md-4\">
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
     <a href=\"{{path('addBook', {'userId': app.user.id})}}\" class=\"btn btn-primary\" style=\"float:right; margin-right:0px; margin-bottom:10px; font-family:calibri; font-weight:bold; font-size:16px\"><i class=\"fa fa-plus\"></i> Add book </a>
  {% endif %}
{% endblock %}

{% block content %}

<!-- Projects Row -->
        <div class=\"row\" style=\"margin-top:5%; font-family:calibri; font-size:17px\">
            
            
            <div class=\"col-md-7 img-portfolio\" style=\"text-align:center\" >
                <a href=\" {{ path('showBook',{'id': book.id,'userId': app.user.id}) }}\">
                            
                         {#<img class=\"img-responsive img-hover\" src=\"{{ asset('uploads/' ~ book.coverPicture) }}\" alt=\"\" style=\"margin-left:185px; margin-top:25px\"> #} 
                          <img class=\"img-responsive img-hover\" width=\"200px\" height=\"\" src=\"{{ asset(book.coverPicture.uploadDir ~ '/' ~ book.coverPicture.id ~ '.' ~ book.coverPicture.url) }}\" 
                             alt=\"{{ book.coverPicture.alt }}\" style=\"margin-bottom:5px; margin-left:40%\"
                         />   
          
                </a>
                {% if is_granted(\"ROLE_ADMIN\") %}
                  <a style=\"margin-left:20%\"href=\"#\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\" >Details</a>
                  <a href=\"{{ path('editBook',{'id': book.id, userId: app.user.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-edit \"></i> Edit</a>
                  <a href=\"#\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDelete\"><i class=\"fa fa-pencil\"></i> Delete</a>
                {% endif %}
            </div>
            <div class=\"col-md-5\" style\"\">
                <h3 style=\"font-weight:bold\">{{book.title}}</h3>
                <h4 style=\"font-weight:bold\">By {{book.author}}</h4>
                <p>                
                  Subtilte: <label style=\"font-style:italic\">{{book.subtitle}}</label><br/>  
                  Isbn: <label style=\"font-style:italic\">{{book.isbn}}</label><br/>
                  Quantity: <label style=\"font-style:italic\">{{book.quantity}}</label><br/>
                  Available: <label style=\"font-style:italic\">{{book.booksAvailable}}</label><br/>
                  Pkflib code: <label style=\"font-style:italic\">{{book.pklibCode}}</label><br/>          
                  Number of pages: <label style=\"font-style:italic\">{{book.numberOfPages}}</label><br/>
                  Subcategories: {% for sb in book.subCategories %}<label style=\"font-style:italic\">{{sb.subCategoryName}}</label> {% endfor %}<br/>
                  {# {% for book in book.subcategory %}

                  {% endfor %} #}
                </p>
                <a class=\"btn btn-default\" href=\"{{ asset(book.summary.uploadDir ~ '/' ~ book.summary.id ~ '.' ~ book.summary.url) }}\">Summary</i></a>
                {% if canBorrow == false %}
                   <a class=\"btn btn-default\" href=\"#\" style=\"background-color:grey; color:white\">Borrowed</a>
                {% elseif  book.booksAvailable == 0 %} 
                  <a class=\"btn btn-default\" href=\"#\" style=\"background-color:grey; color:white\">Not Available</a>
                {% else %}
                   <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModalBorrow\">Borrow</a>
                {% endif %}

            </div>
            {#
            <a href=\"{{ path('homepage')}}\" style=\"float:right; color:black; font-weight:bold\"><i class=\"fa fa-home\"></i> Return</a>#}
        </div>
        <!-- /.row -->  

        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align:center\">{{book.title}} by {{book.author}}</h4>
              </div>
              <div class=\"modal-body row\" style=\"\"> 
              <div class=\"col-md-6\">               
                 <img class=\"img-responsive img-hover \" src=\"{{ asset(book.coverPicture.uploadDir ~ '/' ~ book.coverPicture.id ~ '.' ~ book.coverPicture.url) }}\" 
                 alt=\"{{ book.coverPicture.alt }}\" style=\"margin-bottom:5px; margin-top:0; margin-feft:5%; width:200px\"
                 />  
               </div>
                 <div class=\"col-md-6\" style=\"font-family:calibri; margin-top:0\">  
                  Subtilte: <label style=\"font-style:italic\">{{book.subtitle}}</label><br/>               
                  Isbn: <label style=\"font-style:italic\">{{book.isbn}}</label><br/>
                  Editor: <label style=\"font-style:italic\">{{book.editor}}</label><br/>
                  Edition: <label style=\"font-style:italic\">{{book.edition}}</label><br/>
                  Volume: <label style=\"font-style:italic\">{{book.volume}}</label><br/>
                  Year published: <label style=\"font-style:italic\">{{book.yearPublished}}</label><br/>
                  Date Acquired: <label style=\"font-style:italic\">{{book.dateAcquired|date('F j, Y')}}</label><br/>
                  Quantity: <label style=\"font-style:italic\">{{book.quantity}}</label><br/>
                  Pkflib code: <label style=\"font-style:italic\">{{book.pklibCode}}</label><br/> 
                  Ean: <label style=\"font-style:italic\">{{book.ean}}</label><br/>         
                  Number of pages: <label style=\"font-style:italic\">{{book.numberOfPages}}</label><br/>
                  Format: <label style=\"font-style:italic\">{{book.format}}</label><br/>
                  Color: <label style=\"font-style:italic\">{{book.color}}</label><br/>
                  Number of Cd: <label style=\"font-style:italic\">{{book.cdNumber}}</label><br/>
                  Acquisition: <label style=\"font-style:italic\">{{book.acquisition}}</label><br/>
                  Language: <label style=\"font-style:italic\">{{book.language}}</label><br/>
                  Location: <label style=\"font-style:italic\">{{book.location}}</label><br/>
                  State: <label style=\"font-style:italic\">{{book.state}}</label><br/>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" style=\"float:right\">Close</button>
              </div>
            </div>
          </div>
        </div>  

        <div class=\"modal fade\" id=\"myModalDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDelete\" style=\"text-align:center; color:blue\">{{book.title}} by {{book.author}}</h4>
              </div>
              <div class=\"modal-body row\" style=\"\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\">  
                  <p style=\"text-align:center; font-size:20px\">Are you sure to detele?</p>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a href=\"{{ path('deleteBook',{'id': book.id}) }}\" class=\"btn btn-danger\" style=\"float:right\">Delete</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"myModalBorrow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelBorrow\" style=\"text-align:center; color:blue\">{{book.title}} by {{book.author}}</h4>
              </div>
              <div class=\"modal-body row\" style=\"\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\">  
                  <p style=\"text-align:center; font-size:20px\">You have 24 hours from now to pick the book at the library. Past this delay, the book will be released. Thanks and have a nice day!</p>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a href=\"{{ path('borrow',{'bookId': book.id, 'userId': app.user.id}) }}\" class=\"btn btn-success\" style=\"float:right; width:12%\">OK</a>
              </div>
            </div>
          </div>
        </div>
    
{% endblock %}

{% block pagination %}
{% endblock %} ", ":pkflibrary/book:book_details.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/book/book_details.html.twig");
    }
}
