<?php

/* BenchmarkingBundle:Default/Motorisation:view.html.twig */
class __TwigTemplate_318a816645d65480943f22c65d8cd543738106ad0499e39357cc3e0b751c72ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Motorisation:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd5d87e7677f04dee587fac4e4790e3793de29740009be3a1a3e713d33fbfb3a = $this->env->getExtension("native_profiler");
        $__internal_bd5d87e7677f04dee587fac4e4790e3793de29740009be3a1a3e713d33fbfb3a->enter($__internal_bd5d87e7677f04dee587fac4e4790e3793de29740009be3a1a3e713d33fbfb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Motorisation:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5d87e7677f04dee587fac4e4790e3793de29740009be3a1a3e713d33fbfb3a->leave($__internal_bd5d87e7677f04dee587fac4e4790e3793de29740009be3a1a3e713d33fbfb3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f34554c250ab593a6e766d77cd5167d246e21c26e29ab1fbb1c200b00bb72b7e = $this->env->getExtension("native_profiler");
        $__internal_f34554c250ab593a6e766d77cd5167d246e21c26e29ab1fbb1c200b00bb72b7e->enter($__internal_f34554c250ab593a6e766d77cd5167d246e21c26e29ab1fbb1c200b00bb72b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f34554c250ab593a6e766d77cd5167d246e21c26e29ab1fbb1c200b00bb72b7e->leave($__internal_f34554c250ab593a6e766d77cd5167d246e21c26e29ab1fbb1c200b00bb72b7e_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_c1c56dc3fe5b3a60a9af937cd1da493297b5fa1320968dbb2c958e5952614da0 = $this->env->getExtension("native_profiler");
        $__internal_c1c56dc3fe5b3a60a9af937cd1da493297b5fa1320968dbb2c958e5952614da0->enter($__internal_c1c56dc3fe5b3a60a9af937cd1da493297b5fa1320968dbb2c958e5952614da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


  <div class=\"panel-body\">
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "description", array()), "html", null, true);
        echo "

      <br><br>

      <p>
          <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("motorisations");
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-chevron-left\"></i>
              Retour à la liste
          </a>
          <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_edit", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-edit\"></i>
              Modifier la motorisation
          </a>
          <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_delete", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
              <i class=\"glyphicon glyphicon-trash\"></i>
              Supprimer la motorisation
          </a>
      </p>
  </div>



";
        
        $__internal_c1c56dc3fe5b3a60a9af937cd1da493297b5fa1320968dbb2c958e5952614da0->leave($__internal_c1c56dc3fe5b3a60a9af937cd1da493297b5fa1320968dbb2c958e5952614da0_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Motorisation:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 34,  98 => 30,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Motorisation/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title">{{ motorisation.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     {{ motorisation.description }}*/
/* */
/*       <br><br>*/
/* */
/*       <p>*/
/*           <a href="{{ path('motorisations') }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-chevron-left"></i>*/
/*               Retour à la liste*/
/*           </a>*/
/*           <a href="{{ path('motorisation_edit', {'id': motorisation.id}) }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-edit"></i>*/
/*               Modifier la motorisation*/
/*           </a>*/
/*           <a href="{{ path('motorisation_delete', {'id': motorisation.id}) }}" class="btn btn-danger">*/
/*               <i class="glyphicon glyphicon-trash"></i>*/
/*               Supprimer la motorisation*/
/*           </a>*/
/*       </p>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
