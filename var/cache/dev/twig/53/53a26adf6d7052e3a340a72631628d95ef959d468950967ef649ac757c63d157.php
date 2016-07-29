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
        $__internal_745bf9ae5bbf6864df5caa37734cba983abe1f841d9819241b2f5eb20d8a2bf6 = $this->env->getExtension("native_profiler");
        $__internal_745bf9ae5bbf6864df5caa37734cba983abe1f841d9819241b2f5eb20d8a2bf6->enter($__internal_745bf9ae5bbf6864df5caa37734cba983abe1f841d9819241b2f5eb20d8a2bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/form.html.twig"));

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
        
        $__internal_745bf9ae5bbf6864df5caa37734cba983abe1f841d9819241b2f5eb20d8a2bf6->leave($__internal_745bf9ae5bbf6864df5caa37734cba983abe1f841d9819241b2f5eb20d8a2bf6_prof);

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
