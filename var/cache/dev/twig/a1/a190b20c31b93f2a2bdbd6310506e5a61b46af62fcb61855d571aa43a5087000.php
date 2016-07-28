<?php

/* @Benchmarking/Default/ComposantAffichage/form.html.twig */
class __TwigTemplate_3e21e6ce4d5d66a68f3acde3f3055e19406a7d12e12714d38ebc66d7961c3ba9 extends Twig_Template
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
        $__internal_7c12f6a88b0cb685629d47917884f3aa5fee47b513d111f5d820822ea72cce17 = $this->env->getExtension("native_profiler");
        $__internal_7c12f6a88b0cb685629d47917884f3aa5fee47b513d111f5d820822ea72cce17->enter($__internal_7c12f6a88b0cb685629d47917884f3aa5fee47b513d111f5d820822ea72cce17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/form.html.twig"));

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
        
        $__internal_7c12f6a88b0cb685629d47917884f3aa5fee47b513d111f5d820822ea72cce17->leave($__internal_7c12f6a88b0cb685629d47917884f3aa5fee47b513d111f5d820822ea72cce17_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/ComposantAffichage/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
