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
        if (isset($context["global"])) { $_global_ = $context["global"]; } else { $_global_ = null; }
        echo twig_escape_filter($this->env, $_global_, "html", null, true);
        echo "/css/global.css\" type=\"text/css\" />
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
\t</head>

\t<body>
\t\t
\t\t<div id=\"container\" class=\"container\">
\t\t\t
\t\t\t";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "\t\t\t
\t\t\t";
        // line 37
        $this->displayBlock('nav', $context, $blocks);
        // line 52
        echo " \t
\t\t\t<div id=\"route-container\">
\t\t\t";
        // line 54
        if (isset($context["route_template"])) { $_route_template_ = $context["route_template"]; } else { $_route_template_ = null; }
        if ($_route_template_) {
            // line 55
            echo "\t\t\t\t";
            if (isset($context["route_template"])) { $_route_template_ = $context["route_template"]; } else { $_route_template_ = null; }
            $template = $this->env->resolveTemplate($_route_template_);
            $template->display($context);
            // line 56
            echo "\t\t\t";
        }
        // line 57
        echo "\t\t\t</div>
\t\t\t
\t\t\t";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "\t\t
\t\t</div>

\t</body>
\t
</html>";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t<div id=\"header\">
\t\t\t\t
\t\t\t\t<h1>
\t\t\t\t\t<span id=\"logo\">gus</span>
\t\t\t\t\t<a class=\"btn btn-success \" onclick=\"\$j.msg({content:'It even has JiveJS support!',type:'success'})\">
\t\t\t\t\tthe web app kickstarter
\t\t\t\t\t</a>
\t\t\t\t</h1>
\t\t\t\t
\t\t\t</div>
\t\t\t";
    }

    // line 37
    public function block_nav($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t<div class=\"navbar navbar-inverse\">
\t\t\t\t
\t\t\t\t<div class=\"navbar-inner\">
\t
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 43
        if (isset($context["global"])) { $_global_ = $context["global"]; } else { $_global_ = null; }
        echo twig_escape_filter($this->env, $_global_, "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 45
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

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
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
        return array (  158 => 60,  155 => 59,  143 => 45,  137 => 43,  130 => 38,  127 => 37,  113 => 25,  110 => 24,  101 => 64,  99 => 59,  95 => 57,  92 => 56,  87 => 55,  84 => 54,  80 => 52,  78 => 37,  75 => 36,  73 => 24,  61 => 16,  56 => 15,  50 => 13,  44 => 11,  39 => 10,  34 => 9,  28 => 7,  20 => 1,);
    }
}
