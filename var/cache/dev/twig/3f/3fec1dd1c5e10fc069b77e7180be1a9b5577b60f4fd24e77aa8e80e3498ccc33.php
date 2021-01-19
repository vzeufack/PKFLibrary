<?php

/* pkflibrary/user/adminUserDetails.html.twig */
class __TwigTemplate_29eb3e04c8fe2840673f5e28fb94cdaa22e26ce6d6ab870423f26cf121689e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/user/adminUserEnableList.html.twig ", "pkflibrary/user/adminUserDetails.html.twig", 1);
        $this->blocks = array(
            'status' => array($this, 'block_status'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/user/adminUserEnableList.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_731643196ea39302fc3f4226d73c93ea05e3e15290272cffd32bbba6c4999578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731643196ea39302fc3f4226d73c93ea05e3e15290272cffd32bbba6c4999578->enter($__internal_731643196ea39302fc3f4226d73c93ea05e3e15290272cffd32bbba6c4999578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserDetails.html.twig"));

        $__internal_e23ce0d3731738181df0e4046c4a8d84007133174642432454284f5a2e7cd960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23ce0d3731738181df0e4046c4a8d84007133174642432454284f5a2e7cd960->enter($__internal_e23ce0d3731738181df0e4046c4a8d84007133174642432454284f5a2e7cd960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_731643196ea39302fc3f4226d73c93ea05e3e15290272cffd32bbba6c4999578->leave($__internal_731643196ea39302fc3f4226d73c93ea05e3e15290272cffd32bbba6c4999578_prof);

        
        $__internal_e23ce0d3731738181df0e4046c4a8d84007133174642432454284f5a2e7cd960->leave($__internal_e23ce0d3731738181df0e4046c4a8d84007133174642432454284f5a2e7cd960_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_7e2bb82956f560d20803c00f8599e54d2c5d5e22ab2f2597f49661c96b9a092e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2bb82956f560d20803c00f8599e54d2c5d5e22ab2f2597f49661c96b9a092e->enter($__internal_7e2bb82956f560d20803c00f8599e54d2c5d5e22ab2f2597f49661c96b9a092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_9e963ec9518f9cea08ebb2a7066eb0f3bca509a740d7f5a865b0df1f9821f5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e963ec9518f9cea08ebb2a7066eb0f3bca509a740d7f5a865b0df1f9821f5da->enter($__internal_9e963ec9518f9cea08ebb2a7066eb0f3bca509a740d7f5a865b0df1f9821f5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "    <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </a>
    </li>
";
        
        $__internal_9e963ec9518f9cea08ebb2a7066eb0f3bca509a740d7f5a865b0df1f9821f5da->leave($__internal_9e963ec9518f9cea08ebb2a7066eb0f3bca509a740d7f5a865b0df1f9821f5da_prof);

        
        $__internal_7e2bb82956f560d20803c00f8599e54d2c5d5e22ab2f2597f49661c96b9a092e->leave($__internal_7e2bb82956f560d20803c00f8599e54d2c5d5e22ab2f2597f49661c96b9a092e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_00be7e768cb8202f771403b95d5bd7429c93df8fba1162d2e801811b915f7527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00be7e768cb8202f771403b95d5bd7429c93df8fba1162d2e801811b915f7527->enter($__internal_00be7e768cb8202f771403b95d5bd7429c93df8fba1162d2e801811b915f7527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1347684d59b1b6459a4c1550687f49633a9e008e66fcd6f32acbd669ff2e5048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1347684d59b1b6459a4c1550687f49633a9e008e66fcd6f32acbd669ff2e5048->enter($__internal_1347684d59b1b6459a4c1550687f49633a9e008e66fcd6f32acbd669ff2e5048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
<!-- Projects Row -->
        <div class=\"row\">
            
            
            <div class=\"col-md-7 img-portfolio\" >
                ";
        // line 16
        echo "\t\t\t\t\t                  
                        <img class=\"img-responsive img-hover\"  width=\"400px\" height=\"600px\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "url", array()))), "html", null, true);
        echo "\" 
                             alt=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "alt", array()), "html", null, true);
        echo "\" style=\"margin-bottom:5px;\"
                         />
                  </div>            
\t\t\t\t\t
            
            <div class=\"col-md-5 dariusDiv\" style=\"border-radius: 1; font-family:calibri\">

               <p> Name : <span class=\"dariusSpan\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " </span> </p>
               <p> Username : <span class=\"dariusSpan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span> </p>
               <p> Email : <span class=\"dariusSpan\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span> </p>
               <p> Phone number : <span class=\"dariusSpan\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo " </span> </p>
               <p> Adress: <span class=\"dariusSpan\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "  </span> </p>
               <p> User Category: <span class=\"dariusSpan\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCategory", array()), "html", null, true);
        echo " </span> </p>
               <p> Batch: <span class=\"dariusSpan\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "batch", array()), "html", null, true);
        echo " </span> </p>
               <p> Specialty: <span class=\"dariusSpan\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialty", array()), "html", null, true);
        echo " </span> </p>
                
                <a class=\"btn btn-default\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Edit</a>
                ";
        // line 35
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()) == false)) {
            // line 36
            echo "                   <a class=\"btn btn-success\" onclick= \"disabled\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnabled", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" >Enable</a>
                ";
        } else {
            // line 38
            echo "                    <a class=\"btn btn-default\" onclick= \"disabled\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisable", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" style=\"background-color:black; color:white\">Disable</i> </a>
                ";
        }
        // line 40
        echo "                <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDeleteUser\"><i class=\"fa fa-remove\"></i> Delete</a>

            </div>
             
            ";
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()) == false)) {
            // line 45
            echo "                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisableList", array("page" => 1));
            echo "\" >Back to list</a>
                ";
        } else {
            // line 47
            echo "                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" > <i class=\"fa fa-back\"></i> Back to list</a>
            ";
        }
        // line 49
        echo "            
        </div>
        <!-- /.row -->\t\t

        <div class=\"modal fade\" id=\"myModalDeleteUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"margin-top:15%\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabelDeleteUser\" style=\"text-align:center; color:blue\">";
        // line 58
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\" style=\"float:right\">Delete</a>
              </div>
            </div>
          </div>
        </div>
