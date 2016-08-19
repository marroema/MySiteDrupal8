<?php

/* themes/citrix/page.html.twig */
class __TwigTemplate_c9aee0192474987b5b88b71bd46a85f1fcf634140da60d49995322e96195ab5e extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head> 
\t<meta charset=\"utf-8\"> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
\t<meta name=\"description\" content=\"Creative One Page Parallax Template\">
\t<meta name=\"keywords\" content=\"Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio\" /> 
\t<meta name=\"author\" content=\"\"> 
\t<title>HIMU - OnePage HTML Parallax template</title> 
\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"css/prettyPhoto.css\" rel=\"stylesheet\"> 
\t<link href=\"css/font-awesome.min.css\" rel=\"stylesheet\"> 
\t<link href=\"css/animate.css\" rel=\"stylesheet\"> 
\t<link href=\"css/main.css\" rel=\"stylesheet\">
\t<link href=\"css/responsive.css\" rel=\"stylesheet\"> 
\t<!--[if lt IE 9]> <script src=\"js/html5shiv.js\"></script> 
\t<script src=\"js/respond.min.js\"></script> <![endif]--> 
\t<link rel=\"shortcut icon\" href=\"images/ico/favicon.png\"> 
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\"> 
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\"> 
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\"> 
\t<link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->
<body>
\t<div class=\"preloader\">
\t\t<div class=\"preloder-wrap\">
\t\t\t<div class=\"preloder-inner\"> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div> 
\t\t\t\t<div class=\"ball\"></div>
\t\t\t</div>
\t\t</div>
\t</div><!--/.preloader-->
\t";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "myheader", array()), "html", null, true));
        echo "
\t<header id=\"navigation\"> 
\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\"> 
\t\t\t<div class=\"container\"> 
\t\t\t\t<div class=\"navbar-header\"> 
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> 
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> 
\t\t\t\t\t</button> 
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\"><h1><img src=\"images/logo.png\" alt=\"logo\"></h1></a> 
\t\t\t\t</div> 
\t\t\t\t<div class=\"collapse navbar-collapse\"> 
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\"> 
\t\t\t\t\t\t<li class=\"scroll active\"><a href=\"#navigation\">Home</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#about-us\">About Us</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#services\">Services</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#our-team\">Our Team</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#clients\">Clients</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#blog\">Blog</a></li> 
\t\t\t\t\t\t<li class=\"scroll\"><a href=\"#contact\">Contact</a></li> 
\t\t\t\t\t</ul> 
\t\t\t\t</div> 
\t\t\t</div> 
\t\t</div><!--/navbar--> 
\t</header> <!--/#navigation--> 
";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t<section id=\"home\">
\t";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home", array()), "html", null, true));
        echo "
\t\t<div class=\"home-pattern\"></div>
\t\t<div id=\"main-carousel\" class=\"carousel slide\" data-ride=\"carousel\"> 
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#main-carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#main-carousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#main-carousel\" data-slide-to=\"2\"></li>
\t\t\t</ol><!--/.carousel-indicators--> 
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\" style=\"background-image: url(images/slider/slide3.jpg)\"> 
\t\t\t\t\t<div class=\"carousel-caption\"> 
\t\t\t\t\t\t<div> 
\t\t\t\t\t\t\t<h2 class=\"heading animated bounceInDown\">'Himu' Onepage HTML Template</h2> 
\t\t\t\t\t\t\t<p class=\"animated bounceInUp\">Fully Professional one page template</p> 
\t\t\t\t\t\t\t<a class=\"btn btn-default slider-btn animated fadeIn\" href=\"#\">Get Started</a> 
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<div class=\"item\" style=\"background-image: url(images/slider/slide2.jpg)\"> 
\t\t\t\t\t<div class=\"carousel-caption\"> <div> 
\t\t\t\t\t\t<h2 class=\"heading animated bounceInDown\">Get All in Onepage</h2> 
\t\t\t\t\t\t<p class=\"animated bounceInUp\">Everything is outstanding </p> <a class=\"btn btn-default slider-btn animated fadeIn\" href=\"#\">Get Started</a> 
\t\t\t\t\t</div> 
\t\t\t\t</div> 
\t\t\t</div> 
\t\t\t<div class=\"item\" style=\"background-image: url(images/slider/slide1.jpg)\"> 
\t\t\t\t<div class=\"carousel-caption\"> 
\t\t\t\t\t<div> 
\t\t\t\t\t\t<h2 class=\"heading animated bounceInRight\">Fully Responsive Template</h2> 
\t\t\t\t\t\t<p class=\"animated bounceInLeft\">100% Responsive HTML template</p> 
\t\t\t\t\t\t<a class=\"btn btn-default slider-btn animated bounceInUp\" href=\"#\">Get Started</a> 
\t\t\t\t\t</div> 
\t\t\t\t</div> 
\t\t\t</div>
\t\t</div><!--/.carousel-inner-->

\t\t<a class=\"carousel-left member-carousel-control hidden-xs\" href=\"#main-carousel\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
\t\t<a class=\"carousel-right member-carousel-control hidden-xs\" href=\"#main-carousel\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
\t</div> 

