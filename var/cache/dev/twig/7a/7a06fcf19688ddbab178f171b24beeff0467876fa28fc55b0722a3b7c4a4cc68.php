<?php

/* @Benchmarking/Default/SousTechnologieAfficheur/form.html.twig */
class __TwigTemplate_834fbd25f997d8c7a0274526f849810460d1e4b358ca1ffe7b3d6047c371eafa extends Twig_Template
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
        $__internal_911cafae8b360d17817809ea7acd3dba338f2172210076f486cb3e8aad47fa70 = $this->env->getExtension("native_profiler");
        $__internal_911cafae8b360d17817809ea7acd3dba338f2172210076f486cb3e8aad47fa70->enter($__internal_911cafae8b360d17817809ea7acd3dba338f2172210076f486cb3e8aad47fa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/form.html.twig"));

        // line 2
        echo "

";
        // line 6
        echo "<div class=\"well\">
  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_911cafae8b360d17817809ea7acd3dba338f2172210076f486cb3e8aad47fa70->leave($__internal_911cafae8b360d17817809ea7acd3dba338f2172210076f486cb3e8aad47fa70_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/SousTechnologieAfficheur/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  26 => 6,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/SousTechnologieAfficheur/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
