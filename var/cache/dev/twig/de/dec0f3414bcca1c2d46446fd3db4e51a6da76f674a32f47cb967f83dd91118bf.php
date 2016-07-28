<?php

/* BenchmarkingBundle:Default:Vehicule/recherche.html.twig */
class __TwigTemplate_64441e2393372d8d4b0e1274048221f9553f54a80db269588a1cff7d419a5a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default:Vehicule/recherche.html.twig", 1);
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
        $__internal_d1b4b4148142c38d44d2d63fd3393454d1f65a2af83c22366dfbd5d0ce2eebbc = $this->env->getExtension("native_profiler");
        $__internal_d1b4b4148142c38d44d2d63fd3393454d1f65a2af83c22366dfbd5d0ce2eebbc->enter($__internal_d1b4b4148142c38d44d2d63fd3393454d1f65a2af83c22366dfbd5d0ce2eebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b4b4148142c38d44d2d63fd3393454d1f65a2af83c22366dfbd5d0ce2eebbc->leave($__internal_d1b4b4148142c38d44d2d63fd3393454d1f65a2af83c22366dfbd5d0ce2eebbc_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_67afdd9f4975d2cd107bb68b76194757f57452cb6efccbf89d25633a5e08c6be = $this->env->getExtension("native_profiler");
        $__internal_67afdd9f4975d2cd107bb68b76194757f57452cb6efccbf89d25633a5e08c6be->enter($__internal_67afdd9f4975d2cd107bb68b76194757f57452cb6efccbf89d25633a5e08c6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_67afdd9f4975d2cd107bb68b76194757f57452cb6efccbf89d25633a5e08c6be->leave($__internal_67afdd9f4975d2cd107bb68b76194757f57452cb6efccbf89d25633a5e08c6be_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/recherche.html.twig";
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
