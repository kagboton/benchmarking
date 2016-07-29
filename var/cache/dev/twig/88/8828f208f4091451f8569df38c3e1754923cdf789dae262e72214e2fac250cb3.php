<?php

/* @Benchmarking/Default/TypeRetourActivation/delete.html.twig */
class __TwigTemplate_fa1f18682f452501bf7cc0d8742d1635ca34a9ad791822760678727d17a82115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/delete.html.twig", 3);
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
        $__internal_e1613004007e715098a70998f0bf91e0f8e1646c6c7fe97daa45121115f010b0 = $this->env->getExtension("native_profiler");
        $__internal_e1613004007e715098a70998f0bf91e0f8e1646c6c7fe97daa45121115f010b0->enter($__internal_e1613004007e715098a70998f0bf91e0f8e1646c6c7fe97daa45121115f010b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1613004007e715098a70998f0bf91e0f8e1646c6c7fe97daa45121115f010b0->leave($__internal_e1613004007e715098a70998f0bf91e0f8e1646c6c7fe97daa45121115f010b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4973dfea63e932226e5570cc5f833e98c5e088946e904effd5fc78544a2d18ee = $this->env->getExtension("native_profiler");
        $__internal_4973dfea63e932226e5570cc5f833e98c5e088946e904effd5fc78544a2d18ee->enter($__internal_4973dfea63e932226e5570cc5f833e98c5e088946e904effd5fc78544a2d18ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4973dfea63e932226e5570cc5f833e98c5e088946e904effd5fc78544a2d18ee->leave($__internal_4973dfea63e932226e5570cc5f833e98c5e088946e904effd5fc78544a2d18ee_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_676ef82a1f85d71515bdbd09008dcc33ca58c0c3d68162f1b91c44eb04808ae2 = $this->env->getExtension("native_profiler");
        $__internal_676ef82a1f85d71515bdbd09008dcc33ca58c0c3d68162f1b91c44eb04808ae2->enter($__internal_676ef82a1f85d71515bdbd09008dcc33ca58c0c3d68162f1b91c44eb04808ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un retour d'activation</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le retour d'activation \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_delete", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au retour d'activation
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_676ef82a1f85d71515bdbd09008dcc33ca58c0c3d68162f1b91c44eb04808ae2->leave($__internal_676ef82a1f85d71515bdbd09008dcc33ca58c0c3d68162f1b91c44eb04808ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un retour d'activation</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le retour d'activation "{{ retourActivation.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('retourActivation_delete', {'id': retourActivation.id}) }}" method="post">*/
/*     <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au retour d'activation*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
