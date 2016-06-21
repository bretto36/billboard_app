<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b077f1869a81127c2649e7c78344cf2b43fdd91d7e5dfb1116d8ac344c0656fb extends Twig_Template
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
        $__internal_52d5d13500132ae700ef6bb4c7c491be7e48f0c6fd7b9542a57cd1a65a87daeb = $this->env->getExtension("native_profiler");
        $__internal_52d5d13500132ae700ef6bb4c7c491be7e48f0c6fd7b9542a57cd1a65a87daeb->enter($__internal_52d5d13500132ae700ef6bb4c7c491be7e48f0c6fd7b9542a57cd1a65a87daeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_52d5d13500132ae700ef6bb4c7c491be7e48f0c6fd7b9542a57cd1a65a87daeb->leave($__internal_52d5d13500132ae700ef6bb4c7c491be7e48f0c6fd7b9542a57cd1a65a87daeb_prof);

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
