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
        $__internal_e7ffb90f1aa2520ed70686368792bd85da6abd00bca30005ae03d7723c226847 = $this->env->getExtension("native_profiler");
        $__internal_e7ffb90f1aa2520ed70686368792bd85da6abd00bca30005ae03d7723c226847->enter($__internal_e7ffb90f1aa2520ed70686368792bd85da6abd00bca30005ae03d7723c226847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ffb90f1aa2520ed70686368792bd85da6abd00bca30005ae03d7723c226847->leave($__internal_e7ffb90f1aa2520ed70686368792bd85da6abd00bca30005ae03d7723c226847_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ac0655cc145e041d7114d8955510df109c0e3a143003f4d2c7467f04801a715 = $this->env->getExtension("native_profiler");
        $__internal_7ac0655cc145e041d7114d8955510df109c0e3a143003f4d2c7467f04801a715->enter($__internal_7ac0655cc145e041d7114d8955510df109c0e3a143003f4d2c7467f04801a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ac0655cc145e041d7114d8955510df109c0e3a143003f4d2c7467f04801a715->leave($__internal_7ac0655cc145e041d7114d8955510df109c0e3a143003f4d2c7467f04801a715_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_3aa2e98056ca0cbfc2adef7af78174ccbe91debbea5a2523143164d92a0f28ca = $this->env->getExtension("native_profiler");
        $__internal_3aa2e98056ca0cbfc2adef7af78174ccbe91debbea5a2523143164d92a0f28ca->enter($__internal_3aa2e98056ca0cbfc2adef7af78174ccbe91debbea5a2523143164d92a0f28ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_3aa2e98056ca0cbfc2adef7af78174ccbe91debbea5a2523143164d92a0f28ca->leave($__internal_3aa2e98056ca0cbfc2adef7af78174ccbe91debbea5a2523143164d92a0f28ca_prof);

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
