<?php

/* BenchmarkingBundle:Default/Recherche/layout:recherche.html.twig */
class __TwigTemplate_146142338a9cbe57db9c78542507530c42ae33c6467d3b51fb98c104fda2cba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Recherche/layout:recherche.html.twig", 1);
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
        $__internal_fd03f14f68ebadc77422c0943740833a24a8877b241dd6567729a46c57831f9b = $this->env->getExtension("native_profiler");
        $__internal_fd03f14f68ebadc77422c0943740833a24a8877b241dd6567729a46c57831f9b->enter($__internal_fd03f14f68ebadc77422c0943740833a24a8877b241dd6567729a46c57831f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Recherche/layout:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd03f14f68ebadc77422c0943740833a24a8877b241dd6567729a46c57831f9b->leave($__internal_fd03f14f68ebadc77422c0943740833a24a8877b241dd6567729a46c57831f9b_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_b9317df1c4f1d89b87085fdefe90a3ff2aa18edeb7b11a97cbbd0f03a722577e = $this->env->getExtension("native_profiler");
        $__internal_b9317df1c4f1d89b87085fdefe90a3ff2aa18edeb7b11a97cbbd0f03a722577e->enter($__internal_b9317df1c4f1d89b87085fdefe90a3ff2aa18edeb7b11a97cbbd0f03a722577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_b9317df1c4f1d89b87085fdefe90a3ff2aa18edeb7b11a97cbbd0f03a722577e->leave($__internal_b9317df1c4f1d89b87085fdefe90a3ff2aa18edeb7b11a97cbbd0f03a722577e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Recherche/layout:recherche.html.twig";
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