</section><!--/#home-->

<section id=\"about-us\">
";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "about", array()), "html", null, true));
        echo "
\t<div class=\"container\">
\t\t<div class=\"text-center\">
\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t<h2 class=\"title-one\">Why With Us?</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"about-us\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h3>Why with us?</h3>
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#about\" data-toggle=\"tab\"><i class=\"fa fa-chain-broken\"></i> About</a></li>
\t\t\t\t\t\t<li><a href=\"#mission\" data-toggle=\"tab\"><i class=\"fa fa-th-large\"></i> Mission</a></li>
\t\t\t\t\t\t<li><a href=\"#community\" data-toggle=\"tab\"><i class=\"fa fa-users\"></i> Community</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"about\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<img class=\"pull-left media-object\" src=\"images/about-us/about.jpg\" alt=\"about us\"> 
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"mission\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<img class=\"pull-left media-object\" src=\"images/about-us/mission.jpg\" alt=\"Mission\"> 
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"community\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<img class=\"pull-left media-object\" src=\"images/about-us/community.jpg\" alt=\"Community\"> 
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h3>Our Skills</h3>
\t\t\t\t\t<div class=\"skill-bar\">
\t\t\t\t\t\t<div class=\"skillbar clearfix \" data-percent=\"90%\">
\t\t\t\t\t\t\t<div class=\"skillbar-title\">
\t\t\t\t\t\t\t\t<span>HTML5 &amp; CSS3</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"skillbar-bar\"></div>
\t\t\t\t\t\t\t<div class=\"skill-bar-percent\">90%</div>
\t\t\t\t\t\t</div> <!-- End Skill Bar -->
\t\t\t\t\t\t<div class=\"skillbar clearfix\" data-percent=\"85%\">
\t\t\t\t\t\t\t<div class=\"skillbar-title\"><span>UI Design</span></div>
\t\t\t\t\t\t\t<div class=\"skillbar-bar\"></div>
\t\t\t\t\t\t\t<div class=\"skill-bar-percent\">85%</div>
\t\t\t\t\t\t</div> <!-- End Skill Bar -->
\t\t\t\t\t\t<div class=\"skillbar clearfix \" data-percent=\"70%\">
\t\t\t\t\t\t\t<div class=\"skillbar-title\"><span>jQuery</span></div>
\t\t\t\t\t\t\t<div class=\"skillbar-bar\"></div>
\t\t\t\t\t\t\t<div class=\"skill-bar-percent\">70%</div>
\t\t\t\t\t\t</div> <!-- End Skill Bar -->
\t\t\t\t\t\t<div class=\"skillbar clearfix \" data-percent=\"60%\">
\t\t\t\t\t\t\t<div class=\"skillbar-title\"><span>PHP</span></div>
\t\t\t\t\t\t\t<div class=\"skillbar-bar\"></div>
\t\t\t\t\t\t\t<div class=\"skill-bar-percent\">60%</div>
\t\t\t\t\t\t</div> <!-- End Skill Bar -->
\t\t\t\t\t\t<div class=\"skillbar clearfix \" data-percent=\"75%\">
\t\t\t\t\t\t\t<div class=\"skillbar-title\"><span>Wordpress</span></div>
\t\t\t\t\t\t\t<div class=\"skillbar-bar\"></div>
\t\t\t\t\t\t\t<div class=\"skill-bar-percent\">75%</div>
\t\t\t\t\t\t</div> <!-- End Skill Bar --></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/#about-us-->

\t<section id=\"services\" class=\"parallax-section\">
\t";
        // line 189
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()), "html", null, true));
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t<h2 class=\"title-one\">Services</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"our-service\">
\t\t\t\t\t\t<div class=\"services row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-service\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t<h2>Modern Design</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-service\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-html5\"></i>
\t\t\t\t\t\t\t\t\t<h2>Web Development</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-service\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users\"></i>
\t\t\t\t\t\t\t\t\t<h2>Online Marketing</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section><!--/#service-->

\t\t<section id=\"our-team\">
\t\t";
        // line 229
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "team", array()), "html", null, true));
        echo "
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t<h2 class=\"title-one\">Meet The Team</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"team-carousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t\t<a class=\"member-left\" href=\"#team-carousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
\t\t\t\t\t<a class=\"member-right\" href=\"#team-carousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
\t\t\t\t\t<div class=\"carousel-inner team-members\">
\t\t\t\t\t\t<div class=\"row item active\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member1.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>William Hurt</h4>
\t\t\t\t\t\t\t\t\t<h5>Sr. Web Developer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member2.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>Alekjandra Jony</h4>
\t\t\t\t\t\t\t\t\t<h5>Creative Designer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member3.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>Paul Johnson</h4>
\t\t\t\t\t\t\t\t\t<h5>Skilled Programmer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member4.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>John Richerds</h4>
\t\t\t\t\t\t\t\t\t<h5>Marketing Officer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row item\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member1.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>William Hurt</h4>
\t\t\t\t\t\t\t\t\t<h5>Sr. Web Developer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member3.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>Paul Johnson</h4>
\t\t\t\t\t\t\t\t\t<h5>Skilled Programmer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member2.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>Alekjandra Jony</h4>
\t\t\t\t\t\t\t\t\t<h5>Creative Designer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"single-member\">
\t\t\t\t\t\t\t\t\t<img src=\"images/our-team/member4.jpg\" alt=\"team member\" />
\t\t\t\t\t\t\t\t\t<h4>John Richerds</h4>
\t\t\t\t\t\t\t\t\t<h5>Marketing Officer</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section><!--/#Our-Team-->

