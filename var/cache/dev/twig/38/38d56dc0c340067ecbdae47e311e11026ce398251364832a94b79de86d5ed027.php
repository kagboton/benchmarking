<?php

/* BenchmarkingBundle:Default/TailleEcran:form.html.twig */
class __TwigTemplate_42c66c9ccc9e337d89280bddd4f2c0c8c644c59cba81d92fab87a957283aed4c extends Twig_Template
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
        $__internal_f96b0516aa2059d9dc19b05942c90d2af05dcb346d027dfbfcbaa061b1700bad = $this->env->getExtension("native_profiler");
        $__internal_f96b0516aa2059d9dc19b05942c90d2af05dcb346d027dfbfcbaa061b1700bad->enter($__internal_f96b0516aa2059d9dc19b05942c90d2af05dcb346d027dfbfcbaa061b1700bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:form.html.twig"));

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
        
        $__internal_f96b0516aa2059d9dc19b05942c90d2af05dcb346d027dfbfcbaa061b1700bad->leave($__internal_f96b0516aa2059d9dc19b05942c90d2af05dcb346d027dfbfcbaa061b1700bad_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TailleEcran:form.html.twig";
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
