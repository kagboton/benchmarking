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
        $__internal_19e93c10e4b8a508a850d0ceff0fea3556bc986834fc4edb46e148fd584f4ca0 = $this->env->getExtension("native_profiler");
        $__internal_19e93c10e4b8a508a850d0ceff0fea3556bc986834fc4edb46e148fd584f4ca0->enter($__internal_19e93c10e4b8a508a850d0ceff0fea3556bc986834fc4edb46e148fd584f4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e93c10e4b8a508a850d0ceff0fea3556bc986834fc4edb46e148fd584f4ca0->leave($__internal_19e93c10e4b8a508a850d0ceff0fea3556bc986834fc4edb46e148fd584f4ca0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cb457b56bf6fba35469694072f1da293d9a7885c74ba30ca499ddb35dc61b2a = $this->env->getExtension("native_profiler");
        $__internal_1cb457b56bf6fba35469694072f1da293d9a7885c74ba30ca499ddb35dc61b2a->enter($__internal_1cb457b56bf6fba35469694072f1da293d9a7885c74ba30ca499ddb35dc61b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1cb457b56bf6fba35469694072f1da293d9a7885c74ba30ca499ddb35dc61b2a->leave($__internal_1cb457b56bf6fba35469694072f1da293d9a7885c74ba30ca499ddb35dc61b2a_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_e4accf34b5964ff36fa88ede1cb676ddfda35541da29734885f00ac7cc1838ed = $this->env->getExtension("native_profiler");
        $__internal_e4accf34b5964ff36fa88ede1cb676ddfda35541da29734885f00ac7cc1838ed->enter($__internal_e4accf34b5964ff36fa88ede1cb676ddfda35541da29734885f00ac7cc1838ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_e4accf34b5964ff36fa88ede1cb676ddfda35541da29734885f00ac7cc1838ed->leave($__internal_e4accf34b5964ff36fa88ede1cb676ddfda35541da29734885f00ac7cc1838ed_prof);

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
