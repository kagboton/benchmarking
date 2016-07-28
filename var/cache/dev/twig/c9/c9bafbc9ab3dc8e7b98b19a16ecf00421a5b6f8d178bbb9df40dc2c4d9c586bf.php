<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_04e065bc756b19635474550573530ed46f51e721f2df612b30e759bef349199f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d485d0f876c8fbd1111ba8ff1f3be711c9ea5a68233f8dc48afd133bead3c1 = $this->env->getExtension("native_profiler");
        $__internal_17d485d0f876c8fbd1111ba8ff1f3be711c9ea5a68233f8dc48afd133bead3c1->enter($__internal_17d485d0f876c8fbd1111ba8ff1f3be711c9ea5a68233f8dc48afd133bead3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17d485d0f876c8fbd1111ba8ff1f3be711c9ea5a68233f8dc48afd133bead3c1->leave($__internal_17d485d0f876c8fbd1111ba8ff1f3be711c9ea5a68233f8dc48afd133bead3c1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b69a634d4a39d19d83b085261bac0e4b728ef10d13f16ecc588ca5b868c8279d = $this->env->getExtension("native_profiler");
        $__internal_b69a634d4a39d19d83b085261bac0e4b728ef10d13f16ecc588ca5b868c8279d->enter($__internal_b69a634d4a39d19d83b085261bac0e4b728ef10d13f16ecc588ca5b868c8279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b69a634d4a39d19d83b085261bac0e4b728ef10d13f16ecc588ca5b868c8279d->leave($__internal_b69a634d4a39d19d83b085261bac0e4b728ef10d13f16ecc588ca5b868c8279d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
