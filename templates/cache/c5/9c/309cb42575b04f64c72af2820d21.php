<?php

/* global.html */
class __TwigTemplate_c59c309cb42575b04f64c72af2820d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
\t
\t<head>
\t\t
\t\t<title>";
        // line 7
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["lib"])) { $_lib_ = $context["lib"]; } else { $_lib_ = null; }
        echo twig_escape_filter($this->env, $_lib_, "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["css"])) { $_css_ = $context["css"]; } else { $_css_ = null; }
        echo twig_escape_filter($this->env, $_css_, "html", null, true);
        echo "/global.css\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["lib"])) { $_lib_ = $context["lib"]; } else { $_lib_ = null; }
        echo twig_escape_filter($this->env, $_lib_, "html", null, true);
        echo "/jive/jive.css\" type=\"text/css\" />
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["lib"])) { $_lib_ = $context["lib"]; } else { $_lib_ = null; }
        echo twig_escape_filter($this->env, $_lib_, "html", null, true);
        echo "/modernizr/modernizr.js\"> </script>
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        if (isset($context["lib"])) { $_lib_ = $context["lib"]; } else { $_lib_ = null; }
        echo twig_escape_filter($this->env, $_lib_, "html", null, true);
        echo "/jive/jquery.1.7.1.min.js\"> </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        if (isset($context["lib"])) { $_lib_ = $context["lib"]; } else { $_lib_ = null; }
        echo twig_escape_filter($this->env, $_lib_, "html", null, true);
        echo "/jive/jive.min.js\"> </script>
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        echo twig_escape_filter($this->env, $_js_, "html", null, true);
        echo "/example.js\"> </script>
\t\t
\t</head>

\t<body>
\t\t
\t\t<div id=\"container\" class=\"container\">
\t\t\t
\t\t\t";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "\t\t\t
\t\t\t";
        // line 39
        $this->displayBlock('nav', $context, $blocks);
        // line 54
        echo " \t
\t\t\t<div id=\"route-container\">
\t\t\t";
        // line 56
        if (isset($context["route_template"])) { $_route_template_ = $context["route_template"]; } else { $_route_template_ = null; }
        if ($_route_template_) {
            // line 57
            echo "\t\t\t\t";
            if (isset($context["route_template"])) { $_route_template_ = $context["route_template"]; } else { $_route_template_ = null; }
            $template = $this->env->resolveTemplate($_route_template_);
            $template->display($context);
            // line 58
            echo "\t\t\t";
        }
        // line 59
        echo "\t\t\t</div>
\t\t\t
\t\t\t";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "\t\t
\t\t</div>

\t</body>
\t
</html>";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t<div id=\"header\">
\t\t\t\t
\t\t\t\t<h1>
\t\t\t\t\t<span id=\"logo\">gus</span>
\t\t\t\t\t<a id=\"kickstarter-btn\" class=\"btn btn-success\">
\t\t\t\t\tthe web app kickstarter
\t\t\t\t\t</a>
\t\t\t\t</h1>
\t\t\t\t
\t\t\t</div>
\t\t\t";
    }

    // line 39
    public function block_nav($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t<div class=\"navbar navbar-inverse\">
\t\t\t\t
\t\t\t\t<div class=\"navbar-inner\">
\t
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 45
        if (isset($context["global"])) { $_global_ = $context["global"]; } else { $_global_ = null; }
        echo twig_escape_filter($this->env, $_global_, "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 47
        if (isset($context["global"])) { $_global_ = $context["global"]; } else { $_global_ = null; }
        echo twig_escape_filter($this->env, $_global_, "html", null, true);
        echo "/example\">Routing Example</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "\t\t\t<div id=\"footer\">
\t\t\t\t<p>Hey, I'm a footer. Yolo!</p> \t
\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "global.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  161 => 61,  149 => 47,  143 => 45,  136 => 40,  133 => 39,  119 => 27,  116 => 26,  107 => 66,  105 => 61,  101 => 59,  98 => 58,  93 => 57,  90 => 56,  86 => 54,  84 => 39,  81 => 38,  79 => 26,  67 => 18,  61 => 16,  56 => 15,  50 => 13,  44 => 11,  39 => 10,  34 => 9,  28 => 7,  20 => 1,);
    }
}
