<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_2509d21d715c10572ead276c765bb788f0085eeb31a55a7e879741c9b10a4448 extends Twig_Template
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
        $__internal_93fc2b2011102458bb2aa803bd6f5ae070ee74648e6a16e5857219395083c8eb = $this->env->getExtension("native_profiler");
        $__internal_93fc2b2011102458bb2aa803bd6f5ae070ee74648e6a16e5857219395083c8eb->enter($__internal_93fc2b2011102458bb2aa803bd6f5ae070ee74648e6a16e5857219395083c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

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
        
        $__internal_93fc2b2011102458bb2aa803bd6f5ae070ee74648e6a16e5857219395083c8eb->leave($__internal_93fc2b2011102458bb2aa803bd6f5ae070ee74648e6a16e5857219395083c8eb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
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
