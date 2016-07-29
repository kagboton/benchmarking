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
        $__internal_f700e343c3a22675dee325718c5b2ca0f1e1f36843cbf446e05527570b086a6c = $this->env->getExtension("native_profiler");
        $__internal_f700e343c3a22675dee325718c5b2ca0f1e1f36843cbf446e05527570b086a6c->enter($__internal_f700e343c3a22675dee325718c5b2ca0f1e1f36843cbf446e05527570b086a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/formAdd.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> Informations générales</h4>
    </div>

    <div class=\"panel-body\">

        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_composantAffichage\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un composant</a>

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_fonction\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une fonction</a>

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'row');
        echo "


    </div>


</div>







";
        
        $__internal_f700e343c3a22675dee325718c5b2ca0f1e1f36843cbf446e05527570b086a6c->leave($__internal_f700e343c3a22675dee325718c5b2ca0f1e1f36843cbf446e05527570b086a6c_prof);

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
        return array (  54 => 20,  49 => 18,  43 => 15,  37 => 12,  32 => 10,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Vehicule/form.html.twig #}*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title"> Informations générales</h4>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/* */
/*         {{ form(form) }}*/
/* */
/*         {{  form_row(form.composantsAffichage) }}*/
/*         <a href="#" id="add_composantAffichage" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter un composant</a>*/
/* */
/*         {{  form_row(form.fonctions) }}*/
/*         <a href="#" id="add_fonction" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter une fonction</a>*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         {{form_row(form.enregistrer) }}*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
