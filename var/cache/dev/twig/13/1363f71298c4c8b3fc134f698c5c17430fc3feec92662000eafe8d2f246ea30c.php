<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_e5a385dd733f75b06adc8b6a17390fe8da7d9aecf33a08ab151b6c92e2281e4f extends Twig_Template
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
        $__internal_c2f86b1d8438dccacd71f03498325ccff13613e73b9545adeb9874f1110840b3 = $this->env->getExtension("native_profiler");
        $__internal_c2f86b1d8438dccacd71f03498325ccff13613e73b9545adeb9874f1110840b3->enter($__internal_c2f86b1d8438dccacd71f03498325ccff13613e73b9545adeb9874f1110840b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_c2f86b1d8438dccacd71f03498325ccff13613e73b9545adeb9874f1110840b3->leave($__internal_c2f86b1d8438dccacd71f03498325ccff13613e73b9545adeb9874f1110840b3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
