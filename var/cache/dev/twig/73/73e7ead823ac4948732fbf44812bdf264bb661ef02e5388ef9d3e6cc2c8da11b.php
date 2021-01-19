<?php

/* pkflibrary/book/book_details.html.twig */
class __TwigTemplate_cd35871028b91dd22466dc0cb7f2a9203ea46239f593b939a064c6eecb74e91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/book/book_list.html.twig ", "pkflibrary/book/book_details.html.twig", 1);
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
        $__internal_43750f6610d58b1f175c582d9e3d5c4c4a43463b6a1ecec523e6120b19331d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43750f6610d58b1f175c582d9e3d5c4c4a43463b6a1ecec523e6120b19331d1a->enter($__internal_43750f6610d58b1f175c582d9e3d5c4c4a43463b6a1ecec523e6120b19331d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/book_details.html.twig"));

        $__internal_42cae3ad531000ddc546e1202e3f4ed933a67ca9285545b248cbc5c1357f212c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cae3ad531000ddc546e1202e3f4ed933a67ca9285545b248cbc5c1357f212c->enter($__internal_42cae3ad531000ddc546e1202e3f4ed933a67ca9285545b248cbc5c1357f212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/book_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43750f6610d58b1f175c582d9e3d5c4c4a43463b6a1ecec523e6120b19331d1a->leave($__internal_43750f6610d58b1f175c582d9e3d5c4c4a43463b6a1ecec523e6120b19331d1a_prof);

        
        $__internal_42cae3ad531000ddc546e1202e3f4ed933a67ca9285545b248cbc5c1357f212c->leave($__internal_42cae3ad531000ddc546e1202e3f4ed933a67ca9285545b248cbc5c1357f212c_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_f63bee5da7a68e27c858d18fc0f0808aa4748ee10ef75f55b5ac0a38226cc555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63bee5da7a68e27c858d18fc0f0808aa4748ee10ef75f55b5ac0a38226cc555->enter($__internal_f63bee5da7a68e27c858d18fc0f0808aa4748ee10ef75f55b5ac0a38226cc555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_cb30666de2389ee62e8cca1987ad95060fd023a63f3984ee94b19ad0ce8248d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb30666de2389ee62e8cca1987ad95060fd023a63f3984ee94b19ad0ce8248d2->enter($__internal_cb30666de2389ee62e8cca1987ad95060fd023a63f3984ee94b19ad0ce8248d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_cb30666de2389ee62e8cca1987ad95060fd023a63f3984ee94b19ad0ce8248d2->leave($__internal_cb30666de2389ee62e8cca1987ad95060fd023a63f3984ee94b19ad0ce8248d2_prof);

        
        $__internal_f63bee5da7a68e27c858d18fc0f0808aa4748ee10ef75f55b5ac0a38226cc555->leave($__internal_f63bee5da7a68e27c858d18fc0f0808aa4748ee10ef75f55b5ac0a38226cc555_prof);

    }

    // line 7
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_8503ce7b783297e869e98da589da00259321db9af6dce0c0d48f1fee3b0a0a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8503ce7b783297e869e98da589da00259321db9af6dce0c0d48f1fee3b0a0a5c->enter($__internal_8503ce7b783297e869e98da589da00259321db9af6dce0c0d48f1fee3b0a0a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_25ab65a2c2947ef321e2da597cc7b679c3419a6c7a782f4739f43c7a67054a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ab65a2c2947ef321e2da597cc7b679c3419a6c7a782f4739f43c7a67054a07->enter($__internal_25ab65a2c2947ef321e2da597cc7b679c3419a6c7a782f4739f43c7a67054a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

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
        
        $__internal_25ab65a2c2947ef321e2da597cc7b679c3419a6c7a782f4739f43c7a67054a07->leave($__internal_25ab65a2c2947ef321e2da597cc7b679c3419a6c7a782f4739f43c7a67054a07_prof);

        
        $__internal_8503ce7b783297e869e98da589da00259321db9af6dce0c0d48f1fee3b0a0a5c->leave($__internal_8503ce7b783297e869e98da589da00259321db9af6dce0c0d48f1fee3b0a0a5c_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_50b26aaddd5700d99f467ce3236c917c3ea72f22bacdd8cc2f0de971844d5e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b26aaddd5700d99f467ce3236c917c3ea72f22bacdd8cc2f0de971844d5e8f->enter($__internal_50b26aaddd5700d99f467ce3236c917c3ea72f22bacdd8cc2f0de971844d5e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f61e7ca0dc5ef1875a89a5d0f5735e525e1a2b8ddcad85cc2c22b7f7f1f54258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61e7ca0dc5ef1875a89a5d0f5735e525e1a2b8ddcad85cc2c22b7f7f1f54258->enter($__internal_f61e7ca0dc5ef1875a89a5d0f5735e525e1a2b8ddcad85cc2c22b7f7f1f54258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f61e7ca0dc5ef1875a89a5d0f5735e525e1a2b8ddcad85cc2c22b7f7f1f54258->leave($__internal_f61e7ca0dc5ef1875a89a5d0f5735e525e1a2b8ddcad85cc2c22b7f7f1f54258_prof);

        
        $__internal_50b26aaddd5700d99f467ce3236c917c3ea72f22bacdd8cc2f0de971844d5e8f->leave($__internal_50b26aaddd5700d99f467ce3236c917c3ea72f22bacdd8cc2f0de971844d5e8f_prof);

    }

    // line 159
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_76f0400b4c080e38269cce92334064c90210648f1e26b11fb2ab2e4d65a55f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f0400b4c080e38269cce92334064c90210648f1e26b11fb2ab2e4d65a55f51->enter($__internal_76f0400b4c080e38269cce92334064c90210648f1e26b11fb2ab2e4d65a55f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_76e95b23a88cb85f3d64e5c1bbd97711972030fbef06e2db197eb7e8651f5e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e95b23a88cb85f3d64e5c1bbd97711972030fbef06e2db197eb7e8651f5e23->enter($__internal_76e95b23a88cb85f3d64e5c1bbd97711972030fbef06e2db197eb7e8651f5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_76e95b23a88cb85f3d64e5c1bbd97711972030fbef06e2db197eb7e8651f5e23->leave($__internal_76e95b23a88cb85f3d64e5c1bbd97711972030fbef06e2db197eb7e8651f5e23_prof);

        
        $__internal_76f0400b4c080e38269cce92334064c90210648f1e26b11fb2ab2e4d65a55f51->leave($__internal_76f0400b4c080e38269cce92334064c90210648f1e26b11fb2ab2e4d65a55f51_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/book_details.html.twig";
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
{% endblock %} ", "pkflibrary/book/book_details.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\book_details.html.twig");
    }
}
