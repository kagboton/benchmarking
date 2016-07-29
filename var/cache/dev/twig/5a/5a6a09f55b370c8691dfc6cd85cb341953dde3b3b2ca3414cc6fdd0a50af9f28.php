<?php

/* @Benchmarking/Default/ComposantAffichage/edit.html.twig */
class __TwigTemplate_20914f08a0d9cecc1adbe1defb335bf24f3c42be0c95a6637bfd6e52c1045416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/edit.html.twig", 3);
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
        $__internal_58b8e1f97117cabb0eb0c781d810ec17f0d2a98c420151a1ce10cd183789bce4 = $this->env->getExtension("native_profiler");
        $__internal_58b8e1f97117cabb0eb0c781d810ec17f0d2a98c420151a1ce10cd183789bce4->enter($__internal_58b8e1f97117cabb0eb0c781d810ec17f0d2a98c420151a1ce10cd183789bce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b8e1f97117cabb0eb0c781d810ec17f0d2a98c420151a1ce10cd183789bce4->leave($__internal_58b8e1f97117cabb0eb0c781d810ec17f0d2a98c420151a1ce10cd183789bce4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f85372c8fc472dfae372317469d926154d57469d0c9285c41b1a9915fbb5c60d = $this->env->getExtension("native_profiler");
        $__internal_f85372c8fc472dfae372317469d926154d57469d0c9285c41b1a9915fbb5c60d->enter($__internal_f85372c8fc472dfae372317469d926154d57469d0c9285c41b1a9915fbb5c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f85372c8fc472dfae372317469d926154d57469d0c9285c41b1a9915fbb5c60d->leave($__internal_f85372c8fc472dfae372317469d926154d57469d0c9285c41b1a9915fbb5c60d_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_23d3053823a037bd758e55346c28f8b05d946f942cf77356a347da7197b12d02 = $this->env->getExtension("native_profiler");
        $__internal_23d3053823a037bd758e55346c28f8b05d946f942cf77356a347da7197b12d02->enter($__internal_23d3053823a037bd758e55346c28f8b05d946f942cf77356a347da7197b12d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un composant d'affichage</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:ComposantAffichage/form.html.twig");
        echo "

  <p>
    Modification d'un composant d'affichage déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_view", array("id" => $this->getAttribute((isset($context["composantAffichag"]) ? $context["composantAffichag"] : $this->getContext($context, "composantAffichag")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au composant
    </a>
  </p>

";
        
        $__internal_23d3053823a037bd758e55346c28f8b05d946f942cf77356a347da7197b12d02->leave($__internal_23d3053823a037bd758e55346c28f8b05d946f942cf77356a347da7197b12d02_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/ComposantAffichage/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un composant d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un composant d'affichage</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:ComposantAffichage/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un composant d'affichage déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('composantAffichage_view', {'id': composantAffichag.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au composant*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
