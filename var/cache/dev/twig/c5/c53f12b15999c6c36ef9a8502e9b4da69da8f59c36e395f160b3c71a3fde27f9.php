<?php

/* BenchmarkingBundle:Default/FonctionExistante:view.html.twig */
class __TwigTemplate_eebdd94f01faec8614996d6ff1dfd4f9dbedfac386b437b174464ee9cc70cf9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/FonctionExistante:view.html.twig", 3);
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
        $__internal_7040ea61e85ad3f5910672fd18b8f94662cf5a61dd5ed854ef3f6b2c8cc35960 = $this->env->getExtension("native_profiler");
        $__internal_7040ea61e85ad3f5910672fd18b8f94662cf5a61dd5ed854ef3f6b2c8cc35960->enter($__internal_7040ea61e85ad3f5910672fd18b8f94662cf5a61dd5ed854ef3f6b2c8cc35960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7040ea61e85ad3f5910672fd18b8f94662cf5a61dd5ed854ef3f6b2c8cc35960->leave($__internal_7040ea61e85ad3f5910672fd18b8f94662cf5a61dd5ed854ef3f6b2c8cc35960_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61fdc47bcf9166c5466fc1eb7204024e217d75ec00f09130814834528ca83e33 = $this->env->getExtension("native_profiler");
        $__internal_61fdc47bcf9166c5466fc1eb7204024e217d75ec00f09130814834528ca83e33->enter($__internal_61fdc47bcf9166c5466fc1eb7204024e217d75ec00f09130814834528ca83e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_61fdc47bcf9166c5466fc1eb7204024e217d75ec00f09130814834528ca83e33->leave($__internal_61fdc47bcf9166c5466fc1eb7204024e217d75ec00f09130814834528ca83e33_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_30981f438510d3a93741791cdc502c1ba1959f60d857e3fe5921cfb638c7d158 = $this->env->getExtension("native_profiler");
        $__internal_30981f438510d3a93741791cdc502c1ba1959f60d857e3fe5921cfb638c7d158->enter($__internal_30981f438510d3a93741791cdc502c1ba1959f60d857e3fe5921cfb638c7d158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


  <div class=\"panel-body\">
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "description", array()), "html", null, true);
        echo "
    <br><br>
      <p>
          <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fonctions");
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-chevron-left\"></i>
              Retour à la liste
          </a>
          <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_edit", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-edit\"></i>
              Modifier la fonction
          </a>
          <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_delete", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
              <i class=\"glyphicon glyphicon-trash\"></i>
              Supprimer la fonction
          </a>
      </p>
  </div>





";
        
        $__internal_30981f438510d3a93741791cdc502c1ba1959f60d857e3fe5921cfb638c7d158->leave($__internal_30981f438510d3a93741791cdc502c1ba1959f60d857e3fe5921cfb638c7d158_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FonctionExistante:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  103 => 32,  96 => 28,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une fonction - {{ parent() }}*/
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
/*         <h4 class="panel-title">{{ fonction.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     {{ fonction.description }}*/
/*     <br><br>*/
/*       <p>*/
/*           <a href="{{ path('fonctions') }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-chevron-left"></i>*/
/*               Retour à la liste*/
/*           </a>*/
/*           <a href="{{ path('fonction_edit', {'id': fonction.id}) }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-edit"></i>*/
/*               Modifier la fonction*/
/*           </a>*/
/*           <a href="{{ path('fonction_delete', {'id': fonction.id}) }}" class="btn btn-danger">*/
/*               <i class="glyphicon glyphicon-trash"></i>*/
/*               Supprimer la fonction*/
/*           </a>*/
/*       </p>*/
/*   </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
