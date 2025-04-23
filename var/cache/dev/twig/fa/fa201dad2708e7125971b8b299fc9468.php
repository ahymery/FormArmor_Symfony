<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/client.html.twig */
class __TwigTemplate_66ecc35ea5d09c317d7bb6b3bbc3cf48 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'FormArmor_body' => [$this, 'block_FormArmor_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/client.html.twig"));

        $this->parent = $this->loadTemplate("admin_layout.html.twig", "Admin/client.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_FormArmor_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        yield "\t<h2>AFFICHAGE DES CLIENTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Statut</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Code postal</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compta</th>
\t\t\t<th>Bureautique</th>
\t\t\t<th colspan =\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesClients"]) || array_key_exists("lesClients", $context) ? $context["lesClients"] : (function () { throw new RuntimeError('Variable "lesClients" does not exist.', 19, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            yield "\t\t\t\t<tr ";
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) % 2 == 0)) {
                yield " class=\"success\" ";
            } else {
                yield " class=\"info\" ";
            }
            yield ">
\t\t\t\t\t<td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "statut", [], "any", false, false, false, 22), "type", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "username", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "cp", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "ville", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nbhcompta", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nbhbur", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
\t\t\t\t\t<td><a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminClientModif", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminClientSupp", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t</tbody>
\t</table>
\t
\t";
        // line 36
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesClients"]) || array_key_exists("lesClients", $context) ? $context["lesClients"] : (function () { throw new RuntimeError('Variable "lesClients" does not exist.', 36, $this->source); })()));
        yield "
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/client.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  179 => 36,  174 => 33,  157 => 30,  153 => 29,  149 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  111 => 20,  94 => 19,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin_layout.html.twig' %}
{% block FormArmor_body %}
\t<h2>AFFICHAGE DES CLIENTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Statut</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Code postal</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compta</th>
\t\t\t<th>Bureautique</th>
\t\t\t<th colspan =\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for client in lesClients %}
\t\t\t\t<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class=\"success\" {% else %} class=\"info\" {% endif %}>
\t\t\t\t\t<td>{{client.id}}</td>
\t\t\t\t\t<td>{{client.statut.type}}</td>
\t\t\t\t\t<td>{{client.username}}</td>
\t\t\t\t\t<td>{{client.adresse}}</td>
\t\t\t\t\t<td>{{client.cp}}</td>
\t\t\t\t\t<td>{{client.ville}}</td>
\t\t\t\t\t<td>{{client.nbhcompta}}</td>
\t\t\t\t\t<td>{{client.nbhbur}}</td>
\t\t\t\t\t<td><a href=\"{{ path('adminClientModif', {'id': client.id}) }}\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"{{ path('adminClientSupp', {'id': client.id}) }}\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t
\t{{ knp_pagination_render(lesClients) }}
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
{% endblock %}", "Admin/client.html.twig", "C:\\wamp64\\www\\FormArmor\\templates\\admin\\client.html.twig");
    }
}
