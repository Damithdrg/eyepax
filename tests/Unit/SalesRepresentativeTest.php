<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\SalesRepresentative;
use App\Models\User;
use App\Models\WorkingRoute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class SalesRepresentativeTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_sales_representive()
    {
        $user = User::factory()->create();
        $workingRoute = WorkingRoute::factory()->create();
        $salesRepresentative = SalesRepresentative::factory()->for($user)->create();
        $salesRepresentative->workingRoutes()->save($workingRoute);

        
        $this->assertTrue(true);
    }
}
