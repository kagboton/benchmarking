<?php

/* BenchmarkingBundle:Default/BoiteVitesse:index.html.twig */
class __TwigTemplate_cbb4ec71f62c08a735cabb021990138bdec9d3c14b057b8daf4a42ff20e1d6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:index.html.twig", 3);
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
        $__internal_3c15c56e154dfe6386c962d7253528bc3aea66feae3b150f9dbe1951555646dd = $this->env->getExtension("native_profiler");
        $__internal_3c15c56e154dfe6386c962d7253528bc3aea66feae3b150f9dbe1951555646dd->enter($__internal_3c15c56e154dfe6386c962d7253528bc3aea66feae3b150f9dbe1951555646dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c15c56e154dfe6386c962d7253528bc3aea66feae3b150f9dbe1951555646dd->leave($__internal_3c15c56e154dfe6386c962d7253528bc3aea66feae3b150f9dbe1951555646dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccf732022dbe848db67001d7bffcd30af6d2fe9aff2a6399fc83f7e5c610d01c = $this->env->getExtension("native_profiler");
        $__internal_ccf732022dbe848db67001d7bffcd30af6d2fe9aff2a6399fc83f7e5c610d01c->enter($__internal_ccf732022dbe848db67001d7bffcd30af6d2fe9aff2a6399fc83f7e5c610d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ccf732022dbe848db67001d7bffcd30af6d2fe9aff2a6399fc83f7e5c610d01c->leave($__internal_ccf732022dbe848db67001d7bffcd30af6d2fe9aff2a6399fc83f7e5c610d01c_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_24fd4be44f174722a667786e5dd22b7d7e878e2b5754a3829bbf23701d00cce3 = $this->env->getExtension("native_profiler");
        $__internal_24fd4be44f174722a667786e5dd22b7d7e878e2b5754a3829bbf23701d00cce3->enter($__internal_24fd4be44f174722a667786e5dd22b7d7e878e2b5754a3829bbf23701d00cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_24fd4be44f174722a667786e5dd22b7d7e878e2b5754a3829bbf23701d00cce3->leave($__internal_24fd4be44f174722a667786e5dd22b7d7e878e2b5754a3829bbf23701d00cce3_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:index.html.twig";
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
