<?php

/* BenchmarkingBundle:Default/TypeRetourActivation:form.html.twig */
class __TwigTemplate_b10925b65eb2d7d973bc4398613348602963c67e94a4066f05c764339a9be432 extends Twig_Template
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
        $__internal_e3f159c78d92a3bb180d6dc506f37e90a2c2e99a0afd2bcef2c046cc7007cc6f = $this->env->getExtension("native_profiler");
        $__internal_e3f159c78d92a3bb180d6dc506f37e90a2c2e99a0afd2bcef2c046cc7007cc6f->enter($__internal_e3f159c78d92a3bb180d6dc506f37e90a2c2e99a0afd2bcef2c046cc7007cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeRetourActivation:form.html.twig"));

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
        
        $__internal_e3f159c78d92a3bb180d6dc506f37e90a2c2e99a0afd2bcef2c046cc7007cc6f->leave($__internal_e3f159c78d92a3bb180d6dc506f37e90a2c2e99a0afd2bcef2c046cc7007cc6f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeRetourActivation:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeRetourActivation/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
