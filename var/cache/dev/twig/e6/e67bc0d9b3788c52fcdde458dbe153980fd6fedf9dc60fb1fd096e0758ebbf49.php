<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_81513ec8d4b0ed41d2d3560c21f51079a99c0c91d1683c1e91bb648f6b088f38 extends Twig_Template
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
        $__internal_3e61062e1f6797f9399a254ba3351f32a671c5b00f02ef262360623fe8b47b0b = $this->env->getExtension("native_profiler");
        $__internal_3e61062e1f6797f9399a254ba3351f32a671c5b00f02ef262360623fe8b47b0b->enter($__internal_3e61062e1f6797f9399a254ba3351f32a671c5b00f02ef262360623fe8b47b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3e61062e1f6797f9399a254ba3351f32a671c5b00f02ef262360623fe8b47b0b->leave($__internal_3e61062e1f6797f9399a254ba3351f32a671c5b00f02ef262360623fe8b47b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
