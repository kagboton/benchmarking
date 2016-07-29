<?php

/* @Admin/layout.html.twig */
class __TwigTemplate_df63061b4a9f3c0b532d9510a8ca28d16f0eac478f24e6aed83ec472ec1ba69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'admin_body' => array($this, 'block_admin_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3c9036819683b78b12861a2edd5fd70b5aef953897cf67bf9729801cf2a4e54 = $this->env->getExtension("native_profiler");
        $__internal_d3c9036819683b78b12861a2edd5fd70b5aef953897cf67bf9729801cf2a4e54->enter($__internal_d3c9036819683b78b12861a2edd5fd70b5aef953897cf67bf9729801cf2a4e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\">

        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0e63b70_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e63b70_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e63b70_simple-admin_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "0e63b70"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e63b70") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e63b70.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>

    <body>

    <nav class=\"navbar navbar-inverse navbar-static-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle navbar-toggle-sidebar collapsed\">
                    MENU
                </button>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">
                    Administration
                </a>
            </div><!-- /.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <form class=\"navbar-form navbar-left\" method=\"GET\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                </form>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("benchmarking_homepage");
        echo "\" target=\"_blank\">Benchmarking</a></li>
                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Profile </a></li>
                                <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Paramètres </a></li>
                                <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Déconnexion </a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 62
        echo "                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class=\"container-fluid main-container\">
        <div class=\"col-md-2 sidebar\">
            <div class=\"row\">
                <!-- uncomment code for absolute positioning tweek see top comment in css -->
                <div class=\"absolute-wrapper\"> </div>
                <!-- Menu -->
                <div class=\"side-menu\">
                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                        <!-- Main Menu -->
                        <div class=\"side-menu-container\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\"><span class=\"glyphicon glyphicon-dashboard\"></span> Tableau de bord</a></li>
                                <li class=\"panel panel-default\" id=\"dropdown\">
                                    <a data-toggle=\"collapse\" href=\"#familles-fonctions\">
                                        <span class=\"glyphicon glyphicon-th-list\"></span> Familles & Fonctions  <span class=\"caret\"></span>
                                    </a>
                                    <div id=\"familles-fonctions\" class=\"panel-collapse collapse\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav navbar-nav\">
                                                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("familles");
        echo "\">Familles</a></li>
                                                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("fonctions");
        echo "\">Fonctions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"panel panel-default\" id=\"dropdown\">
                                    <a data-toggle=\"collapse\" href=\"#affichages\">
                                        <span class=\"glyphicon glyphicon-picture\"></span> Affichages <span class=\"caret\"></span>
                                    </a>
                                    <div id=\"affichages\" class=\"panel-collapse collapse\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav navbar-nav\">
                                                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("afficheurs");
        echo "\">Afficheurs</a></li>
                                                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("technologiesAfficheur");
        echo "\">Technologies Afficheur</a></li>
                                                <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("sousTechnologiesAfficheur");
        echo "\">Sous Technologies Afficheur</a></li>
                                                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("typesTdB");
        echo "\">Type Tableau de bord</a></li>
                                                <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("formatsEcran");
        echo "\">Format écran</a></li>
                                                <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("retoursActivation");
        echo "\">Type Retour Activation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>


                                <li class=\"panel panel-default\" id=\"dropdown\">
                                    <a data-toggle=\"collapse\" href=\"#commandes\">
                                        <span class=\"glyphicon glyphicon-cog\"></span> Commandes <span class=\"caret\"></span>
                                    </a>
                                    <div id=\"commandes\" class=\"panel-collapse collapse\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav navbar-nav\">
                                                <li><a href=\"#\">Commandes Physiques</a></li>
                                                <li><a href=\"#\">Localisations</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"panel panel-default\" id=\"dropdown\">
                                    <a data-toggle=\"collapse\" href=\"#divers\">
                                        <span class=\"glyphicon glyphicon-file\"></span> Divers <span class=\"caret\"></span>
                                    </a>
                                    <div id=\"divers\" class=\"panel-collapse collapse\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav navbar-nav\">
                                                <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("segments");
        echo "\">Segment</a></li>
                                                <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("motorisations");
        echo "\">Motorisation</a></li>
                                                <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("marques");
        echo "\">Marque</a></li>
                                                <li><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("boitesVitesse");
        echo "\">Boite à Vitesse</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"panel panel-default\" id=\"dropdown\">
                                    <a data-toggle=\"collapse\" href=\"#vehicules\">
                                        <span class=\"glyphicon glyphicon-road\"></span> Véhicules  <span class=\"caret\"></span>
                                    </a>
                                    <div id=\"vehicules\" class=\"panel-collapse collapse\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav navbar-nav\">
                                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("vehicule_add");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un véhicule</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div><!-- /.side-menu-container -->
                    </nav>
                </div><!-- /.side-menu -->
            </div><!-- /.row -->
        </div><!-- /.col-md-2 sidebar -->

        <div class=\"col-md-10 content\">
            <div class=\"panel panel-default\">
                ";
        // line 165
        $this->displayBlock('admin_body', $context, $blocks);
        // line 178
        echo "            </div>
        </div>


        <footer class=\"pull-left footer\">
            <p class=\"col-md-12\">
            <hr class=\"divider\">
            Copyright &COPY; 2016 <a href=\"#\">UET Système IHM Innovants</a>
            </p>
        </footer>
    </div>



    ";
        // line 192
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "    </body>
</html>";
        
        $__internal_d3c9036819683b78b12861a2edd5fd70b5aef953897cf67bf9729801cf2a4e54->leave($__internal_d3c9036819683b78b12861a2edd5fd70b5aef953897cf67bf9729801cf2a4e54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9de0a8486421f028dea1d6fddec37a601f29ff467b966a872a8376bbb81c0796 = $this->env->getExtension("native_profiler");
        $__internal_9de0a8486421f028dea1d6fddec37a601f29ff467b966a872a8376bbb81c0796->enter($__internal_9de0a8486421f028dea1d6fddec37a601f29ff467b966a872a8376bbb81c0796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Benchmarking - Administration ";
        
        $__internal_9de0a8486421f028dea1d6fddec37a601f29ff467b966a872a8376bbb81c0796->leave($__internal_9de0a8486421f028dea1d6fddec37a601f29ff467b966a872a8376bbb81c0796_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7428fbb380ca750bce53f874d9763eaeaf691e717f12df77e0ee150be548bae9 = $this->env->getExtension("native_profiler");
        $__internal_7428fbb380ca750bce53f874d9763eaeaf691e717f12df77e0ee150be548bae9->enter($__internal_7428fbb380ca750bce53f874d9763eaeaf691e717f12df77e0ee150be548bae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        ";
        
        $__internal_7428fbb380ca750bce53f874d9763eaeaf691e717f12df77e0ee150be548bae9->leave($__internal_7428fbb380ca750bce53f874d9763eaeaf691e717f12df77e0ee150be548bae9_prof);

    }

    // line 165
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_ff3726fdd1c1f72a6deb453227329708a68ba4fecff610f936d2b9a399bbddc0 = $this->env->getExtension("native_profiler");
        $__internal_ff3726fdd1c1f72a6deb453227329708a68ba4fecff610f936d2b9a399bbddc0->enter($__internal_ff3726fdd1c1f72a6deb453227329708a68ba4fecff610f936d2b9a399bbddc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 166
        echo "                    <div class=\"panel-heading\">
                        Tableau de bord
                    </div>
                    <div class=\"panel-body\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                ";
        
        $__internal_ff3726fdd1c1f72a6deb453227329708a68ba4fecff610f936d2b9a399bbddc0->leave($__internal_ff3726fdd1c1f72a6deb453227329708a68ba4fecff610f936d2b9a399bbddc0_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b713c58ce424a526059a6be12c03b114027fce8cb9d50c08de0504f08fd80eb9 = $this->env->getExtension("native_profiler");
        $__internal_b713c58ce424a526059a6be12c03b114027fce8cb9d50c08de0504f08fd80eb9->enter($__internal_b713c58ce424a526059a6be12c03b114027fce8cb9d50c08de0504f08fd80eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 193
        echo "
        ";
        // line 195
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

        ";
        // line 198
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de0e6ae_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0e6ae_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/de0e6ae_simple-admin_1.js");
            // line 199
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "de0e6ae"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0e6ae") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/de0e6ae.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 201
        echo "
    ";
        
        $__internal_b713c58ce424a526059a6be12c03b114027fce8cb9d50c08de0504f08fd80eb9->leave($__internal_b713c58ce424a526059a6be12c03b114027fce8cb9d50c08de0504f08fd80eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 201,  380 => 199,  376 => 198,  371 => 195,  368 => 193,  362 => 192,  344 => 166,  338 => 165,  331 => 19,  325 => 18,  313 => 5,  305 => 203,  303 => 192,  287 => 178,  285 => 165,  266 => 149,  250 => 136,  246 => 135,  242 => 134,  238 => 133,  207 => 105,  203 => 104,  199 => 103,  195 => 102,  191 => 101,  187 => 100,  171 => 87,  167 => 86,  156 => 78,  138 => 62,  131 => 58,  127 => 57,  123 => 56,  116 => 54,  113 => 53,  111 => 52,  107 => 51,  90 => 37,  71 => 20,  69 => 18,  64 => 16,  60 => 14,  46 => 12,  42 => 11,  37 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title>{% block title %} Benchmarking - Administration {% endblock %}</title>*/
/* */
/*         {# On charge le CSS de bootstrap depuis le site directement #}*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">*/
/* */
/*         {% stylesheets 'bundles/admin/css/simple-admin.css' filter='cssrewrite, scssphp'%}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*     <nav class="navbar navbar-inverse navbar-static-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">*/
/*                     MENU*/
/*                 </button>*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ path('admin_homepage') }}">*/
/*                     Administration*/
/*                 </a>*/
/*             </div><!-- /.navbar-header -->*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <form class="navbar-form navbar-left" method="GET" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="q" class="form-control" placeholder="Search">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>*/
/*                 </form>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="{{ path('benchmarking_homepage') }}" target="_blank">Benchmarking</a></li>*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ app.user.prenom }} {{ app.user.nom }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('fos_user_profile_show') }}"><span class="glyphicon glyphicon-user"></span> Profile </a></li>*/
/*                                 <li><a href="{{ path('fos_user_profile_edit') }}"><span class="glyphicon glyphicon-cog"></span> Paramètres </a></li>*/
/*                                 <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-off"></span> Déconnexion </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/*     <div class="container-fluid main-container">*/
/*         <div class="col-md-2 sidebar">*/
/*             <div class="row">*/
/*                 <!-- uncomment code for absolute positioning tweek see top comment in css -->*/
/*                 <div class="absolute-wrapper"> </div>*/
/*                 <!-- Menu -->*/
/*                 <div class="side-menu">*/
/*                     <nav class="navbar navbar-default" role="navigation">*/
/*                         <!-- Main Menu -->*/
/*                         <div class="side-menu-container">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li class="active"><a href="{{ path('admin_homepage') }}"><span class="glyphicon glyphicon-dashboard"></span> Tableau de bord</a></li>*/
/*                                 <li class="panel panel-default" id="dropdown">*/
/*                                     <a data-toggle="collapse" href="#familles-fonctions">*/
/*                                         <span class="glyphicon glyphicon-th-list"></span> Familles & Fonctions  <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <div id="familles-fonctions" class="panel-collapse collapse">*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="nav navbar-nav">*/
/*                                                 <li><a href="{{ path('familles') }}">Familles</a></li>*/
/*                                                 <li><a href="{{ path('fonctions') }}">Fonctions</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/*                                 <li class="panel panel-default" id="dropdown">*/
/*                                     <a data-toggle="collapse" href="#affichages">*/
/*                                         <span class="glyphicon glyphicon-picture"></span> Affichages <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <div id="affichages" class="panel-collapse collapse">*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="nav navbar-nav">*/
/*                                                 <li><a href="{{ path('afficheurs') }}">Afficheurs</a></li>*/
/*                                                 <li><a href="{{ path('technologiesAfficheur') }}">Technologies Afficheur</a></li>*/
/*                                                 <li><a href="{{ path('sousTechnologiesAfficheur') }}">Sous Technologies Afficheur</a></li>*/
/*                                                 <li><a href="{{ path('typesTdB') }}">Type Tableau de bord</a></li>*/
/*                                                 <li><a href="{{ path('formatsEcran') }}">Format écran</a></li>*/
/*                                                 <li><a href="{{ path('retoursActivation') }}">Type Retour Activation</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/* */
/*                                 <li class="panel panel-default" id="dropdown">*/
/*                                     <a data-toggle="collapse" href="#commandes">*/
/*                                         <span class="glyphicon glyphicon-cog"></span> Commandes <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <div id="commandes" class="panel-collapse collapse">*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="nav navbar-nav">*/
/*                                                 <li><a href="#">Commandes Physiques</a></li>*/
/*                                                 <li><a href="#">Localisations</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/*                                 <li class="panel panel-default" id="dropdown">*/
/*                                     <a data-toggle="collapse" href="#divers">*/
/*                                         <span class="glyphicon glyphicon-file"></span> Divers <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <div id="divers" class="panel-collapse collapse">*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="nav navbar-nav">*/
/*                                                 <li><a href="{{ path('segments') }}">Segment</a></li>*/
/*                                                 <li><a href="{{ path('motorisations') }}">Motorisation</a></li>*/
/*                                                 <li><a href="{{ path('marques') }}">Marque</a></li>*/
/*                                                 <li><a href="{{ path('boitesVitesse') }}">Boite à Vitesse</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/*                                 <li class="panel panel-default" id="dropdown">*/
/*                                     <a data-toggle="collapse" href="#vehicules">*/
/*                                         <span class="glyphicon glyphicon-road"></span> Véhicules  <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <div id="vehicules" class="panel-collapse collapse">*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="nav navbar-nav">*/
/*                                                 <li><a href="{{ path('vehicule_add') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter un véhicule</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/* */
/*                             </ul>*/
/*                         </div><!-- /.side-menu-container -->*/
/*                     </nav>*/
/*                 </div><!-- /.side-menu -->*/
/*             </div><!-- /.row -->*/
/*         </div><!-- /.col-md-2 sidebar -->*/
/* */
/*         <div class="col-md-10 content">*/
/*             <div class="panel panel-default">*/
/*                 {% block admin_body %}*/
/*                     <div class="panel-heading">*/
/*                         Tableau de bord*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <footer class="pull-left footer">*/
/*             <p class="col-md-12">*/
/*             <hr class="divider">*/
/*             Copyright &COPY; 2016 <a href="#">UET Système IHM Innovants</a>*/
/*             </p>*/
/*         </footer>*/
/*     </div>*/
/* */
/* */
/* */
/*     {% block javascripts %}*/
/* */
/*         {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>*/
/*         <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* */
/*         {% javascripts 'bundles/admin/js/simple-admin.js' filter='jsqueeze' %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
