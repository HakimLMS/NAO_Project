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
        $__internal_e6241631e4b58a9f04a496c5097db8553deac12bf152855fbdf935c4a7a42efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6241631e4b58a9f04a496c5097db8553deac12bf152855fbdf935c4a7a42efc->enter($__internal_e6241631e4b58a9f04a496c5097db8553deac12bf152855fbdf935c4a7a42efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3c999d9e472c78cbf645b09f0cc2e94898ee2d684c8d55cbb4525cdbde23b1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c999d9e472c78cbf645b09f0cc2e94898ee2d684c8d55cbb4525cdbde23b1c8->enter($__internal_3c999d9e472c78cbf645b09f0cc2e94898ee2d684c8d55cbb4525cdbde23b1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e6241631e4b58a9f04a496c5097db8553deac12bf152855fbdf935c4a7a42efc->leave($__internal_e6241631e4b58a9f04a496c5097db8553deac12bf152855fbdf935c4a7a42efc_prof);

        
        $__internal_3c999d9e472c78cbf645b09f0cc2e94898ee2d684c8d55cbb4525cdbde23b1c8->leave($__internal_3c999d9e472c78cbf645b09f0cc2e94898ee2d684c8d55cbb4525cdbde23b1c8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_684820b56798b74e9cfe0a9a8899b833a3e618612d6454e0772e965566a51b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684820b56798b74e9cfe0a9a8899b833a3e618612d6454e0772e965566a51b11->enter($__internal_684820b56798b74e9cfe0a9a8899b833a3e618612d6454e0772e965566a51b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_40f37b45fc5fe1b9d59f2c4beb74198ace45b7c123e7c065f6ba5ad8ae722c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f37b45fc5fe1b9d59f2c4beb74198ace45b7c123e7c065f6ba5ad8ae722c82->enter($__internal_40f37b45fc5fe1b9d59f2c4beb74198ace45b7c123e7c065f6ba5ad8ae722c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_40f37b45fc5fe1b9d59f2c4beb74198ace45b7c123e7c065f6ba5ad8ae722c82->leave($__internal_40f37b45fc5fe1b9d59f2c4beb74198ace45b7c123e7c065f6ba5ad8ae722c82_prof);

        
        $__internal_684820b56798b74e9cfe0a9a8899b833a3e618612d6454e0772e965566a51b11->leave($__internal_684820b56798b74e9cfe0a9a8899b833a3e618612d6454e0772e965566a51b11_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3071cde97a835f749e70089818177690c0e6278b7826887ff6b7c547e469708a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3071cde97a835f749e70089818177690c0e6278b7826887ff6b7c547e469708a->enter($__internal_3071cde97a835f749e70089818177690c0e6278b7826887ff6b7c547e469708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_73f9bbc322558e6a028b0f23443f95aaadc847ce5a57b287fabef9453abbd140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f9bbc322558e6a028b0f23443f95aaadc847ce5a57b287fabef9453abbd140->enter($__internal_73f9bbc322558e6a028b0f23443f95aaadc847ce5a57b287fabef9453abbd140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_73f9bbc322558e6a028b0f23443f95aaadc847ce5a57b287fabef9453abbd140->leave($__internal_73f9bbc322558e6a028b0f23443f95aaadc847ce5a57b287fabef9453abbd140_prof);

        
        $__internal_3071cde97a835f749e70089818177690c0e6278b7826887ff6b7c547e469708a->leave($__internal_3071cde97a835f749e70089818177690c0e6278b7826887ff6b7c547e469708a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3d8d4a6c4c01d8b37d38fbfbe65f05471d27573a4088918b56174818b02f59e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8d4a6c4c01d8b37d38fbfbe65f05471d27573a4088918b56174818b02f59e1->enter($__internal_3d8d4a6c4c01d8b37d38fbfbe65f05471d27573a4088918b56174818b02f59e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_e4a572cd6c96aa1283a756cd26bea59497c91ab85c6c2fefe1af1754822b1ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a572cd6c96aa1283a756cd26bea59497c91ab85c6c2fefe1af1754822b1ffd->enter($__internal_e4a572cd6c96aa1283a756cd26bea59497c91ab85c6c2fefe1af1754822b1ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_e4a572cd6c96aa1283a756cd26bea59497c91ab85c6c2fefe1af1754822b1ffd->leave($__internal_e4a572cd6c96aa1283a756cd26bea59497c91ab85c6c2fefe1af1754822b1ffd_prof);

        
        $__internal_3d8d4a6c4c01d8b37d38fbfbe65f05471d27573a4088918b56174818b02f59e1->leave($__internal_3d8d4a6c4c01d8b37d38fbfbe65f05471d27573a4088918b56174818b02f59e1_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_023405f3c6e7faee16b6128d8dd8ebd5df575ae0cacce0b823d7ff3f63574477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023405f3c6e7faee16b6128d8dd8ebd5df575ae0cacce0b823d7ff3f63574477->enter($__internal_023405f3c6e7faee16b6128d8dd8ebd5df575ae0cacce0b823d7ff3f63574477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_1e503b6c09033cddec855734bc0162f09f58fbb32ecfcaaa0bd24b5363518b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e503b6c09033cddec855734bc0162f09f58fbb32ecfcaaa0bd24b5363518b07->enter($__internal_1e503b6c09033cddec855734bc0162f09f58fbb32ecfcaaa0bd24b5363518b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_1e503b6c09033cddec855734bc0162f09f58fbb32ecfcaaa0bd24b5363518b07->leave($__internal_1e503b6c09033cddec855734bc0162f09f58fbb32ecfcaaa0bd24b5363518b07_prof);

        
        $__internal_023405f3c6e7faee16b6128d8dd8ebd5df575ae0cacce0b823d7ff3f63574477->leave($__internal_023405f3c6e7faee16b6128d8dd8ebd5df575ae0cacce0b823d7ff3f63574477_prof);

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
