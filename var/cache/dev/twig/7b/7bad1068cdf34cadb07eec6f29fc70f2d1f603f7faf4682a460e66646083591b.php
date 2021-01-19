<?php

/* :pkflibrary/help:helpBorrowManagement.html.twig */
class __TwigTemplate_febedc5ff058a98d65934d49dc763e67f40ea0f0696aa5550a08657ae7e7acd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:helpBorrowManagement.html.twig", 2);
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
        $__internal_11473e3d2eb1ca0b9febfa27f4b9936dd4263e6d7dd770f4fb0b58c01f19a7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11473e3d2eb1ca0b9febfa27f4b9936dd4263e6d7dd770f4fb0b58c01f19a7b9->enter($__internal_11473e3d2eb1ca0b9febfa27f4b9936dd4263e6d7dd770f4fb0b58c01f19a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpBorrowManagement.html.twig"));

        $__internal_ea77bf8b67e7d81757dc969f54d4d2245c576f4c21cbf4dd6376a41fa2cdd470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea77bf8b67e7d81757dc969f54d4d2245c576f4c21cbf4dd6376a41fa2cdd470->enter($__internal_ea77bf8b67e7d81757dc969f54d4d2245c576f4c21cbf4dd6376a41fa2cdd470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:helpBorrowManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11473e3d2eb1ca0b9febfa27f4b9936dd4263e6d7dd770f4fb0b58c01f19a7b9->leave($__internal_11473e3d2eb1ca0b9febfa27f4b9936dd4263e6d7dd770f4fb0b58c01f19a7b9_prof);

        
        $__internal_ea77bf8b67e7d81757dc969f54d4d2245c576f4c21cbf4dd6376a41fa2cdd470->leave($__internal_ea77bf8b67e7d81757dc969f54d4d2245c576f4c21cbf4dd6376a41fa2cdd470_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c408b5d79664746e0556325a0bd99df7fa9e8d1c7f1b956d5954a3322fe4b285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c408b5d79664746e0556325a0bd99df7fa9e8d1c7f1b956d5954a3322fe4b285->enter($__internal_c408b5d79664746e0556325a0bd99df7fa9e8d1c7f1b956d5954a3322fe4b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d44773cdeae33f6e5f2f54e0e8ed032cca92a9feb4827f03353d88f58311e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d44773cdeae33f6e5f2f54e0e8ed032cca92a9feb4827f03353d88f58311e0b->enter($__internal_1d44773cdeae33f6e5f2f54e0e8ed032cca92a9feb4827f03353d88f58311e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
           <p><a href=\"images/borrowMgnt/homeAdmin.png\"><img src=\"images/borrowMgnt/homeAdminmini.png\" alt=\"admin home page\"/></a></p>
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
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"Management > Borrow Management\" to move to the place dedicated to the management of borrows:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/borrowMgnt/selectBorrowMgnt.png\"><img src=\"images/borrowMgnt/selectBorrowMgntmini.png\" alt=\"borrow\"/></a></p> 
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to Borrow Management space</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Management > Borrow Management\", you have the list of all the borrows </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/borrowMgnt/borrowList.png\"><img src=\"images/borrowMgnt/borrowListmini.png\" alt=\"borrows list\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Get the list of all the borrows</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Details of each borrow are displayed in a row. You can see more details of a borrow, update its status or print it if needed.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>


  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. Get all the details of a borrow by clicking on \"Details\" on the corresponding row.</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/borrowDetails.png\"><img src=\"images/borrowMgnt/borrowDetailsmini.png\" alt=\"borrow details\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Details of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on \"Details\" to see details about a borrow.</li>
            <li>You can click on OK to close the pop up which displays the details.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. Click on \"Update\" to update the status of a given borrow:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/updateBorrowStatus.png\"><img src=\"images/borrowMgnt/updateBorrowStatusmini.png\" alt=\"update the status of a borrow\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Update the status of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on \"Update\" to get the window allowing you to perform the update.</li>
            <li>You can update the date of the borrow or set the date of the return of the book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">6. Cenerate a printable report of a borrow: click the pdf image: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/printedBorrowReport.png\"><img src=\"images/borrowMgnt/printedBorrowReportmini.png\" alt=\"printable pdf report.\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Print details of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on the pdf image at the right most of the row.</li>
            <li>A pdf file containing the details of the borrow is generated and displayed in your browser. You can just save it where ever you want or print it.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
    </div>

  </section>
   
</div>
";
        
        $__internal_1d44773cdeae33f6e5f2f54e0e8ed032cca92a9feb4827f03353d88f58311e0b->leave($__internal_1d44773cdeae33f6e5f2f54e0e8ed032cca92a9feb4827f03353d88f58311e0b_prof);

        
        $__internal_c408b5d79664746e0556325a0bd99df7fa9e8d1c7f1b956d5954a3322fe4b285->leave($__internal_c408b5d79664746e0556325a0bd99df7fa9e8d1c7f1b956d5954a3322fe4b285_prof);

    }

    // line 131
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fb60abae61cb25eee51ec5d4867fa1898298a4d119c315cc84680eb3fe7db5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb60abae61cb25eee51ec5d4867fa1898298a4d119c315cc84680eb3fe7db5bd->enter($__internal_fb60abae61cb25eee51ec5d4867fa1898298a4d119c315cc84680eb3fe7db5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cbecd6f590827db97a16e7578ff738606a26506adf807446a27ee57d52f9e8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbecd6f590827db97a16e7578ff738606a26506adf807446a27ee57d52f9e8a7->enter($__internal_cbecd6f590827db97a16e7578ff738606a26506adf807446a27ee57d52f9e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_cbecd6f590827db97a16e7578ff738606a26506adf807446a27ee57d52f9e8a7->leave($__internal_cbecd6f590827db97a16e7578ff738606a26506adf807446a27ee57d52f9e8a7_prof);

        
        $__internal_fb60abae61cb25eee51ec5d4867fa1898298a4d119c315cc84680eb3fe7db5bd->leave($__internal_fb60abae61cb25eee51ec5d4867fa1898298a4d119c315cc84680eb3fe7db5bd_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:helpBorrowManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 132,  184 => 131,  50 => 5,  41 => 4,  11 => 2,);
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
           <p><a href=\"images/borrowMgnt/homeAdmin.png\"><img src=\"images/borrowMgnt/homeAdminmini.png\" alt=\"admin home page\"/></a></p>
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
      <h4 style=\"font-family: ambleregular;color:green;\">2. Click on \"Management > Borrow Management\" to move to the place dedicated to the management of borrows:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/borrowMgnt/selectBorrowMgnt.png\"><img src=\"images/borrowMgnt/selectBorrowMgntmini.png\" alt=\"borrow\"/></a></p> 
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Access to Borrow Management space</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">3. When you click on \"Management > Borrow Management\", you have the list of all the borrows </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/borrowMgnt/borrowList.png\"><img src=\"images/borrowMgnt/borrowListmini.png\" alt=\"borrows list\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Get the list of all the borrows</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Details of each borrow are displayed in a row. You can see more details of a borrow, update its status or print it if needed.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>


  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">4. Get all the details of a borrow by clicking on \"Details\" on the corresponding row.</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/borrowDetails.png\"><img src=\"images/borrowMgnt/borrowDetailsmini.png\" alt=\"borrow details\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Details of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on \"Details\" to see details about a borrow.</li>
            <li>You can click on OK to close the pop up which displays the details.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">5. Click on \"Update\" to update the status of a given borrow:</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/updateBorrowStatus.png\"><img src=\"images/borrowMgnt/updateBorrowStatusmini.png\" alt=\"update the status of a borrow\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Update the status of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on \"Update\" to get the window allowing you to perform the update.</li>
            <li>You can update the date of the borrow or set the date of the return of the book.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
  </div>

  <div class=\"row\" style=\"margin-top:25px;\">  
      <h4 style=\"font-family: ambleregular;color:green;\">6. Cenerate a printable report of a borrow: click the pdf image: </h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
           <p><a href=\"images/borrowMgnt/printedBorrowReport.png\"><img src=\"images/borrowMgnt/printedBorrowReportmini.png\" alt=\"printable pdf report.\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Print details of a borrow</h5>
          <ul>
            <li>One connected as the librarian, cick on \"Management > Borrow Management\" to get to the space reserved to the management of borrows.</li>
            <li>Click on the pdf image at the right most of the row.</li>
            <li>A pdf file containing the details of the borrow is generated and displayed in your browser. You can just save it where ever you want or print it.</li>
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
{% endblock %}", ":pkflibrary/help:helpBorrowManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/helpBorrowManagement.html.twig");
    }
}
