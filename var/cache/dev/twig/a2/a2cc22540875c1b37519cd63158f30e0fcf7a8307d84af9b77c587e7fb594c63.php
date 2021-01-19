<?php

/* :pkflibrary/user:UserDetails.html.twig */
class __TwigTemplate_95853d937d127fdd38629a7734fbd6b2bc3bcf5bced047602c2ffadaebcc2079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", ":pkflibrary/user:UserDetails.html.twig", 1);
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
        $__internal_4efc5483becd5dabe8f7a5445f748288b744e052464bca42ba090be787f47656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efc5483becd5dabe8f7a5445f748288b744e052464bca42ba090be787f47656->enter($__internal_4efc5483becd5dabe8f7a5445f748288b744e052464bca42ba090be787f47656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:UserDetails.html.twig"));

        $__internal_343aba3645688c5e112b428fd09c46cbc01137045890e9d9f2cad0bc98b211ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343aba3645688c5e112b428fd09c46cbc01137045890e9d9f2cad0bc98b211ec->enter($__internal_343aba3645688c5e112b428fd09c46cbc01137045890e9d9f2cad0bc98b211ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:UserDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efc5483becd5dabe8f7a5445f748288b744e052464bca42ba090be787f47656->leave($__internal_4efc5483becd5dabe8f7a5445f748288b744e052464bca42ba090be787f47656_prof);

        
        $__internal_343aba3645688c5e112b428fd09c46cbc01137045890e9d9f2cad0bc98b211ec->leave($__internal_343aba3645688c5e112b428fd09c46cbc01137045890e9d9f2cad0bc98b211ec_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90d7e4c8ef1e06f69253c66c80488b5fdf9f8f51b009f4b63b047e37d191e2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d7e4c8ef1e06f69253c66c80488b5fdf9f8f51b009f4b63b047e37d191e2d8->enter($__internal_90d7e4c8ef1e06f69253c66c80488b5fdf9f8f51b009f4b63b047e37d191e2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad1ae491b36bb31cb6f2daa1f3a2e73ff796fd23bec84d270f177709372ff07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1ae491b36bb31cb6f2daa1f3a2e73ff796fd23bec84d270f177709372ff07b->enter($__internal_ad1ae491b36bb31cb6f2daa1f3a2e73ff796fd23bec84d270f177709372ff07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ad1ae491b36bb31cb6f2daa1f3a2e73ff796fd23bec84d270f177709372ff07b->leave($__internal_ad1ae491b36bb31cb6f2daa1f3a2e73ff796fd23bec84d270f177709372ff07b_prof);

        
        $__internal_90d7e4c8ef1e06f69253c66c80488b5fdf9f8f51b009f4b63b047e37d191e2d8->leave($__internal_90d7e4c8ef1e06f69253c66c80488b5fdf9f8f51b009f4b63b047e37d191e2d8_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_4de05a02d68d4f26bf0b9f227a8346086f409add1620622433b729bde5da8f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de05a02d68d4f26bf0b9f227a8346086f409add1620622433b729bde5da8f87->enter($__internal_4de05a02d68d4f26bf0b9f227a8346086f409add1620622433b729bde5da8f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_68a4b63b9b5868789e8188ea58677b7b63e11a1661a67e053daf79008e5e469f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a4b63b9b5868789e8188ea58677b7b63e11a1661a67e053daf79008e5e469f->enter($__internal_68a4b63b9b5868789e8188ea58677b7b63e11a1661a67e053daf79008e5e469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "          <li><a class=\"active\" href=\"#\" style=\"color:black\">My Account / Personal Data </a></li>   
";
        
        $__internal_68a4b63b9b5868789e8188ea58677b7b63e11a1661a67e053daf79008e5e469f->leave($__internal_68a4b63b9b5868789e8188ea58677b7b63e11a1661a67e053daf79008e5e469f_prof);

        
        $__internal_4de05a02d68d4f26bf0b9f227a8346086f409add1620622433b729bde5da8f87->leave($__internal_4de05a02d68d4f26bf0b9f227a8346086f409add1620622433b729bde5da8f87_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_665c814738292cf77bf53d1f26de694bb26df026b3125e337afadfe992526b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665c814738292cf77bf53d1f26de694bb26df026b3125e337afadfe992526b50->enter($__internal_665c814738292cf77bf53d1f26de694bb26df026b3125e337afadfe992526b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_220a5e7bf4a279d81a15aa66b46ec96daab62346489830012b707b3fb51f24f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220a5e7bf4a279d81a15aa66b46ec96daab62346489830012b707b3fb51f24f6->enter($__internal_220a5e7bf4a279d81a15aa66b46ec96daab62346489830012b707b3fb51f24f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_220a5e7bf4a279d81a15aa66b46ec96daab62346489830012b707b3fb51f24f6->leave($__internal_220a5e7bf4a279d81a15aa66b46ec96daab62346489830012b707b3fb51f24f6_prof);

        
        $__internal_665c814738292cf77bf53d1f26de694bb26df026b3125e337afadfe992526b50->leave($__internal_665c814738292cf77bf53d1f26de694bb26df026b3125e337afadfe992526b50_prof);

    }

    // line 127
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_1a47d5c347b303707d295e5823b7577ce881938e3897c02be33e8013379fbac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a47d5c347b303707d295e5823b7577ce881938e3897c02be33e8013379fbac0->enter($__internal_1a47d5c347b303707d295e5823b7577ce881938e3897c02be33e8013379fbac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_cee9d73e3ba7ee18a14b69f1ad2da64ad3e898e3566ece6c315556d77a3de2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee9d73e3ba7ee18a14b69f1ad2da64ad3e898e3566ece6c315556d77a3de2c0->enter($__internal_cee9d73e3ba7ee18a14b69f1ad2da64ad3e898e3566ece6c315556d77a3de2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_cee9d73e3ba7ee18a14b69f1ad2da64ad3e898e3566ece6c315556d77a3de2c0->leave($__internal_cee9d73e3ba7ee18a14b69f1ad2da64ad3e898e3566ece6c315556d77a3de2c0_prof);

        
        $__internal_1a47d5c347b303707d295e5823b7577ce881938e3897c02be33e8013379fbac0->leave($__internal_1a47d5c347b303707d295e5823b7577ce881938e3897c02be33e8013379fbac0_prof);

    }

    // line 130
    public function block_footer($context, array $blocks = array())
    {
        $__internal_acdcc73c5ad5a1cc31687faaff6d24b877991f9730853a24f702d0c7a0f784bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdcc73c5ad5a1cc31687faaff6d24b877991f9730853a24f702d0c7a0f784bc->enter($__internal_acdcc73c5ad5a1cc31687faaff6d24b877991f9730853a24f702d0c7a0f784bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ae10e6b7d11795e990e6bacceb64181839a145d10830a2398f3ca29180a9ee63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae10e6b7d11795e990e6bacceb64181839a145d10830a2398f3ca29180a9ee63->enter($__internal_ae10e6b7d11795e990e6bacceb64181839a145d10830a2398f3ca29180a9ee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 131
        echo "   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        
        $__internal_ae10e6b7d11795e990e6bacceb64181839a145d10830a2398f3ca29180a9ee63->leave($__internal_ae10e6b7d11795e990e6bacceb64181839a145d10830a2398f3ca29180a9ee63_prof);

        
        $__internal_acdcc73c5ad5a1cc31687faaff6d24b877991f9730853a24f702d0c7a0f784bc->leave($__internal_acdcc73c5ad5a1cc31687faaff6d24b877991f9730853a24f702d0c7a0f784bc_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/user:UserDetails.html.twig";
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
{% endblock %}", ":pkflibrary/user:UserDetails.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/user/UserDetails.html.twig");
    }
}
