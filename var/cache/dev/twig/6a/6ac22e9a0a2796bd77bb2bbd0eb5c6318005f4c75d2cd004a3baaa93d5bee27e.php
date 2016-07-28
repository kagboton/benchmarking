<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ef22d8a394fe52b16f646eb0e4175f9256195c0df3b94ade866d244c0b63c98a extends Twig_Template
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
        $__internal_9ae4098d2eff2eaa5a8f9aa81f36eed7d10023c9cfd1ef041255c76aa6f47152 = $this->env->getExtension("native_profiler");
        $__internal_9ae4098d2eff2eaa5a8f9aa81f36eed7d10023c9cfd1ef041255c76aa6f47152->enter($__internal_9ae4098d2eff2eaa5a8f9aa81f36eed7d10023c9cfd1ef041255c76aa6f47152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9ae4098d2eff2eaa5a8f9aa81f36eed7d10023c9cfd1ef041255c76aa6f47152->leave($__internal_9ae4098d2eff2eaa5a8f9aa81f36eed7d10023c9cfd1ef041255c76aa6f47152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
