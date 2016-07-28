<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_ecd70fd3ce40706d19396a94f97998db17b67349eac2de967fcd47227eaa7918 extends Twig_Template
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
        $__internal_ac68aa78b4c12d1f4367ef843766cf33046af055db7438f14cb494c335fd846d = $this->env->getExtension("native_profiler");
        $__internal_ac68aa78b4c12d1f4367ef843766cf33046af055db7438f14cb494c335fd846d->enter($__internal_ac68aa78b4c12d1f4367ef843766cf33046af055db7438f14cb494c335fd846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"panel-heading\">
    <h4 class=\"panel-title\"> Changer mon mot de passe</h4>
</div>

<div class=\"panel-body\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
        
        $__internal_ac68aa78b4c12d1f4367ef843766cf33046af055db7438f14cb494c335fd846d->leave($__internal_ac68aa78b4c12d1f4367ef843766cf33046af055db7438f14cb494c335fd846d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
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
/*     <h4 class="panel-title"> Changer mon mot de passe</h4>*/
/* </div>*/
/* */
/* <div class="panel-body">*/
/*     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
