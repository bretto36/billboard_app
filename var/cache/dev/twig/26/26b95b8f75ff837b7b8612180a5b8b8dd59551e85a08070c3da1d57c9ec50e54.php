<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8f2a179a7723e9905855bab43990e3b80c23036dec658048a17b76acebb8d3f5 extends Twig_Template
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
        $__internal_66ae607b9931d9182917dd035104e03ca470a690b2cbd490f851c42fe914aced = $this->env->getExtension("native_profiler");
        $__internal_66ae607b9931d9182917dd035104e03ca470a690b2cbd490f851c42fe914aced->enter($__internal_66ae607b9931d9182917dd035104e03ca470a690b2cbd490f851c42fe914aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_66ae607b9931d9182917dd035104e03ca470a690b2cbd490f851c42fe914aced->leave($__internal_66ae607b9931d9182917dd035104e03ca470a690b2cbd490f851c42fe914aced_prof);

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
