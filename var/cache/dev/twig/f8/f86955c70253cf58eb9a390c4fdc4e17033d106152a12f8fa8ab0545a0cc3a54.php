<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_a0438a3aafa1590ca1e23bcb71ebe843f3c186476713fa0369c2714d0f017767 extends Twig_Template
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
        $__internal_da82454611606c6f6f4283f5b39c2898439b112aec0a406f65d85867b282eb0f = $this->env->getExtension("native_profiler");
        $__internal_da82454611606c6f6f4283f5b39c2898439b112aec0a406f65d85867b282eb0f->enter($__internal_da82454611606c6f6f4283f5b39c2898439b112aec0a406f65d85867b282eb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

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
        
        $__internal_da82454611606c6f6f4283f5b39c2898439b112aec0a406f65d85867b282eb0f->leave($__internal_da82454611606c6f6f4283f5b39c2898439b112aec0a406f65d85867b282eb0f_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig";
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
