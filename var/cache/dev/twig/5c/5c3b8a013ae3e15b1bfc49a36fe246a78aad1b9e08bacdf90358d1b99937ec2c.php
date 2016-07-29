<?php

/* @Benchmarking/Default/TailleEcran/form.html.twig */
class __TwigTemplate_435d6b2d4d9b89ecba0e136295fc4017c17d26d69bbc36ef582d09b421b32d91 extends Twig_Template
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
        $__internal_b385220c22bb7e60a5e30930a2314f45e7068caebc42b23459ac88b8b83e84b2 = $this->env->getExtension("native_profiler");
        $__internal_b385220c22bb7e60a5e30930a2314f45e7068caebc42b23459ac88b8b83e84b2->enter($__internal_b385220c22bb7e60a5e30930a2314f45e7068caebc42b23459ac88b8b83e84b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/form.html.twig"));

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
        
        $__internal_b385220c22bb7e60a5e30930a2314f45e7068caebc42b23459ac88b8b83e84b2->leave($__internal_b385220c22bb7e60a5e30930a2314f45e7068caebc42b23459ac88b8b83e84b2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TailleEcran/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
