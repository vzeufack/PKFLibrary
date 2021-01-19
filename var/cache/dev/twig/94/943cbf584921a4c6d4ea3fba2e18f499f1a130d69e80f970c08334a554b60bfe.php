<?php

/* pkflibrary/help/myAccount.html.twig */
class __TwigTemplate_351f801a8a04420ea7f756cecff4cebc75f90899bf0afc880fca0a7ab4b5fff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/help/myAccount.html.twig", 2);
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
        $__internal_c9423ffffa08bd7e0f1239a864a0317a7d576a08b6afc49b2e44f852d8a422cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9423ffffa08bd7e0f1239a864a0317a7d576a08b6afc49b2e44f852d8a422cc->enter($__internal_c9423ffffa08bd7e0f1239a864a0317a7d576a08b6afc49b2e44f852d8a422cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/myAccount.html.twig"));

        $__internal_24cf5a8bc514008c811db50b5c23eccafb54de9118334ddfa5fdaeb7b947af4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cf5a8bc514008c811db50b5c23eccafb54de9118334ddfa5fdaeb7b947af4a->enter($__internal_24cf5a8bc514008c811db50b5c23eccafb54de9118334ddfa5fdaeb7b947af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9423ffffa08bd7e0f1239a864a0317a7d576a08b6afc49b2e44f852d8a422cc->leave($__internal_c9423ffffa08bd7e0f1239a864a0317a7d576a08b6afc49b2e44f852d8a422cc_prof);

        
        $__internal_24cf5a8bc514008c811db50b5c23eccafb54de9118334ddfa5fdaeb7b947af4a->leave($__internal_24cf5a8bc514008c811db50b5c23eccafb54de9118334ddfa5fdaeb7b947af4a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfbdb0f75f75d10fcac644aae89f6a304ae7b7a0a99b202d978e2e7bba1fa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfbdb0f75f75d10fcac644aae89f6a304ae7b7a0a99b202d978e2e7bba1fa59->enter($__internal_ddfbdb0f75f75d10fcac644aae89f6a304ae7b7a0a99b202d978e2e7bba1fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9027b1c49c5108e7e9ed0224a005f9aa769affe2d2611efebf38c087557fbd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9027b1c49c5108e7e9ed0224a005f9aa769affe2d2611efebf38c087557fbd57->enter($__internal_9027b1c49c5108e7e9ed0224a005f9aa769affe2d2611efebf38c087557fbd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9027b1c49c5108e7e9ed0224a005f9aa769affe2d2611efebf38c087557fbd57->leave($__internal_9027b1c49c5108e7e9ed0224a005f9aa769affe2d2611efebf38c087557fbd57_prof);

        
        $__internal_ddfbdb0f75f75d10fcac644aae89f6a304ae7b7a0a99b202d978e2e7bba1fa59->leave($__internal_ddfbdb0f75f75d10fcac644aae89f6a304ae7b7a0a99b202d978e2e7bba1fa59_prof);

    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a7a505f4ae2a1b5e1ef81aea20e210eb6cc9909bee2d0763bed1046b5f2d97e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7a505f4ae2a1b5e1ef81aea20e210eb6cc9909bee2d0763bed1046b5f2d97e->enter($__internal_4a7a505f4ae2a1b5e1ef81aea20e210eb6cc9909bee2d0763bed1046b5f2d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a146bd3228e1e195e026c22b606fa5797aa07890387226739c08a5607c1b94ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a146bd3228e1e195e026c22b606fa5797aa07890387226739c08a5607c1b94ff->enter($__internal_a146bd3228e1e195e026c22b606fa5797aa07890387226739c08a5607c1b94ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 100
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_a146bd3228e1e195e026c22b606fa5797aa07890387226739c08a5607c1b94ff->leave($__internal_a146bd3228e1e195e026c22b606fa5797aa07890387226739c08a5607c1b94ff_prof);

        
        $__internal_4a7a505f4ae2a1b5e1ef81aea20e210eb6cc9909bee2d0763bed1046b5f2d97e->leave($__internal_4a7a505f4ae2a1b5e1ef81aea20e210eb6cc9909bee2d0763bed1046b5f2d97e_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/help/myAccount.html.twig";
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
{% endblock %}", "pkflibrary/help/myAccount.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\help\\myAccount.html.twig");
    }
}
