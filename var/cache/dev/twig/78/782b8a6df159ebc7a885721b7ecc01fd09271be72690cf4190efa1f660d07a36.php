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
        $__internal_a5c8e30f9f69ccd7decd90758dd3587c574f2f4888152bdf690b0633e0a7125d = $this->env->getExtension("native_profiler");
        $__internal_a5c8e30f9f69ccd7decd90758dd3587c574f2f4888152bdf690b0633e0a7125d->enter($__internal_a5c8e30f9f69ccd7decd90758dd3587c574f2f4888152bdf690b0633e0a7125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_a5c8e30f9f69ccd7decd90758dd3587c574f2f4888152bdf690b0633e0a7125d->leave($__internal_a5c8e30f9f69ccd7decd90758dd3587c574f2f4888152bdf690b0633e0a7125d_prof);

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
