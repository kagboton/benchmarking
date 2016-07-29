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
        $__internal_8255f0f2bdfcd4ef51136e6a839df80d5219f427fdce52b73d8bf278b52e0ea1 = $this->env->getExtension("native_profiler");
        $__internal_8255f0f2bdfcd4ef51136e6a839df80d5219f427fdce52b73d8bf278b52e0ea1->enter($__internal_8255f0f2bdfcd4ef51136e6a839df80d5219f427fdce52b73d8bf278b52e0ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/formAdd.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> Informations générales</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segment", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motorisation", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boiteVitesse", array()), 'row');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
        </div>
    </div>


</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'label');
        echo "</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_composantAffichage\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un composant</a>
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\"> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'label');
        echo "</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'row');
        echo "
        <a href=\"#\" id=\"add_fonction\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une fonction</a>
    </div>
</div>

    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'row');
        echo "

";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_8255f0f2bdfcd4ef51136e6a839df80d5219f427fdce52b73d8bf278b52e0ea1->leave($__internal_8255f0f2bdfcd4ef51136e6a839df80d5219f427fdce52b73d8bf278b52e0ea1_prof);

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
        return array (  132 => 65,  127 => 63,  122 => 61,  114 => 56,  107 => 52,  97 => 45,  90 => 41,  78 => 32,  71 => 28,  65 => 25,  59 => 22,  53 => 19,  47 => 16,  41 => 13,  35 => 10,  31 => 9,  22 => 2,);
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
/*         {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             {{ form_row(form.nom) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.marque) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.annee) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.segment) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.motorisation) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.boiteVitesse) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_row(form.image) }}*/
/*         </div>*/
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
/*     {{ form_rest(form) }}*/
/* */
/*     {{  form_row(form.enregistrer) }}*/
/* */
/* {{ form_end(form) }}*/
/* */
/* */
/* */
