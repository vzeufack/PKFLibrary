<?php

/* :pkflibrary/help:myAccount.html.twig */
class __TwigTemplate_7909dec85180915e630ab8814719d789cde0d1f9e064d74a463a9c3c1cac0d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:myAccount.html.twig", 2);
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
        $__internal_3f99d0cd4b58187cc46d6da5464571c6b00ead76d0bcc3330549fca3933ccf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f99d0cd4b58187cc46d6da5464571c6b00ead76d0bcc3330549fca3933ccf7b->enter($__internal_3f99d0cd4b58187cc46d6da5464571c6b00ead76d0bcc3330549fca3933ccf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:myAccount.html.twig"));

        $__internal_b1dc20944953546a37a3520d11cc6e2561f454c71d24da07d08cffda9eb530d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dc20944953546a37a3520d11cc6e2561f454c71d24da07d08cffda9eb530d2->enter($__internal_b1dc20944953546a37a3520d11cc6e2561f454c71d24da07d08cffda9eb530d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f99d0cd4b58187cc46d6da5464571c6b00ead76d0bcc3330549fca3933ccf7b->leave($__internal_3f99d0cd4b58187cc46d6da5464571c6b00ead76d0bcc3330549fca3933ccf7b_prof);

        
        $__internal_b1dc20944953546a37a3520d11cc6e2561f454c71d24da07d08cffda9eb530d2->leave($__internal_b1dc20944953546a37a3520d11cc6e2561f454c71d24da07d08cffda9eb530d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2b0536585259a387704f427480d95bab4557a3838b9f2cd43a2127c499e363b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b0536585259a387704f427480d95bab4557a3838b9f2cd43a2127c499e363b->enter($__internal_f2b0536585259a387704f427480d95bab4557a3838b9f2cd43a2127c499e363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_216a9711d0398b4917d1e94c11ecc4fa8310ef51208f30d3bbd59969b9ca0f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216a9711d0398b4917d1e94c11ecc4fa8310ef51208f30d3bbd59969b9ca0f76->enter($__internal_216a9711d0398b4917d1e94c11ecc4fa8310ef51208f30d3bbd59969b9ca0f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">How to use \"My Account\" Menu?</h3>
            </div>
           
  </header>
 <section>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">1. You have the choice between editing your personal data or your borrow report: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/home_Account.png\"><img src=\"images/account/home_Accountmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to your personal space:</h5>
          <ul>
            <li>Your personal space include your personal data as well as a report of your activities in the library as far as book borrows are concerned.</li>
            <li>So in your personal space, you can have a look at the books that you borrowed.</li>
            <li>You can also edit your profile and update your personal data.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>


   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"My Personal Data\" to edit your profile. Click on \"Edit to modify your data.\" </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/UserDetails.png\"><img src=\"images/account/UserDetailsmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Edit your personal data:</h5>
          <ul>
            <li>When you click \"My Account > My Personal Data\", you have a screen similar to the one displayed on the left.</li>
            <li>You have some of your personal data which are displayed.</li>
            <li>You can click on the button \"Edit\" to edit your profile and see all your personal data</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>


  <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. Carry out the modifications and click on \"Modify\" </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/EditUser.png\"><img src=\"images/account/EditUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Update your personal data:</h5>
          <ul>
            <li>When you edit your personal data, you have a screen similar to the one displayed on the left.</li>
            <li>Update the fields which need to be updated.</li>
            <li>Click on \"Modify\" to save the changes and \"Cancel\" to cancel the process.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">4. See the list of books you have already borrowed - From \"My Account\", click on \"Borrow Report\":  </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/userBorrows.png\"><img src=\"images/account/userBorrowsmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Display the list of books you have already borrowed:</h5>
          <ul>
            <li>When you click \"My Account > Borrow Reports\", you have a screen similar to the one displayed on the left.</li>
            <li>You have the list of your borrows displayed.</li>
            <li>You can carry out some research using the search input text field.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  </section>
   
</div>
";
        
        $__internal_216a9711d0398b4917d1e94c11ecc4fa8310ef51208f30d3bbd59969b9ca0f76->leave($__internal_216a9711d0398b4917d1e94c11ecc4fa8310ef51208f30d3bbd59969b9ca0f76_prof);

        
        $__internal_f2b0536585259a387704f427480d95bab4557a3838b9f2cd43a2127c499e363b->leave($__internal_f2b0536585259a387704f427480d95bab4557a3838b9f2cd43a2127c499e363b_prof);

    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        $__internal_296f10a5b2ffe74cf530ca66f2a522440c5c812675c47f6a0126d3bf720ce029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296f10a5b2ffe74cf530ca66f2a522440c5c812675c47f6a0126d3bf720ce029->enter($__internal_296f10a5b2ffe74cf530ca66f2a522440c5c812675c47f6a0126d3bf720ce029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e94b8d2306946f8a1699fee898eab9fdd1a15bc2cfb0a87c8449b6f258791885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94b8d2306946f8a1699fee898eab9fdd1a15bc2cfb0a87c8449b6f258791885->enter($__internal_e94b8d2306946f8a1699fee898eab9fdd1a15bc2cfb0a87c8449b6f258791885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 100
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_e94b8d2306946f8a1699fee898eab9fdd1a15bc2cfb0a87c8449b6f258791885->leave($__internal_e94b8d2306946f8a1699fee898eab9fdd1a15bc2cfb0a87c8449b6f258791885_prof);

        
        $__internal_296f10a5b2ffe74cf530ca66f2a522440c5c812675c47f6a0126d3bf720ce029->leave($__internal_296f10a5b2ffe74cf530ca66f2a522440c5c812675c47f6a0126d3bf720ce029_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:myAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 100,  152 => 99,  50 => 5,  41 => 4,  11 => 2,);
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
              <h3 style=\"text-align:center;\">How to use \"My Account\" Menu?</h3>
            </div>
           
  </header>
 <section>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">1. You have the choice between editing your personal data or your borrow report: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/home_Account.png\"><img src=\"images/account/home_Accountmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to your personal space:</h5>
          <ul>
            <li>Your personal space include your personal data as well as a report of your activities in the library as far as book borrows are concerned.</li>
            <li>So in your personal space, you can have a look at the books that you borrowed.</li>
            <li>You can also edit your profile and update your personal data.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>


   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"My Personal Data\" to edit your profile. Click on \"Edit to modify your data.\" </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/UserDetails.png\"><img src=\"images/account/UserDetailsmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Edit your personal data:</h5>
          <ul>
            <li>When you click \"My Account > My Personal Data\", you have a screen similar to the one displayed on the left.</li>
            <li>You have some of your personal data which are displayed.</li>
            <li>You can click on the button \"Edit\" to edit your profile and see all your personal data</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>


  <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. Carry out the modifications and click on \"Modify\" </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/EditUser.png\"><img src=\"images/account/EditUsermini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Update your personal data:</h5>
          <ul>
            <li>When you edit your personal data, you have a screen similar to the one displayed on the left.</li>
            <li>Update the fields which need to be updated.</li>
            <li>Click on \"Modify\" to save the changes and \"Cancel\" to cancel the process.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">4. See the list of books you have already borrowed - From \"My Account\", click on \"Borrow Report\":  </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/account/userBorrows.png\"><img src=\"images/account/userBorrowsmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Display the list of books you have already borrowed:</h5>
          <ul>
            <li>When you click \"My Account > Borrow Reports\", you have a screen similar to the one displayed on the left.</li>
            <li>You have the list of your borrows displayed.</li>
            <li>You can carry out some research using the search input text field.</li>
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
{% endblock %}", ":pkflibrary/help:myAccount.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/myAccount.html.twig");
    }
}
