<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d9777ef5b08d5d7312f54cb09c4872126a2bec047ffbc62786635c7797268e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfbc217fd5e90460483e9d6880ee06e2111f0d8327ba21fff6b4c70f01adcf3b = $this->env->getExtension("native_profiler");
        $__internal_dfbc217fd5e90460483e9d6880ee06e2111f0d8327ba21fff6b4c70f01adcf3b->enter($__internal_dfbc217fd5e90460483e9d6880ee06e2111f0d8327ba21fff6b4c70f01adcf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbc217fd5e90460483e9d6880ee06e2111f0d8327ba21fff6b4c70f01adcf3b->leave($__internal_dfbc217fd5e90460483e9d6880ee06e2111f0d8327ba21fff6b4c70f01adcf3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a664b36bc2df0dd8b9275d9d0c6d6c4efcd95b76d040d6bf6b4481d69ba6dcd = $this->env->getExtension("native_profiler");
        $__internal_1a664b36bc2df0dd8b9275d9d0c6d6c4efcd95b76d040d6bf6b4481d69ba6dcd->enter($__internal_1a664b36bc2df0dd8b9275d9d0c6d6c4efcd95b76d040d6bf6b4481d69ba6dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
<title> Administrateur - Connexion</title>

    <div class=\"row\">

        <div class=\"modal-dialog\">
            <div class=\"loginmodal-container\">
                ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "                <h1>Accès Administrateur</h1>

                <br>

                <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <input type=\"text\" id=\"username\"  placeholder=\"Username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    <input type=\"password\" id=\"password\" class=\"form-control input-sm chat-input\" placeholder=\"Password\" name=\"_password\" required=\"required\" />
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </div>
                    <input type=\"submit\" class=\"login loginmodal-submit\" id=\"_submit\" name=\"login\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <div class=\"login-help\">
                        <a href=\"#\">S'inscrire</a> - <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu</a>
                    </div>

                </form>
            </div>

        </div>
    </div>


";
        
        $__internal_1a664b36bc2df0dd8b9275d9d0c6d6c4efcd95b76d040d6bf6b4481d69ba6dcd->leave($__internal_1a664b36bc2df0dd8b9275d9d0c6d6c4efcd95b76d040d6bf6b4481d69ba6dcd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6a794b02e27c5c86a2c3fb71430767fbaeb3d3fb259dbe7059291e73ef065a = $this->env->getExtension("native_profiler");
        $__internal_7a6a794b02e27c5c86a2c3fb71430767fbaeb3d3fb259dbe7059291e73ef065a->enter($__internal_7a6a794b02e27c5c86a2c3fb71430767fbaeb3d3fb259dbe7059291e73ef065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a52955_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a52955_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2a52955_modal-login_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "2a52955"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a52955") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2a52955.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
        
        $__internal_7a6a794b02e27c5c86a2c3fb71430767fbaeb3d3fb259dbe7059291e73ef065a->leave($__internal_7a6a794b02e27c5c86a2c3fb71430767fbaeb3d3fb259dbe7059291e73ef065a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 11,  125 => 9,  120 => 8,  114 => 7,  96 => 38,  91 => 36,  85 => 33,  78 => 29,  74 => 28,  69 => 26,  63 => 22,  57 => 20,  55 => 19,  46 => 12,  44 => 7,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/*     {% block stylesheets %}*/
/*         {% stylesheets 'bundles/admin/css/modal-login.css' filter='cssrewrite, scssphp'%}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*     {% endblock %}*/
/* */
/* <title> Administrateur - Connexion</title>*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="modal-dialog">*/
/*             <div class="loginmodal-container">*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger" role="alert">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                 <h1>Accès Administrateur</h1>*/
/* */
/*                 <br>*/
/* */
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <input type="text" id="username"  placeholder="Username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     <input type="password" id="password" class="form-control input-sm chat-input" placeholder="Password" name="_password" required="required" />*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on"> {{ 'security.login.remember_me'|trans }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <input type="submit" class="login loginmodal-submit" id="_submit" name="login" value="{{ 'security.login.submit'|trans }}" />*/
/*                     <div class="login-help">*/
/*                         <a href="#">S'inscrire</a> - <a href="{{ path('fos_user_resetting_request') }}">Mot de passe perdu</a>*/
/*                     </div>*/
/* */
/*                 </form>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
