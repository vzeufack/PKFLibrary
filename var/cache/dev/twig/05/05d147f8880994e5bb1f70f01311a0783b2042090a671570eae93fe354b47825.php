<?php

/* :pkflibrary/help:helpUserManagement.html.twig */
class __TwigTemplate_f90f40fe5f7ea362f0622a684b9f5ca2689923ac3c461a7eae293a60f7800d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:helpUserManagement.html.twig", 2);
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
        $__internal_5d9bc87c11185a4f35540fdaa0a62825cbd09cdd7ebf129049808272a98f7aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9bc87c11185a4f35540fdaa0a62825cbd09cdd7ebf129049808272a98f7aed->enter($__internal_5d9bc87c11185a4f35540fdaa0a62825cbd09cdd7ebf129049808272a98f7aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpUserManagement.html.twig"));

        $__internal_440f5df7e66d508695a575df46b2a9ccfb4aba81b121805619ed5d2e352ce2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440f5df7e66d508695a575df46b2a9ccfb4aba81b121805619ed5d2e352ce2f5->enter($__internal_440f5df7e66d508695a575df46b2a9ccfb4aba81b121805619ed5d2e352ce2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpUserManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9bc87c11185a4f35540fdaa0a62825cbd09cdd7ebf129049808272a98f7aed->leave($__internal_5d9bc87c11185a4f35540fdaa0a62825cbd09cdd7ebf129049808272a98f7aed_prof);

        
        $__internal_440f5df7e66d508695a575df46b2a9ccfb4aba81b121805619ed5d2e352ce2f5->leave($__internal_440f5df7e66d508695a575df46b2a9ccfb4aba81b121805619ed5d2e352ce2f5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f200087fd2141fb9df8a9b5a2f12e4eafc65177000901a238d3b73302f18b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f200087fd2141fb9df8a9b5a2f12e4eafc65177000901a238d3b73302f18b5->enter($__internal_52f200087fd2141fb9df8a9b5a2f12e4eafc65177000901a238d3b73302f18b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b11dd3f9f36abb36985b3019bb1428b4f989af63f3e4715db009639f6f5fbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b11dd3f9f36abb36985b3019bb1428b4f989af63f3e4715db009639f6f5fbd6->enter($__internal_3b11dd3f9f36abb36985b3019bb1428b4f989af63f3e4715db009639f6f5fbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">User management help</h3>
            </div>
           
  </header>
 <section>
    <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">1. When you log in as the Librarian you have the following home page: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/homeAdmin.png\"><img src=\"images/UserMgnt/homeAdminmini.png\" alt=\"admin home page\"/></a></p>
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
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"Management > User Management\" to move to the place dedicated to the management of users:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/selectUserMgnt.png\"><img src=\"images/UserMgnt/selectUserMgntmini.png\" alt=\"help\"/></a></p>  
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to User Management space</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > User Management\" to get to the space reserved to the management of users.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>


  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Management > User Management\", you have the list of all the users (authorized or not)</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/homeUserMgnt.png\"><img src=\"images/UserMgnt/homeUserMgntmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Home page of user management</h5>
          <ul>
            <li>From page you can handle users of the library.</li>
            <li>You have on the left side the categories of users that we have. By selecting one category, you filter the users list to display only users of the selected category.</li>
            <li>We have two groups of users, who are displayed into two different tabs: authorized users and unauthorized users.</li>
            <li>Authorized users are actually those who have access to the library. This means they are registered and enabled by the librarian.</li>
            <li>Unauthorized users are those registered but not enabled. They cannot log in the application until they are enabled by the librarian</li>
            <li>You have noticed the button \"Add User\" through which the librarian can add a new user.</li>
            <li>You can also research a user from this interface.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. From the previous page, you can search a user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/searchUser.png\"><img src=\"images/UserMgnt/searchUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Research a user</h5>
          <ul>
            <li>From the previous page, you can search a user:</li>
            <li>Enter keywords corresponding to the name of the usser and click on \"search\"</li>
            <li>Details of the user are displayed if found and nothing is displayed otherwise.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. See user details and or enable/disable/delete a user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/DiableUser.png\"><img src=\"images/UserMgnt/DiableUsermini.png\" alt=\"user details\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Basic operations on a user</h5>
          <ul>
            <li>In addition to adding a user, other basic operations which can be performed on a user include: editing, enable, disable, or delete a user.</li>
            <li>Once you click or research a user, this one's details are displayed on the screen, with options to update, enable or disable, and delete the user.</li>
            <li>To carry out one of the previous operations, just click on the corresponding button.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">6. You can also add a new user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/AddUser.png\"><img src=\"images/UserMgnt/AddUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Adding a new user</h5>
          <ul>
            <li>Click on the button \"Add User\"</li>
            <li>Fill in the form which is displayed</li>
            <li>Don't forget to fill in the mandatory fields, otherwise, you will receive warnings</li>
            <li>Save the newly created user.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  </section>
   
</div>
";
        
        $__internal_3b11dd3f9f36abb36985b3019bb1428b4f989af63f3e4715db009639f6f5fbd6->leave($__internal_3b11dd3f9f36abb36985b3019bb1428b4f989af63f3e4715db009639f6f5fbd6_prof);

        
        $__internal_52f200087fd2141fb9df8a9b5a2f12e4eafc65177000901a238d3b73302f18b5->leave($__internal_52f200087fd2141fb9df8a9b5a2f12e4eafc65177000901a238d3b73302f18b5_prof);

    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b880143606fbe4f8b6b82c5c9155f567fc7a2b829b7f24f946ea7237e037a015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b880143606fbe4f8b6b82c5c9155f567fc7a2b829b7f24f946ea7237e037a015->enter($__internal_b880143606fbe4f8b6b82c5c9155f567fc7a2b829b7f24f946ea7237e037a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_56c3b6628f68fbe79e1cca958053707aa40a81e755e551abf59979db04e1b141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c3b6628f68fbe79e1cca958053707aa40a81e755e551abf59979db04e1b141->enter($__internal_56c3b6628f68fbe79e1cca958053707aa40a81e755e551abf59979db04e1b141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 138
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_56c3b6628f68fbe79e1cca958053707aa40a81e755e551abf59979db04e1b141->leave($__internal_56c3b6628f68fbe79e1cca958053707aa40a81e755e551abf59979db04e1b141_prof);

        
        $__internal_b880143606fbe4f8b6b82c5c9155f567fc7a2b829b7f24f946ea7237e037a015->leave($__internal_b880143606fbe4f8b6b82c5c9155f567fc7a2b829b7f24f946ea7237e037a015_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:helpUserManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 138,  190 => 137,  50 => 5,  41 => 4,  11 => 2,);
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
              <h3 style=\"text-align:center;\">User management help</h3>
            </div>
           
  </header>
 <section>
    <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">1. When you log in as the Librarian you have the following home page: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/homeAdmin.png\"><img src=\"images/UserMgnt/homeAdminmini.png\" alt=\"admin home page\"/></a></p>
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
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"Management > User Management\" to move to the place dedicated to the management of users:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/selectUserMgnt.png\"><img src=\"images/UserMgnt/selectUserMgntmini.png\" alt=\"help\"/></a></p>  
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to User Management space</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > User Management\" to get to the space reserved to the management of users.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>


  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Management > User Management\", you have the list of all the users (authorized or not)</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/homeUserMgnt.png\"><img src=\"images/UserMgnt/homeUserMgntmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Home page of user management</h5>
          <ul>
            <li>From page you can handle users of the library.</li>
            <li>You have on the left side the categories of users that we have. By selecting one category, you filter the users list to display only users of the selected category.</li>
            <li>We have two groups of users, who are displayed into two different tabs: authorized users and unauthorized users.</li>
            <li>Authorized users are actually those who have access to the library. This means they are registered and enabled by the librarian.</li>
            <li>Unauthorized users are those registered but not enabled. They cannot log in the application until they are enabled by the librarian</li>
            <li>You have noticed the button \"Add User\" through which the librarian can add a new user.</li>
            <li>You can also research a user from this interface.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. From the previous page, you can search a user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/searchUser.png\"><img src=\"images/UserMgnt/searchUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Research a user</h5>
          <ul>
            <li>From the previous page, you can search a user:</li>
            <li>Enter keywords corresponding to the name of the usser and click on \"search\"</li>
            <li>Details of the user are displayed if found and nothing is displayed otherwise.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. See user details and or enable/disable/delete a user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/DiableUser.png\"><img src=\"images/UserMgnt/DiableUsermini.png\" alt=\"user details\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Basic operations on a user</h5>
          <ul>
            <li>In addition to adding a user, other basic operations which can be performed on a user include: editing, enable, disable, or delete a user.</li>
            <li>Once you click or research a user, this one's details are displayed on the screen, with options to update, enable or disable, and delete the user.</li>
            <li>To carry out one of the previous operations, just click on the corresponding button.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">6. You can also add a new user:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/UserMgnt/AddUser.png\"><img src=\"images/UserMgnt/AddUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Adding a new user</h5>
          <ul>
            <li>Click on the button \"Add User\"</li>
            <li>Fill in the form which is displayed</li>
            <li>Don't forget to fill in the mandatory fields, otherwise, you will receive warnings</li>
            <li>Save the newly created user.</li>
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
{% endblock %}", ":pkflibrary/help:helpUserManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/helpUserManagement.html.twig");
    }
}
