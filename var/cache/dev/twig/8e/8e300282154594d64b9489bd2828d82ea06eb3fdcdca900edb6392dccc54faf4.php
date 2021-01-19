<?php

/* pkflibrary/help/helpBookManagement.html.twig */
class __TwigTemplate_55db21252f3a427067ae18dcc5d383221a25524998655e52802c2bb71e7ef0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/help/helpBookManagement.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/miscellanous.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76a1d5693666b65eea34fc30b2d040a3b26b13ab9b6192b60ebdf41e159d7664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a1d5693666b65eea34fc30b2d040a3b26b13ab9b6192b60ebdf41e159d7664->enter($__internal_76a1d5693666b65eea34fc30b2d040a3b26b13ab9b6192b60ebdf41e159d7664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/helpBookManagement.html.twig"));

        $__internal_faf23d2f01cc5feafa15297bc7cac9211ac837a0cd6afd6de98f001a2b783f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf23d2f01cc5feafa15297bc7cac9211ac837a0cd6afd6de98f001a2b783f35->enter($__internal_faf23d2f01cc5feafa15297bc7cac9211ac837a0cd6afd6de98f001a2b783f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/helpBookManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a1d5693666b65eea34fc30b2d040a3b26b13ab9b6192b60ebdf41e159d7664->leave($__internal_76a1d5693666b65eea34fc30b2d040a3b26b13ab9b6192b60ebdf41e159d7664_prof);

        
        $__internal_faf23d2f01cc5feafa15297bc7cac9211ac837a0cd6afd6de98f001a2b783f35->leave($__internal_faf23d2f01cc5feafa15297bc7cac9211ac837a0cd6afd6de98f001a2b783f35_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7b727e9dca7051a2345a3259dad8165eb09d98b8695a2b6cab5f6f3b05ef860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b727e9dca7051a2345a3259dad8165eb09d98b8695a2b6cab5f6f3b05ef860->enter($__internal_f7b727e9dca7051a2345a3259dad8165eb09d98b8695a2b6cab5f6f3b05ef860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9e2b76dbef451e2733023d21fe91f3c8038461f4c5eeb3732040dd047f89326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e2b76dbef451e2733023d21fe91f3c8038461f4c5eeb3732040dd047f89326->enter($__internal_f9e2b76dbef451e2733023d21fe91f3c8038461f4c5eeb3732040dd047f89326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">Book Management</h3>
            </div>
           
  </header>
 <section>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">1. When you log in as the Librarian you have the following home page: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/book/homeAdmin.png")), "html", null, true);
        echo "\" ><img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/book/homeAdminmini.png")), "html", null, true);
        echo "\" alt=\"\" width=\"250px\" height=\"150px\"></a></p>


           
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Home page of the librarian</h5>
          <ul>
            <li>The first thing you will always have to do before any operation is to log in with the correct credentials.</li>
            <li>As you noticed, the home page of the librarian is different from the home page of general users. You have more options, which are related to the management of books, the management of users and the management of borrows</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">2.Adding a new book </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/book/addingBook.png\"><img src=\"images/book/addingBookmini.png\" alt=\"adding a book\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Procedure to add a new book</h5>
          <ul>
            <li>You will notice that there is a button \"Add Book\". Click on it to add a new book:</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Add Book\", you get the following form to filled in:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
              <p><a href=\"images/book/addBook.png\"><img src=\"images/book/addBookmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Fill in the form to add the new book.</h5>
          <ul>
            <li>After clicking on \"Add Book\" the fill shown on the left is displayed</li>
            <li>Fill in the form and save the new book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. View/Edit/Delete a Book:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/book/editMgntBook.png\"><img src=\"images/book/editMgntBookmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Other basic operations on a book</h5>
          <ul>
            <li>In addition to adding a book, other basic operations which can be performed on a book include: editing, updating, or deleting a book.</li>
            <li>Once you click on or research a book, this one's details are displayed on the screen, with options to update, and delete the book.</li>
            <li>To carry out one of the previous operations, just click on the corresponding button.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. Manage categories: Click on : \"Management > Category Mangement\"</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/book/categoryManagement.png\"><img src=\"images/book/categoryManagementmini.png\" alt=\"Category Mangement\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Managing categories and subcategories</h5>
          <ul>
            <li>The software allows to add new categories and subcategories</li>
            <li>To access to the categories management, click on \"Management > Category Management\"</li>
            <li>You can create, update, or delete  a category</li>
            <li>You can create, update, or delete  a subcategory</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  </section>
   
