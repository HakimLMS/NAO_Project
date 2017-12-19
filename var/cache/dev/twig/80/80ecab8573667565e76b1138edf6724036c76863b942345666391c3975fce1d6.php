<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41c24bfd8926b315bdb90a4c7e2a44b5b20067f9655e5ca345499c4ca68d963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41c24bfd8926b315bdb90a4c7e2a44b5b20067f9655e5ca345499c4ca68d963->enter($__internal_c41c24bfd8926b315bdb90a4c7e2a44b5b20067f9655e5ca345499c4ca68d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_18ae737771ee3105a8cfa120039fceec338ff91c3fb5600e61f0268352788b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ae737771ee3105a8cfa120039fceec338ff91c3fb5600e61f0268352788b39->enter($__internal_18ae737771ee3105a8cfa120039fceec338ff91c3fb5600e61f0268352788b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c41c24bfd8926b315bdb90a4c7e2a44b5b20067f9655e5ca345499c4ca68d963->leave($__internal_c41c24bfd8926b315bdb90a4c7e2a44b5b20067f9655e5ca345499c4ca68d963_prof);

        
        $__internal_18ae737771ee3105a8cfa120039fceec338ff91c3fb5600e61f0268352788b39->leave($__internal_18ae737771ee3105a8cfa120039fceec338ff91c3fb5600e61f0268352788b39_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6ea9eb4dd688d700c0144d99d5953cbccfe77d2ca0baaca9eb9acf8aa1e56c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea9eb4dd688d700c0144d99d5953cbccfe77d2ca0baaca9eb9acf8aa1e56c0e->enter($__internal_6ea9eb4dd688d700c0144d99d5953cbccfe77d2ca0baaca9eb9acf8aa1e56c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8df9ded574c24df1062a7c7bfced8fc5d34cf14ee347eecf029e202534a7b824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df9ded574c24df1062a7c7bfced8fc5d34cf14ee347eecf029e202534a7b824->enter($__internal_8df9ded574c24df1062a7c7bfced8fc5d34cf14ee347eecf029e202534a7b824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_8df9ded574c24df1062a7c7bfced8fc5d34cf14ee347eecf029e202534a7b824->leave($__internal_8df9ded574c24df1062a7c7bfced8fc5d34cf14ee347eecf029e202534a7b824_prof);

        
        $__internal_6ea9eb4dd688d700c0144d99d5953cbccfe77d2ca0baaca9eb9acf8aa1e56c0e->leave($__internal_6ea9eb4dd688d700c0144d99d5953cbccfe77d2ca0baaca9eb9acf8aa1e56c0e_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ae2755f6186724a4a10770f0e7a95c6de593098ac63ae21c204a342e00db3081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2755f6186724a4a10770f0e7a95c6de593098ac63ae21c204a342e00db3081->enter($__internal_ae2755f6186724a4a10770f0e7a95c6de593098ac63ae21c204a342e00db3081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_10ab66b8dd35430e275d392c8ae0d8ea139f3198ed7153f3c241358a8b326fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ab66b8dd35430e275d392c8ae0d8ea139f3198ed7153f3c241358a8b326fad->enter($__internal_10ab66b8dd35430e275d392c8ae0d8ea139f3198ed7153f3c241358a8b326fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_10ab66b8dd35430e275d392c8ae0d8ea139f3198ed7153f3c241358a8b326fad->leave($__internal_10ab66b8dd35430e275d392c8ae0d8ea139f3198ed7153f3c241358a8b326fad_prof);

        
        $__internal_ae2755f6186724a4a10770f0e7a95c6de593098ac63ae21c204a342e00db3081->leave($__internal_ae2755f6186724a4a10770f0e7a95c6de593098ac63ae21c204a342e00db3081_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9f5edca51feeebd3a63ec697ea701c15ec5e5389ac65638b81ca458c6b4caaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5edca51feeebd3a63ec697ea701c15ec5e5389ac65638b81ca458c6b4caaac->enter($__internal_9f5edca51feeebd3a63ec697ea701c15ec5e5389ac65638b81ca458c6b4caaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_a186c71b9b841a988b9cd9cecae9c66b11358e1fa788bc04e0b6a129d8dd201b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a186c71b9b841a988b9cd9cecae9c66b11358e1fa788bc04e0b6a129d8dd201b->enter($__internal_a186c71b9b841a988b9cd9cecae9c66b11358e1fa788bc04e0b6a129d8dd201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_a186c71b9b841a988b9cd9cecae9c66b11358e1fa788bc04e0b6a129d8dd201b->leave($__internal_a186c71b9b841a988b9cd9cecae9c66b11358e1fa788bc04e0b6a129d8dd201b_prof);

        
        $__internal_9f5edca51feeebd3a63ec697ea701c15ec5e5389ac65638b81ca458c6b4caaac->leave($__internal_9f5edca51feeebd3a63ec697ea701c15ec5e5389ac65638b81ca458c6b4caaac_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_215a3ab8fb986996fa7509c60501fb3bad9a70301abc11c2de7a322dcf3f8e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215a3ab8fb986996fa7509c60501fb3bad9a70301abc11c2de7a322dcf3f8e9e->enter($__internal_215a3ab8fb986996fa7509c60501fb3bad9a70301abc11c2de7a322dcf3f8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9d44fa28bf96c6bc0f3b0c3f8e9bb78b57bf550cfcb537bbedb5eec0462a7879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d44fa28bf96c6bc0f3b0c3f8e9bb78b57bf550cfcb537bbedb5eec0462a7879->enter($__internal_9d44fa28bf96c6bc0f3b0c3f8e9bb78b57bf550cfcb537bbedb5eec0462a7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_9d44fa28bf96c6bc0f3b0c3f8e9bb78b57bf550cfcb537bbedb5eec0462a7879->leave($__internal_9d44fa28bf96c6bc0f3b0c3f8e9bb78b57bf550cfcb537bbedb5eec0462a7879_prof);

        
        $__internal_215a3ab8fb986996fa7509c60501fb3bad9a70301abc11c2de7a322dcf3f8e9e->leave($__internal_215a3ab8fb986996fa7509c60501fb3bad9a70301abc11c2de7a322dcf3f8e9e_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
