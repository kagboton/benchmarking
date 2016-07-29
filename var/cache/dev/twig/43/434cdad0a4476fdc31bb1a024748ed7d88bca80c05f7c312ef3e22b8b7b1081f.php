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
        $__internal_0a6e4df03b52d665dfd43b0ecd0ab7ffed7e6de207b59e95210a69241c924f36 = $this->env->getExtension("native_profiler");
        $__internal_0a6e4df03b52d665dfd43b0ecd0ab7ffed7e6de207b59e95210a69241c924f36->enter($__internal_0a6e4df03b52d665dfd43b0ecd0ab7ffed7e6de207b59e95210a69241c924f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/formAdd.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> Informations générales</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>


</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'label');
        echo "</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_composantAffichage\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un composant</a>
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'label');
        echo "</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_fonction\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une fonction</a>
    </div>
</div>


    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'row');
        echo "




";
        
        $__internal_0a6e4df03b52d665dfd43b0ecd0ab7ffed7e6de207b59e95210a69241c924f36->leave($__internal_0a6e4df03b52d665dfd43b0ecd0ab7ffed7e6de207b59e95210a69241c924f36_prof);

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
        return array (  79 => 39,  75 => 38,  66 => 32,  59 => 28,  49 => 21,  42 => 17,  31 => 9,  22 => 2,);
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
/*         {{ form(form) }}*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title"> {{ form_label(form.composantsAffichage) }}</h4>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {{  form_row(form.composantsAffichage) }}*/
/*         <a href="#" id="add_composantAffichage" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter un composant</a>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title"> {{ form_label(form.fonctions) }}</h4>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {{  form_row(form.fonctions) }}*/
/*         <a href="#" id="add_fonction" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter une fonction</a>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/*     {{ form_rest(form) }}*/
/*     {{  form_row(form.enregistrer) }}*/
/* */
/* */
/* */
/* */
/* */
