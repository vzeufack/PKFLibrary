<?php

/* :pkflibrary/help:viewAndBorrow.html.twig */
class __TwigTemplate_74d36fb7141c12d938a788a95f06b73d431073858c34c193ef06fcd273b8c864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:viewAndBorrow.html.twig", 2);
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
        $__internal_500f0836dd2d7cd73f445085ecd912268c664db1adc6e6e923903752e9fa80cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500f0836dd2d7cd73f445085ecd912268c664db1adc6e6e923903752e9fa80cc->enter($__internal_500f0836dd2d7cd73f445085ecd912268c664db1adc6e6e923903752e9fa80cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:viewAndBorrow.html.twig"));

        $__internal_76621c803f6e727a079b0487a32e0aac1f4b86f9fe7c6f32f88283607fa1ded2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76621c803f6e727a079b0487a32e0aac1f4b86f9fe7c6f32f88283607fa1ded2->enter($__internal_76621c803f6e727a079b0487a32e0aac1f4b86f9fe7c6f32f88283607fa1ded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:viewAndBorrow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500f0836dd2d7cd73f445085ecd912268c664db1adc6e6e923903752e9fa80cc->leave($__internal_500f0836dd2d7cd73f445085ecd912268c664db1adc6e6e923903752e9fa80cc_prof);

        
        $__internal_76621c803f6e727a079b0487a32e0aac1f4b86f9fe7c6f32f88283607fa1ded2->leave($__internal_76621c803f6e727a079b0487a32e0aac1f4b86f9fe7c6f32f88283607fa1ded2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70fde66076bcf0da6556d27b0d588a844964c27cda7251605857b3a68053cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70fde66076bcf0da6556d27b0d588a844964c27cda7251605857b3a68053cdc->enter($__internal_f70fde66076bcf0da6556d27b0d588a844964c27cda7251605857b3a68053cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c19f51f94d7a596d9358683a62fbd559b1122de0003231a93883e635fe45ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c19f51f94d7a596d9358683a62fbd559b1122de0003231a93883e635fe45ebc->enter($__internal_7c19f51f94d7a596d9358683a62fbd559b1122de0003231a93883e635fe45ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">How to borrow from and return a book to the Library?</h3>
            </div>
           
  </header>
 <section>
     
   <div class=\"row\" style=\"margin-top:25px;\">
    
      <h4 style=\"font-family: ambleregular;color:green;\">1. Login to get to the home page:</h4>
       <hr style=\"border-color:#008B8B;\" />
\t    <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/login.png\"><img src=\"images/loginmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Log in: The entrance of the application</h5>
          <ul>
            <li>The first thing you will always have to do before any operation is to log in with the correct credentials.</li>
            <li>As you noticed, your account has to be enabled by the librerian for you to access the library. So in case of problems, please kindly contact the librarian.</li>
            <li>The picture the left show how the login page looks like. If you are not registered yet, click on the registration link in blue to trigger the registration process.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>

          </ul>
        </div>
      </div>
   </div>

   <div  class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. Home Page -  Select the book you are looking for: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">    
          <p><a href=\"images/homePage.png\"><img src=\"images/homePagemini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Browsing books: many options</h5>
          <ul>
            <li>First option: you can go through the library by browsing it page per pages</li>
            <li>Second option:on the left, you have a categorization of books in the library. If the book you are looking for belongs to a category that you know or if you want to see all the books that are is a given category, just click on the concerned category.</li>
            <li>Third option: Using the research input text field. If you don't want to randomly go through the library to check for the existence of the book you are looking for, and you get some information (name of the book, the author, etc..), just enter that information in the input text field and the library will be filtered to return the potentially requested book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>

          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. Book Details and Borrow Operation - click on the button \"Borrow\"</h4>
        <hr style=\"border-color:#008B8B;\" />
        <div>
          <div class=\"col-lg-6\">  
           <p><a href=\"images/borrow/borrow.png\"><img src=\"images/borrow/borrowmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">View details and the summary of a book and borrow it:</h5>
           <ul>
            <li>After locating the book you were looking for, your screen looks like the image on your left.</li>
            <li>You can get the summary of the book by clicking on the button \"Summary\"</li>
            <li>You can only borrow a book if it is available in the library. A book is available when there is on ore more copies present in the library.</li>
            <li>If a book is available, just click on the button \"Borrow\" to borrow it.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">4. Confirm the Borrow - Click on \"OK\" to confirm the Borrow:</h4>
       <hr style=\"border-color:#008B8B;\" />
       <div>
          <div class=\"col-lg-6\">  
            <p><a href=\"images/borrow/confirm_borrow.png\"><img src=\"images/borrow/confirm_borrowmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">Confirm a borrow</h5>
             <ul>
                <li>When you click on \"Borrow\", you have the image displayed on your left which invites you to confirm your borrow. You can whether confirm or decide to cancel it.</li>
                <li>To confirm the borrow, click on \"OK\"</li>
                <li>To cancel a borrow, click on \"Cancel\".</li>
                <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
            </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">5. Borrows Report - Check that the new borrow is added to your borrows report: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
          <div class=\"col-lg-6\">
            <p><a href=\"images/borrow/myBorrows.png\"><img src=\"images/borrow/myBorrowsmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">Check that after confirming your borrow, your borrow report is updated.</h5>
             <ul>
                <li>When you confirm a borrow operation, you have the image displayed on your left which shows the updated list of your borrows.</li>
                <li>Check that the new borrow is there.</li>
                <li>If you had clicked on \"Cancel\", you would have been taken to the list of books.</li>
                <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
            </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">6. Accessing a Borrowed Book - You cannot borrow the book again unless you returned it!</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
          <div class=\"col-lg-6\">
            <p><a href=\"images/borrow/borrowedBook.png\"><img src=\"images/borrow/borrowedBookmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">You cannot reborrow an unreturned book.</h5>
             <ul>
                <li>When you have requested and borrowed a book, you cannot borrow a new copy until you return the borrowed one.</li>
                <li>When you look at the details of a book that you have already borrowed, you find out that the \"Borrow\" button is in gray, pointing out that you cannot borrow it a that specific time.</li>
                <li>If you on \"Borrow\", nothing will happen.</li>
                <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
            </ul>
        </div>
      </div>  
   </div>

  </section>
   
</div>
";
        
        $__internal_7c19f51f94d7a596d9358683a62fbd559b1122de0003231a93883e635fe45ebc->leave($__internal_7c19f51f94d7a596d9358683a62fbd559b1122de0003231a93883e635fe45ebc_prof);

        
        $__internal_f70fde66076bcf0da6556d27b0d588a844964c27cda7251605857b3a68053cdc->leave($__internal_f70fde66076bcf0da6556d27b0d588a844964c27cda7251605857b3a68053cdc_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        $__internal_89e120343fc043043e3349039291cb3fff046f366c5e359a139d68419e9269fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e120343fc043043e3349039291cb3fff046f366c5e359a139d68419e9269fa->enter($__internal_89e120343fc043043e3349039291cb3fff046f366c5e359a139d68419e9269fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bb8654873611fbd5c49203b4f65fae9a20fa40da24bc8cceca4f984f59f3d968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8654873611fbd5c49203b4f65fae9a20fa40da24bc8cceca4f984f59f3d968->enter($__internal_bb8654873611fbd5c49203b4f65fae9a20fa40da24bc8cceca4f984f59f3d968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_bb8654873611fbd5c49203b4f65fae9a20fa40da24bc8cceca4f984f59f3d968->leave($__internal_bb8654873611fbd5c49203b4f65fae9a20fa40da24bc8cceca4f984f59f3d968_prof);

        
        $__internal_89e120343fc043043e3349039291cb3fff046f366c5e359a139d68419e9269fa->leave($__internal_89e120343fc043043e3349039291cb3fff046f366c5e359a139d68419e9269fa_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:viewAndBorrow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 140,  192 => 139,  50 => 5,  41 => 4,  11 => 2,);
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
              <h3 style=\"text-align:center;\">How to borrow from and return a book to the Library?</h3>
            </div>
           
  </header>
 <section>
     
   <div class=\"row\" style=\"margin-top:25px;\">
    
      <h4 style=\"font-family: ambleregular;color:green;\">1. Login to get to the home page:</h4>
       <hr style=\"border-color:#008B8B;\" />
\t    <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/login.png\"><img src=\"images/loginmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Log in: The entrance of the application</h5>
          <ul>
            <li>The first thing you will always have to do before any operation is to log in with the correct credentials.</li>
            <li>As you noticed, your account has to be enabled by the librerian for you to access the library. So in case of problems, please kindly contact the librarian.</li>
            <li>The picture the left show how the login page looks like. If you are not registered yet, click on the registration link in blue to trigger the registration process.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>

          </ul>
        </div>
      </div>
   </div>

   <div  class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. Home Page -  Select the book you are looking for: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">    
          <p><a href=\"images/homePage.png\"><img src=\"images/homePagemini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Browsing books: many options</h5>
          <ul>
            <li>First option: you can go through the library by browsing it page per pages</li>
            <li>Second option:on the left, you have a categorization of books in the library. If the book you are looking for belongs to a category that you know or if you want to see all the books that are is a given category, just click on the concerned category.</li>
            <li>Third option: Using the research input text field. If you don't want to randomly go through the library to check for the existence of the book you are looking for, and you get some information (name of the book, the author, etc..), just enter that information in the input text field and the library will be filtered to return the potentially requested book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>

          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. Book Details and Borrow Operation - click on the button \"Borrow\"</h4>
        <hr style=\"border-color:#008B8B;\" />
        <div>
          <div class=\"col-lg-6\">  
           <p><a href=\"images/borrow/borrow.png\"><img src=\"images/borrow/borrowmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">View details and the summary of a book and borrow it:</h5>
           <ul>
            <li>After locating the book you were looking for, your screen looks like the image on your left.</li>
            <li>You can get the summary of the book by clicking on the button \"Summary\"</li>
            <li>You can only borrow a book if it is available in the library. A book is available when there is on ore more copies present in the library.</li>
            <li>If a book is available, just click on the button \"Borrow\" to borrow it.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">4. Confirm the Borrow - Click on \"OK\" to confirm the Borrow:</h4>
       <hr style=\"border-color:#008B8B;\" />
       <div>
          <div class=\"col-lg-6\">  
            <p><a href=\"images/borrow/confirm_borrow.png\"><img src=\"images/borrow/confirm_borrowmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">Confirm a borrow</h5>
             <ul>
                <li>When you click on \"Borrow\", you have the image displayed on your left which invites you to confirm your borrow. You can whether confirm or decide to cancel it.</li>
                <li>To confirm the borrow, click on \"OK\"</li>
                <li>To cancel a borrow, click on \"Cancel\".</li>
                <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
            </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">5. Borrows Report - Check that the new borrow is added to your borrows report: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
          <div class=\"col-lg-6\">
            <p><a href=\"images/borrow/myBorrows.png\"><img src=\"images/borrow/myBorrowsmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">Check that after confirming your borrow, your borrow report is updated.</h5>
             <ul>
                <li>When you confirm a borrow operation, you have the image displayed on your left which shows the updated list of your borrows.</li>
                <li>Check that the new borrow is there.</li>
                <li>If you had clicked on \"Cancel\", you would have been taken to the list of books.</li>
                <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
            </ul>
        </div>
      </div>  
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">6. Accessing a Borrowed Book - You cannot borrow the book again unless you returned it!</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
          <div class=\"col-lg-6\">
            <p><a href=\"images/borrow/borrowedBook.png\"><img src=\"images/borrow/borrowedBookmini.png\" alt=\"help\"/></a></p>
          </div>
          <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
            <h5 style=\"color:#00008B;\">You cannot reborrow an unreturned book.</h5>
             <ul>
                <li>When you have requested and borrowed a book, you cannot borrow a new copy until you return the borrowed one.</li>
                <li>When you look at the details of a book that you have already borrowed, you find out that the \"Borrow\" button is in gray, pointing out that you cannot borrow it a that specific time.</li>
                <li>If you on \"Borrow\", nothing will happen.</li>
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
{% endblock %}", ":pkflibrary/help:viewAndBorrow.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/viewAndBorrow.html.twig");
    }
}
