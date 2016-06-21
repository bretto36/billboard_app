<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8bf115e37fe11548309ddfc05f0bf67ba0ffbf20fa9eb8b6fcd303864bd121e2 extends Twig_Template
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
        $__internal_08f367dcefaae4fafb9b33b43dbd3d3e2d3849bd6eb139a72371e7f9f9166e78 = $this->env->getExtension("native_profiler");
        $__internal_08f367dcefaae4fafb9b33b43dbd3d3e2d3849bd6eb139a72371e7f9f9166e78->enter($__internal_08f367dcefaae4fafb9b33b43dbd3d3e2d3849bd6eb139a72371e7f9f9166e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_08f367dcefaae4fafb9b33b43dbd3d3e2d3849bd6eb139a72371e7f9f9166e78->leave($__internal_08f367dcefaae4fafb9b33b43dbd3d3e2d3849bd6eb139a72371e7f9f9166e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
