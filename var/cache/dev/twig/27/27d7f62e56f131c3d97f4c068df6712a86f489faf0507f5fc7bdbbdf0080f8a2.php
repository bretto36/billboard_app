<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_96d3aebc074c51d40a4577cb091fbeb2282d7126d35787681b12e34329ab224a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482df3438ad482528948dbf3ecfda571f0835d830dfd248e2d64539f75da789a = $this->env->getExtension("native_profiler");
        $__internal_482df3438ad482528948dbf3ecfda571f0835d830dfd248e2d64539f75da789a->enter($__internal_482df3438ad482528948dbf3ecfda571f0835d830dfd248e2d64539f75da789a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482df3438ad482528948dbf3ecfda571f0835d830dfd248e2d64539f75da789a->leave($__internal_482df3438ad482528948dbf3ecfda571f0835d830dfd248e2d64539f75da789a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45dee8131440c7a512e558abb37c6104fb8cda4e6d2c9abfbc75575e6d45a1cd = $this->env->getExtension("native_profiler");
        $__internal_45dee8131440c7a512e558abb37c6104fb8cda4e6d2c9abfbc75575e6d45a1cd->enter($__internal_45dee8131440c7a512e558abb37c6104fb8cda4e6d2c9abfbc75575e6d45a1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_45dee8131440c7a512e558abb37c6104fb8cda4e6d2c9abfbc75575e6d45a1cd->leave($__internal_45dee8131440c7a512e558abb37c6104fb8cda4e6d2c9abfbc75575e6d45a1cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
