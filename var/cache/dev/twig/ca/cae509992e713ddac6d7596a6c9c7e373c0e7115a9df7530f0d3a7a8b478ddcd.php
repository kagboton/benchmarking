<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7bde62031f152fabe67af6cad4f5a53b7d635fddbd1a93c39e7097c5ab1e9052 extends Twig_Template
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
        $__internal_f420243800a4903481c8e977d89b09ef251dfcbb24f2de0daceeb99136b0907d = $this->env->getExtension("native_profiler");
        $__internal_f420243800a4903481c8e977d89b09ef251dfcbb24f2de0daceeb99136b0907d->enter($__internal_f420243800a4903481c8e977d89b09ef251dfcbb24f2de0daceeb99136b0907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span3\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        Nous vous invitons à vous inscrire<br />

                    </em>
                </div>

                <div class=\"span4 offset1\">
                    <h4>Inscription</h4>
                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" class=\"btn btn-primary value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_f420243800a4903481c8e977d89b09ef251dfcbb24f2de0daceeb99136b0907d->leave($__internal_f420243800a4903481c8e977d89b09ef251dfcbb24f2de0daceeb99136b0907d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 23,  49 => 21,  44 => 19,  40 => 18,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Connexion</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span3">*/
/*                     <h4>Pas encore inscrit ?</h4>*/
/*                     <em>*/
/*                         Nous vous invitons à vous inscrire<br />*/
/* */
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset1">*/
/*                     <h4>Inscription</h4>*/
/*                     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input type="submit" class="btn btn-primary value="{{ 'registration.submit'|trans }}" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
