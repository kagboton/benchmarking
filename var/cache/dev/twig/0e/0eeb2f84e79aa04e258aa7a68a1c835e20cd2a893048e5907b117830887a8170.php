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
        $__internal_ac5ea182b52de848a5cb78002e7620c49ce1b39296bfc47572900db1ab938f45 = $this->env->getExtension("native_profiler");
        $__internal_ac5ea182b52de848a5cb78002e7620c49ce1b39296bfc47572900db1ab938f45->enter($__internal_ac5ea182b52de848a5cb78002e7620c49ce1b39296bfc47572900db1ab938f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac5ea182b52de848a5cb78002e7620c49ce1b39296bfc47572900db1ab938f45->leave($__internal_ac5ea182b52de848a5cb78002e7620c49ce1b39296bfc47572900db1ab938f45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1315197e6823321df4a919caa7ce67458b125520f8b8bdb4e3e009e3def40a14 = $this->env->getExtension("native_profiler");
        $__internal_1315197e6823321df4a919caa7ce67458b125520f8b8bdb4e3e009e3def40a14->enter($__internal_1315197e6823321df4a919caa7ce67458b125520f8b8bdb4e3e009e3def40a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1315197e6823321df4a919caa7ce67458b125520f8b8bdb4e3e009e3def40a14->leave($__internal_1315197e6823321df4a919caa7ce67458b125520f8b8bdb4e3e009e3def40a14_prof);

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
