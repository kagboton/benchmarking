<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig */
class __TwigTemplate_9186c1d6c9b3c6c6049c9e72cd63b1b6a95b37615b00cea6f4a415da19db4312 extends Twig_Template
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
        $__internal_f084c55823e4bab07df8e6b7ea168ad029f5136774461390a9e110f64f357a4f = $this->env->getExtension("native_profiler");
        $__internal_f084c55823e4bab07df8e6b7ea168ad029f5136774461390a9e110f64f357a4f->enter($__internal_f084c55823e4bab07df8e6b7ea168ad029f5136774461390a9e110f64f357a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig"));

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
        
        $__internal_f084c55823e4bab07df8e6b7ea168ad029f5136774461390a9e110f64f357a4f->leave($__internal_f084c55823e4bab07df8e6b7ea168ad029f5136774461390a9e110f64f357a4f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig";
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
