<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_79fd0b2c3b1007b673059d59e3302ccf08d8fb17b369ebb381ae6c7cd2f9b4af extends Twig_Template
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
        $__internal_b1b5997dbe78652e1276874fb6e43803070a5b189102678afb093cff2509486a = $this->env->getExtension("native_profiler");
        $__internal_b1b5997dbe78652e1276874fb6e43803070a5b189102678afb093cff2509486a->enter($__internal_b1b5997dbe78652e1276874fb6e43803070a5b189102678afb093cff2509486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b1b5997dbe78652e1276874fb6e43803070a5b189102678afb093cff2509486a->leave($__internal_b1b5997dbe78652e1276874fb6e43803070a5b189102678afb093cff2509486a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
