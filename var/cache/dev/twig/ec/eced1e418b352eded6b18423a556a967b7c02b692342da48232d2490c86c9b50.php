<?php

/* @Benchmarking/Default/Marque/view.html.twig */
class __TwigTemplate_bc06ef47ec7f9a950b3359aa801c63748201caa027a63ce0f11c28801ea5c013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Marque/view.html.twig", 3);
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
        $__internal_8435d1ec18d310400bc86df6d5d818bec8352561b8cddb251b6ca7a423867d03 = $this->env->getExtension("native_profiler");
        $__internal_8435d1ec18d310400bc86df6d5d818bec8352561b8cddb251b6ca7a423867d03->enter($__internal_8435d1ec18d310400bc86df6d5d818bec8352561b8cddb251b6ca7a423867d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8435d1ec18d310400bc86df6d5d818bec8352561b8cddb251b6ca7a423867d03->leave($__internal_8435d1ec18d310400bc86df6d5d818bec8352561b8cddb251b6ca7a423867d03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_638ee9a1d07c9e22836144c4d723f0e657631658f5d06e001dc474c7388715b4 = $this->env->getExtension("native_profiler");
        $__internal_638ee9a1d07c9e22836144c4d723f0e657631658f5d06e001dc474c7388715b4->enter($__internal_638ee9a1d07c9e22836144c4d723f0e657631658f5d06e001dc474c7388715b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_638ee9a1d07c9e22836144c4d723f0e657631658f5d06e001dc474c7388715b4->leave($__internal_638ee9a1d07c9e22836144c4d723f0e657631658f5d06e001dc474c7388715b4_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_4ba0c1ccdbf746fdc65ce6e383531356346432532f9bdf7bd69d75a6540693d1 = $this->env->getExtension("native_profiler");
        $__internal_4ba0c1ccdbf746fdc65ce6e383531356346432532f9bdf7bd69d75a6540693d1->enter($__internal_4ba0c1ccdbf746fdc65ce6e383531356346432532f9bdf7bd69d75a6540693d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        <h4 class=\"panel-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>

  <div class=\"panel-body\">
      <p>
          <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("marques");
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-chevron-left\"></i>
              Retour à la liste
          </a>
          <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_edit", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
              <i class=\"glyphicon glyphicon-edit\"></i>
              Modifier la marque
          </a>
          <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_delete", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
              <i class=\"glyphicon glyphicon-trash\"></i>
              Supprimer la marque
          </a>
      </p>

  </div>


";
        
        $__internal_4ba0c1ccdbf746fdc65ce6e383531356346432532f9bdf7bd69d75a6540693d1->leave($__internal_4ba0c1ccdbf746fdc65ce6e383531356346432532f9bdf7bd69d75a6540693d1_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  97 => 29,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title">{{ marque.nom }}</h4>*/
/*     </div>*/
/* */
/*   <div class="panel-body">*/
/*       <p>*/
/*           <a href="{{ path('marques') }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-chevron-left"></i>*/
/*               Retour à la liste*/
/*           </a>*/
/*           <a href="{{ path('marque_edit', {'id': marque.id}) }}" class="btn btn-default">*/
/*               <i class="glyphicon glyphicon-edit"></i>*/
/*               Modifier la marque*/
/*           </a>*/
/*           <a href="{{ path('marque_delete', {'id': marque.id}) }}" class="btn btn-danger">*/
/*               <i class="glyphicon glyphicon-trash"></i>*/
/*               Supprimer la marque*/
/*           </a>*/
/*       </p>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
