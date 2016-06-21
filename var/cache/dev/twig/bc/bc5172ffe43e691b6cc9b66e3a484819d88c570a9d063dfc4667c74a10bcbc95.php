<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3cd5b3285914323929de4a4ea86301e74bc616e1ec8c9f774b134bad1bcacaff extends Twig_Template
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
        $__internal_c4cac84d9dc0389f46301897b2f604d251e1cb2aebad23e6c649c7bef943272f = $this->env->getExtension("native_profiler");
        $__internal_c4cac84d9dc0389f46301897b2f604d251e1cb2aebad23e6c649c7bef943272f->enter($__internal_c4cac84d9dc0389f46301897b2f604d251e1cb2aebad23e6c649c7bef943272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c4cac84d9dc0389f46301897b2f604d251e1cb2aebad23e6c649c7bef943272f->leave($__internal_c4cac84d9dc0389f46301897b2f604d251e1cb2aebad23e6c649c7bef943272f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
