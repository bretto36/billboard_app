<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_d6d1ff84504e075d589f0c20e97997a09e58bee89aa95a1100c8ea9a51200ff2 extends Twig_Template
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
        $__internal_5908eb3b6965f84599e2c8717d6f848c98aabe9f4d8158d599ffaf467735d12f = $this->env->getExtension("native_profiler");
        $__internal_5908eb3b6965f84599e2c8717d6f848c98aabe9f4d8158d599ffaf467735d12f->enter($__internal_5908eb3b6965f84599e2c8717d6f848c98aabe9f4d8158d599ffaf467735d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5908eb3b6965f84599e2c8717d6f848c98aabe9f4d8158d599ffaf467735d12f->leave($__internal_5908eb3b6965f84599e2c8717d6f848c98aabe9f4d8158d599ffaf467735d12f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
