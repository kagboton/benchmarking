<?php

/* BenchmarkingBundle:Default/BoiteVitesse:view.html.twig */
class __TwigTemplate_58aa483ddb442600c0fd9ca48c8652fc107a16a36c45bcb3cc9d2cbb15d423d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig", 3);
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
        $__internal_f32e358bd08f069d15f9bd711bc962bf0ad83dac3338ebfa854a039d32887df8 = $this->env->getExtension("native_profiler");
        $__internal_f32e358bd08f069d15f9bd711bc962bf0ad83dac3338ebfa854a039d32887df8->enter($__internal_f32e358bd08f069d15f9bd711bc962bf0ad83dac3338ebfa854a039d32887df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32e358bd08f069d15f9bd711bc962bf0ad83dac3338ebfa854a039d32887df8->leave($__internal_f32e358bd08f069d15f9bd711bc962bf0ad83dac3338ebfa854a039d32887df8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d9a8902f26f8cb411dc8a7a11379a1c9cef239dec08859953b07b6b3b40dddc = $this->env->getExtension("native_profiler");
        $__internal_3d9a8902f26f8cb411dc8a7a11379a1c9cef239dec08859953b07b6b3b40dddc->enter($__internal_3d9a8902f26f8cb411dc8a7a11379a1c9cef239dec08859953b07b6b3b40dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d9a8902f26f8cb411dc8a7a11379a1c9cef239dec08859953b07b6b3b40dddc->leave($__internal_3d9a8902f26f8cb411dc8a7a11379a1c9cef239dec08859953b07b6b3b40dddc_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_e92dfc68bdb9bb5b0470c8600018004c1cb10cefe0828fc093f24c2086199356 = $this->env->getExtension("native_profiler");
        $__internal_e92dfc68bdb9bb5b0470c8600018004c1cb10cefe0828fc093f24c2086199356->enter($__internal_e92dfc68bdb9bb5b0470c8600018004c1cb10cefe0828fc093f24c2086199356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


    <div class=\"panel-body\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "description", array()), "html", null, true);
        echo "

        <br><br>

        <p>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("boitesVitesse");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_edit", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier la boîte à vitesse
            </a>
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_delete", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer la boîte à vitesse
            </a>
        </p>
    </div>

";
        
        $__internal_e92dfc68bdb9bb5b0470c8600018004c1cb10cefe0828fc093f24c2086199356->leave($__internal_e92dfc68bdb9bb5b0470c8600018004c1cb10cefe0828fc093f24c2086199356_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 34,  98 => 30,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une boîte à vitesse - {{ parent() }}*/
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
/*         <h4 class="panel-title">{{ boiteVitesse.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*     <div class="panel-body">*/
/*         {{ boiteVitesse.description }}*/
/* */
/*         <br><br>*/
/* */
/*         <p>*/
/*             <a href="{{ path('boitesVitesse') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_edit', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier la boîte à vitesse*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_delete', {'id': boiteVitesse.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer la boîte à vitesse*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
