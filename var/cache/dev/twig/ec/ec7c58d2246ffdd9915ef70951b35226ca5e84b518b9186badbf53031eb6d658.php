<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_91ab95b74750149dd9ff48d503847acbb9db0fa4d954c8e4e8aeaa70240faee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ea9cceff4544043139780c5e3cf18c4129625ce1a6eb3364a52fb27a1646a17 = $this->env->getExtension("native_profiler");
        $__internal_0ea9cceff4544043139780c5e3cf18c4129625ce1a6eb3364a52fb27a1646a17->enter($__internal_0ea9cceff4544043139780c5e3cf18c4129625ce1a6eb3364a52fb27a1646a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea9cceff4544043139780c5e3cf18c4129625ce1a6eb3364a52fb27a1646a17->leave($__internal_0ea9cceff4544043139780c5e3cf18c4129625ce1a6eb3364a52fb27a1646a17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_927a53baf16a7971591a2330743caf8951eef22716386526a477499d4de71278 = $this->env->getExtension("native_profiler");
        $__internal_927a53baf16a7971591a2330743caf8951eef22716386526a477499d4de71278->enter($__internal_927a53baf16a7971591a2330743caf8951eef22716386526a477499d4de71278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_927a53baf16a7971591a2330743caf8951eef22716386526a477499d4de71278->leave($__internal_927a53baf16a7971591a2330743caf8951eef22716386526a477499d4de71278_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
