<?php

/* @Benchmarking/Default/FonctionExistante/view.html.twig */
class __TwigTemplate_7098dbd006addcd988335843d1a38f06c22dfcee7440a076e3bd3081afa493e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/view.html.twig", 3);
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
        $__internal_683cd646a60c09a2795667d53d411d59cae01e452e890448c7b29865239c7b9e = $this->env->getExtension("native_profiler");
        $__internal_683cd646a60c09a2795667d53d411d59cae01e452e890448c7b29865239c7b9e->enter($__internal_683cd646a60c09a2795667d53d411d59cae01e452e890448c7b29865239c7b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683cd646a60c09a2795667d53d411d59cae01e452e890448c7b29865239c7b9e->leave($__internal_683cd646a60c09a2795667d53d411d59cae01e452e890448c7b29865239c7b9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8458267d74705c9df42ec14aff4f94b9a5f8b5279eec03d4ed7f33db4a5410f = $this->env->getExtension("native_profiler");
        $__internal_e8458267d74705c9df42ec14aff4f94b9a5f8b5279eec03d4ed7f33db4a5410f->enter($__internal_e8458267d74705c9df42ec14aff4f94b9a5f8b5279eec03d4ed7f33db4a5410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8458267d74705c9df42ec14aff4f94b9a5f8b5279eec03d4ed7f33db4a5410f->leave($__internal_e8458267d74705c9df42ec14aff4f94b9a5f8b5279eec03d4ed7f33db4a5410f_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_45258a47d62963003dc7928003b9f9c7d83d66696bc9c43d3db73c3d3e955fa2 = $this->env->getExtension("native_profiler");
        $__internal_45258a47d62963003dc7928003b9f9c7d83d66696bc9c43d3db73c3d3e955fa2->enter($__internal_45258a47d62963003dc7928003b9f9c7d83d66696bc9c43d3db73c3d3e955fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_45258a47d62963003dc7928003b9f9c7d83d66696bc9c43d3db73c3d3e955fa2->leave($__internal_45258a47d62963003dc7928003b9f9c7d83d66696bc9c43d3db73c3d3e955fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/view.html.twig";
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