\t\t
";
        
        $__internal_1347684d59b1b6459a4c1550687f49633a9e008e66fcd6f32acbd669ff2e5048->leave($__internal_1347684d59b1b6459a4c1550687f49633a9e008e66fcd6f32acbd669ff2e5048_prof);

        
        $__internal_00be7e768cb8202f771403b95d5bd7429c93df8fba1162d2e801811b915f7527->leave($__internal_00be7e768cb8202f771403b95d5bd7429c93df8fba1162d2e801811b915f7527_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6896a929f03f04c33cb4a81495c82a3f3d7b4ed05801e8640220d6bc00f4ef87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6896a929f03f04c33cb4a81495c82a3f3d7b4ed05801e8640220d6bc00f4ef87->enter($__internal_6896a929f03f04c33cb4a81495c82a3f3d7b4ed05801e8640220d6bc00f4ef87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_09e34058f1074c56169000949fa3db776c6663586620815ccda677cb5680ce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e34058f1074c56169000949fa3db776c6663586620815ccda677cb5680ce5b->enter($__internal_09e34058f1074c56169000949fa3db776c6663586620815ccda677cb5680ce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        
        $__internal_09e34058f1074c56169000949fa3db776c6663586620815ccda677cb5680ce5b->leave($__internal_09e34058f1074c56169000949fa3db776c6663586620815ccda677cb5680ce5b_prof);

        
        $__internal_6896a929f03f04c33cb4a81495c82a3f3d7b4ed05801e8640220d6bc00f4ef87->leave($__internal_6896a929f03f04c33cb4a81495c82a3f3d7b4ed05801e8640220d6bc00f4ef87_prof);

    }

    // line 83
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_8458db67da0505a6db5e258b37857cb43c149034c352eb4344936a413c212906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8458db67da0505a6db5e258b37857cb43c149034c352eb4344936a413c212906->enter($__internal_8458db67da0505a6db5e258b37857cb43c149034c352eb4344936a413c212906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_65e7dbca0632d8f265fdba53b8494ad4a0cfe64060e163476e57d97b331cc571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e7dbca0632d8f265fdba53b8494ad4a0cfe64060e163476e57d97b331cc571->enter($__internal_65e7dbca0632d8f265fdba53b8494ad4a0cfe64060e163476e57d97b331cc571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_65e7dbca0632d8f265fdba53b8494ad4a0cfe64060e163476e57d97b331cc571->leave($__internal_65e7dbca0632d8f265fdba53b8494ad4a0cfe64060e163476e57d97b331cc571_prof);

        
        $__internal_8458db67da0505a6db5e258b37857cb43c149034c352eb4344936a413c212906->leave($__internal_8458db67da0505a6db5e258b37857cb43c149034c352eb4344936a413c212906_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/adminUserDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 83,  224 => 76,  215 => 75,  198 => 67,  184 => 58,  173 => 49,  167 => 47,  161 => 45,  159 => 44,  153 => 40,  147 => 38,  141 => 36,  139 => 35,  135 => 34,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  100 => 25,  90 => 18,  86 => 17,  83 => 16,  75 => 9,  66 => 8,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/user/adminUserEnableList.html.twig '%}

{% block status %}
    <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / {{user.username}} </a>
    </li>
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
                {% if user.enabled == false %}
                   <a class=\"btn btn-success\" onclick= \"disabled\" href=\"{{path('AdminUserEnabled',{'id':user.Id,'page': page})}}\" >Enable</a>
                {% else %}
                    <a class=\"btn btn-default\" onclick= \"disabled\" href=\"{{path('AdminUserDisable',{'id':user.Id,'page': page})}}\" style=\"background-color:black; color:white\">Disable</i> </a>
                {% endif %}
                <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModalDeleteUser\"><i class=\"fa fa-remove\"></i> Delete</a>

            </div>
             
            {% if user.enabled == false %}
                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"{{ path('AdminUserDisableList',{'page': 1}) }}\" >Back to list</a>
                {% else %}
                   <a class=\"btn btn-default\" style = \"float:right; margin-top:1%; font-weight:bold; color:blue\" href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" > <i class=\"fa fa-back\"></i> Back to list</a>
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

{% block footer %}
   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
{% endblock %}

{% block pagination %}
{% endblock %}", "pkflibrary/user/adminUserDetails.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\adminUserDetails.html.twig");
    }
}