</div>
";
        
        $__internal_f9e2b76dbef451e2733023d21fe91f3c8038461f4c5eeb3732040dd047f89326->leave($__internal_f9e2b76dbef451e2733023d21fe91f3c8038461f4c5eeb3732040dd047f89326_prof);

        
        $__internal_f7b727e9dca7051a2345a3259dad8165eb09d98b8695a2b6cab5f6f3b05ef860->leave($__internal_f7b727e9dca7051a2345a3259dad8165eb09d98b8695a2b6cab5f6f3b05ef860_prof);

    }

    // line 116
    public function block_footer($context, array $blocks = array())
    {
        $__internal_96b80bb69c84608e8638b91c81b523ae64831dfdb0a90529c4f20315875963bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b80bb69c84608e8638b91c81b523ae64831dfdb0a90529c4f20315875963bf->enter($__internal_96b80bb69c84608e8638b91c81b523ae64831dfdb0a90529c4f20315875963bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5261da83336ce305747af90c6c95858469f49e0647c8d566170fdef564fbcfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5261da83336ce305747af90c6c95858469f49e0647c8d566170fdef564fbcfc1->enter($__internal_5261da83336ce305747af90c6c95858469f49e0647c8d566170fdef564fbcfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 117
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_5261da83336ce305747af90c6c95858469f49e0647c8d566170fdef564fbcfc1->leave($__internal_5261da83336ce305747af90c6c95858469f49e0647c8d566170fdef564fbcfc1_prof);

        
        $__internal_96b80bb69c84608e8638b91c81b523ae64831dfdb0a90529c4f20315875963bf->leave($__internal_96b80bb69c84608e8638b91c81b523ae64831dfdb0a90529c4f20315875963bf_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/help/helpBookManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 117,  174 => 116,  68 => 21,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'pkflibrary/miscellanous.html.twig '%}

{% block body %}
 <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">Book Management</h3>
            </div>
           
  </header>
 <section>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">1. When you log in as the Librarian you have the following home page: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"{{app.request.schemeAndHttpHost ~ asset('images/book/homeAdmin.png') }}\" ><img src=\"{{app.request.schemeAndHttpHost ~ asset('images/book/homeAdminmini.png') }}\" alt=\"\" width=\"250px\" height=\"150px\"></a></p>


           
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Home page of the librarian</h5>
          <ul>
            <li>The first thing you will always have to do before any operation is to log in with the correct credentials.</li>
            <li>As you noticed, the home page of the librarian is different from the home page of general users. You have more options, which are related to the management of books, the management of users and the management of borrows</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">2.Adding a new book </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/book/addingBook.png\"><img src=\"images/book/addingBookmini.png\" alt=\"adding a book\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Procedure to add a new book</h5>
          <ul>
            <li>You will notice that there is a button \"Add Book\". Click on it to add a new book:</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Add Book\", you get the following form to filled in:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
              <p><a href=\"images/book/addBook.png\"><img src=\"images/book/addBookmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Fill in the form to add the new book.</h5>
          <ul>
            <li>After clicking on \"Add Book\" the fill shown on the left is displayed</li>
            <li>Fill in the form and save the new book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. View/Edit/Delete a Book:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/book/editMgntBook.png\"><img src=\"images/book/editMgntBookmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Other basic operations on a book</h5>
          <ul>
            <li>In addition to adding a book, other basic operations which can be performed on a book include: editing, updating, or deleting a book.</li>
            <li>Once you click on or research a book, this one's details are displayed on the screen, with options to update, and delete the book.</li>
            <li>To carry out one of the previous operations, just click on the corresponding button.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. Manage categories: Click on : \"Management > Category Mangement\"</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/book/categoryManagement.png\"><img src=\"images/book/categoryManagementmini.png\" alt=\"Category Mangement\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Managing categories and subcategories</h5>
          <ul>
            <li>The software allows to add new categories and subcategories</li>
            <li>To access to the categories management, click on \"Management > Category Management\"</li>
            <li>You can create, update, or delete  a category</li>
            <li>You can create, update, or delete  a subcategory</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  </section>
   
</div>
{% endblock %}

 {% block footer %}
  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
{% endblock %}", "pkflibrary/help/helpBookManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\help\\helpBookManagement.html.twig");
    }
}
