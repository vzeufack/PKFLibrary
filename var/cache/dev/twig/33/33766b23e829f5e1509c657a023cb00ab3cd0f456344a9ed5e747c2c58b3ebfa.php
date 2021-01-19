<?php

/* @User/Registration/register_content.html.twig */
class __TwigTemplate_4cd7e1a522e0947304bc01b7d62002145274513ea9623f24c00833a67aac6a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c6b33f2851343e5f46a94e57eb0224f3a2e15816b186689ee634981929e1a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6b33f2851343e5f46a94e57eb0224f3a2e15816b186689ee634981929e1a48->enter($__internal_9c6b33f2851343e5f46a94e57eb0224f3a2e15816b186689ee634981929e1a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        $__internal_a5e14fc405ca77aa8bf5861acb9e943146f6023827caedfa998db9afa16f6178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e14fc405ca77aa8bf5861acb9e943146f6023827caedfa998db9afa16f6178->enter($__internal_a5e14fc405ca77aa8bf5861acb9e943146f6023827caedfa998db9afa16f6178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        // line 1
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

  <div class=\"panel panel-default\" style=\"margin:auto; width:60%;\">
    <div class=\"panel-heading\">
      <h3 style=\"text-align:center\">Create Account</h3>
    </div>
    ";
        // line 25
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "</th>
      <th> ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "</td>
        <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td></td>
        <td class=\"error_right\">";
        // line 38
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    
      <th>";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'label');
        echo "</th>
      <th> ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'widget');
        echo "</td>
        <td>";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 48
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error_right\">";
        // line 49
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    
      <th><i class=\"fa fa-key fa-fw\"></i></span>";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo " *</th>
      <th> ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
        <td>";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 59
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error-right\">";
        // line 60
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>

      <th><i class=\"fa fa-envelope-o fa-fw\"></i> ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " *</th>
      <th> <i class=\"fa fa-phone\"></i> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
        <td>";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 70
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors')), "html", null, true);
        echo " </td>
        <td class=\"error_right\">
        <ul style=\"list-style:none\">
         ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 74
            echo "          <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </ul>
        </td>
      </tr>

      <th> ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo " *</th>
      <th> <i class=\"fa fa-user fa-fw\"></i>";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Profile Picture"));
        echo " * </th>
      <tr>
        <td>";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "</td>
        <td>";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 87
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error_right\">";
        // line 88
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    </table>       
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'label');
        echo " *</th>
      <th> ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'label');
        echo " </th>
      <th> ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'label');
        echo " </th>
      <tr>
        <td>";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'widget');
        echo "</td>
        <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'widget');
        echo "</td>
        <td>";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "</td>
      </tr>
    </table>  

    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
      <tr>
        <td><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
        <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></td>
      </tr>
    </table> 
    <div class=\"input-group\" style=\"\">
    </div>
  </div>
  <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function(event) {
        \$('#fos_user_registration_form_userCategory').change(function(e){
          if ( ! (\$('#fos_user_registration_form_userCategory').val() === \"Undergraduate\" )){
             document.getElementById(\"fos_user_registration_form_studentID\").required = false;
              document.getElementById(\"fos_user_registration_form_batch\").required = false;
          }
          else{
            document.getElementById(\"fos_user_registration_form_studentID\").required = true;
            document.getElementById(\"fos_user_registration_form_batch\").required = true;
          }
         }).change();
    });
  </script>
  ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_9c6b33f2851343e5f46a94e57eb0224f3a2e15816b186689ee634981929e1a48->leave($__internal_9c6b33f2851343e5f46a94e57eb0224f3a2e15816b186689ee634981929e1a48_prof);

        
        $__internal_a5e14fc405ca77aa8bf5861acb9e943146f6023827caedfa998db9afa16f6178->leave($__internal_a5e14fc405ca77aa8bf5861acb9e943146f6023827caedfa998db9afa16f6178_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 127,  261 => 112,  252 => 106,  248 => 105,  239 => 99,  235 => 98,  231 => 97,  226 => 95,  222 => 94,  218 => 93,  210 => 88,  206 => 87,  200 => 84,  196 => 83,  191 => 81,  187 => 80,  181 => 76,  172 => 74,  168 => 73,  162 => 70,  156 => 67,  152 => 66,  147 => 64,  143 => 63,  137 => 60,  133 => 59,  127 => 56,  123 => 55,  118 => 53,  114 => 52,  108 => 49,  104 => 48,  98 => 45,  94 => 44,  89 => 42,  85 => 41,  79 => 38,  72 => 34,  68 => 33,  63 => 31,  59 => 30,  50 => 25,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %} 
  
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

  <div class=\"panel panel-default\" style=\"margin:auto; width:60%;\">
    <div class=\"panel-heading\">
      <h3 style=\"text-align:center\">Create Account</h3>
    </div>
    {#{ form(form, {'attr': {'novalidate': 'novalidate'}}) }#}
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

    <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>{{ form_label(form.firstName) }}</th>
      <th> {{ form_label(form.familyName) }} * </th>
      <tr>
        <td>{{ form_widget(form.firstName) }}</td>
        <td>{{ form_widget(form.familyName) }}</td>
      </tr>
      <tr>
        <td></td>
        <td class=\"error_right\">{{ form_errors(form.familyName) | striptags }}</td>
      </tr>
    
      <th>{{ form_label(form.studentID) }}</th>
      <th> {{ form_label(form.username) }} * </th>
      <tr>
        <td>{{ form_widget(form.studentID) }}</td>
        <td>{{ form_widget(form.username) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.studentID) | striptags }}</td>
        <td class=\"error_right\">{{ form_errors(form.username) | striptags }}</td>
      </tr>
    
      <th><i class=\"fa fa-key fa-fw\"></i></span>{{ form_label(form.plainPassword.first) }} *</th>
      <th> {{ form_label(form.plainPassword.second) }} * </th>
      <tr>
        <td>{{ form_widget(form.plainPassword.first) }}</td>
        <td>{{ form_widget(form.plainPassword.second) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.plainPassword.first) | striptags }}</td>
        <td class=\"error-right\">{{ form_errors(form.plainPassword.second) | striptags }}</td>
      </tr>

      <th><i class=\"fa fa-envelope-o fa-fw\"></i> {{ form_label(form.email) }} *</th>
      <th> <i class=\"fa fa-phone\"></i> {{ form_label(form.phoneNumber) }} * </th>
      <tr>
        <td>{{ form_widget(form.email) }}</td>
        <td>{{ form_widget(form.phoneNumber) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.email) | striptags }} </td>
        <td class=\"error_right\">
        <ul style=\"list-style:none\">
         {% for error in form.phoneNumber.vars.errors %}
          <li>{{ error.message }}</li>
         {% endfor %}
        </ul>
        </td>
      </tr>

      <th> {{ form_label(form.address) }} *</th>
      <th> <i class=\"fa fa-user fa-fw\"></i>{{ form_label(form.image, 'Profile Picture') }} * </th>
      <tr>
        <td>{{ form_widget(form.address) }}</td>
        <td>{{ form_widget(form.image.file) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.address) | striptags }}</td>
        <td class=\"error_right\">{{ form_errors(form.image.file) | striptags }}</td>
      </tr>
    </table>       
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>{{ form_label(form.userCategory) }} *</th>
      <th> {{ form_label(form.batch) }} </th>
      <th> {{ form_label(form.specialty) }} </th>
      <tr>
        <td>{{ form_widget(form.userCategory) }}</td>
        <td>{{form_widget(form.batch)}}</td>
        <td>{{form_widget(form.specialty)}}</td>
      </tr>
    </table>  

    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
      <tr>
        <td><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
        <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"{{ 'Submit'|trans }}\" /></td>
      </tr>
    </table> 
    <div class=\"input-group\" style=\"\">
    </div>
  </div>
  <script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script>
  <script>
    \$(document).ready(function(event) {
        \$('#fos_user_registration_form_userCategory').change(function(e){
          if ( ! (\$('#fos_user_registration_form_userCategory').val() === \"Undergraduate\" )){
             document.getElementById(\"fos_user_registration_form_studentID\").required = false;
              document.getElementById(\"fos_user_registration_form_batch\").required = false;
          }
          else{
            document.getElementById(\"fos_user_registration_form_studentID\").required = true;
            document.getElementById(\"fos_user_registration_form_batch\").required = true;
          }
         }).change();
    });
  </script>
  {{ form_end(form) }}
  ", "@User/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Registration\\register_content.html.twig");
    }
}
