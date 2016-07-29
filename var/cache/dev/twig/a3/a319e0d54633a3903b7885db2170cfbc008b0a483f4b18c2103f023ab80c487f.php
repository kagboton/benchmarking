<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_1f52bf9a997fa37b95475ccab2eab959f96e2e1b265c3ad461fe6adfb95b2c0f extends Twig_Template
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
        $__internal_f20a7c3397efbbdb14bbb0601ce65eade725eb3d531e5e84b9a9478f7c07d091 = $this->env->getExtension("native_profiler");
        $__internal_f20a7c3397efbbdb14bbb0601ce65eade725eb3d531e5e84b9a9478f7c07d091->enter($__internal_f20a7c3397efbbdb14bbb0601ce65eade725eb3d531e5e84b9a9478f7c07d091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        // line 103
        echo "        </div><!-- /.col-md-2 sidebar -->




        <div class=\"col-md-10 content\">
            <div class=\"panel panel-default\">
                ";
        // line 110
        $this->displayBlock('benchmarking_body', $context, $blocks);
        // line 113
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
        // line 126
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

    ";
        // line 129
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de0e6ae_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de0e6ae_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/de0e6ae_simple-admin_1.js");
            // line 130
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
        // line 132
        echo "
    ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "

</body>
</html>
";
        
        $__internal_f20a7c3397efbbdb14bbb0601ce65eade725eb3d531e5e84b9a9478f7c07d091->leave($__internal_f20a7c3397efbbdb14bbb0601ce65eade725eb3d531e5e84b9a9478f7c07d091_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_910b8996b4e5f4201fef38b090d9e15705c1913c6a13586fdb2d9573051b4227 = $this->env->getExtension("native_profiler");
        $__internal_910b8996b4e5f4201fef38b090d9e15705c1913c6a13586fdb2d9573051b4227->enter($__internal_910b8996b4e5f4201fef38b090d9e15705c1913c6a13586fdb2d9573051b4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Benchmarking";
        
        $__internal_910b8996b4e5f4201fef38b090d9e15705c1913c6a13586fdb2d9573051b4227->leave($__internal_910b8996b4e5f4201fef38b090d9e15705c1913c6a13586fdb2d9573051b4227_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9da88c2365147cdffa583cb44e36ed391a620fa79d44ac8234776af795f2202 = $this->env->getExtension("native_profiler");
        $__internal_c9da88c2365147cdffa583cb44e36ed391a620fa79d44ac8234776af795f2202->enter($__internal_c9da88c2365147cdffa583cb44e36ed391a620fa79d44ac8234776af795f2202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        
        $__internal_c9da88c2365147cdffa583cb44e36ed391a620fa79d44ac8234776af795f2202->leave($__internal_c9da88c2365147cdffa583cb44e36ed391a620fa79d44ac8234776af795f2202_prof);

    }

    // line 61
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_7dbebaaecb30c8f82a0f60d5f8a16c9ff45b163fadb9fc45f1bf963c1162fc36 = $this->env->getExtension("native_profiler");
        $__internal_7dbebaaecb30c8f82a0f60d5f8a16c9ff45b163fadb9fc45f1bf963c1162fc36->enter($__internal_7dbebaaecb30c8f82a0f60d5f8a16c9ff45b163fadb9fc45f1bf963c1162fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

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
                                    <li class=\"panel panel-default\" id=\"dropdown\">
                                        <a data-toggle=\"collapse\" href=\"#derniersAjouts\">
                                            <span class=\"glyphicon glyphicon-th-large\"></span>Derniers ajouts <span class=\"caret\"></span>
                                        </a>
                                        <div id=\"derniersAjouts\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                <ul class=\"nav navbar-nav\">
                                                    ";
        // line 79
        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class=\"panel panel-default\" id=\"dropdown\">
                                        <a data-toggle=\"collapse\" href=\"#vehicules\">
                                            <span class=\"glyphicon glyphicon-road\"></span>Véhicules <span class=\"caret\"></span>
                                        </a>
                                        <div id=\"vehicules\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                <ul class=\"nav navbar-nav\">
                                                    <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("vehicules");
        echo "\">Liste des véhicules</a></li>
                                                    <li><a href=\"";
        // line 92
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
        
        $__internal_7dbebaaecb30c8f82a0f60d5f8a16c9ff45b163fadb9fc45f1bf963c1162fc36->leave($__internal_7dbebaaecb30c8f82a0f60d5f8a16c9ff45b163fadb9fc45f1bf963c1162fc36_prof);

    }

    // line 110
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_541119d43c5fa10941ccee36df49e4a0777098f48a50da49019ab11326492a83 = $this->env->getExtension("native_profiler");
        $__internal_541119d43c5fa10941ccee36df49e4a0777098f48a50da49019ab11326492a83->enter($__internal_541119d43c5fa10941ccee36df49e4a0777098f48a50da49019ab11326492a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 111
        echo "
                ";
        
        $__internal_541119d43c5fa10941ccee36df49e4a0777098f48a50da49019ab11326492a83->leave($__internal_541119d43c5fa10941ccee36df49e4a0777098f48a50da49019ab11326492a83_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c59441527769c8448e5c967218268dd0a03a05a85b59bcf54f90f099cfd5a922 = $this->env->getExtension("native_profiler");
        $__internal_c59441527769c8448e5c967218268dd0a03a05a85b59bcf54f90f099cfd5a922->enter($__internal_c59441527769c8448e5c967218268dd0a03a05a85b59bcf54f90f099cfd5a922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        
        $__internal_c59441527769c8448e5c967218268dd0a03a05a85b59bcf54f90f099cfd5a922->leave($__internal_c59441527769c8448e5c967218268dd0a03a05a85b59bcf54f90f099cfd5a922_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 134,  292 => 133,  284 => 111,  278 => 110,  260 => 92,  256 => 91,  242 => 79,  224 => 62,  218 => 61,  211 => 19,  205 => 18,  193 => 6,  182 => 135,  180 => 133,  177 => 132,  163 => 130,  159 => 129,  154 => 126,  140 => 113,  138 => 110,  129 => 103,  127 => 61,  114 => 51,  106 => 46,  102 => 45,  92 => 38,  72 => 20,  70 => 18,  67 => 17,  53 => 15,  49 => 14,  44 => 12,  39 => 9,  34 => 6,  27 => 1,);
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
/*                                     <li class="panel panel-default" id="dropdown">*/
/*                                         <a data-toggle="collapse" href="#derniersAjouts">*/
/*                                             <span class="glyphicon glyphicon-th-large"></span>Derniers ajouts <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <div id="derniersAjouts" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">*/
/*                                                 <ul class="nav navbar-nav">*/
/*                                                     {#{{ render(controller("BenchmarkingBundle:Vehicule:menu", {'limit': 3})) }}#}*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
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
