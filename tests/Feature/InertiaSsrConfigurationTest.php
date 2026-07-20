<?php

it('has an explicit production SSR entrypoint and bundle', function () {
    expect(config('inertia.ssr.enabled'))->toBeTrue()
        ->and(config('inertia.ssr.bundle'))->toBe(base_path('bootstrap/ssr/ssr.js'))
        ->and(resource_path('js/ssr.ts'))->toBeFile();
});
