<?php

/* @Benchmarking/Default/Famille/index.html.twig */
class __TwigTemplate_44ff5e5f7eebc375e6e263111d823f47cdb102bfaa8a53184be079ffe60b032e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Famille/index.html.twig", 3);
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
        $__internal_3d7ca8b8b070b87836675584fb6fc2cd6aea9a8fbe50cd04b12ac8cc90982309 = $this->env->getExtension("native_profiler");
        $__internal_3d7ca8b8b070b87836675584fb6fc2cd6aea9a8fbe50cd04b12ac8cc90982309->enter($__internal_3d7ca8b8b070b87836675584fb6fc2cd6aea9a8fbe50cd04b12ac8cc90982309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7ca8b8b070b87836675584fb6fc2cd6aea9a8fbe50cd04b12ac8cc90982309->leave($__internal_3d7ca8b8b070b87836675584fb6fc2cd6aea9a8fbe50cd04b12ac8cc90982309_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c3d9929dc3a540f62a8cde9a39ab1de20fcdbbfc89ad5796866d8115a1faab2 = $this->env->getExtension("native_profiler");
        $__internal_9c3d9929dc3a540f62a8cde9a39ab1de20fcdbbfc89ad5796866d8115a1faab2->enter($__internal_9c3d9929dc3a540f62a8cde9a39ab1de20fcdbbfc89ad5796866d8115a1faab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9c3d9929dc3a540f62a8cde9a39ab1de20fcdbbfc89ad5796866d8115a1faab2->leave($__internal_9c3d9929dc3a540f62a8cde9a39ab1de20fcdbbfc89ad5796866d8115a1faab2_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9c86c8dd637eccbfb88de38ea5ed3cbde7583db2ebce9c6895c624ee594de51c = $this->env->getExtension("native_profiler");
        $__internal_9c86c8dd637eccbfb88de38ea5ed3cbde7583db2ebce9c6895c624ee594de51c->enter($__internal_9c86c8dd637eccbfb88de38ea5ed3cbde7583db2ebce9c6895c624ee594de51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <p class=\"alert alert-info\">
      ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Liste des familles</h4>
  </div>

  <div class=\"panel-body\">
    <ul class=\"list-group\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listFamilles"]) ? $context["listFamilles"] : $this->getContext($context, "listFamilles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 24
            echo "
          <a class=\"list-group-item\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_view", array("id" => $this->getAttribute($context["famille"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["famille"], "nom", array()), "html", null, true);
            echo "
          </a>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <li>Pas (encore !) de familles</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("famille_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter une famille de fonction
    </a>

  </div>


";
        
        $__internal_9c86c8dd637eccbfb88de38ea5ed3cbde7583db2ebce9c6895c624ee594de51c->leave($__internal_9c86c8dd637eccbfb88de38ea5ed3cbde7583db2ebce9c6895c624ee594de51c_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  76 => 16,  67 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des familles</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/*       {% for famille in listFamilles %}*/
/* */
/*           <a class="list-group-item" href="{{ path('famille_view', {'id': famille.id}) }}">*/
/*             {{ famille.nom }}*/
/*           </a>*/
/* */
/*       {% else %}*/
/*         <li>Pas (encore !) de familles</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('famille_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter une famille de fonction*/
/*     </a>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
