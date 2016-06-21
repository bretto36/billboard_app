<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_e78d11b98f48dec210de8babb8e348166363e48f070060637663fdb78b1a7ee8 extends Twig_Template
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
        $__internal_98b2ba501f6e74287ece6cf3f5b109d0a9f43d9bbf3354c509d279153e1d4529 = $this->env->getExtension("native_profiler");
        $__internal_98b2ba501f6e74287ece6cf3f5b109d0a9f43d9bbf3354c509d279153e1d4529->enter($__internal_98b2ba501f6e74287ece6cf3f5b109d0a9f43d9bbf3354c509d279153e1d4529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_98b2ba501f6e74287ece6cf3f5b109d0a9f43d9bbf3354c509d279153e1d4529->leave($__internal_98b2ba501f6e74287ece6cf3f5b109d0a9f43d9bbf3354c509d279153e1d4529_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
