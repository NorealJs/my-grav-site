<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/05.events-and-activities */
class __TwigTemplate_9b4356faa7a70fdee366a18bd4c90c4c extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<h1>Events &amp; Activities</h1>
<p>Here are the upcoming and previous activities of our organization.</p>
<h2>Upcoming Events</h2>
<table>
<thead>
<tr>
<th>Event</th>
<th>Date</th>
<th>Location</th>
</tr>
</thead>
<tbody>
<tr>
<td>Organization Meeting</td>
<td>September 20, 2026</td>
<td>Activity Room</td>
</tr>
<tr>
<td>Student Orientation</td>
<td>September 25, 2026</td>
<td>School Hall</td>
</tr>
<tr>
<td>Organization Week</td>
<td>October 5–9, 2026</td>
<td>School Campus</td>
</tr>
</tbody>
</table>
<h2>Previous Activities</h2>
<ul>
<li>Student Orientation Program</li>
<li>School Organization Fair</li>
<li>Community Outreach Activity</li>
<li>Student Leadership Seminar</li>
</ul>
<p>Check this page regularly for new events and activities.</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/05.events-and-activities";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Events &amp; Activities</h1>
<p>Here are the upcoming and previous activities of our organization.</p>
<h2>Upcoming Events</h2>
<table>
<thead>
<tr>
<th>Event</th>
<th>Date</th>
<th>Location</th>
</tr>
</thead>
<tbody>
<tr>
<td>Organization Meeting</td>
<td>September 20, 2026</td>
<td>Activity Room</td>
</tr>
<tr>
<td>Student Orientation</td>
<td>September 25, 2026</td>
<td>School Hall</td>
</tr>
<tr>
<td>Organization Week</td>
<td>October 5–9, 2026</td>
<td>School Campus</td>
</tr>
</tbody>
</table>
<h2>Previous Activities</h2>
<ul>
<li>Student Orientation Program</li>
<li>School Organization Fair</li>
<li>Community Outreach Activity</li>
<li>Student Leadership Seminar</li>
</ul>
<p>Check this page regularly for new events and activities.</p>", "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/05.events-and-activities", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