\t\t<section id=\"portfolio\">
\t\t";
        // line 371
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "portfolio", array()), "html", null, true));
        echo "
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t<h2 class=\"title-one\">Portfolio</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"portfolio-filter text-center\">
\t\t\t\t\t<li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All</a></li>
\t\t\t\t\t<li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Html</a></li>
\t\t\t\t\t<li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Wordpress</a></li>
\t\t\t\t\t<li><a class=\"btn btn-default\" href=\"#\" data-filter=\".joomla\">Joomla</a></li>
\t\t\t\t\t<li><a class=\"btn btn-default\" href=\"#\" data-filter=\".megento\">Megento</a></li>
\t\t\t\t</ul><!--/#portfolio-filter-->
\t\t\t\t<div class=\"portfolio-items\">
\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item html\">
\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<img src=\"images/portfolio/1.jpg\" alt=\"\"></div> 
\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item jooma\">
\t\t\t\t\t\t\t<div class=\"view efffect\" >
\t\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/portfolio/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item4.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item wordpress\">
\t\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/portfolio/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item megento\">
\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<img src=\"images/portfolio/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item html\">
\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<img src=\"images/portfolio/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div> <div class=\"mask text-center\">
\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item wordpress\">
\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t<img src=\"images/portfolio/6.jpg\" alt=\"\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item html\">
\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t<img src=\"images/portfolio/7.jpg\" alt=\"\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item joomla\">
\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t<img src=\"images/portfolio/8.jpg\" alt=\"\"></div> 
\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item html\">
\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<img src=\"images/portfolio/9.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item wordpress\">
\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<img src=\"images/portfolio/10.jpg\" alt=\"\"></div> 
\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item joomla\">
\t\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/portfolio/11.jpg\" alt=\"\"></div> 
\t\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item3.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 col-xs-12 portfolio-item megento\">
\t\t\t\t\t\t\t\t<div class=\"view efffect\">
\t\t\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/portfolio/12.jpg\" alt=\"\"></div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"mask text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Novel</h3>
\t\t\t\t\t\t\t\t\t\t\t<h4>Lorem ipsum dolor sit amet consectetur</h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"images/portfolio/big-item4.jpg\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 

\t\t\t\t\t</section> <!--/#portfolio-->

<section id=\"clients\" class=\"parallax-section\">
    ";
        // line 543
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()), "html", null, true));
        echo "
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"clients-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-one\">Clients Say About Us</h2>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"clients-carousel\" class=\"carousel slide\" data-ride=\"carousel\"> <!-- Indicators -->
\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#clients-carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#clients-carousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#clients-carousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t</ol> <!-- Wrapper for slides -->
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-client\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"pull-left\" src=\"images/clients/client1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href=\"\">www.yourwebsite.com</a></blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-client\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"pull-left\" src=\"images/clients/client3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href=\"\">www.yourwebsite.com</a></blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-client\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"pull-left\" src=\"images/clients/client2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href=\"\">www.yourwebsite.com</a></blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section><!--/#clients-->

<section id=\"blog\"> 
            ";
        // line 596
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog", array()), "html", null, true));
        echo "
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row text-center clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t\t\t\t<h2 class=\"title-one\">Our Blog</h2>
\t\t\t\t\t\t\t\t\t<p class=\"blog-heading\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-detail\">Read More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-detail\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-two\">Read More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-two\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-three\">Read More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-three\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-four\">Read More</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-four\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-six\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-six\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-blog\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-pencil-square-o\"></i><strong> Posted By:</strong> John</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i><strong> Posted On:</strong> Apr 15 2014</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#blog-seven\">Read More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blog-seven\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/blog/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</section> <!--/#blog-->

<section id=\"contact\">
\t\t\t\t\t\t";
        // line 766
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact", array()), "html", null, true));
        echo "
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row text-center clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"contact-heading\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-one\">Contact With Us</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"contact-details\">
\t\t\t\t\t\t\t\t\t<div class=\"pattern\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row text-center clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"contact-address\"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"> 
\t\t\t\t\t\t\t\t\t\t\t<div id=\"contact-form-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status alert alert-success\" style=\"display: none\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"contact-form\" class=\"contact\" name=\"contact-form\" method=\"post\" action=\"send-mail.php\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control name-field\" required=\"required\" placeholder=\"Your Name\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control mail-field\" required=\"required\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</section> <!--/#contact--> 

\t<footer id=\"footer\"> 
\t";
        // line 814
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
\t\t<div class=\"container\"> 
\t\t\t<div class=\"text-center\"> 
\t\t\t\t<p>Copyright &copy; 2014 - <a href=\"http://mostafiz.me/\">Mostafiz</a> | All Rights Reserved</p> 
\t\t\t</div> 
\t\t</div> 
\t</footer> <!--/#footer--> 



