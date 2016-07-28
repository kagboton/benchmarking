<?php

/* BenchmarkingBundle:Default:Vehicule/form.html.twig */
class __TwigTemplate_d29d5405d06f4160265b4f9dabf540f5edf792974906393f66db425434f3e01a extends Twig_Template
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
        $__internal_fd34a65b8920166830b01a9f20b0470007affeb25b7637e979c7b94c32131740 = $this->env->getExtension("native_profiler");
        $__internal_fd34a65b8920166830b01a9f20b0470007affeb25b7637e979c7b94c32131740->enter($__internal_fd34a65b8920166830b01a9f20b0470007affeb25b7637e979c7b94c32131740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/form.html.twig"));

        // line 2
        echo "

<div class=\"container\">
    <div class=\"stepwizard\">
        <div class=\"stepwizard-row setup-panel\">
            <div class=\"stepwizard-step\">
                <a href=\"#step-1\" type=\"button\" class=\"btn btn-primary btn-circle\">1</a>
                <p>Informations générales</p>
            </div>
            <div class=\"stepwizard-step\">
                <a href=\"#step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                <p>Composants</p>
            </div>
            <div class=\"stepwizard-step\">
                <a href=\"#step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                <p>Fonctions</p>
            </div>
        </div>
    </div>
    <form role=\"form\">
        <div class=\"row setup-content\" id=\"step-1\">
            <div class=\"col-xs-12\">
                <div class=\"col-md-12\">
                    <h4> Information générales</h4>
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segment", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motorisation", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boiteVitesse", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
                    </div>
                    <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Suivant</button>
                </div>
            </div>
        </div>
        <div class=\"row setup-content\" id=\"step-2\">
            <div class=\"col-xs-12\">
                <div class=\"col-md-12\">

                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "composantsAffichage", array()), 'row');
        echo "
                        <a href=\"#\" id=\"add_composantAffichage\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un composant</a>
                    </div>
                    <button class=\"btn btn-default prevBtn btn-lg pull-left\" type=\"button\" >Précédent</button>
                    <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Suivant</button>
                </div>
            </div>
        </div>
        <div class=\"row setup-content\" id=\"step-3\">
            <div class=\"col-xs-12\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctions", array()), 'row');
        echo "
                        <a href=\"#\" id=\"add_fonction\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une fonction</a>
                    </div>
                    <button class=\"btn btn-default prevBtn btn-lg pull-left\" type=\"button\" >Précédent</button>
                    <button class=\"btn btn-success btn-lg pull-right\" type=\"submit\">Finish!</button>


                    ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_fd34a65b8920166830b01a9f20b0470007affeb25b7637e979c7b94c32131740->leave($__internal_fd34a65b8920166830b01a9f20b0470007affeb25b7637e979c7b94c32131740_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 78,  123 => 71,  108 => 59,  94 => 48,  88 => 45,  82 => 42,  76 => 39,  70 => 36,  64 => 33,  58 => 30,  52 => 27,  48 => 26,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Vehicule/form.html.twig #}*/
/* */
/* */
/* <div class="container">*/
/*     <div class="stepwizard">*/
/*         <div class="stepwizard-row setup-panel">*/
/*             <div class="stepwizard-step">*/
/*                 <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>*/
/*                 <p>Informations générales</p>*/
/*             </div>*/
/*             <div class="stepwizard-step">*/
/*                 <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>*/
/*                 <p>Composants</p>*/
/*             </div>*/
/*             <div class="stepwizard-step">*/
/*                 <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>*/
/*                 <p>Fonctions</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <form role="form">*/
/*         <div class="row setup-content" id="step-1">*/
/*             <div class="col-xs-12">*/
/*                 <div class="col-md-12">*/
/*                     <h4> Information générales</h4>*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_row(form.nom) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.marque) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.segment) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.motorisation) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.boiteVitesse) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.annee) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(form.image) }}*/
/*                     </div>*/
/*                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row setup-content" id="step-2">*/
/*             <div class="col-xs-12">*/
/*                 <div class="col-md-12">*/
/* */
/*                     <div class="form-group">*/
/*                         {{  form_row(form.composantsAffichage) }}*/
/*                         <a href="#" id="add_composantAffichage" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter un composant</a>*/
/*                     </div>*/
/*                     <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Précédent</button>*/
/*                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row setup-content" id="step-3">*/
/*             <div class="col-xs-12">*/
/*                 <div class="col-md-12">*/
/*                     <div class="form-group">*/
/*                         {{  form_row(form.fonctions) }}*/
/*                         <a href="#" id="add_fonction" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter une fonction</a>*/
/*                     </div>*/
/*                     <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Précédent</button>*/
/*                     <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>*/
/* */
/* */
/*                     {{ form_end(form) }}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
