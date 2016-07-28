<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig */
class __TwigTemplate_71a2ea28b1f760f4eb0765be57458f8c9bd8ffd8650ec62ad50588b4dd3c2d5a extends Twig_Template
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
        $__internal_10081f4444e0c80582829644741beb1d9102b24fd0694792256cd6929f42ba7c = $this->env->getExtension("native_profiler");
        $__internal_10081f4444e0c80582829644741beb1d9102b24fd0694792256cd6929f42ba7c->enter($__internal_10081f4444e0c80582829644741beb1d9102b24fd0694792256cd6929f42ba7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig"));

        // line 1
        echo "
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mot de passe</a>
        </li>

        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
        </li>
    </ul>";
        
        $__internal_10081f4444e0c80582829644741beb1d9102b24fd0694792256cd6929f42ba7c->leave($__internal_10081f4444e0c80582829644741beb1d9102b24fd0694792256cd6929f42ba7c_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* */
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mot de passe</a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*         </li>*/
/*     </ul>*/
