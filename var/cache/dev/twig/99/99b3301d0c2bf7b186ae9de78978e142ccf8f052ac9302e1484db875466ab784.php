<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:form.html.twig */
class __TwigTemplate_b98260b526da95edbffa69d67391eb5960205a840608e5d6dfd37ba398d44abd extends Twig_Template
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
        $__internal_ba842f93942661aa35880439469e2dda6251bb76d07816fb755f923a9940ad42 = $this->env->getExtension("native_profiler");
        $__internal_ba842f93942661aa35880439469e2dda6251bb76d07816fb755f923a9940ad42->enter($__internal_ba842f93942661aa35880439469e2dda6251bb76d07816fb755f923a9940ad42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:form.html.twig"));

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
        
        $__internal_ba842f93942661aa35880439469e2dda6251bb76d07816fb755f923a9940ad42->leave($__internal_ba842f93942661aa35880439469e2dda6251bb76d07816fb755f923a9940ad42_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:form.html.twig";
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