<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_342a5797004ec8ec2ab2a27790a5c741958bcc83630803b826e6339031763d69 extends Twig_Template
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
        $__internal_2441f03963f0fd10af3f8a4f0e4778e95957ccb4f34b3892d834c81e8c65d55e = $this->env->getExtension("native_profiler");
        $__internal_2441f03963f0fd10af3f8a4f0e4778e95957ccb4f34b3892d834c81e8c65d55e->enter($__internal_2441f03963f0fd10af3f8a4f0e4778e95957ccb4f34b3892d834c81e8c65d55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2441f03963f0fd10af3f8a4f0e4778e95957ccb4f34b3892d834c81e8c65d55e->leave($__internal_2441f03963f0fd10af3f8a4f0e4778e95957ccb4f34b3892d834c81e8c65d55e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
