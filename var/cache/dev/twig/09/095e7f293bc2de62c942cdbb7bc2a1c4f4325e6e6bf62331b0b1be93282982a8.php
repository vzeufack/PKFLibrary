<?php

/* :pkflibrary/user:adminUserDetails.html.twig */
class __TwigTemplate_8dcedd9b14b7f878074938a6f913c69d6b6444e2af8f9e9a2ca548ad30048256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/user/adminUserEnableList.html.twig ", ":pkflibrary/user:adminUserDetails.html.twig", 1);
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
        $__internal_976c01ba99ab7a6754e1f8ce3a670fdfb11b5dd8af31ab6f70b011fbbe44d533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976c01ba99ab7a6754e1f8ce3a670fdfb11b5dd8af31ab6f70b011fbbe44d533->enter($__internal_976c01ba99ab7a6754e1f8ce3a670fdfb11b5dd8af31ab6f70b011fbbe44d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:adminUserDetails.html.twig"));

        $__internal_fb973185835a9da96ee61bade20e787f17e70de9524c681d79ca5ce6801bc00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb973185835a9da96ee61bade20e787f17e70de9524c681d79ca5ce6801bc00f->enter($__internal_fb973185835a9da96ee61bade20e787f17e70de9524c681d79ca5ce6801bc00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:adminUserDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976c01ba99ab7a6754e1f8ce3a670fdfb11b5dd8af31ab6f70b011fbbe44d533->leave($__internal_976c01ba99ab7a6754e1f8ce3a670fdfb11b5dd8af31ab6f70b011fbbe44d533_prof);

        
        $__internal_fb973185835a9da96ee61bade20e787f17e70de9524c681d79ca5ce6801bc00f->leave($__internal_fb973185835a9da96ee61bade20e787f17e70de9524c681d79ca5ce6801bc00f_prof);

    }

    // line 3
    public function block_status($context, array $blocks = array())
    {
        $__internal_bc2e789c8e96b059401d50b47436171340c22be8de031443d53fb8dc3e906e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2e789c8e96b059401d50b47436171340c22be8de031443d53fb8dc3e906e59->enter($__internal_bc2e789c8e96b059401d50b47436171340c22be8de031443d53fb8dc3e906e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_da25d143fedc84c0a94fb4cfe1035d912eb5edabe8d45097458624eb8c5a5e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da25d143fedc84c0a94fb4cfe1035d912eb5edabe8d45097458624eb8c5a5e2e->enter($__internal_da25d143fedc84c0a94fb4cfe1035d912eb5edabe8d45097458624eb8c5a5e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 4
        echo "    <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </a>
    </li>
";
        
        $__internal_da25d143fedc84c0a94fb4cfe1035d912eb5edabe8d45097458624eb8c5a5e2e->leave($__internal_da25d143fedc84c0a94fb4cfe1035d912eb5edabe8d45097458624eb8c5a5e2e_prof);

        
        $__internal_bc2e789c8e96b059401d50b47436171340c22be8de031443d53fb8dc3e906e59->leave($__internal_bc2e789c8e96b059401d50b47436171340c22be8de031443d53fb8dc3e906e59_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4942846b4f3e0ab718c37ece9c38af81ac19164a6842c579ab550a26fd9cb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4942846b4f3e0ab718c37ece9c38af81ac19164a6842c579ab550a26fd9cb3b->enter($__internal_c4942846b4f3e0ab718c37ece9c38af81ac19164a6842c579ab550a26fd9cb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_35b54acacaf3f3849940410e5bc35a9fc6a6ac2bae258ae7834b177faa5e02db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b54acacaf3f3849940410e5bc35a9fc6a6ac2bae258ae7834b177faa5e02db->enter($__internal_35b54acacaf3f3849940410e5bc35a9fc6a6ac2bae258ae7834b177faa5e02db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_35b54acacaf3f3849940410e5bc35a9fc6a6ac2bae258ae7834b177faa5e02db->leave($__internal_35b54acacaf3f3849940410e5bc35a9fc6a6ac2bae258ae7834b177faa5e02db_prof);

        
        $__internal_c4942846b4f3e0ab718c37ece9c38af81ac19164a6842c579ab550a26fd9cb3b->leave($__internal_c4942846b4f3e0ab718c37ece9c38af81ac19164a6842c579ab550a26fd9cb3b_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_521a737f959063026aaf17e4243e42cbe43f2f2f365b35bf0def7a361710dcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521a737f959063026aaf17e4243e42cbe43f2f2f365b35bf0def7a361710dcdc->enter($__internal_521a737f959063026aaf17e4243e42cbe43f2f2f365b35bf0def7a361710dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6b5cf6bbf71b59e718bfa665e816581559bbacd9f7c069f303e2026802ff050a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5cf6bbf71b59e718bfa665e816581559bbacd9f7c069f303e2026802ff050a->enter($__internal_6b5cf6bbf71b59e718bfa665e816581559bbacd9f7c069f303e2026802ff050a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "   <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        
        $__internal_6b5cf6bbf71b59e718bfa665e816581559bbacd9f7c069f303e2026802ff050a->leave($__internal_6b5cf6bbf71b59e718bfa665e816581559bbacd9f7c069f303e2026802ff050a_prof);

        
        $__internal_521a737f959063026aaf17e4243e42cbe43f2f2f365b35bf0def7a361710dcdc->leave($__internal_521a737f959063026aaf17e4243e42cbe43f2f2f365b35bf0def7a361710dcdc_prof);

    }

    // line 83
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_276c2557928985759483c3ca0dc0de99295385e223f7f19cbc3ede13175bd8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c2557928985759483c3ca0dc0de99295385e223f7f19cbc3ede13175bd8e8->enter($__internal_276c2557928985759483c3ca0dc0de99295385e223f7f19cbc3ede13175bd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_d8bdb4ed60fa97bc4f0729ecd717f64403d5f63b42e3f1a8d6324c5fbb161e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bdb4ed60fa97bc4f0729ecd717f64403d5f63b42e3f1a8d6324c5fbb161e19->enter($__internal_d8bdb4ed60fa97bc4f0729ecd717f64403d5f63b42e3f1a8d6324c5fbb161e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_d8bdb4ed60fa97bc4f0729ecd717f64403d5f63b42e3f1a8d6324c5fbb161e19->leave($__internal_d8bdb4ed60fa97bc4f0729ecd717f64403d5f63b42e3f1a8d6324c5fbb161e19_prof);

        
        $__internal_276c2557928985759483c3ca0dc0de99295385e223f7f19cbc3ede13175bd8e8->leave($__internal_276c2557928985759483c3ca0dc0de99295385e223f7f19cbc3ede13175bd8e8_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/user:adminUserDetails.html.twig";
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
{% endblock %}", ":pkflibrary/user:adminUserDetails.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/user/adminUserDetails.html.twig");
    }
}
