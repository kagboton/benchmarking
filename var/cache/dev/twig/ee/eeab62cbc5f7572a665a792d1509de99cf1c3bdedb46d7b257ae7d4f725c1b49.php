<?php

/* @Benchmarking/Default/CommandePhysique/index.html.twig */
class __TwigTemplate_9c435ec28fbd449707fcc0dc8448aeeb494be2f9e90eb270c59011f6fab51790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/index.html.twig", 3);
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
        $__internal_4273514c8b8061a1bf3e5735cf4da32d26ed34c367b8614e6c2b736915a73da1 = $this->env->getExtension("native_profiler");
        $__internal_4273514c8b8061a1bf3e5735cf4da32d26ed34c367b8614e6c2b736915a73da1->enter($__internal_4273514c8b8061a1bf3e5735cf4da32d26ed34c367b8614e6c2b736915a73da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4273514c8b8061a1bf3e5735cf4da32d26ed34c367b8614e6c2b736915a73da1->leave($__internal_4273514c8b8061a1bf3e5735cf4da32d26ed34c367b8614e6c2b736915a73da1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60073bcf4bba27b6a855ff140847467cb440b3c0e29a0358fa6218d49731d2e6 = $this->env->getExtension("native_profiler");
        $__internal_60073bcf4bba27b6a855ff140847467cb440b3c0e29a0358fa6218d49731d2e6->enter($__internal_60073bcf4bba27b6a855ff140847467cb440b3c0e29a0358fa6218d49731d2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Commandes Physiques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_60073bcf4bba27b6a855ff140847467cb440b3c0e29a0358fa6218d49731d2e6->leave($__internal_60073bcf4bba27b6a855ff140847467cb440b3c0e29a0358fa6218d49731d2e6_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_e4dc5f91c57b3abf89a44adb3b3b3bf1bc60bd747d6bd56d326d53f7833d6f38 = $this->env->getExtension("native_profiler");
        $__internal_e4dc5f91c57b3abf89a44adb3b3b3bf1bc60bd747d6bd56d326d53f7833d6f38->enter($__internal_e4dc5f91c57b3abf89a44adb3b3b3bf1bc60bd747d6bd56d326d53f7833d6f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_e4dc5f91c57b3abf89a44adb3b3b3bf1bc60bd747d6bd56d326d53f7833d6f38->leave($__internal_e4dc5f91c57b3abf89a44adb3b3b3bf1bc60bd747d6bd56d326d53f7833d6f38_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/index.html.twig";
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
