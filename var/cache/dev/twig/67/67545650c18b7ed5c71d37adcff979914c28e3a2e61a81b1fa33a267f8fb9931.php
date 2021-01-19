<?php

/* pkflibrary/book/statusUpdate.php */
class __TwigTemplate_6d52545b93dd99a77061b0ff6ea06604233be5003f966dfa2a5f06ae2e46571f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39f066027bb662f0acaa0732b1450b45cb7c8148c208e7d9315d76a74eb6d230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f066027bb662f0acaa0732b1450b45cb7c8148c208e7d9315d76a74eb6d230->enter($__internal_39f066027bb662f0acaa0732b1450b45cb7c8148c208e7d9315d76a74eb6d230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/statusUpdate.php"));

        $__internal_dd62078d4cb78c9919df795fc9f6d6fc778f1f74ed018b32bd69e0fc38b0152c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd62078d4cb78c9919df795fc9f6d6fc778f1f74ed018b32bd69e0fc38b0152c->enter($__internal_dd62078d4cb78c9919df795fc9f6d6fc778f1f74ed018b32bd69e0fc38b0152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/statusUpdate.php"));

        // line 1
        echo " <?php
\$servername = \"localhost\";
\$username = \"root\";
\$password = \"\";
\$dbname = \"pkflibrary\";

\$bookId =\$_POST[\"bookId\"];
\$username =\$_POST[\"username\"];
\$date =\$_POST[\"date\"];

// Create connection
\$conn = new mysqli(\$servername, \$username, \$password, \$dbname);
// Check connection
if (\$conn->connect_error) {
\techo \"<b>Connection Failed</b>\";
    die(\"Connection failed: \" . \$conn->connect_error);
}

\$userId = \"SELECT id FROM User WHERE username=\$username\"
\$sql = \"UPDATE book_user SET dueDate=\$date WHERE (bookId=\$bookId AND userId = \$userId )\";

if (\$conn->query(\$sql) === TRUE) {
    echo \"<b>Record updated successfully</b>\";
} else {
    echo \"Error updating record: \" . \$conn->error;
}

\$conn->close();
?> 
";
        
        $__internal_39f066027bb662f0acaa0732b1450b45cb7c8148c208e7d9315d76a74eb6d230->leave($__internal_39f066027bb662f0acaa0732b1450b45cb7c8148c208e7d9315d76a74eb6d230_prof);

        
        $__internal_dd62078d4cb78c9919df795fc9f6d6fc778f1f74ed018b32bd69e0fc38b0152c->leave($__internal_dd62078d4cb78c9919df795fc9f6d6fc778f1f74ed018b32bd69e0fc38b0152c_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/statusUpdate.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <?php
\$servername = \"localhost\";
\$username = \"root\";
\$password = \"\";
\$dbname = \"pkflibrary\";

\$bookId =\$_POST[\"bookId\"];
\$username =\$_POST[\"username\"];
\$date =\$_POST[\"date\"];

// Create connection
\$conn = new mysqli(\$servername, \$username, \$password, \$dbname);
// Check connection
if (\$conn->connect_error) {
\techo \"<b>Connection Failed</b>\";
    die(\"Connection failed: \" . \$conn->connect_error);
}

\$userId = \"SELECT id FROM User WHERE username=\$username\"
\$sql = \"UPDATE book_user SET dueDate=\$date WHERE (bookId=\$bookId AND userId = \$userId )\";

if (\$conn->query(\$sql) === TRUE) {
    echo \"<b>Record updated successfully</b>\";
} else {
    echo \"Error updating record: \" . \$conn->error;
}

\$conn->close();
?> 
", "pkflibrary/book/statusUpdate.php", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\statusUpdate.php");
    }
}
