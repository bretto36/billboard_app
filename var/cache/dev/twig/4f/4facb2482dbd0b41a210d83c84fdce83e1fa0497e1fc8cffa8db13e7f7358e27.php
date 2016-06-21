<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_643fefd60003aac06181dc7b17529692f59c526763ed291d5f39d63540295d43 extends Twig_Template
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
        $__internal_e13899a403d269c4094b401e798eb3533935199b02dc4123df464b5ccb058bd4 = $this->env->getExtension("native_profiler");
        $__internal_e13899a403d269c4094b401e798eb3533935199b02dc4123df464b5ccb058bd4->enter($__internal_e13899a403d269c4094b401e798eb3533935199b02dc4123df464b5ccb058bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e13899a403d269c4094b401e798eb3533935199b02dc4123df464b5ccb058bd4->leave($__internal_e13899a403d269c4094b401e798eb3533935199b02dc4123df464b5ccb058bd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
