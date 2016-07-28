<?php

/* @Benchmarking/Default/TechnologieAfficheur/form.html.twig */
class __TwigTemplate_795b12a219f1db78c1d4b087b572438055b6bcb51dd2e0e40bb186c5c743dced extends Twig_Template
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
        $__internal_9c68517e0a2cb0ae6a30d0bcf854f722e46607b1f01748abf2b18badc26efff3 = $this->env->getExtension("native_profiler");
        $__internal_9c68517e0a2cb0ae6a30d0bcf854f722e46607b1f01748abf2b18badc26efff3->enter($__internal_9c68517e0a2cb0ae6a30d0bcf854f722e46607b1f01748abf2b18badc26efff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/form.html.twig"));

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
        
        $__internal_9c68517e0a2cb0ae6a30d0bcf854f722e46607b1f01748abf2b18badc26efff3->leave($__internal_9c68517e0a2cb0ae6a30d0bcf854f722e46607b1f01748abf2b18badc26efff3_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TechnologieAfficheur/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TechnologieAfficheur/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
