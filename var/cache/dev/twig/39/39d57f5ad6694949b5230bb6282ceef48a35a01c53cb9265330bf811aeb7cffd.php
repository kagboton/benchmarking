<?php

/* BenchmarkingBundle:Default/Segment:delete.html.twig */
class __TwigTemplate_e0807bf4da02993f9298d653ce826dc026a5fc49ae02da1a8444c4b13863434f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Segment:delete.html.twig", 3);
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
        $__internal_e032241faa235895cf52fc42c5c9fec40855e0f525f22eabb01e2135af0e5094 = $this->env->getExtension("native_profiler");
        $__internal_e032241faa235895cf52fc42c5c9fec40855e0f525f22eabb01e2135af0e5094->enter($__internal_e032241faa235895cf52fc42c5c9fec40855e0f525f22eabb01e2135af0e5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e032241faa235895cf52fc42c5c9fec40855e0f525f22eabb01e2135af0e5094->leave($__internal_e032241faa235895cf52fc42c5c9fec40855e0f525f22eabb01e2135af0e5094_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e96d07f2960ada4e46cae99478d310131835074a8d565fdbc9071399882b12d = $this->env->getExtension("native_profiler");
        $__internal_1e96d07f2960ada4e46cae99478d310131835074a8d565fdbc9071399882b12d->enter($__internal_1e96d07f2960ada4e46cae99478d310131835074a8d565fdbc9071399882b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e96d07f2960ada4e46cae99478d310131835074a8d565fdbc9071399882b12d->leave($__internal_1e96d07f2960ada4e46cae99478d310131835074a8d565fdbc9071399882b12d_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f879817394d68bf2719812cc2bd8cda3f4d1544b3ebb906931ccc4fa729e031c = $this->env->getExtension("native_profiler");
        $__internal_f879817394d68bf2719812cc2bd8cda3f4d1544b3ebb906931ccc4fa729e031c->enter($__internal_f879817394d68bf2719812cc2bd8cda3f4d1544b3ebb906931ccc4fa729e031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_f879817394d68bf2719812cc2bd8cda3f4d1544b3ebb906931ccc4fa729e031c->leave($__internal_f879817394d68bf2719812cc2bd8cda3f4d1544b3ebb906931ccc4fa729e031c_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Segment:delete.html.twig";
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
