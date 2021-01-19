<?php

/* pkflibrary/help/viewAndBorrow.html.twig */
class __TwigTemplate_45cfd39a876e391e653214fc8878c4f06940b323e1d5be2f0911a9494a4ef55c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/help/viewAndBorrow.html.twig", 2);
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
        $__internal_9451ffaf1bf6c010725bbecfec1f4cb258f45753e47cacfd5a54d35c84c2fec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9451ffaf1bf6c010725bbecfec1f4cb258f45753e47cacfd5a54d35c84c2fec8->enter($__internal_9451ffaf1bf6c010725bbecfec1f4cb258f45753e47cacfd5a54d35c84c2fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/viewAndBorrow.html.twig"));

        $__internal_1a1ed873ed04d44ba9b5f134d9ed7305c3f4a84a2148a708422d8481bf38dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1ed873ed04d44ba9b5f134d9ed7305c3f4a84a2148a708422d8481bf38dd4f->enter($__internal_1a1ed873ed04d44ba9b5f134d9ed7305c3f4a84a2148a708422d8481bf38dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/viewAndBorrow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9451ffaf1bf6c010725bbecfec1f4cb258f45753e47cacfd5a54d35c84c2fec8->leave($__internal_9451ffaf1bf6c010725bbecfec1f4cb258f45753e47cacfd5a54d35c84c2fec8_prof);

        
        $__internal_1a1ed873ed04d44ba9b5f134d9ed7305c3f4a84a2148a708422d8481bf38dd4f->leave($__internal_1a1ed873ed04d44ba9b5f134d9ed7305c3f4a84a2148a708422d8481bf38dd4f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee789dde12d2058f56371ed81ac3839a1c387751fe095097e97f0510f97b9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee789dde12d2058f56371ed81ac3839a1c387751fe095097e97f0510f97b9e8->enter($__internal_9ee789dde12d2058f56371ed81ac3839a1c387751fe095097e97f0510f97b9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e0be6a143ceea10a0d8823230738122b4029bbd8a0c617cbfd4720a68c11f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0be6a143ceea10a0d8823230738122b4029bbd8a0c617cbfd4720a68c11f30->enter($__internal_8e0be6a143ceea10a0d8823230738122b4029bbd8a0c617cbfd4720a68c11f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e0be6a143ceea10a0d8823230738122b4029bbd8a0c617cbfd4720a68c11f30->leave($__internal_8e0be6a143ceea10a0d8823230738122b4029bbd8a0c617cbfd4720a68c11f30_prof);

        
        $__internal_9ee789dde12d2058f56371ed81ac3839a1c387751fe095097e97f0510f97b9e8->leave($__internal_9ee789dde12d2058f56371ed81ac3839a1c387751fe095097e97f0510f97b9e8_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c53a9a9aea26e334ce8c31a9e05546904633979de89865dc42b60cc719a479f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53a9a9aea26e334ce8c31a9e05546904633979de89865dc42b60cc719a479f3->enter($__internal_c53a9a9aea26e334ce8c31a9e05546904633979de89865dc42b60cc719a479f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_72833d264c537599493a4fa0a0a54585f411311cc533496738ab7a4699152d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72833d264c537599493a4fa0a0a54585f411311cc533496738ab7a4699152d9a->enter($__internal_72833d264c537599493a4fa0a0a54585f411311cc533496738ab7a4699152d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_72833d264c537599493a4fa0a0a54585f411311cc533496738ab7a4699152d9a->leave($__internal_72833d264c537599493a4fa0a0a54585f411311cc533496738ab7a4699152d9a_prof);

        
        $__internal_c53a9a9aea26e334ce8c31a9e05546904633979de89865dc42b60cc719a479f3->leave($__internal_c53a9a9aea26e334ce8c31a9e05546904633979de89865dc42b60cc719a479f3_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/help/viewAndBorrow.html.twig";
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
{% endblock %}", "pkflibrary/help/viewAndBorrow.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\help\\viewAndBorrow.html.twig");
    }
}
