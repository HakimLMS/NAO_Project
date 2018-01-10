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
        $__internal_48e1894bf7c5ddfb41ec0443995d7e644e377ca7fd8dc91fbf44b6e46ee17ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e1894bf7c5ddfb41ec0443995d7e644e377ca7fd8dc91fbf44b6e46ee17ca0->enter($__internal_48e1894bf7c5ddfb41ec0443995d7e644e377ca7fd8dc91fbf44b6e46ee17ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_00330845696bb4857b1dc72ae0c327f3eeb8cb297fd045775f8133cde42c5858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00330845696bb4857b1dc72ae0c327f3eeb8cb297fd045775f8133cde42c5858->enter($__internal_00330845696bb4857b1dc72ae0c327f3eeb8cb297fd045775f8133cde42c5858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_48e1894bf7c5ddfb41ec0443995d7e644e377ca7fd8dc91fbf44b6e46ee17ca0->leave($__internal_48e1894bf7c5ddfb41ec0443995d7e644e377ca7fd8dc91fbf44b6e46ee17ca0_prof);

        
        $__internal_00330845696bb4857b1dc72ae0c327f3eeb8cb297fd045775f8133cde42c5858->leave($__internal_00330845696bb4857b1dc72ae0c327f3eeb8cb297fd045775f8133cde42c5858_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c23c3cb921e1fe74155bf1eedd94091f1a4a0b63e6d71d687c14ceba30c23f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23c3cb921e1fe74155bf1eedd94091f1a4a0b63e6d71d687c14ceba30c23f1b->enter($__internal_c23c3cb921e1fe74155bf1eedd94091f1a4a0b63e6d71d687c14ceba30c23f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bc295cceb82b18fd721dcd65647ba1254459ffbc0762bb9afcd38b3dbe87efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc295cceb82b18fd721dcd65647ba1254459ffbc0762bb9afcd38b3dbe87efe8->enter($__internal_bc295cceb82b18fd721dcd65647ba1254459ffbc0762bb9afcd38b3dbe87efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_bc295cceb82b18fd721dcd65647ba1254459ffbc0762bb9afcd38b3dbe87efe8->leave($__internal_bc295cceb82b18fd721dcd65647ba1254459ffbc0762bb9afcd38b3dbe87efe8_prof);

        
        $__internal_c23c3cb921e1fe74155bf1eedd94091f1a4a0b63e6d71d687c14ceba30c23f1b->leave($__internal_c23c3cb921e1fe74155bf1eedd94091f1a4a0b63e6d71d687c14ceba30c23f1b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_92c522afe046b3410adec3c3556dab84e63ac26f8365572ab830d7bb4aad9c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c522afe046b3410adec3c3556dab84e63ac26f8365572ab830d7bb4aad9c2a->enter($__internal_92c522afe046b3410adec3c3556dab84e63ac26f8365572ab830d7bb4aad9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0b6175e173fe282272ff46e24f85fcfe68695ec997829892b39d2e5eccb7dca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6175e173fe282272ff46e24f85fcfe68695ec997829892b39d2e5eccb7dca1->enter($__internal_0b6175e173fe282272ff46e24f85fcfe68695ec997829892b39d2e5eccb7dca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0b6175e173fe282272ff46e24f85fcfe68695ec997829892b39d2e5eccb7dca1->leave($__internal_0b6175e173fe282272ff46e24f85fcfe68695ec997829892b39d2e5eccb7dca1_prof);

        
        $__internal_92c522afe046b3410adec3c3556dab84e63ac26f8365572ab830d7bb4aad9c2a->leave($__internal_92c522afe046b3410adec3c3556dab84e63ac26f8365572ab830d7bb4aad9c2a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_4bbe2c10693770c11e80243f8037ecd241d36e13001fb3bd9599f393718955c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbe2c10693770c11e80243f8037ecd241d36e13001fb3bd9599f393718955c9->enter($__internal_4bbe2c10693770c11e80243f8037ecd241d36e13001fb3bd9599f393718955c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_160c3816f1074aa06c06d89e62ac040d252544cdcc4e94b31c50997cea22cff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160c3816f1074aa06c06d89e62ac040d252544cdcc4e94b31c50997cea22cff4->enter($__internal_160c3816f1074aa06c06d89e62ac040d252544cdcc4e94b31c50997cea22cff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_160c3816f1074aa06c06d89e62ac040d252544cdcc4e94b31c50997cea22cff4->leave($__internal_160c3816f1074aa06c06d89e62ac040d252544cdcc4e94b31c50997cea22cff4_prof);

        
        $__internal_4bbe2c10693770c11e80243f8037ecd241d36e13001fb3bd9599f393718955c9->leave($__internal_4bbe2c10693770c11e80243f8037ecd241d36e13001fb3bd9599f393718955c9_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9d67e6405db368486b2489e1eba2dacef65f4942b294034d7df7b9096d98640b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d67e6405db368486b2489e1eba2dacef65f4942b294034d7df7b9096d98640b->enter($__internal_9d67e6405db368486b2489e1eba2dacef65f4942b294034d7df7b9096d98640b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a184fb7af04959f3ec450a7ec1e64d88020730aef08c690a8e73698a019181a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a184fb7af04959f3ec450a7ec1e64d88020730aef08c690a8e73698a019181a8->enter($__internal_a184fb7af04959f3ec450a7ec1e64d88020730aef08c690a8e73698a019181a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_a184fb7af04959f3ec450a7ec1e64d88020730aef08c690a8e73698a019181a8->leave($__internal_a184fb7af04959f3ec450a7ec1e64d88020730aef08c690a8e73698a019181a8_prof);

        
        $__internal_9d67e6405db368486b2489e1eba2dacef65f4942b294034d7df7b9096d98640b->leave($__internal_9d67e6405db368486b2489e1eba2dacef65f4942b294034d7df7b9096d98640b_prof);

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
