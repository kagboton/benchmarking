<?php

/* BenchmarkingBundle:Default/CommandePhysique:index.html.twig */
class __TwigTemplate_668e03315648b71ac910ba7ed81790ec1222d5011454aa365ad4dc207721164b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf27233737d2ae0ebdd1b48e83b4acf2e1a96f78ed1abf5f5b7e0617b4342cbc = $this->env->getExtension("native_profiler");
        $__internal_cf27233737d2ae0ebdd1b48e83b4acf2e1a96f78ed1abf5f5b7e0617b4342cbc->enter($__internal_cf27233737d2ae0ebdd1b48e83b4acf2e1a96f78ed1abf5f5b7e0617b4342cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf27233737d2ae0ebdd1b48e83b4acf2e1a96f78ed1abf5f5b7e0617b4342cbc->leave($__internal_cf27233737d2ae0ebdd1b48e83b4acf2e1a96f78ed1abf5f5b7e0617b4342cbc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cd38cfdc09918e5db1ab78367631a7c37d2a3e1cc6f99b93cbe52fde1f5a526 = $this->env->getExtension("native_profiler");
        $__internal_4cd38cfdc09918e5db1ab78367631a7c37d2a3e1cc6f99b93cbe52fde1f5a526->enter($__internal_4cd38cfdc09918e5db1ab78367631a7c37d2a3e1cc6f99b93cbe52fde1f5a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Commandes Physiques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cd38cfdc09918e5db1ab78367631a7c37d2a3e1cc6f99b93cbe52fde1f5a526->leave($__internal_4cd38cfdc09918e5db1ab78367631a7c37d2a3e1cc6f99b93cbe52fde1f5a526_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f8c6bc3d04b6e32aa615226afe224e8161d814edd66c56456f0680b8d00d944e = $this->env->getExtension("native_profiler");
        $__internal_f8c6bc3d04b6e32aa615226afe224e8161d814edd66c56456f0680b8d00d944e->enter($__internal_f8c6bc3d04b6e32aa615226afe224e8161d814edd66c56456f0680b8d00d944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des commandes physiques</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCommandesPhysiques"]) ? $context["listCommandesPhysiques"] : $this->getContext($context, "listCommandesPhysiques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commandePhysique"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_view", array("id" => $this->getAttribute($context["commandePhysique"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["commandePhysique"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de commandes physiques</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandePhysique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>


";
        
        $__internal_f8c6bc3d04b6e32aa615226afe224e8161d814edd66c56456f0680b8d00d944e->leave($__internal_f8c6bc3d04b6e32aa615226afe224e8161d814edd66c56456f0680b8d00d944e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Commandes Physiques - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <h2>Liste des commandes physiques</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for commandePhysique in listCommandesPhysiques %}*/
/*       <li>*/
/*         <a href="{{ path('commandePhysique_view', {'id': commandePhysique.id}) }}">*/
/*           {{ commandePhysique.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de commandes physiques</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* */
/* {% endblock %}*/
/* */
