<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7652f3ae2be6c8944872e62857dcf9fb1ef85de2c6688ec8b6890072c10aadb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7121640d28fde10dcdf6e99dbaf1ee658854d2e20cddf0697a75ce622beec3fd = $this->env->getExtension("native_profiler");
        $__internal_7121640d28fde10dcdf6e99dbaf1ee658854d2e20cddf0697a75ce622beec3fd->enter($__internal_7121640d28fde10dcdf6e99dbaf1ee658854d2e20cddf0697a75ce622beec3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>

    <body>

        <div class=\"container\">

            ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "
        </div>

    </body>
</html>
";
        
        $__internal_7121640d28fde10dcdf6e99dbaf1ee658854d2e20cddf0697a75ce622beec3fd->leave($__internal_7121640d28fde10dcdf6e99dbaf1ee658854d2e20cddf0697a75ce622beec3fd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_866af18ce1685e41e0c903af094ad3f48a7da1a62b9e47d8121cdd2fac103410 = $this->env->getExtension("native_profiler");
        $__internal_866af18ce1685e41e0c903af094ad3f48a7da1a62b9e47d8121cdd2fac103410->enter($__internal_866af18ce1685e41e0c903af094ad3f48a7da1a62b9e47d8121cdd2fac103410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        
        $__internal_866af18ce1685e41e0c903af094ad3f48a7da1a62b9e47d8121cdd2fac103410->leave($__internal_866af18ce1685e41e0c903af094ad3f48a7da1a62b9e47d8121cdd2fac103410_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e14bcc033c6377ab14e919e73fc4c79a9a75b395bfdbda5ec0d2744a20b43b58 = $this->env->getExtension("native_profiler");
        $__internal_e14bcc033c6377ab14e919e73fc4c79a9a75b395bfdbda5ec0d2744a20b43b58->enter($__internal_e14bcc033c6377ab14e919e73fc4c79a9a75b395bfdbda5ec0d2744a20b43b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_e14bcc033c6377ab14e919e73fc4c79a9a75b395bfdbda5ec0d2744a20b43b58->leave($__internal_e14bcc033c6377ab14e919e73fc4c79a9a75b395bfdbda5ec0d2744a20b43b58_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  107 => 25,  100 => 8,  94 => 7,  82 => 27,  80 => 25,  77 => 24,  74 => 23,  68 => 22,  59 => 19,  54 => 18,  49 => 17,  44 => 16,  42 => 15,  34 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div class="container">*/
/* */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/* */
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
