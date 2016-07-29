<?php

/* @Benchmarking/Default/AfficheurExistant/form.html.twig */
class __TwigTemplate_5107fd52c114d44b6fea19c7525e80e9eb7f0e175e7ffd14ea19be66927f1333 extends Twig_Template
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
        $__internal_377f11166e71d1c58d778896901cb325279695f5c54225785c2cc5e112990f42 = $this->env->getExtension("native_profiler");
        $__internal_377f11166e71d1c58d778896901cb325279695f5c54225785c2cc5e112990f42->enter($__internal_377f11166e71d1c58d778896901cb325279695f5c54225785c2cc5e112990f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/form.html.twig"));

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
        
        $__internal_377f11166e71d1c58d778896901cb325279695f5c54225785c2cc5e112990f42->leave($__internal_377f11166e71d1c58d778896901cb325279695f5c54225785c2cc5e112990f42_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/AfficheurExistant/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
