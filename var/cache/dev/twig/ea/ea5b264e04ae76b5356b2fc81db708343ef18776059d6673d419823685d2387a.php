<?php

/* @Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_1ea3f7acb487ce098bfc92741f8dd6b12d658e943ff2d827232cff967acde2ca extends Twig_Template
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
        $__internal_1d08d5495347a9ea6b19b5cd5eaa701655521f5b6ef3ac87b981614dd9e95a0d = $this->env->getExtension("native_profiler");
        $__internal_1d08d5495347a9ea6b19b5cd5eaa701655521f5b6ef3ac87b981614dd9e95a0d->enter($__internal_1d08d5495347a9ea6b19b5cd5eaa701655521f5b6ef3ac87b981614dd9e95a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig"));

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
        
        $__internal_1d08d5495347a9ea6b19b5cd5eaa701655521f5b6ef3ac87b981614dd9e95a0d->leave($__internal_1d08d5495347a9ea6b19b5cd5eaa701655521f5b6ef3ac87b981614dd9e95a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig";
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
