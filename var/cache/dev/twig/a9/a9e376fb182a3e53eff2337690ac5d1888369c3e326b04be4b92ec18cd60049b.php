<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig */
class __TwigTemplate_c1b6a03f2771489b95e99c98572bd06cd98dbfdb47b52243c638ec64c08b021e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig", 3);
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
        $__internal_e58ce7af5a768fa1b42c010ad7ee1c88b166bb633c3b185585a5c0651650458a = $this->env->getExtension("native_profiler");
        $__internal_e58ce7af5a768fa1b42c010ad7ee1c88b166bb633c3b185585a5c0651650458a->enter($__internal_e58ce7af5a768fa1b42c010ad7ee1c88b166bb633c3b185585a5c0651650458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58ce7af5a768fa1b42c010ad7ee1c88b166bb633c3b185585a5c0651650458a->leave($__internal_e58ce7af5a768fa1b42c010ad7ee1c88b166bb633c3b185585a5c0651650458a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c621872262547a6fd38f09a899d84765ce3d958802742e5fb36ddbd7c41e2953 = $this->env->getExtension("native_profiler");
        $__internal_c621872262547a6fd38f09a899d84765ce3d958802742e5fb36ddbd7c41e2953->enter($__internal_c621872262547a6fd38f09a899d84765ce3d958802742e5fb36ddbd7c41e2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c621872262547a6fd38f09a899d84765ce3d958802742e5fb36ddbd7c41e2953->leave($__internal_c621872262547a6fd38f09a899d84765ce3d958802742e5fb36ddbd7c41e2953_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dec45ea79b9d6b1c01a0b52d06a703ad34292fc6f08ce006d66c738260e33134 = $this->env->getExtension("native_profiler");
        $__internal_dec45ea79b9d6b1c01a0b52d06a703ad34292fc6f08ce006d66c738260e33134->enter($__internal_dec45ea79b9d6b1c01a0b52d06a703ad34292fc6f08ce006d66c738260e33134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une sous technologie afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Modification d'une sous technologie afficheur déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_view", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la sous technologie afficheur
    </a>
  </p>

";
        
        $__internal_dec45ea79b9d6b1c01a0b52d06a703ad34292fc6f08ce006d66c738260e33134->leave($__internal_dec45ea79b9d6b1c01a0b52d06a703ad34292fc6f08ce006d66c738260e33134_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une sous technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une sous technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une sous technologie afficheur déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('sousTechnologieAfficheur_view', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la sous technologie afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
