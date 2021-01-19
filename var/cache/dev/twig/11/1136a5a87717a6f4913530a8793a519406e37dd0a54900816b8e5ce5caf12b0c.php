<?php

/* pkflibrary/help/helpBorrowManagement.html.twig */
class __TwigTemplate_212d11e0173be481548ab9b3e79a97e31f4ea8e20f28e5595d57fc716c015f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/help/helpBorrowManagement.html.twig", 2);
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
        $__internal_cf708c6d9a6ee215ebfa4bd9da1d91791f6873a7f516aee82460fd6d05de9983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf708c6d9a6ee215ebfa4bd9da1d91791f6873a7f516aee82460fd6d05de9983->enter($__internal_cf708c6d9a6ee215ebfa4bd9da1d91791f6873a7f516aee82460fd6d05de9983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/helpBorrowManagement.html.twig"));

        $__internal_8345f36b5f6a650ea9bf1e065539fc1b7f67dfa8494810a1fe940ee5d142a531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8345f36b5f6a650ea9bf1e065539fc1b7f67dfa8494810a1fe940ee5d142a531->enter($__internal_8345f36b5f6a650ea9bf1e065539fc1b7f67dfa8494810a1fe940ee5d142a531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/helpBorrowManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf708c6d9a6ee215ebfa4bd9da1d91791f6873a7f516aee82460fd6d05de9983->leave($__internal_cf708c6d9a6ee215ebfa4bd9da1d91791f6873a7f516aee82460fd6d05de9983_prof);

        
        $__internal_8345f36b5f6a650ea9bf1e065539fc1b7f67dfa8494810a1fe940ee5d142a531->leave($__internal_8345f36b5f6a650ea9bf1e065539fc1b7f67dfa8494810a1fe940ee5d142a531_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0868ebefc95ce58d79e49531f6c45d50efa3a732ed55f369f6d6b23310603d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0868ebefc95ce58d79e49531f6c45d50efa3a732ed55f369f6d6b23310603d5c->enter($__internal_0868ebefc95ce58d79e49531f6c45d50efa3a732ed55f369f6d6b23310603d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50118eeb2585e850c770782fab7003269a280bfecf93a766f2230961ef4131c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50118eeb2585e850c770782fab7003269a280bfecf93a766f2230961ef4131c6->enter($__internal_50118eeb2585e850c770782fab7003269a280bfecf93a766f2230961ef4131c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50118eeb2585e850c770782fab7003269a280bfecf93a766f2230961ef4131c6->leave($__internal_50118eeb2585e850c770782fab7003269a280bfecf93a766f2230961ef4131c6_prof);

        
        $__internal_0868ebefc95ce58d79e49531f6c45d50efa3a732ed55f369f6d6b23310603d5c->leave($__internal_0868ebefc95ce58d79e49531f6c45d50efa3a732ed55f369f6d6b23310603d5c_prof);

    }

    // line 131
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dea97bfd4cd1f88a4408fe965d557fb6f1d1963cdbd710c4e4befed3c3e3a00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea97bfd4cd1f88a4408fe965d557fb6f1d1963cdbd710c4e4befed3c3e3a00c->enter($__internal_dea97bfd4cd1f88a4408fe965d557fb6f1d1963cdbd710c4e4befed3c3e3a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4bdd13e34691775465a8ede490be7388a1027c94d429f8de93b31fa7045e5dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdd13e34691775465a8ede490be7388a1027c94d429f8de93b31fa7045e5dba->enter($__internal_4bdd13e34691775465a8ede490be7388a1027c94d429f8de93b31fa7045e5dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_4bdd13e34691775465a8ede490be7388a1027c94d429f8de93b31fa7045e5dba->leave($__internal_4bdd13e34691775465a8ede490be7388a1027c94d429f8de93b31fa7045e5dba_prof);

        
        $__internal_dea97bfd4cd1f88a4408fe965d557fb6f1d1963cdbd710c4e4befed3c3e3a00c->leave($__internal_dea97bfd4cd1f88a4408fe965d557fb6f1d1963cdbd710c4e4befed3c3e3a00c_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/help/helpBorrowManagement.html.twig";
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
{% endblock %}", "pkflibrary/help/helpBorrowManagement.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\help\\helpBorrowManagement.html.twig");
    }
}
