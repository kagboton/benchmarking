<?php

/* @Utilisateurs/Default/modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_404630a96cbc206e742ad306d23c40e2fdfd5377e54a2e9f52e4648f2844fc6f extends Twig_Template
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
        $__internal_7983691fd20813aa5032fc1b49fd2f6b5f2e58ec520e512996f2cbbf0af5c41a = $this->env->getExtension("native_profiler");
        $__internal_7983691fd20813aa5032fc1b49fd2f6b5f2e58ec520e512996f2cbbf0af5c41a->enter($__internal_7983691fd20813aa5032fc1b49fd2f6b5f2e58ec520e512996f2cbbf0af5c41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_7983691fd20813aa5032fc1b49fd2f6b5f2e58ec520e512996f2cbbf0af5c41a->leave($__internal_7983691fd20813aa5032fc1b49fd2f6b5f2e58ec520e512996f2cbbf0af5c41a_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
