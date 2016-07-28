<?php

/* @Benchmarking/Default/TypeRetourActivation/view.html.twig */
class __TwigTemplate_97bde80f44ceeb7dc4d49e8133ce45077e5f354af92c2079bc3845da866476e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/view.html.twig", 3);
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
        $__internal_1af1a3385981c6c82e34e5c5ae6d34e2110338ced06e107272b8b682d9fd9447 = $this->env->getExtension("native_profiler");
        $__internal_1af1a3385981c6c82e34e5c5ae6d34e2110338ced06e107272b8b682d9fd9447->enter($__internal_1af1a3385981c6c82e34e5c5ae6d34e2110338ced06e107272b8b682d9fd9447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af1a3385981c6c82e34e5c5ae6d34e2110338ced06e107272b8b682d9fd9447->leave($__internal_1af1a3385981c6c82e34e5c5ae6d34e2110338ced06e107272b8b682d9fd9447_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf95d7ab90350b10318a7ec2f8dc479799ae51368d29fce82772a357b6ba7320 = $this->env->getExtension("native_profiler");
        $__internal_cf95d7ab90350b10318a7ec2f8dc479799ae51368d29fce82772a357b6ba7320->enter($__internal_cf95d7ab90350b10318a7ec2f8dc479799ae51368d29fce82772a357b6ba7320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cf95d7ab90350b10318a7ec2f8dc479799ae51368d29fce82772a357b6ba7320->leave($__internal_cf95d7ab90350b10318a7ec2f8dc479799ae51368d29fce82772a357b6ba7320_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c7069d053cc19c3de06b2bf0d36545493fb3b1c92ea976e7275ce1c9682f8761 = $this->env->getExtension("native_profiler");
        $__internal_c7069d053cc19c3de06b2bf0d36545493fb3b1c92ea976e7275ce1c9682f8761->enter($__internal_c7069d053cc19c3de06b2bf0d36545493fb3b1c92ea976e7275ce1c9682f8761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("retoursActivation");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_edit", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le retour d'activation
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_delete", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le retour d'activation
        </a>
    </p>


";
        
        $__internal_c7069d053cc19c3de06b2bf0d36545493fb3b1c92ea976e7275ce1c9682f8761->leave($__internal_c7069d053cc19c3de06b2bf0d36545493fb3b1c92ea976e7275ce1c9682f8761_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*   <h2>{{ retourActivation.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('retoursActivation') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('retourActivation_edit', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le retour d'activation*/
/*         </a>*/
/*         <a href="{{ path('retourActivation_delete', {'id': retourActivation.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le retour d'activation*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */