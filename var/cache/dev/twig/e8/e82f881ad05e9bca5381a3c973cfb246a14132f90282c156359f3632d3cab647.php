<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4f676c4438b5069b2d763cf71c24948795730d4f1b1b7a321bf48ffccdf6801f extends Twig_Template
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
        $__internal_f275ef5f4a954dc2da249ebaa558fb5b64430690b0fff50411031b652da88540 = $this->env->getExtension("native_profiler");
        $__internal_f275ef5f4a954dc2da249ebaa558fb5b64430690b0fff50411031b652da88540->enter($__internal_f275ef5f4a954dc2da249ebaa558fb5b64430690b0fff50411031b652da88540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f275ef5f4a954dc2da249ebaa558fb5b64430690b0fff50411031b652da88540->leave($__internal_f275ef5f4a954dc2da249ebaa558fb5b64430690b0fff50411031b652da88540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
