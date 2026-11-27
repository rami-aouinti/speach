<?php
namespace Tests\Feature;
use Tests\TestCase;
class HealthCheckTest extends TestCase
{
    public function test_health_endpoint_returns_successful_json_response(): void
    {
        $this->getJson('/api/health')->assertOk()->assertJsonPath('status', 'ok')
            ->assertJsonPath('application', 'Speach')->assertJsonStructure(['status', 'application', 'timestamp']);
    }
    public function test_homepage_returns_react_application_shell(): void
    {
        $this->withoutVite();
        $this->get('/')->assertOk()->assertSee('id="app"', false)->assertSee('Speach');
    }
}
