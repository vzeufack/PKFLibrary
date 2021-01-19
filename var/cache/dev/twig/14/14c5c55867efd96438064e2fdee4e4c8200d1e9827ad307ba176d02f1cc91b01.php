<?php

/* :pkflibrary/help:searchBook.html.twig */
class __TwigTemplate_e24f8e2cccd126b67301ae7db55973de5bd7125c9eb4129ee4d20f2358e12e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", ":pkflibrary/help:searchBook.html.twig", 2);
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
        $__internal_956895100f5f20680e18c3b083d0306975c5dd9f755451242988ed10e48883c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956895100f5f20680e18c3b083d0306975c5dd9f755451242988ed10e48883c4->enter($__internal_956895100f5f20680e18c3b083d0306975c5dd9f755451242988ed10e48883c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:searchBook.html.twig"));

        $__internal_d945b8c99a385171e6e34a1916831a7335098e6d955ac4d0a5b2752f21dc0ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d945b8c99a385171e6e34a1916831a7335098e6d955ac4d0a5b2752f21dc0ea9->enter($__internal_d945b8c99a385171e6e34a1916831a7335098e6d955ac4d0a5b2752f21dc0ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/help:searchBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956895100f5f20680e18c3b083d0306975c5dd9f755451242988ed10e48883c4->leave($__internal_956895100f5f20680e18c3b083d0306975c5dd9f755451242988ed10e48883c4_prof);

        
        $__internal_d945b8c99a385171e6e34a1916831a7335098e6d955ac4d0a5b2752f21dc0ea9->leave($__internal_d945b8c99a385171e6e34a1916831a7335098e6d955ac4d0a5b2752f21dc0ea9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_71931b30a05c0adde7fc6204f501f11bb34326b07d5c9df00e7167b90b0c7d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71931b30a05c0adde7fc6204f501f11bb34326b07d5c9df00e7167b90b0c7d1d->enter($__internal_71931b30a05c0adde7fc6204f501f11bb34326b07d5c9df00e7167b90b0c7d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75c0739e4f27ee6c734fd2d29b21ae4452e8bd2979b490362545f8bc7e2ac573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c0739e4f27ee6c734fd2d29b21ae4452e8bd2979b490362545f8bc7e2ac573->enter($__internal_75c0739e4f27ee6c734fd2d29b21ae4452e8bd2979b490362545f8bc7e2ac573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Page Content -->
 <div class=\"container\">

  <header style=\"font-family: ambleregular;color:#00008B;\">
            <div id=\"moi\">
              <h3 style=\"text-align:center;\">How to search a book from the Library?</h3>
            </div>
           
  </header>
 <section>


   <div class=\"row\" style=\"margin-top:25px;\">
    
      <h4 style=\"font-family: ambleregular;color:green;\">1. From the home page and many other pages, there is a search option</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/homePage.png\"><img src=\"images/search/homePagemini.png\" alt=\"search\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Search a book by keywords</h5>
          <ul>
            <li>From many interfaces of the software, you have the possibility to research a book by key words.</li>
            <li>Everytime you see the research option, you can search a book from there.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. You can type a any keyword or a part of a keyword to search a book</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/Keyword.png\"><img src=\"images/search/Keywordmini.png\" alt=\"Search keyword\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Enter keywords to search a book:</h5>
          <ul>
            <li>From many interfaces of the software, you have the possibility to research a book by key words.</li>
            <li>Everytime you see the research option, you can search a book from there.</li>
            <li>Enter keywords, which can be related to the book title, the book authors or the editor and then click on \"Search\".</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. If the book is found it is displayed else nothing will be displayed</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/BookFound.png\"><img src=\"images/search/BookFoundmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Results of the research</h5>
          <ul>
            <li>If books matching the keywords are found, they are displayed.</li>
            <li>If there is no book matching the searching criteria, nothing will be displayed</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  </section>
   
</div>
";
        
        $__internal_75c0739e4f27ee6c734fd2d29b21ae4452e8bd2979b490362545f8bc7e2ac573->leave($__internal_75c0739e4f27ee6c734fd2d29b21ae4452e8bd2979b490362545f8bc7e2ac573_prof);

        
        $__internal_71931b30a05c0adde7fc6204f501f11bb34326b07d5c9df00e7167b90b0c7d1d->leave($__internal_71931b30a05c0adde7fc6204f501f11bb34326b07d5c9df00e7167b90b0c7d1d_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_625071eeef872ff91327810fbf8c78a271aa223c1231404f5d1d6c3cdfae3887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625071eeef872ff91327810fbf8c78a271aa223c1231404f5d1d6c3cdfae3887->enter($__internal_625071eeef872ff91327810fbf8c78a271aa223c1231404f5d1d6c3cdfae3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_26a8fc443a89737810903f1a8c3d70d53f39ef7163600ce10f8af8ece6e0d39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a8fc443a89737810903f1a8c3d70d53f39ef7163600ce10f8af8ece6e0d39f->enter($__internal_26a8fc443a89737810903f1a8c3d70d53f39ef7163600ce10f8af8ece6e0d39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_26a8fc443a89737810903f1a8c3d70d53f39ef7163600ce10f8af8ece6e0d39f->leave($__internal_26a8fc443a89737810903f1a8c3d70d53f39ef7163600ce10f8af8ece6e0d39f_prof);

        
        $__internal_625071eeef872ff91327810fbf8c78a271aa223c1231404f5d1d6c3cdfae3887->leave($__internal_625071eeef872ff91327810fbf8c78a271aa223c1231404f5d1d6c3cdfae3887_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/help:searchBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 79,  131 => 78,  50 => 5,  41 => 4,  11 => 2,);
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
              <h3 style=\"text-align:center;\">How to search a book from the Library?</h3>
            </div>
           
  </header>
 <section>


   <div class=\"row\" style=\"margin-top:25px;\">
    
      <h4 style=\"font-family: ambleregular;color:green;\">1. From the home page and many other pages, there is a search option</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/homePage.png\"><img src=\"images/search/homePagemini.png\" alt=\"search\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Search a book by keywords</h5>
          <ul>
            <li>From many interfaces of the software, you have the possibility to research a book by key words.</li>
            <li>Everytime you see the research option, you can search a book from there.</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

   <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">2. You can type a any keyword or a part of a keyword to search a book</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/Keyword.png\"><img src=\"images/search/Keywordmini.png\" alt=\"Search keyword\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Enter keywords to search a book:</h5>
          <ul>
            <li>From many interfaces of the software, you have the possibility to research a book by key words.</li>
            <li>Everytime you see the research option, you can search a book from there.</li>
            <li>Enter keywords, which can be related to the book title, the book authors or the editor and then click on \"Search\".</li>
            <li>If you have difficulties to see the picture, click on it and you will have a larger display.</li>
          </ul>
        </div>
      </div>
   </div>

  <div class=\"row\" style=\"margin-top:25px;\">
      <h4 style=\"font-family: ambleregular;color:green;\">3. If the book is found it is displayed else nothing will be displayed</h4>
       <hr style=\"border-color:#008B8B;\" />
      <div>
        <div class=\"col-lg-6\">
          <p><a href=\"images/search/BookFound.png\"><img src=\"images/search/BookFoundmini.png\" alt=\"help\"/></a></p>
        </div>
        <div class=\"col-lg-6\" style=\"text-align: justify; background-color: #DCDCDC;font-family: ambleregular;\">
          <h5 style=\"color:#00008B;\">Results of the research</h5>
          <ul>
            <li>If books matching the keywords are found, they are displayed.</li>
            <li>If there is no book matching the searching criteria, nothing will be displayed</li>
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
{% endblock %}", ":pkflibrary/help:searchBook.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/help/searchBook.html.twig");
    }
}
