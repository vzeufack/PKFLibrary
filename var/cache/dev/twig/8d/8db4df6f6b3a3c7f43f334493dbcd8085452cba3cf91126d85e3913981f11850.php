<?php

/* :pkflibrary/help:helpBookManagement.html.twig */
class __TwigTemplate_30e118bb6177afc751953aece0be2d1c2e6748e0ff980f01fe7ee8425f56fc54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:helpBookManagement.html.twig", 2);
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
        $__internal_5e9aaccb8c997bbe2000af0441656b2f7b0ce73904bafe57783261d227c6e4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9aaccb8c997bbe2000af0441656b2f7b0ce73904bafe57783261d227c6e4ba->enter($__internal_5e9aaccb8c997bbe2000af0441656b2f7b0ce73904bafe57783261d227c6e4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpBookManagement.html.twig"));

        $__internal_ca6e22efce5bbae33ade5c0ce01d59db6b5de6d45f8dd6194036fa6c43c476ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6e22efce5bbae33ade5c0ce01d59db6b5de6d45f8dd6194036fa6c43c476ba->enter($__internal_ca6e22efce5bbae33ade5c0ce01d59db6b5de6d45f8dd6194036fa6c43c476ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpBookManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9aaccb8c997bbe2000af0441656b2f7b0ce73904bafe57783261d227c6e4ba->leave($__internal_5e9aaccb8c997bbe2000af0441656b2f7b0ce73904bafe57783261d227c6e4ba_prof);

        
        $__internal_ca6e22efce5bbae33ade5c0ce01d59db6b5de6d45f8dd6194036fa6c43c476ba->leave($__internal_ca6e22efce5bbae33ade5c0ce01d59db6b5de6d45f8dd6194036fa6c43c476ba_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4546deeb6f67344e4c54d218968fc38c485c46ad7163dbb01c62a7bae9e777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4546deeb6f67344e4c54d218968fc38c485c46ad7163dbb01c62a7bae9e777e->enter($__internal_d4546deeb6f67344e4c54d218968fc38c485c46ad7163dbb01c62a7bae9e777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffa840a1c37cc4a8298373d2df19a3315748cd0cabc88099bc3dc00c74ad5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa840a1c37cc4a8298373d2df19a3315748cd0cabc88099bc3dc00c74ad5951->enter($__internal_ffa840a1c37cc4a8298373d2df19a3315748cd0cabc88099bc3dc00c74ad5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffa840a1c37cc4a8298373d2df19a3315748cd0cabc88099bc3dc00c74ad5951->leave($__internal_ffa840a1c37cc4a8298373d2df19a3315748cd0cabc88099bc3dc00c74ad5951_prof);

        
        $__internal_d4546deeb6f67344e4c54d218968fc38c485c46ad7163dbb01c62a7bae9e777e->leave($__internal_d4546deeb6f67344e4c54d218968fc38c485c46ad7163dbb01c62a7bae9e777e_prof);

    }

    // line 116
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6cad5592562b23a0ada35ed4b3bc261f5c70b0698b07ff8443f4fc502df16a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cad5592562b23a0ada35ed4b3bc261f5c70b0698b07ff8443f4fc502df16a28->enter($__internal_6cad5592562b23a0ada35ed4b3bc261f5c70b0698b07ff8443f4fc502df16a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_61752eeff6695b52d2e8a1d7a511f51f29b874b44bdbeadd2751b1cdfa3ca678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61752eeff6695b52d2e8a1d7a511f51f29b874b44bdbeadd2751b1cdfa3ca678->enter($__internal_61752eeff6695b52d2e8a1d7a511f51f29b874b44bdbeadd2751b1cdfa3ca678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 117
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_61752eeff6695b52d2e8a1d7a511f51f29b874b44bdbeadd2751b1cdfa3ca678->leave($__internal_61752eeff6695b52d2e8a1d7a511f51f29b874b44bdbeadd2751b1cdfa3ca678_prof);

        
        $__internal_6cad5592562b23a0ada35ed4b3bc261f5c70b0698b07ff8443f4fc502df16a28->leave($__internal_6cad5592562b23a0ada35ed4b3bc261f5c70b0698b07ff8443f4fc502df16a28_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:helpBookManagement.html.twig";
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
{% endblock %}", ":pkflibrary/help:helpBookManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/helpBookManagement.html.twig");
    }
}
