<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_d0359bfdc67161c7674d4521d562bd4962724dd2ada9627b1f983e408666fd93 extends Twig_Template
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
        $__internal_3cfb5bc54c0b5676d6fc14fc79eb87ba2b82a06a37335bd45ee02a6679d04b4b = $this->env->getExtension("native_profiler");
        $__internal_3cfb5bc54c0b5676d6fc14fc79eb87ba2b82a06a37335bd45ee02a6679d04b4b->enter($__internal_3cfb5bc54c0b5676d6fc14fc79eb87ba2b82a06a37335bd45ee02a6679d04b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_3cfb5bc54c0b5676d6fc14fc79eb87ba2b82a06a37335bd45ee02a6679d04b4b->leave($__internal_3cfb5bc54c0b5676d6fc14fc79eb87ba2b82a06a37335bd45ee02a6679d04b4b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
