<?php

/* @Benchmarking/Default/TypeTdB/form.html.twig */
class __TwigTemplate_781e3b2da74d5303e5c6c324a7c6e029d2cd7619ffd330d6ee1825e2821258f3 extends Twig_Template
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
        $__internal_4c875e32fca8e49641ab2eb88a5634fcc780636f7f4397edc53fb35476765a42 = $this->env->getExtension("native_profiler");
        $__internal_4c875e32fca8e49641ab2eb88a5634fcc780636f7f4397edc53fb35476765a42->enter($__internal_4c875e32fca8e49641ab2eb88a5634fcc780636f7f4397edc53fb35476765a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/form.html.twig"));

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
        
        $__internal_4c875e32fca8e49641ab2eb88a5634fcc780636f7f4397edc53fb35476765a42->leave($__internal_4c875e32fca8e49641ab2eb88a5634fcc780636f7f4397edc53fb35476765a42_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeTdB/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeTdB/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
