<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:index.html.twig */
class __TwigTemplate_0e4cf4640caaece48b6f81e519e3e0b1d2d25a8626dd81533a5f1d66f634f287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:index.html.twig", 3);
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
        $__internal_9ebef40008cfc3f9014f1d4f2c4dc17c0f807dd078c5fc0086915bd605f49902 = $this->env->getExtension("native_profiler");
        $__internal_9ebef40008cfc3f9014f1d4f2c4dc17c0f807dd078c5fc0086915bd605f49902->enter($__internal_9ebef40008cfc3f9014f1d4f2c4dc17c0f807dd078c5fc0086915bd605f49902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ebef40008cfc3f9014f1d4f2c4dc17c0f807dd078c5fc0086915bd605f49902->leave($__internal_9ebef40008cfc3f9014f1d4f2c4dc17c0f807dd078c5fc0086915bd605f49902_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec20eaa47414a8a7f9b53901b2a1076781071530cb6f22025df7693004ea9d30 = $this->env->getExtension("native_profiler");
        $__internal_ec20eaa47414a8a7f9b53901b2a1076781071530cb6f22025df7693004ea9d30->enter($__internal_ec20eaa47414a8a7f9b53901b2a1076781071530cb6f22025df7693004ea9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Sous Technologie Afficheur- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec20eaa47414a8a7f9b53901b2a1076781071530cb6f22025df7693004ea9d30->leave($__internal_ec20eaa47414a8a7f9b53901b2a1076781071530cb6f22025df7693004ea9d30_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5e149395b885ecaa616562da36d887e99225e561a8e001296cb71e163ae31b5a = $this->env->getExtension("native_profiler");
        $__internal_5e149395b885ecaa616562da36d887e99225e561a8e001296cb71e163ae31b5a->enter($__internal_5e149395b885ecaa616562da36d887e99225e561a8e001296cb71e163ae31b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des sous technologies afficheur</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSousTechnologiesAfficheur"]) ? $context["listSousTechnologiesAfficheur"] : $this->getContext($context, "listSousTechnologiesAfficheur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sousTechnologieAfficheur"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_view", array("id" => $this->getAttribute($context["sousTechnologieAfficheur"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["sousTechnologieAfficheur"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de sous technologies afficheur</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousTechnologieAfficheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter une sous technologie afficheur
  </a>


";
        
        $__internal_5e149395b885ecaa616562da36d887e99225e561a8e001296cb71e163ae31b5a->leave($__internal_5e149395b885ecaa616562da36d887e99225e561a8e001296cb71e163ae31b5a_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Sous Technologie Afficheur- {{ parent() }}*/
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
/*   <h2>Liste des sous technologies afficheur</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for sousTechnologieAfficheur in listSousTechnologiesAfficheur %}*/
/*       <li>*/
/*         <a href="{{ path('sousTechnologieAfficheur_view', {'id': sousTechnologieAfficheur.id}) }}">*/
/*           {{ sousTechnologieAfficheur.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de sous technologies afficheur</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('sousTechnologieAfficheur_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter une sous technologie afficheur*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
