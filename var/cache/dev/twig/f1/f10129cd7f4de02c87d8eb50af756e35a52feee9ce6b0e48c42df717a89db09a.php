<?php

/* @Benchmarking/Default/FormatEcran/form.html.twig */
class __TwigTemplate_792f27010343718fd55e8f57a599a2884c6adb6e028d9424c663d238431b8896 extends Twig_Template
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
        $__internal_fa6733536c0d475f1260e5d2458aa0c538bdcaacbcfdf0faa159a1ade48550d3 = $this->env->getExtension("native_profiler");
        $__internal_fa6733536c0d475f1260e5d2458aa0c538bdcaacbcfdf0faa159a1ade48550d3->enter($__internal_fa6733536c0d475f1260e5d2458aa0c538bdcaacbcfdf0faa159a1ade48550d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/form.html.twig"));

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
        
        $__internal_fa6733536c0d475f1260e5d2458aa0c538bdcaacbcfdf0faa159a1ade48550d3->leave($__internal_fa6733536c0d475f1260e5d2458aa0c538bdcaacbcfdf0faa159a1ade48550d3_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FormatEcran/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