\t<script type=\"text/javascript\" src=\"js/jquery.js\"></script> 
\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/smoothscroll.js\"></script> 
\t<script type=\"text/javascript\" src=\"js/jquery.isotope.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/jquery.prettyPhoto.js\"></script> 
\t<script type=\"text/javascript\" src=\"js/jquery.parallax.js\"></script> 
\t<script type=\"text/javascript\" src=\"js/main.js\"></script> 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/citrix/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 814,  837 => 766,  664 => 596,  608 => 543,  433 => 371,  288 => 229,  245 => 189,  161 => 108,  115 => 65,  110 => 63,  82 => 38,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head> */
/* 	<meta charset="utf-8"> */
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> */
/* 	<meta name="description" content="Creative One Page Parallax Template">*/
/* 	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> */
/* 	<meta name="author" content=""> */
/* 	<title>HIMU - OnePage HTML Parallax template</title> */
/* 	<link href="css/bootstrap.min.css" rel="stylesheet">*/
/* 	<link href="css/prettyPhoto.css" rel="stylesheet"> */
/* 	<link href="css/font-awesome.min.css" rel="stylesheet"> */
/* 	<link href="css/animate.css" rel="stylesheet"> */
/* 	<link href="css/main.css" rel="stylesheet">*/
/* 	<link href="css/responsive.css" rel="stylesheet"> */
/* 	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> */
/* 	<script src="js/respond.min.js"></script> <![endif]--> */
/* 	<link rel="shortcut icon" href="images/ico/favicon.png"> */
/* 	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> */
/* 	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> */
/* 	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> */
/* 	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">*/
/* </head><!--/head-->*/
/* <body>*/
/* 	<div class="preloader">*/
/* 		<div class="preloder-wrap">*/
/* 			<div class="preloder-inner"> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div> */
/* 				<div class="ball"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div><!--/.preloader-->*/
/* 	{{page.myheader}}*/
/* 	<header id="navigation"> */
/* 		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> */
/* 			<div class="container"> */
/* 				<div class="navbar-header"> */
/* 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> */
/* 						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> */
/* 					</button> */
/* 					<a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="logo"></h1></a> */
/* 				</div> */
/* 				<div class="collapse navbar-collapse"> */
/* 					<ul class="nav navbar-nav navbar-right"> */
/* 						<li class="scroll active"><a href="#navigation">Home</a></li> */
/* 						<li class="scroll"><a href="#about-us">About Us</a></li> */
/* 						<li class="scroll"><a href="#services">Services</a></li> */
/* 						<li class="scroll"><a href="#our-team">Our Team</a></li> */
/* 						<li class="scroll"><a href="#portfolio">Portfolio</a></li> */
/* 						<li class="scroll"><a href="#clients">Clients</a></li> */
/* 						<li class="scroll"><a href="#blog">Blog</a></li> */
/* 						<li class="scroll"><a href="#contact">Contact</a></li> */
/* 					</ul> */
/* 				</div> */
/* 			</div> */
/* 		</div><!--/navbar--> */
/* 	</header> <!--/#navigation--> */
/* {{page.content}}*/
/* 	<section id="home">*/
/* 	{{page.home}}*/
/* 		<div class="home-pattern"></div>*/
/* 		<div id="main-carousel" class="carousel slide" data-ride="carousel"> */
/* 			<ol class="carousel-indicators">*/
/* 				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>*/
/* 				<li data-target="#main-carousel" data-slide-to="1"></li>*/
/* 				<li data-target="#main-carousel" data-slide-to="2"></li>*/
/* 			</ol><!--/.carousel-indicators--> */
/* 			<div class="carousel-inner">*/
/* 				<div class="item active" style="background-image: url(images/slider/slide3.jpg)"> */
/* 					<div class="carousel-caption"> */
/* 						<div> */
/* 							<h2 class="heading animated bounceInDown">'Himu' Onepage HTML Template</h2> */
/* 							<p class="animated bounceInUp">Fully Professional one page template</p> */
/* 							<a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a> */
/* 						</div> */
/* 					</div> */
/* 				</div>*/
/* 				<div class="item" style="background-image: url(images/slider/slide2.jpg)"> */
/* 					<div class="carousel-caption"> <div> */
/* 						<h2 class="heading animated bounceInDown">Get All in Onepage</h2> */
/* 						<p class="animated bounceInUp">Everything is outstanding </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a> */
/* 					</div> */
/* 				</div> */
/* 			</div> */
/* 			<div class="item" style="background-image: url(images/slider/slide1.jpg)"> */
/* 				<div class="carousel-caption"> */
/* 					<div> */
/* 						<h2 class="heading animated bounceInRight">Fully Responsive Template</h2> */
/* 						<p class="animated bounceInLeft">100% Responsive HTML template</p> */
/* 						<a class="btn btn-default slider-btn animated bounceInUp" href="#">Get Started</a> */
/* 					</div> */
/* 				</div> */
/* 			</div>*/
/* 		</div><!--/.carousel-inner-->*/
/* */
/* 		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>*/
/* 		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>*/
/* 	</div> */
/* */
/* </section><!--/#home-->*/
/* */
/* <section id="about-us">*/
/* {{page.about}}*/
/* 	<div class="container">*/
/* 		<div class="text-center">*/
/* 			<div class="col-sm-8 col-sm-offset-2">*/
/* 				<h2 class="title-one">Why With Us?</h2>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="about-us">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<h3>Why with us?</h3>*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> About</a></li>*/
/* 						<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>*/
/* 						<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li>*/
/* 					</ul>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane fade in active" id="about">*/
/* 							<div class="media">*/
/* 								<img class="pull-left media-object" src="images/about-us/about.jpg" alt="about us"> */
/* 								<div class="media-body">*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane fade" id="mission">*/
/* 							<div class="media">*/
/* 								<img class="pull-left media-object" src="images/about-us/mission.jpg" alt="Mission"> */
/* 								<div class="media-body">*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane fade" id="community">*/
/* 							<div class="media">*/
/* 								<img class="pull-left media-object" src="images/about-us/community.jpg" alt="Community"> */
/* 								<div class="media-body">*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<h3>Our Skills</h3>*/
/* 					<div class="skill-bar">*/
/* 						<div class="skillbar clearfix " data-percent="90%">*/
/* 							<div class="skillbar-title">*/
/* 								<span>HTML5 &amp; CSS3</span>*/
/* 							</div>*/
/* 							<div class="skillbar-bar"></div>*/
/* 							<div class="skill-bar-percent">90%</div>*/
/* 						</div> <!-- End Skill Bar -->*/
/* 						<div class="skillbar clearfix" data-percent="85%">*/
/* 							<div class="skillbar-title"><span>UI Design</span></div>*/
/* 							<div class="skillbar-bar"></div>*/
/* 							<div class="skill-bar-percent">85%</div>*/
/* 						</div> <!-- End Skill Bar -->*/
/* 						<div class="skillbar clearfix " data-percent="70%">*/
/* 							<div class="skillbar-title"><span>jQuery</span></div>*/
/* 							<div class="skillbar-bar"></div>*/
/* 							<div class="skill-bar-percent">70%</div>*/
/* 						</div> <!-- End Skill Bar -->*/
/* 						<div class="skillbar clearfix " data-percent="60%">*/
/* 							<div class="skillbar-title"><span>PHP</span></div>*/
/* 							<div class="skillbar-bar"></div>*/
/* 							<div class="skill-bar-percent">60%</div>*/
/* 						</div> <!-- End Skill Bar -->*/
/* 						<div class="skillbar clearfix " data-percent="75%">*/
/* 							<div class="skillbar-title"><span>Wordpress</span></div>*/
/* 							<div class="skillbar-bar"></div>*/
/* 							<div class="skill-bar-percent">75%</div>*/
/* 						</div> <!-- End Skill Bar --></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section><!--/#about-us-->*/
/* */
/* 	<section id="services" class="parallax-section">*/
/* 	{{page.services}}*/
/* 		<div class="container">*/
/* 			<div class="row text-center">*/
/* 				<div class="col-sm-8 col-sm-offset-2">*/
/* 					<h2 class="title-one">Services</h2>*/
/* 					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<div class="our-service">*/
/* 						<div class="services row">*/
/* 							<div class="col-sm-4">*/
/* 								<div class="single-service">*/
/* 									<i class="fa fa-th"></i>*/
/* 									<h2>Modern Design</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-4">*/
/* 								<div class="single-service">*/
/* 									<i class="fa fa-html5"></i>*/
/* 									<h2>Web Development</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-4">*/
/* 								<div class="single-service">*/
/* 									<i class="fa fa-users"></i>*/
/* 									<h2>Online Marketing</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>*/
/* 								</div>*/
/* 							</div></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</section><!--/#service-->*/
/* */
/* 		<section id="our-team">*/
/* 		{{page.team}}*/
/* 			<div class="container">*/
/* 				<div class="row text-center">*/
/* 					<div class="col-sm-8 col-sm-offset-2">*/
/* 						<h2 class="title-one">Meet The Team</h2>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="team-carousel" class="carousel slide" data-interval="false">*/
/* 					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>*/
/* 					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/* 					<div class="carousel-inner team-members">*/
/* 						<div class="row item active">*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member1.jpg" alt="team member" />*/
/* 									<h4>William Hurt</h4>*/
/* 									<h5>Sr. Web Developer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member2.jpg" alt="team member" />*/
/* 									<h4>Alekjandra Jony</h4>*/
/* 									<h5>Creative Designer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member3.jpg" alt="team member" />*/
/* 									<h4>Paul Johnson</h4>*/
/* 									<h5>Skilled Programmer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member4.jpg" alt="team member" />*/
/* 									<h4>John Richerds</h4>*/
/* 									<h5>Marketing Officer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row item">*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member1.jpg" alt="team member" />*/
/* 									<h4>William Hurt</h4>*/
/* 									<h5>Sr. Web Developer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member3.jpg" alt="team member" />*/
/* 									<h4>Paul Johnson</h4>*/
/* 									<h5>Skilled Programmer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member2.jpg" alt="team member" />*/
/* 									<h4>Alekjandra Jony</h4>*/
/* 									<h5>Creative Designer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-md-3">*/
/* 								<div class="single-member">*/
/* 									<img src="images/our-team/member4.jpg" alt="team member" />*/
/* 									<h4>John Richerds</h4>*/
/* 									<h5>Marketing Officer</h5>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>*/
/* 									<div class="socials">*/
/* 										<a href="#"><i class="fa fa-facebook"></i></a>*/
/* 										<a href="#"><i class="fa fa-twitter"></i></a>*/
/* 										<a href="#"><i class="fa fa-google-plus"></i></a>*/
/* 										<a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 										<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</section><!--/#Our-Team-->*/
/* */
/* 		<section id="portfolio">*/
/* 		{{page.portfolio}}*/
/* 			<div class="container">*/
/* 				<div class="row text-center">*/
/* 					<div class="col-sm-8 col-sm-offset-2">*/
/* 						<h2 class="title-one">Portfolio</h2>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<ul class="portfolio-filter text-center">*/
/* 					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>*/
/* 					<li><a class="btn btn-default" href="#" data-filter=".html">Html</a></li>*/
/* 					<li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>*/
/* 					<li><a class="btn btn-default" href="#" data-filter=".joomla">Joomla</a></li>*/
/* 					<li><a class="btn btn-default" href="#" data-filter=".megento">Megento</a></li>*/
/* 				</ul><!--/#portfolio-filter-->*/
/* 				<div class="portfolio-items">*/
/* 					<div class="col-sm-3 col-xs-12 portfolio-item html">*/
/* 						<div class="view efffect">*/
/* 							<div class="portfolio-image">*/
/* 								<img src="images/portfolio/1.jpg" alt=""></div> */
/* 								<div class="mask text-center">*/
/* 									<h3>Novel</h3>*/
/* 									<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 									<a href="#"><i class="fa fa-link"></i></a>*/
/* 									<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3 col-xs-12 portfolio-item jooma">*/
/* 							<div class="view efffect" >*/
/* 								<div class="portfolio-image">*/
/* 									<img src="images/portfolio/2.jpg" alt="">*/
/* 								</div> */
/* 								<div class="mask text-center">*/
/* 									<h3>Novel</h3>*/
/* 									<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 									<a href="#"><i class="fa fa-link"></i></a>*/
/* 									<a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3 col-xs-12 portfolio-item wordpress">*/
/* 							<div class="view efffect">*/
/* 								<div class="portfolio-image">*/
/* 									<img src="images/portfolio/3.jpg" alt="">*/
/* 								</div> */
/* 								<div class="mask text-center">*/
/* 								<h3>Novel</h3>*/
/* 								<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 								<a href="#"><i class="fa fa-link"></i></a>*/
/* 								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 col-xs-12 portfolio-item megento">*/
/* 						<div class="view efffect">*/
/* 							<div class="portfolio-image">*/
/* 								<img src="images/portfolio/4.jpg" alt="">*/
/* 							</div> */
/* 							<div class="mask text-center">*/
/* 								<h3>Novel</h3>*/
/* 								<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 								<a href="#"><i class="fa fa-link"></i></a>*/
/* 								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 col-xs-12 portfolio-item html">*/
/* 						<div class="view efffect">*/
/* 							<div class="portfolio-image">*/
/* 								<img src="images/portfolio/5.jpg" alt="">*/
/* 							</div> <div class="mask text-center">*/
/* 							<h3>Novel</h3>*/
/* 							<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 							<a href="#"><i class="fa fa-link"></i></a>*/
/* 							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-3 col-xs-12 portfolio-item wordpress">*/
/* 					<div class="view efffect">*/
/* 						<div class="portfolio-image">*/
/* 							<img src="images/portfolio/6.jpg" alt="">*/
/* 						</div> */
/* 						<div class="mask text-center">*/
/* 							<h3>Novel</h3>*/
/* 							<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 							<a href="#"><i class="fa fa-link"></i></a>*/
/* 							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-3 col-xs-12 portfolio-item html">*/
/* 					<div class="view efffect">*/
/* 						<div class="portfolio-image">*/
/* 							<img src="images/portfolio/7.jpg" alt="">*/
/* 						</div> */
/* 						<div class="mask text-center">*/
/* 							<h3>Novel</h3>*/
/* 							<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 							<a href="#"><i class="fa fa-link"></i></a>*/
/* 							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-3 col-xs-12 portfolio-item joomla">*/
/* 					<div class="view efffect">*/
/* 						<div class="portfolio-image">*/
/* 							<img src="images/portfolio/8.jpg" alt=""></div> */
/* 							<div class="mask text-center">*/
/* 								<h3>Novel</h3>*/
/* 								<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 								<a href="#"><i class="fa fa-link"></i></a>*/
/* 								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 col-xs-12 portfolio-item html">*/
/* 						<div class="view efffect">*/
/* 							<div class="portfolio-image">*/
/* 								<img src="images/portfolio/9.jpg" alt="">*/
/* 							</div> */
/* 							<div class="mask text-center">*/
/* 								<h3>Novel</h3>*/
/* 								<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 								<a href="#"><i class="fa fa-link"></i></a>*/
/* 								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 col-xs-12 portfolio-item wordpress">*/
/* 						<div class="view efffect">*/
/* 							<div class="portfolio-image">*/
/* 								<img src="images/portfolio/10.jpg" alt=""></div> */
/* 								<div class="mask text-center">*/
/* 									<h3>Novel</h3>*/
/* 									<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 									<a href="#"><i class="fa fa-link"></i></a>*/
/* 									<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3 col-xs-12 portfolio-item joomla">*/
/* 							<div class="view efffect">*/
/* 								<div class="portfolio-image">*/
/* 									<img src="images/portfolio/11.jpg" alt=""></div> */
/* 									<div class="mask text-center">*/
/* 										<h3>Novel</h3>*/
/* 										<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 										<a href="#"><i class="fa fa-link"></i></a>*/
/* 										<a href="images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-3 col-xs-12 portfolio-item megento">*/
/* 								<div class="view efffect">*/
/* 									<div class="portfolio-image">*/
/* 										<img src="images/portfolio/12.jpg" alt=""></div> */
/* 										<div class="mask text-center">*/
/* 											<h3>Novel</h3>*/
/* 											<h4>Lorem ipsum dolor sit amet consectetur</h4>*/
/* 											<a href="#"><i class="fa fa-link"></i></a>*/
/* 											<a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div> */
/* */
/* 					</section> <!--/#portfolio-->*/
/* */
/* <section id="clients" class="parallax-section">*/
/*     {{page.clients}}*/
/* 						<div class="container">*/
/* 							<div class="clients-wrapper">*/
/* 								<div class="row text-center">*/
/* 									<div class="col-sm-8 col-sm-offset-2">*/
/* 										<h2 class="title-one">Clients Say About Us</h2>*/
/* 										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->*/
/* 									<ol class="carousel-indicators">*/
/* 										<li data-target="#clients-carousel" data-slide-to="0" class="active"></li>*/
/* 										<li data-target="#clients-carousel" data-slide-to="1"></li>*/
/* 										<li data-target="#clients-carousel" data-slide-to="2"></li>*/
/* 									</ol> <!-- Wrapper for slides -->*/
/* 									<div class="carousel-inner">*/
/* 										<div class="item active">*/
/* 											<div class="single-client">*/
/* 												<div class="media">*/
/* 													<img class="pull-left" src="images/clients/client1.jpg" alt="">*/
/* 													<div class="media-body">*/
/* 														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="item">*/
/* 											<div class="single-client">*/
/* 												<div class="media">*/
/* 													<img class="pull-left" src="images/clients/client3.jpg" alt="">*/
/* 													<div class="media-body">*/
/* 														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="item">*/
/* 											<div class="single-client">*/
/* 												<div class="media">*/
/* 													<img class="pull-left" src="images/clients/client2.jpg" alt="">*/
/* 													<div class="media-body">*/
/* 														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</section><!--/#clients-->*/
/* */
/* <section id="blog"> */
/*             {{page.blog}}*/
/* 						<div class="container">*/
/* 							<div class="row text-center clearfix">*/
/* 								<div class="col-sm-8 col-sm-offset-2">*/
/* 									<h2 class="title-one">Our Blog</h2>*/
/* 									<p class="blog-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 								</div>*/
/* 							</div> */
/* 							<div class="row">*/
/* 								<div class="col-sm-4">*/
/* 									<div class="single-blog">*/
/* 										<img src="images/blog/1.jpg" alt="" />*/
/* 										<h2>Lorem ipsum dolor sit amet</h2>*/
/* 										<ul class="post-meta">*/
/* 											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 										</ul>*/
/* 										<div class="blog-content">*/
/* 											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 										</div>*/
/* 										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Read More</a>*/
/* 									</div>*/
/* 									<div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 										<div class="modal-dialog">*/
/* 											<div class="modal-content">*/
/* 												<div class="modal-body">*/
/* 													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 													<img src="images/blog/3.jpg" alt="" />*/
/* 													<h2>Lorem ipsum dolor sit amet</h2>*/
/* 													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 												</div> */
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-4">*/
/* 									<div class="single-blog">*/
/* 										<img src="images/blog/2.jpg" alt="" />*/
/* 										<h2>Lorem ipsum dolor sit amet</h2>*/
/* 										<ul class="post-meta">*/
/* 											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 										</ul>*/
/* 										<div class="blog-content">*/
/* 											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 										</div>*/
/* 										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Read More</a>*/
/* 									</div>*/
/* 									<div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 										<div class="modal-dialog">*/
/* 											<div class="modal-content">*/
/* 												<div class="modal-body">*/
/* 													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 													<img src="images/blog/2.jpg" alt="" />*/
/* 													<h2>Lorem ipsum dolor sit amet</h2>*/
/* 													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-4">*/
/* 									<div class="single-blog">*/
/* 										<img src="images/blog/3.jpg" alt="" />*/
/* 										<h2>Lorem ipsum dolor sit amet</h2>*/
/* 										<ul class="post-meta">*/
/* 											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 										</ul>*/
/* 										<div class="blog-content">*/
/* 											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 										</div>*/
/* 										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Read More</a>*/
/* 									</div>*/
/* 									<div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 										<div class="modal-dialog">*/
/* 											<div class="modal-content">*/
/* 												<div class="modal-body">*/
/* 													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 													<img src="images/blog/3.jpg" alt="" />*/
/* 													<h2>Lorem ipsum dolor sit amet</h2>*/
/* 													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 												</div> */
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-4">*/
/* 									<div class="single-blog">*/
/* 										<img src="images/blog/3.jpg" alt="" />*/
/* 										<h2>Lorem ipsum dolor sit amet</h2>*/
/* 										<ul class="post-meta">*/
/* 											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 										</ul>*/
/* 										<div class="blog-content">*/
/* 											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 										</div>*/
/* 										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a></div>*/
/* 										<div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 											<div class="modal-dialog">*/
/* 												<div class="modal-content">*/
/* 													<div class="modal-body">*/
/* 														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 														<img src="images/blog/3.jpg" alt="" />*/
/* 														<h2>Lorem ipsum dolor sit amet</h2>*/
/* 														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 													</div> */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-4">*/
/* 										<div class="single-blog">*/
/* 											<img src="images/blog/2.jpg" alt="" />*/
/* 											<h2>Lorem ipsum dolor sit amet</h2>*/
/* 											<ul class="post-meta">*/
/* 												<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 												<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 											</ul>*/
/* 											<div class="blog-content">*/
/* 												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 											</div>*/
/* 											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>*/
/* 										</div>*/
/* 										<div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 											<div class="modal-dialog">*/
/* 												<div class="modal-content">*/
/* 													<div class="modal-body">*/
/* 														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 														<img src="images/blog/2.jpg" alt="" />*/
/* 														<h2>Lorem ipsum dolor sit amet</h2>*/
/* 														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 													</div> */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="col-sm-4">*/
/* 										<div class="single-blog">*/
/* 											<img src="images/blog/1.jpg" alt="" />*/
/* 											<h2>Lorem ipsum dolor sit amet</h2>*/
/* 											<ul class="post-meta">*/
/* 												<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>*/
/* 												<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>*/
/* 											</ul>*/
/* 											<div class="blog-content">*/
/* 												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 											</div>*/
/* 											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>*/
/* 										</div>*/
/* 										<div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 											<div class="modal-dialog">*/
/* 												<div class="modal-content">*/
/* 													<div class="modal-body">*/
/* 														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 														<img src="images/blog/1.jpg" alt="" />*/
/* 														<h2>Lorem ipsum dolor sit amet</h2>*/
/* 														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>*/
/* 													</div> */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div> */
/* 								</div> */
/* 							</div> */
/* 						</section> <!--/#blog-->*/
/* */
/* <section id="contact">*/
/* 						{{page.contact}}*/
/* 							<div class="container">*/
/* 								<div class="row text-center clearfix">*/
/* 									<div class="col-sm-8 col-sm-offset-2">*/
/* 										<div class="contact-heading">*/
/* 											<h2 class="title-one">Contact With Us</h2>*/
/* 											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="container">*/
/* 								<div class="contact-details">*/
/* 									<div class="pattern"></div>*/
/* 									<div class="row text-center clearfix">*/
/* 										<div class="col-sm-6">*/
/* 											<div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>*/
/* 												<div class="social-icons">*/
/* 													<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>*/
/* 													<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>*/
/* 													<a href="#"><i class="fa fa-linkedin"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="col-sm-6"> */
/* 											<div id="contact-form-section">*/
/* 												<div class="status alert alert-success" style="display: none"></div>*/
/* 												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">*/
/* 													<div class="form-group">*/
/* 														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>*/
/* 														<div class="form-group">*/
/* 															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">*/
/* 														</div> */
/* 														<div class="form-group">*/
/* 															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>*/
/* 														</div> */
/* 														<div class="form-group">*/
/* 															<button type="submit" class="btn btn-primary">Send</button>*/
/* 														</div>*/
/* 													</form> */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div> */
/* 							</section> <!--/#contact--> */
/* */
/* 	<footer id="footer"> */
/* 	{{page.footer}}*/
/* 		<div class="container"> */
/* 			<div class="text-center"> */
/* 				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p> */
/* 			</div> */
/* 		</div> */
/* 	</footer> <!--/#footer--> */
/* */
/* */
/* */
/* 	<script type="text/javascript" src="js/jquery.js"></script> */
/* 	<script type="text/javascript" src="js/bootstrap.min.js"></script>*/
/* 	<script type="text/javascript" src="js/smoothscroll.js"></script> */
/* 	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>*/
/* 	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> */
/* 	<script type="text/javascript" src="js/jquery.parallax.js"></script> */
/* 	<script type="text/javascript" src="js/main.js"></script> */
/* </body>*/
/* </html>*/
