<?php

/* :pkflibrary:topdf.html.twig */
class __TwigTemplate_7ba0e620cc600165fde8bc06abca88bcbaab764a912e92dd57f10619d586d77e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171015ed3cf3246dd83abdd2af595d4d09a991b978782c7721762956847d1d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171015ed3cf3246dd83abdd2af595d4d09a991b978782c7721762956847d1d2e->enter($__internal_171015ed3cf3246dd83abdd2af595d4d09a991b978782c7721762956847d1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:topdf.html.twig"));

        $__internal_855eb0fbd9563afee6ed53828725c96013b24982e4c8d1a0d9bdfd64afe54780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855eb0fbd9563afee6ed53828725c96013b24982e4c8d1a0d9bdfd64afe54780->enter($__internal_855eb0fbd9563afee6ed53828725c96013b24982e4c8d1a0d9bdfd64afe54780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:topdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    <style>
              .label{
                font-weight : bold ;
                color: black;
                font-size: 14px;
                
              }
              .secondCell{
                padding-left: 6em;
              }
    </style>

 </head>

<body>
 <div class=\"modal-fade\" role=\"dialog\" style=\"margin-top:1%; font-family:calibri\">
  <div class=\"modal-dialog modal-md\">
\t<div class=\"modal-content\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabelDetails\" style=\"text-align:center; color:blue\"><i class=\"fa fa-book\"></i> Borrow Details</h4>
              </div>
              <div class=\"modal-body row\" style=\"text-align:left\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
\t                \t<tr>
\t\t                \t<td>
\t\t\t                \t<span class=\"label\">Date Requested: </span> ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dateRequested", array()), "F j, Y"), "html", null, true);
        echo "
\t\t\t                \t<span class=\"secondCell\">
\t\t\t                \t\t<span class=\"label\">User Name: </span>
\t\t\t                \t\t";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "firstName", array()), "html", null, true);
        echo "
\t\t\t                \t<span>
\t\t                \t</td>
\t                \t</tr>                \t
\t                \t<tr>
\t                  \t\t<td><span class=\"label\">User Category: </span>
\t                  \t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "userCategory", array()), "html", null, true);
        echo "
\t                  \t\t\t<span class=\"secondCell\">
\t                  \t\t\t\t<span class=\"label\">Registration Number:</span>
\t                  \t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "studentID", array()), "html", null, true);
        echo "
\t                  \t\t\t</span>
\t                  \t\t</td>
\t                  \t</tr> 
\t                  
\t                  <tr>
                \t\t<td><span class=\"label\">Program and Level of Study:</span> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "specialty", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "batch", array()), "html", null, true);
        echo "
                \t\t\t<span class=\"secondCell\">
                \t\t\t\t<span class=\"label\">Phone Number: </span>
                \t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "phoneNumber", array()), "html", null, true);
        echo "
                \t\t\t</span>
                \t\t</td>
                \t  </tr> 
                \t\t<tr>
                \t\t\t<td><span class=\"label\">Email: </span>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "user", array()), "email", array()), "html", null, true);
        echo "              \t\t\t\t
                \t\t\t</td>
                \t\t</tr>\t
                \t\t<tr>
                \t\t\t<td>
\t        \t\t\t\t\t<span class=\"label\">Document Title: </span>
\t        \t\t\t\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "title", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "subTitle", array()), "html", null, true);
        echo ")
                \t\t\t</td>
                \t\t</tr>
\t                \t<tr>
\t                \t\t<td><span class=\"label\">Author(s): </span>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "author", array()), "html", null, true);
        echo "
\t                \t\t\t<span class=\"secondCell\">
\t                \t\t\t\t<span class=\"label\">Editor: </span>
\t                \t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "editor", array()), "html", null, true);
        echo "
\t                \t\t\t</span>
\t                \t\t</td>\t
\t                \t</tr>
\t                \t<tr>
\t                \t\t<td>
\t\t                \t\t<span class=\"label\">Edition: </span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "edition", array()), "html", null, true);
        echo "
\t\t                \t\t<span class=\"secondCell\">
\t\t                \t\t\t<span class=\"label\">ISBN : </span>
\t\t                \t\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "book", array()), "isbn", array()), "html", null, true);
        echo "
