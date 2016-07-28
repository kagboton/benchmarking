<?php

/* @Benchmarking/Default/BoiteVitesse/delete.html.twig */
class __TwigTemplate_6d58ca5edfeb008c8be7307b704566792d650907ad74357436591baf04de8e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/delete.html.twig", 3);
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
        $__internal_f1ccc2b9ea7b36b8c911b0d8d974621f6641220e082b044eb9744caf4db15d4d = $this->env->getExtension("native_profiler");
        $__internal_f1ccc2b9ea7b36b8c911b0d8d974621f6641220e082b044eb9744caf4db15d4d->enter($__internal_f1ccc2b9ea7b36b8c911b0d8d974621f6641220e082b044eb9744caf4db15d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ccc2b9ea7b36b8c911b0d8d974621f6641220e082b044eb9744caf4db15d4d->leave($__internal_f1ccc2b9ea7b36b8c911b0d8d974621f6641220e082b044eb9744caf4db15d4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a125a679002a6aaacfe2c210c827d33b304e46e47c8ac3f08696a9d3b0b995 = $this->env->getExtension("native_profiler");
        $__internal_f5a125a679002a6aaacfe2c210c827d33b304e46e47c8ac3f08696a9d3b0b995->enter($__internal_f5a125a679002a6aaacfe2c210c827d33b304e46e47c8ac3f08696a9d3b0b995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5a125a679002a6aaacfe2c210c827d33b304e46e47c8ac3f08696a9d3b0b995->leave($__internal_f5a125a679002a6aaacfe2c210c827d33b304e46e47c8ac3f08696a9d3b0b995_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_2485d7b4eba820cfdfbee32bac5e1050f0fc2077bb403487d1ca3c0431632a5c = $this->env->getExtension("native_profiler");
        $__internal_2485d7b4eba820cfdfbee32bac5e1050f0fc2077bb403487d1ca3c0431632a5c->enter($__internal_2485d7b4eba820cfdfbee32bac5e1050f0fc2077bb403487d1ca3c0431632a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la boîte à vitesse \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_delete", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_view", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la boîe à vitesse
      </a>
      ";
        // line 27
        echo "      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
      ";
        // line 29
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>

";
        
        $__internal_2485d7b4eba820cfdfbee32bac5e1050f0fc2077bb403487d1ca3c0431632a5c->leave($__internal_2485d7b4eba820cfdfbee32bac5e1050f0fc2077bb403487d1ca3c0431632a5c_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 27,  77 => 22,  72 => 21,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la boîte à vitesse "{{ boiteVitesse.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id  dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('boiteVitesse_delete', {'id': boiteVitesse.id}) }}" method="post">*/
/*       <a href="{{ path('boiteVitesse_view', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la boîe à vitesse*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
