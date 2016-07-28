<?php

/* @Benchmarking/Default/BoiteVitesse/index.html.twig */
class __TwigTemplate_1e75ab674e8aea2ae77a1dc0c018786e32d9cb1a1a985b7f6def74b5ee0cb018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/index.html.twig", 3);
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
        $__internal_f6efb7746beaf2299e6aab7c5a80af4adab34a76fff5f0c0390cd31826186f6e = $this->env->getExtension("native_profiler");
        $__internal_f6efb7746beaf2299e6aab7c5a80af4adab34a76fff5f0c0390cd31826186f6e->enter($__internal_f6efb7746beaf2299e6aab7c5a80af4adab34a76fff5f0c0390cd31826186f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6efb7746beaf2299e6aab7c5a80af4adab34a76fff5f0c0390cd31826186f6e->leave($__internal_f6efb7746beaf2299e6aab7c5a80af4adab34a76fff5f0c0390cd31826186f6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57422912a7b432c5ddd4a2bb1ef388419006db1a8a6501594cef60a35504aad8 = $this->env->getExtension("native_profiler");
        $__internal_57422912a7b432c5ddd4a2bb1ef388419006db1a8a6501594cef60a35504aad8->enter($__internal_57422912a7b432c5ddd4a2bb1ef388419006db1a8a6501594cef60a35504aad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57422912a7b432c5ddd4a2bb1ef388419006db1a8a6501594cef60a35504aad8->leave($__internal_57422912a7b432c5ddd4a2bb1ef388419006db1a8a6501594cef60a35504aad8_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_92d796f3f9b6f3ddf8454ae3071d26ada30b1f71a044e3892caabc32ff4a2889 = $this->env->getExtension("native_profiler");
        $__internal_92d796f3f9b6f3ddf8454ae3071d26ada30b1f71a044e3892caabc32ff4a2889->enter($__internal_92d796f3f9b6f3ddf8454ae3071d26ada30b1f71a044e3892caabc32ff4a2889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
    <h4 class=\"panel-title\">Liste des boîtes à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    <ul class=\"list-group\">

      ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listBoitesVitesse"]) ? $context["listBoitesVitesse"] : $this->getContext($context, "listBoitesVitesse")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["boiteVitesse"]) {
            // line 27
            echo "
          <a class=\"list-group-item\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_view", array("id" => $this->getAttribute($context["boiteVitesse"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["boiteVitesse"], "nom", array()), "html", null, true);
            echo "
          </a>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <li>Pas (encore !) de boîte à vitesse</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boiteVitesse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("boiteVitesse_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter une boîte à vitesse
    </a>

  </div>


";
        
        $__internal_92d796f3f9b6f3ddf8454ae3071d26ada30b1f71a044e3892caabc32ff4a2889->leave($__internal_92d796f3f9b6f3ddf8454ae3071d26ada30b1f71a044e3892caabc32ff4a2889_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  116 => 35,  109 => 33,  100 => 29,  96 => 28,  93 => 27,  88 => 26,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des boîtes à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/* */
/*       {% for boiteVitesse in listBoitesVitesse %}*/
/* */
/*           <a class="list-group-item" href="{{ path('boiteVitesse_view', {'id': boiteVitesse.id}) }}">*/
/*             {{ boiteVitesse.nom }}*/
/*           </a>*/
/* */
/*       {% else %}*/
/*         <li>Pas (encore !) de boîte à vitesse</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('boiteVitesse_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter une boîte à vitesse*/
/*     </a>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