\t\t                \t\t</span>
\t\t                \t\t<span class=\"secondCell\">
\t\t                \t\t\t<span class=\"label\">Code of Reference :</span>
\t\t                \t\t\t ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "
\t\t                \t\t</span>
\t                \t\t</td>
\t                \t\t
\t                \t</tr>
\t                \t
                  </table>
                  <h5 style=\"padding-left: 1.5em;font-weight : bold ;\">Dates Borrowed</h5> 
                  <table width=\"90%\" style=\"border-spacing:15px 2px; border-collapse:separate; margin-left:20px;\" border=\"1\"> 
                \t<tr>
                \t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "datesBorrowed", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dates"]) {
            echo "     \t
                      <td>
\t\t                  ";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dates"], "dateBorrowed", array()), "F j, Y"), "html", null, true);
            echo "
                      </td>
                      ";
            // line 113
            if ((($this->getAttribute($context["loop"], "index", array()) % 6) == 0)) {
                // line 114
                echo "\t\t\t\t        </tr><tr> 
\t\t\t\t      ";
            }
            // line 115
            echo " 
                \t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dates'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                \t</tr>
                  </table>
                  <p></p>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                  <tr>
                  \t<td><span class=\"label\">Date Returned:</span><span style=\" padding-left: 2em;\">";
        // line 122
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dateReturned", array()), "F j, Y"), "html", null, true);
        echo "</span></td>

                  </tr>      
                  </table>
                  <p></p>
                </div> 
              </div>
    </div>
   </div>
  </div>
</body>

