<?php

/* pkflibrary/user/UserDetails.html.twig */
class __TwigTemplate_a2c21e0b621398ea595f94398b668e5378314dc74fc4ac4ade8584421280b027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/user/UserDetails.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4d9ec0be1b629aea3a24bead09ae1cf39c87905a05f9866b2801ba576bb9db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d9ec0be1b629aea3a24bead09ae1cf39c87905a05f9866b2801ba576bb9db6->enter($__internal_a4d9ec0be1b629aea3a24bead09ae1cf39c87905a05f9866b2801ba576bb9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/UserDetails.html.twig"));

        $__internal_8b5f09e7cabaf8cf2c2d1739c46233334b9e803555680be5075f4e46b7af2877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5f09e7cabaf8cf2c2d1739c46233334b9e803555680be5075f4e46b7af2877->enter($__internal_8b5f09e7cabaf8cf2c2d1739c46233334b9e803555680be5075f4e46b7af2877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/UserDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d9ec0be1b629aea3a24bead09ae1cf39c87905a05f9866b2801ba576bb9db6->leave($__internal_a4d9ec0be1b629aea3a24bead09ae1cf39c87905a05f9866b2801ba576bb9db6_prof);

        
        $__internal_8b5f09e7cabaf8cf2c2d1739c46233334b9e803555680be5075f4e46b7af2877->leave($__internal_8b5f09e7cabaf8cf2c2d1739c46233334b9e803555680be5075f4e46b7af2877_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3959082287b7678aebc9151a9d21afe7b8b1cb1a29bb9072e09386348b1bb4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3959082287b7678aebc9151a9d21afe7b8b1cb1a29bb9072e09386348b1bb4cf->enter($__internal_3959082287b7678aebc9151a9d21afe7b8b1cb1a29bb9072e09386348b1bb4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11fa5f9dc428f04b40204c7255fd2e3bf96f79ff02848f59d5a33dfdd0a807ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa5f9dc428f04b40204c7255fd2e3bf96f79ff02848f59d5a33dfdd0a807ae->enter($__internal_11fa5f9dc428f04b40204c7255fd2e3bf96f79ff02848f59d5a33dfdd0a807ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => 1));
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
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 27
        echo "        <li class=\"dropdown active\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
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
        
        $__internal_11fa5f9dc428f04b40204c7255fd2e3bf96f79ff02848f59d5a33dfdd0a807ae->leave($__internal_11fa5f9dc428f04b40204c7255fd2e3bf96f79ff02848f59d5a33dfdd0a807ae_prof);

        
        $__internal_3959082287b7678aebc9151a9d21afe7b8b1cb1a29bb9072e09386348b1bb4cf->leave($__internal_3959082287b7678aebc9151a9d21afe7b8b1cb1a29bb9072e09386348b1bb4cf_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_415f89a8db533aab9accf4e0bbf496d2fb316ea4749a9374f66eb5cd7ac6ec07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415f89a8db533aab9accf4e0bbf496d2fb316ea4749a9374f66eb5cd7ac6ec07->enter($__internal_415f89a8db533aab9accf4e0bbf496d2fb316ea4749a9374f66eb5cd7ac6ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_13d2041946f4c466b87ca4080d23c647827f15470e1463b9a425943884dfddf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d2041946f4c466b87ca4080d23c647827f15470e1463b9a425943884dfddf9->enter($__internal_13d2041946f4c466b87ca4080d23c647827f15470e1463b9a425943884dfddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "          <li><a class=\"active\" href=\"#\" style=\"color:black\">My Account / Personal Data </a></li>   
";
        
        $__internal_13d2041946f4c466b87ca4080d23c647827f15470e1463b9a425943884dfddf9->leave($__internal_13d2041946f4c466b87ca4080d23c647827f15470e1463b9a425943884dfddf9_prof);

        
        $__internal_415f89a8db533aab9accf4e0bbf496d2fb316ea4749a9374f66eb5cd7ac6ec07->leave($__internal_415f89a8db533aab9accf4e0bbf496d2fb316ea4749a9374f66eb5cd7ac6ec07_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccd353cd3ebe12842ec5b25388e46d1abd2eb97de33f9863733ec26f61b4affb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd353cd3ebe12842ec5b25388e46d1abd2eb97de33f9863733ec26f61b4affb->enter($__internal_ccd353cd3ebe12842ec5b25388e46d1abd2eb97de33f9863733ec26f61b4affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93f6b860cdb72b7719ccf43cb070d906a6bf839bf95b1d14ba4b0bbc74b054f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f6b860cdb72b7719ccf43cb070d906a6bf839bf95b1d14ba4b0bbc74b054f3->enter($__internal_93f6b860cdb72b7719ccf43cb070d906a6bf839bf95b1d14ba4b0bbc74b054f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "
<!-- Projects Row -->
        <div class=\"row\">
            
            
            <div class=\"col-md-7 img-portfolio\" >
                ";
        // line 65
        echo "\t\t\t\t\t                  
                        <img class=\"img-responsive img-hover\"  width=\"400px\" height=\"600px\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "url", array()))), "html", null, true);
        echo "\" 
                             alt=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "alt", array()), "html", null, true);
        echo "\" style=\"margin-bottom:5px;\"
                         />
            </div>            
\t\t\t\t\t
            
            <div class=\"col-md-5 dariusDiv\" style=\"border-radius: 1; font-family:calibri\">

               <p> Name : <span class=\"dariusSpan\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " </span> </p>
               <p> Username : <span class=\"dariusSpan\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span> </p>
               <p> Email : <span class=\"dariusSpan\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span> </p>
               <p> Phone number : <span class=\"dariusSpan\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo " </span> </p>
               <p> Adress: <span class=\"dariusSpan\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "  </span> </p>
               <p> User Category: <span class=\"dariusSpan\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCategory", array()), "html", null, true);
        echo " </span> </p>
               <p> Batch: <span class=\"dariusSpan\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "batch", array()), "html", null, true);
        echo " </span> </p>
               <p> Specialty: <span class=\"dariusSpan\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialty", array()), "html", null, true);
        echo " </span> </p>
                
                <a class=\"btn btn-default\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Edit</a>
                ";
        // line 84
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "                  ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()) == false)) {
                // line 86
                echo "                     <a class=\"btn btn-success\" onclick= \"disabled\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnabled", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "\" >Enable</a>
                  ";
            } else {
                // line 88
                echo "                      <a class=\"btn btn-default\" onclick= \"disabled\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisable", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "\" style=\"background-color:black; color:white\">Disable</i> </a>
                  ";
            }
            // line 90
            echo "                <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDeleteUser\"><i class=\"fa fa-remove\"></i> Delete</a>
                ";
        }
        // line 92
        echo "            </div>

            ";
        // line 94
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 95
            echo "            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()) == false)) {
                // line 96
                echo "                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisableList", array("page" => 1));
                echo "\" >Back to list</a>
                ";
            } else {
                // line 98
                echo "                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
                echo "\" > <i class=\"fa fa-back\"></i> Back to list</a>
            ";
            }
            // line 100
            echo "            ";
        }
        // line 101
        echo "            
        </div>
        <!-- /.row -->\t\t

        <div class=\"modal fade\" id=\"myModalDeleteUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteUser\" style=\"text-align:center; color:blue\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
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
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\" style=\"float:right\">Delete</a>
              </div>
            </div>
          </div>
        </div>
