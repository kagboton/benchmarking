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
        $__internal_370b7b36f9f10e102f5d984f473cf5f8c7ce6bb1166be07bea01334e881f1c02 = $this->env->getExtension("native_profiler");
        $__internal_370b7b36f9f10e102f5d984f473cf5f8c7ce6bb1166be07bea01334e881f1c02->enter($__internal_370b7b36f9f10e102f5d984f473cf5f8c7ce6bb1166be07bea01334e881f1c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_370b7b36f9f10e102f5d984f473cf5f8c7ce6bb1166be07bea01334e881f1c02->leave($__internal_370b7b36f9f10e102f5d984f473cf5f8c7ce6bb1166be07bea01334e881f1c02_prof);

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