</html>";
        
        $__internal_171015ed3cf3246dd83abdd2af595d4d09a991b978782c7721762956847d1d2e->leave($__internal_171015ed3cf3246dd83abdd2af595d4d09a991b978782c7721762956847d1d2e_prof);

        
        $__internal_855eb0fbd9563afee6ed53828725c96013b24982e4c8d1a0d9bdfd64afe54780->leave($__internal_855eb0fbd9563afee6ed53828725c96013b24982e4c8d1a0d9bdfd64afe54780_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_272208bbe66b716eb66a203948d136532136095978795ad9523c9b178a9f3af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272208bbe66b716eb66a203948d136532136095978795ad9523c9b178a9f3af3->enter($__internal_272208bbe66b716eb66a203948d136532136095978795ad9523c9b178a9f3af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4d85b998fd723965add1250a3c44a2f940d5bb4589ca045ec884dfef74df858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d85b998fd723965add1250a3c44a2f940d5bb4589ca045ec884dfef74df858->enter($__internal_a4d85b998fd723965add1250a3c44a2f940d5bb4589ca045ec884dfef74df858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/> 
        <!-- TABLE STYLES-->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    ";
        
        $__internal_a4d85b998fd723965add1250a3c44a2f940d5bb4589ca045ec884dfef74df858->leave($__internal_a4d85b998fd723965add1250a3c44a2f940d5bb4589ca045ec884dfef74df858_prof);

        
        $__internal_272208bbe66b716eb66a203948d136532136095978795ad9523c9b178a9f3af3->leave($__internal_272208bbe66b716eb66a203948d136532136095978795ad9523c9b178a9f3af3_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary:topdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 18,  272 => 16,  267 => 14,  262 => 12,  258 => 10,  249 => 9,  226 => 122,  219 => 117,  204 => 115,  200 => 114,  198 => 113,  193 => 111,  173 => 109,  160 => 99,  153 => 95,  147 => 92,  138 => 86,  132 => 83,  123 => 79,  114 => 73,  106 => 68,  98 => 65,  89 => 59,  83 => 56,  72 => 50,  66 => 47,  38 => 21,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/> 
        <!-- TABLE STYLES-->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/dataTables/dataTables.bootstrap.css' ) }}\" rel=\"stylesheet\" />
        
    {% endblock %}
    <style>
              .label{
                font-weight : bold ;
                color: black;
                font-size: 14px;
                
              }
              .secondCell{
                padding-left: 6em;
              }
    </style>

 </head>

<body>
 <div class=\"modal-fade\" role=\"dialog\" style=\"margin-top:1%; font-family:calibri\">
  <div class=\"modal-dialog modal-md\">
\t<div class=\"modal-content\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabelDetails\" style=\"text-align:center; color:blue\"><i class=\"fa fa-book\"></i> Borrow Details</h4>
              </div>
              <div class=\"modal-body row\" style=\"text-align:left\">
                  <div class=\"\" style=\"font-family:calibri; margin-top:0\"> 
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
\t                \t<tr>
\t\t                \t<td>
\t\t\t                \t<span class=\"label\">Date Requested: </span> {{data.dateRequested|date('F j, Y')}}
\t\t\t                \t<span class=\"secondCell\">
\t\t\t                \t\t<span class=\"label\">User Name: </span>
\t\t\t                \t\t{{data.user.familyName}} {{data.user.firstName}}
\t\t\t                \t<span>
\t\t                \t</td>
\t                \t</tr>                \t
\t                \t<tr>
\t                  \t\t<td><span class=\"label\">User Category: </span>
\t                  \t\t\t\t{{data.user.userCategory}}
\t                  \t\t\t<span class=\"secondCell\">
\t                  \t\t\t\t<span class=\"label\">Registration Number:</span>
\t                  \t\t\t\t{{data.user.studentID}}
\t                  \t\t\t</span>
\t                  \t\t</td>
\t                  \t</tr> 
\t                  
\t                  <tr>
                \t\t<td><span class=\"label\">Program and Level of Study:</span> {{data.user.specialty}} {{data.user.batch}}
                \t\t\t<span class=\"secondCell\">
                \t\t\t\t<span class=\"label\">Phone Number: </span>
                \t\t\t\t{{data.user.phoneNumber}}
                \t\t\t</span>
                \t\t</td>
                \t  </tr> 
                \t\t<tr>
                \t\t\t<td><span class=\"label\">Email: </span>{{data.user.email}}              \t\t\t\t
                \t\t\t</td>
                \t\t</tr>\t
                \t\t<tr>
                \t\t\t<td>
\t        \t\t\t\t\t<span class=\"label\">Document Title: </span>
\t        \t\t\t\t\t\t{{data.book.title}} ({{data.book.subTitle}})
                \t\t\t</td>
                \t\t</tr>
\t                \t<tr>
\t                \t\t<td><span class=\"label\">Author(s): </span>{{data.book.author}}
\t                \t\t\t<span class=\"secondCell\">
\t                \t\t\t\t<span class=\"label\">Editor: </span>
\t                \t\t\t\t{{data.book.editor}}
\t                \t\t\t</span>
\t                \t\t</td>\t
\t                \t</tr>
\t                \t<tr>
\t                \t\t<td>
\t\t                \t\t<span class=\"label\">Edition: </span>{{data.book.edition}}
\t\t                \t\t<span class=\"secondCell\">
\t\t                \t\t\t<span class=\"label\">ISBN : </span>
\t\t                \t\t\t{{data.book.isbn}}
\t\t                \t\t</span>
\t\t                \t\t<span class=\"secondCell\">
\t\t                \t\t\t<span class=\"label\">Code of Reference :</span>
\t\t                \t\t\t {{data.id}}
\t\t                \t\t</span>
\t                \t\t</td>
\t                \t\t
\t                \t</tr>
\t                \t
                  </table>
                  <h5 style=\"padding-left: 1.5em;font-weight : bold ;\">Dates Borrowed</h5> 
                  <table width=\"90%\" style=\"border-spacing:15px 2px; border-collapse:separate; margin-left:20px;\" border=\"1\"> 
                \t<tr>
                \t{% for dates in data.datesBorrowed %}     \t
                      <td>
\t\t                  {{dates.dateBorrowed|date('F j, Y')}}
                      </td>
                      {% if loop.index % 6 == 0 %}
\t\t\t\t        </tr><tr> 
\t\t\t\t      {% endif %} 
                \t{% endfor %}
                \t</tr>
                  </table>
                  <p></p>
                  <table width=\"100%\" style=\"border-spacing:15px 2px; border-collapse:separate\"> 
                  <tr>
                  \t<td><span class=\"label\">Date Returned:</span><span style=\" padding-left: 2em;\">{{data.dateReturned|date('F j, Y')}}</span></td>

                  </tr>      
                  </table>
                  <p></p>
                </div> 
              </div>
    </div>
   </div>
  </div>
</body>

</html>", ":pkflibrary:topdf.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/topdf.html.twig");
    }
}
