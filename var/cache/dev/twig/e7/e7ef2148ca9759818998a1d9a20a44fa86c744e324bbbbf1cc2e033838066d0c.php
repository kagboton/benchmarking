<?php

/* @Benchmarking/Default/Segment/delete.html.twig */
class __TwigTemplate_6ea4a82c39f1c86fed40616b0eb99990a41d85be7401220e963256daadb66ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/delete.html.twig", 3);
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
        $__internal_a82cb2062625ecfbd3e5e2dd84ee14fdfc9a751ecf153bacc1d43e1e9f99cc0e = $this->env->getExtension("native_profiler");
        $__internal_a82cb2062625ecfbd3e5e2dd84ee14fdfc9a751ecf153bacc1d43e1e9f99cc0e->enter($__internal_a82cb2062625ecfbd3e5e2dd84ee14fdfc9a751ecf153bacc1d43e1e9f99cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82cb2062625ecfbd3e5e2dd84ee14fdfc9a751ecf153bacc1d43e1e9f99cc0e->leave($__internal_a82cb2062625ecfbd3e5e2dd84ee14fdfc9a751ecf153bacc1d43e1e9f99cc0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a090a7875b23306e1aedda236dcf56624098b5eb90bb7ef4174e01cd64790ddf = $this->env->getExtension("native_profiler");
        $__internal_a090a7875b23306e1aedda236dcf56624098b5eb90bb7ef4174e01cd64790ddf->enter($__internal_a090a7875b23306e1aedda236dcf56624098b5eb90bb7ef4174e01cd64790ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a090a7875b23306e1aedda236dcf56624098b5eb90bb7ef4174e01cd64790ddf->leave($__internal_a090a7875b23306e1aedda236dcf56624098b5eb90bb7ef4174e01cd64790ddf_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9e0512e1a5261974199c3c1203fb7ea0f948fe35a158421f0929f20120e757b0 = $this->env->getExtension("native_profiler");
        $__internal_9e0512e1a5261974199c3c1203fb7ea0f948fe35a158421f0929f20120e757b0->enter($__internal_9e0512e1a5261974199c3c1203fb7ea0f948fe35a158421f0929f20120e757b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer un segment</h4>
  </div>


  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer le segment \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 22
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_delete", array("id" => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_view", array("id" => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour au segment
      </a>
      ";
        // line 28
        echo "      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
      ";
        // line 30
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>


";
        
        $__internal_9e0512e1a5261974199c3c1203fb7ea0f948fe35a158421f0929f20120e757b0->leave($__internal_9e0512e1a5261974199c3c1203fb7ea0f948fe35a158421f0929f20120e757b0_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  85 => 28,  78 => 23,  73 => 22,  67 => 18,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Segment/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un segment - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer un segment</h4>*/
/*   </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer le segment "{{ segment.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('segment_delete', {'id': segment.id}) }}" method="post">*/
/*       <a href="{{ path('segment_view', {'id': segment.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour au segment*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
