<?php

/* @Benchmarking/Default/Recherche/layout/recherche.html.twig */
class __TwigTemplate_54753d3315f2843b17025e45001fde0350ab0f5509e2e565b5a2793c63fa484f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Recherche/layout/recherche.html.twig", 1);
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
        $__internal_6d3d87d99aa169354b08aa0373fabee48ea6bc20a222fe3cad0fe0ceee80b3cb = $this->env->getExtension("native_profiler");
        $__internal_6d3d87d99aa169354b08aa0373fabee48ea6bc20a222fe3cad0fe0ceee80b3cb->enter($__internal_6d3d87d99aa169354b08aa0373fabee48ea6bc20a222fe3cad0fe0ceee80b3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Recherche/layout/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d3d87d99aa169354b08aa0373fabee48ea6bc20a222fe3cad0fe0ceee80b3cb->leave($__internal_6d3d87d99aa169354b08aa0373fabee48ea6bc20a222fe3cad0fe0ceee80b3cb_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_8b416d8bb8e59e94f0564a8fd75d54150c3f39fd32072bf9b7b649fbb5334ce2 = $this->env->getExtension("native_profiler");
        $__internal_8b416d8bb8e59e94f0564a8fd75d54150c3f39fd32072bf9b7b649fbb5334ce2->enter($__internal_8b416d8bb8e59e94f0564a8fd75d54150c3f39fd32072bf9b7b649fbb5334ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span9\">
                <h2 style=\"text-align: center\">Effectuer une recherche de véhicules</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner \">
                        <div class=\"well\">

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Catégorie</label>
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
                                <label class=\"col-sm-2 control-label\">Marque</label>
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
                                <label class=\"col-sm-2 control-label\">Année</label>
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_8b416d8bb8e59e94f0564a8fd75d54150c3f39fd32072bf9b7b649fbb5334ce2->leave($__internal_8b416d8bb8e59e94f0564a8fd75d54150c3f39fd32072bf9b7b649fbb5334ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Recherche/layout/recherche.html.twig";
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
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span9">*/
/*                 <h2 style="text-align: center">Effectuer une recherche de véhicules</h2>*/
/*                 <div id="collapseOne" class="accordion-body collapse in">*/
/*                     <div class="accordion-inner ">*/
/*                         <div class="well">*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">Catégorie</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select class="form-control">*/
/*                                         <option>Citadine</option>*/
/*                                         <option>Berline</option>*/
/*                                         <option>Cabriolet</option>*/
/*                                         <option>Monospace</option>*/
/*                                         <option>CrossOver</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">Marque</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select class="form-control">*/
/*                                         <option>Renault</option>*/
/*                                         <option>Citroën</option>*/
/*                                         <option>Peugeot</option>*/
/*                                         <option>Toyota</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">Année</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select class="form-control">*/
/*                                         <option>2016</option>*/
/*                                         <option>2015</option>*/
/*                                         <option>2014</option>*/
/*                                         <option>2013</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-2 col-sm-10">*/
/*                                     <button type="submit" class="btn btn-default">Rechercher</button>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
