<?php

namespace Tests\Feature;

use App\Models\Term;
use App\Traits\FeatureTestTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TermTest extends TestCase
{
    use RefreshDatabase;
    use FeatureTestTrait;

    public function test_unauthorized_user_cannot_view_all_terms()
    {
        $this->unauthorized_user()
            ->get('/dashboard/terms')
            ->assertForbidden();
    }

    public function test_authorized_user_can_view_all_terms()
    {
        $this->authorized_user(['read term'])
            ->get('/dashboard/terms')
            ->assertSuccessful();
    }

    public function test_unauthorized_user_cannot_view_a_term()
    {
        $this->unauthorized_user()
            ->get('/dashboard/terms/1')
            ->assertForbidden();
    }

    public function test_authorized_user_can_view_a_term()
    {
        $this->authorized_user(['read term'])
            ->get('/dashboard/terms/1')
            ->status(404);
    }

    public function test_unauthorized_user_can_not_view_create_term()
    {
        $this->unauthorized_user()
            ->get('/dashboard/terms/create')
            ->assertForbidden();
    }

    public function test_authorized_user_can_view_create_term()
    {
        $this->authorized_user(['create term'])
            ->get('/dashboard/terms/create')
            ->assertSuccessful();
    }

    public function test_unauthorized_user_can_not_store_a_term()
    {
        $this->unauthorized_user()
            ->post('/dashboard/terms')
            ->assertForbidden();
    }

    public function test_authorized_user_can_store_a_term()
    {
        $this->authorized_user(['create term'])
            ->post('/dashboard/terms', ['name' => 'Test term', 'academic_year_id' => 1]);

        $this->assertDatabaseHas('terms', ['name' => 'Test term', 'academic_year_id' => 1]);
    }

    public function test_unauthorized_user_can_not_update_a_term()
    {
        $term = Term::factory()->create();

        $this->unauthorized_user()
            ->put("/dashboard/terms/$term->id", ['name' => 'Test term', 'academic_year_id' => 1])
            ->assertForbidden();
    }

    public function test_authorized_user_can_update_a_term()
    {
        $term = Term::factory()->create();

        $this->authorized_user(['update term'])
            ->put("/dashboard/terms/$term->id", ['name' => 'Test term']);
        $this->assertDatabaseHas('terms', [
            'id'   => $term->id,
            'name' => 'Test term',
        ]);
    }

    public function test_unauthorized_user_can_not_delete_a_term()
    {
        $term = Term::factory()->create();

        $this->unauthorized_user()
            ->delete("/dashboard/terms/$term->id")
            ->assertForbidden();
    }

    public function test_authorized_user_can_delete_a_term()
    {
        $term = Term::factory()->create();

        $this->authorized_user(['delete term'])
            ->delete("/dashboard/terms/$term->id");

        $this->assertModelMissing($term);
    }

    public function test_unauthorized_user_can_not_set_term()
    {
        $this->unauthorized_user()
            ->post('/dashboard/terms/set', ['term_id' => 1])
            ->assertForbidden();
    }

    public function test_authorized_user_can_set_term()
    {
        $term = Term::factory()->create();

        $this->authorized_user(['set term'])
            ->post('/dashboard/terms/set', ['term_id' => $term->id]);

        $this->assertDatabaseHas('schools', [
            'id' => auth()->user()->school_id,
            'term_id' => $term->id,
        ]);
    }
}
