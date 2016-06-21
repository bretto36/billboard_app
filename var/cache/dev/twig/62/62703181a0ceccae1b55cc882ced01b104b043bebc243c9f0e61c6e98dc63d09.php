<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_39d45442cf07a00473d1a42baf3d524a49c9e4fb859982b636178c2bcd6a8f73 extends Twig_Template
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
        $__internal_4d904fb866fe01deefc35b13ead97ab1739818c4938b2455cecdd807c6a5bdea = $this->env->getExtension("native_profiler");
        $__internal_4d904fb866fe01deefc35b13ead97ab1739818c4938b2455cecdd807c6a5bdea->enter($__internal_4d904fb866fe01deefc35b13ead97ab1739818c4938b2455cecdd807c6a5bdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4d904fb866fe01deefc35b13ead97ab1739818c4938b2455cecdd807c6a5bdea->leave($__internal_4d904fb866fe01deefc35b13ead97ab1739818c4938b2455cecdd807c6a5bdea_prof);

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
