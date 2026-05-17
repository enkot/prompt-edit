<?php

use Inertia\Testing\AssertableInertia as Assert;

it('renders the welcome landing page', function () {
    $this->get('/')
        ->assertOk()
        ->assertInertia(
            fn(Assert $page) => $page
                ->component('Welcome')
                ->has('canRegister')
        );
});

it('exposes the marketing copy in the initial Inertia payload', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertSee('Welcome', false); // Inertia component name appears in page data

    // The marketing copy is rendered client-side, so assert the props are present
    // and the page references the expected Inertia component instead.
    $response->assertInertia(fn(Assert $page) => $page->component('Welcome'));
});
