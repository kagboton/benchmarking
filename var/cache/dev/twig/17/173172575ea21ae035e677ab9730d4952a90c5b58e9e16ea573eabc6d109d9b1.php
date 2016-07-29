<?php

/* @Benchmarking/Default/CommandePhysique/form.html.twig */
class __TwigTemplate_0497590f89c1ad1ced7dabbc1e342e4c4e3920dcc6a5137bf1b858f87a7c98af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f39636ee26aa85565f3fe17134902b2e60a05f2fc88deaa957991350f822576 = $this->env->getExtension("native_profiler");
        $__internal_1f39636ee26aa85565f3fe17134902b2e60a05f2fc88deaa957991350f822576->enter($__internal_1f39636ee26aa85565f3fe17134902b2e60a05f2fc88deaa957991350f822576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/form.html.twig"));

        // line 2
        echo "

";
        // line 6
        echo "<div class=\"well\">
  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_1f39636ee26aa85565f3fe17134902b2e60a05f2fc88deaa957991350f822576->leave($__internal_1f39636ee26aa85565f3fe17134902b2e60a05f2fc88deaa957991350f822576_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  26 => 6,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/CommandePhysique/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