\t\t
";
        
        $__internal_93f6b860cdb72b7719ccf43cb070d906a6bf839bf95b1d14ba4b0bbc74b054f3->leave($__internal_93f6b860cdb72b7719ccf43cb070d906a6bf839bf95b1d14ba4b0bbc74b054f3_prof);

        
        $__internal_ccd353cd3ebe12842ec5b25388e46d1abd2eb97de33f9863733ec26f61b4affb->leave($__internal_ccd353cd3ebe12842ec5b25388e46d1abd2eb97de33f9863733ec26f61b4affb_prof);

    }

    // line 127
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_e0f4d822ad9eae9c75cf3c59ef41bad10256667efbf8f86eb1fd1d742968e606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f4d822ad9eae9c75cf3c59ef41bad10256667efbf8f86eb1fd1d742968e606->enter($__internal_e0f4d822ad9eae9c75cf3c59ef41bad10256667efbf8f86eb1fd1d742968e606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_d28c0d689126c31ab9a340eab1892f89812f737a2fe1ee09db6ed24551a8d62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28c0d689126c31ab9a340eab1892f89812f737a2fe1ee09db6ed24551a8d62f->enter($__internal_d28c0d689126c31ab9a340eab1892f89812f737a2fe1ee09db6ed24551a8d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_d28c0d689126c31ab9a340eab1892f89812f737a2fe1ee09db6ed24551a8d62f->leave($__internal_d28c0d689126c31ab9a340eab1892f89812f737a2fe1ee09db6ed24551a8d62f_prof);

        
        $__internal_e0f4d822ad9eae9c75cf3c59ef41bad10256667efbf8f86eb1fd1d742968e606->leave($__internal_e0f4d822ad9eae9c75cf3c59ef41bad10256667efbf8f86eb1fd1d742968e606_prof);

    }

    // line 130
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b9d7bffcaba0521ac8b29d14ccb6ec43fd4f683a2188c19679037552c9f511af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d7bffcaba0521ac8b29d14ccb6ec43fd4f683a2188c19679037552c9f511af->enter($__internal_b9d7bffcaba0521ac8b29d14ccb6ec43fd4f683a2188c19679037552c9f511af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6a47c8c8a7acd23a6b4f53447a6c5b2c47f5d0ae2301a5edfaeb3557d678ff03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a47c8c8a7acd23a6b4f53447a6c5b2c47f5d0ae2301a5edfaeb3557d678ff03->enter($__internal_6a47c8c8a7acd23a6b4f53447a6c5b2c47f5d0ae2301a5edfaeb3557d678ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 131
        echo "   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        
        $__internal_6a47c8c8a7acd23a6b4f53447a6c5b2c47f5d0ae2301a5edfaeb3557d678ff03->leave($__internal_6a47c8c8a7acd23a6b4f53447a6c5b2c47f5d0ae2301a5edfaeb3557d678ff03_prof);

        
        $__internal_b9d7bffcaba0521ac8b29d14ccb6ec43fd4f683a2188c19679037552c9f511af->leave($__internal_b9d7bffcaba0521ac8b29d14ccb6ec43fd4f683a2188c19679037552c9f511af_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/UserDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 131,  339 => 130,  322 => 127,  305 => 119,  291 => 110,  280 => 101,  277 => 100,  271 => 98,  265 => 96,  262 => 95,  260 => 94,  256 => 92,  252 => 90,  246 => 88,  240 => 86,  237 => 85,  235 => 84,  231 => 83,  226 => 81,  222 => 80,  218 => 79,  214 => 78,  210 => 77,  206 => 76,  202 => 75,  196 => 74,  186 => 67,  182 => 66,  179 => 65,  171 => 58,  162 => 57,  151 => 54,  142 => 53,  126 => 46,  120 => 43,  114 => 40,  105 => 34,  99 => 31,  93 => 27,  85 => 22,  79 => 19,  73 => 16,  67 => 12,  65 => 11,  60 => 9,  53 => 4,  44 => 3,  11 => 1,);
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

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"{{ path('homepage',{'page': 1}) }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                           <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                       </li>
                       <li>
                        <a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"{{ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                    </li>
                </ul>
            </li>
        {% endif %}
        <li class=\"dropdown active\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"{{ path('borrow', {'userId': app.user.id, 'bookId':-1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                </li>
                <li class=\"active\">
                    <a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
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
          <li><a class=\"active\" href=\"#\" style=\"color:black\">My Account / Personal Data </a></li>   
{% endblock %}

{% block content %}

<!-- Projects Row -->
        <div class=\"row\">
            
            
            <div class=\"col-md-7 img-portfolio\" >
                {#<a href=\" {{ path('adminUserList',{'page': page}) }}\">#}
\t\t\t\t\t                  
                        <img class=\"img-responsive img-hover\"  width=\"400px\" height=\"600px\" src=\"{{ asset(user.image.uploadDir ~ '/' ~ user.image.id ~ '.' ~ user.image.url) }}\" 
                             alt=\"{{ user.image.alt }}\" style=\"margin-bottom:5px;\"
                         />
            </div>            
\t\t\t\t\t
            
            <div class=\"col-md-5 dariusDiv\" style=\"border-radius: 1; font-family:calibri\">

               <p> Name : <span class=\"dariusSpan\">{{user.familyName}} {{user.firstName}} </span> </p>
               <p> Username : <span class=\"dariusSpan\">{{user.username}}</span> </p>
               <p> Email : <span class=\"dariusSpan\">{{user.email}}</span> </p>
               <p> Phone number : <span class=\"dariusSpan\">{{user.phoneNumber}} </span> </p>
               <p> Adress: <span class=\"dariusSpan\">{{user.address}}  </span> </p>
               <p> User Category: <span class=\"dariusSpan\">{{user.userCategory}} </span> </p>
               <p> Batch: <span class=\"dariusSpan\">{{user.batch}} </span> </p>
               <p> Specialty: <span class=\"dariusSpan\">{{user.specialty}} </span> </p>
                
                <a class=\"btn btn-default\" href=\"{{ path('editUser',{'id':user.Id})}}\"><i class=\"fa fa-edit\"></i> Edit</a>
                {% if is_granted(\"ROLE_ADMIN\") %}
                  {% if user.enabled == false %}
                     <a class=\"btn btn-success\" onclick= \"disabled\" href=\"{{path('AdminUserEnabled',{'id':user.Id,'page': page})}}\" >Enable</a>
                  {% else %}
                      <a class=\"btn btn-default\" onclick= \"disabled\" href=\"{{path('AdminUserDisable',{'id':user.Id,'page': page})}}\" style=\"background-color:black; color:white\">Disable</i> </a>
                  {% endif %}
                <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDeleteUser\"><i class=\"fa fa-remove\"></i> Delete</a>
                {% endif %}
            </div>

            {% if is_granted(\"ROLE_ADMIN\") %}
            {% if user.enabled == false %}
                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"{{ path('AdminUserDisableList',{'page': 1}) }}\" >Back to list</a>
                {% else %}
                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" > <i class=\"fa fa-back\"></i> Back to list</a>
            {% endif %}
            {% endif %}
            
        </div>
        <!-- /.row -->\t\t

        <div class=\"modal fade\" id=\"myModalDeleteUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteUser\" style=\"text-align:center; color:blue\">{{user.familyName}} {{user.firstName}}</h4>
              </div>
              <div class=\"modal-body row\" style=\"\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\">  
                  <p style=\"text-align:center; font-size:20px\">Are you sure to detele?</p>
                </div> 
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a href=\"{{ path('deleteUser',{'id': user.id}) }}\" class=\"btn btn-danger\" style=\"float:right\">Delete</a>
              </div>
            </div>
          </div>
        </div>
\t\t
{% endblock %}

{% block pagination %}
{% endblock %}

{% block footer %}
   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
{% endblock %}", "pkflibrary/user/UserDetails.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\UserDetails.html.twig");
    }
}
