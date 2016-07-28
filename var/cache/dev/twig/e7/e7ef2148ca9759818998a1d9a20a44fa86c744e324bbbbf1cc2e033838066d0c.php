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
        $__internal_ad8cf7d6f87af711269c6e8f5d5d92aa448918062e6defa3fb5933cf91f4126b = $this->env->getExtension("native_profiler");
        $__internal_ad8cf7d6f87af711269c6e8f5d5d92aa448918062e6defa3fb5933cf91f4126b->enter($__internal_ad8cf7d6f87af711269c6e8f5d5d92aa448918062e6defa3fb5933cf91f4126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8cf7d6f87af711269c6e8f5d5d92aa448918062e6defa3fb5933cf91f4126b->leave($__internal_ad8cf7d6f87af711269c6e8f5d5d92aa448918062e6defa3fb5933cf91f4126b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4538985caf96ff7eafd77cee461ecf124e92d19751b66e51ced24202ab44e867 = $this->env->getExtension("native_profiler");
        $__internal_4538985caf96ff7eafd77cee461ecf124e92d19751b66e51ced24202ab44e867->enter($__internal_4538985caf96ff7eafd77cee461ecf124e92d19751b66e51ced24202ab44e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4538985caf96ff7eafd77cee461ecf124e92d19751b66e51ced24202ab44e867->leave($__internal_4538985caf96ff7eafd77cee461ecf124e92d19751b66e51ced24202ab44e867_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_c9ac7b5853a8ca26882327bdc3a2e6525bfd9340a9607d9e28a02ae4a249b06e = $this->env->getExtension("native_profiler");
        $__internal_c9ac7b5853a8ca26882327bdc3a2e6525bfd9340a9607d9e28a02ae4a249b06e->enter($__internal_c9ac7b5853a8ca26882327bdc3a2e6525bfd9340a9607d9e28a02ae4a249b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_c9ac7b5853a8ca26882327bdc3a2e6525bfd9340a9607d9e28a02ae4a249b06e->leave($__internal_c9ac7b5853a8ca26882327bdc3a2e6525bfd9340a9607d9e28a02ae4a249b06e_prof);

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
