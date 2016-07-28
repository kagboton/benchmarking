<?php

/* @Benchmarking/Default/TypeRetourActivation/form.html.twig */
class __TwigTemplate_3468b4a18f210e090d0c4a46a2199884e45ede5d1268f0be2450ff3af9f4c007 extends Twig_Template
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
        $__internal_d7ee63709e0f1db7acd7888846c33d8e0c3861208f8b8c7b5c210d773fc6ee20 = $this->env->getExtension("native_profiler");
        $__internal_d7ee63709e0f1db7acd7888846c33d8e0c3861208f8b8c7b5c210d773fc6ee20->enter($__internal_d7ee63709e0f1db7acd7888846c33d8e0c3861208f8b8c7b5c210d773fc6ee20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/form.html.twig"));

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
        
        $__internal_d7ee63709e0f1db7acd7888846c33d8e0c3861208f8b8c7b5c210d773fc6ee20->leave($__internal_d7ee63709e0f1db7acd7888846c33d8e0c3861208f8b8c7b5c210d773fc6ee20_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeRetourActivation/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
