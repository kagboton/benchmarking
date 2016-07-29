<?php

/* BenchmarkingBundle:Default:Vehicule/formAdd.html.twig */
class __TwigTemplate_7f4244543f4910ed10c31840bef968e60459080437c8f6c526a920551b226594 extends Twig_Template
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
        $__internal_cbe8c5021ee7e16a7005440262c155761934d08e2257a52813ec8dbf99c9eda4 = $this->env->getExtension("native_profiler");
        $__internal_cbe8c5021ee7e16a7005440262c155761934d08e2257a52813ec8dbf99c9eda4->enter($__internal_cbe8c5021ee7e16a7005440262c155761934d08e2257a52813ec8dbf99c9eda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/formAdd.html.twig"));

        // line 2
        echo "
<div class=\"well\">
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "


        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_composantAffichage\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un composant</a>


        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_fonction\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une fonction</a>

</div>

";
        
        $__internal_cbe8c5021ee7e16a7005440262c155761934d08e2257a52813ec8dbf99c9eda4->leave($__internal_cbe8c5021ee7e16a7005440262c155761934d08e2257a52813ec8dbf99c9eda4_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/formAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  32 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Vehicule/form.html.twig #}*/
/* */
/* <div class="well">*/
/*     {{ form(form) }}*/
/* */
/* */
/*         {{  form_row(form.composantsAffichage) }}*/
/*         <a href="#" id="add_composantAffichage" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter un composant</a>*/
/* */
/* */
/*         {{  form_row(form.fonctions) }}*/
/*         <a href="#" id="add_fonction" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter une fonction</a>*/
/* */
/* </div>*/
/* */
/* */
