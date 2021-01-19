<?php

/* pkflibrary/help/searchBook.html.twig */
class __TwigTemplate_ffcd9a5c1ad9e0a35bb989c063b235f9f5c0943f6fb5ae9cd44e8d8d305e27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("pkflibrary/miscellanous.html.twig ", "pkflibrary/help/searchBook.html.twig", 2);
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
        $__internal_ef388df1db03f538f6a64f3cc7b7ef722fe072f74aa346dc1ae226dce3e40899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef388df1db03f538f6a64f3cc7b7ef722fe072f74aa346dc1ae226dce3e40899->enter($__internal_ef388df1db03f538f6a64f3cc7b7ef722fe072f74aa346dc1ae226dce3e40899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/searchBook.html.twig"));

        $__internal_d61d2d67a4d479378cb3c4a69ad670888038f40fe2335a0c645b0f56627c468c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61d2d67a4d479378cb3c4a69ad670888038f40fe2335a0c645b0f56627c468c->enter($__internal_d61d2d67a4d479378cb3c4a69ad670888038f40fe2335a0c645b0f56627c468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/help/searchBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef388df1db03f538f6a64f3cc7b7ef722fe072f74aa346dc1ae226dce3e40899->leave($__internal_ef388df1db03f538f6a64f3cc7b7ef722fe072f74aa346dc1ae226dce3e40899_prof);

        
        $__internal_d61d2d67a4d479378cb3c4a69ad670888038f40fe2335a0c645b0f56627c468c->leave($__internal_d61d2d67a4d479378cb3c4a69ad670888038f40fe2335a0c645b0f56627c468c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1025726ee04a248f77d5eb72cde8d5d4f0a87c8d1681504681b4e3957e3d3d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1025726ee04a248f77d5eb72cde8d5d4f0a87c8d1681504681b4e3957e3d3d5b->enter($__internal_1025726ee04a248f77d5eb72cde8d5d4f0a87c8d1681504681b4e3957e3d3d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f30ba51752b551bf9258de96c3a498bd1ca7dc2107ec43b140c196811e875d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30ba51752b551bf9258de96c3a498bd1ca7dc2107ec43b140c196811e875d41->enter($__internal_f30ba51752b551bf9258de96c3a498bd1ca7dc2107ec43b140c196811e875d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f30ba51752b551bf9258de96c3a498bd1ca7dc2107ec43b140c196811e875d41->leave($__internal_f30ba51752b551bf9258de96c3a498bd1ca7dc2107ec43b140c196811e875d41_prof);

        
        $__internal_1025726ee04a248f77d5eb72cde8d5d4f0a87c8d1681504681b4e3957e3d3d5b->leave($__internal_1025726ee04a248f77d5eb72cde8d5d4f0a87c8d1681504681b4e3957e3d3d5b_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_64374f097dc1c413266e8681b754e3164d5ce7f6526c7ec607f45ba4c6366ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64374f097dc1c413266e8681b754e3164d5ce7f6526c7ec607f45ba4c6366ddf->enter($__internal_64374f097dc1c413266e8681b754e3164d5ce7f6526c7ec607f45ba4c6366ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_173d3c5e76b321050200d9cb3ac7364438fdda4211686e331a9bac9566d0019a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173d3c5e76b321050200d9cb3ac7364438fdda4211686e331a9bac9566d0019a->enter($__internal_173d3c5e76b321050200d9cb3ac7364438fdda4211686e331a9bac9566d0019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_173d3c5e76b321050200d9cb3ac7364438fdda4211686e331a9bac9566d0019a->leave($__internal_173d3c5e76b321050200d9cb3ac7364438fdda4211686e331a9bac9566d0019a_prof);

        
        $__internal_64374f097dc1c413266e8681b754e3164d5ce7f6526c7ec607f45ba4c6366ddf->leave($__internal_64374f097dc1c413266e8681b754e3164d5ce7f6526c7ec607f45ba4c6366ddf_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/help/searchBook.html.twig";
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
{% endblock %}", "pkflibrary/help/searchBook.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\help\\searchBook.html.twig");
    }
}
