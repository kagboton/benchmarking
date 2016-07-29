<?php

/* @Benchmarking/Default/Vehicule/recherche.html.twig */
class __TwigTemplate_2bc0d27803aae00f9874fb4b4f028783763ce8b478ec84324b4153015225c1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Vehicule/recherche.html.twig", 1);
        $this->blocks = array(
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427df35c9e538cf7b01c8058bc7a6644afa5720719c45605a847c245ad0f72a8 = $this->env->getExtension("native_profiler");
        $__internal_427df35c9e538cf7b01c8058bc7a6644afa5720719c45605a847c245ad0f72a8->enter($__internal_427df35c9e538cf7b01c8058bc7a6644afa5720719c45605a847c245ad0f72a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Vehicule/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_427df35c9e538cf7b01c8058bc7a6644afa5720719c45605a847c245ad0f72a8->leave($__internal_427df35c9e538cf7b01c8058bc7a6644afa5720719c45605a847c245ad0f72a8_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_956766f65b38a70864182401ce9adefb396b90653540a54c731ac4e898eb5709 = $this->env->getExtension("native_profiler");
        $__internal_956766f65b38a70864182401ce9adefb396b90653540a54c731ac4e898eb5709->enter($__internal_956766f65b38a70864182401ce9adefb396b90653540a54c731ac4e898eb5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 4
        echo "
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Rechercher véhicules</h2>
    </div>

    <div class=\"panel-body\">

        <form class=\"form-horizontal\">
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Segment</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control\">
                        <option>Citadine</option>
                        <option>Berline</option>
                        <option>Cabriolet</option>
                        <option>Monospace</option>
                        <option>CrossOver</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Marque</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control\">
                        <option>Renault</option>
                        <option>Citroën</option>
                        <option>Peugeot</option>
                        <option>Toyota</option>
                    </select>
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Annee</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control\">
                        <option>2016</option>
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                    </select>
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default\">Rechercher</button>
                </div>
            </div>
        </form>
     </div>

";
        
        $__internal_956766f65b38a70864182401ce9adefb396b90653540a54c731ac4e898eb5709->leave($__internal_956766f65b38a70864182401ce9adefb396b90653540a54c731ac4e898eb5709_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Vehicule/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">Rechercher véhicules</h2>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/* */
/*         <form class="form-horizontal">*/
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Segment</label>*/
/*                 <div class="col-sm-10">*/
/*                     <select class="form-control">*/
/*                         <option>Citadine</option>*/
/*                         <option>Berline</option>*/
/*                         <option>Cabriolet</option>*/
/*                         <option>Monospace</option>*/
/*                         <option>CrossOver</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Marque</label>*/
/*                 <div class="col-sm-10">*/
/*                     <select class="form-control">*/
/*                         <option>Renault</option>*/
/*                         <option>Citroën</option>*/
/*                         <option>Peugeot</option>*/
/*                         <option>Toyota</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Annee</label>*/
/*                 <div class="col-sm-10">*/
/*                     <select class="form-control">*/
/*                         <option>2016</option>*/
/*                         <option>2015</option>*/
/*                         <option>2014</option>*/
/*                         <option>2013</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <div class="col-sm-offset-2 col-sm-10">*/
/*                     <button type="submit" class="btn btn-default">Rechercher</button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*      </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
