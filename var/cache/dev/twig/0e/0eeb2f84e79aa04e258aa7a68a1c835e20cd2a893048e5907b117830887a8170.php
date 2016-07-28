<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a723d0e3cb9ae4a1d295bc4da681b637ec8fec1abf5a1f807c4b3f340408ebad extends Twig_Template
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
        $__internal_fa5332e50d91d013166a316a28bbcd15bbbfaf802f64367682180d675a0de7de = $this->env->getExtension("native_profiler");
        $__internal_fa5332e50d91d013166a316a28bbcd15bbbfaf802f64367682180d675a0de7de->enter($__internal_fa5332e50d91d013166a316a28bbcd15bbbfaf802f64367682180d675a0de7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa5332e50d91d013166a316a28bbcd15bbbfaf802f64367682180d675a0de7de->leave($__internal_fa5332e50d91d013166a316a28bbcd15bbbfaf802f64367682180d675a0de7de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc70c63be5e0cb8c48c4948de87404ef4c1d7a194d35c230445d2da74a4e48f4 = $this->env->getExtension("native_profiler");
        $__internal_bc70c63be5e0cb8c48c4948de87404ef4c1d7a194d35c230445d2da74a4e48f4->enter($__internal_bc70c63be5e0cb8c48c4948de87404ef4c1d7a194d35c230445d2da74a4e48f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bc70c63be5e0cb8c48c4948de87404ef4c1d7a194d35c230445d2da74a4e48f4->leave($__internal_bc70c63be5e0cb8c48c4948de87404ef4c1d7a194d35c230445d2da74a4e48f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
