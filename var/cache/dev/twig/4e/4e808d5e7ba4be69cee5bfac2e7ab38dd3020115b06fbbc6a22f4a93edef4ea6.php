<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_f7f1fc4e6bbd8944ccd0bcf2f9f43655ceb2408c804fd840a4ddf11061f15a49 extends Twig_Template
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
        $__internal_bfe4e4b8663e212a884edba3dacfa2adc3f9ac05ebfbcf106b167ed77d3b617c = $this->env->getExtension("native_profiler");
        $__internal_bfe4e4b8663e212a884edba3dacfa2adc3f9ac05ebfbcf106b167ed77d3b617c->enter($__internal_bfe4e4b8663e212a884edba3dacfa2adc3f9ac05ebfbcf106b167ed77d3b617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_bfe4e4b8663e212a884edba3dacfa2adc3f9ac05ebfbcf106b167ed77d3b617c->leave($__internal_bfe4e4b8663e212a884edba3dacfa2adc3f9ac05ebfbcf106b167ed77d3b617c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
