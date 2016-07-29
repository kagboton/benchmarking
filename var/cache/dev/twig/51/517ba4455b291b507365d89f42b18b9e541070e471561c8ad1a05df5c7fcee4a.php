<?php

/* layout/layout.html.twig */
class __TwigTemplate_ccad4ddb16df92c0304f2d968bf76bfb2090cc3a8bd5119ed419933f68db8e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'side_menu' => array($this, 'block_side_menu'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1513235fb10c981e5e9c93662becf9962331a62bb3fc17a7b4da0e207104c9f2 = $this->env->getExtension("native_profiler");
        $__internal_1513235fb10c981e5e9c93662becf9962331a62bb3fc17a7b4da0e207104c9f2->enter($__internal_1513235fb10c981e5e9c93662becf9962331a62bb3fc17a7b4da0e207104c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7f3a91_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7f3a91_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7f3a91_simple-user_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "e7f3a91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7f3a91") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7f3a91.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
</head>

<body>

    <nav class=\"navbar navbar-default navbar-static-top\">
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("benchmarking_homepage");
        echo "\">Outil de benchmarking IHM</a>
            </div><!-- /.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("vehicules");
        echo "\" class=\"\">Liste des véhicules</a></li>
                        <li class=\"\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("vehicule_recherche");
        echo "\" class=\"\">Rechercher des véhicules</a></li>
                        <li class=\"\"><a href=\"#\" class=\"\">Comparer des véhicules</a></li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-lock\"></span> Administration</a></li>
                    </ul>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <div class=\"container-fluid main-container\">
        <div class=\"col-md-2 sidebar\">
            ";
        // line 61
        $this->displayBlock('side_menu', $context, $blocks);
        // line 91
        echo "        </div><!-- /.col-md-2 sidebar -->




        <div class=\"col-md-10 content\">
            <div class=\"panel panel-default\">
                ";
        // line 98
        $this->displayBlock('benchmarking_body', $context, $blocks);
        // line 101
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
        // line 114
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

    ";
        // line 117
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de0e6ae_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0e6ae_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/de0e6ae_simple-admin_1.js");
            // line 118
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "de0e6ae"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0e6ae") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/de0e6ae.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 120
        echo "
    ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "

</body>
</html>
";
        
        $__internal_1513235fb10c981e5e9c93662becf9962331a62bb3fc17a7b4da0e207104c9f2->leave($__internal_1513235fb10c981e5e9c93662becf9962331a62bb3fc17a7b4da0e207104c9f2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e76f7ed72a8b08e8212279031b1ddd7bdf5801ec3178c0616700b48df2e273c = $this->env->getExtension("native_profiler");
        $__internal_9e76f7ed72a8b08e8212279031b1ddd7bdf5801ec3178c0616700b48df2e273c->enter($__internal_9e76f7ed72a8b08e8212279031b1ddd7bdf5801ec3178c0616700b48df2e273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Benchmarking";
        
        $__internal_9e76f7ed72a8b08e8212279031b1ddd7bdf5801ec3178c0616700b48df2e273c->leave($__internal_9e76f7ed72a8b08e8212279031b1ddd7bdf5801ec3178c0616700b48df2e273c_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88ca6e1f9f884f465833fb733e2720157948ef0d71f0d3303ab61898fc1ef9f0 = $this->env->getExtension("native_profiler");
        $__internal_88ca6e1f9f884f465833fb733e2720157948ef0d71f0d3303ab61898fc1ef9f0->enter($__internal_88ca6e1f9f884f465833fb733e2720157948ef0d71f0d3303ab61898fc1ef9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        
        $__internal_88ca6e1f9f884f465833fb733e2720157948ef0d71f0d3303ab61898fc1ef9f0->leave($__internal_88ca6e1f9f884f465833fb733e2720157948ef0d71f0d3303ab61898fc1ef9f0_prof);

    }

    // line 61
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_74f6301516cb1e673c2592053d30f1821a108e25febf562ca89d3c35c5cace50 = $this->env->getExtension("native_profiler");
        $__internal_74f6301516cb1e673c2592053d30f1821a108e25febf562ca89d3c35c5cace50->enter($__internal_74f6301516cb1e673c2592053d30f1821a108e25febf562ca89d3c35c5cace50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        // line 62
        echo "                <div class=\"row\">
                    <!-- uncomment code for absolute positioning tweek see top comment in css -->
                    <div class=\"absolute-wrapper\"> </div>
                    <!-- Menu -->
                    <div class=\"side-menu\">
                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                            <!-- Main Menu -->
                            <div class=\"side-menu-container\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-th-large\"></span>Récemment ajoutés</a></li>
                                    <li class=\"panel panel-default\" id=\"dropdown\">
                                        <a data-toggle=\"collapse\" href=\"#vehicules\">
                                            <span class=\"glyphicon glyphicon-road\"></span>Véhicules <span class=\"caret\"></span>
                                        </a>
                                        <div id=\"vehicules\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                <ul class=\"nav navbar-nav\">
                                                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("vehicules");
        echo "\">Liste des véhicules</a></li>
                                                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("vehicule_recherche");
        echo "\">Rechercher un véhicule</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.side-menu-container -->
                        </nav>
                    </div><!-- /.side-menu -->
                </div><!-- /.row -->
            ";
        
        $__internal_74f6301516cb1e673c2592053d30f1821a108e25febf562ca89d3c35c5cace50->leave($__internal_74f6301516cb1e673c2592053d30f1821a108e25febf562ca89d3c35c5cace50_prof);

    }

    // line 98
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_04bbe12bfcfbe531b1b4326d6b9a298baf799d83bb7a9d1e3a84bc7183448121 = $this->env->getExtension("native_profiler");
        $__internal_04bbe12bfcfbe531b1b4326d6b9a298baf799d83bb7a9d1e3a84bc7183448121->enter($__internal_04bbe12bfcfbe531b1b4326d6b9a298baf799d83bb7a9d1e3a84bc7183448121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 99
        echo "
                ";
        
        $__internal_04bbe12bfcfbe531b1b4326d6b9a298baf799d83bb7a9d1e3a84bc7183448121->leave($__internal_04bbe12bfcfbe531b1b4326d6b9a298baf799d83bb7a9d1e3a84bc7183448121_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cb8a692449b71da061dfde49c68b1b9886bd7df41d754faaff511b38c10e12d = $this->env->getExtension("native_profiler");
        $__internal_3cb8a692449b71da061dfde49c68b1b9886bd7df41d754faaff511b38c10e12d->enter($__internal_3cb8a692449b71da061dfde49c68b1b9886bd7df41d754faaff511b38c10e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        
        $__internal_3cb8a692449b71da061dfde49c68b1b9886bd7df41d754faaff511b38c10e12d->leave($__internal_3cb8a692449b71da061dfde49c68b1b9886bd7df41d754faaff511b38c10e12d_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 122,  279 => 121,  271 => 99,  265 => 98,  247 => 80,  243 => 79,  224 => 62,  218 => 61,  211 => 19,  205 => 18,  193 => 6,  182 => 123,  180 => 121,  177 => 120,  163 => 118,  159 => 117,  154 => 114,  140 => 101,  138 => 98,  129 => 91,  127 => 61,  114 => 51,  106 => 46,  102 => 45,  92 => 38,  72 => 20,  70 => 18,  67 => 17,  53 => 15,  49 => 14,  44 => 12,  39 => 9,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Benchmarking{% endblock %}</title>*/
/* */
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {% stylesheets 'bundles/benchmarking/css/simple-user.css' filter='cssrewrite, scssphp'%}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* */
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <nav class="navbar navbar-default navbar-static-top">*/
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
/*                 <a class="navbar-brand" href="{{ path('benchmarking_homepage') }}">Outil de benchmarking IHM</a>*/
/*             </div><!-- /.navbar-header -->*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{ path('vehicules') }}" class="">Liste des véhicules</a></li>*/
/*                         <li class=""><a href="{{ path('vehicule_recherche') }}" class="">Rechercher des véhicules</a></li>*/
/*                         <li class=""><a href="#" class="">Comparer des véhicules</a></li>*/
/*                     </ul>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class=""><a href="{{ path('admin_homepage') }}" target="_blank"><span class="glyphicon glyphicon-lock"></span> Administration</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/* */
/*     <div class="container-fluid main-container">*/
/*         <div class="col-md-2 sidebar">*/
/*             {% block side_menu %}*/
/*                 <div class="row">*/
/*                     <!-- uncomment code for absolute positioning tweek see top comment in css -->*/
/*                     <div class="absolute-wrapper"> </div>*/
/*                     <!-- Menu -->*/
/*                     <div class="side-menu">*/
/*                         <nav class="navbar navbar-default" role="navigation">*/
/*                             <!-- Main Menu -->*/
/*                             <div class="side-menu-container">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li class="active"><a href="#"><span class="glyphicon glyphicon-th-large"></span>Récemment ajoutés</a></li>*/
/*                                     <li class="panel panel-default" id="dropdown">*/
/*                                         <a data-toggle="collapse" href="#vehicules">*/
/*                                             <span class="glyphicon glyphicon-road"></span>Véhicules <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <div id="vehicules" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">*/
/*                                                 <ul class="nav navbar-nav">*/
/*                                                     <li><a href="{{ path('vehicules') }}">Liste des véhicules</a></li>*/
/*                                                     <li><a href="{{ path('vehicule_recherche') }}">Rechercher un véhicule</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div><!-- /.side-menu-container -->*/
/*                         </nav>*/
/*                     </div><!-- /.side-menu -->*/
/*                 </div><!-- /.row -->*/
/*             {% endblock %}*/
/*         </div><!-- /.col-md-2 sidebar -->*/
/* */
/* */
/* */
/* */
/*         <div class="col-md-10 content">*/
/*             <div class="panel panel-default">*/
/*                 {% block benchmarking_body %}*/
/* */
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
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
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* */
/*     {% javascripts 'bundles/admin/js/simple-admin.js' filter='jsqueeze' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */
