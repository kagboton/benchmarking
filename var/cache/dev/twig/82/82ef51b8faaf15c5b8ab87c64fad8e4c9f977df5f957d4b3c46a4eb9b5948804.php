<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_230df3fc15dd1f17eafdfc369913a3e3dc3abb8073cdc532cefd9cf8937d8ffd extends Twig_Template
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
        $__internal_7f487842294535e1a8182c4de9c8a974b75b7595ae7e02114afb605df7cabd17 = $this->env->getExtension("native_profiler");
        $__internal_7f487842294535e1a8182c4de9c8a974b75b7595ae7e02114afb605df7cabd17->enter($__internal_7f487842294535e1a8182c4de9c8a974b75b7595ae7e02114afb605df7cabd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"panel-heading\">
    <h4 class=\"panel-title\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())), "html", null, true);
        echo "</h4>
</div>


<div class=\"panel-body\">
    <div class=\"row\">
        <div class=\"col-md-3 col-lg-3 \" align=\"center\"> <img alt=\"User Pic\" src=\"http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png\" class=\"img-circle img-responsive\"> </div>

        <div class=\" col-md-9 col-lg-9 \">
            <table class=\"table table-user-information\">
                <tbody>
                <tr>
                    <td>Rôle:</td>
                    <td>Administrateur</td>
                </tr>
                    <tr>
                        <td>Nom:</td>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Prénom:</td>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>

                    <tr>
                        <td>Email</td>
                        <td><a href=\"mailto:info@support.com\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</a></td>
                    </tr>

                </tbody>
            </table>

            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier mes informations</a>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span>Changer de mot de passe</a>
        </div>
    </div>

</div>

<div class=\"panel-footer\">
    <a data-original-title=\"Message\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-primary\"><i class=\"glyphicon glyphicon-envelope\"></i></a>

</div>
";
        
        $__internal_7f487842294535e1a8182c4de9c8a974b75b7595ae7e02114afb605df7cabd17->leave($__internal_7f487842294535e1a8182c4de9c8a974b75b7595ae7e02114afb605df7cabd17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 39,  74 => 38,  65 => 32,  55 => 25,  48 => 21,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="panel-heading">*/
/*     <h4 class="panel-title"> {{ user.prenom }}  {{ user.nom | upper }}</h4>*/
/* </div>*/
/* */
/* */
/* <div class="panel-body">*/
/*     <div class="row">*/
/*         <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>*/
/* */
/*         <div class=" col-md-9 col-lg-9 ">*/
/*             <table class="table table-user-information">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td>Rôle:</td>*/
/*                     <td>Administrateur</td>*/
/*                 </tr>*/
/*                     <tr>*/
/*                         <td>Nom:</td>*/
/*                         <td>{{user.nom }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Prénom:</td>*/
/*                         <td>{{ user.prenom }}</td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/* */
/*                     <tr>*/
/*                         <td>Email</td>*/
/*                         <td><a href="mailto:info@support.com">{{ user.email }}</a></td>*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*             <a href="{{ path('fos_user_profile_edit') }}"  class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier mes informations</a>*/
/*             <a href="{{ path('fos_user_change_password') }}" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>Changer de mot de passe</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div class="panel-footer">*/
/*     <a data-original-title="Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>*/
/* */
/* </div>*/
/* */
