<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_3923cded73ff241537e6025d191bed1843ebc43136d3a52961df0b0d914964f2 extends Twig_Template
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
        $__internal_e192e04c61a783db2f4a6831b23566d3fde52cf9c034fb5b993db1bcee198f14 = $this->env->getExtension("native_profiler");
        $__internal_e192e04c61a783db2f4a6831b23566d3fde52cf9c034fb5b993db1bcee198f14->enter($__internal_e192e04c61a783db2f4a6831b23566d3fde52cf9c034fb5b993db1bcee198f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<div class=\"panel-heading\">
    <h4 class=\"panel-title\"> Modifier mes informations</h4>
</div>

<div class=\"panel-body\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
        
        $__internal_e192e04c61a783db2f4a6831b23566d3fde52cf9c034fb5b993db1bcee198f14->leave($__internal_e192e04c61a783db2f4a6831b23566d3fde52cf9c034fb5b993db1bcee198f14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  39 => 11,  34 => 9,  30 => 8,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="panel-heading">*/
/*     <h4 class="panel-title"> Modifier mes informations</h4>*/
/* </div>*/
/* */
/* <div class="panel-body">*/
/*     {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
