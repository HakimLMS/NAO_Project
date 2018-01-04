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
        $__internal_3720a5d10d031cbdd2ba8753c31a1875fd5578a496590ef46abeede48345ba50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3720a5d10d031cbdd2ba8753c31a1875fd5578a496590ef46abeede48345ba50->enter($__internal_3720a5d10d031cbdd2ba8753c31a1875fd5578a496590ef46abeede48345ba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_e2e66428b545de304fdf8b3221c01913e68571e5fc72e28f0d9a82e96ced52b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e66428b545de304fdf8b3221c01913e68571e5fc72e28f0d9a82e96ced52b8->enter($__internal_e2e66428b545de304fdf8b3221c01913e68571e5fc72e28f0d9a82e96ced52b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3720a5d10d031cbdd2ba8753c31a1875fd5578a496590ef46abeede48345ba50->leave($__internal_3720a5d10d031cbdd2ba8753c31a1875fd5578a496590ef46abeede48345ba50_prof);

        
        $__internal_e2e66428b545de304fdf8b3221c01913e68571e5fc72e28f0d9a82e96ced52b8->leave($__internal_e2e66428b545de304fdf8b3221c01913e68571e5fc72e28f0d9a82e96ced52b8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8e428773b4c57fae372fda0553e213288491c01f4c4adf8f8a16cb58b2297787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e428773b4c57fae372fda0553e213288491c01f4c4adf8f8a16cb58b2297787->enter($__internal_8e428773b4c57fae372fda0553e213288491c01f4c4adf8f8a16cb58b2297787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3bb5eb2e72b03a15d92a11d1f9e4cb8101136603a10f4c4539fc7454b41663ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb5eb2e72b03a15d92a11d1f9e4cb8101136603a10f4c4539fc7454b41663ab->enter($__internal_3bb5eb2e72b03a15d92a11d1f9e4cb8101136603a10f4c4539fc7454b41663ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3bb5eb2e72b03a15d92a11d1f9e4cb8101136603a10f4c4539fc7454b41663ab->leave($__internal_3bb5eb2e72b03a15d92a11d1f9e4cb8101136603a10f4c4539fc7454b41663ab_prof);

        
        $__internal_8e428773b4c57fae372fda0553e213288491c01f4c4adf8f8a16cb58b2297787->leave($__internal_8e428773b4c57fae372fda0553e213288491c01f4c4adf8f8a16cb58b2297787_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2c284681a16e20598f4908ff79df141f6e9f40682b6e98f4cd3c71baf4da8b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c284681a16e20598f4908ff79df141f6e9f40682b6e98f4cd3c71baf4da8b24->enter($__internal_2c284681a16e20598f4908ff79df141f6e9f40682b6e98f4cd3c71baf4da8b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_35118e43f3f20e02fcaf700be2a1f6b65b9cae2f752271f9bd24c2a172d3b3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35118e43f3f20e02fcaf700be2a1f6b65b9cae2f752271f9bd24c2a172d3b3f4->enter($__internal_35118e43f3f20e02fcaf700be2a1f6b65b9cae2f752271f9bd24c2a172d3b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_35118e43f3f20e02fcaf700be2a1f6b65b9cae2f752271f9bd24c2a172d3b3f4->leave($__internal_35118e43f3f20e02fcaf700be2a1f6b65b9cae2f752271f9bd24c2a172d3b3f4_prof);

        
        $__internal_2c284681a16e20598f4908ff79df141f6e9f40682b6e98f4cd3c71baf4da8b24->leave($__internal_2c284681a16e20598f4908ff79df141f6e9f40682b6e98f4cd3c71baf4da8b24_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0923fe9dfb1ea1f8406f499077729508f9238b5f62b5c9c0dbfd0efe0594408e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0923fe9dfb1ea1f8406f499077729508f9238b5f62b5c9c0dbfd0efe0594408e->enter($__internal_0923fe9dfb1ea1f8406f499077729508f9238b5f62b5c9c0dbfd0efe0594408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0b6e2311ae63bbe8506b160489f631483ebac33f0cf69ce177a22f96f907ef3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6e2311ae63bbe8506b160489f631483ebac33f0cf69ce177a22f96f907ef3a->enter($__internal_0b6e2311ae63bbe8506b160489f631483ebac33f0cf69ce177a22f96f907ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0b6e2311ae63bbe8506b160489f631483ebac33f0cf69ce177a22f96f907ef3a->leave($__internal_0b6e2311ae63bbe8506b160489f631483ebac33f0cf69ce177a22f96f907ef3a_prof);

        
        $__internal_0923fe9dfb1ea1f8406f499077729508f9238b5f62b5c9c0dbfd0efe0594408e->leave($__internal_0923fe9dfb1ea1f8406f499077729508f9238b5f62b5c9c0dbfd0efe0594408e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_854f7aea55332bf0991fa4081e1a4d6bf44ffdda8b80df486dfa2e601c52e737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854f7aea55332bf0991fa4081e1a4d6bf44ffdda8b80df486dfa2e601c52e737->enter($__internal_854f7aea55332bf0991fa4081e1a4d6bf44ffdda8b80df486dfa2e601c52e737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_47f9257719eb1b365fc2d346d3a3db33273ac8e9f37186c41ea9aa4e6711324a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f9257719eb1b365fc2d346d3a3db33273ac8e9f37186c41ea9aa4e6711324a->enter($__internal_47f9257719eb1b365fc2d346d3a3db33273ac8e9f37186c41ea9aa4e6711324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_47f9257719eb1b365fc2d346d3a3db33273ac8e9f37186c41ea9aa4e6711324a->leave($__internal_47f9257719eb1b365fc2d346d3a3db33273ac8e9f37186c41ea9aa4e6711324a_prof);

        
        $__internal_854f7aea55332bf0991fa4081e1a4d6bf44ffdda8b80df486dfa2e601c52e737->leave($__internal_854f7aea55332bf0991fa4081e1a4d6bf44ffdda8b80df486dfa2e601c52e737_prof);

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
