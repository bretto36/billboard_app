<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bc8a9b6342c4abb8f9ca7221e8a7644cad4d7a9fdb1503b126899cc3b20a28ed extends Twig_Template
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
        $__internal_3cd25cb3b2ba1dbc6dbc6a37bf7c562e01e31bbd3db9fb7a29205b7571f0f356 = $this->env->getExtension("native_profiler");
        $__internal_3cd25cb3b2ba1dbc6dbc6a37bf7c562e01e31bbd3db9fb7a29205b7571f0f356->enter($__internal_3cd25cb3b2ba1dbc6dbc6a37bf7c562e01e31bbd3db9fb7a29205b7571f0f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3cd25cb3b2ba1dbc6dbc6a37bf7c562e01e31bbd3db9fb7a29205b7571f0f356->leave($__internal_3cd25cb3b2ba1dbc6dbc6a37bf7c562e01e31bbd3db9fb7a29205b7571f0f356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
