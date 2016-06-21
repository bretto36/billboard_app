<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_26b513811b8943c8b4198e1666ae87ddacced3c43305bb540a8732eb383eb396 extends Twig_Template
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
        $__internal_fc7e9cf42acb370a56ca9533a143e6d497931c98d4a2bb65d55a2baaa34b164a = $this->env->getExtension("native_profiler");
        $__internal_fc7e9cf42acb370a56ca9533a143e6d497931c98d4a2bb65d55a2baaa34b164a->enter($__internal_fc7e9cf42acb370a56ca9533a143e6d497931c98d4a2bb65d55a2baaa34b164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fc7e9cf42acb370a56ca9533a143e6d497931c98d4a2bb65d55a2baaa34b164a->leave($__internal_fc7e9cf42acb370a56ca9533a143e6d497931c98d4a2bb65d55a2baaa34b164a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
